@extends('AdminPublic.public')
@section('articleindex')
<html>
 <head></head>
<script type="text/javascript" src="/b/js/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i> 文章列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">操作</th>
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 208px;" aria-label="Browser: activate to sort column ascending">标题</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 195px;" aria-label="Platform(s): activate to sort column ascending">内容</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 135px;" aria-label="Engine version: activate to sort column ascending">描述</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 135px;" aria-label="Engine version: activate to sort column ascending">图片</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 135px;" aria-label="Engine version: activate to sort column ascending">创建时间</th>

        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 98px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      	@foreach($list as $row)
       <tr class="odd"> 
        <td class="  sorting_1"><input type="checkbox" value="{{$row->id}}"></td> 
        <td class="  sorting_1">{{$row->id}}</td> 
        <td class=" ">{{$row->title}}</td> 
        <td class=" ">{{$row->content}}</td> 
        <td class=" ">{!!$row->descr!!}</td> 
        <td class=" "><img src="{{$row->pic}}" width="100px" height="100px"></td> 
        <td class=" ">{{$row->created_at}}</td> 


        <td class=" "><a href="/admins/article/delete/{{$row->id}}" class="btn btn-success"><i class="icon-trash"></i></a><a href="/admins/article/edit/{{$row->id}}" class="btn btn-info"><i class="icon-wrench"></i></a></td> 
       </tr>
       @endforeach
       <tr>
        <td colspan="8"><a href="javascript:void(0)" class="alldel">全选</a> | <a href="javascript:void(0)" class="nodel">全不选</a> | <a href="javascript:void(0)" class="fdel">反选</a></td>
       </tr>
       <tr>
        <td colspan="8"><a href="javascript:void(0)" class="dodel">批量删除</a></td>
       </tr>
      </tbody>
     </table>
     
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      {!!$list->render()!!}
     </div>
    </div> 
   </div> 
  </div>
 </body>
 <script type="text/javascript">
 // alert($);
 //全选
  $(".alldel").click(function(){
    // alert('sss');
    $("#DataTables_Table_1").find('tr').each(function(){
      // alert('sss');
      $(this).find(":checkbox").attr('checked',true);
      
    })
  })
  //全不选
  $(".nodel").click(function(){
    $("#DataTables_Table_1").find('tr').each(function(){
      $(this).find(":checkbox").attr('checked',false);
    })
  })
  //反选
  $('.fdel').click(function(){
    $("#DataTables_Table_1").find('tr').each(function(){
      //如果选中，把选中的状态改变为不被选中
      if($(this).find(":checkbox").attr('checked')){
          $(this).find(":checkbox").attr('checked',false);
      }else{
          $(this).find(":checkbox").attr('checked',true);
      }
    })
  })
  //获取删除，绑定单击事件
  $('.dodel').click(function(){
    // alert('sss');
    //存储选中数据的id值
    a=[];
    //获取选中数据的id
    $(':checkbox').each(function(){
      //判断是否被选中
      if($(this).attr("checked")){
        // alert('ssss');
        //获取id
        id=$(this).val();
        // alert(id);
        //将所有的id放在数组当中
        a.push(id);
      }
      // alert(a);
    })
    s=confirm('你确定要删除吗？');
    if(s){
      $.get("/dodel",{uname:a},function($data){
        // alert($data);
        if($data==1){
          // alert('删除成功');
          //删除html样式
          for(var i=0;i<a.length;i++){
            // $("input[value='a[i]+']").parents('tr').remove();
            $("input[value="+a[i]+"]").parents('tr').remove();
          }
        }
      })
    }
  })
  
 </script>
</html>
@endsection
@section('title','文章列表页')