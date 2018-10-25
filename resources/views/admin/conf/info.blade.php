@extends('layout.admin')
@section('title', '系统配置')
@section('title2', '配置项')
@section('url', url('admin/conf'))
@section('content')


            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <!-- 配置列表开始 -->
                            <div class="widget-body">
                                <div class="widget-main ">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                            <li class="active">
                                                <a data-toggle="tab" href="#home11">
                                                    店铺配置
                                                </a>
                                            </li>
                                            <li class="">
                                                <a data-toggle="tab" href="#profile11">
                                                    商品配置
                                                </a>
                                            </li>
                                            <li class="">
                                                <a data-toggle="tab" href="#profile12">
                                                    SEO配置
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content tabs-flat">
                                            <div id="home11" class="tab-pane active">
                                                <div id="horizontal-form">
                                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        @if(isset($conf_res['goods_conf']))
                                                            @foreach ($conf_res['goods_conf'] as $conf)
                                                                <div class="form-group">
                                                                    <label for="username" class="col-sm-2 control-label no-padding-right">{{ $conf->cname }}</label>
                                                                    <div class="col-sm-6">
                                                                        @if($conf->form_type == '1')
                                                                                <!-- 单行文本 -->
                                                                        <input class="form-control" placeholder="" name="{{ $conf->ename }}" value="{{ $conf->value }}" type="text">
                                                                        @elseif($conf->form_type == '5')
                                                                                <!-- 文本域 -->
                                                                        <textarea name="{{ $conf->ename }}" class="form-control">{{ $conf->value }}</textarea>
                                                                        @elseif($conf->form_type == '2')
                                                                                <!-- 单选-->
                                                                        <div class="radio">
                                                                            @if($conf->values)
                                                                                <?php $arr = explode(',', $conf->values); ?>
                                                                                @foreach($arr as $k1 => $v1)

                                                                                    <label>
                                                                                        <input @if($conf->value == $v1) checked="checked" @endif name="{{ $conf->ename }}" type="radio" class="colored-blue" value="{{ $v1 }}">
                                                                                        <span class="text"> {{ $v1 }}</span>
                                                                                    </label>
                                                                                @endforeach
                                                                            @endif
                                                                        </div>
                                                                        @elseif($conf->form_type == '4')
                                                                                <!-- 下拉菜单 -->
                                                                        <select name="{{ $conf->ename }}">
                                                                            <option value="">请选择</option>
                                                                            @if($conf->values)
                                                                                <?php $arr = explode(',', $conf->values); ?>
                                                                                @foreach($arr as $k1=>$v1)

                                                                                <option @if($conf->value == $v1) selected @endif value="{{ $v1 }}">{{ $v1 }}</option>

                                                                                @endforeach
                                                                            @endif
                                                                        </select>
                                                                        @elseif($conf->form_type == '3')
                                                                                <!-- 复选框 -->
                                                                        <div class="checkbox">
                                                                            @if($conf->values)
                                                                                <?php
                                                                                $arr_values = explode(',', $conf->values);
                                                                                $arr_value  = explode(',', $conf->value);
                                                                                ?>

                                                                                @foreach($arr_values as $k1 => $v1)
                                                                                    <label>
                                                                                        <input @if(in_array($v1, $arr_value)) checked @endif name="{{ $conf->ename }}[]" type="checkbox" class="colored-blue" value="{{ $v1 }}">
                                                                                        <span class="text"> {{ $v1 }} </span>
                                                                                    </label>
                                                                                @endforeach
                                                                            @endif
                                                                        </div>
                                                                        @elseif($conf->form_type == '6')
                                                                            <!-- 文件上传 -->
                                                                            <input placeholder="" style="display:inline;" name="{{ $conf->ename }}" type="file">
                                                                            @if($conf->value)
                                                                                <img src="{{ asset(u(CONF_IMG) . $conf->value) }}" height="30">
                                                                            @else
                                                                                暂无缩略图
                                                                            @endif
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                        <div class="form-group">
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                <button type="submit" class="btn btn-default">保存信息</button>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>

                                            <div id="profile11" class="tab-pane">
                                                <div class="form-horizontal">
                                                    @if($conf_res['shop_conf'])
                                                        @foreach ($conf_res['shop_conf'] as $k => $conf)
                                                            <div class="form-group">
                                                                <label for="username" class="col-sm-2 control-label no-padding-right">{{ $conf->cname }}</label>
                                                                <div class="col-sm-6">
                                                                    @if($conf->form_type == '1')
                                                                            <!-- 单行文本 -->
                                                                    <input class="form-control" placeholder="" name="{{ $conf->ename }}" value="{{ $conf->value }}" type="text">
                                                                    @elseif($conf->form_type == '5')
                                                                            <!-- 文本域 -->
                                                                    <textarea name="{{ $conf->ename }}" class="form-control">{{ $conf->value }}</textarea>
                                                                    @elseif($conf['form_type']=='2')
                                                                            <!-- 单选-->
                                                                    <div class="radio">
                                                                        @if($conf->values)
                                                                            <?php $arr = explode(',', $conf->values); ?>
                                                                            @foreach($arr as $k1 => $v1)

                                                                                <label>
                                                                                    <input @if($conf->value == $v1) checked @endif name="{{ $conf->ename }}" type="radio" class="colored-blue" value="{{ $v1 }}">
                                                                                    <span class="text"> {{ $v1 }}</span>
                                                                                </label>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                    @elseif($conf->form_type == '4')
                                                                            <!-- 下拉菜单 -->
                                                                    <select name="{{ $conf->ename }}">
                                                                        <option value="">请选择</option>
                                                                        @if($conf->values)
                                                                            <?php $arr = explode(',', $conf->values); ?>
                                                                            @foreach($arr as $k1=>$v1)

                                                                                <option @if($conf->value == $v1) selected @endif value="{{ $v1 }}">{{ $v1 }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                    @elseif($conf->form_type == '3')
                                                                            <!-- 复选框 -->
                                                                    <div class="checkbox">
                                                                        @if($conf->values)
                                                                            <?php
                                                                            $arr_values = explode(',', $conf->values);
                                                                            $arr_value  = explode(',', $conf->value);
                                                                            ?>
                                                                            @foreach($arr_values as $k1 => $v1)

                                                                                <label>
                                                                                    <input @if(in_array($v1, $arr_value)) checked @endif name="{{ $conf->ename }}[]" type="checkbox" class="colored-blue" value="{{ $v1 }}">
                                                                                    <span class="text"> {{ $v1 }}</span>
                                                                                </label>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                    @elseif($conf->form_type == '6')
                                                                            <!-- 文件上传 -->
                                                                    <input placeholder="" name="{{ $conf->ename }}" style="display:inline;" type="file">
                                                                    @if($conf->value)
                                                                        <img src="{{ asset(u(CONF_IMG) . $conf->value) }}" height="30">
                                                                    @else
                                                                        暂无缩略图
                                                                    @endif
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-default">保存信息</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                            <div id="profile12" class="tab-pane">
                                                <div class="form-horizontal">
                                                    @if(isset($conf_res['seo_conf']))
                                                        @foreach ($conf_res['seo_conf'] as $k => $conf)
                                                            <div class="form-group">
                                                                <label for="username" class="col-sm-2 control-label no-padding-right">{{ $conf->cname }}</label>
                                                                <div class="col-sm-6">
                                                                    @if($conf->form_type == '1')
                                                                            <!-- 单行文本 -->
                                                                    <input class="form-control" placeholder="" name="{{ $conf->ename }}" value="{{ $conf->value }}" type="text">
                                                                    @elseif($conf->form_type == '5')
                                                                            <!-- 文本域 -->
                                                                    <textarea name="{{ $conf->ename }}" class="form-control">{{ $conf->value }}</textarea>
                                                                    @elseif($conf['form_type']=='2')
                                                                            <!-- 单选-->
                                                                    <div class="radio">
                                                                        @if($conf->values)
                                                                            <?php $arr = explode(',', $conf->values); ?>
                                                                            @foreach($arr as $k1 => $v1)

                                                                                <label>
                                                                                    <input @if($conf->value == $v1) checked @endif name="{{ $conf->ename }}" type="radio" class="colored-blue" value="{{ $v1 }}">
                                                                                    <span class="text"> {{ $v1 }}</span>
                                                                                </label>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                    @elseif($conf->form_type == '4')
                                                                            <!-- 下拉菜单 -->
                                                                    <select name="{{ $conf->ename }}">
                                                                        <option value="">请选择</option>
                                                                        @if($conf->values)
                                                                            <?php $arr = explode(',', $conf->values); ?>
                                                                            @foreach($arr as $k1=>$v1)

                                                                                <option @if($conf->value == $v1) selected @endif value="{{ $v1 }}">{{ $v1 }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                    @elseif($conf->form_type == '3')
                                                                            <!-- 复选框 -->
                                                                    <div class="checkbox">
                                                                        @if($conf->values)
                                                                            <?php
                                                                            $arr_values = explode(',', $conf->values);
                                                                            $arr_value  = explode(',', $conf->value);
                                                                            ?>
                                                                            @foreach($arr_values as $k1 => $v1)

                                                                                <label>
                                                                                    <input @if(in_array($v1, $arr_value))checked @endif name="{{ $conf->ename }}[]" type="checkbox" class="colored-blue" value="{{ $v1 }}">
                                                                                    <span class="text"> {{ $v1 }}</span>
                                                                                </label>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                    @elseif($conf->form_type == '6')
                                                                            <!-- 文件上传 -->
                                                                    <input placeholder="" name="{{ $conf->ename }}" type="file">
                                                                    @if($conf->value)
                                                                        <img src="{{ asset(u(CONF_IMG) . $conf->value) }}" height="30">
                                                                    @else
                                                                        暂无缩略图
                                                                    @endif
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
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
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
@endsection