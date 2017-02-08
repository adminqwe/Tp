<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleInsertRequest;
use Config;
use Intervention\Image\ImageManager;
class ArticleController extends Controller
{
    //加载添加文章的模板
    public function getAdd(){
        //  获取类别的数据
        $cate=CateController::getCate();
        // dd($cate);
        //加载视图
        return view('Article.add',['cate'=>$cate]);
    }
    //执行添加
    public function postInsert(ArticleInsertRequest $request){
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
            $image=new ImageManager();
            $image->make(Config::get('app.upload').'/'.$s.'.'.$exten)->resize(300,300)->insert("./images/logo.png","bottom-right",5,5)->save(Config::get('app.upload').'/t_'.$s.'.'.$exten);

        }
        // dd($data);
        // $data['pic']=Config::get('app.upload')."/".$s.".".$exten;
        //处理 绝对路径
        $data['pic']=trim(Config::get('app.upload').'/t_'.$s.".".$exten,'.');
        // dd($data);
        $data['user_id']=2;
        $data['created_at']=date('Y-m-d H:i:s');
        // dd($data);
        //执行数据库的插入操作
        if(DB::table('articles')->insert($data)){
            // echo "111";
            return redirect('/admins/article/index')->with('success','添加成功');
        }else{
            // echo "000";
            return back()->with('error','添加失败');
        }
    }
    //文章列表
    public function getIndex(){
        $list=DB::table('Articles')->paginate(3);
        return view('Article.index',['list'=>$list]);
    }
    //执行删除
    public function getDelete($id){
        //获取需要删除的数据
        $info=DB::table('articles')->where('id','=',$id)->first();
        $a=$info->descr;
        // dd($a);
        if(preg_match('/<p><img src="(.*?)" title="(.*?)" alt="(.*?)"\/><\/p>/',$a,$b)){
             // dd($b);
            $c=".".$b[1];
            unlink($c);
        };
       
        // dd($c);
        //获取需要删除的图片的路径
        $ss=".".$info->pic;
        $s=DB::table('articles')->where('id','=',$id)->delete();
        if($s){
            unlink($ss);
            
            return redirect('/admins/article/index')->with('success','删除成功');            
        }else{
            return redirect('/admins/article/index')->with('error','删除失败');
        }
    }
    //加载需要修改的模板
    public function getEdit($id){
        //获取需要修改的数据
        $info=DB::table('Articles')->where('id','=',$id)->first();
        //加载视图，同时分配数据
        return view('Article.edit',['info'=>$info]);
    }
    //执行修改
    public function postUpdate(Request $request){
        // dd($request->all());
        $data=$request->except(['_token','id']);
        //获取需要修改的数据
        $info=DB::table('articles')->where('id','=',$request->input('id'))->first();
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
            $data['user_id']=2;
            //执行数据库的修改操作
            if(DB::table('articles')->where('id','=',$request->input('id'))->update($data)){
                unlink($ss);
                return redirect('/admins/article/index')->with('success','修改成功');
            }else{
                return back()->with('error','修改失败');
            }
        }else{
            $data['user_id']=3;
            //执行数据库的修改操作
            if(DB::table('articles')->where('id','=',$request->input('id'))->update($data)){
                return redirect('/admins/article/index')->with('success','修改成功');
            }else{
                return back()->with('error','修改失败');
            }
        }
    }
    //执行Ajax删除
    public function dodel(Request $request){
        //返回响应数据
        // echo "111111";
        //获取参数
        $uname=$request->input('uname');
        //遍历
        foreach($uname as $key=>$value){
            DB::table('articles')->where('id','=',$value)->delete();
        }
        //返回响应数据
        echo 1;
    }
    //图片的处理操作
    public function doimage(){
        //实例化ImageManager
        $image=new ImageManager();
        //调用$image对象里面的方法对图片进行操作
        // $image->make('./images/1.jpg')->resize(300,200)->save("./images/t_1.jpg");
        //图片水印操作
        $image->make('./images/1.jpg')->resize(300,300)->insert("./images/logo.png","bottom-right",5,5)->save('./images/s_1.jpg');

    }
}
