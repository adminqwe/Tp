@extends('AdminPublic.public')
@section('adsindex')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>广告列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
     <form action="/admins/ads/index" method="get">
      <label>搜索: <input aria-controls="DataTables_Table_1" type="text" name="keywords" value="{{$request['keywords'] or ''}}"/></label>
      <input type="submit" value="搜索">
      </form>
     </div>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 102px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 143px;" aria-label="Browser: activate to sort column ascending">广告名称</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 132px;" aria-label="Platform(s): activate to sort column ascending">广告位置</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 85px;" aria-label="Engine version: activate to sort column ascending">广告链接</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 85px;" aria-label="Engine version: activate to sort column ascending">广告图片</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 85px;" aria-label="Engine version: activate to sort column ascending">广告排序</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 59px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($list as $row)
       <tr class="odd"> 
        <td class="  sorting_1">{{$row->id}}</td> 
        <td class=" ">{{$row->adsname}}</td> 
        <td class=" ">{{$row->position}}</td> 
        <td class=" ">{{$row->url}}</td> 
        <td class=" "><img src="{{$row->pic}}"></td> 
        <td class=" ">{{$row->sortrank}}</td> 
        <td class=" "><a href="/admins/ads/delete/{{$row->id}}" class="btn btn-success"><i class="icon-trash"></i></a>  <a href="/admins/ads/edit/{{$row->id}}" class="btn btn-info"><i class="icon-wrench"></i></a></td> 
       </tr>
      @endforeach
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
     {!!$list->appends($request)->render()!!}
     </div>
    </div> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','广告列表')