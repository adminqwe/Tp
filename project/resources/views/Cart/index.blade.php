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
<link rel="stylesheet" type="text/css" href="/h/css/main.css"/>
<link rel="stylesheet" type="text/css" href="/h/css/basic.css">
<link rel="stylesheet" type="text/css" href="/h/css/style.css" />
<link rel="stylesheet" href="/h/style/base.css" />
<link rel="stylesheet" href="/h/style/head.css" />
<script type="text/javascript" src="/b/js/jquery-1.8.3.min.js"></script>

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

<div class="logo" style="padding-left:130px;"><a href="/home/index"><img src="/h/images/logo.jpg" width="338" height="113" / alt="本亲生活的logo标志"></a></div>
<div class="top_you" style="background:url(images/dianhua2.jpg); margin-right:0px;">

<div class="ss_1"><input name="key" type="text" id="key" value="请输入您要搜索的产品" size="30"      
          onclick="if(value==defaultValue){value='';this.style.color='#898b8c'}"    
          onBlur="if(!value){value=defaultValue;this.style.color='#999'}" style="color:#999; line-height:26px;" / class="ssk1"><input name="" value="搜 索" type="button" / class="button1"></div>

</div>

</div>

</div>

<!--抬头结束-->



<!--中部开始-->

<div class="ding_tjb">
<div class="ding_1">
<table width="0" border="0" cellspacing="0" cellpadding="0">
  <tr style=" font-family:微软雅黑; text-align:center; font-size:14px;">
    <td width="69">操作</td>
    <td width="279">商品信息</td>
    <td width="116">重量（g）</td>
    <td width="114">单价（元）</td>
    <td width="147">数量</td>
    <td width="118">小计（元）</td>
    <td width="72">操作</td>
  </tr>
</table>
</div>


<form action="/home/homeorder/insert" method="post">
@foreach($cart as $key=>$value)
<div class="dingd_sl">
<table width="0" border="0" cellspacing="0" cellpadding="0">
  <tr style=" font-family:微软雅黑; text-align:center; font-size:14px;">
    <td width="43" height="87"><input name="" type="checkbox" value="" / style=" margin-left:10px; margin-right:10px;" class="ckbox"></td>
    <td width="305"  ><span class="ddtp_3"><img src="{{$value['pic']}}" width="59" height="58" /></span><span class="ddmc_xq"  style="position:relative;left:80px;"><a href="#">{{$value['name']}}</a></span></td>
    
    <td width="116">2600</td>
    <td width="114" style="color:#F00;" class="price">￥{{$value['price']}}.00</td>
    <td width="147">
    
    <input  value="-" type="button" class="jian" nam="{{$value['id']}}" / style="background: url(/h/images/jia.jpg); width:19px; height:19px;">

    <input type="text" value="{{$value['num']}}" name="{{$value['id']}}"/ style="width:40px; text-align:center; height:18px; border:1px solid #dddddd;">
    
    <!-- <input type="hidden" name="goods[{{$key}}]['num']" value="{{$value['num']}}"/> -->

    <input  value="+" type="button" class="jia" nam="{{$value['id']}}"/ style="background: url(/h/images/jia.jpg); width:19px; height:19px;"></td>

    <!-- <input type="hidden" name="goods[{{$key}}]['id']" value="{{$value['id']}}"/> -->

    <td width="118" style="color:#F00;">￥<span name="{{$value['id']}}" class="xiaoji">{{($value['price'])*($value['num'])}}</span>.00</td>
    <td width="72"><a href="/cartdel?id={{$value['id']}}">删除</a></td>
  </tr>
</table>
</div>
@endforeach


<div class="ding_1">
<table width="0" border="0" cellspacing="0" cellpadding="0">
  <tr style=" font-family:微软雅黑; text-align:center; font-size:14px;">
    <td width="200"><input name="" type="checkbox" value="" / style=" margin-left:10px; margin-right:10px;" class="alldel">全选
    <input name="" type="checkbox" value="" / style=" margin-left:10px; margin-right:10px;" class="dodel">删除选中商品
    <!-- <input name="" type="checkbox" value="" / style=" margin-left:10px; margin-right:10px;" class="nodel">全不选
    <input name="" type="checkbox" value="" / style=" margin-left:10px; margin-right:10px;" class="fdel">反选 -->
    </td>
    <td width="279"></td>
    <td width="116"></td>
    <td width="114"</td>
    <td width="147"></td>
    <td width="118"></td>
    <td width="72"></td>
  </tr>
</table>
</div>

<div class="jxgw_zj">

