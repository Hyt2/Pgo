@extends('layout.admin')
@section('title',$title)

@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="widget">
                <div class="widget-header ">
                    <span class="widget-caption">{{$title2}}</span>
                    <div class="widget-buttons">
                        <a href="#" data-toggle="maximize">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="#" data-toggle="collapse">
                            <i class="fa fa-minus"></i>
                        </a>
                        <a href="#" data-toggle="dispose">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="widget-body">
                    @if(session('error'))
                        <div class="alert alert-danger fade in">
                            <button class="close" data-dismiss="alert">
                                ×
                            </button>
                            <i class="fa-fw fa fa-warning"></i>
                            <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;错误：</strong> {{session('error')}}</p>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success fade in">
                            <button class="close" data-dismiss="alert">
                                ×
                            </button>
                            <i class="fa-fw fa fa-check"></i>
                            <strong>成功：</strong> {{session('success')}}
                        </div>
                    @endif

                    <div role="grid" id="simpledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
                        <form action="{{url('/admin/goods')}}" method="get">
                            <div id="simpledatatable_filter" class="dataTables_filter">
                                <label>
                                    <select name="num" aria-controls="simpledatatable" class="form-control input-sm">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                </label>
                                <label  class="pull-right">
                                    商品编号：<input type="search" name="goods_num" class=" form-control input-sm" aria-controls="simpledatatable">
                                    商品名称：<input type="search" name="goods_name" class=" form-control input-sm" aria-controls="simpledatatable">
                                    商品类型：<select name="type_id" aria-controls="simpledatatable" class="form-control input-sm">
                                        <option value="0">类型搜素</option>
                                        @foreach($type as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->type_name}}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-palegreen">搜索</button>
                                </label>
                            </div>
                        </form>

                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="simpledatatable" aria-describedby="simpledatatable_info">
                            <thead>
                            <tr role="row" >
                                {{--<th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 30px;">--}}

                                {{--</th>--}}
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 34px;" >
                                    <div class="checker"><span class="">id<input type="checkbox" class="group-checkable" data-set="#flip .checkboxes"></span></div>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 100px;">
                                    商品编号
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 150px;">
                                    商品名称
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 60px;">
                                    商品图片
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 60px;">
                                    市场价
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 60px;">
                                    会员价
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 80px;">
                                    类别
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 80px;">
                                    类型
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 60px;">
                                    品牌
                                </th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Joined" style="width: 120px;" >
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($res as $k=>$v)
                                <tr class="odd" align="center">
                                    {{--<td>--}}

                                    {{--</td>--}}
                                    <td class=" ">
                                        <div class="checker"><span class="">{{$v->id}}<input type="checkbox" class="checkboxes" value="1"></span></div>
                                    </td>
                                    <td class=" ">
                                        {{$v->goods_num}}
                                    </td>
                                    <td class=" ">
                                        {{cut_str($v->goods_name,13)}}
                                    </td>
                                    <td class=" ">
                                        {{--{{$v->goods_img}}--}}
                                        <img src="{{asset(GOODS_IMG).'/'.$v->goods_img}}" alt="" width="50px">

                                    </td>
                                    <td class=" ">
                                        ￥{{$v->markte_price}}
                                    </td>
                                    <td class=" ">
                                        ￥{{$v->shop_price}}
                                    </td>

                                    <td class=" ">
                                        {{$v->CateModel->cate_name}}
                                    </td>
                                    <td class=" ">
                                        {{$v->TypeModel->type_name}}
                                    </td>
                                    <td class=" ">
                                        {{$v->BrandModel->brand_name}}
                                    </td>


                                    <td >
                                        <a href="{{url('/admin/hs/'.$v->id.'/edit')}}" class="btn btn-info btn-xs edit"><i class="fa fa-repeat"></i> 还原</a>
                                        <form action="{{url('/admin/hs/'.$v->id)}}" method="post" style='display:inline'>
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-danger btn-xs delete">
                                                <i class="fa fa-trash-o"></i>
                                                删除
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        <div class="row DTTTFooter">
                            <div class="col-sm-6">
                                <div class="dataTables_info" id="simpledatatable_info" role="alert" aria-live="polite" aria-relevant="all">
                                    Showing {{$res->total()}} entries
                                </div>
                            </div>
                            <style>


                            </style>
                            <div class="col-sm-6 text-right">
                                <div class="dataTables_paginate paging_bootstrap" id="simpledatatable_paginate">
                                    {{$res->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $('.alert').delay(3000).fadeOut(2000);
    </script>
@stop
