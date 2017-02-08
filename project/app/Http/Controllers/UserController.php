<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //加载用户模块的列表页
    public function getIndex(Request $request){
        // echo "这是用户模块的列表页";
        //获取数据表的信息
        $list=DB::table('users')->where('username','like','%'.$request->input('keywords').'%')->paginate(3);
        // dd($list);
        return view('User.index',['list'=>$list,'request'=>$request->all()]);
    }
    //加载用户模块的添加页面
    public function getAdd(){
    	return view('User.add');
    }
    //执行添加
    public function postInsert(Request $request){
    	// echo "11111";
    	// dd($request->all());
    	//手动验证操作
    	// if(!$request->input('username')){
    	// 	//阻止页面提交 设置session值  with('session名','session值')
    	// 在模板页面获取session值
    	// {{session('session名')}}
    	// 	return back()->with('error','用户名不能为空');
    	// }
    	// laravel自带的验证操作
    	$this->validate($request,[
    		//验证规则
    		'username'=>'required|regex:/\w{4,8}/|unique:users,username',
    		'password'=>'required|regex:/\w{2,8}/',
    		'repassword'=>'required|same:password',
    		'email'=>'required|email'
    		],[
    		//规则的描述
    		'username.required'=>'用户名不能为空',
    		'username.regex'=>'请输入4-8位任意数字字母下划线',
    		// 'username.unique'=>'用户名不能重复',
    		'password.required'=>'密码不能为空',
    		'password.regex'=>'密码必须是2-8位的任意数字字母下划线',
    		'repassword.required'=>'确认密码不能为空',
    		'repassword.same'=>'两次密码不一致',
    		'email.required'=>'邮箱不能为空',
    		'email.email'=>'邮箱格式不对',
    		'username.unique' => '用户名已存在'
    		]);
        // dd($errors->all());
    	//执行插入数据库操作
    	$data=$request->only(['username','password','email']);
    	//密码加密(Hash加密)
    	$data['password']=Hash::make($data['password']);
    	$data['status']=1;
    	$data['token']=str_random(50);
    	// dd($data);
    	if(DB::table('users')->insert($data)){
    		return redirect('/admins/user/index')->with('success','添加成功');
    	}else{
    		return back()->with('error','添加失败');
    	}
    }
    //执行删除
    public function getDelete($id){
    	$res=DB::table('users')->where('id','=',$id)->delete();
    	if($res){
    		return redirect('/admins/user/index')->with('success','删除成功');
    	}else{
    		return redirect('/admins/user/index')->with('error','删除失败');
    	}
    }
    //加载修改页面同时分配需要修改的数据
    public function getEdit($id){
    	//获取需要修改的数据
    	$info=DB::table('users')->where('id','=',$id)->first();
    	return view('User.edit',['info'=>$info]);
    }
    //执行修改
    public function postUpdate(Request $request){
    	//获取修改完毕的数据
    	// dd($request->all());
    	$this->validate($request,[
    		//验证规则
    		'username'=>'required|regex:/\w{4,8}/',
    		'email'=>'required|email'
    		],[
    		//规则的描述
    		'username.required'=>'用户名不能为空',
    		'username.regex'=>'请输入4-8位任意数字字母下划线',
    		'email.required'=>'邮箱不能为空',
    		'email.email'=>'邮箱格式不对',
    		]);
    	$data=$request->only(['username','email']);
    	$data['status']=2;
    	$data['token']=str_random(50);
    	// dd($data);
    	//执行数据库的修改操作
    	$res=DB::table('users')->where('id','=',$request->input('id'))->update($data);
    	if($res){
    		return redirect('/admins/user/index')->with('success','修改成功');
    	}else{
    		return back()->with('error','修改失败');
    	}
    }
}
