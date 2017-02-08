<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    //Ajax分页
    public function page(Request $request){
        
        // DB::table('users')->paginate(2);
        // select * from users limit 4,4;
        //获取users表的总数据
        $count=count(DB::table('users')->get());
        // dd($count);
        //定义每页显示的数据条数
        $rev=2;
        //获取总页数
        $sums=ceil($count/$rev);
        //获取当前页的参数
        $page=$request->input('page');
        echo $page;
        if(empty($page)){
            $page=1;
        }
        //获取偏移量
        $offset=($page-1)*$rev;
        // echo $offset;
        //判断请求是否来自Ajax   Ajax分离
        $list=DB::select("select * from users limit $offset,$rev");
        //使用sql语句查询数据库
        //遍历 数字分页
        $pp=array();
        for($i=1;$i<$sums;$i++){
            $pp[$i]=$i;
        }
        if($request->ajax()){
            // return  "sss";
            return view('Users.test',['list'=>$list]);
        }
        return view('Users.index',['pp'=>$pp,'list'=>$list]);
    } 
}
