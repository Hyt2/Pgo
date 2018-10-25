@extends('layout.admin')
@section('title', '订单管理')
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
                                <th class="text-center" width="6%">订单号</th>
                                <th class="text-center">总金额</th>
                                <th class="text-center">下单时间</th>
                                <th class="text-center">收货人</th>
                                <th class="text-center">收货地址</th>
                                <th class="text-center" width="10%">总数量</th>
                                <th class="text-center" width="10%">状态</th>
                                <th class="text-center" width="22%">操作</th>
                            </tr>
                        </thead>
                        <tbody>

                        	@foreach($orders as $order)
                            <tr>
                                <td align="center">{{ $order->oid }}</td>
                                <td align="center">{{ $order->sum }}</td>
                                <td align="center">{{ date('Y-m-d H:i:s',$order->create_time) }}</td>
                                <td align="center">
                                	{{ $order->rec }}
                                </td>
                                <td align="center">{{ $order->addr }}</td>
                                <td align="center">
                                    @if($order->cnts != 0)
                                        {{ $order->cnts }}
                                    @else
                                        <font color="red">空</font>
                                    @endif
                                </td>
                                <td align="center">
                                     @if($order->status=='1')
                                        <font color="#FF0000">未发货</font>
                                     @elseif($order->status=='2')
                                        <font color="#F68EF1">已发货</font>
                                     @elseif($order->status=='3')
                                        <font color="#1FF0A0">交易完成</font>
                                     @endif
                                </td>
                                <td align="center">
                                    <a href="{{ url("admin/order/$order->oid/edit") }}" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="{{ url("/admin/order/{$order->oid}/show") }}" class="btn btn-primary btn-sm shiny">
                                        <i class="fa  fa-calendar"></i> 订单详情
                                    </a>
                                    <a href="{{ url("/admin/order/{$order->oid}/send") }}" class="btn btn-primary btn-sm shiny">
                                        <i class="fa  fa-truck"></i> 发货
                                    </a>
                                </td>
                            </tr>
                             @endforeach                       
                                                       
                        </tbody>
                    </table>
                </div>
                <div style="margin-top:10px; text-align:right;">
                    {{ $orders->links() }}
                </div>
                <div>
                                    </div>
                
            </div>
        </div>
    </div>
</div>

</div>
@endsection