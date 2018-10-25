@extends('layout.admin')

@section('title', '导航管理')
@section('title2', '浏览导航')

@section('content')
<div class="page-body">         
	<button type="button" tooltip="导航管理" class="btn btn-sm btn-azure btn-addon" onclick="javascript:window.location.href = '{{url('admin/nav/create')}}'"> <i class="fa fa-plus"></i> Add
	</button>
	<div class="row">
	    <div class="col-lg-12 col-sm-12 col-xs-12">
	        <div class="widget">
	            <div class="widget-body">
	                <div class="flip-scroll">
	                    <table class="table table-bordered table-hover">
	                        <thead class="">
	                            <tr>
	                                <th class="text-center" width="10%">ID</th>
	                                <th class="text-center" width="20%">导航名称</th>
	                                <th width="40%">导航地址</th>
	                                <th class="text-center" width="10%">导航状态</th>
	                                <th class="text-center" width="20%">操作</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	@foreach($data as $v)
	                                <tr>
	                                    <td align="center">{{$v->id}}</td>
	                                    <td align="center">{{$v->name}}</td>
	                                    <td><a href="{{ $v->url }}" target="_blank">{{$v->url}}</a></td>
	                                    <td align="center">
	                                    	@if($v->new_blank == '1')
	                                    		新页面
	                                		@else
	                                			原页面
	                            			@endif
	                                    </td>
	                                    <td align="center">
	                                        <a href="{{ url("admin/nav/$v->id/edit") }}" class="btn btn-primary btn-sm shiny">
	                                            <i class="fa fa-edit"></i> 编辑
	                                        </a>
	                                        <a href="#" onclick="del('{{ $v->id }}', '{{ url('admin/nav') }}', '这个导航')" class="btn btn-danger btn-sm shiny">
	                                            <i class="fa fa-trash-o"></i> 删除
	                                        </a>
	                                    </td>
	                                </tr>
	                            @endforeach
	                                                           
	                            </tbody>
	                    </table>
	                </div>
	                <div style="padding-top:10px; text-align:right;">
	                       {{ $data->links() }}    
	                </div>
	                <div>
	                	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>


@stop

