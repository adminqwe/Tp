@extends('AdminPublic.public')
@section('articleedit')
<script type="text/javascript" charset="utf-8" src="/b/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/b/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/b/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>文章修改</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admins/pic/update" method="post" enctype="multipart/form-data">
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
                    				<label class="mws-form-label">标题</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="text" name="title" value="{{$info->title}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">内容</label>
                    				<div class="mws-form-item">
                    					<textarea rows="" cols="" class="small" name="content">{{$info->content}}</textarea>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">描述</label>
                    				<div class="mws-form-item">
                    					<script id="editor" name="descr" type="text/plain" style="width:800px;height:500px;">{!!$info->descr!!}</script>
                    				</div>
                    			</div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">图片</label>
                                    <div class="mws-form-item">
                                       <img src="{{$info->pic}}" width="200px" height="200px">
                                    </div>
                                </div>
                    			<div class="mws-form-row">
                                    	<label class="mws-form-label">上传图片</label>
                                    	<div class="mws-form-item">
                                        	<div class="fileinput-holder" style="position: relative;">
                                        	<input style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;" type="file" name="pic"></span>
                                            </div>
                                        </div>
                                </div>

                        
                    			
                    			
                    			
                    			
                    			
                    		</div>
                    		<div class="mws-button-row">
                    			{{csrf_field()}}
                                <input type="hidden" name="id" value="{{$info->id}}">
                    			<input class="btn btn-danger" type="submit" value="提交">
                    			<input class="btn " type="reset" value="重置">
                    		</div>
                    	</form>
                    </div>    	
                </div>
                <script type="text/javascript">
                //实例化百度编辑器
                 var ue = UE.getEditor('editor');
                </script>
@endsection
@section('title','文章修改')