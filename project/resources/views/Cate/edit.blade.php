@extends('AdminPublic.public')
@section('cateedit')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>分类修改</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/admins/cate/update" method="post"> 
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
       <label class="mws-form-label">分类名</label> 
       <div class="mws-form-item"> 
        <input class="small" type="text" name="name" value="{{$info->name}}"/> 
       </div> 
      </div> 
       <div class="mws-form-row">
          <label class="mws-form-label">父类</label>
          <div class="mws-form-item">
            <select class="small" name="pid">
              <option value="0">--请选择--</option>
              @foreach($cate as $row)
              <option value="{{$row->id}}" @if($info->pid == $row->id) selected @endif>{{$row->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
      
     </div> 
     <div class="mws-button-row"> 
     {{csrf_field()}}
     <input type="hidden" name="id" value="{{$info->id}}">
      <input value="提交" class="btn btn-danger" type="submit" /> 
      <input value="重置" class="btn " type="reset" /> 
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','分类添加')