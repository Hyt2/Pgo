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
                        <form class="form-horizontal" role="form" action="{{url('/admin/notice/'.$res->id)}}" method="post" enctype ="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="cate_id" data-bv-field="country" disabled>
                                        @foreach($select as $k=>$v)
                                            @if($v->id == $res->cate_id)
                                                <option value="{{$v->id}}" selected>{{$v->cate_name}}</option>
                                            @endif

                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">标题</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="username" placeholder="请将标题控制在5-30位之间" name="title" required="" type="text" value="{{$res->title}}">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">置顶</label>
                                <div class="col-sm-6" style="margin-top: 5px">
                                    <label>
                                        <input name="status" type="radio" @if($res->status == 1) checked="checked" @endif value="1">
                                        <span class="text">是</span>
                                    </label>
                                    <label>
                                        <input name="status" type="radio" @if($res->status == 0) checked="checked" @endif  value="0">
                                        <span class="text">否</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">关键字</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="keyword" placeholder="请输入公共的关键字(6-18位)">@if(isset($res->keyword)) {{$res->keyword}} @endif</textarea>
                                </div>
                                <p class="help-block col-sm-4 ">[] 例如：公告的关键词</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">描述</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="description" placeholder="请输入公共的描述(小于60位)">@if(isset($res->description)) {{$res->description}} @endif</textarea>
                                </div>
                                <p class="help-block col-sm-4 ">[] 例如：对公告进行描述</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">作者</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="username" placeholder="请控制在6-18位" name="notice_name" required type="text" value="{{$res->notice_name}}">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">邮箱</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="username" placeholder="123456@qq.com" name="email" required type="email" value="{{$res->email}}">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">外链</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="username" value="@if(isset($res->notice_url)) {{$res->notice_url}} @endif" placeholder="请输入与该文章相关的链接" name="notice_url"  type="url">
                                </div>
                                <p class="help-block col-sm-4 ">[]例如：http://www.baidu.com</p>
                            </div>

                            <div class="form-group">
                                <label for="username"  class="col-sm-2 control-label no-padding-right">缩率图</label>
                                <div class="col-sm-6" style="margin-top: 5px">
                                    <input  id="notice_img"  name="img"  type="file">
                                    <img src="{{asset(NOTICE_IMG.'/'.$res->img)}}" id="Nimg1" alt="" width="100px">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">文章内容</label>
                                <div class="col-md-2">
                                    <script id="editor" name="content" type="text/plain" style="width:800px;height:480px;"> @if(isset($res->content)) {!! $res->content !!} @endif</script>
                                </div>

                            </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">发表文章</button>
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
                //实例化编辑器
                //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                var ue = UE.getEditor('editor');

                $('.alert-danger').delay(3000).fadeOut(2000);
//
//                $(function () {
//                    $("#notice_img").change(function () {
//                        uploadImage();
//                    })
//                });
//                function uploadImage() {
//                    //  判断是否有选择上传文件
//                    var imgPath = $("#notice_img").val();
//                    if (imgPath == "") {
//                        alert("请选择上传图片！");
//                        return;
//                    }
//                    //判断上传文件的后缀名
//                    var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
//                    if (strExtension != 'jpg' && strExtension != 'gif'
//                        && strExtension != 'png' && strExtension != 'bmp') {
//                        alert("请选择图片文件");
//                        return;
//                    }
//                    var formData = new FormData($('#art_form')[0]);
//                    $.ajax({
//                        type: "POST",
//                        url: "/admin/upload",
//                        data: formData,
//                        contentType: false,
//                        processData: false,
//                        success: function(data) {
//                            $('#Nimg1').attr('src','/'+data);
////                            $('#art_thumb').val(data);
//                        },
//                        error: function(XMLHttpRequest, textStatus, errorThrown) {
//                            alert("上传失败，请检查网络后重试");
//                        }
//                    });
//                }


        </script>
@stop