@extends('layout.admin')
@section('title', '类别管理')
@section('title2', '修改分类')
@section('url', '/admin/goods_cate')
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
            <span class="widget-caption">{{'分类管理'}}</span>
        </div>
        <div class="widget-body">
            <div>
                <form class="form-horizontal form-bordered" role="form" method="post" enctype="multipart/form-data" action="/admin/goods_cate/{{$data->id}}">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    @if(!empty($cate))
                    <div class="form-group">
                        <label for='分类管理'" class="col-sm-2 control-label no-padding-right">上级分类</label>
                        <div class="col-lg-3">
                            <select class="form-control" name="pid" data-bv-field="country" disabled="disabled">
                                @foreach ($cate as $k=>$v)
                                @if($data->pid==$v->id)
                                    <option value="{{$v->id}}">{{$v->cate_name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <span style="display:block;margin-top: 5px;color:red">必填*</span>
                    </div>
                    @endif
                     <div class="form-group">
                        <label for="cate_name" class="col-sm-2 control-label no-padding-right">分类名称</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="cate_name" id="cate_name" placeholder="分类名称" value="{{$data->cate_name}}">
                        </div>
                        <span style="display:block;margin-top: 5px;color:red">必填*</span>
                    </div>
                    <div class="form-group">
                        <label for="logo" class="col-sm-2 control-label no-padding-right">显示到导航</label>
                        <div class="col-sm-9">
                            <label class="col-sm-offset-1">
                                <input type="radio" class="colored-blue" name="show" value="1" @if($data->show=='1') checked="checked" @endif>
                                <span class="text"> 是</span>
                            </label>
                            <label style="margin-left: 20px;">
                                <input type="radio" class="colored-danger" name="show" value="0" @if($data->show=='0') checked="checked" @endif>
                                <span class="text"> 否</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keyword" class="col-sm-2 control-label no-padding-right">关键词</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="keyword" name="keyword" placeholder="关键字" value="{{$data->keyword}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripton" class="col-sm-2 control-label no-padding-right">描述</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="descripton" value="{{$data->descripton}}">
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
        var cate_name=$('input[name=cate_name]').val();
        var show=$('input[name=show]:checked').val();
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