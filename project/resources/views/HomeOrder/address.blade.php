<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0 ,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>结算页面</title>

		<link href="/h/yuejilala/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />

		<link href="/h/yuejilala/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/h/yuejilala/css/cartstyle.css" rel="stylesheet" type="text/css" />

		<link href="/h/yuejilala/css/jsstyle.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="/h/yuejilala/js/address.js"></script>
		<script type="text/javascript" src="/b/js/jquery-1.8.3.min.js"></script>

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
						<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
					</form>
				</div>
			</div>

			<div class="clear"></div>
			<div class="concent">
				<!--地址 -->
				<form action="/order/create" method="post">
				<div class="paycont">
					<div class="address">
						<h3>确认收货地址 </h3>
						<div class="control">
							<div class="tc-btn createAddr theme-login am-btn am-btn-danger">使用新地址</div>
						</div>
						<div class="clear"></div>
						<ul>
							@foreach($alladdress as $row)
							<div class="per-border"></div>
							<li class="user-addresslist" aid="{{$row->id}}">
								<div class="address-left">
									<div class="user DefaultAddr">
										<span class="buy-address-detail">   
                   						<span class="buy-user">{{$row->name}} </span>
										<span class="buy-phone">{{$row->phone}}</span>
										</span>
									</div>
									<div class="default-address DefaultAddr">
										<span class="buy-line-title buy-line-title-type">收货地址：</span>
										<span class="buy--address-detail">{{$row->adds}}</span>
										
										

										</span>
									</div>
									<ins class="deftip hidden">默认地址</ins>
								</div>
								<div class="address-right">
									<span class="am-icon-angle-right am-icon-lg"></span>
								</div>
								<div class="clear"></div>

								<div class="new-addr-btn">
									<a href="/adds/del/{{$row->id}}">删除</a>
								</div>

							</li>
						@endforeach
						</ul>
						<input type="hidden" value="" name="address_id"/>
						<div class="clear"></div>
					</div>

					<!--物流 -->
					<div class="logistics">
						<h3>选择物流方式</h3>
						<ul class="op_express_delivery_hot">
							<li data-value="yuantong" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -468px"></i>圆通<span></span></li>
							<li data-value="shentong" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -1008px"></i>申通<span></span></li>
							<li data-value="yunda" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -576px"></i>韵达<span></span></li>
							<li data-value="zhongtong" class="OP_LOG_BTN op_express_delivery_hot_last "><i class="c-gap-right" style="background-position:0px -324px"></i>中通<span></span></li>
							<li data-value="shunfeng" class="OP_LOG_BTN  op_express_delivery_hot_bottom"><i class="c-gap-right" style="background-position:0px -180px"></i>顺丰<span></span></li>
						</ul>
					</div>
					<div class="clear"></div>

					<!--支付方式-->
					<div class="logistics">
						<h3>选择支付方式</h3>
						<ul class="pay-list">
							<li class="pay card"><img src="/h/yuejilala/images/wangyin.jpg" />银联<span></span></li>
							<li class="pay qq"><img src="/h/yuejilala/images/weizhifu.jpg" />微信<span></span></li>
							<li class="pay taobao"><img src="/h/yuejilala/images/zhifubao.jpg" />支付宝<span></span></li>
						</ul>
					</div>
					<div class="clear"></div>

					<!--订单 -->
					<div class="concent">
						<div id="payTable">
							<h3>确认订单信息</h3>
							<div class="cart-table-th">
								<div class="wp">

									<div class="th th-item">
										<div class="td-inner">商品信息</div>
									</div>
									<div class="th th-price">
										<div class="td-inner">单价</div>
									</div>
									<div class="th th-amount">
										<div class="td-inner">数量</div>
									</div>
									<div class="th th-sum">
										<div class="td-inner">金额</div>
									</div>
									<div class="th th-oplist">
										<div class="td-inner">配送方式</div>
									</div>

								</div>
							</div>
							<div class="clear"></div>

							@foreach($data as $row)
							<tr id="J_BundleList_s_1911116345_1" class="item-list">
								<div id="J_Bundle_s_1911116345_1_0" class="bundle  bundle-last">
									<div class="bundle-main">
										<ul class="item-content clearfix">
											<div class="pay-phone">
												<li class="td td-item">
													<div class="item-pic">
														<a href="#" class="J_MakePoint">
															<img src="{{$row['pic']}}" class="itempic J_ItemImg"></a>
													</div>
													<div class="item-info">
														<div class="item-basic-info" style="margin-left:125px">
															<a href="#" target="_blank" title="美康粉黛醉美唇膏 持久保湿滋润防水不掉色" class="item-title J_MakePoint" data-point="tbcart.8.11">{{$row['name']}}</a>
														</div>
													</div>
												</li>
												<li class="td td-info">
													<div class="item-props">
														<!-- <span class="sku-line">颜色：10#蜜橘色+17#樱花粉</span>
														<span class="sku-line">包装：两支手袋装（送彩带）</span> -->
													</div>
												</li>
												<li class="td td-price">
													<div class="item-price price-promo-promo">
														<div class="price-content">
															<em class="J_Price price-now">{{$row['price']}}.00</em>
														</div>
													</div>
												</li>
											</div>

											<li class="td td-amount">
												<div class="amount-wrapper ">
													<div class="item-amount ">
														<span class="phone-title">购买数量</span>
														<div class="sl">
															
															<!-- <input class="text_box" name="" type="text" value="3" style="width:30px;" /> -->
															<span>{{$row['num']}}</span>
															
														</div>
													</div>
												</div>
											</li>
											<li class="td td-sum">
												<div class="td-inner">
													<em tabindex="0" class="J_ItemSum number">{{($row['num'])*($row['price'])}}.00</em>
												</div>
											</li>
											<li class="td td-oplist">
												<div class="td-inner">
													<span class="phone-title">配送方式</span>
													<div class="pay-logis">
														包邮
													</div>
												</div>
											</li>

										</ul>
										<div class="clear"></div>

									</div>
							</tr>
							@endforeach
							</div>
							<div class="clear"></div>
							<div class="pay-total">
						<!--留言-->
							<div class="order-extra">
								<div class="order-user-info">
									<div id="holyshit257" class="memo">
										<label>买家留言：</label>
										<input type="text" title="选填,对本次交易的说明（建议填写已经和卖家达成一致的说明）" placeholder="选填,建议填写和卖家达成一致的说明" class="memo-input J_MakePoint c2c-text-default memo-close">
										<div class="msg hidden J-msg">
											<p class="error">最多输入500个字符</p>
										</div>
									</div>
								</div>

							</div>
							<!--优惠券 -->
							<div class="buy-agio">
								<li class="td td-coupon">

									<span class="coupon-title">优惠券</span>
									<select data-am-selected>
										<option value="a">
											<div class="c-price">
												<strong>￥8</strong>
											</div>
											<div class="c-limit">
												【消费满95元可用】
											</div>
										</option>
										<option value="b" selected>
											<div class="c-price">
												<strong>￥3</strong>
											</div>
											<div class="c-limit">
												【无使用门槛】
											</div>
										</option>
									</select>
								</li>

								<li class="td td-bonus">

									<span class="bonus-title">红包</span>
									<select data-am-selected>
										<option value="a">
											<div class="item-info">
												¥50.00<span>元</span>
											</div>
											<div class="item-remainderprice">
												<span>还剩</span>10.40<span>元</span>
											</div>
										</option>
										<option value="b" selected>
											<div class="item-info">
												¥50.00<span>元</span>
											</div>
											<div class="item-remainderprice">
												<span>还剩</span>50.00<span>元</span>
											</div>
										</option>
									</select>

								</li>

							</div>
							<div class="clear"></div>
							</div>
							<!--含运费小计 -->
							<div class="buy-point-discharge ">
								<p class="price g_price ">
									合计（含运费） <span>¥</span><em class="pay-sum">{{$total}}.00</em>
								</p>
							</div>

							<!--信息 -->
							<div class="order-go clearfix">
								<div class="pay-confirm clearfix">
									<div class="box">
										<div tabindex="0" id="holyshit267" class="realPay"><em class="t">实付款：</em>
											<span class="price g_price ">
                                    <span>¥</span> <em class="style-large-bold-red " id="J_ActualFee">{{$total}}.00</em>
											</span>
										</div>

										<div id="holyshit268" class="pay-address">

											<p class="buy-footer-address">
												<span class="buy-line-title buy-line-title-type">寄送至：</span>
												<!-- <span class="buy--address-detail">
								   <span class="province">湖北</span>省
												<span class="city">武汉</span>市
												<span class="dist">洪山</span>区
												<span class="street">雄楚大道666号(中南财经政法大学)</span>
												</span> -->
												<span class="buy--address-detail"></span>
												</span>
											</p>
											<p class="buy-footer-address">
												<span class="buy-line-title">收货人：</span>
												<span class="buy-address-details"></span>  
                                         		<span class="buy-users"></span>
												<span class="buy-phones"></span>	
											</p>
										</div>
									</div>
									<input type="hidden" name="total" value="{{$total}}"/>
									<div id="holyshit269" class="submitOrder">
										<div class="go-btn-wrap">
											<!-- <a id="J_Go" href="success.html" class="btn-go" tabindex="0" title="点击此按钮，提交订单">提交订单</a> -->
											<input type="submit" value="提交订单" class="btn-go" tabindex="0" style="float:right"/>
										</div>
									</div>
									{{csrf_field()}}
									<div class="clear"></div>
								</div>
							</div>
						</div>

						<div class="clear"></div>
					</div>
				</div>
				</form>
				<div class="footer">
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
			</div>
			<div class="theme-popover-mask"></div>
			<div class="theme-popover">

				<!--标题 -->
				<div class="am-cf am-padding">
					<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add address</small></div>
				</div>
				<hr/>

				<div class="am-u-md-12">
					<form class="am-form am-form-horizontal" action="/address/insert" method="post">

						<div class="am-form-group">
							<label for="user-name" class="am-form-label">收货人</label>
							<div class="am-form-content">
								<input type="text" id="user-name" name="name" placeholder="收货人">
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-phone" class="am-form-label">手机号码</label>
							<div class="am-form-content">
								<input id="user-phone" placeholder="手机号必填" name="phone" type="text">
							</div>
						</div>

						<div class="am-form-group">
							<!-- <label for="user-phone" class="am-form-label">所在地</label> -->
							<div class="am-form-content address">
								<!-- <select data-am-selected  name="address">
									<option value="a">浙江省</option>
									<option value="b">湖北省</option>
								</select> -->
								<!-- <select name="address" id="sid">
								<option value="" selected='selected' disabled='disabled'>--请选择--</option>
								</select> -->
								<!-- <input id="user-address" placeholder="请输入地址" name="address" type="text"> -->
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-intro" class="am-form-label">详细地址</label>
							<div class="am-form-content">
								<textarea class="" rows="3" id="user-intro" placeholder="输入详细地址" name="adds"></textarea>
								<!-- <small>100字以内写出你的详细地址...</small> -->
							</div>
						</div>
						{{csrf_field()}}
						<div class="am-form-group theme-poptit">
							<div class="am-u-sm-9 am-u-sm-push-3">
								<!-- <div class="am-btn am-btn-danger">保存</div> -->
								<input type="submit" class="am-btn am-btn-danger" value="保存">
								<div class="am-btn am-btn-danger close">取消</div>
							</div>
						</div>
					</form>
				</div>

			</div>

			<div class="clear"></div>
	</body>
	<script type="text/javascript">
		//给收货地址绑定单击事件
		$(".user-addresslist").click(function(){
			// alert("aaa");
			//获取aid的属性值
			id=$(this).attr('aid');
			// alert(id);
			//把获取到的id的值赋值给隐藏域name为address_id的值
			$("input[name='address_id']").val(id);
			// alert($(this).find(".buy-user").html());
			// alert($(this).find(".buy--address-detail").html());
			// alert($(this).find(".buy-phone").html());
			$(".buy--address-detail").html($(this).find(".buy--address-detail").html());
			$(".buy-phones").html($(this).find(".buy-phone").html());
			$(".buy-users").html($(this).find(".buy-user").html());
		})
	</script>
	<!-- <script type="text/javascript">
		$.ajax({
			'url':'/csjl',
			'type':'get',
			'async':false,
			'data':{upid:0},
			'dataType':'json',
			success:
			function(data){
				// alert(data);
				for(var i=0;i<data.length;i++){
					var info='<option value="'+data[i].id+'">'+data[i].name+'</option>';
					//把含有数据的option下拉选项内部插入到id值是sid的select元素中
					$("#sid").append(info);
				}
			},
			error:
			function(){
				alert('Ajax响应失败');
			}
			// alert(info);
		})
			//其他级城市
		$("select").live('change',function(){
			ob=$(this);
			//清除
			ob.nextAll('select').remove();
			//获取上一级的id
			// s=ob.val();
			$.ajax({
				'type':'get',
				'url':'/csjl',
				'data':{upid:ob.val()},
				'async':false,
				'dataType':'json',
				success:
				function(data){
					//创建select元素
					// document.createElement
					select=$("<select><option disabled='disabled' selected='selected'>请选择</option></select>");
					if(data.length>0){
						//遍历
						var csjl="";
						for(var i=0;i<data.length;i++){
							var info='<option value="'+data[i].id+'">'+data[i].name+'</option>';
							
						}
						ob.after(select);
					}
				},
				error:
				function(){
					alert('Ajax响应失败');
				}
			})
		})

	</script> -->
</html>