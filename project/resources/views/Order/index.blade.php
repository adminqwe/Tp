@extends('AdminPublic.public')
@section('orderindex')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i> 订单列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
       <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">订单ID</th>
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">订单编号</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 208px;" aria-label="Browser: activate to sort column ascending">姓名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 195px;" aria-label="Platform(s): activate to sort column ascending">地址</th>
        <!-- <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 135px;" aria-label="Engine version: activate to sort column ascending">邮编</th> -->
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 135px;" aria-label="Engine version: activate to sort column ascending">电话</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 135px;" aria-label="Engine version: activate to sort column ascending">购买时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 135px;" aria-label="Engine version: activate to sort column ascending">总金额</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 135px;" aria-label="Engine version: activate to sort column ascending">状态</th>

        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 98px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      	@foreach($list as $row)
       <tr class="odd"> 
        <td class=" ">{{$row->id}}</td>
        <td class="  sorting_1">{{$row->order_num}}</td> 
        <td class=" ">{{$row->name}}</td> 
        <td class=" ">{{$row->adds}}</td>
        <td class=" ">{{$row->phone}}</td>
        <td class=" ">{{$row->addtime}}</td>
        <td class=" ">{{$row->total}}</td>         
        <td class=" ">
        @if($row->status==1) 
        <span style="color:red">新订单,等待付款</span> 
        @elseif($row->status==2)
        <span style="color:orange"> 已付款，等待发货 </span>
        <p><a href="/admins/order/qrfh/{{$row->id}}">确认发货</a></p>
        @elseif($row->status==3)
        <span style="color:#95E22E"> 已发货，等待收货 </span>
        @elseif($row->status==4)
        <span style="color:blue"> 已收货 </span>
        @endif
        </td>


        <td class=" ">
        <a href="/admins/order/orderinfo/{{$row->id}}" class="btn btn-success">订单详情</a>
        <!-- <a href="/admins/order/edit/{{$row->id}}" class="btn btn-info"><i class="icon-wrench"></i></a> -->
        </td> 
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
@section('title','订单列表')