<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CateController extends Controller
{   
    //构造方法（类实例化的时候调用）
    public $request;
    public function __construct(Request $request){
        $this->request=$request;
    }
    //为了添加分类准备的方法
    public static function getCate(){
        // $list=DB::select('select *,concat(path,",",id) as paths from cates order by paths');
        $list=DB::table('cates')->select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths')->get();
        //遍历
        foreach($list as $key=>$value){
            // var_dump($list);
            $s=$value->path;
            // var_dump($s);
            //将字符串拆分成数组
            // $arr=explode(',',$s);
            // var_dump($arr);
            //获取数组的长度
            // $len=count($arr);
            // var_dump($len);
            //获取逗号个数
            // $dlen=$len-1;
            // var_dump($dlen);
            $dlen=substr_count($s,',');
            // var_dump($dlen);
            //拼接分割符
            $value->name=str_repeat('--|',$dlen).$value->name;
        }
        return $list;
    }
    //加载无限分类的添加模板
    public function getAdd(){
        //获取所有的分类信息
        // $cate=DB::table('cates')->get();
        $cate=self::getCate();
        return view('Cate.add',['cate'=>$cate]);
    }
    //执行添加方法
    public function postInsert(Request $request){
        // dd($request->all());
        $data=$request->except('_token');
        // dd($data);
        $pid=$request->input('pid');
        //添加类别是顶级分类
        if($pid==0){
            $data['path']='0';
        }else{
            //子类
            //获取父类的信息
            $info=DB::table('cates')->where('id','=',$pid)->first();
            $data['path']=$info->path.','.$info->id;
        }
        // dd($data);
        //执行数据库的插入
        if(DB::table('cates')->insert($data)){
            return redirect('/admins/cate/index')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }
    //调整类别顺序
    public function getCates(){
        // $list=DB::select('select *,concat(path,",",id) as paths from cates order by paths');
        $list=DB::table('cates')->select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths')->where('name','like','%'.$this->request->input('keywords').'%')->paginate(10);
        //遍历
        foreach($list as $key=>$value){
            // var_dump($list);
            $s=$value->path;
            // var_dump($s);
            //将字符串拆分成数组
            // $arr=explode(',',$s);
            // var_dump($arr);
            //获取数组的长度
            // $len=count($arr);
            // var_dump($len);
            //获取逗号个数
            // $dlen=$len-1;
            // var_dump($dlen);
            $dlen=substr_count($s,',');
            // var_dump($dlen);
            //拼接分割符
            $value->name=str_repeat('--|',$dlen).$value->name;
        }
        return $list;
    }
    //列表页
    public function getIndex(Request $request){
        //获取所有的分类信息
        // $cate=DB::table('cates')->get();
        $cate=self::getCates();
        // dd($cate);
        //加载模板的同时分配数据
        return view('Cate.index',['cate'=>$cate,'request'=>$request->all()]);
    }
    //执行删除
    public function getDelete($id){
        // echo $id;
        //计算子类的个数
        $res=DB::table('cates')->where('pid','=',$id)->count();
        if($res>0){
            return back()->with('error','请先删除子类');
        }
        if(DB::table('cates')->where('id','=',$id)->delete()){
            return redirect('/admins/cate/index')->with('success','删除成功');
        }else{
            return back()->redirect('/admins/cate/index')->with('error','删除失败');
        }
    }
    //加载修改模板  或许需要修改的数据
    public function getEdit($id){
        //获取需要修改的数据
        $info=DB::table('cates')->where('id','=',$id)->first();
        //加载模板
        return view('Cate.edit',['info'=>$info,'cate'=>self::getCate()]);
    }
    //执行修改
    public function postUpdate(Request $request){
         // dd($request->all());
        $data=$request->except(['_token','id']);
        // dd($data);
        $pid=$request->input('pid');
        //添加类别是顶级分类
        if($pid==0){
            $data['path']='0';
        }else{
            //子类
            //获取父类的信息
            $info=DB::table('cates')->where('id','=',$pid)->first();
            $data['path']=$info->path.','.$info->id;
        }
        // dd($data);
        //执行数据库的修改
        if(DB::table('cates')->where('id','=',$request->input('id'))->update($data)){
            return redirect('/admins/cate/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }
}
