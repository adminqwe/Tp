<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    //加载后台登陆界面
    public function getIndex(){
        // echo "这是后台登陆界面";
        return view('AdminLogin.index');
    }
    //执行登陆
    public function postDologin(Request $request){
        // dd($request->all());
        //获取登陆数据的信息
        $user=DB::table('users')->where('username','=',$request->input('username'))->first();
        // dd($user);
        if($user==null){
            return back()->with('error','请输入正确的用户名');
        }else{
        //用 Hash check密码检测
        if(Hash::check($request->input('password'),$user->password)){
            //把用户信息存储在session里面
                session(['aid'=>$user->id]);
                session(['username'=>$request->input('username')]);

            //跳转到后台首页
                return redirect('/admin');
        }else{
                return back()->with('error','密码输入错误');
            }
        }
    }
    public function getLogout(Request $request){
        $request->session()->pull('aid');
        // dd($request->session()->has('aid'));
        //跳转到后台登陆界面
        return redirect('admins/admin/index');
    }
}
