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



<!--banner结束-->





<!--中部开始-->


<div class="con_ny">

<div class="con_dqwz">您的当前位置：<a href="/home/index">首页</a> >> {{$list_n->name}}</div>
@foreach($list_t as $row)
<div class="tplist1" style="margin-left:0px;">
<div class="tplist1_1"><a href="/home/detail/index/{{$row->id}}"><img src="{{$row->pic}}" width="296" height="185" /></a></div>
<div class="tplist_yy"></div>
<div class="tplist_mc"><a href="/home/detail/index/$row['id']">{{$row->name}}</a></div>
<div class="tplist_mcjg"><span class="yuanjia">原价￥500.00</span>                  <span class="tejia">特卖价￥{{$row->id}}.0</span></div>
</div>
@endforeach





<div class="fy">首页 上一页 下一页 尾页 页次：1/1页  9个产品/页 转到：</div>






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