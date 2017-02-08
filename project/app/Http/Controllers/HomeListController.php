<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeListController extends Controller
{
    public function getIndex($id){
    	// echo $id;
    	// $s_list=self::a_list($id);
    	$list_t=self::s_list($id);
    	// dd($list_t);
    	$list_n=DB::table('cates')->where('id','=',$id)->first();
    	// dd($list_n);
    	//加载主页
        return view('List.index',['list_t'=>$list_t,'list_n'=>$list_n]);
    }
    public function s_list($id){
    	//根据类别id获取此类别下的所有商品数据
    	$a=DB::table('cates')->where('pid','=',$id)->get();
    	if($a){
    		foreach($a as $v){
    		$ss[]=DB::table('shops')->where('cate_id','=',$v->id)->get();
    		}
    		// dd($ss);
    		foreach($ss as $row){
				foreach($row as $rows){
    			$s[]=$rows;	
    			// dd($rows);
    			}
    		}
    		// dd($s);
    	}else{
    		$s=DB::table('shops')->where('cate_id','=',$id)->get();
    	}
    	return $s;
    }

}
