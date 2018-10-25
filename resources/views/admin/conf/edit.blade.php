@extends('layout.admin')
@section('title', '配置管理')
@section('title2', '修改配置')
@section('url', url('admin/conf'))
@section('content')


                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改配置</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="{{ url("admin/conf/$conf->id") }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <label for="username" class="col-sm-2 control-label no-padding-right">中文名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="cname" value="{{ $conf->cname }}" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">英文名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="ename" value="{{ $conf->ename }}" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">表单类型</label>
                            <div class="col-sm-6">
                                <select name="form_type">
                                    <option @if($conf->form_type == 1) selected="selected" @endif  value="1">单行文本</option>
                                    <option @if($conf->form_type == 2) selected="selected" @endif  value="2">单选项</option>
                                    <option @if($conf->form_type == 3) selected="selected" @endif  value="3">多选项</option>
                                    <option @if($conf->form_type == 4) selected="selected" @endif  value="4">下拉项</option>
                                    <option @if($conf->form_type == 5) selected="selected" @endif  value="5">文本域</option>
                                    <option @if($conf->form_type == 6) selected="selected" @endif  value="6">附件上传</option>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">配置类型</label>
                            <div class="col-sm-6">
                                <select name="conf_type">
                                    <option @if($conf->conf_type == 1) selected="selected" @endif   value="1">店铺配置</option>
                                    <option @if($conf->conf_type == 2) selected="selected" @endif   value="2">商品配置</option>
                                    <option @if($conf->conf_type == 3) selected="selected" @endif   value="2">SEO配置</option>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                         <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">可选值</label>
                            <div class="col-sm-6">
                                <textarea name="values" class="form-control">{{ $conf->values }}</textarea>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">默认值</label>
                            <div class="col-sm-6">
                                <input name="value" class="form-control" value="{{ $conf->value }}" placeholder="" type="text">
                            </div>
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
                <!-- /Page Body -->
@endsection