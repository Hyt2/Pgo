@extends('layout.admin')
@section('content')
@section('title', '商品属性')
@section('url', url('admin/goods_attr'))
    <button type="button" tooltip="添加商品属性" class="btn btn-primary btn-sm shiny" onclick="javascript:window.location.href = '{{ url('admin/goods_attr/create') }}'"> <i class="fa fa-plus"></i> Add
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
                                    <th class="text-center">属性名称</th>
                                    <th class="text-center">属性类型</th>
                                    <th class="text-center">所属类型</th>
                                    <th class="text-center">属性值</th>
                                    <th class="text-center" width="16%">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($goodsAttr as $k => $goods_attr)
                                <tr>
                                    <td align="center">{{ $goods_attr->id }}</td>
                                    <td align="center">{{ $goods_attr->attr_name }}</td>
                                    <td align="center">
                                        @if($goods_attr->attr_type == 1)
                                            <font color="aqua">单选</font>
                                        @else
                                            <font color="#7fff00">唯一</font>
                                        @endif
                                    </td>
                                    <td align="center">{{$goods_attr->TypeModel->type_name}}</td>
                                    <td align="center">
                                        @if($goods_attr->attr_type == 1)
                                             <font color="#00bfff">
                                                {{ str_replace(',', '&nbsp;-&nbsp;', $goods_attr->attr_values) }}
                                            </font>
                                        @else 
                                            <font color="#00fa9a">唯一属性无属性值</font>
                                        @endif
                                    </td>
                                    <td align="center">
                                        <a href="{{ url("admin/goods_attr/$goods_attr->id/edit") }}" class="btn btn-primary btn-sm shiny">
                                            <i class="fa fa-edit"></i> 编辑
                                        </a>
                                        <a href="#" onclick="del('{{ $goods_attr->id }}', '{{ url('admin/goods_attr') }}', '这个商品属性')" class="btn btn-danger btn-sm shiny">
                                            <i class="fa fa-trash-o"></i> 删除
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                                    
                            </tbody>
                        </table>
                    </div>
                    <div style="padding-top:10px; text-align:right;">
                        {{ $goodsAttr->links() }}
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection