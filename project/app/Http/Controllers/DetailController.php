<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class DetailController extends Controller
{
    //获取商品详情数据
    public function getIndex($id){
        // echo $id;
        $s=DB::table('shops')->where('id','=',$id)->first();
        // dd($s);
        //加载商品详情页面模板
        return view('Detail.index',['s'=>$s]);
    }
}
