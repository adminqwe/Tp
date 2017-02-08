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

<div class="logo"><a href="#"><img src="/h/images/logo.jpg" width="338" height="113" / alt="本亲生活的logo标志"></a></div>
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
        @foreach($list as $row)
          <li style="border-top: none;">
            <div class="cate-tag"> <strong><a href="#">{{$row->name}}</a></strong>
              <div class="listModel">
                <p> <a href="#">茅台</a> <a href="#">洋河</a> <a href="#">郎酒</a> <a href="#">古井贡酒</a> </p>
                <p> <a href="#">习酒</a> <a href="#">珍酒</a> <a href="#">红星</a> <a href="#">泸州老窖</a> </p>
                <p> <a href="#">沱牌</a> <a href="#">国台</a> <a href="#">五粮液</a> <a href="#">剑南春</a> </p>
              </div>
            </div>
            <div class="list-item hide">

              <ul class="itemleft">
              @if($row->sub)
              @foreach($row->sub as $rows)
                <dl>
                  <dt><a href="/home/list/index/{{$rows->id}}">{{$rows->name}}</a></dt>
                  @if($rows->sub)
                  @foreach($rows->sub as $s)
                  <dd> <a href="/home/list/index/{{$s->id}}" style="color:orange">{{$s->name}}</a></dd>
                  @endforeach
                  @endif
                </dl>
                <div class="fn-clear"></div>
              @endforeach
              @endif
              </ul>
              <ul class="itemright">
                <dl>
                  <dt>促销信息</dt>
                </dl>
                <div class="news-list">
                  <p> <span class="red">[杜康]</span> <a href="#">酒体窖香幽雅、陈香舒适,只需156元，值得一试的好酒</a> </p>
                  <p> <span class="red">[红星]</span> <a href="#">经典红星153元热销千瓶，敢于全网誓比价！</a> </p>
                  <p> <span class="red">[太白]</span> <a href="#">中国第一诗酒，全场满200减50</a> </p>
                </div>
                <dl>
                  <dt>促销活动</dt>
                </dl>
                <div class="ad-list mt10"> <a href="#"><img src='http://img0.gjw.com/famous/2013/1108/f011895a50564f6fa4a689b053e9437c.jpg' width='210' height='100' /></a> <a href="#"><img src='http://img0.gjw.com/famous/2013/1108/67e10be5b9a045d68e01b395b94f57a4.jpg' width='210' height='100' /></a> <a href="#"><img src='http://img0.gjw.com/famous/2013/1108/3dcc2411eb9847d08e7b80e82d130ebc.jpg' width='210' height='100' /></a> </div>
              </ul>
            </div>
          </li>
        @endforeach
          <li>
            <div class="float-list-dnav"> </div>
          </li>
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



<div class="mainbanner">
  <div class="mainbanner_window">
    <ul id="slideContainer">
    @foreach($pic as $pics)
      <li><a href="#"><img src="{{$pics->pic}}" width="1920" height="500"  /></a></li>
    @endforeach
    </ul>
  </div>
  <ul class="mainbanner_list">
    <li><a href="javascript:void(0);">1</a></li>
    <li><a href="javascript:void(0);">2</a></li>
    <li><a href="javascript:void(0);">3</a></li>
    <li><a href="javascript:void(0);">4</a></li>
  </ul>
</div>

<!--banner结束-->


<!--中部开始-->

<div class="con_sy">

<!--中部1开始-->

<div class="con_sy1">

<!--选项卡切换开始-->

<div class="xxk_sy">

<!--代码开始-->

<script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
// function setTab(name,cursel,n){
// for(i=1;i<=n;i++){
//  var menu=document.getElementById(name+i);
//  var con=document.getElementById("con_"+name+"_"+i);
//  menu.className=i==cursel?"hover":"";
//  con.style.display=i==cursel?"block":"none";
// }
// }
//-->
</script>
</head>


<div id="Tab1">
<div class="Menubox">
<ul>
@foreach($shop as $key1=>$row)
@if($key1==0)
@foreach($row->er as $key2=>$row_s)
@if($key2==1)
@foreach($row_s->san as $row_ss)
 <li id="one1" class="ll" name="{{$row_ss->id}}"> {{$row_ss->name}}</li>
@endforeach
@endif
@endforeach
@endif
@endforeach

