@extends('layout.admin')
@section('title', '订单管理')
@section('url', url('admin/order'))
@section('title2', '订单详情')
@section('content')
<div class="page-body">

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center">商品名称</th>
                                <th class="text-center">商品价格</th>
                                <th class="text-center">商品图片</th>
                                <th class="text-center">购买数量</th>
                                <th class="text-center">小计</th>
                            </tr>
                        </thead>
                        <tbody>

                           @foreach($details as $detail)
                            <tr>
                                <td align="center">{{ cut_str($detail->goods->goods_name, 22) }}</td>
                                <td align="center">{{ $detail->price }}</td>
                                <td align="center">
                                    <img src="{{ asset(u(GOODS_IMG) . $detail->goods->goods_img) }}" height="30">
                                </td>
                                <td align="center">{{ $detail->cnt }}</td>
                                <td align="center">{{ $detail->price * $detail->cnt }}</td>
                                
                            </tr>
                             @endforeach                         
                                                       
                        </tbody>
                    </table>
                </div>
                <div style="margin-top:10px; text-align:right;">
                </div>
                <div>
                                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection