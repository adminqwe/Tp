@extends('AdminPublic.public')
@section('picadd')
<html>
 <head></head>
 <script type="text/javascript" charset="utf-8" src="/b/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/b/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/b/ueditor/lang/zh-cn/zh-cn.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>图片添加</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/admins/pic/insert" method="post" enctype="multipart/form-data"> 
   <!--  @if(session('error'))
    <div class="mws-form-message warning">
        {{session('error')}}
    </div>
    @endif -->
	    @if (count($errors) > 0)
	<div class="mws-form-message warning">
        <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
    </div>
		@endif
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">图片名称</label> 
       <div class="mws-form-item"> 
        <input class="small" type="text" name="picname" /> 
       </div> 
      </div> 


	<div class="mws-form-row">
		<label class="mws-form-label">图片</label>
		<div class="mws-form-item">
	    	<div class="fileinput-holder" style="position: relative;">
	    	<input  type="file" name="pic"></div>
	    </div>
    </div>


     </div> 
     <div class="mws-button-row"> 
     {{csrf_field()}}
      <input value="提交" class="btn btn-danger" type="submit" /> 
      <input value="重置" class="btn " type="reset" /> 
     </div> 
    </form> 
   </div> 
  </div>
 </body>
 <script type="text/javascript">
 //实例化百度编辑器
 	var ue=UE.getEditor('editor');
 </script>
</html>
@endsection
@section('title','图片添加')