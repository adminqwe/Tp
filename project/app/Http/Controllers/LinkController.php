<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
   
    
     //加载友情链接模板
    public function getIndex(Request $request){
        //获取link数据表的信息
        $list=DB::table('link')->where('webname','like','%'.$request->input('keywords').'%')->paginate(3);
        // dd($list);
        return view('Link.index',['list'=>$list,'request'=>$request->all()]);
    }
    //加载添加友情链接模板
    public function getAdd(){
        return view('Link.add');
    }
    //执行添加链接操作
    public function postInsert(Request $request){
        // dd($request->all());
        //验证操作
        $this->validate($request,[
            //验证规则
            'webname'=>'required',
            'url'=>'required|url',
            ],[
            //规则描述
            'webname.required'=>'网站名称不能为空',
            'url.required'=>'网站地址不能为空',
            'url.url'=>'请输入正确的网站地址',
            ]);
        //执行插入数据库的操作
        $data=$request->except('_token');
        // dd($data);
        if(DB::table('link')->insert($data)){
            return redirect('/admins/link/index')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }
    //执行删除
    public function getDelete($id){
        $res=DB::table('link')->where('id','=',$id)->delete();
        if($res){
            return redirect('/admins/link/index')->with('success','删除成功');
        }else{
            return redirect('/admins/link/index')->with('error','删除失败');
        }
    }
    //加载修改链接页面同时分配需要修改的数据
    public function getEdit($id){
        //获取需要修改的链接的数据
        $info=DB::table('link')->where('id','=',$id)->first();
        return view('Link.edit',['info'=>$info]);
    }
    //执行修改
    public function postUpdate(Request $request){
        //获取修改完毕的数据
        // dd($request->all());
        $data=$request->except('_token');
        // dd($data);
        //执行数据库的修改操作
        $res=DB::table('link')->where('id','=',$request->input('id'))->update($data);
        if($res){
            return redirect('/admins/link/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }
}