</ul>
</div>
<script type="text/javascript">
// alert($);
//获取li元素
$(".ll").mouseover(function(){
  // alert('sss');
  $(this).attr('style',"background-color:orange");
  $('.remai1').remove();
  //取当前li的id值
  n=$(this).attr('name');
  // alert(n);
  //Ajax
  $.get('/home/chooses',{n:n},function(data){
    // alert(data);
    con='';
    for(var i=0;i<data.length;i++){
      // alert(data);
   con+='<div class="remai1"><div class="remai1_1"><a href="/home/detail/index/'+data[i].sid+'"><img src="'+data[i].pic+'" width="164" height="181" /></a></div><div class="renai1_2"><a href="/home/detail/index/'+data[i].sid+'">'+data[i].descr+'</a></div><div class="renai1_3">本亲价：'+data[i].price+'.0</div></div>';
    }
    $("#con_one_1").append(con);

  },'json');

}).mouseout(function(){
  $(this).attr('style','background-color:#F1EFF0');
  // $(this).remove();
})
</script>


<div class="Contentbox">

 
 
<div id="con_one_1" class="hover">

@foreach($shop as $k=>$row)
@if($k==0)
@foreach($row->shop as $key=>$rows)
@if($key<5)
<div class="remai1">
<div class="remai1_1"><a href="/home/detail/index/{{$rows->id}}"><img src="{{$rows->pic}}" width="164" height="181" /></a></div>
<div class="renai1_2"><a href="/home/detail/index/{{$rows->id}}">{{$rows->name}}</a></div>
<div class="renai1_3">本亲价：¥{{$rows->price}}.0</div>
</div>
@endif
@endforeach
@endif
@endforeach




</div>



 
 
 
 
</div>
</div>




<!--代码结束-->





</div>


<!--选项卡切换结束-->



<!--积分兑换开始-->

<div class="jfdh_sy">
<div class="jfdh_bt">积分兑换</div>

<div class="jfdh1">
<div class="jflp2"><a href="#"><img src="/h/images/jifen_1.jpg" width="66" height="66" /></a></div>
<div class="jflp3">
紫糯米粽<br />
所需积分：300分<br />
<a href="#">查看详情</a>
</div>
</div>


<div class="jfdh1">
<div class="jflp2"><a href="#"><img src="/h/images/jifen_1.jpg" width="66" height="66" /></a></div>
<div class="jflp3">
紫糯米粽<br />
所需积分：300分<br />
<a href="#">查看详情</a>
</div>
</div>



<div class="jfdh1">
<div class="jflp2"><a href="#"><img src="/h/images/jifen_1.jpg" width="66" height="66" /></a></div>
<div class="jflp3">
紫糯米粽<br />
所需积分：300分<br />
<a href="#">查看详情</a>
</div>
</div>





</div>

<!--积分兑换结束-->


</div>


<!--中部1结束-->



<!--中部大米开始-->

<!--中部大米结束-->

<div class="none" style="height:20px;"></div>


<!--中部肉类开始-->



<!--中部肉类结束-->



<!--中部蔬菜开始-->

@foreach($shop as $key_k=>$row)
<div class="con_dm">

<div class="con_dmbt"><span class="dt2_2">{{$row->name}}</span>
<span class="dt2_3"> 
@foreach($row->er as $row_s)
<a href="/home/list/index/{{$row_s->id}}">{{$row_s->name}}>></a>
@foreach($row_s->san as $row_ss)
<span ><a href="/home/list/index/{{$row_ss->id}}" style="color:orange">{{$row_ss->name}}</a></span>
@endforeach


@endforeach
</span>
</div>


<div class="con2_dtk">

<!--左侧1开始-->

<div class="con2_zc">
  <script type="text/javascript">
  window.onload=function()
  {
    var oWrap=document.getElementById('wrap');
    var aLi=oWrap.getElementsByTagName('li');
    var aH2=oWrap.getElementsByTagName('h2');
    var aBox=oWrap.getElementsByTagName('div');


    
    for(var i=0; i<aLi.length; i++)
    {
      var iNow=0;
      aLi[i].index=i;
      aLi[i].onmouseover=function()
      {
        aH2[iNow].style.display='block';
        aBox[iNow].style.display='none';
        
        aH2[this.index].style.display='none';
        aBox[this.index].style.display='block';
        
        iNow=this.index;
      };
      
    }
    
  };
  </script>
    
    
    
    <div id="wrap">

    <ul>
      <li>      
      <h2 style="display:none"><span class="sz"><img src="/h/images/yi.jpg" width="20" height="22" /></span><span class="szmc">加拿大北极海参2000g/袋</span></h2>
            <a href="http://www.zhuotop.com">
            <div class="movielist" style="display:block">
            <img src="/h/images/dy2.jpg" />  
            <dl>
            <dt>粤海商品金枪鱼粤海商品</dt>  
            <dd><span>价格：</span><span class="jj_y">¥138.0</span></dd> 
            </dl>
            </div>
            </a>
      </li>
            
            
      <li>
        <h2><span class="sz"><img src="/h/images/er.jpg" width="20" height="22" /></span><span class="szmc">加拿大北极海参2000g/袋</span></h2>
            <a href="http://www.zhuotop.com">
            <div class="movielist" >
            <img src="/h/images/dy2.jpg" />  
            <dl>
            <dt>粤海商品金枪鱼粤海商品</dt>  
            <dd><span>价格：</span><span class="jj_y">¥138.0</span></dd> 
            </dl>
            </div>
            </a>
      </li>
            
      <li>
      <h2><span class="sz"><img src="/h/images/san.jpg" width="20" height="22" /></span><span class="szmc">加拿大北极海参2000g/袋</span></h2>
            <a href="http://www.zhuotop.com">
            <div class="movielist" >
            <img src="/h/images/dy2.jpg" />  
            <dl>
            <dt>粤海商品金枪鱼粤海商品</dt>  
            <dd><span>价格：</span><span class="jj_y">¥138.0</span></dd> 
            </dl>
            </div>
            </a>
      </li>
            
            
      <li>
      <h2><span class="sz"><img src="/h/images/si.jpg" width="20" height="22" /></span><span class="szmc">加拿大北极海参2000g/袋</span></h2>
            <a href="http://www.zhuotop.com">
            <div class="movielist" >
            <img src="/h/images/dy2.jpg" />  
            <dl>
            <dt>粤海商品金枪鱼粤海商品</dt>  
            <dd><span>价格：</span><span class="jj_y">¥138.0</span></dd> 
            </dl>
            </div>
            </a>
      </li>
    </ul>
        
        <div class="dmgg"><a href="#"><img src="/h/images/dmgg.jpg" width="230" height="83" /></a></div>
        
        
  </div>


</div>

<!--左侧1结束-->



<!--右侧开始-->

<div class="con2_yc">


<script type="text/javascript" src="/h/js/jq.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".hdpic dd a").hover(function() {
        $(this).find(".picshine").stop();
        $(this).find(".picshine").css("background-position", "-235px 0");
        $(this).find(".picshine").animate({
            backgroundPosition: '235px 0'
        },
        500);
        $(this).find(".pictitle").stop().animate({
            left: '0px'
        },
        {
            queue: false,
            duration: 450
        });
    },
    function() {
        $(this).find(".pictitle").stop().animate({
            left: '-1135px'
        },
        {
            queue: false,
            duration: 200
        });
    });
});
</script>



<div class="hdpic">
  <dl> 
  
    @foreach($row->shop as $key=>$rows)
    @if($key<5)
    
    <dd> <a href="/home/detail/index/{{$rows->id}}" target="_blank"> <img src="{{$rows->pic}}" width="184" height="278">
      <div class="pictitle">
<div class="zz">
      {!!$rows->descr!!}<br />
      <span style="color:#F00; font-size:18px;">本亲价：¥{{$rows->price}}.0</span>
</div>  
   </div>
      <div class="picshine"></div>
      </a> </dd>
    @endif
   
    @endforeach
      
    
        
    
    
     
  </dl>
</div>


</div>
<!--右侧结束-->


</div>

</div>

@endforeach
<!--中部蔬菜结束-->

<div class="none" style="height:20px;"></div>

<!--中部广告开始-->

<div class="con2_rl">

<div class="con_dmbt"><span class="dt2_2">广告专区</span>
<span class="dt2_3"> <a href="#">更多商品>></a></span>
</div>


<div class="con2_rldk">

<div class="roulei_1">
@foreach($ads as $row)
@if($row->position=="左")
<a href="http://{{$row->url}}"><img src="{{$row->pic}}" width="232" height="328" /></a>
@endif
@endforeach
</div>

