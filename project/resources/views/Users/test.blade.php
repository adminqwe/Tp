<table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
<thead> 
 <tr role="row">
  <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
  <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 208px;" aria-label="Browser: activate to sort column ascending">用户名</th>
  <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 195px;" aria-label="Platform(s): activate to sort column ascending">邮箱</th>
  <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 135px;" aria-label="Engine version: activate to sort column ascending">状态</th>
  <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 98px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
 </tr> 
</thead> 
<tbody role="alert" aria-live="polite" aria-relevant="all">
  @foreach($list as $row)
 <tr class="odd"> 
  <td class="  sorting_1">{{$row->id}}</td> 
  <td class=" ">{{$row->username}}</td> 
  <td class=" ">{{$row->email}}</td> 
  <td class=" ">{{$row->status}}</td> 
  <td class=" "><a href="/admins/user/delete/" class="btn btn-success"><i class="icon-trash"></i></a><a href="/admins/user/edit/" class="btn btn-info"><i class="icon-wrench"></i></a></td> 
 </tr>
 @endforeach
</tbody>
</table>