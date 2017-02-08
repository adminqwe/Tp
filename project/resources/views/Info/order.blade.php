<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0" /> 
  <title>订单管理</title> 
  <link href="/h/yuejilala/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" /> 
  <link href="/h/yuejilala/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" /> 
  <link href="/h/yuejilala/css/personal.css" rel="stylesheet" type="text/css" /> 
  <link href="/h/yuejilala/css/orstyle.css" rel="stylesheet" type="text/css" /> 
  <script src="/h/yuejilala/AmazeUI-2.4.2/assets/js/jquery.min.js"></script> 
  <script src="/h/yuejilala/AmazeUI-2.4.2/assets/js/amazeui.js"></script> 
 </head> 
 <body> 
  <!--头 --> 
  <header> 
   <article> 
    <div class="mt-logo"> 
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
        <a href="/home/logout">[退出]</a></span>
        <span class="yh_zx" style="float:right"><a href="/home/info/index">用户中心</a>  |  <a href="/home/info/order">我的订单</a>  |  <a href="#">帮助中心</a>  |  <a href="#">联系方式</a></span></div>
      </div>
     <!--悬浮搜索框--> 
     <div class="nav white"> 
      <div class="logoBig"> 
       <li><img src="/h/yuejilala/images/logobig.png" /></li> 
      </div> 
      <div class="search-bar pr"> 
       <a name="index_none_header_sysc" href="#"></a> 
       <form> 
        <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off" /> 
        <input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit" /> 
       </form> 
      </div> 
     </div> 
     <div class="clear"></div> 
    </div>  
   </article> 
  </header> 
  <div class="nav-table"> 
   <div class="long-title">
    <span class="all-goods">全部分类</span>
   </div> 
   <div class="nav-cont"> 
    <ul> 
     <li class="index"><a href="/home/index">首页</a></li> 
     <li class="qc"><a href="#">闪购</a></li> 
     <li class="qc"><a href="#">限时抢</a></li> 
     <li class="qc"><a href="#">团购</a></li> 
     <li class="qc last"><a href="#">大包装</a></li> 
    </ul> 
    <div class="nav-extra"> 
     <i class="am-icon-user-secret am-icon-md nav-user"></i>
     <b></b>我的福利 
     <i class="am-icon-angle-right" style="padding-left: 10px;"></i> 
    </div> 
   </div> 
  </div> 
  <b class="line"></b> 
  <div class="center"> 
   <div class="col-main"> 
    <div class="main-wrap"> 
     <div class="user-order"> 
      <!--标题 --> 
      <div class="am-cf am-padding"> 
       <div class="am-fl am-cf">
        <strong class="am-text-danger am-text-lg">订单管理</strong> / 
        <small>Order</small>
       </div> 
      </div> 
      <hr /> 
      <div class="am-tabs am-tabs-d2 am-margin" data-am-tabs=""> 
       <ul class="am-avg-sm-5 am-tabs-nav am-nav am-nav-tabs"> 
        <li class="am-active"><a href="#tab1">所有订单</a></li> 
        <li><a href="#tab2">待付款</a></li> 
        <li><a href="#tab3">待发货</a></li> 
        <li><a href="#tab4">待收货</a></li> 
        <li><a href="#tab5">待评价</a></li> 
       </ul> 
       <div class="am-tabs-bd"> 
        <div class="am-tab-panel am-fade am-in am-active" id="tab1"> 
         <div class="order-top"> 
          <div class="th th-item"> 商品 
          </div> 
          <div class="th th-price"> 单价 
          </div> 
          <div class="th th-number"> 数量 
          </div> 
          <div class="th th-operation"> 商品操作 
          </div> 
          <div class="th th-amount"> 合计 
          </div> 
          <div class="th th-status"> 交易状态 
          </div> 
          <div class="th th-change"> 交易操作 
          </div> 
         </div> 
         <div class="order-main"> 
          <div class="order-list"> 
           <!--交易成功--> 
           @foreach($list as $row)
           <div class="order-status5"> 
            <div class="order-title"> 
             <div class="dd-num">
              订单编号：
              <a href="javascript:;">{{$row->order_num}}</a>
             </div> 
             <span>成交时间：{{$row->addtime}}</span> 
             <!--    <em>店铺：小桔灯</em>--> 
            </div> 
            <div class="order-content"> 
             <div class="order-left"> 
              @foreach($a as $aa)
              @foreach($aa as $aaa)
              @if($row->id==$aaa->id)
              <ul class="item-list"> 
               <li class="td td-item"> 
                <div class="item-pic"> 
                 <a href="#" class="J_MakePoint"> <img src="{{$aaa->pic}}" class="itempic J_ItemImg" /> </a> 
                </div> 
                <div class="item-info"> 
                 <div class="item-basic-info"> 
                  <a href="#"> <p>{{$aaa->name}}</p> <p class="info-little">颜色：12#川南玛瑙 <br />包装：裸装 </p> </a> 
                 </div> 
                </div> </li> 
               <li class="td td-price"> 
                <div class="item-price">
                  {{$aaa->price}}.00 
                </div> </li> 
               <li class="td td-number"> 
                <div class="item-number"> 
                 <span>&times;</span>{{$aaa->num}}
                </div> </li> 
               <li class="td td-operation"> 
                <div class="item-operation"> 
                </div> </li> 
              </ul> 
              @endif
              @endforeach
              @endforeach

             </div> 
             <div class="order-right"> 
              <li class="td td-amount"> 
               <div class="item-amount">
                 合计：

                 {{$row->total}}.00

                <p>含运费：<span>10.00</span></p> 
               </div> </li> 
              <div class="move-right"> 
               <li class="td td-status"> 
                <div class="item-status"> 
                 <p class="Mystatus">
                 @if($row->status==1) 
                <span style="color:red">新订单,等待付款</span> 
                <p><a href="/admins/order/qrfk/{{$row->id}}" style="color:blue">确认付款</a></p>
                @elseif($row->status==2)
                <span style="color:orange"> 已付款，等待发货 </span>
                @elseif($row->status==3)
                <span style="color:#95E22E"> 已发货，等待收货 </span>
                <p><a href="/admins/order/qrsh/{{$row->id}}" style="color:blue">确认收货</a></p>
                @elseif($row->status==4)
                <span style="color:blue"> 已收货 </span>
                @endif
                 </p> 
                 <p class="order-info"><a href="orderinfo.html">订单详情</a></p> 
                 <p class="order-info"><a href="logistics.html">查看物流</a></p> 
                </div> </li> 
               <li class="td td-change"> 
                <div class="am-btn am-btn-danger anniu">
                  删除订单
                </div> </li> 
              </div> 
             </div> 
            </div> 
           </div> 
           @endforeach
           <!--交易失败--> 
           
           <!--待发货--> 
           
           <!--不同状态订单--> 

          </div> 
         </div> 
        </div> 
        <div class="am-tab-panel am-fade" id="tab2"> 
             <div class="order-top"> 
          <div class="th th-item"> 商品 
          </div> 
          <div class="th th-price"> 单价 
          </div> 
          <div class="th th-number"> 数量 
          </div> 
          <div class="th th-operation"> 商品操作 
          </div> 
          <div class="th th-amount"> 合计 
          </div> 
          <div class="th th-status"> 交易状态 
          </div> 
          <div class="th th-change"> 交易操作 
          </div> 
         </div> 
         <div class="order-main"> 
          <div class="order-list"> 
           <!--交易成功--> 
           @foreach($list as $row)
           @if($row->status==1)
           <div class="order-status5"> 
            <div class="order-title"> 
             <div class="dd-num">
              订单编号：
              <a href="javascript:;">{{$row->order_num}}</a>
             </div> 
             <span>成交时间：{{$row->addtime}}</span> 
             <!--    <em>店铺：小桔灯</em>--> 
            </div> 
            <div class="order-content"> 
             <div class="order-left"> 
              @foreach($a as $aa)
              @foreach($aa as $aaa)
              @if($row->id==$aaa->id)
              <ul class="item-list"> 
               <li class="td td-item"> 
                <div class="item-pic"> 
                 <a href="#" class="J_MakePoint"> <img src="{{$aaa->pic}}" class="itempic J_ItemImg" /> </a> 
                </div> 
                <div class="item-info"> 
                 <div class="item-basic-info"> 
                  <a href="#"> <p>{{$aaa->name}}</p> <p class="info-little">颜色：12#川南玛瑙 <br />包装：裸装 </p> </a> 
                 </div> 
                </div> </li> 
               <li class="td td-price"> 
                <div class="item-price">
                  {{$aaa->price}}.00 
                </div> </li> 
               <li class="td td-number"> 
                <div class="item-number"> 
                 <span>&times;</span>{{$aaa->num}}
                </div> </li> 
               <li class="td td-operation"> 
                <div class="item-operation"> 
                </div> </li> 
              </ul> 
              @endif
              @endforeach
              @endforeach

             </div> 
             <div class="order-right"> 
              <li class="td td-amount"> 
               <div class="item-amount">
                 合计：

                 {{$row->total}}.00

                <p>含运费：<span>10.00</span></p> 
               </div> </li> 
              <div class="move-right"> 
               <li class="td td-status"> 
                <div class="item-status"> 
                 <p class="Mystatus">
                 @if($row->status==1) 
                <span style="color:red">新订单,等待付款</span> 
                <p><a href="/admins/order/qrfk/{{$row->id}}" style="color:blue">确认付款</a></p>
                @elseif($row->status==2)
                <span style="color:orange"> 已付款，等待发货 </span>
                @elseif($row->status==3)
                <span style="color:#95E22E"> 已发货，等待收货 </span>
                <p><a href="/admins/order/qrsh/{{$row->id}}" style="color:blue">确认收货</a></p>
                @elseif($row->status==4)
                <span style="color:blue"> 已收货 </span>
                @endif
                 </p> 
                 <p class="order-info"><a href="orderinfo.html">订单详情</a></p> 
                 <p class="order-info"><a href="logistics.html">查看物流</a></p> 
                </div> </li> 
               <li class="td td-change"> 
                <div class="am-btn am-btn-danger anniu">
                  删除订单
                </div> </li> 
              </div> 
             </div> 
            </div> 
           </div> 
           @endif
           @endforeach
           <!--交易失败--> 
           
           <!--待发货--> 
           
           <!--不同状态订单--> 

          </div> 
         </div> 

 
        </div> 


        <div class="am-tab-panel am-fade" id="tab3"> 
             <div class="order-top"> 
          <div class="th th-item"> 商品 
          </div> 
          <div class="th th-price"> 单价 
          </div> 
          <div class="th th-number"> 数量 
          </div> 
          <div class="th th-operation"> 商品操作 
          </div> 
          <div class="th th-amount"> 合计 
          </div> 
          <div class="th th-status"> 交易状态 
          </div> 
          <div class="th th-change"> 交易操作 
          </div> 
         </div> 
         <div class="order-main"> 
          <div class="order-list"> 
           <!--交易成功--> 
           @foreach($list as $row)
           @if($row->status==2)
           <div class="order-status5"> 
            <div class="order-title"> 
             <div class="dd-num">
              订单编号：
              <a href="javascript:;">{{$row->order_num}}</a>
             </div> 
             <span>成交时间：{{$row->addtime}}</span> 
             <!--    <em>店铺：小桔灯</em>--> 
            </div> 
            <div class="order-content"> 
             <div class="order-left"> 
              @foreach($a as $aa)
              @foreach($aa as $aaa)
              @if($row->id==$aaa->id)
              <ul class="item-list"> 
               <li class="td td-item"> 
                <div class="item-pic"> 
                 <a href="#" class="J_MakePoint"> <img src="{{$aaa->pic}}" class="itempic J_ItemImg" /> </a> 
                </div> 
                <div class="item-info"> 
                 <div class="item-basic-info"> 
                  <a href="#"> <p>{{$aaa->name}}</p> <p class="info-little">颜色：12#川南玛瑙 <br />包装：裸装 </p> </a> 
                 </div> 
                </div> </li> 
               <li class="td td-price"> 
                <div class="item-price">
                  {{$aaa->price}}.00 
                </div> </li> 
               <li class="td td-number"> 
                <div class="item-number"> 
                 <span>&times;</span>{{$aaa->num}}
                </div> </li> 
               <li class="td td-operation"> 
                <div class="item-operation"> 
                </div> </li> 
              </ul> 
              @endif
              @endforeach
              @endforeach

             </div> 
             <div class="order-right"> 
              <li class="td td-amount"> 
               <div class="item-amount">
                 合计：

                 {{$row->total}}.00

                <p>含运费：<span>10.00</span></p> 
               </div> </li> 
              <div class="move-right"> 
               <li class="td td-status"> 
                <div class="item-status"> 
                 <p class="Mystatus">
                 @if($row->status==1) 
                <span style="color:red">新订单,等待付款</span> 
                <p><a href="/admins/order/qrfk/{{$row->id}}" style="color:blue">确认付款</a></p>
                @elseif($row->status==2)
                <span style="color:orange"> 已付款，等待发货 </span>
                @elseif($row->status==3)
                <span style="color:#95E22E"> 已发货，等待收货 </span>
                <p><a href="/admins/order/qrsh/{{$row->id}}" style="color:blue">确认收货</a></p>
                @elseif($row->status==4)
                <span style="color:blue"> 已收货 </span>
                @endif
                 </p> 
                 <p class="order-info"><a href="orderinfo.html">订单详情</a></p> 
                 <p class="order-info"><a href="logistics.html">查看物流</a></p> 
                </div> </li> 
               <li class="td td-change"> 
                <div class="am-btn am-btn-danger anniu">
                  删除订单
                </div> </li> 
              </div> 
             </div> 
            </div> 
           </div> 
           @endif
           @endforeach
           <!--交易失败--> 
           
           <!--待发货--> 
           
           <!--不同状态订单--> 

          </div> 
         </div> 


        </div>


        <div class="am-tab-panel am-fade" id="tab4"> 
             <div class="order-top"> 
          <div class="th th-item"> 商品 
          </div> 
          <div class="th th-price"> 单价 
          </div> 
          <div class="th th-number"> 数量 
          </div> 
          <div class="th th-operation"> 商品操作 
          </div> 
          <div class="th th-amount"> 合计 
          </div> 
          <div class="th th-status"> 交易状态 
          </div> 
          <div class="th th-change"> 交易操作 
          </div> 
         </div> 
         <div class="order-main"> 
          <div class="order-list"> 
           <!--交易成功--> 
           @foreach($list as $row)
           @if($row->status==3)
           <div class="order-status5"> 
            <div class="order-title"> 
             <div class="dd-num">
              订单编号：
              <a href="javascript:;">{{$row->order_num}}</a>
             </div> 
             <span>成交时间：{{$row->addtime}}</span> 
             <!--    <em>店铺：小桔灯</em>--> 
            </div> 
            <div class="order-content"> 
             <div class="order-left"> 
              @foreach($a as $aa)
              @foreach($aa as $aaa)
              @if($row->id==$aaa->id)
              <ul class="item-list"> 
               <li class="td td-item"> 
                <div class="item-pic"> 
                 <a href="#" class="J_MakePoint"> <img src="{{$aaa->pic}}" class="itempic J_ItemImg" /> </a> 
                </div> 
                <div class="item-info"> 
                 <div class="item-basic-info"> 
                  <a href="#"> <p>{{$aaa->name}}</p> <p class="info-little">颜色：12#川南玛瑙 <br />包装：裸装 </p> </a> 
                 </div> 
                </div> </li> 
               <li class="td td-price"> 
                <div class="item-price">
                  {{$aaa->price}}.00 
                </div> </li> 
               <li class="td td-number"> 
                <div class="item-number"> 
                 <span>&times;</span>{{$aaa->num}}
                </div> </li> 
               <li class="td td-operation"> 
                <div class="item-operation"> 
                </div> </li> 
              </ul> 
              @endif
              @endforeach
              @endforeach

             </div> 
             <div class="order-right"> 
              <li class="td td-amount"> 
               <div class="item-amount">
                 合计：

                 {{$row->total}}.00

                <p>含运费：<span>10.00</span></p> 
               </div> </li> 
              <div class="move-right"> 
               <li class="td td-status"> 
                <div class="item-status"> 
                 <p class="Mystatus">
                 @if($row->status==1) 
                <span style="color:red">新订单,等待付款</span> 
                <p><a href="/admins/order/qrfk/{{$row->id}}" style="color:blue">确认付款</a></p>
                @elseif($row->status==2)
                <span style="color:orange"> 已付款，等待发货 </span>
                @elseif($row->status==3)
                <span style="color:#95E22E"> 已发货，等待收货 </span>
                <p><a href="/admins/order/qrsh/{{$row->id}}" style="color:blue">确认收货</a></p>
                @elseif($row->status==4)
                <span style="color:blue"> 已收货 </span>
                @endif
                 </p> 
                 <p class="order-info"><a href="orderinfo.html">订单详情</a></p> 
                 <p class="order-info"><a href="logistics.html">查看物流</a></p> 
                </div> </li> 
               <li class="td td-change"> 
                <div class="am-btn am-btn-danger anniu">
                  删除订单
                </div> </li> 
              </div> 
             </div> 
            </div> 
           </div> 
           @endif



           @endforeach
           <!--交易失败--> 
           
           <!--待发货--> 
           
           <!--不同状态订单--> 

          </div> 
         </div> 
        

        </div>


        <div class="am-tab-panel am-fade" id="tab5"> 
             <div class="order-top"> 
          <div class="th th-item"> 商品 
          </div> 
          <div class="th th-price"> 单价 
          </div> 
          <div class="th th-number"> 数量 
          </div> 
          <div class="th th-operation"> 商品操作 
          </div> 
          <div class="th th-amount"> 合计 
          </div> 
          <div class="th th-status"> 交易状态 
          </div> 
          <div class="th th-change"> 交易操作 
          </div> 
         </div> 
         <div class="order-main"> 
          <div class="order-list"> 
           <!--交易成功--> 
           @foreach($list as $row)
           <div class="order-status5"> 
            <div class="order-title"> 
             <div class="dd-num">
              订单编号：
              <a href="javascript:;">{{$row->order_num}}</a>
             </div> 
             <span>成交时间：{{$row->addtime}}</span> 
             <!--    <em>店铺：小桔灯</em>--> 
            </div> 
            <div class="order-content"> 
             <div class="order-left"> 
              @foreach($a as $aa)
              @foreach($aa as $aaa)
              @if($row->id==$aaa->id)
              <ul class="item-list"> 
               <li class="td td-item"> 
                <div class="item-pic"> 
                 <a href="#" class="J_MakePoint"> <img src="{{$aaa->pic}}" class="itempic J_ItemImg" /> </a> 
                </div> 
                <div class="item-info"> 
                 <div class="item-basic-info"> 
                  <a href="#"> <p>{{$aaa->name}}</p> <p class="info-little">颜色：12#川南玛瑙 <br />包装：裸装 </p> </a> 
                 </div> 
                </div> </li> 
               <li class="td td-price"> 
                <div class="item-price">
                  {{$aaa->price}}.00 
                </div> </li> 
               <li class="td td-number"> 
                <div class="item-number"> 
                 <span>&times;</span>{{$aaa->num}}
                </div> </li> 
               <li class="td td-operation"> 
                <div class="item-operation"> 
                </div> </li> 
              </ul> 
              @endif
              @endforeach
              @endforeach

             </div> 
             <div class="order-right"> 
              <li class="td td-amount"> 
               <div class="item-amount">
                 合计：

                 {{$row->total}}.00

                <p>含运费：<span>10.00</span></p> 
               </div> </li> 
              <div class="move-right"> 
               <li class="td td-status"> 
                <div class="item-status"> 
                 <p class="Mystatus">
                 @if($row->status==1) 
                <span style="color:red">新订单,等待付款</span> 
                <p><a href="/admins/order/qrfk/{{$row->id}}" style="color:blue">确认付款</a></p>
                @elseif($row->status==2)
                <span style="color:orange"> 已付款，等待发货 </span>
                @elseif($row->status==3)
                <span style="color:#95E22E"> 已发货，等待收货 </span>
                <p><a href="/admins/order/qrsh/{{$row->id}}" style="color:blue">确认收货</a></p>
                @elseif($row->status==4)
                <span style="color:blue"> 已收货 </span>
                @endif
                 </p> 
                 <p class="order-info"><a href="orderinfo.html">订单详情</a></p> 
                 <p class="order-info"><a href="logistics.html">查看物流</a></p> 
                </div> </li> 
               <li class="td td-change"> 
                <div class="am-btn am-btn-danger anniu">
                  删除订单
                </div> </li> 
              </div> 
             </div> 
            </div> 
           </div> 
           @endforeach
           <!--交易失败--> 
           
           <!--待发货--> 
           
           <!--不同状态订单--> 

          </div> 
         </div> 


        </div> 
     
 
       </div> 
      </div> 
     </div> 
    </div> 
    <!--底部--> 
    <div class="footer"> 
     <div class="footer-hd"> 
      <p> <a href="#">恒望科技</a> <b>|</b> <a href="#">商城首页</a> <b>|</b> <a href="#">支付宝</a> <b>|</b> <a href="#">物流</a> </p> 
     </div> 
     <div class="footer-bd"> 
      <p> <a href="#">关于恒望</a> <a href="#">合作伙伴</a> <a href="#">联系我们</a> <a href="#">网站地图</a> <em>&copy; 2015-2025 Hengwang.com 版权所有</em> </p> 
     </div> 
    </div> 
   </div> 
   <aside class="menu"> 
    <ul> 
     <li class="person"> <a href="/home/info/index">个人中心</a> </li> 
     <li class="person"> <a href="/home/info/index">个人资料</a> 
      <ul> 
       <li> <a href="/home/info/index">个人信息</a></li> 
       <li> <a href="safety.html">安全设置</a></li> 
       <li> <a href="address.html">收货地址</a></li> 
      </ul> </li> 
     <li class="person"> <a href="#">我的交易</a> 
      <ul> 
       <li class="active"><a href="/home/info/order">订单管理</a></li> 
       <li> <a href="change.html">退款售后</a></li> 
      </ul> </li> 
     <li class="person"> <a href="#">我的资产</a> 
      <ul> 
       <li> <a href="coupon.html">优惠券 </a></li> 
       <li> <a href="bonus.html">红包</a></li> 
       <li> <a href="bill.html">账单明细</a></li> 
      </ul> </li> 
     <li class="person"> <a href="#">我的小窝</a> 
      <ul> 
       <li> <a href="collection.html">收藏</a></li> 
       <li> <a href="foot.html">足迹</a></li> 
       <li> <a href="comment.html">评价</a></li> 
       <li> <a href="news.html">消息</a></li> 
      </ul> </li> 
    </ul> 
   </aside> 
  </div>  
 </body>
</html>