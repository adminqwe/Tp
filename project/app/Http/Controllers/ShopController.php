<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    //为了添加分类准备的方法
    public static function getCate(){
        // $list=DB::select('select *,concat(path,",",id) as paths from cates order by paths');
        $list=DB::table('cates')->select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths')->get();
        //遍历
        foreach($list as $key=>$value){
            // var_dump($list);
            $s=$value->path;
            // var_dump($s);
            //将字符串拆分成数组
            // $arr=explode(',',$s);
            // var_dump($arr);
            //获取数组的长度
            // $len=count($arr);
            // var_dump($len);
            //获取逗号个数
            // $dlen=$len-1;
            // var_dump($dlen);
            $dlen=substr_count($s,',');
            // var_dump($dlen);
            //拼接分割符
            $value->name=str_repeat('--|',$dlen).$value->name;
        }
        return $list;
    }
    //商品添加模块
    public function getAdd(){
        //获取类别的信息,调用静态方法
        $list=CateController::getCate();
        return view('Shop.add',['list'=>$list]);
    }
       //执行添加操作
    public function postInsert(Request $request){
        //获取参数信息
        $data=$request->except('_token');
        // dd($data);
        if($request->hasFile('pic')){
            //获取后缀
            $exten=$request->file('pic')->getClientOriginalExtension();
            //随机图片名字
            $name=time()+rand(1,9999999);
            //移动图片到指定的目录
            $request->file('pic')->move(Config::get('app.upload'),$name.".".$exten);
        }
        //图片路径处理
        $data['pic']=trim(Config::get('app.upload')."/".$name.".".$exten,".");
        // dd($data['pic']);
        //执行数据库的添加操作
        $id=DB::table('shops')->insert($data);
        if($id){
            // echo "商品添加成功";
            return redirect('/admins/shop/index')->with('success','添加成功');
        }else{
            // echo "商品添加失败";
            return back()->with('error','添加失败');
        }
    }
    //列表页
    public function getIndex(){
        //获取数据
        // $list=DB::table('shops')->get();     
        // select * from cates,shops where shop.cate_id=cate.id
        //一般操作
        // $list=DB::select('select *,cates.name as cname,shops.name as sname,cates.id as cid,shops.id as sid from cates,shops where shops.cate_id=cates.id');
        //连贯方法
        $list=DB::table('cates')->join('shops','cates.id','=','shops.cate_id')->select(DB::raw('*,shops.name as sname,cates.name as cname,cates.id as cid,shops.id as sid'))->paginate(3);
        // dd($list);
        //加载模板
        return view('Shop.index',['list'=>$list]);
    }
    //执行删除
    public function getDelete($id){
        //获取需要删除的数据
        $info=DB::table('shops')->where('id','=',$id)->first();
        // $a=$info->descr;
        // dd($a);
        // preg_match('/<p><img src="(.*?)" title="(.*?)" alt="(.*?)"\/><\/p>/',$a,$b);
        // dd($b);
        // $c=".".$b[1];
        // dd($c);
        //获取需要删除的图片的路径
        $ss=".".$info->pic;
        $s=DB::table('shops')->where('id','=',$id)->delete();
        if($s){
            unlink($ss);   
            // unlink($c);
            return redirect('/admins/shop/index')->with('success','删除成功');            
        }else{
            return redirect('/admins/shop/index')->with('error','删除失败');
        }
    }
     //加载需要修改的模板
    public function getEdit($id){
        //获取需要修改的数据
        $info=DB::table('shops')->where('id','=',$id)->first();
        //加载视图，同时分配数据
        return view('Shop.edit',['info'=>$info,'cate'=>self::getCate()]);
    }
    //执行修改
    public function postUpdate(Request $request){
        // dd($request->all());
        $data=$request->except(['_token','id']);
        // dd($data);
        //获取需要修改的数据
        $info=DB::table('shops')->where('id','=',$request->input('id'))->first();
        // dd($info);
        $ss=".".$info->pic;
        // dd($ss);
        //判断是否有图片上传
        if($request->hasFile('pic')){
            //获取图片后缀
            $exten=$request->file('pic')->getClientOriginalExtension();
            //随机图片名字
            $s=time()+rand(1,99999);
            $request->file('pic')->move(Config::get('app.upload'),$s.".".$exten);
            // dd($data);
            // $data['pic']=Config::get('app.upload')."/".$s.".".$exten;
            //处理 绝对路径
            $data['pic']=trim(Config::get('app.upload').'/'.$s.".".$exten,'.');
            // dd($data);
            //执行数据库的修改操作
            if(DB::table('shops')->where('id','=',$request->input('id'))->update($data)){
                unlink($ss);
                return redirect('/admins/shop/index')->with('success','修改成功');
            }else{
                return back()->with('error','修改失败');
            }
        }else{
            // dd($data);
            //执行数据库的修改操作
            if(DB::table('shops')->where('id','=',$request->input('id'))->update($data)){
                return redirect('/admins/shop/index')->with('success','修改成功');
            }else{
                return back()->with('error','修改失败');
            }
        }
    }

}
