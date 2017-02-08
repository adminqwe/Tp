 <html>
<head>
<title>后台登陆中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta name="robots" content="noindex,nofollow" />
<style>
html,body,div,form,fieldset,input{margin:0;padding:0}
body{background:#3f506a;text-align:center;font-family: "微软雅黑";}
a:link {color:#666;text-decoration:none;}
a:hover,a:visited {color:#666;text-decoration:none;}
img{vertical-align:top;}
input{background-color:#ffffff;font-size:14px;color:#808080;border:1px solid #9db7d2;width:380px;height:40px;line-height:40px;padding-left:10px;font-family: "微软雅黑";}
.wrap{width:340px;height:350px;margin:180px auto;clear:both;background:#fff url(/b/images/logo-login.jpg) no-repeat;border:4px solid #3374b4;}
.c1{width:300px;height:50px;padding-left:15px;text-align:left;line-height:50px;font-size:19px;color:#666;font-weight:bold;}
#c1lt{width:500px;height:50px;float:left;}
#c1rt{width:100px;height:50px;float:right;font-size:12px;}
.c2{width:300px;height:150px;margin-top:30px;color:#999;font-size:14px;}
img,fieldset{border:none}
#lay04{color:#000;}
#layform{width:340px;height:150px;padding-top:100px;color:#333333;}
#row{margin-bottom:8px;}
#row img{border:1px solid #9db7d2;border-left:none;height:38px;width:104px;cursor:pointer}
#lis{width:76px;float:left;line-height:24px;}
.powered{text-align:center;margin-top:10px;font-size:12px;}
.powered a{color:#3374b4;}
.btn{background:#1c76b5;color:#fff;width:285px;height:40px; border:none;cursor:pointer;}
.btn:hover{background:#328bc9;}
</style>
</head>
<body>
<div style="color:#ff0000;font-size:14px;background:#fff;padding:0px 0"></div><div class="wrap">
<div id="lay04">

  <div id="layform">
  @if(session('error'))
    {{session('error')}}
  @endif
    <form method="post" action="/admins/admin/dologin" name="formsearch">
        <input type="hidden" name="gotopage" value="/liwei/upload/admin/index.php" />
        <input type="hidden" name="dopost" value="login" />
    <fieldset>
        <div id="row"><input name="username" type="text" id="input_name" tabindex="1" value="请输入用户名" onFocus="this.value=''" onBlur="if(this.value==''){this.value='请输入用户名'}" style="width:285px"/></div>
        <div id="row"><input name="password" type="password" id="input_pwd" tabindex="2" value="" style="width:285px"/></div>    
    <div id="row" style="margin-top:20px;">
    {{csrf_field()}}
    <input name="input_sub" type="submit" id="input_sub" class='btn' value="登 录" tabindex="4" /></div>
        <div class="powered">Powered by <a href="#">ZhangGQ</a> in <a href="#">oto09</a>.</div>
    </fieldset>
    </form>
  </div>

</div>
</div>
<script src="skin/js/admin.js" type="text/javascript"></script>
<script type="text/javascript">
function focusLogin(){
  formsearch.input_name.focus();  
}
</script>
</body>
</html>