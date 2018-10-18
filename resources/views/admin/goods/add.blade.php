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

                    <div class="docs-example">
                        <ul class="nav nav-tabs tabs-flat">
                            <li class="active"><a href="#info-tab" data-toggle="tab">基本信息</a></li>
                            <li class=""><a href="#address-tab" data-toggle="tab">描述信息</a></li>

                            {{--<li class=""><a href="#img-tab" data-toggle="tab">商品相册</a></li>--}}
                        </ul>

                        <form id="accountForm" method="post" action="{{url('admin/goods')}}" class="form-horizontal bv-form" enctype="multipart/form-data" novalidate="novalidate">
                            {{csrf_field()}}
                            <div class="tab-content tabs-flat">
                                <div class="tab-pane active" id="info-tab">

                                    <div class="form-group has-feedback">
                                        <label class="col-lg-2 control-label">商品名称</label>
                                        <div class="col-lg-6">
                                            <input type="text"  class="form-control" name="goods_name" placeholder="请将标题控制在5-30位之间" required>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    {{--<div class="form-group has-feedback">--}}
                                        {{--<label class="col-lg-2 control-label">促销活动</label>--}}
                                        {{--<div class="col-lg-6">--}}
                                            {{--<input type="text"  class="form-control" name="goods_name" placeholder="请将标题控制在5-30位之间" required>--}}
                                        {{--</div>--}}
                                        {{--<p class="help-block col-sm-4 red">* 必填</p>--}}
                                    {{--</div>--}}

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">商品主图</label>
                                        <div class="col-sm-6" style="margin-top: 5px">
                                            <input name="goods_img" type="file" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">商品相册</label>
                                        <div class="col-sm-6" style="margin-top: 5px">
                                            <input name="img[]" type="file" multiple="true">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">上架</label>
                                        <div class="col-sm-6" style="margin-top: 5px">
                                            <label>
                                                <input name="goods_status" class="colored-blue" type="radio" checked="checked" value="1">
                                                <span class="text">是</span>
                                            </label>
                                            <label>
                                                <input name="goods_status" class="colored-blue" type="radio" value="0">
                                                <span class="text">否</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">所属类别</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="cate_id" data-bv-field="country">
                                                @foreach($cate as $k=>$v)
                                                <option @if ($v->pid == '0') disabled @endif value="{{$v->id}}">{{$v->cate_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">商品类型</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="type_id" data-bv-field="country">
                                                @foreach($type as $k=>$v)
                                                    <option value="{{$v->id}}">{{$v->type_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">所属品牌</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="brand_id" data-bv-field="country">
                                                @foreach($brand as $k=>$v)
                                                <option value="{{$v->id}}">{{$v->brand_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label class="col-lg-2 control-label">市场价</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="markte_price" placeholder="例：￥:124.11(保留小数点后两位)" required>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label class="col-lg-2 control-label">本店价</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="shop_price" placeholder="例：￥:124.11(保留小数点后两位)" required>

                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label class="col-lg-2 control-label">商品重量</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="goods_weight"  placeholder="例：1.15Kg(保留小数点后两位)" required>

                                        </div>
                                        <div class="col-sm-1" style="margin-left: -28px">
                                            <select name="weight_unit">
                                                <option value="0" selected >g</option>
                                                <option value="1">kg</option>
                                            </select>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label class="col-lg-2 control-label">商品库存</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="goods_kc"  placeholder="例：100件(单位件)" required>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>


                                </div>
                                <div class="tab-pane " id="address-tab">
                                    <div class="form-group has-feedback">
                                        <div class="col-md-2">
                                            <script id="editor" name="goods_desc" type="text/plain" style="width:1200px;height:480px;"></script>
                                        </div>
                                    </div>
                                </div>

                                {{--<div class="tab-pane " id="img-tab">--}}
                                    {{--<div class="form-group has-feedback">--}}
                                        {{--<label class="col-lg-1 control-label"></label>--}}
                                        {{--<div class="col-lg-6">--}}
                                            {{--<div class="layui-upload">--}}
                                                {{--<a class="label label-primary" style="width:150px;height:40px;padding-top:15px;font-size:15px;"><i class="fa fa-camera"></i>  多图片上传--}}
                                                    {{--<input  name="file_upload" id="file_upload" type="file" multiple="true" style="opacity: 0;position: absolute;width:150px;height: 40px;margin-left:-5px;margin-top:-16px">--}}
                                                {{--</a>--}}
                                                {{--<blockquote class="" style="margin-top: 10px;">--}}
                                                    {{--预览图：--}}
                                                    {{--<div class="" id="demo2"></div>--}}
                                                {{--</blockquote>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">确认添加</button>

                                </div>
                            </div>

                            </form>
                        </div>
            </div>
        </div>
    </div>

@stop

@section('js')
    <script>
        var ue = UE.getEditor('editor');
        $('.alert-danger').delay(3000).fadeOut(2000);

        //多图片上传
    </script>
@stop
