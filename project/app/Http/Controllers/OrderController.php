<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //订单列表页
    public function getIndex(){
        // $list=DB::table('orders')->paginate(3);
        $list=DB::table('address')->join('orderss','orderss.address_id','=','address.id')->select(DB::raw("*,address.id as aid"))->paginate(5);
        // dd($list);
        //加载模板
        return view('Order.index',['list'=>$list]);
    }
    //加载订单详情页面
    public function getOrderinfo($id){
    	$list=DB::table('order_goods')->where('order_id','=',$id)->join('shops','order_goods.goods_id','=','shops.id')->select(DB::raw("*,order_goods.num as onum"))->paginate(5);
    	// dd($list);
    	return view('Order.info',['list'=>$list]);
    }
    //确认付款
    public function getQrfk($id){
        $data['status']=2;
        if(DB::table('orderss')->where('id','=',$id)->update($data)){
            echo "付款成功";
            return redirect('/home/info/order');
        }else{
            echo "付款失败";
        }
        
    }
    //确认发货
    public function getQrfh($id){
    	$data['status']=3;
    	if(DB::table('orderss')->where('id','=',$id)->update($data)){
    		echo "发货成功";
            return redirect('/admins/order');
    	}else{
            echo "发货失败";
        }
    }
    //确认收货
    public function getQrsh($id){
        $data['status']=4;
        if(DB::table('orderss')->where('id','=',$id)->update($data)){
            echo "收货成功";
            return redirect('/home/info/order');
        }else{
            echo "收货失败";
        }
    }


}
