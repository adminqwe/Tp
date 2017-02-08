<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
   //加载添加评论的模板
    public function getAdd(){
        //  获取类别的数据
        $cate=CateController::getCate();
        //加载视图
        return view('Comment.add',['cate'=>$cate]);
    }
    //执行添加操作
    public function postInsert(Request $request){
        // dd($request->all());
        $data=$request->except('_token');
        $data['addtime']=date('Y-m-d H:i:s');
        $data['status']=1;
        //执行数据库的插入操作
        if(DB::table('comment')->insert($data)){
            // echo "111";
            return redirect('/admins/comment/index')->with('success','添加成功');
        }else{
            // echo "000";
            return back()->with('error','添加失败');
        }
    }
    //文章列表
    public function getIndex(){
        $list=DB::table('comment')->paginate(3);
        // $list=DB::table('cates')->join('shops','cates.id','=','shops.cate_id')->select(DB::raw('*,shops.name as sname,cates.name as cname,cates.id as cid,shops.id as sid'))->paginate(3);
        // dd($list);
        return view('comment.index',['list'=>$list]);
    }
    //加载修改的模板
    public function getEdit($id){
        //获取需要修改的数据
        $info=DB::table('comment')->where('id','=',$id)->first();
        // dd($info);
        $list=CateController::getCate();
        //加载视图，同时分配数据
        return view('Comment.edit',['info'=>$info,'cate'=>$list]);
    }
    //执行修改
    public function postUpdate(Request $request){
        // dd($request);
        $data=$request->except(['_token','id']);
        // dd($data);
        // $data['addtime']=date('Y-m-d H:i:s');
        $data['status']=2;
        //执行数据库的修改操作
        if(DB::table('comment')->where('id','=',$request->input('id'))->update($data)){
            return redirect('/admins/comment/index')->with('success','回复成功');
        }else{
            return back()->with('error','回复失败');
        }
    }
}
