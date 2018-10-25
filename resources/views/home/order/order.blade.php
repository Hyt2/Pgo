<html>
 <head> 
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" /> 
  <link href="images/favicon.ico" type="image/ico" rel="shortcut icon" /> 
  <title>订单中心</title> 
  <script>
var sn = sn||{"context":'/emall',"domain":'www.suning.com',"productDomain":'http://product.suning.com',"storeId":'10052' || '10052',"catalogId":'10051' || '10051',"typeFlg":'',"productType":'Product',"memberDomain":'member.suning.com',"cartPath":"cart.suning.com/emall","imageDomianDir":"http://image2.suning.cn","scriptDomianDir":"http://b2cres.suning.cn","reviewPath":'http://review.suning.com/',"adId":'',"online":'online.suning.com',"conline":'conline.suning.com',"cookieDomain":'.suning.com',"langId":"-7" || '-7',"productId":"","partNumber":"","SPIKE_HOST":"promotion.suning.com","cityId":"","searchDomain" : 'http://search.suning.com/emall/',"qiangDomain":'qiang.suning.com',"productShareName":"","sslDomain":'ssl.suning.com',"passportLogon":'https://passport.suning.com/ids/login',"recommendDomain":"http://tuijian.suning.com"};
var outerStatus = "";
var outerOrderId = "";
</script> 

    

  <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/common.css" /> 
  <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/search.css" /> 
  <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/sn-sidebar.css" /> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/jquery.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/sn_lazyload.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/lazyelem.min.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/SFE.base.min.js"></script> 
  <link href="{{ asset(_HOME_ . '/css') }}/order-my.css?v=2016031003" rel="stylesheet" /> 
  <link href="{{ asset(_HOME_ . '/css') }}/oldDialog.css?v=2016031003" rel="stylesheet" /> 
  <link href="{{ asset(_HOME_ . '/css') }}/reset.min.css?v=2016031003" rel="stylesheet" /> 
  <link href="{{ asset(_HOME_ . '/css') }}/ms-style.min.css?v=2016031003" rel="stylesheet" /> 
 </head> 
 <!--[if lt IE 7 ]><body class="ie ie6"><![endif]--> 
 <!--[if IE 7 ]><body class="ie ie7"><![endif]--> 
 <!--[if IE 8 ]><body class="ie ie8"><![endif]--> 
 <!--[if IE 9 ]><body class="ie9"><![endif]--> 
 <!--[if (gt IE 9)|!(IE)]><!--> 
 <body class="root1200"> 
  <!--<![endif]--> 
  <script>
