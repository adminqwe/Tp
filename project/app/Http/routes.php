<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('/home/index');
});
//后台
Route::group(['middleware'=>'adminid'],function(){
	Route::controller('/admin','AdminController');
	//用户模块
	Route::controller('/admins/user','UserController');
	//无限分类模块
	Route::controller('/admins/cate','CateController');
	//友情链接
	Route::controller('/admins/link','LinkController');
	//广告模块
	Route::controller('/admins/ads','AdsController');
	//文章管理
	Route::controller('/admins/article','ArticleController');
	//商品模块
	Route::controller('/admins/shop','ShopController');
	//订单模块
	Route::controller('/admins/order','OrderController');
	//图片轮播模块
	Route::controller('/admins/pic','PicController');
	//评论模块
	Route::controller('/admins/comment','CommentController');
	//用户模块2 Ajax分页
	Route::get('/page','UsersController@page');

});
//Ajax删除数据
Route::get('/dodel','ArticleController@dodel');
//图片的操作
Route::get('/doimage','ArticleController@doimage');
//登陆
Route::controller('/admins/admin','AdminLoginController');
//前台注册
Route::get('/home/register','HomeRegisterController@register');
//验证码测试
Route::get('/vcode','HomeRegisterController@vcode');
//执行注册
Route::post('/home/doregister','HomeRegisterController@doregister');
//测试右键发送
Route::get('/test','HomeRegisterController@test');
//测试邮件内容为模板的邮件发送
Route::get('/tests','HomeRegisterController@tests');
//激活操作
Route::get('/jihuo','HomeRegisterController@jihuo');
//前台登陆
Route::get('/home/login','HomeRegisterController@login');
//执行登陆
Route::post('/home/dologin','HomeRegisterController@dologin');

//忘记密码操作
Route::get('/forget','HomeRegisterController@forget');
Route::post('/doforget','HomeRegisterController@doforget');

//重置密码操作
Route::get('/reset','HomeRegisterController@reset');
Route::post('/doreset','HomeRegisterController@doreset');

//中间件
// Route::group(['middleware'=>'email'],function(){
//无限分类递归(前台主页)
Route::get('/home/index','HomeRegisterController@index');

// });
//退出前台页面操作
Route::get('/home/logout','HomeRegisterController@logout');
//Ajax选项卡的遍历商品操作
Route::get('/home/chooses','HomeRegisterController@chooses');

// Ajax检测邮箱
Route::post('/youxiang','HomeRegisterController@youxiang');
//友情链接
Route::get('/link','HomeRegisterController@link');

//商品列表页
Route::controller('/home/list','HomeListController');
//商品详情页
Route::controller('/home/detail','DetailController');
//加入购物车
Route::post('/home/addcart','CartController@add');
//购物车主页
Route::get('/home/cartindex','CartController@index');
//购物车减按钮
Route::get('/updatee','CartController@updatee');
//购物车加按钮
Route::get('/update','CartController@update');
//购物车删除
Route::get('/cartdel','CartController@del');
//购物车Ajax加号
Route::get('/home/jia','CartController@jia');
//购物车Ajax减号
Route::get('/home/jian','CartController@jian');

//session的清除
Route::get('/home/clear','CartController@clear');
//购物车批量删除
Route::get('/home/dodel','CartController@dodel');
//结算页面 any匹配任意的请求方式
Route::any('/home/homeorder/insert','HomeOrderController@insert')->middleware('hid');
//地址添加
Route::post('/address/insert','AddressController@insert');
//订单生成
Route::post('/order/create','HomeOrderController@create');
//订单提交成功
Route::get('/home/success','HomeOrderController@success');
//个人中心
Route::get('/home/info/index','HomeInfoController@index')->middleware('hid');
//订单管理
Route::get('/home/info/order','HomeInfoController@order')->middleware('hid');
//地址删除
Route::get('/adds/del/{id}','AddressController@del');
//个人中心修改
Route::post('/home/person','HomeInfoController@update');


//城市级联
Route::get('/csjl','AddressController@csjl');



//测试
route::get('/test','CartController@clear');

