<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>本亲生活网</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
</head>
<script type="text/javascript" src="/h/js/jquery.js"></script>
<script type="text/javascript" src="/h/js/index.js"></script>
<script src="/h/script/global.js" type="text/javascript"></script>
<script src="/h/script/head.js" type="text/javascript"></script>

<link href="/h/css/css.css" type="text/css" rel="stylesheet">	
<link rel="stylesheet" type="text/css" href="/h/css/main.css"/>
<link rel="stylesheet" type="text/css" href="/h/css/basic.css">
<link rel="stylesheet" type="text/css" href="/h/css/style.css" />
<link rel="stylesheet" href="/h/style/base.css" />
<link rel="stylesheet" href="/h/style/head.css" />
<style type="text/css">
   p{ white-space:nowrap;} 
</style>
<body>

<!--抬头开始-->

<div class="top">

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
        <ul>
        
          
        </ul>
      </div>
    </div>
    <div class="navCon-menu fl">
      <ul>
        <li><a class="curMenu" href="/home/index">商城首页</a></li>
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


<!--banner开始-->


<!--banner结束-->





<!--中部开始-->


<div class="con_ny">

<div class="con_dqwz">您的当前位置：<a href="/home/index">首页</a> >> 商品详情</div>

<!--产品购买详情介绍开始-->

<div class="cpxq_ny1">


<!--相册放大镜开始-->
<div class="fdj">

<SCRIPT src="/h/js/jquery-1.2.6.pack.js" type=text/javascript></SCRIPT>
<SCRIPT src="/h/js/base.js" type=text/javascript></SCRIPT>
<div id=preview>
	<div class=jqzoom id=spec-n1 onClick="window.open('#')"><IMG height=306
	src="{{$s->pic}}" jqimg="{{$s->pic}}" width=350>
	</div>
	<div id=spec-n5>
		<div class=control id=spec-left>
			<img src="/h/images/left.jpg" />
		</div>
		<div id=spec-list>
			<ul class=list-h>
				<li><img src="/h/images/1_1.jpg"> </li>
				<li><img src="/h/images/1_2.jpg"> </li>
				<li><img src="/h/images/1_3.jpg"> </li>
				<li><img src="/h/images/1_1.jpg"> </li>
				<li><img src="/h/images/1_2.jpg"> </li>
				<li><img src="/h/images/1_3.jpg"> </li>
			</ul>
		</div>
		<div class=control id=spec-right>
			<img src="/h/images/right.jpg" />
		</div>
		
    </div>
</div>
<SCRIPT type=text/javascript>
	$(function(){			
	   $(".jqzoom").jqueryzoom({
			xzoom:400,
			yzoom:400,
			offset:10,
			position:"right",
			preload:1,
			lens:1
		});
		$("#spec-list").jdMarquee({
			deriction:"left",
			width:350,
			height:56,
			step:2,
			speed:4,
			delay:10,
			control:true,
			_front:"#spec-right",
			_back:"#spec-left"
		});
		$("#spec-list img").bind("mouseover",function(){
			var src=$(this).attr("src");
			$("#spec-n1 img").eq(0).attr({
				src:src.replace("\/n5\/","\/n1\/"),
				jqimg:src.replace("\/n5\/","\/n0\/")
			});
			$(this).css({
				"border":"2px solid #ff6600",
				"padding":"1px"
			});
		}).bind("mouseout",function(){
			$(this).css({
				"border":"1px solid #ccc",
				"padding":"2px"
			});
		});				
	})
	</SCRIPT>

<SCRIPT src="/h/js/lib.js" type=text/javascript></SCRIPT>
<SCRIPT src="/h/js/163css.js" type=text/javascript></SCRIPT>

</div>

