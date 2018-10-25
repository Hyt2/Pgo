@extends('layout.admin')
@section('title', '订单管理')
@section('title2', '订单信息修改')
@section('url', url('admin/order'))
@section('content')
<div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改订单信息</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="{{ url('admin/order/' . $order->oid) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">订单号</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" disabled name="oid" value="{{ $order->oid }}" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">收货人</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="rec" value="{{ $order->rec }}" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">联系电话 </label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="tel" value="{{ $order->tel }}" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">收货地址</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="addr" value="{{ $order->addr }}" required="" type="text">
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
@endsection