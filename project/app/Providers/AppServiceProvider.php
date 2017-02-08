<?php

namespace App\Providers;
use DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //  
        
        $list=self::getCatesBypid(0);
        $link=self::link();
        $pic=self::pic();
        $shop=self::shop();
        $ads=self::ads();
        view()->share('list',$list);
        view()->share('link',$link);
        view()->share('pic',$pic);
        view()->share('shop',$shop);
        view()->share('ads',$ads);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    public static function getCatesBypid($pid){
        //获取数据
        $s=DB::table('cates')->where('pid','=',$pid)->get();
        // $data=[];
        //遍历
        foreach($s as $key=>$value){
            $value->sub=self::getCatesBypid($value->id);
            // $data[]=$value;
        }
        return $s;
        }
        //友情链接
        public static function link(){
            //获取友情连接数据
            $s=DB::table('link')->get();
            // dd($s);
            return $s;
        }
        //图片轮播
        public static function pic(){
            //获取图片轮播属性
            $s=DB::table('pics')->get();
            return $s;
        }
        //获取类别信息
        public static function t_list(){
            //获取类别信息
            $list=DB::table('cates')->where('pid','=',0)->get();

            //类别表和商品表关联
            //遍历
            // foreach($s as $key=>$value){
            //     $s[$key]->shop=DB::table('shops')->select(DB::raw('*,cates.name as cname,shops.name as sname,shops.id as sid'))->join('cates','shops.cate_id','=','cates.id')->where('shops.cate_id','=',$value->id)->get();
            // }
            //获取类别信息
            foreach($list as $k=>$v){
                $res=DB::table('cates')->where('pid','=',$v->id)->get();
                //每个顶级下的二级分配
                $list[$k]->er=$res;
                foreach($res as $key=>$val){
                    $arr=DB::table('cates')->where('pid','=',$val->id)->get();
                    $list[$k]->er[$key]->san=$arr;
                }
            }
            return $list;
        }
        //类别表和商品表的关联
        public static function shop(){
            //$list为返回的所有的分类的集合 子元素为每一个一级分类
            $shop=self::t_list();
            //遍历
            foreach($shop as $k=>$v){
                //$list的子元素为每一个一级分类
                foreach($v->er as $key=>$value){
                    foreach($value->san as $m=>$n){
                       $a=DB::table('shops')->where('cate_id','=',$n->id)->get();            
                        // $value=>san为二级分类下的所有三级分类的集合
                        // $n为所有的三级分类的信息 id  name pid path
                        // $n->shop为三级分类下的所有商品     
                        foreach($a as $b){
                            $v->shop[]=$b;
                        } 

                    }
                }
            }
            return $shop;
            
        }
        //广告投放
        public function ads(){
            //获取广告所有信息
            $s=DB::table('ads')->get();
            return $s;
        }  

}
