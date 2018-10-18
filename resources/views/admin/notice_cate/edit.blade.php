@extends('layout.admin')
@section('title',$title)
@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-blue">
                    <span class="widget-caption">{{$title2}}</span>
                </div>

                <div class="widget-body">
                    @if(count($errors) >0)
                        <div class="alert alert-danger fade in">
                            <button class="close" data-dismiss="alert">
                                ×
                            </button>
                            <i class="fa-fw fa fa-warning"></i>
                            @foreach($errors->all() as $error)
                                <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;错误：</strong> {{$error}}</p>
                            @endforeach
                        </div>
                    @endif
                    <div id="horizontal-form">
                        <form class="form-horizontal" role="form" action="{{url('/admin/notice_cate/'.$res->id)}}" method="post" >
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="cid" data-bv-field="country" disabled>
                                        <option value="0">作为一级栏目</option>
                                        @foreach($select as $k=>$v)
                                            @if($v->id == $res->cid)
                                            <option value="{{$v->id}}" selected>{{$v->cate_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">栏目名称</label>
                                <div class="col-sm-4">
                                    <input class="form-control" id="username" placeholder="请输出栏目的名称" name="cate_name" required="" type="text" value="{{$res->cate_name}}">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">栏目位置</label>
                                <div class="col-sm-6" style="margin-top: 5px">
                                    <label>
                                        <input name="status" type="radio" @if ($res->status == 1)  checked="checked" @endif value="1">
                                        <span class="text">网站顶部</span>
                                    </label>
                                    <label>
                                        <input name="status" type="radio" @if ($res->status == 0)  checked="checked" @endif value="0">
                                        <span class="text">网站底部</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">确认修改</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('js')
    <script>
        $('.alert-danger').delay(3000).fadeOut(2000);
    </script>
@stop
