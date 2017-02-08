@extends('AdminPublic.public')
@section('picindex')
<html>
 <head></head>
<script type="text/javascript" src="/b/js/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i> 图片列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 208px;" aria-label="Browser: activate to sort column ascending">图片名称</th>
        
        
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 135px;" aria-label="Engine version: activate to sort column ascending">图片</th>
        

        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 98px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      	@foreach($list as $row)
       <tr class="odd"> 
         
        <td class="  sorting_1">{{$row->id}}</td> 
        <td class=" ">{{$row->picname}}</td> 
        <td class=" "><img src="{{$row->pic}}" width="100px" height="100px"></td> 


        <td class=" "><a href="/admins/pic/delete/{{$row->id}}" class="btn btn-success"><i class="icon-trash"></i></a><a href="/admins/pic/edit/{{$row->id}}" class="btn btn-info"><i class="icon-wrench"></i></a></td> 
       </tr>
       @endforeach
      </tbody>
     </table>
     
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      {!!$list->render()!!}
     </div>
    </div> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','图片列表页')