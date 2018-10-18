@extends('layout.admin')
@section('title', '商品属性')
@section('url', url('admin/goods_attr'))
@section('title2', '添加属性')
@section('content')
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增商品属性</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="{{ url('admin/goods_attr') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">所属商品类型</label>
                            <div class="col-sm-6">
                                <select name="type_id"  class="form-control">
                                    <option value=""> -- 请选择 -- </option>
                                        @foreach($res as $k =>$v)
                                            <option value="{{$v->id}}">  &nbsp;&nbsp;&nbsp; {{$v->type_name}} </option>
                                        @endforeach
                             	</select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必选</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品属性名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="attr_name" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品属性类型</label>
                            <div class="col-sm-6">
                                <div class="radio" style="float:left; padding-right:10px;">
                                    <label>
                                        <input name="attr_type" value="1" checked="checked" class="colored-blue" type="radio">
                                        <span class="text">单选</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left;">
                                    <label>
                                        <input name="attr_type" value="2" class="colored-blue" type="radio">
                                        <span class="text">唯一</span>
                                    </label>
                                </div>
                            </div>
                            <p class="help-block col-sm-4 red">* 必选</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品属性值列表</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="attr_values"></textarea>
                            </div>
                            <p class="help-block col-sm-4 red">* 单选属性多个值请以,号分隔</p>
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

@endsection