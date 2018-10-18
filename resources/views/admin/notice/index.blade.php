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
                        <form action="{{url('/admin/notice')}}" method="get">
                            <div id="simpledatatable_filter" class="dataTables_filter">
                                <label>
                                    <select name="num" aria-controls="simpledatatable" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select>
                                </label>
                                <label  class="pull-right">
                                    标题：<input type="search" name="title" class=" form-control input-sm" aria-controls="simpledatatable">
                                    作者：<input type="search" name="notice_name" class=" form-control input-sm" aria-controls="simpledatatable">
                                    <button class="btn btn-palegreen">搜索</button>
                                </label>
                            </div>
                        </form>

                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="simpledatatable" aria-describedby="simpledatatable_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 34px;">
                                    <div class="checker"><span class="">id<input type="checkbox" class="group-checkable" data-set="#flip .checkboxes"></span></div>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 150px;">
                                    标题
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label=" Points: activate to sort column ascending" style="width: 100px;">
                                    作者
                                </th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Email" style="width: 150px;">
                                    邮箱
                                </th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Joined" style="width: 220px;">
                                    发表时间
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1" colspan="1" aria-label=" Points: activate to sort column ascending" style="width: 100px;">
                                    置顶
                                </th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Joined" style="width: 150px;">
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
                                    {{cut_str($v->title, 13) }}
                                </td>
                                <td class=" ">
                                    {{$v->notice_name}}
                                </td>
                                <td class=" ">
                                    <a href="mailto:{{$v->email}}">{{$v->email}}</a>

                                </td>
                                <td class="center  ">
                                   {{date('Y-m-d H:i:s',$v->create_time)}}
                                </td>
                                <td class="center  ">
                                    {{$v->status ? '是' : '否'}}
                                </td>
                                <td class="center  ">
                                    <a href="{{url('/admin/notice/'.$v->id.'/edit')}}" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> 修改</a>
                                    <form action="{{url('/admin/notice/'.$v->id)}}" method="post" style='display:inline'>
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
                                    {{$res->appends($request->all())->links()}}
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
