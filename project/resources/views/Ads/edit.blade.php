@extends('AdminPublic.public')
@section('adsedit')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>广告修改</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/admins/ads/update" method="post" enctype="multipart/form-data"> 
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
       <label class="mws-form-label">广告名称</label> 
       <div class="mws-form-item"> 
        <input class="small" type="text" name="adsname" value="{{$info->adsname}}"/> 
       </div> 
      </div> 
      <div class="mws-form-row">
        <label class="mws-form-label">广告位置</label>
        <div class="mws-form-item">
          <select class="small" name="position">
            <option value="0">--请选择--</option>
            <option value="上" @if($info->position == "上") selected @endif>上</option>
            <option value="下" @if($info->position == "下") selected @endif>下</option>
            <option value="左" @if($info->position == "左") selected @endif>左</option>
            <option value="右" @if($info->position == "右") selected @endif>右</option>
          </select>
        </div>
      </div>
      <div class="mws-form-row"> 
       <label class="mws-form-label">广告链接</label> 
       <div class="mws-form-item"> 
        <input class="small" type="text" name="url" value="{{$info->url}}"/> 
       </div> 
      </div> 
       <div class="mws-form-row"> 
       <label class="mws-form-label">广告图片</label> 
       <div class="mws-form-item"> 
        <input class="small" type="file" name="pic"/>
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
@section('title','广告修改')