<div class="jxgw_wq"><a href="/home/index">继续购物</a></div>
<div class="zjs2">
<div class="none" style="height:15px;"></div>
<div class="zjs2_1">共<span style="color:#F00; font-size:14px;" name="shopnum">0</span>件商品，商品金额：<span style="color:#F00; font-size:15px;" class="shopnums">￥0.00元</span></div>
<input type="hidden" value="{{old('xuanzhong')}}" name="xuanzhong"/>
<div class="zjs2_1">商品总价（不含运费）：<span style="color:#F00; font-size:15px;" class="shopnums">￥0.00元</span></div> 
{{csrf_field()}}
<!-- <div class="qjs"><a href="/home/order/insert" type="submit">去结算</a></div> -->
<input type="submit" value="去结算" class="qjs"/>
</div>


</div>
</form>


<!--浏览记录开始-->

<div class="lljl_2">
<div class="lljl_bt1"><span class="lljl_mc">浏览记录</span></div>

<div class="lljl_tp1">
<div class="lljl_tp2"><a href="#"><img src="/h/images/lljl1.jpg" width="180" height="178" /></a></div>
<div class="lljl_tp2_mc"><a href="#">樱桃爷爷 综合凤梨酥 台湾特产500g 原味、桂圆和核桃</a>	</div>
<div class="lljl_tp2_jg"><span class="jia_jg">￥17.5</span></div>
</div>


<div class="lljl_tp1">
<div class="lljl_tp2"><a href="#"><img src="/h/images/lljl1.jpg" width="180" height="178" /></a></div>
<div class="lljl_tp2_mc"><a href="#">樱桃爷爷 综合凤梨酥 台湾特产500g 原味、桂圆和核桃</a>	</div>
<div class="lljl_tp2_jg"><span class="jia_jg">￥17.5</span></div>
</div>


<div class="lljl_tp1">
<div class="lljl_tp2"><a href="#"><img src="/h/images/lljl1.jpg" width="180" height="178" /></a></div>
<div class="lljl_tp2_mc"><a href="#">樱桃爷爷 综合凤梨酥 台湾特产500g 原味、桂圆和核桃</a>	</div>
<div class="lljl_tp2_jg"><span class="jia_jg">￥17.5</span></div>
</div>



<div class="lljl_tp1">
<div class="lljl_tp2"><a href="#"><img src="/h/images/lljl1.jpg" width="180" height="178" /></a></div>
<div class="lljl_tp2_mc"><a href="#">樱桃爷爷 综合凤梨酥 台湾特产500g 原味、桂圆和核桃</a>	</div>
<div class="lljl_tp2_jg"><span class="jia_jg">￥17.5</span></div>
</div>



<div class="lljl_tp1">
<div class="lljl_tp2"><a href="#"><img src="/h/images/lljl1.jpg" width="180" height="178" /></a></div>
<div class="lljl_tp2_mc"><a href="#">樱桃爷爷 综合凤梨酥 台湾特产500g 原味、桂圆和核桃</a>	</div>
<div class="lljl_tp2_jg"><span class="jia_jg">￥17.5</span></div>
</div>








</div>

