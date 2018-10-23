@extends('layout.home')
@section('content')
    <link href="{{ asset(_HOME_ . '/css') }}/goodslist.css"  rel="stylesheet" type="text/css" />
    <link href="{{ asset(_HOME_ . '/css') }}/tuiguang.css"   rel="stylesheet" type="text/css" />
    <div id="glist">
        <ul id="gl" >
            <h2 style="font-size:15px;text-indent:10px;">精品推荐</h2>
            @foreach($res as $k=>$v)
                <li style="border:dotted 1px silver;margin-top: 10px;">
                    <p style="text-align: center"><a href="{{url('notice_content/'.$v->id)}}"><b>{{$v->title}}</b></a></p>
                    <p style="text-align:center">作者：{{$v->notice_name}}</p>
                    <p style="text-align:center">{{date('Y-m-d H:i:s',$content->create_time)}}</p>
                </li>
            @endforeach


        </ul>
        <div id="gr">
            <div id="gr_1">
                  <b style="color: orange">{{$content->cate->cate_name}}</b>
            </div>
            <div id="gr_2">
                <sanp style="font-size: 12px">作者：{{$content->notice_name}}</sanp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <sanp style="font-size: 12px">email：{{$content->email}}</sanp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <sanp style="font-size: 22px;margin-left: 60px;color:orangered">{{$content->title}}</sanp>
                <sanp style="font-size: 13px;"><a href="{{$content->notice_url}}">原文</a></sanp>
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