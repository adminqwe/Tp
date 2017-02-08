<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>本亲生活网注册</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="csrf-token" content="{{csrf_token()}}"/>
</head>
<script type="text/javascript" src="/h/js/jquery.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src="/h/script/global.js" type="/h/text/javascript"></script>
<script src="/h/script/head.js" type="text/javascript"></script>
<script type="text/javascript" src="/h/jquery-1.8.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="/h/css/main.css"/>
<link rel="stylesheet" type="text/css" href="/h/css/basic.css">
<link rel="stylesheet" type="text/css" href="/h/css/style.css" />
<link rel="stylesheet" href="/h/style/base.css" />
<link rel="stylesheet" href="/h/style/head.css" />

<body>

<!--抬头开始-->

<div class="top">

<div class="top1">
<div class="top1_main"><span class="dl">您好，欢迎光临本亲生活网！<a href="/home/login"> [请登录]</a>  <a href="/home/register">[免费注册]</a></span><span class="yh_zx"><a href="hyzx.html">用户中心</a>  |  <a href="#">我的订单</a>  |  <a href="#">帮助中心</a>  |  <a href="#">联系方式</a></span></div>
</div>


<div class="top_logo">

<div class="logo"><a href="index.html"><img src="/h/images/logo.jpg" width="338" height="113" / alt="本亲生活的logo标志"></a></div>
<div class="top_you">

<div class="ss_1"><input name="key" type="text" id="key" value="请输入您要搜索的产品" size="30"      
          onclick="if(value==defaultValue){value='';this.style.color='#898b8c'}"    
          onBlur="if(!value){value=defaultValue;this.style.color='#999'}" style="color:#999; line-height:26px;" / class="ssk1"><input name="" value="搜 索" type="button" / class="button1"></div>

</div>

</div>

</div>

<!--抬头结束-->


<!--导航开始-->


<div class="headNav">
  <div class="navCon w1020">
    <div class="navCon-cate fl navCon_on">
      <div class="navCon-cate-title"> <a href="#">全部商品分类</a></div>
      <div class="cateMenu hide">
       
      </div>
    </div>
    <div class="navCon-menu fl">
      <ul>
        <li><a class="curMenu" href="index.html">商城首页</a></li>
        <li><a href="tplist.html">特色产品</a></li>
        <li><a href="tplist.html">VIP专区</a></li>
        <li><a href="#">服务支持</a></li>
        <li><a href="newslist.html">相关资讯</a></li>
        <li><a href="about.html">关于本亲</a></li>
      </ul>
    </div>
  </div>
</div>

<!--导航结束-->


<!--会员注册开始-->

<div class="huiyuan_zc">
<div class="zhuce_1">邮箱注册</div>
<div class="zhuce_2">

<form action="/home/doregister" method="post">
<div class="zhuce_left">
<div class="yhm_zc">常用邮箱：<input type="text" name="email"  class="zc_wbk" /></div>

<div class="yhm_zc">输入密码：<input type="password" name="password"  class="zc_wbk" /></div>
<div class="yhm_zc">再次输入：<input type="password" name="repassword"  class="zc_wbk" /></div>
<div class="yhm_zc"><span style="float:left;">&nbsp;&nbsp;&nbsp;验证码：
<input type="text" name="vcode"  class="zc_wbk" / style="width:100px;"></span>
<span style="float:left; width:132px; height:32px; display:block; margin-left:5px; margin-top:5px;">
<img src="/vcode" width="120" height="32" onclick="this.src=this.src+'?id=Math.random()'"/></span>

<!-- <span style="float:left;"><a href="#">看不清，再换一张</a></span> -->

@if(session('error'))
<span style="float:left;color:red">{{session('error')}}</span>
@endif
</div>

@if(count($errors)>0)
<span style="float:left;color:red;margin-left:50px">
@foreach($errors->all() as $error)
{{$error}}
@endforeach
</span>
@endif


{{csrf_field()}}
<div class="zhuce_tjxx"><input name="" type="submit"  value="" onmousedown="this.style.left='1px';this.style.top='1px';" onmouseup="this.style.left='0px';this.style.top='0px';"   / style="width:206px; height:35px ; border:none; background: url(/h/images/zhuce_1.jpg); position:relative;"></div>
</div>
</form>

<div class="zhuce_right">

<div class="zhuce_right1"><a href="/home/login"><img src="/h/images/dll.jpg" width="149" height="78" / style="margin-left:50px; margin-top:20px;"></a></div>

<div class="zhuce_right2"><img src="/h/images/bqsy.jpg" width="228" height="209" /></div>


</div>







</div>


</div>

<!--会员注册结束-->


<!--中部开始-->


<div class="con_ny">




</div>


<!--中部结束-->

<!--底部开始-->

<div class="footer_ys">
<div class="footer_ys1"></div>
</div>



<!--软文开始-->

<div class="ruanwen">

<ul>
<li class="da">关于本亲</li>
<li><a href="#">公司简介</a></li>
<li><a href="#">联系我们</a></li>
<li><a href="#">友情连接</a></li>
</ul>



<ul>
<li class="da">新手指南</li>
<li><a href="#">账户注册</a></li>
<li><a href="#">购物流程</a></li>
<li><a href="#">注册须知</a></li>
</ul>



