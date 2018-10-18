@extends('layout.home')
@section('content')
    <link href="{{ asset(_HOME_ . '/css') }}/goodslist.css"  rel="stylesheet" type="text/css" />
    <link href="{{ asset(_HOME_ . '/css') }}/tuiguang.css"   rel="stylesheet" type="text/css" />
    <div id="glist">
        <ul id="gl" >
            <h2 style="font-size:15px;text-indent:10px;">精品推荐</h2>
            @foreach($res as $k=>$v)
                <li style="border:dotted 1px orange;margin-top: 10px;">
                    <p style="text-align: center"><a href="{{url('notice_content/'.$v->id)}}">{{$v->title}}</a></p>
                    <p style="text-align: left">作者：{{$v->notice_name}}</p>
                    <p>已有302人评价</p>
                </li>
            @endforeach


        </ul>
        <div id="gr">
            <div id="gr_1">
                  {{--{{$content->cate_id}}--}}
                    <h1>精品文章</h1>
            </div>
            <div id="gr_2">
                <sanp style="font-size: 12px">作者：{{$content->notice_name}}</sanp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <sanp style="font-size: 12px">email：{{$content->email}}</sanp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <sanp style="font-size: 22px;margin-left: 60px;">{{$content->title}}</sanp>
                <sanp style="font-size: 13px"><a href="{{$content->notice_url}}">原文</a></sanp>
                <sanp style="font-size: 13px;float: right">{{date('Y-m-d H:i:s',$content->create_time)}}</sanp>
            </div>
            <div id="gr_3">
                {!! $content->content !!}

            </div>

        </div>
        <div style="clear:both;"></div>
    </div>

@stop

@section('js')
    <script>
        $('.ng-sort').attr('style','display: none;');
    </script>
@stop