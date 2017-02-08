<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Config;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeInfoController extends Controller
{   
    //个人中心
    public function index(){
        // dd(session('hid'));
        $id=session('hid');
        $list=DB::table('users')->where('id','=',$id)->first();
        // dd($list);
        return view('Info.index',['list'=>$list]);
    }
    //订单管理
    public function order(){
        //获取当前登陆用户的id
        //当前登陆用户的id为订单表的user_id
        $id=session('hid');
        //获取订单信息
        $list=DB::table('orderss')->where('user_id','=',$id)->get();
        // dd($list);
        foreach($list as $value){
            $a[]=DB::table('shops')->select(DB::raw('*,shops.id as sid'))->join('order_goods','shops.id','=','order_goods.goods_id')->join('orderss','orderss.id','=','order_goods.order_id')->where('orderss.id','=',$value->id)->get();
        }
        // dd($a);
        return view('Info.order',['list'=>$list,'a'=>$a]);

    }
    //修改个人中心的信息
    public function update(Request $request){
        // dd($request->all());
        //获取参数信息
        $id=$request->input('id');
        $data=$request->except('_token','id');
        // dd($data);
        if($request->hasFile('pic')){
            //获取后缀
            $exten=$request->file('pic')->getClientOriginalExtension();
            //随机图片名字
            $name=time()+rand(1,9999999);
            //移动图片到指定的目录
            $request->file('pic')->move(Config::get('app.upload'),$name.".".$exten);
            //图片路径处理
        $data['pic']=trim(Config::get('app.upload')."/".$name.".".$exten,".");
        }
        
        // dd($data);
        //执行数据库的更新操作
        $id=DB::table('users')->where('id','=',$id)->update($data);
        if($id){
            echo "商品添加成功";
            return redirect('/home/info/index');
        }else{
            echo "商品添加失败";
            return back();
        }
    }

}