/*
* 宽窄屏切换
* */
var bigscreen = false;
if ( screen.width>=1200 ) {
bigscreen = true;
var bodyTag = document.getElementsByTagName("body")[0],
bodyClassName = bodyTag.getAttribute("className") || bodyTag.getAttribute("class");
bodyClassName = bodyClassName ? bodyClassName+" " : "";
bodyTag.className = bodyClassName+"root1200";
}
</script> 
  @include('layout.tool_bar')
  <!-- 我的易购公用头 [[ --> 
    @include('layout.member_header')


  <div class="wrapper cont  clearfix"> 
   <div class="side-box"> 
    <!-- 我的易购左侧组件 [[ --> 
    <div class="cont-side"> 
     <div class="side-neck"> 
      <i></i> 
     </div> 
     <div class="ms-side"> 
      <article class="side-menu side-menu-off"> 
       <style type="text/css">

.side-hot-icon{background: url(images/hot.png?v=2016030101) no-repeat right top;
    background-color: u;
    padding-right: 24px;
}
.side-opinion-icon{
  padding-right: 14px;
  background: url(images/opinion.png?v=2016030101) no-repeat right center;
}
.news-icon{
  background: url(images/new.png?v=2016030101) no-repeat right top;
    padding-right: 24px;
}
  /*左侧边栏新增覆盖样式----我的易购改版兼容*/ 
  .car-num-attation{font-weight: normal; font-size:12px; }
  .car-num-attation em{ color:#F70;}
  .side-icon{ display:inline-block; *display:inline;*zoom:1;width:14px; height:13px;vertical-align:middle; margin-left:-18px; margin-right:4px; background:url(images/side-icon-sprite.png?v=2016030101) no-repeat 0 0 ;}
  .side-menu-tree{ padding:0 20px 12px 40px}
  .side-order-center{ background-position:1px -15px;}
  .side-my-assets{background-position:1px -29px; _background-position:2px -28px; }
  .side-attent-center{ background-position:1px -43px;_background-position:2px -42px; }
  .side-spec-serv{background-position:1px -58px;}
  .side-after-sale{background-position:1px -71px;}
  .side-menu .dt{margin-bottom:2px;line-height: 28px;font-family: "Microsoft YaHei"; font-weight: 700;color: #333;font-size:0!important;}
  .side-menu-tree .dt span,.side-menu-tree .dt a{ font-size:14px;}
  .side-menu-tree span{ color:#333; font-size:14px; width:auto;*display:inline;*zoom:1; vertical-align:middle; }
  .side-menu-tree a{vertical-align:middle;}
</style> 
       <div style="" class="side-menu-tree"> 
        <dt></dt> 
        <div class="dt"> 
         <i class="side-icon side-my-cart"></i> 
         <a href="{{ url('cart') }}" target="_blank" data-url="shoppingCartMenuFlag" name="Myyigou_index_none_daohang1520011" id="1520011">我的购物车</a> 
        </div> 
        <div class="dt"> 
         <i class="side-icon side-order-center"></i> 
         <span>订单中心</span> 
        </div> 
        <div class="dd"> 
         <ul> 
          <li><a href="{{ url('order') }}" name="Myyigou_index_none_daohang15200121" data-url="myOrderMenuFlag" id="15200121" style="color:#f70">我的订单</a></li> 
          <li><a href="http://ms.suning.com/web/myMS.do" name="Myyigou_index_none_daohang15200122" data-url="" id="15200122">我的秒杀</a></li> 
          <li><a href="http://2.suning.com/myOrder/queryMyOrders.do" name="Myyigou_index_none_daohang15200123" data-url="shpOrdersMenuFlag" id="15200123" class="news-icon">我的二手</a></li> 
          <li><a href="http://try.suning.com/tps/mytry/main.htm" name="Myyigou_index_none_daohang15200124" data-url="myTryMenuFlag" id="15200124">我的试用</a></li> 
          <li><a href="http://member.suning.com/emall/MyAuctionView?storeId=10052&amp;catalogId=10051" name="Myyigou_index_none_daohang15200125" data-url="" id="15200125">我的拍卖</a></li> 
         </ul> 
        </div> 
        <div class="dt"> 
         <i class="side-icon side-my-assets"></i> 
         <span>我的资产</span> 
        </div> 
        <div class="dd"> 
         <ul> 
          <li><a href="http://vip.suning.com/ams-web/member/exchangeDetail.htm" target="_blank" name="Myyigou_index_none_daohang15200131" data-url="" id="15200131">我的云钻</a></li> 
          <li><a href="http://my.jr.suning.com/sfp/accountAssets/index.htm" target="_blank" name="Myyigou_index_none_daohang15200132" data-url="" id="15200132">我的金融</a></li> 
          <li><a href="member_coupon.html?storeId=10052&amp;catalogId=10051" name="Myyigou_index_none_daohang15200133" data-url="myGiftTicketMenuFlag" id="15200133">我的优惠券</a></li> 
          <li><a href="https://ssl.suning.com/emall/MyStoredValueCardView?storeId=10052&amp;catalogId=10051" name="Myyigou_index_none_daohang15200134" data-url="" id="15200134">我的苏宁卡</a></li> 
          <li><a href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://rxf.suning.com/epps-cpf/accountMgt/assetOverview.do" target="_blank" name="Myyigou_index_none_daohang15200135" data-url="" id="15200135" class="side-hot-icon">我的任性付</a></li> 
         </ul> 
        </div> 
        <div class="dt"> 
         <i class="side-icon side-attent-center"></i> 
         <span>关注中心</span> 
        </div> 
        <div class="dd"> 
         <ul> 
          <li><a href="member_collect_goods.html" name="Myyigou_index_none_daohang15200141" data-url="myFavoriteMenuFlag" id="15200141">我的收藏</a></li> 
          <li><a href="member_history.html" name="Myyigou_index_none_daohang15200142" data-url="myTraceMenuFlag" id="15200142">我的足迹</a></li> 
          <li><a href="member_comments.html" name="Myyigou_index_none_daohang15200143" data-url="reviewMenuFlag" id="15200143">我的评价</a></li> 
         </ul> 
        </div> 
        <div class="dt"> 
         <i class="side-icon side-after-sale"></i> 
         <span>自助服务</span> 
        </div> 
        <div class="dd"> 
         <ul> 
          <li><a href="member_aftersale.html?storeId=10052&amp;catalogId=10051" name="Myyigou_index_none_daohang15200151" data-url="" id="15200151">退换货</a></li> 
          <li><a href="member_suggest.html" name="Myyigou_index_none_daohang15200152" data-url="adviceMenuFlag" id="15200152">意见/建议</a></li> 
          <li><a href="http://member.suning.com/emall/SNRepairServiceApplyView?storeId=10052&amp;catalogId=10051" name="Myyigou_index_none_daohang15200153" data-url="" id="15200153">维修/保养</a></li> 
          <li><a href="http://member.suning.com/emall/SNLingYueGoodsOrderView?storeId=10052&amp;catalogId=10051" name="Myyigou_index_none_daohang15200154" data-url="" id="15200154">修改订单</a></li> 
          <li><a href="http://member.suning.com/emall/SNMyAdvisoryView?storeId=10052&amp;catalogId=10051" name="Myyigou_index_none_daohang15200155" data-url="" id="15200155">我的咨询</a></li> 
          <li><a href="http://assss.suning.com/assss-web/pc/goAppointmentOrdersList.do" name="Myyigou_index_none_daohang15200156" data-url="" id="15200156">帮客预约</a></li> 
         </ul> 
        </div> 
        <div class="dt"> 
         <i class="side-icon side-spec-serv"></i> 
         <span>特色服务</span> 
        </div> 
        <div class="dd"> 
         <ul> 
          <li><a href="http://yushou.suning.com/pss-web/appoint/myAppoint.do" name="Myyigou_index_none_daohang15200161" data-url="appointmentMenuFlag" id="15200161">我的预约</a></li> 
          <li><a href="http://sma.suning.com/sma/b2c/myList.htm" name="Myyigou_index_none_daohang15200162" data-url="myScodeMenuFlag" id="15200162">我的S码</a></li> 
         </ul> 
        </div> 
       </div> 
       <a class="switch-side-menu icon-up-side" ison="on"><i></i></a> 
      </article> 
     </div> 
    </div> 
    <!-- 我的易购左侧组件 ]] --> 
   </div> 
   <!--右侧订单中心[[--> 
   <div class="order-module"> 
    <div class="wrap-box"> 
     <!--右侧订单广告位--> 
     <div class="order-nav clearfix"> 
      <h2 class="l">我的订单:</h2> 
      <div class="classify l"> 
       <div class="l"> 
        <h3><span name="ddzx_none_orderstab_t1" class="act-classify">网上订单</span></h3> 
       </div> 
       <div id="nvDrop" class="l menu"> 
        <div style="display:none" class="nv-list"> 
         <i class="bnt-close"></i> 
         <ul class="clearfix"> 
          <li> <a name="ddzx_none_orderstab_t2" href="http://www.suning.com/webapp/wcs/stores/servlet/MyOrder?storeId=10052&amp;catalogId=10051&amp;otherOrder=1" title="门店订单">门店订单</a> <a href="http://2.suning.com/myOrder/queryMyOrders.do" title="二手订单">二手订单</a> </li> 
          <li> <a name="ddzx_none_orderstab_t3" href="http://www.suning.com/webapp/wcs/stores/servlet/MyOrder?storeId=10052&amp;catalogId=10051&amp;otherOrder=7" title="机票订单">机票订单</a> <a name="ddzx_none_orderstab_t5" href="http://www.suning.com/webapp/wcs/stores/servlet/MyOrder?storeId=10052&amp;catalogId=10051&amp;otherOrder=8" title="火车票">火车票</a> </li> 
          <li> <a name="ddzx_none_orderstab_t7" href="http://www.suning.com/webapp/wcs/stores/servlet/MyOrder?storeId=10052&amp;catalogId=10051&amp;otherOrder=10" title="游戏">游戏</a> <a href="http://www.suning.com/webapp/wcs/stores/servlet/MyOrder?storeId=10052&amp;catalogId=10051&amp;otherOrder=14" title="IT帮客">IT帮客</a> </li> 
          <li> <a name="ddzx_none_orderstab_t9" href="http://www.suning.com/webapp/wcs/stores/servlet/MyOrder?storeId=10052&amp;catalogId=10051&amp;otherOrder=6" title="苏宁卡">苏宁卡</a> <a name="ddzx_none_orderstab_t8" href="http://www.suning.com/webapp/wcs/stores/servlet/MyOrder?storeId=10052&amp;catalogId=10051&amp;otherOrder=11" title="电子书">电子书</a> </li> 
          <li> <a name="ddzx_none_orderstab_t10" href="http://www.suning.com/webapp/wcs/stores/servlet/MyOrder?storeId=10052&amp;catalogId=10051&amp;otherOrder=12" title="保险">保险</a> <a href="http://www.suning.com/webapp/wcs/stores/servlet/MyOrder?storeId=10052&amp;catalogId=10051&amp;otherOrder=13" title="我的众筹">我的众筹</a> </li> 
         </ul> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="order-main"> 
      <div class="order-state"> 
       <div class="tab clearfix"> 
        <ul class="l"> 
         <li class="act-state" onclick="queryByStatus('all');" id="tab_all"><a name="ddzx_none_reminds_all" href="javascript:void(0);">全部订单</a></li> 
         <li onclick="queryByStatus('waitPay');" id="tab_waitPay"><a name="ddzx_none_reminds_pay" href="javascript:void(0);">待付款</a><span><b id="waitPayCount">{{ $count[0] }}</b><i></i></span></li> 
         <li onclick="queryByStatus('waitReceive');" id="tab_waitReceive"><a name="ddzx_none_reminds_receive" href="javascript:void(0);">待收货</a><span><b id="waitReceiveCount">{{ $count[1] }}</b></span></li> 
        </ul> 

        <script>
            function queryByStatus(sta)
            {
                if (sta == 'all') {
                    window.location.href = '/order';
                    return ;
                }
                window.location.href = '/order/' + sta;
            }
        </script>
        
       </div> 
       <div id="conditionDiv" class="state-select clearfix"> 
        <!-- <div class="so clearfix"> 
         <p class="l so-box"><input type="text" maxlength="20" id="queryConditionText" class="l" /><em>商品名称和订单号</em><button name="ddzx_none_screening_search" onclick="queryByCondition();" class="r">搜索订单</button></p> 
         <strong class="l show-cont">更多筛选条件</strong> 
        </div>  -->
        <div class="dates" style="display: none;"> 
         <div class="state clearfix"> 
          <div id="jyDrop" class="l"> 
           <label class="l">交易状态：</label> 
           <h3 class="jy-selected l ic-top"><span id="selectedStatus">全部</span></h3> 
           <div style="display: none;" class="option jy-list"> 
            <a href="javascript:changeStatus('all');" title="全部" class="on">全部</a> 
            <a href="javascript:changeStatus('waitPay');" title="等待支付">等待支付</a> 
            <a href="javascript:changeStatus('waitReceive');" title="等待收货">等待收货</a> 
            <a href="javascript:changeStatus('cancel');" title="已取消">已取消</a> 
            <a href="javascript:changeStatus('success');" title="已完成">已完成</a> 
            <a href="javascript:changeStatus('return');" title="已退货">已退货</a> 
           </div> 
          </div> 
         </div> 
         <div id="timeDates" class="times clearfix"> 
          <label class="l">下单时间：</label> 
          <h3 class="l"><input type="text" readonly="true" maxlength="10" id="sn_beginTime" value="" class="l" /></h3> 
          <b class="l">到</b> 
          <h3 class="l"><input type="text" readonly="true" maxlength="10" id="sn_endTime" value="" class="l" /></h3> 
          <p id="node" class="l"> <a name="ddzx_none_screening_3months" id="time3month" href="javascript:setTimePhase('3month');">最近三个月</a> <a name="ddzx_none_screening_1year" id="time1year" href="javascript:setTimePhase('1year');">最近一年</a> <a name="ddzx_none_screening_alltime" class="act-date" id="timeAll" href="javascript:setTimePhase('all');">所有历史订单</a> </p> 
         </div> 
         <div class="inquiry clearfix"> 
          <a name="ddzx_none_screening_submit" href="javascript:doPageQuery();" class="bnt bnt-orange l">查询</a> 
          <span style="display:none;" id="timeError" class="l"><i class="l ic-tip tip-err"></i><b class="l">结束时间不能大于开始时间哟！</b></span> 
         </div> 
        </div> 
       </div> 
      </div> 
      <input type="hidden" value="" id="pageNumber" /> 
      <input type="hidden" value="" id="conditionType" /> 
      <input type="hidden" value="" id="inputCondition" /> 
      <input type="hidden" value="" id="transStatus" /> 
      <div id="listTable" class="order-table" style="display: block;"> 
       <div style="display:none;" class="load-state loading-err"> 
       </div> 
       <ul class="tit clearfix"> 
        <li class="commodity"><h3>订单商品</h3></li> 
        <li class="money"><h3>支付总金额</h3></li> 
        <li id="ztDrop" class="state"> <h3 class="zt-selected"><span class="ic-top">订单状态</span></h3> 
         <div style="display:none" class="option zt-list"> 
          <a name="ddzx_none_screening_allstatus" href="javascript:queryByStatus('all');" title="全部">全部</a> 
          <a name="ddzx_none_screening_nonpay" href="javascript:queryByStatus('waitPay');" title="等待支付">等待支付</a> 
          <a name="ddzx_none_screening_delivered" href="javascript:queryByStatus('waitReceive');" title="等待收货">等待收货</a> 
          <a name="ddzx_none_screening_canceled" href="javascript:queryByStatus('cancel');" title="已取消">已取消</a> 
          <a name="ddzx_none_screening_received" href="javascript:queryByStatus('success');" title="已完成">已完成</a> 
          <a name="ddzx_none_screening_returned" href="javascript:queryByStatus('return');" title="已退货">已退货</a> 
         </div> </li> 
        <li class="operation"><h3>操作</h3></li> 
       </ul> 
       <input type="hidden" value="http://product.suning.com" id="fourthPageDomain" /> 
       <input type="hidden" value="" id="reviewOrderIds" /> 
       <div class="table-list"> 
        <div id="table_box_9024799467" class="table-box"> 
         <input type="hidden" value="000000000124734977" name="first_9024799467" /> 
         <input type="hidden" value="000000000124734977" name="first_9024799467" /> 
         <input type="hidden" value="000000000124734977" name="first_9024799467" />
         <table class="">

         @foreach($orderInfo as $order) 
          <tbody> 
           <tr class="info-user"> 
            <td class="tit-hotel" colspan="4"> 
             <div> 
              <i>下单时间：</i> 
              <span>{{ date('Y-m-d H:i:s', $order->create_time) }}</span> 
             </div> 
             <div> 
              <i>订单编号：</i> 
              <span>{{ $order->oid }}</span> 
             </div> 
              
             <div class="order-opt"> 
             </div> </td> 
           </tr> 
           <tr class="info-commodity"> 
            <td date-content="1" class="pic"> 
             <ul class="single"> 
              <li> 
                <a title="{{ $order->goods_name }}" name="ddzx_none_list_pic" target="_blank" href="http://product.suning.com/0070075699/124734977.html"> 
                  <img data-src="{{ asset(u(GOODS_IMG) . $order->goods_img) }}" src="{{ asset(u(GOODS_IMG) . $order->goods_img) }}" /> </a> 
              </li> 
             </ul> <h3> <a name="ddzx_none_list_title" target="_blank" title="{{ $order->goods_name }}" href="{{ url("goodslist/$order->goods_id") }}"> {{ $order->goods_name }} </a> </h3> </td> 
            <td class="price"> <p><em><i>&yen;</i><span>{{ $order->price }}</span></em></p> <p class="col-dust">在线支付</p> </td> 
           <!--  <td class="actuality"> <p>等待支付</p> <p><a name="ddzx_none_list_detail" target="_blank" href="member_order_detail.html">查看详情</a></p> </td>  -->

            <td class="touch"> 
              @if($order->status == 1)
             <div> 
                <a name="ddzx_none_list_pay" href="{{ url("order/payment/$order->oid/2") }}" class="bnt bnt-orange">马上支付</a> 
             </div> 
             <p><a name="ddzx_none_list_cancel" href="javascript:delOrder({{ $order->oid }});">取消订单</a></p> </td> 
             @elseif($order->status == 2) 
            <div> 
                <a name="ddzx_none_list_pay" href="{{ url("order/payment/$order->oid/3") }}" class="bnt bnt-orange">确认收货</a> 
                 <p>运输中</p>
             </div> 
             @elseif($order->status == 3) 
             <div> 
                <a name="ddzx_none_list_pay" href="#" class="bnt bnt-orange">去评价</a> 
                 <p>收货完成</p>
             </div> 
             @endif

              
              <script>
                  function delOrder(oid)
                  {
                      if (!confirm('您确定要取消这个订单?')) return false;
                      window.location.href = '/order/payment/' + oid + '/4';
                  }
              </script>
           </tr> 
           <input type="hidden" value="000000000124734977" name="first_9024799467" /> 
          </tbody> 
        @endforeach

         </table> 
        </div> 
       </div>
       
       <div class="order-pages clearfix">
            <div style=""> 
            {{ $orderInfo->links() }}
            </div>
       </div> 
       <style>
           .active span {
                padding: 0 12px;
                font-weight: bold;
                color: #666;
                font-family: Arial;
                text-decoration: none;
            }
            .active span {
                float: left;
                height: 30px;
                font-size: 14px;
                line-height: 30px;
                border: 1px solid #ddd;
                margin-right: 5px;
            }

            .disabled span {
                padding: 0 12px;
                font-weight: bold;
                color: #666;
                font-family: Arial;
                text-decoration: none;
            }
            .disabled span {
                float: left;
                height: 30px;
                font-size: 14px;
                line-height: 30px;
                border: 1px solid #ddd;
                margin-right: 5px;
            }
       </style>
       <script>
           $('.active').attr('style', 'background-color:#ECF0EE')
       </script>

      </div> 
      <div id="listLoading" class="load-state loading" style="display: none;"> 
       <p class="load-pic"><img width="80px;" data-src="images/load.gif" src="images/load.gif" class="err-product" /></p> 
       <p class="load-text">嗷~正在努力加载您的订单~不要着急哦~</p> 
      </div> 
      <div id="listError" style="display:none;" class="load-state load-err"> 
       <p class="load-pic"><img width="80px;" data-src="images/load-mang.gif" src="images/load-mang.gif" class="err-product" /></p> 
       <p class="load-text">嗷~订单信息加载失败~</p> 
      </div> 
     </div> 
    </div> 
    <!--右侧订单中心]]--> 
    <div style="" class="buy-module J-make-up01"> 
     <div class="title"> 
      <h3>为您推荐</h3> 
     </div> 
     <!-- <a href="javascript:void(0);" class="prev"></a> 
     <a href="javascript:void(0);" class="next"></a>  -->
     <div class="cont"> 
      <div class="list-box" style="left: -950px;"> 
       

           
            

               <ul class="list"> 
                @foreach($goods as $g)
                    <li> 
                     <div class="pic"> 
                      <a title="{{ $g->goods_name }}" name="DZ_none_recdwn_4-1_p_0070088237_125907431_01A_5-5_0_A" id="baoguang_recdwn_4-1_0070088237_125907431_01A_5-5_0_A" target="_blank" href="{{ url("/goodslist/$g->id") }}"><img data-src="http://image2.suning.cn/content/catentries/00000000012590/000000000125907431/000000000125907431_ls1.jpg" src="{{ asset(u(GOODS_IMG) . $g->id) }}" /></a> 
                     </div><p class="text"><a name="DZ_none_recdwn_4-1_c_0070088237_125907431_01A_5-5_0_A" target="_blank" href="{{ asset(u(GOODS_IMG) . $g->id) }}">{{ $g->goods_name }}</a><span class="yen-pri"><i>&yen;</i><b>{{ $g->shop_price }}</b></span></p>
                 </li> 
                 @endforeach
                
           
           </ul> 
            <ul class="list"> 
                @foreach($goods as $g)
                    <li> 
                     <div class="pic"> 
                      <a title="{{ $g->goods_name }}" name="DZ_none_recdwn_4-1_p_0070088237_125907431_01A_5-5_0_A" id="baoguang_recdwn_4-1_0070088237_125907431_01A_5-5_0_A" target="_blank" href="{{ url("/goodslist/$g->id") }}"><img data-src="http://image2.suning.cn/content/catentries/00000000012590/000000000125907431/000000000125907431_ls1.jpg" src="{{ asset(u(GOODS_IMG) . $g->goods_img) }}" /></a> 
                     </div><p class="text"><a name="DZ_none_recdwn_4-1_c_0070088237_125907431_01A_5-5_0_A" target="_blank" href="{{ asset(u(GOODS_IMG) . $g->goods_img) }}">{{ $g->goods_name }}</a><span class="yen-pri"><i>&yen;</i><b>{{ $g->shop_price }}</b></span></p>
                 </li> 
                 @endforeach
                
           
           </ul> 


          


      </div> 
     </div> 
     <!-- <p class="page-list"><em class=""></em><em class="act-curr"></em><em></em><em></em></p>  -->
    </div> 
   </div> 
  </div> 
  <!--内容区域 ]]--> 
  <!--右侧浮栏二维码--> 
  <div style="position: fixed; top: auto; left: auto; z-index:5000; right:10px; bottom: 0px;" class="ECode-floatBar"> 
   <div id="mysnTools"> 
    <ul> 
     <li class="show-ma"> <a href="javascript:void(0);" title="二维码" class="sntoo3 hover"></a> 
      <div class="ma"> 
       <i class="bnt-close"></i> 
       <p> <img data-src="images/ic-ma.png" alt="二维码" src="images/ic-ma.png" /> <span>下载客户端</span> <span>随时随地查订单</span> </p> 
      </div> </li> 
     <li><a target="_blank" href="http://ued.suning.com/survey/view/dingdan" title="问卷调查" class="sntoo2"></a></li> 
     <li style="display:none;" id="gotop"> <a href="javascript:void(0);" onclick="gotop();" title="回顶部" class="sntoo1"></a> </li> 
    </ul> 
   </div> 
  </div> 
  <!--引导页[[--> 
  <div style=" display: none; " id="orderGuide-box"> 
   <div class="orderGuide"> 
    <ul class="gui-img"> 
     <li class="navfirst"><i class="close"></i></li> 
     <li class="navmiddle"><i class="close"></i></li> 
     <li class="navlast"><i class="close"></i></li> 
    </ul> 
    <p> <a href="javascript:void(0);"></a> <b></b> <em></em> <span class="act-cur"></span> <span></span> <span></span> </p> 
   </div> 
  </div> 
  <!--灰层--> 
  <div style=" display: none;" class="orderGuide-overlay"> 
   <div class="close lay overlay"></div> 
  </div> 
  <!--引导页]] --> 
  <!-- 需要构建的前景图片，需要设置baseurl，默认./assets/就可以，不需要构建的资源不需要加baseurl --> 
  <img width="1" height="1" alt="" data-src="images/space.png" src="images/space.png" /> 
  <div style="background: url(images/space.png) 0 0 no-repeat;"></div> 
  <!--尾部 --> 
  <div class="clear"></div> 
  @include('layout.member_footer')
  <style type="text/css">
.ng-footer{height:130px;margin-top:0;}
.ng-s-footer{height:130px;background:none;text-align:center;}
.ng-s-footer p.ng-url-list{height:25px;line-height:25px;}
.ng-s-footer p.ng-url-list a{color:#666666;}
.ng-s-footer p.ng-url-list a:hover{color:#f60;}
.ng-s-footer .ng-authentication{float:none;margin:0 auto;height:25px;width:990px;margin-top:5px;}
.ng-s-footer p.ng-copyright{float:none;width:100%;}
.root1200 .ng-s-footer p.ng-copyright{width:100%;}
</style> 
  <!--尾部 -->  

<link rel="stylesheet" href="{{ asset(_PLUS_) }}/jquery_haibao/css/animate.min.css"/>
 <!-- 动画效果 -->
    <!-- <link rel="stylesheet" href="{{ asset(_PLUS_) }}/jquery_haibao/css/common.css"/> -->
    <!-- 页面基本样式 -->
    <!-- <script src="js/jquery-1.9.1.min.js"></script> -->
    <script src="{{ asset(_PLUS_) }}/jquery_haibao/js/jquery.hDialog.min.js"></script>



<!-- <div id="HBox">
    <form action="" method="post">
        <ul class="list1">
            <li>
                <strong>昵 称  <font color="#ff0000">*</font></strong>
                <div class="fl"><input type="text" name="nickname" value="" required class="ipt nickname" /></div>
            </li>
            <li>
                <strong>手 机 <font color="#ff0000">*</font></strong>
                <div class="fl"><input type="text" name="phone" value="" required class="ipt phone" /></div>
            </li>
            <li>
                <strong>邮 箱 <font color="#ff0000">*</font></strong>
                <div class="fl"><input type="text" name="email" value="" required class="ipt email" /></div>
            </li>
            
            <li><input type="submit" value="确认提交" class="submitBtn" /></li>
        </ul>
    </form>
</div> -->
        <!-- HBox end --> 

<script>
    /**
    +----------------------------------------------------------
    * 内置扩展 [此部分可选]
    +----------------------------------------------------------
    */
    var $B = $('body'), $W = $(window);
    $.extend({  
        /**
         * @decription 给方法添加加载方法
         * @param t : string 提示文字
         * @param w : string 提示框宽度
         * @param h : string 提示框高度
         */
        showLoading: function(t, w, h) { //显示加载
            t = t ? t : '正在加载...'; 
            w = w ? parseInt(w) : 140;
            h = h ? parseInt(h) : 48;
            var closeBtn = '<a style="position:absolute;top:-5px;right:-5px;width:15px;height:15px;line-height:15px;display:inline-block;border-radius:50%;text-align:center;background-color:rgba(0,0,0,0.5);color:#fff;font-size:10px;" href="javascript:;" id="closeBtn">X</a>', margin = ""+parseInt(-(h/2))+'px 0 0 '+parseInt(-(w/2))+"px";
            $('#HLoading').remove();
            $B.stop().append('<div id="HLoading" style="width:'+w+'px;height:'+h+'px;line-height:'+h+'px;border-radius:4px;background:rgba(0,0,0,0.6);color:#fff;text-align:center;position:fixed;top:50%;left:50%;margin:'+margin+';">'+t+closeBtn+'</div>');
            $('#closeBtn').on('click', function() { 
                $.hideLoading(); 
            }); //关闭按钮点击事件
        },
        hideLoading: function() { //移除加载
            $('#HLoading').remove();
        },
        /**
         * @decription 给方法添加提示方法
         * @param t1 : string 提示文字
         * @param t2 : int 提示时间
         * @param t3 : boolean 提示类型，默认为false
         * @param callback : 回调函数
         */
        tooltip: function(t1, t2, t3, callback) {
            var tip = '', tipClassName = '', tipBgColor = '';
            t1 = t1 ? t1 : 'Error...';  
            t2 = t2 ? parseInt(t2) : 3000;
            if(t3) {
                tipClassName = 'fadeInDown';
                tipBgColor = '#5cb85c';
            } else {
                tipClassName = 'shake';
                tipBgColor = '#D84C31';
            }
            tip = '<div class="HTooltip animated '+tipClassName+'" style="width:280px;padding:10px;text-align:center;background-color:'+tipBgColor+';color:#fff;position:fixed;top:10px;left:50%;z-index:100001;margin-left:-150px;box-shadow:1px 1px 5px #333;-webkit-box-shadow:1px 1px 5px #333;">'+t1+'</div>';
            if($B.find(".toast-box").length == 0) {
                $B.stop().append(tip);
            } else {
                $('.HTooltip').remove();
            }
            setTimeout(function() { 
                setTimeout(function() {
                    $('.HTooltip').remove(); 
                    callback && callback(); //隐藏后的回调方法
                }, 1000);
            }, t2);
        },
        /**
         * @decription 返回顶部
         * @param b : string 和屏幕底部的距离
         * @param r : string 和屏幕右侧的距离
         */
        goTop: function(b, r) {
            b = b ? b : '30px';
            r = r ? r : '20px';
            $('#HGoTop').remove();
            $B.stop().append('<a id="HGoTop" href="javascript:;" style="width:40px;height:40px;line-height:40px;border-radius:50%;display:inline-block;text-align:center;background:#333;color:#fff;position:fixed;bottom:'+b+';right:'+r+';z-index:100000;">Top</a>').find('#HGoTop').hide();
            $T = $('#HGoTop');
            $W.on('scroll', function() {
                $W.scrollTop() > 150 ? $T.removeAttr('class').addClass('animated rollIn').show() : $T.removeAttr('class').addClass('animated rollOut');
            });
            $T.on('click', function() { 
                $('body,html').animate({ scrollTop:0 },500); return; //返回顶部按钮点击事件
            });
        },
        /**
         * @decription 消息框
         * @param type : string 消息框类型(alert/confirm)
         * @param title : string 消息框标题
         * @param content : string 消息框内容
         * @param time : int 消息框自动关闭时间，以毫秒为单位(默认0：不自动关闭)
         * @param callback : 回调函数
         */
        dialog: function(type, title, content, time, callback) {
            var t, tpl = '', footerTpl = '', isLock = false, okText = '确定', cancelText = '取消', width = 260, margin = '0 0 0 '+parseInt(-(width/2))+'px', type = type != undefined ? type : 'alert', time = time != undefined ? parseInt(time) : 0,
            headerTpl = '<div id="hDialog-header" style="border-bottom:1px solid #ddd;padding:10px;font-size:1.2em;color:#333;">' + title +'</div>',
            okTpl = '<a href="javascript:;" style="padding:5px 10px;display:inline-block;border-radius:3px;background-color:#337ab7;color:#fff;" id="h_ok">'+ okText +'</a>',
            cancelTpl = '<a href="javascript:;" style="padding:5px 10px;display:inline-block;border-radius:3px;margin-left:10px;background-color:#eee;color:#333;" id="h_cancel">'+ cancelText +'</a>',
            contentTpl = '<div id="hDialog-content" style="padding:25px 15px;text-align:center;">' + content + '</div>',
            maskTpl = '<div id="hDialog-mask" style="width:100%;height:100%;background-color:rgba(0,0,0,0.6);position:fixed;top:0;left:0;z-index:99999;"></div>';       
            if(type === 'confirm') { 
                footerTpl = '<div id="hDialog-footer" style="padding:10px;border-top:1px solid #ddd;text-align:right;">'+ okTpl + cancelTpl +'</div>'; 
            }
            if(!isLock) {
                tpl += maskTpl;
            }
            tpl += '<div id="hDialog-wrap" class="animated fadeIn" style="width:'+width+'px;border-radius:5px;box-shadow:4px 4px 10px #666;-webkit-box-shadow:4px 4px 10px #666;background-color:#ffffff;border:1px solid #eee;position:fixed;top:35%;left:50%;margin:'+margin+';z-index:100000;">' + headerTpl + contentTpl + footerTpl + '</div>'; 
            $('#hDialog-wrap, #hDialog-mask').remove();
            $B.stop().append(tpl);
            if(time !== 0) { 
                clearTimeout(t); 
                t = setTimeout(function() { 
                    $.closeDialog(callback); 
                }, time); 
            }
            $('a:contains('+okText+')').on("click", function() { 
                callback && callback(); 
            });
            $('a:contains('+cancelText+')').on("click", function() { 
                $.closeDialog(); 
            });
        },
        /**
         * @decription 关闭消息框
         * @param callback : 回调函数
         */
        closeDialog: function(callback) {
            $('#hDialog-wrap, #hDialog-mask').remove(); 
            callback && callback();
        }
    });
</script>
<script>
    // $('.manage-addr').hDialog(); //打开效果调用
</script>

 </body>
</html>
