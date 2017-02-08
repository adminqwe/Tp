@extends('AdminPublic.public')
@section('linkedit')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>修改链接</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/admins/link/update" method="post"> 
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
       <label class="mws-form-label">网站名称</label> 
       <div class="mws-form-item"> 
        <input class="small" type="text" name="webname" value="{{$info->webname}}"/> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">网站地址</label> 
       <div class="mws-form-item"> 
        <input class="small" type="text" name="url" value="{{$info->url}}"/> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">排序</label> 
       <div class="mws-form-item"> 
        <input class="small" type="text" name="sortrank" value="{{$info->sortrank}}"/> 
       </div> 
      </div> 
     </div> 
     <div class="mws-button-row"> 
     {{csrf_field()}}
     <input type="hidden" value="{{$info->id}}" name="id">
      <input value="提交" class="btn btn-danger" type="submit" /> 
      <input value="重置" class="btn " type="reset" /> 
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','修改链接')