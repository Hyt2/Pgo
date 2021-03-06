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
                        <form class="form-horizontal" role="form" action="{{url('/admin/permission')}}" method="post" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">权限名称</label>
                                <div class="col-sm-4">
                                    <input class="form-control" id="username" placeholder="请填写权限的名称" name="per_name" required="" type="text">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">权限地址</label>
                                <div class="col-sm-4">
                                    <input class="form-control" id="username" placeholder="请填写权限地址。" name="per_url" required="" type="text">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填。例：[/admin/index]</p>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">确认添加</button>
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
