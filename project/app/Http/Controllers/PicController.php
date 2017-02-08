<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
class PicController extends Controller
{
    //加载添加图片轮播的模板
    public function getAdd(){
        //加载视图
        return view('Pic.add');
    }
    //执行添加
    public function postInsert(Request $request){
        // dd($request->all());
                $data=$request->except('_token');
        //上传文件
        if($request->hasFile('pic')){
            //获取图片后缀
            $exten=$request->file('pic')->getClientOriginalExtension();
            //随机图片名字
            $s=time()+rand(1,99999);
            $request->file('pic')->move(Config::get('app.upload'),$s.".".$exten);
            //图片添加水印操作
            //实例化ImageManager
            // $image=new ImageManager();
            // $image->make(Config::get('app.upload').'/'.$s.'.'.$exten)->resize(300,300)->insert("./images/logo.png","bottom-right",5,5)->save(Config::get('app.upload').'/t_'.$s.'.'.$exten);

        }
        // dd($data);
        // $data['pic']=Config::get('app.upload')."/".$s.".".$exten;
        //处理 绝对路径
        $data['pic']=trim(Config::get('app.upload').'/'.$s.".".$exten,'.');
        // dd($data);
        //执行数据库的插入操作
        if(DB::table('pics')->insert($data)){
            // echo "111";
            return redirect('/admins/pic/index')->with('success','添加成功');
        }else{
            // echo "000";
            return back()->with('error','添加失败');
        }
    }
    //图片列表
    public function getIndex(){
        $list=DB::table('pics')->paginate(3);
        return view('Pic.index',['list'=>$list]);
    }
    //执行删除
    public function getDelete($id){
        //获取需要删除的数据
        $info=DB::table('pics')->where('id','=',$id)->first();
        //获取需要删除的图片的路径
        $ss=".".$info->pic;
        $s=DB::table('pics')->where('id','=',$id)->delete();
        if($s){
            unlink($ss);
            return redirect('/admins/pic/index')->with('success','删除成功');            
        }else{
            return redirect('/admins/pic/index')->with('error','删除失败');
        }
    }
    //加载需要修改的模板
    public function getEdit($id){
        //获取需要修改的数据
        $info=DB::table('pics')->where('id','=',$id)->first();
        //加载视图，同时分配数据
        return view('Pic.edit',['info'=>$info]);
    }
    //执行修改
    public function postUpdate(Request $request){
        // dd($request->all());
        $data=$request->except(['_token','id']);
        //获取需要修改的数据
        $info=DB::table('pics')->where('id','=',$request->input('id'))->first();
        $ss=".".$info->pic;
        //判断是否有图片上传
        if($request->hasFile('pic')){
            //获取图片后缀
            $exten=$request->file('pic')->getClientOriginalExtension();
            //随机图片名字
            $s=time()+rand(1,99999);
            $request->file('pic')->move(Config::get('app.upload'),$s.".".$exten);
            // dd($data);
            // $data['pic']=Config::get('app.upload')."/".$s.".".$exten;
            //处理 绝对路径
            $data['pic']=trim(Config::get('app.upload').'/'.$s.".".$exten,'.');
            // dd($data);
            //执行数据库的修改操作
            if(DB::table('pics')->where('id','=',$request->input('id'))->update($data)){
                unlink($ss);
                return redirect('/admins/pic/index')->with('success','修改成功');
            }else{
                return back()->with('error','修改失败');
            }
        }else{
            //执行数据库的修改操作
            if(DB::table('pics')->where('id','=',$request->input('id'))->update($data)){
                return redirect('/admins/pic/index')->with('success','修改成功');
            }else{
                return back()->with('error','修改失败');
            }
        }
    }

}
