@extends('AdminPublic.public')
@section('admin')
<center><h1>后台首页</h1></center>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="skin/js/common.js" type="text/javascript"></script>
<script src="skin/js/main.js" type="text/javascript"></script>
<script src="skin/js/drag.js" type="text/javascript"></script>
<link  href="skin/css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">

*{margin:0px;padding:0px;}
body {background-color:#FFFFFF;color:#000000;margin:0px;font-family:"\5fae\8f6f\96c5\9ed1",tahoma,arial,sans-serif;}
table {border-collapse:collapse;margin-bottom:10px;clear:both;}
.inp tr th, td {padding:2px 5px 2px 5px;vertical-align:center;text-align:center;height:30px; border:1px #FFFFFF solid;}
.el { text-align: center; background-color: #d3e1e5; }
.er { text-align: right; background-color: #fafafa; }
.ec { text-align: left; background-color: #f5f5f5;border-bottom: 1px solid #ddd; font-weight: bold; color: #3374B4;}
.fl { text-align: left; background-color: #fafafa; color: #505050; }
.pl10{padding-left:10px;}
</style>
</head>
<body>
<div style="margin:0 auto;width:99%;overflow:hidden;">
<table width="100%" class="inp">
<tr>
<td colspan="4" class="ec pl10">环境相关信息</td>
</tr>
<tr>
<td class="er" width="12%">当前版本</td>
<td class="fl" width="38%">V1.30</td>
<td class="er" width="20%">PHP版本</td>
<td class="fl" width="30%">5.6.15</td>
</tr>
<tr>
<td class="er">GD版本</td>
<td class="fl">2.1.0</td>
<td class="er">是否安全模式</td>
<td class="fl">Off</td>   
</tr>
<tr>
<td class="er">支持上传的最大文件</td>
<td class="fl">3M</td>
<td class="er">Register_Globals</td>
<td class="fl">Off</td>    
</tr>
<tr>
<td class="er">Magic_Quotes_Gpc</td>
<td class="fl">Off</td>
<td class="er">是否允许打开远程连接</td>
<td class="fl">支持</td>   
</tr>
<tr>
<td class="er">其它必须函数检测</td>
<td class="fl">符合要求
</td>
<td class="er">服务端口</td>
<td class="fl">80</td>   
</tr>
<tr>
<td class="er">引擎</td>
<td class="fl">Apache/2.4.17 (Win32) PHP/5.6.15</td>
<td class="er">MySql版本</td>
<td class="fl">5.7.9</td>    
</tr>
<tr>
<td class="er">系统</td>
<td class="fl">Windows NT - build 7601 (Windows 7 Ultimate Edition Service Pack 1)</td>
<td class="er" >程序信息</td>
<td class="fl">By 张国强</td>
</tr>

</table>
<table width="100%" class="inp">
<tr>
<td class="ec pl10">联系站长</td>
</tr>
<tr>
<td class="fl pl10">
支付宝（zhangguoqiang@163.com） | 微信（18539987907）
</td>
</tr>
</table>
<table width="100%" class="inp">
<tr>
<td class="ec pl10">系统相关信息</td>
</tr>
<tr>
<td class="fl pl10">百度 | 谷歌 | 腾讯 | 特别鸣谢技术大牛（李世会）维护</td>
</tr>
</table>
</div>
</body>
</html>

               

@endsection
@section('title','首页')