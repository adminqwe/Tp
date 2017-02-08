<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;

class HomeRegisterController extends Controller
{
    //加载模板页面
    public function register(){
        // echo "前台页面";
        return view('HomeRegister.register');
    }
    //生成验证码
    public function vcode(){
            ob_clean();//清除操作
        //实例化验证码类库
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        session(['vcode'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        //输出验证码的方法
        $builder->output();
        // die();
    }
    //执行注册操作
    public function doregister(Request $request){
        // dd($request->all());
        // dd(session('vcode'));

        // laravel自带的验证操作
        // $this->validate($request,[
        //     //验证规则
        //     'email'=>'required|email|unique:users,email',
        //     'password'=>'required|regex:/\w{2,8}/',
        //     'repassword'=>'required|same:password',
        //     ],[
        //     //规则的描述
        //     'email.required'=>'邮箱不能为空',
        //     'email.email'=>'邮箱格式不对',
        //     'email.unique' => '邮箱已存在',
        //     'password.required'=>'密码不能为空',
        //     'password.regex'=>'密码必须是2-8位的任意数字字母下划线',
        //     'repassword.required'=>'确认密码不能为空',
        //     'repassword.same'=>'两次密码不一致',
        //     ]);
        
             // 检测验证码
        if($request->input('vcode')!=session('vcode')){
            return back()->with('error','验证码错误');
        }

        // 执行数据库的插入操作
        $data=$request->only(['email','password']);
        $data['password']=Hash::make($data['password']);
        $data['token']=str_random(50);
        $data['status']=0;
        if($id=DB::table('users')->insertGetId($data)){
            $this->sendMail($data['email'],$id,$data['token']);
            echo "邮件发送成功，请到注册邮箱去激活用户";
        }else{
            echo "注册失败";
        }
    }
    public function sendMail($email,$id,$token){
        //在闭包函数内部不能直接使用闭包函数之外的变量，如果想要使用，需要用use
        Mail::send('mail.jihuo',['id'=>$id,'token'=>$token],function($message)use($email){
            $message->to($email);
            $message->subject('注册测试邮件');
        });
    }
    //测试邮件发送(发送内容是原始字符串)
    public function test(){
        // $message 消息生成器 （里面有方法to subject）
        Mail::raw('这是测试邮件',function($message){
            $message->to('379586264@qq.com');//接收方
            $message->subject('邮件测试');
        });
    }
    //发送内容是模板
    public function tests(){
        Mail::send('mail.jihuo',['id'=>10,'token'=>'asdasd'],function($message){
            $message->to('379586264@qq.com');
            $message->subject('注册测试邮件');
        });
    }
    //激活
    public function jihuo(Request $request){
        //根据传过来的id获取用户的数据
        $user=DB::table('users')->where('id','=',$request->input('id'))->first();
        //判断当前的token参数值是否和数据库的token相同
        if($request->input('token')==$user->token){
            $s['status']=2;
            //执行更改状态语句
            if(DB::table('users')->where('id','=',$request->input('id'))->update($s)){
                echo "用户已经激活，请登录";
            }else{
                echo "用户激活失败，请重新激活";
            }
        }
    }
    //加载登陆界面
    public function login(){
        return view('HomeRegister.login');
    }
//============================执行登录======================================
    public function dologin(Request $request){
        // dd($request->all());
        //获取登录的用户数据
        $info=DB::table('users')->where('email','=',$request->input('email'))->first();
        // dd($info);
        //检测密码
        if($info){
            if(Hash::check($request->input('password'),$info->password)){
                if($info->status==2){
                    // echo "登录成功";
                    session(['email'=>$info->email]);
                    session(['hid'=>$info->id]);
                    return redirect('/home/index');
                }
            }else{
                    // echo "登录失败";
                    return redirect('/home/login')->with('error','密码错误');
            }
        }else{
            return redirect('/home/login')->with('error','请输入正确的用户名');
        }
    }
    //忘记密码
    public function forget(){
        //加载忘记密码的模板
        return view('HomeRegister.forget');
    }
    //发送邮件找回密码
     public function findMail($email,$id,$token){
            //在闭包函数里不能够直接使用闭包函数外部的变量，如果想使用 use
            Mail::send('Mail.find',['id'=>$id,'token'=>$token],function($message)use($email){
                $message->to($email);
                $message->subject('密码找回邮件');
            });
        }
//===========================密码找回操作============================
    public function doforget(Request $request){
        //发送邮件找回密码
        //获取数据表的数据
        // dd($request->all());
        $info=DB::table('users')->where('email','=',$request->input('email'))->first();
        // dd($info);
        $this->findMail($info->email,$info->id,$info->token);
        echo "邮件发送成功，请到邮箱找回密码";
    }
//===============================重置密码===========================
    public function reset(Request $request){
        //获取数据库的数据
        $info=DB::table('users')->where('id','=',$request->input('id'))->first();
        if($request->token==$info->token){
            //加载重置密码的模板
            return view('HomeRegister.reset',['info'=>$info]);
        }
    }
//=================执行重置密码操作==================================
    public function doreset(Request $request){
        // dd($request->all());
        //laravel自带的验证规则
        $this->validate($request,[
            'password'=>'required|regex:/\w{2,8}/',
            'repassword'=>'required|same:password',
            ],[
            //对规则的描述
            'password.required'=>'密码不能为空',
            'repassword.required'=>'确认密码不能为空',
            'password.regex'=>'密码必须为4-8位的数字字母下滑线',
            'repassword.same'=>'两次输入密码不一致',
            ]);
        //获取id
        $id=$request->input('id');
        //获取新密码
        $password=$request->input('password');

        //把密码加密
        $data['password']=Hash::make($password);
        //重置token
        $data['token']=str_random(50);
        //执行数据库的修改操作
        if(DB::table('users')->where('id','=',$id)->update($data)){
            //如果修改成功则跳回到登录界面
            return redirect('/home/login');

        }else{
            echo "密码找回失败，请重新设置";
        }
    }
    //================================================================
    //静态方法
    public static function getCatesBypid($pid){
        //获取数据
        $s=DB::table('cates')->where('pid','=',$pid)->get();
        // $data=[];
        //遍历
        foreach($s as $key=>$value){
            $value->sub=self::getCatesBypid($value->id);
            // $data[]=$value;
        }
        return $s;
    } 

//==============================主页==================================================
 //无限分类的递归操作
    public function index(){
        $list=self::getCatesBypid(0);
        // dd($list);
        $link=self::link();
        $pic=self::pic();
        $shop=self::shop();
        $ads=self::ads();
        // dd($shop);
    
        //加载模板 分配数据
        return view('HomeRegister.index',['list'=>$list,'link'=>$link,'pic'=>$pic,'shop'=>$shop,'ads'=>$ads]);

    }

//===========================================================================
    //Ajax检测邮箱
    public function youxiang(Request $request){
        //检测邮箱是否存在
        if(DB::table('users')->where('email','=',$request->name)->first()){
            //如果邮箱已经存在，则返回1
            echo "1";
        }else{
            //如果邮箱不存在，则返回0，可以注册
            echo "0";
        }
    }
//==========================退出前台页面========================================
    public function logout(Request $request){
        $request->session()->pull('email');
        //跳转到前台登陆页面
        return redirect('/home/login');
    }
//=============================静态方法==========================================
//友情链接
public static function link(){
    //获取友情连接数据
    $s=DB::table('link')->get();
    // dd($s);
    return $s;
}
//图片轮播
public static function pic(){
    //获取图片轮播属性
    $s=DB::table('pics')->get();
    return $s;
}
//获取类别信息
public static function t_list(){
    //获取类别信息
    $list=DB::table('cates')->where('pid','=',0)->get();

    //类别表和商品表关联
    //遍历
    // foreach($s as $key=>$value){
    //     $s[$key]->shop=DB::table('shops')->select(DB::raw('*,cates.name as cname,shops.name as sname,shops.id as sid'))->join('cates','shops.cate_id','=','cates.id')->where('shops.cate_id','=',$value->id)->get();
    // }
    //获取类别信息
    foreach($list as $k=>$v){
        $res=DB::table('cates')->where('pid','=',$v->id)->get();
        //每个顶级下的二级分配
        $list[$k]->er=$res;
        foreach($res as $key=>$val){
            $arr=DB::table('cates')->where('pid','=',$val->id)->get();
            $list[$k]->er[$key]->san=$arr;
        }
    }
    return $list;
}
//类别表和商品表的关联
public static function shop(){
    //$list为返回的所有的分类的集合 子元素为每一个一级分类
    $shop=self::t_list();
    //遍历
    foreach($shop as $k=>$v){
        //$list的子元素为每一个一级分类
        foreach($v->er as $key=>$value){
            foreach($value->san as $m=>$n){
               $a=DB::table('shops')->where('cate_id','=',$n->id)->get();            
                // $value=>san为二级分类下的所有三级分类的集合
                // $n为所有的三级分类的信息 id  name pid path
                // $n->shop为三级分类下的所有商品     
                foreach($a as $b){
                    $v->shop[]=$b;
                } 

            }
        }
    }
    return $shop;
    
} 
//Ajax结合选项卡动态操作数据库
public static function chooses(Request $request){
    if(!$request->ajax()){
        //获取5条信息
        //加载模板
        return view('HomeRegister.index');
    }
    // echo "111";
    //如果是ajax请求
    $n=isset($_GET['n'])?$_GET['n']:"";
    //获取类别信息
    // $s=DB::table('cates')->get();
    //类别表与商品表关联
    $s=DB::table('shops')->select(DB::raw('*,cates.name as cname,shops.name as sname,shops.id as sid'))->join('cates','shops.cate_id','=','cates.id')->where('shops.cate_id','=',$n)->get();
    // dd($s);

    //把php数据转换为json数据
    echo json_encode($s);
    // return $s;
}
//广告投放
public function ads(){
    //获取广告所有信息
    $s=DB::table('ads')->get();
    return $s;
}




}
