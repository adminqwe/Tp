<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function insert(Request $request){
        //获取参数信息
        // dd($request->all());
        // dd(session('hid'));
        $data=$request->except('_token');
        $data['user_id']=session('hid');
        // dd($data);
        //执行插入数据库的操作
        $s=DB::table('address')->insert($data);
        if($s){
            return back();
        }else{
            echo "地址添加失败";
        }
    }
    public static function alladdress($id){
        return DB::table('address')->where('user_id','=',$id)->get();
    }
    public function del($id){
        // echo $id;
        DB::table('address')->where('id','=',$id)->delete();
        return redirect('/home/homeorder/insert');
    }












































    //城市级联
    public function csjl(Request $request){
        // dd($request->all());
        // return $request->all();
        //用PDO去连接数据库
        // try{
        //     $pdo=new PDO('mysql:host=localhost;dbname=district','root','');
        //     //设置字符集
        //     $pdo->exec('set names utf8');

        // }catch(PDOException $e){
        //     echo "数据库连接失败".$e->getMessage();
        //     exit;
        // }
        // //准备sql语句
        // $sql="select * from district where upid=?";
        // //返回预处理
        // $ss=$pdo->prepare($sql);
        // //绑定值
        // $ss->bindValue(1,$_GET['upid']);
        // //执行
        // $ss->execute();
        // //遍历数据
        // $list=$ss->fetchAll(PDO::FETCH_ASSOC);
        $ss=$request->input('upid');
        $list=DB::table('district')->where('upid','=',$ss)->get();
        // // var_dump($list);
        echo json_encode($list);
            }
}
