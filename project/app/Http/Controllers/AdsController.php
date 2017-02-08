<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdsController extends Controller
{
    //加载广告模板
    public function getIndex(Request $request){
        //获取广告模板的全部数据信息
        $list=DB::table('ads')->where('adsname','like','%'.$request->input('keywords').'%')->paginate(5);
        // dd($list);
        return view('Ads.index',['list'=>$list,'request'=>$request->all()]);
    }
    //加载添加广告模板
    public function getAdd(){
        return view('Ads.add');
    }
    //执行文件上传
    public function postInsert(Request $request){
        // echo "sss";
        //检测是否有文件上传
        
        if($request->hasFile('pic')){
            $name=time()+rand(1,9999999);
            // dd($name);
            $ext=$request->file('pic')->getClientOriginalExtension();
            // dd($ext);
            //如果有文件上传，将上传的文件移动到指定的位置
            $request->file('pic')->move('./Uploads',$name.'.'.$ext);
        }else{
            echo "上传失败";
        }
        // dd($request->all());
        //执行数据库插入操作
        $data=$request->only(['adsname','position','url','sortrank']);
        // dd($data);
        $data['pic']="/Uploads/$name.$ext";
        // dd($data);
        //执行数据库的插入
        if(DB::table('ads')->insert($data)){
            return redirect('/admins/ads/index')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }
    //加载修改页面同时分配需要修改的数据
    public function getEdit($id){
        //获取需要修改的数据
        $info=DB::table('ads')->where('id','=',$id)->first();
        // dd($info);
        return view('Ads.edit',['info'=>$info]);
    }
    //执行修改
    public function postUpdate(Request $request){
        //获取需要修改的数据
        $data=$request->only(['adsname','position','url','sortrank']);
        // dd($data);
        //获取需要修改的数据
        $info=DB::table('ads')->where('id','=',$request->input('id'))->first();
        $ss=".".$info->pic;
        
        //检测是否有文件上传
        if($request->hasFile('pic')){
        $name=time()+rand(1,9999999);
        // dd($name);
        $ext=$request->file('pic')->getClientOriginalExtension();
        $data['pic']="/Uploads/$name.$ext";
         $request->file('pic')->move('./Uploads',$name.'.'.$ext);
        // dd($data);
        //执行数据库的修改操作
        $res=DB::table('ads')->where('id','=',$request->input('id'))->update($data);
        if($res){
            unlink($ss);
            return redirect('/admins/ads/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }else{
            //执行数据库的修改操作
            if(DB::table('ads')->where('id','=',$request->input('id'))->
                update($data)){
                
                // echo "111";
                return redirect('/admins/a/index')->with('success','修改成功');
            }else{
                // echo "000";
                return back()->with('error','修改失败');
        }
    }
}
     //执行删除
    public function getDelete($id){
        
        //获取需要修改的数据
        $info=DB::table('ads')->where('id','=',$id)->first();
        // dd($info->pic);
        
        $res=DB::table('ads')->where('id','=',$id)->delete();
        if($res){
            unlink("."."$info->pic");
            return redirect('/admins/ads/index')->with('success','删除成功');
        }else{
            return redirect('/admins/ads/index')->with('error','删除失败');
        }
    }
}
