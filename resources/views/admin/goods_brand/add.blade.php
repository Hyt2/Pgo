@extends('layout.admin')
@section('title', '品牌管理')
@section('url', url('admin/goods_brand'))
@section('title2', '添加品牌')
@section('content')
	<div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增品牌</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="{{ url('admin/goods_brand') }}" method="post" enctype="multipart/form-data">
                    	{{ csrf_field() }}
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">品牌名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="brand_name" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">品牌网址</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="brand_url" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">品牌logo</label>
                            <div class="col-sm-6">
                                <input placeholder="" name="brand_logo" type="file">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">品牌描述</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="brand_desc"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">品牌状态</label>
                            <div class="col-sm-6">
                                <div class="radio" style="float:left; padding-right:10px;">
                                    <label>
                                        <input name="status" value="1" class="colored-blue" checked="checked" type="radio">
                                        <span class="text">显示</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left;">
                                    <label>
                                        <input name="status" value="2" class="colored-blue" type="radio">
                                        <span class="text">隐藏</span>
                                    </label>
                                </div>
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
@endsection