<!--浏览记录结束-->



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
// alert($);
  //全选
  $(".alldel").click(function(){
    // alert('sss');
    $(".dingd_sl").find("tr").each(function(){
      $(this).find(":checkbox").attr('checked',true);

    })
    $(".nodel").attr('checked',false);
    $(".fdel").attr('checked',false);
    $(".dodel").attr('checked',false);
    if(!$(".alldel").attr('checked')){
      var sum=0;
      $("span[name='shopnum']").html(0);
      $(".shopnums").html(sum);
      $(".dingd_sl").find("tr").each(function(){
      $(this).find(":checkbox").attr('checked',false);
    })

    }
    var a=0;
    // var aa=[];
    var sum=0;
    if($(".alldel").attr('checked')){
        $(".dingd_sl").find("tr").each(function(index){
         
         // $(".xiaoji").each(function(){
         //  alert($(this).html());
         // })
         // alert($(this).find(".xiaoji").html());
        // $(this).find(".xiaoji").each(function(b){
        //   //获取每个小计的价格，然后相加
        //    sum += parseInt($(this).html());      
        // }) 
        sum += parseInt($(this).find(".xiaoji").html()); 
        // 循环一次，a加1
          a=a+1;
        })   
        // alert(sum);   
        $("span[name='shopnum']").html(a);
        $(".shopnums").html(sum);

      }
  })

  //当tr取消的时候，全选按钮取消
      $(".dingd_sl").find("tr").each(function(){
        //给每个tr绑定单击事件
        $(".dingd_sl").find("tr").click(function(){
            //如果tr其中一个没有选中的情况下，让全选按钮取消
                if(!$(this).find(":checkbox").attr('checked')){
                $(".alldel").attr('checked',false);
              }
              var a=0;//判断没有选中的tr
              var b=0;//循环几个，有几个tr
              var sum=0;
            $(".dingd_sl").find("tr").each(function(){
                b=b+1;

              if($(this).find(":checkbox").attr("checked")){
                //选中1次，让a加1
                a=a+1;
                sum += parseInt($(this).find(".xiaoji").html());
                }
                //把商品总价赋值给shopnums
              $(".shopnums").html(sum);
            })
            //将商品的数量赋值给shopnum
            $("span[name='shopnum']").html(a);
            //如果选中的tr和全部的tr相等，则全选按钮选中
            if(a==b){
              $(".alldel").attr('checked',true);
            }
            // alert(a);
    })

  })
    
    
  //全不选
  $(".nodel").click(function(){
    $(".dingd_sl").find("tr").each(function(){
      $(this).find(":checkbox").attr('checked',false);
    })
    $(".alldel").attr('checked',false);
    $(".fdel").attr('checked',false);
  })
  //反选
  $(".fdel").click(function(){
    $(".dingd_sl").find("tr").each(function(){
      // alert('ssssss'); 
      //如果选中，把选中的状态改为不选中
      if($(this).find(":checkbox").attr('checked')){
        $(this).find(":checkbox").attr('checked',false);
      }else{
        $(this).find(":checkbox").attr('checked',true);
      }
    })
    $(".nodel").attr('checked',false);
    $(".alldel").attr('checked',false);
  })
  //获取删除，绑定单击事件
  $('.dodel').click(function(){
    // alert('sss');
    //存储选中数据的id值
    // a=new Array();
    a=[];
    // //获取选中数据的id
    var c=0;
    $(".dingd_sl").find("tr").each(function(){
      //判断是否被选中
      
      if($(this).find(":checkbox").attr("checked")){
        // alert('ssss');
        c=c+1;
        //获取id
        id=$(this).find(".jia").attr('nam');
        //将所有的id放在数组当中
        a.push(id);
      }
      
      
    })
    // alert(c);
    if(c!==0){
      s=confirm('您确定要删除吗？');
    }else{
      alert("请先选中商品");
    }
    if(s){
      $.get("/home/dodel",{uname:a},function($data){
        // alert($data);
        if($data==1){
        //   alert('删除成功');
          //删除html样式
          for(var i=0;i<a.length;i++){
            // $("input[value='a[i]+']").parents('tr').remove();
            $("input[name="+a[i]+"]").parents(".dingd_sl").remove();
          }
          $("span[name='shopnum']").html(0);
          $(".shopnums").html(0);
        }
      })
    }
  })
</script>

<script type="text/javascript">
// alert($);
// m=$(".price").html();
// alert(m);

//================================购物车加按钮Ajax=========================

//获取加号元素
$(".jia").click(function(){
//   //获取当前加号所在input的id值
  n=$(this).attr('nam');
  // alert(n);
//   //Ajax
  $.get('/home/jia',{n:n},function(data){




    // alert(data);
    var sum=0;
    for(var i=0;i<data.length;i++){
      // alert(data[i]['price']);
      $("input[name="+data[i]['id']+"]").val(data[i]['num']);

      $("span[name="+data[i]['id']+"]").html(data[i]['price']*data[i]['num']);
          if($("span[name="+data[i]['id']+"]").parents().find("tr").find(":checkbox").attr("checked")){
          sum+=parseInt($("span[name="+data[i]['id']+"]").html());
        }
    }
    $(".shopnums").html(sum);
  });
              


            
})
//================================购物车减按钮Ajax=========================

//获取减号元素
$(".jian").click(function(){
  //获取当前减号所在input的id值
  n=$(this).attr('nam');
  // alert(n);
  //Ajax
  $.get('/home/jian',{n:n},function(data){
    // alert(data);
    var sam=0;
    for(var i=0;i<data.length;i++){
      $("input[name="+data[i]['id']+"]").val(data[i]['num']);
      $("span[name="+data[i]['id']+"]").html(data[i]['price']*data[i]['num']);
      if($("span[name="+data[i]['id']+"]").parents().find("tr").find(":checkbox").attr("checked")){
          sam += parseInt($("span[name="+data[i]['id']+"]").html());
        }
    }
    $(".shopnums").html(sam);
  });
})
</script>
<script type="text/javascript">
//给提交按钮绑定事件
$("form").submit(function(){
  // alert('sss');
  d=[];
  var a=0;
  $(".dingd_sl").find("tr").each(function(){
    if($(this).find(":checkbox").attr("checked")){
      //将选中的id放在数组当中
      //获取id
      id=$(this).find(".jia").attr('nam');
      d.push(id);
      a=a+1;
    }
    $("input[name='xuanzhong']").val(d);

  })
  // alert(d);
  

  if(a==0){
      alert('请选择商品');
      return false;
    }
})
</script>
</html>