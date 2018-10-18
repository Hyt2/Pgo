@extends('layout.admin')
@section('title', '外链管理')
@section('content')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/links/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
        	<form action="/admin/links" style="float: right;" method="get">
            	<span class="input-icon inverted">
	                <input type="text" class="form-control input-sm" placeholder="链接标题" name="title" value="{{$req->title}}">
	                <i class="glyphicon glyphicon-search bg-blue"></i>
	                <button href="#" class="btn btn-default blue">搜索</button>
	            </span>
			</form>
        </div>
        <table class="table table-striped table-hover table-bordered dataTable no-footer"
        id="editabledatatable" aria-describedby="editabledatatable_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc text-center" tabindex="0" aria-controls="editabledatatable"
                    rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                    Username
                    : activate to sort column ascending" style="width: 161px;">
                        ID
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1"
                    colspan="1" aria-label="
                    Full Name
                    : activate to sort column ascending" style="width: 150px;">
                        标题
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1"
                    colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        外链地址
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1"
                    colspan="1" aria-label="
                    Notes
                    : activate to sort column ascending" style="width: 288px;">
                        logo
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 171px;">
                   	链接描述
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                   	类型
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                   	状态
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 288px;">
                   	操作 
                    </th>
                </tr>
            </thead>
            <tbody>
            	@foreach ($data as $k=>$v)
            	@if($k%2==0)
                <tr class="odd text-center">
                @else
                <tr class="even text-center">
                @endif
                    <td class="sorting_1">
                        {{$v->id}}
                    </td>
                    <td class="">
                         {{$v->title}}
                    </td>
                    <td class=" ">
                        <a href="javascript:pros('{{$v->url}}')" title="{{$v->url}}">链接地址</a>
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                        @if($v->logo != '')
                            <img height="25" src="{{ asset(u(LINKS_IMG) . $v->logo) }}" alt="">
                        @else
                            <font color="red">暂无图片</font>
                        @endif
                    </td>
                    <td class="center">
                        {{$v->desc}}
                    </td>
                    <td class="center">
                        @if($v->type=='1') 图片 @else 文字  @endif
                    </td>
                    <td class="center">
                        @if($v->status=='1') 显示 @else 隐藏  @endif
                    </td>
                    <td class="">
                        <a href="/admin/links/{{$v->id}}/edit" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del('{{ $v->id }}', '{{ url('admin/links') }}', '这个外链')" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <style>
        	.pagination{
        		float: right;
        	}
        	.DTTTFooter{
        		padding:15px 20px 0px 0px;
        	}
        </style>
        <div class="row DTTTFooter">
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection


@section('js')
<script type="text/javascript">
	function pros(href){
		layer.open({
		  title: '链接地址'
		  ,content: href
		});     
	}
	function image(src){
		layer.open({
		  title:'图片',
		  content:"<img src='"+src+"' width='300'>",
		  offset:'150px',
		   maxmin: true,
		   type: 1,
  		   shade: false,
		});
	}
	function delete(obj,id){
		layer.confirm('确认删除此条记录?', {icon: 3, title:'提示'}, function(index){
			$.ajax({
			headers: {
	          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	          },
			type:'DELETE',
			url:'/admin/links/'+id,
			data:{},
			success:function(data){
				if(data=='1'){
					if($(obj).parents('tr').remove()){
						layer.msg('删除成功!', {icon: 1,offset:'250px',time:1000});
					}
				}else{
					layer.msg('删除失败!', {icon: 5,offset:'250px',time:1000});   
				}
			},
			error:function(){
				layer.msg('删除失败!', {icon: 5});
			},
			async:true
		})
		  layer.close(index);
		});
	}
    if("{{session('error')}}"=='0'){
        layer.msg('修改失败!', {offset: 'auto',icon: 5});
    }
</script>
@stop