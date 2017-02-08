<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeOrderController extends Controller
{
    //加载结算页面
    public function insert(Request $request){
        //获取参数信息
        // dd($request->all());
        //获取选中的商品的id
        $ss=explode(",",$request->input('xuanzhong'));

        // $row=[];
        foreach(session('cart') as $value){
            // $value['id'];
            if(in_array($value['id'],$ss)){
                $data['id']=$value['id'];
                $data['num']=$value['num'];
                $row[]=$data;
                //用session存储需要购买的商品信息
                session(['order_goods'=>$row]);
            }
        }
        // dd($row);
        
        // dd(session('order_goods'));
        $total="";
        $sss=[];
        foreach(session('order_goods') as $value){
            $ss=DB::table('shops')->where('id','=',$value['id'])->first();
            $rows['pic']=$ss->pic;
            $rows['name']=$ss->name;
            $rows['id']=$value['id'];
            $rows['num']=$value['num'];
            $rows['price']=$ss->price;
            $total+=$rows['price']*$rows['num'];
            $sss[]=$rows;
        }
        // dd($sss);

        //加载结算页面
        return view('HomeOrder.address',['alladdress'=>AddressController::alladdress(session('hid')),'data'=>$sss,'total'=>$total]);
    }
    //生成订单
    public function create(Request $request){
        // dd($request->all());
        //获取选中的地址的id
        $data=$request->only('address_id','total');
        //随机生成订单号
        $data['order_num']=$this->getNum();
        //当前用户的id
        $data['user_id']=session('hid');
        //新订单的的状态为1
        $data['status']=1;
        $data['addtime']=date('Y-m-d H:i:s');
        // dd($data);
        //执行数据库的插入操作
        $ss=DB::table('orderss')->insertGetId($data);
        // dd($ss);
        if($ss){
            $d=[];
            //向订单详情表插入数据
            // dd($request->session()->get('order_goods'));
            foreach($request->session()->get('order_goods') as $key=>$value){
                $tmp['goods_id']=$value['id'];//购买商品的id
                $tmp['order_id']=$ss;//订单id
                $tmp['num']=$value['num'];//购买商品的数量
                $d[]=$tmp;
            }
            // dd($d);
            //执行订单详情数据库的插入操作
            if(DB::table('order_goods')->insert($d)){
                // echo "订单提交成功";
                return redirect('/home/success');
            }else{
                echo "订单提交失败";
            }
        }
        // dd($data);
    }
    //生成订单号
    public function getNum(){
        return time().rand(10000000000,99999999999);
    }
    //生成订单成功
    public function success(){
        $s=DB::select("select * from orderss order by id desc limit 1");
        // dd($s);
        $c=[];
        foreach($s as $row){
            $order_num=$row->order_num;//订单编号
            $total=$row->total;//订单总价
            $address_id=$row->address_id;//订单地址id
        }
        //通过订单地址id查询当前的数据
        $address=DB::table('address')->where('id','=',$address_id)->first();
        // dd($address);
        return view('HomeOrder.success',['order_num'=>$order_num,'total'=>$total,'address'=>$address]);
    }



}
