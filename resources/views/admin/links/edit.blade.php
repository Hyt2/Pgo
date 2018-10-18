@extends('layout.admin')
@section('title', $title)
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
                <form class="form-horizontal form-bordered" role="form" method="post" enctype="multipart/form-data" action="/admin/links/{{$data->id}}">
                	{{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label no-padding-right">链接标题</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="url" class="col-sm-2 control-label no-padding-right">链接网址</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="url" id="url" value="{{$data->url}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="logo" class="col-sm-2 control-label no-padding-right">链接logo</label>
                        <div class="col-sm-10">
                            <img src="{{$data->logo}}" alt="" width="30%">
                            <input type="file" class="form-control" name="logo" id="logo" value="">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="desc" class="col-sm-2 control-label no-padding-right">链接描述</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="desc" name="desc" value="{{$data->desc}}">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">链接类型</label>
						<div class="col-sm-10">
	                        <label class="col-sm-offset-1">
	                            <input type="radio" class="colored-blue" name="type" value="1" @if($data->type=='1') checked="checked" @endif>
	                            <span class="text"> 文字</span>
	                        </label>
	                        <label style="margin-left: 20px;">
	                            <input type="radio" class="colored-danger" name="type" value="0" @if($data->type=='0') checked="checked" @endif>
	                            <span class="text"> 图片</span>
	                        </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">链接状态</label>
                        <div class="col-sm-10">
                            <label class="col-sm-offset-1">
                                <input type="radio" class="colored-blue" name="status" checked="checked" value="1" @if($data->status=='1') checked="checked" @endif>
                                <span class="text">显示</span>
                            </label>
                            <label style="margin-left: 20px;">
                                <input type="radio" class="colored-danger" name="status" value="0" @if($data->status=='0') checked="checked" @endif>
                                <span class="text"> 隐藏</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-palegreen">修改</button>
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
    $('form').submit(function(){
        if(!$('#title').val()){
            layer.msg('链接标题不能为空!', {icon: 5,time:1000,shift:6});
            return false;
        }
        var url=$('#url').val().trim();
        if(!url.match('^http:\/\/')){
            layer.msg('链接网址格式错误!', {icon: 5,time:1000,shift:6});
            return false;
        }
        
        if(!$('#desc').val()){
            layer.msg('链接描述不能为空!', {icon: 5,time:1000,shift:6});
            return false;
        }
    })
</script>
@stop