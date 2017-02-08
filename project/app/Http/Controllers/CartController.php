<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function add(Request $request){
        // dd($request->all());
        //把商品数据存数在session里面
        $data=$request->only(['id','num','price']);
        //检测商品有没有重复的
        if(!$this->checkExists($data['id'])){
            //将一个新加入的值用push方法存储在session数组里面
            $request->session()->push('cart',$data);
         }
        //跳转到购物车页面
        return redirect('/home/cartindex');
    }
    public function index(){
        // dd(session('cart'));
        //获取session
        $s=session('cart');
        $data=[];
        if(!empty($s)){
            //遍历
            // $aaa="";
            foreach($s as $key=>$value){
                //获取当前id的商品信息
                $ss=DB::table('shops')->where('id','=',$value['id'])->first();
                $row['pic']=$ss->pic;
                $row['name']=$ss->name;
                $row['id']=$value['id'];
                $row['num']=$value['num'];
                $row['price']=$ss->price;
                // $aaa+=$row['num']*$row['price'];
                $data[]=$row;
            }
            // dd($data);
        }
        //加载购物车模板，分配变量
        return view('Cart.index',['cart'=>$data]);
    }
    //清除session
    public function clear(Request $request){
        $request->session()->flush();
    }
    //购物车的去重操作
    public function checkExists($id){
        //获取session
        $goods=session('cart');
        //当购物车为空的时候
        if(empty($goods)) return false;
        //如果不为空
        //遍历
        foreach($goods as $key=>$value){
            if($value['id']==$id){
                return true;
            }
        }
        return false;

    }
    //购物车减按钮
    public function updatee(Request $request){
        $id=$request->input('id');

        //获取session
        $data=session('cart');

        //遍历
        foreach($data as $key=>$value){
            if($value['id']==$id){
                $data[$key]['num']=$value['num']-1;
                if($data[$key]['num']<1){
                    $data[$key]['num']=1;
                }
            }
        }
        // dd($data);
        //存储session
        session(['cart'=>$data]);
        return redirect('/home/cartindex');
    }
    //购物车加按钮
    public function update(Request $request){
        $id=$request->input('id');
        //获取session
        $data=session('cart');
        //遍历
        foreach($data as $key=>$value){
            if($value['id']==$id){
                $data[$key]['num']=$value['num']+1;
                //获取数据库的信息
                $list=DB::table('shops')->where('id','=',$id)->first();
                if($data[$key]['num']>$list->num){
                    $data[$key]['num']=$list->num;
                }
            }
        }
        //存储session
        session(['cart'=>$data]);
        return redirect('/home/cartindex');
    }
    //购物车删除
    public function del(Request $request){
        $id=$request->input('id');
        //获取session
        $s=session('cart');
        //遍历
        $v=[];
        foreach($s as $key=>$value){
            if($value['id']==$id){
                //删除
                unset($s[$key]);
            }else{
                $v[]=$s[$key];
            }
            
        }
        // dd($s);
        //存储session
        session(['cart'=>$v]);
        //跳转
        return redirect('/home/cartindex');

    }
    //购物车Ajax加按钮
    public function jia(Request $request){
        $id=$request->input('n');
        //获取session
        $data=session('cart');
        //遍历
        foreach($data as $key=>$value){
            if($value['id']==$id){
                $data[$key]['num']=$value['num']+1;
                //获取数据库的信息
                //如果大于数据库的库存量，则让可以购买的最大数量等于库存量
                $list=DB::table('shops')->where('id','=',$id)->first();
                if($data[$key]['num']>$list->num){
                    $data[$key]['num']=$list->num;
                }
            }

        }
        //存储session
        session(['cart'=>$data]);
       return $data;
    }
    //购物车Ajax减按钮
    public function jian(Request $request){
        $id=$request->input('n');
        //获取session
        $data=session('cart');
        // dd($data);
        //遍历
        foreach($data as $key=>$value){
            if($value['id']==$id){
                $data[$key]['num']=$value['num']-1;
                if($data[$key]['num']<1){
                    $data[$key]['num']=1;
                }
            }
        }
        //存储session
        session(['cart'=>$data]);
       return $data;
    }
    //购物车批量删除
     public function dodel(Request $request){
        // echo "11111";
        //获取id参数
        $uname=$request->input('uname');
        //获取session
        // return $uname;
        $data=session('cart');
         // return $uname;
         //遍历
        foreach($uname as $k=>$v){
            foreach($data as $key=>$value){
                    if($value['id']==$v){
                        //删除
                        unset($data[$key]); 
                    }
                }
        }
        // 存储session
        session(['cart'=>$data]);
        return 1;
}
}