<div class="roulei_2">
<div class="rou_gg1">
@foreach($ads as $row)
@if($row->position=="上")
<a href="http://{{$row->url}}"><img src="{{$row->pic}}" width="380" height="126" /></a>
@endif
@endforeach
</div>
<div class="rou_gg1" style="padding-left:10px;">
@foreach($ads as $row)
@if($row->position=="下")
<a href="http://{{$row->url}}"><img src="{{$row->pic}}" width="380" height="126" /></a>
@endif
@endforeach
</div>
@foreach($shop as $key=>$row)
@if($key==1)
@foreach($row->shop as $rows)
<div class="tpl_2" style="margin-left:0px;">
<a href="/home/detail/index/{{$rows->id}}"><div class="tpl_2bt">{!!$rows->descr!!}</div><div class="shen_jg">本亲价：¥{{$rows->price}}.0</div><div class="shen_dt"><img src="{{$rows->pic}}" width="180" height="114" /></div></a>
</div>

@endforeach
@endif
@endforeach




</div>

<div class="roulei_3">
@foreach($ads as $row)
@if($row->position=="右")
<a href="http://{{$row->url}}"><img src="{{$row->pic}}" width="149" height="333" /></a>
@endif
@endforeach
</div>



</div>




</div>


<!--中部广告结束-->



<!--公司简介、动态开始-->

<div class="con_d">

<!--简介开始-->

<div class="con_jj">
<div class="con_jjbt"><span style="float:left;"><img src="/h/images/gsjj1.jpg" width="107" height="35" /></span><span style="float:right; line-height:35px; color:#669933;"><a href="#"> >> 查看详情</a></span></div>
<div class="con_jjtp"><img src="/h/images/gsjj2.jpg" width="349" height="111" /></div>
<div class="con_jjnr">郑州卓普科技有限公司是一家专业互联网信息技术服务公司，注册资本1000万元，现有专业技术人员20余人。主要从事网站策划、网页设计、网站建设（包括微网站制作、企业展示型网站建设、电子商务型网站建设、行业门户型网站建设、行业门户型网站建设等）、互联网营销等一系列互联网服务，服务站建设等）、互联网营销等一系列互联网服务，服务客户达200多家，涉及教育、物流、医院、餐饮等多第一品牌！</div>

</div>

<!--简介结束-->

<div class="ggbj2"><img src="/h/images/gsjj3.jpg" width="421" height="292" /></div>


<!--公司动态开始-->


<div class="con_jj">
<div class="con_jjbt"><img src="/h/images/gsdt.jpg" width="120" height="35" /></div>
<div class="con_jjtp"><img src="/h/images/dtt.jpg" width="348" height="111" /></div>
<div class="con_jjnr">

<ul>
<li><a href="#" title="郑州卓普科技有限公司是一家专业互联网信息技术服务公司">郑州卓普科技有限公司是一家专业互联网信息技术服务公司</a></li>
<li><a href="#" title="郑州卓普科技有限公司是一家专业互联网信息技术服务公司">郑州卓普科技有限公司是一家专业互联网信息技术服务公司</a></li>
<li><a href="#" title="郑州卓普科技有限公司是一家专业互联网信息技术服务公司">郑州卓普科技有限公司是一家专业互联网信息技术服务公司</a></li>
<li><a href="#" title="郑州卓普科技有限公司是一家专业互联网信息技术服务公司">郑州卓普科技有限公司是一家专业互联网信息技术服务公司</a></li>
<li><a href="#" title="郑州卓普科技有限公司是一家专业互联网信息技术服务公司">郑州卓普科技有限公司是一家专业互联网信息技术服务公司</a></li>
</ul>


</div>

</div>

<!--公司动态结束-->



</div>


<!--公司简介、动态开始结束-->


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
<div class="links_main">友情连接：
@foreach($link as $links)
&nbsp;<a href="http://{{$links->url}}">{{$links->webname}}</a> &nbsp; | 
@endforeach
</div>
</div>


<div class="banquan">Copyright © 2014-2019 All Right Reserved 版权所有：本亲生活网 备案号： 豫ICP 450051256-1号<br />

公司地址：郑州市东风路汇宝花园13号楼2单元202室 联系人：高经理 联系电话：13692548036 技术支持： <a href="http://www.zhuotop.com">卓普科技</a>

<div class="banquan2"><img src="/h/images/xinr.jpg" width="589" height="51" /></div>

</div>


<!--友情链接结束-->

<!--底部结束-->



</body>

</html>