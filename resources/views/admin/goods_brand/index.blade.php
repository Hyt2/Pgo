@extends('layout.admin')
@section('title', '品牌管理')
@section('content')
<div class="page-body">
                    
<button type="button" tooltip="添加品牌" class="btn btn-sm btn-azure btn-addon" onclick="javascript:window.location.href = '{{url('admin/goods_brand/create')}}'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="8%">ID</th>
                                <th class="text-center">品牌名称</th>
                                <th>品牌地址</th>
                                <th class="text-center">品牌logo</th>
                                <th>品牌描述</th>
                                <th class="text-center" width="8%">品牌状态</th>
                                <th class="text-center" width="14%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($data as $v)
                                <tr>
                                    <td align="center">{{$v->id}}</td>
                                    <td align="center">{{$v->brand_name}}</td>
                                    <td>
                                        {{ cut_str($v->brand_url, 10) }}
                                        </a>
                                    </td>
                                    <td align="center">
                                    	@if($v->brand_logo)
                                        	<img src="{{url('/static/uploads/goods_brand/'.$v->brand_logo)}}" height="30">

                                    	@else 
                                    		暂无图片
                                		@endif
                                     </td>
                                    <td>{{ cut_str($v->brand_desc, 20) }}</td>
                                    <td align="center">
                                    	@if($v->status == 1)
                                    		显示
                                		@else
                                			隐藏
                            			@endif
                                    </td>
                                    <td align="center">
                                        <a href="{{ url("admin/goods_brand/$v->id/edit") }}" class="btn btn-primary btn-sm shiny">
                                            <i class="fa fa-edit"></i> 编辑
                                        </a>
                                        <a href="#" onclick="del('{{ $v->id }}', '{{ url('admin/goods_brand') }}', '这个商品品牌')" class="btn btn-danger btn-sm shiny">
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
@endsection