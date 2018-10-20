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
                        <form class="form-horizontal" role="form" action="{{url('admin/do_role_per?id='.$role_per->id)}}" method="post" >
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">管理员名称</label>
                                <div class="col-sm-4">
                                    <input class="form-control" id="username" value="{{$role_per->role_name}}" name="name" required="" disabled type="text">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">权限名称</label>
                                <div class="col-sm-6">
                                    <div class="checkbox" style="margin-left: -20px;">
                                        @foreach($per as $k=>$v)
                                            <label>
                                                <input type="checkbox" class="colored-blue" name="per_id[]" value="{{$v->id}}" @if(in_array($v->id, $res)) checked @endif>
                                                <span class="text">{{$v->per_name}}</span>
                                            </label>
                                        @endforeach
                                    </div>
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
