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
                        {{--<form action="{{url('/admin/notice_cate')}}" method="get">--}}
                            {{--<div id="simpledatatable_filter" class="dataTables_filter">--}}
                                {{--<label>--}}
                                    {{--<select name="num" aria-controls="simpledatatable" class="form-control input-sm">--}}
                                        {{--<option value="10">10</option>--}}
                                        {{--<option value="15">15</option>--}}
                                        {{--<option value="20">20</option>--}}
                                    {{--</select>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        {{--</form>--}}

                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="simpledatatable" aria-describedby="simpledatatable_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 34px;">
                                    <div class="checker">
                                        <span class="">id<input type="checkbox" class="group-checkable" data-set="#flip .checkboxes">
                                        </span>
                                    </div>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 220px;">
                                    栏目名称
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label=" Points: activate to sort column ascending" style="width: 130px;">
                                    父类ID
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label=" Points: activate to sort column ascending" style="width: 100px;">
                                    栏目路径
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label=" Points: activate to sort column ascending" style="width: 100px;">
                                    栏目位置
                                </th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Joined" style="width: 180px;">
                                    添加时间
                                </th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Joined" style="width: 100px;">
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($res as $k=>$v)
                                <tr class="odd">
                                    <td class=" ">
                                        <div class="checker"><span class="">{{$v->id}}<input type="checkbox" class="checkboxes" value="1"></span></div>
                                    </td>
                                    <td class=" ">
                                        {{$v->cate_name}}
                                    </td>
                                    <td class=" ">
                                        {{$v->cid}}
                                    </td>
                                    <td class=" ">
                                        {{$v->path}}
                                    </td>
                                    <td class="center  ">
                                        {{$v->status ? '网站顶部' : '网站底部'}}
                                    </td>
                                    <td class="center  ">
                                        {{date('Y-m-d H:i:s',$v->create_time)}}
                                    </td>
                                    <td class="center  ">
                                        <a href="{{url('/admin/notice_cate/'.$v->id.'/edit')}}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> 修改</a>
                                        <form action="{{url('/admin/notice_cate/'.$v->id)}}" method="post" style='display:inline'>
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