<!--相册放大镜结束-->
<form action="/home/addcart" method="post">
<div class="xjmc_jjsm">
<div class="cpxq_mc_1">{{$s->name}}</div>
<div class="none" style="height:15px;"></div>
<div class="zzl">
<div style="float:left">描 述 : </div>
<div style="float:left">{!!$s->descr!!}</div></div>
<div class="zzl">售     价：<span style="color:#C00; font-weight:600; font-size:18px;">￥{{$s->price}}.0</span></div>
<div class="zzl">发 货 地：台湾 台湾</div>
<div class="zzl">特产属性：台湾特产</div>


<div class="dgsc">
<span class="gmsl">购买数量：
<input name="" value="-" type="button" / style="background: url(/h/images/jia.jpg); width:19px; height:19px;">
<input type="text" value="1" name="num" / style="width:40px; text-align:center; height:18px; border:1px solid #dddddd;" > 
 <input name="" value="+" type="button" / style="background: url(/h/images/jia.jpg); width:19px; height:19px;">
 <input type="hidden" name="id" value="{{$s->id}}"/>
 <input type="hidden" name="price" value="{{$s->price}}" />
</span>
{{csrf_field()}}
<!-- <a href="#"><img src="/h/images/shoucang.jpg" width="170" height="34" /></a> -->
<span class="jrsc_2"><input type="submit" value="" style="background:url(/h/images/shoucang.jpg);width:170px;height:34px"/></span>

<span class="jrsc_2" style="padding-left:20px;"><a href="ddtj.html"><img src="/h/images/dinggou.jpg" width="170" height="34" /></a></span>
</div>



</div>


</div>
</form>
<!--产品购买详情介绍结束-->




<!--中部2开始-->

<div class="cpxq_ny_con">

<!--中部2左侧开始-->

<div class="cpxq_left_1">

<!--为您推荐开始-->
<div class="wntj">

<div class="wntj_bt">为您推荐</div>


<div class="wntj_lb" >
<div class="wntj_bt1"><a href="#"><img src="/h/images/tuijian1.jpg" width="80" height="79" /></a></div>
<div class="wntj_bt2"><span class="wntj_mc"><a href="#">友臣 金丝肉松饼 经典原味 40g 糕</a></span><span class="wntj_jg">￥4.50</span></div>
</div>


<div class="wntj_lb">
<div class="wntj_bt1"><a href="#"><img src="/h/images/tuijian1.jpg" width="80" height="79" /></a></div>
<div class="wntj_bt2"><span class="wntj_mc"><a href="#">友臣 金丝肉松饼 经典原味 40g 糕</a></span><span class="wntj_jg">￥4.50</span></div>
</div>


<div class="wntj_lb">
<div class="wntj_bt1"><a href="#"><img src="/h/images/tuijian1.jpg" width="80" height="79" /></a></div>
<div class="wntj_bt2"><span class="wntj_mc"><a href="#">友臣 金丝肉松饼 经典原味 40g 糕</a></span><span class="wntj_jg">￥4.50</span></div>
</div>


<div class="wntj_lb">
<div class="wntj_bt1"><a href="#"><img src="/h/images/tuijian1.jpg" width="80" height="79" /></a></div>
<div class="wntj_bt2"><span class="wntj_mc"><a href="#">友臣 金丝肉松饼 经典原味 40g 糕</a></span><span class="wntj_jg">￥4.50</span></div>
</div>


<div class="wntj_lb">
<div class="wntj_bt1"><a href="#"><img src="/h/images/tuijian1.jpg" width="80" height="79" /></a></div>
<div class="wntj_bt2"><span class="wntj_mc"><a href="#">友臣 金丝肉松饼 经典原味 40g 糕</a></span><span class="wntj_jg">￥4.50</span></div>
</div>

</div>
<!--为您推荐结束-->


<div class="none" style="height:20px;"></div>




<!--本周热销开始-->


<div class="wntj">

<div class="wntj_bt">本周热销</div>


<div class="wntj_lb" >
<div class="wntj_bt1"><a href="#"><img src="/h/images/tuijian1.jpg" width="80" height="79" /></a></div>
<div class="wntj_bt2"><span class="wntj_mc"><a href="#">友臣 金丝肉松饼 经典原味 40g 糕</a></span><span class="wntj_jg">￥4.50</span></div>
</div>


<div class="wntj_lb">
<div class="wntj_bt1"><a href="#"><img src="/h/images/tuijian1.jpg" width="80" height="79" /></a></div>
<div class="wntj_bt2"><span class="wntj_mc"><a href="#">友臣 金丝肉松饼 经典原味 40g 糕</a></span><span class="wntj_jg">￥4.50</span></div>
</div>


<div class="wntj_lb">
<div class="wntj_bt1"><a href="#"><img src="/h/images/tuijian1.jpg" width="80" height="79" /></a></div>
<div class="wntj_bt2"><span class="wntj_mc"><a href="#">友臣 金丝肉松饼 经典原味 40g 糕</a></span><span class="wntj_jg">￥4.50</span></div>
</div>


<div class="wntj_lb">
<div class="wntj_bt1"><a href="#"><img src="/h/images/tuijian1.jpg" width="80" height="79" /></a></div>
<div class="wntj_bt2"><span class="wntj_mc"><a href="#">友臣 金丝肉松饼 经典原味 40g 糕</a></span><span class="wntj_jg">￥4.50</span></div>
</div>


<div class="wntj_lb">
<div class="wntj_bt1"><a href="#"><img src="/h/images/tuijian1.jpg" width="80" height="79" /></a></div>
<div class="wntj_bt2"><span class="wntj_mc"><a href="#">友臣 金丝肉松饼 经典原味 40g 糕</a></span><span class="wntj_jg">￥4.50</span></div>
</div>

</div>

<!--本周热销结束-->

</div>

<!--中部2左侧结束-->



<!--中部2右侧开始-->

<div class="cpxq_zbyc">

<!--产品详情开始-->

<div class="cpxq_yi">

