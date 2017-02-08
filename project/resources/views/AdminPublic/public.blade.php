<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/b/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/b/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/b/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/b/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/b/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/b/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/b/css/my.css" media="screen">


<title>后台--@yield('title')</title>

</head>

<body>
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/b/images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/b/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, {{session('username')}}

                    </div>
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="/admins/admin/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-user"></i> 用户管理</a>
                        <ul class="closed">
                            <li><a href="/admins/user/add">用户添加</a></li>
                            <li><a href="/admins/user/index">用户列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-th-list"></i> 分类管理</a>
                        <ul class="closed">
                            <li><a href="/admins/cate/add">分类添加</a></li>
                            <li><a href="/admins/cate/index">分类列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-file"></i> 文章管理</a>
                        <ul class="closed">
                            <li><a href="/admins/article/add">文章添加</a></li>
                            <li><a href="/admins/article/index">文章列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-shopping-cart"></i> 商品管理</a>
                        <ul class="closed">
                            <li><a href="/admins/shop/add">商品添加</a></li>
                            <li><a href="/admins/shop/index">商品列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-tasks"></i> 订单管理</a>
                        <ul class="closed">
                            <li><a href="/admins/order/index">订单列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-flag"></i> 评论管理</a>
                        <ul class="closed">
                            <li><a href="/admins/comment/add">评论添加</a></li>
                            <li><a href="/admins/comment/index">评论列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-dribbble"></i> 友情链接</a>
                        <ul class="closed">
                            <li><a href="/admins/link/add">添加链接</a></li>
                            <li><a href="/admins/link/index">管理链接</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-movie"></i> 广告投放</a>
                        <ul class="closed">
                            <li><a href="/admins/ads/add">添加广告</a></li>
                            <li><a href="/admins/ads/index">管理广告</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-apple"></i> 图片轮播</a>
                        <ul class="closed">
                            <li><a href="/admins/pic/add">添加图片</a></li>
                            <li><a href="/admins/pic/index">管理图片</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-users"></i> 管理用户</a>
                        <ul class="closed">
                            <li><a href="/page">用户列表</a></li>
                        </ul>
                    </li>
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            	<div class="container">
                    @if(session('success'))
                    <div class="mws-form-message success">
                        {{session('success')}}
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="mws-form-message error">
                        {{session('error')}}
                    </div>
                    @endif
                    @section('admin')
                    @show
                    @section('userindex')
                    @show
                    @section('useradd')
                    @show
                    @section('useredit')
                    @show
                    @section('cateadd')
                    @show
                    @section('cateindex')
                    @show
                    @section('cateedit')
                    @show 
                    @section('linkadd')
                    @show 
                    @section('linkindex')
                    @show 
                    @section('linkedit')
                    @show
                    @section('adsindex')
                    @show
                    @section('adsadd')
                    @show
                    @section('adsedit')
                    @show
                    @section('picindex')
                    @show
                    @section('picadd')
                    @show
                    @section('picedit')
                    @show 
                    @section('articleindex')
                    @show
                    @section('articleadd')
                    @show
                    @section('articleedit')
                    @show  
                    @section('shopindex')
                    @show
                    @section('shopadd')
                    @show
                    @section('shopedit')
                    @show 
                    @section('orderindex')
                    @show
                    @section('commentindex')
                    @show
                    @section('commentadd')
                    @show
                    @section('commentedit')
                    @show
                    @section('orderinfo')
                    @show            
                    <!-- Panels End -->
                </div>
                <!-- footer -->
                <div id="mws-footer">
                    Copyright Your Website 2012. All Rights Reserved.
                </div>
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/b/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/b/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/b/js/libs/jquery.placeholder.min.js"></script>
    <script src="/b/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/b/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/b/jui/jquery-ui.custom.min.js"></script>
    <script src="/b/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/b/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/b/plugins/flot/jquery.flot.min.js"></script>
    <script src="/b/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/b/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/b/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/b/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/b/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/b/plugins/validate/jquery.validate-min.js"></script>
    <script src="/b/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/b/bootstrap/js/bootstrap.min.js"></script>
    <script src="/b/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/b/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/b/js/demo/demo.dashboard.js"></script>

</body>
</html>