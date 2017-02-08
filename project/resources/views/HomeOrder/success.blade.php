<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>付款成功页面</title>
<link rel="stylesheet"  type="text/css" href="/h/yuejilala/AmazeUI-2.4.2/assets/css/amazeui.css"/>
<link href="/h/yuejilala/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
<link href="/h/yuejilala/basic/css/demo.css" rel="stylesheet" type="text/css" />

<link href="/h/yuejilala/css/sustyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/h/yuejilala/basic/js/jquery-1.7.min.js"></script>

<script type="text/javascript" src="/h/js/jquery.js"></script>
<script type="text/javascript" src="/h/js/index.js"></script>
<script src="/h/script/global.js" type="text/javascript"></script>
<script src="/h/script/head.js" type="text/javascript"></script>
<script type="text/javascript" src="/h/jquery-1.8.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="/h/css/main.css"/>
<link rel="stylesheet" type="text/css" href="/h/css/basic.css">
<link rel="stylesheet" type="text/css" href="/h/css/style.css" />
<link rel="stylesheet" href="/h/style/base.css" />
<link rel="stylesheet" href="/h/style/head.css" />

</head>

<body>


<!--顶部导航条 -->
<div class="top1">
<div class="top1_main"><span class="dl">您好,
@if(session('email'))
<span style="color:orange">{{session('email')}}</span>
欢迎光临本亲生活网！
@else
欢迎光临本亲生活网！
<a href="/home/login"> [请登录]</a> 
@endif
  <a href="/home/logout">[退出]</a></span><span class="yh_zx"><a href="/home/info/index">用户中心</a>  |  <a href="/home/info/order">我的订单</a>  |  <a href="#">帮助中心</a>  |  <a href="#">联系方式</a></span></div>
</div>

<!--悬浮搜索框-->

<div class="nav white">
	<div class="logo"><img src="/h/yuejilala/images/logo.png" /></div>
    <div class="logoBig">
      <li><img src="/h/yuejilala/images/logobig.png" /></li>
    </div>
    
    <div class="search-bar pr">
        <a name="index_none_header_sysc" href="#"></a>       
        <form>
        <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
        <input id="ai-topsearch" class="submit" value="搜索" index="1" type="submit"></form>
    </div>     
</div>

<div class="clear"></div>



<div class="take-delivery">
 <div class="status">
   <h2>您已成功提交订单 订单编号为:{{$order_num}}</h2>
   <div class="successInfo">
     <ul>
       <li>付款金额<em>¥{{$total}}.00</em></li>
      
       <div class="user-info">
         <p>收货人：{{$address->name}}</p>
         <p>联系电话：{{$address->phone}}</p>
         <p>收货地址：{{$address->adds}}</p>
       </div>
       
             请认真核对您的收货信息，如有错误请联系客服
                               
     </ul>
     <div class="option">
       <span class="info">您可以</span>
        <a href="/home/info/order" class="J_MakePoint">查看<span>已买到的宝贝</span></a>
        <a href="/home/info/order" class="J_MakePoint">查看<span>交易详情</span></a>
     </div>
    </div>
  </div>
</div>


<div class="footer" >
 <div class="footer-hd">
 <p>
 <a href="#">恒望科技</a>
 <b>|</b>
 <a href="#">商城首页</a>
 <b>|</b>
 <a href="#">支付宝</a>
 <b>|</b>
 <a href="#">物流</a>
 </p>
 </div>
 <div class="footer-bd">
 <p>
 <a href="#">关于恒望</a>
 <a href="#">合作伙伴</a>
 <a href="#">联系我们</a>
 <a href="#">网站地图</a>
 <em>© 2015-2025 Hengwang.com 版权所有</em>
 </p>
 </div>
</div>


</body>
</html>
