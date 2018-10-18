@extends('layout.home')
@section('content')
    <link href="{{ asset(_HOME_ . '/css') }}/goodslist.css"  rel="stylesheet" type="text/css" />
    <link href="{{ asset(_HOME_ . '/css') }}/tuiguang.css"   rel="stylesheet" type="text/css" />
    <div id="glist">
        <ul id="gl">
            <h3 style="font-size:15px;text-indent:10px;">热销商品</h3>
            @foreach($res as $k=>$v)
            <li>
                <img class="tg-img" width="190" src="{{url(asset(GOODS_IMG.'/'.$v->goods_img))}}" alt="">
                <div class="tg-name">{{$v->goods_name}}</div>
                <div class="tg-price">¥{{$v->shop_price}}</div>
                <div class="tg-pj">已有302人评价</div>
            </li>
            @endforeach


        </ul>
        <div id="gr">
            <div id="gr_1">
                <span>销量</span><span>价格</span><span>评论数</span><span>上架时间</span>
            </div>
            <div id="gr_2" ></div>
            <ul id="gr_3">
                @foreach($goods as $k=>$v)
                <li>
                    <a href="{{url('goodslist/'.$v->id)}}"><img src="{{url(asset(GOODS_IMG.'/'.$v->goods_img))}}" alt=""></a>
                    <div class="p-price">¥{{$v->shop_price}}</div>
                    <div class="p-name" >{{$v->goods_name}}</div>
                    <div class="p-special">领券立减200！低至2499！纤薄机身，2K屏，双镜头，强劲芯片，你想要的快~</div>
                    <div class="p-pl">已有456人评价</div>
                    <div class="p-btn"><span>对比</span><span>关注</span><span>加入购物车</span></div>
                </li>
                @endforeach

            </ul>

        </div>
        <div style="clear:both;"></div>
    </div>
@stop
@section('js')
    <script>
        $('.ng-sort-list-box').attr('style','display: none;');
    </script>
@stop