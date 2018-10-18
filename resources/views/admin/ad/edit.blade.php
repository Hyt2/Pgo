@extends('layout.admin')
@section('title', '轮播管理')
@section('url', url('admin/goods_brand'))
@section('title2', '修改轮播图')
@section('content')
	<div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改轮播图</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/ad/{{$data->id}}" method="post" enctype="multipart/form-data">
                    	{{ csrf_field() }}
                       {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播图名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" value="{{$data->ad_name}}" name="ad_name" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播图标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" value="{{$data->title}}" name="title" type="text" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">链接网址</label>
                            <div class="col-sm-6">
                                <input class="form-control" value="{{$data->url}}" name="url" type="text" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <img src="{{u(_AD_).$data->src}}" alt="" style="width:20%;margin-left: 18%;cursor: pointer;" align="left" name="oldSrc" onclick="$('#file').click()">
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播图</label>
                            <div class="col-sm-6">
                                <input placeholder="" name="src" type="file" id="file">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">排序</label>
                            <div class="col-sm-6">
                                <input class="form-control" value="{{$data->sort}}" name="sort" type="text" required="">
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
<script type="text/javascript">
    $('input[name=src]').change(function(){
        var file = $('input[name=src]')[0].files[0];
 
        //创建读取文件的对象
        var reader = new FileReader();
 
        //创建文件读取相关的变量
        var imgFile;
 
        //为文件读取成功设置事件
        reader.onload=function(e) {
            // alert('文件读取完成');
            imgFile = e.target.result;
            console.log(imgFile);
            $('img[name=oldSrc]').attr('src',imgFile);
        };
 
        //正式读取文件
        reader.readAsDataURL(file);
        });
</script>
@endsection