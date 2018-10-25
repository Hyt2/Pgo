@extends('layout.admin')
@section('title', '类别管理')
@section('title2', '添加类别')
@section('url', url('admin/goods_cate'))
@section('content')

<style>
	#one{
		width: 800px;
		margin-left: 100px;
	}
</style>
<div class="col-lg-6 col-sm-6 col-xs-12" id="one">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-palegreen">
            <span class="widget-caption">{{$title}}</span>
        </div>
        <div class="widget-body">
            <div>
                <form class="form-horizontal form-bordered" role="form" method="post" enctype="multipart/form-data" action="{{ url('admin/goods_cate') }}">
                	{{csrf_field()}}
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label no-padding-right">上级分类</label>
                        <div class="col-lg-3">
                            <select class="form-control" name="pid" data-bv-field="country">
                                <option value="0">顶级分类</option>
                                @foreach ($cate as $k=>$v)
                                    <option value="{{$v->id}}">{{$v->cate_name}}</option>
                                    @foreach ($cate as $k=>$v)
                                    <option value="{{$v->id}}" @if($v->id==$id) selected="selected" @endif>{{$v->cate_name}}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <span style="display:block;margin-top: 5px;color:red">必填*</span>
                    </div>
                     <div class="form-group">
                        <label for="cate_name" class="col-sm-2 control-label no-padding-right">分类名称</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="cate_name" id="cate_name" placeholder="分类名称">
                        </div>
                        <span style="display:block;margin-top: 5px;color:red">必填*</span>
                    </div>
                    <div class="form-group">
                        <label for="logo" class="col-sm-2 control-label no-padding-right">显示到导航</label>
                        <div class="col-sm-9">
                            <label class="col-sm-offset-1">
                                <input type="radio" class="colored-blue" name="show" checked="checked" value="1">
                                <span class="text"> 是</span>
                            </label>
                            <label style="margin-left: 20px;">
                                <input type="radio" class="colored-danger" name="show" value="0">
                                <span class="text"> 否</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keyword" class="col-sm-2 control-label no-padding-right">关键词</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="keyword" name="keyword" placeholder="关键字">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripton" class="col-sm-2 control-label no-padding-right">描述</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="descripton" placeholder="促销信息">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-9">
                            <button type="submit" class="btn btn-palegreen">添加</button>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <a class="btn btn-palegreen" onclick="history.go(-1)">返回</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
    $('button[type=submit]').click(function(){
        var pid=$('select[name=pid]').val();
        var cate_name=$('input[name=cate_name]').val();
        var show=$('input[name=show]').val();
        var keyword=$('input[name=keyword]').val();
        var descripton=$('input[name=descripton]').val();
        if(cate_name==''){
            layer.msg('分类名称能为空!', {icon: 5,time:1000,shift:6});
            return false;
        }
        if(keyword==''){
            layer.msg('关键字不能为空!', {icon: 5,time:1000,shift:6});
            return false;
        }
        if(descripton==''){
            layer.msg('描述不能为空!', {icon: 5,time:1000,shift:6});
            return false;
        }

    })
</script>
@stop