<style type="text/css">
<!--
ul{ list-style:none;}
/*选项卡1*/
#Tab1{width:960px; height:auto; overflow: hidden; clear:both;}
/*选项卡2*/
#Tab2{width:576px;margin:0px;padding:0px;margin:0 auto;}
/*菜单class*/
.Menubox {width:100%;background:#fff;height:33px;line-height:33px; border-bottom:2px solid #acc90b;}
.Menubox ul{margin:0px;padding:0px;}
.Menubox li{float:left;display:block;cursor:pointer;width:150px;text-align:center;color:#413e3e;font-weight:bold; background:#f3f3f3;}
.Menubox li.hover{padding:0px;background:#acc90b;width:150px;color:#fff;font-weight:bold;height:33px;line-height:33px; font-family:"微软雅黑";}
.Contentbox{clear:both;margin-top:0px; border-top:none; height:auto; padding-top:8px;}
.STYLE2 {font-size: 18px}
-->
</style>

<script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
function setTab(name,cursel,n){
for(i=1;i<=n;i++){
 var menu=document.getElementById(name+i);
 var con=document.getElementById("con_"+name+"_"+i);
 menu.className=i==cursel?"hover":"";
 con.style.display=i==cursel?"block":"none";
}
}
//-->
</script>



<div id="Tab1">
<div class="Menubox">
<ul>
 <li id="one1" onmousedown="setTab('one',1,4)" class="hover">产品介绍 </li>

 <li id="one2" onmousedown="setTab('one',2,4)" >生产厂家</li>

 <li id="one3" onmousedown="setTab('one',3,4)">售后服务</li>

</ul>
</div>


<div class="Contentbox">

 
 
 <div id="con_one_1" class="hover">


<div class="cpjs_qh1">
<span style="font-size:14px; color:#000; font-weight:600; display:block; padding-bottom:15px;">产品参数：</span>

[厂名]：LITTORE FAMILY WINES  &nbsp;&nbsp;&nbsp;[厂址]：265Ballan Road MooraboolGeelong,Victoria,Australia&nbsp;&nbsp;&nbsp;[厂家联系方式]：61352284888&nbsp;&nbsp;&nbsp;[配料表]：100%葡萄汁[储藏方式]：低温、干燥、避光、通风&nbsp;&nbsp;&nbsp;[保质期]：3650 天&nbsp;&nbsp;&nbsp;[品牌]：salience&nbsp;&nbsp;&nbsp;[系列]：BOTANY BAY博特力湾&nbsp;&nbsp;&nbsp;[规格]：赤霞珠 美乐/梅洛&nbsp;&nbsp;&nbsp;[重量(g)]：750ml&nbsp;&nbsp;&nbsp;[产地]：澳大利亚
</div>


<div class="spjs_2"><span class="spxq_js1">商品介绍 </span><span class="xqyw">Product Ovierview</span></div>
<div class="spjs_left">
<div class="spjs_left1">樱桃爷爷 综合凤梨酥 台湾特产500g 原味、桂圆和核桃</div>
<div class="spjs_left2"><span class="xqjq2">产品名称:</span>名庄进口 正品澳洲 红酒原装750ml梅洛赤霞珠干红葡萄酒【包邮】</div>
<div class="spjs_left2"><span class="xqjq2">配料表:</span>100%葡萄汁</div>
<div class="spjs_left2"><span class="xqjq2">储藏方式:</span>低温、干燥、避光、通风</div>
<div class="spjs_left2"><span class="xqjq2">保质期:</span>3650 天</div>
<div class="spjs_left2"><span class="xqjq2">重量(g):</span>750ml</div>
<div class="spjs_left2"><span class="xqjq2">产地:</span>澳大利亚</div>
</div> 
<div class="spjs_right"><img src="/h/images/xq1.jpg" width="322" height="354" /></div>



<div class="none" style=" height:10px; clear:both;"></div>

<div class="spjs_2"><span class="spxq_js1">产品特色 </span><span class="xqyw">Product Hightlight</span></div>
 
<div class="cpts_jr">
郑州卓普科技有限公司是一家专业互联网信息技术服务公司，注册资本1000万元，现有专业技术人员20余人。主要从事网站策划、网页设计、网站建设（包括微网站制作、企业展示型网站建设、电子商务型网站建设、行业门户型网站建设、行业门户型网站建设等）、互联网营销等一系列互联网服务，服务站建设等）、互联网营销等一系列互联网服务，服务客户达200多家，郑州卓普科技有限公司是一家专业互联网信息技术服务公司，注册资本1000万元，现有专业技术人员20余人。主要从事网站策划、网页设计、网站建设（包括微网站制作、企业展示型网站建设、电子商务型网站建设、行业门户型网站建设、行业门户型网站建设等）、互联网营销等一系列互联网服务，服务站建设等）、互联网营销等一系列互联网服务，服务客户达200多家，郑州卓普科技有限公司是一家专业互联网信息技术服务公司，注册资本1000万元，现有专业技术人员20余人。主要从事网站策划、网页设计、网站建设（包括微网站制作、企业展示型网站建设、电子商务型网站建设、行业门户型网站建设、行业门户型网站建设等）、互联网营销等一系列互联网服务，服务站建设等）、互联网营销等一系列互联网服务，服务客户达200多家
</div>



</div>






 <div id="con_one_2" style="display:none">
 

<div class="sccj_2xq">
<div class="sccj_2bt">生产厂家</div>
<div class="sccj_nr">

服务：
1. 凡在本商城购买商品均提供“100%正品，假一罚十“保障；<br />

2. 本商城在售商品均支持7天无理由退换货（特殊商品除外，如：蔬果类、超过使用期限商品）；<br />

3. 本商城可提供正规机打发票，如有需要，请在订单备注。
<br />

退换货声明：<br />

1. 退换货条件：在退换货时间范围内，同时商品及外包装完整，不影响二次销售情况下，退回全部商品及赠品。<br />

2. 退换费用说明：如果是由商品本身质量问题或者是商家失误造成，退换货费用均由本商城承担；<br />

3. 如果是消费者个人原因导致的退换货，费用均由消费者个人承担。<br />

沅陵土家王食品有限责任公司于2000年3月19日注册成立，坐落于湖南西部，地处湘西武陵山深处的沅陵县城。 沅陵县土家王食品有限责任公司主要生产经营湘西土家风味肉类食品“土嘉王”牌腊味系列，湘西土家腌制腊味已有两千多年历史。土家王四品有限责任公司继承湘西土家腊味制作传统工艺，按照现代人的口味，采现代科学配方精心研制的肉类食品。 土家王公司生产的“土嘉王”腊味系列产品在2002年湖南第四届（国际）农博会荣获金奖，“土嘉王”松菌油在2004年湖南西部农博会上荣获金奖，“土嘉王”晒兰肉在2006年被评为“怀化市名牌产品”。土嘉王公司多次被怀化市消费者协会评为“信得过单位”。 公司总部设在湖南省怀化市沅陵县龙泉山,沅陵县土家王食品有限责任公司拥有完整、科学的质量管理体系。沅陵县土家王食品有限责任公司的诚信、实力和产品质量获得业界的认可。现公司已通过ISO9001-2000国际质量体系认证，“土嘉王”系列产品如今已闻名全省，正迈向全国市场。
厂家商品


</div>

</div>

 
 </div>
 
 
 
 
 
 
 <div id="con_one_3" style="display:none">
 

<div class="sccj_nr">

沅陵土家王食品有限责任公司于2000年3月19日注册成立，坐落于湖南西部，地处湘西武陵山深处的沅陵县城。 沅陵县土家王食品有限责任公司主要生产经营湘西土家风味肉类食品“土嘉王”牌腊味系列，湘西土家腌制腊味已有两千多年历史。土家王四品有限责任公司继承湘西土家腊味制作传统工艺，按照现代人的口味，采现代科学配方精心研制的肉类食品。 土家王公司生产的“土嘉王”腊味系列产品在2002年湖南第四届（国际）农博会荣获金奖，“土嘉王”松菌油在2004年湖南西部农博会上荣获金奖，“土嘉王”晒兰肉在2006年被评为“怀化市名牌产品”。土嘉王公司多次被怀化市消费者协会评为“信得过单位”。 公司总部设在湖南省怀化市沅陵县龙泉山,沅陵县土家王食品有限责任公司拥有完整、科学的质量管理体系。沅陵县土家王食品有限责任公司的诚信、实力和产品质量获得业界的认可。现公司已通过ISO9001-2000国际质量体系认证，“土嘉王”系列产品如今已闻名全省，正迈向全国市场。
厂家商品<br />



服务：<br />

1. 凡在本商城购买商品均提供“100%正品，假一罚十“保障；<br />

2. 本商城在售商品均支持7天无理由退换货（特殊商品除外，如：蔬果类、超过使用期限商品）；<br />

3. 本商城可提供正规机打发票，如有需要，请在订单备注。
<br />

退换货声明：<br />

1. 退换货条件：在退换货时间范围内，同时商品及外包装完整，不影响二次销售情况下，退回全部商品及赠品。<br />

2. 退换费用说明：如果是由商品本身质量问题或者是商家失误造成，退换货费用均由本商城承担；<br />

3. 如果是消费者个人原因导致的退换货，费用均由消费者个人承担。<br />




</div>


 </div>
 

 
 
 
 
</div>
</div>



</div>

<!--产品详情结束-->



</div>


<!--中部2右侧结束-->






</div>

<!--中部2结束-->





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
</html>
         