<ul>
<li class="da">配送范围及须知</li>
<li><a href="#">配送范围</a></li>
<li><a href="#">配送须知</a></li>
<li><a href="#">配送时间</a></li>
</ul>



<ul>
<li class="da">支付方式</li>
<li><a href="#">货到付款</a></li>
<li><a href="#">在线支付</a></li>
<li><a href="#">其他方式支付</a></li>
</ul>


<ul>
<li class="da">售后服务</li>
<li><a href="#">退换货政策</a></li>
<li><a href="#">退换货办理流程</a></li>
<li><a href="#">退款说明</a></li>
</ul>


<ul>
<li class="da">帮助说明</li>
<li><a href="#">找回密码</a></li>
<li><a href="#">帮助中心</a></li>
<li><a href="#">隐私声明</a></li>
</ul>



</div>


<!--软文结束-->


<!--友情连接开始-->


<div class="links">
<div class="links_main">友情连接：&nbsp;<a href="#">郑州卓普科技</a> &nbsp; | &nbsp; 本亲生活网  &nbsp;|  &nbsp;郑州卓普科技 &nbsp; | &nbsp; 本亲生活网 &nbsp; | &nbsp; 郑州卓普科技 &nbsp; | &nbsp; 本亲生活网 &nbsp; | &nbsp; 郑州卓普科技 &nbsp; |  &nbsp;本亲生活网 &nbsp; |  &nbsp;郑州卓普科技 &nbsp; | &nbsp; 本亲生活网&nbsp;  |&nbsp;  郑州卓普科技  </div>
</div>


<div class="banquan">Copyright © 2014-2019 All Right Reserved 版权所有：本亲生活网 备案号： 豫ICP 450051256-1号<br />

公司地址：郑州市东风路汇宝花园13号楼2单元202室 联系人：高经理 联系电话：13692548036 技术支持： <a href="http://www.zhuotop.com">卓普科技</a>

<div class="banquan2"><img src="/h/images/xinr.jpg" width="589" height="51" /></div>

</div>


<!--友情链接结束-->

<!--底部结束-->



</body>
<script type="text/javascript">
flag="00";
$.ajaxSetup({
  headers:{
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
//获取input(email)元素 给邮箱绑定鼠标移入移出事件
$("input[name='email']").focus(function(){
  // alert('sss');
  //清除当前元素的下一个同胞元素
  $(this).next('span').remove();
  $("<span>请输入邮箱地址</span>").css('color','red').insertAfter($(this));
}).blur(function(){
  // alert('sss');

  s=$(this);
  //清除
  s.next('span').remove();
  //获取value值
  ss=$(this).val();
  // alert(ss);
  //正则匹配
  if(ss.match(/.+@.+\.[a-zA-Z]{2,4}$/)==null){
    // alert('aaa');
    $("<span>请输入正确的邮箱地址</span>").css('color','blue').insertAfter(s);
    faag=false;
  }else{
    //Ajax 检测邮箱是否存在
    $.post("/youxiang",{name:ss},function(data){
      // alert(data);
      if(data==1){
        $("<span>此邮箱已经存在</span>").css('color','red').insertAfter(s);
        flag=false;
      }else{
        $("<span>√</span>").css('color','green').insertAfter(s);
        flag=true;
      }
    })
  }
})
//获取input(password)元素 给密码绑定鼠标移入移出事件
$("input[name='password']").focus(function(){
  // alert('sss');
  //清除当前元素的下一个同胞元素
  $(this).next('span').remove();
  $("<span>请输入4-8位数字字母下划线</span>").css('color','red').insertAfter($(this));
}).blur(function(){
  // alert('sss');

  s=$(this);
  //清除
  s.next('span').remove();
  //获取value值
  ss=$(this).val();
  //正则匹配
  if(ss.match(/\w{4,8}/)==null){
    $("<span>请输入正确的密码格式</span>").css('color','blue').insertAfter(s);
    flag=false;
  }else{
    $(this).next('span').remove();
    $("<span>√</span>").css('color','green').insertAfter(s);
    flag=true;
  }
})
//获取input(repassword)元素 给密码绑定鼠标移入移出事件
$("input[name='repassword']").focus(function(){
  // alert('sss');
  //清除当前元素的下一个同胞元素
  $(this).next('span').remove();
  $("<span>请输入4-8位数字字母下划线</span>").css('color','red').insertAfter($(this));
}).blur(function(){
  // alert('sss');
  s=$(this);
  //清除
  s.next('span').remove();
  //获取value值
  ss=$(this).val();
  //正则匹配
  if(ss.match(/\w{4,8}/)==null){
    $("<span>请输入正确的密码格式</span>").css('color','blue').insertAfter(s);
    flag=false;
  }else{
      if($("input[name='password']").val()==$("input[name='repassword']").val()){
        $(this).next('span').remove();
      $("<span>√</span>").css('color','green').insertAfter(s);
      flag=true;
    }else{
      $("<span>两次输入密码不一致</span>").css('color','red').insertAfter(s);
    }
  }
})
//给提交按钮绑定阻止提交事件
$("form").submit(function(){
  if(flag==0){
    return false;
  }
  if(!flag){
    return false;
  }else{
    return true;
  }
})
</script>
</html>