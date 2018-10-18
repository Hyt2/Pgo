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
                        <form class="form-horizontal" role="form" action="{{url('admin/notice')}}" method="post" enctype ="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="cate_id" data-bv-field="country">
                                        @foreach($res as $k=>$v)
                                        <option value="{{$v->id}}">{{$v->cate_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">标题</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="username" placeholder="请将标题控制在5-30位之间" name="title" required="" type="text">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">置顶</label>
                                <div class="col-sm-6" style="margin-top: 5px">
                                    <label>
                                        <input name="status" type="radio" checked="checked" value="1">
                                        <span class="text">是</span>
                                    </label>
                                    <label>
                                        <input name="status" type="radio" value="0">
                                        <span class="text">否</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">关键字</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="keyword" placeholder="请输入公共的关键字(6-18位)"></textarea>
                                </div>
                                <p class="help-block col-sm-4 ">[] 例如：公告的关键词</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">描述</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="description" placeholder="请输入公共的描述(小于60位)"></textarea>
                                </div>
                                <p class="help-block col-sm-4 ">[] 例如：对公告进行描述</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">作者</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="username" placeholder="请控制在6-18位" name="notice_name" required type="text">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">邮箱</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="username" placeholder="123456@qq.com" name="email" required type="email">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">外链</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="username" placeholder="请输入与该文章相关的链接" name="notice_url"  type="url">
                                </div>
                                <p class="help-block col-sm-4 ">[]例如：http://www.baidu.com</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">缩率图</label>
                                <div class="col-sm-6" style="margin-top: 5px">
                                    <input    name="img"  type="file">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">文章内容</label>
                                <div class="col-md-2">
                                    <script id="editor" name="content" type="text/plain" style="width:800px;height:480px;"></script>
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
    </script>
@stop