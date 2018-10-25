@extends('layout.admin')
@section('title', '后台管理员')
@section('title2', '管理员添加')
@section('url', url('admin/admin'))
@section('content')
<div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增管理员</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="{{ url('admin/admin') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">所属用户组</label>
                            <div class="col-sm-6">
                                <select name="group_id" class="form-control">
                                    <option value="">请选择</option>
                                    <option value="1">超级管理员</option>
                                    <option value="4">栏目管理员</option>
                                    <option value="0">系统管理员</option>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必选</p>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">管理员名</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="name" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">密码</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="pwd" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">用户头像</label>
                            <div class="col-sm-6">
                                <input name="img" type="file">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">邮箱</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="email" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
@endsection