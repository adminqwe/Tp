@extends('AdminPublic.public')
@section('cateindex')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>分类列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
     <form action="/admins/cate/index" method="get">
      <label>搜索: <input aria-controls="DataTables_Table_1" type="text" name="keywords" value="{{$request['keywords'] or ''}}"/></label>
      <input type="submit" class="btn btn-primary btn-small" value="搜索">
     
      </form>
     </div>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 102px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 143px;" aria-label="Browser: activate to sort column ascending">分类名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 132px;" aria-label="Platform(s): activate to sort column ascending">PID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 85px;" aria-label="Engine version: activate to sort column ascending">PATH</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 59px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($cate as $row)
       <tr class="odd"> 
        <td class="  sorting_1">{{$row->id}}</td> 
        <td class=" ">{{$row->name}}</td> 
        <td class=" ">{{$row->pid}}</td> 
        <td class=" ">{{$row->path}}</td> 
        <td class=" "><a href="/admins/cate/delete/{{$row->id}}" class="btn btn-success"><i class="icon-trash"></i></a>  <a href="/admins/cate/edit/{{$row->id}}" class="btn btn-info"><i class="icon-wrench"></i></a></td> 
       </tr>
      @endforeach
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      {!!$cate->appends($request)->render()!!}
     </div>
    </div> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','分类列表')