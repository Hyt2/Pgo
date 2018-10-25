<html>
 <head> 
  <meta charset="UTF-8" /> 
  <title>商品已成功加入购物车</title> 
  <link type="text/css" href="{{ asset(_HOME_ . '/css') }}/main.css?v=2016031003" rel="stylesheet" /> 
  <script type="text/javascript" async="" src="{{ asset(_HOME_ . '/css') }}/da_opt_detail.js"></script> 
  <script type="text/javascript">
            var protocolValue = window.location.protocol;
            var url = (window.location + "").substring(8);
            if (protocolValue == "https:") {
                window.location = "http://" + url;
            }

            var sn = sn || {
                "context": '/emall',
                "domain": 'www.suning.com',
                "cartPath": "cart.suning.com",
                "online": 'online.suning.com',
                "conline": 'conline.suning.com',
                "cookieDomain": '.suning.com',
                "categoryId": "10051", "scriptDomianDir": 'http://b2cres.suning.cn',
                "searchDomain": 'http://search.suning.com/emall/',
                "productDomain": 'http://product.suning.com',
                "productContext": '0000000000',
                "tuijianDomain": 'http://tuijian.suning.com',
                "reviewPath": 'http://review.suning.com/',
                "imageDomianDir": 'http://image2.suning.cn',
                "coudanDomain": 'http://tuijian.suning.com',
                "sslDomain": 'ssl.suning.com',
                "vcsDomain": 'http://vcs.suning.com',
                "noMiniCart": true};
        </script> 
 </head> 
 <body> 
  <script type="text/javascript">
            //全局变量
            var sn = sn || {
                "context": "/emall",
                "domain": "www.suning.com",
                "storeId": "10052",
                "catalogId": "10051",
                "memberDomain": "member.suning.com",
                "online": "online.suning.com",
                "cookieDomain": ".suning.com",
                "categoryId": "20089",
                "searchDomain": "http://search.suning.com/emall/",
                "sslDomain": 'ssl.suning.com'
            };
            var favorite_config = {
                "favoriteDomain": '',
                "recommendDomain": "",
                "snCartPath": "",
                "productDomain": ""
            };
        </script> 
  <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/common.css" /> 
  <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/search.css" /> 
  <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/sn-sidebar.css" /> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/css') }}/jquery.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/css') }}/sn_lazyload.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/css') }}/lazyelem.min.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/css') }}/SFE.base.min.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/css') }}/search.min.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/css') }}/sn-sidebar.min.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/css') }}/chatCompat_mini.js"></script> 
  @include('layout.tool_bar')
  <div class="ng-header ng-channel-header"> 
   <div class="ng-header-con"> 
    <div class="wrapper"> 
     <div id="G_SUNING_LOGO" class="ng-logo-box"> 
      <!-- LOGO --> 
      <a class="ng-logo" href="/"> <img width="190" height="100" alt="苏宁易购" src="{{u(_CONF_IMG).config('site.logo')}}" /> </a> 
      <span class="channel-logo" id="G_CHANNEL_LOGO"></span> 
     </div> 
     <div class="ng-search channel-search"> 
      <!-- PRFLS SEARCH --> 
      <div class="g-search"> 
       <i class="ng-iconfont search-icon"></i> 
       <form onsubmit="return SFE.search.onSubmitSearch(this)" method="get"> 
        <div class="search-keyword-box"> 
         <input type="text" autocomplete="off" value="" name="index1_none_search_ss2" class="search-keyword" id="searchKeywords" tabindex="0" /> 
        </div> 
        <input type="submit" value="搜索" name="index1_none_search_ss1" class="search-btn" id="searchSubmit" /> 
        <!-- <div class="g-search-hotwords" id="snKeywordNew"> 
         <input type="hidden" key="365天放心购 每千减百" value="365天放心购 每千减百" id="searchDefaultKeyword" /> 
         <a href="http://search.suning.com/%E6%B4%97%E5%8F%91%E6%B0%B4/ch=2" target="_blank" name="public0_RSC_洗发水_0-14656">洗发水</a> 
         <a href="http://search.suning.com/%E5%8D%AB%E7%94%9F%E5%B7%BE/ch=2" target="_blank" name="public0_RSC_卫生巾_1-14656"><font style="color:#FF6600">卫生巾</font></a> 
         <a href="http://search.suning.com/%E9%A6%99%E6%B0%B4/ch=2" target="_blank" name="public0_RSC_香水_2-14656">香水</a> 
         <a href="http://search.suning.com/%E7%89%99%E8%86%8F/ch=2" target="_blank" name="public0_RSC_牙膏_3-14656"><font style="color:#FF6600">牙膏</font></a> 
         <a href="http://search.suning.com/%E6%B2%90%E6%B5%B4%E9%9C%B2/ch=2" target="_blank" name="public0_RSC_沐浴露_4-14656">沐浴露</a> 
         <a href="http://search.suning.com/%E6%AC%A7%E8%8E%B1%E9%9B%85/ch=2" target="_blank" name="public0_RSC_欧莱雅_5-14656">欧莱雅</a> 
         <a href="http://search.suning.com/%E9%9A%94%E7%A6%BB%E9%9C%9C/ch=2" target="_blank" name="public0_RSC_隔离霜_6-14656">隔离霜</a> 
         <a href="http://search.suning.com/%E6%8A%A4%E6%89%8B%E9%9C%9C/ch=2" target="_blank" name="public0_RSC_护手霜_7-14656">护手霜</a> 
         <a href="http://search.suning.com/%E6%B4%97%E9%9D%A2%E5%A5%B6/ch=2" target="_blank" name="public0_RSC_洗面奶_8-14656">洗面奶</a> 
         <a href="http://search.suning.com/%E7%94%B7%E5%A3%AB%E6%8A%A4%E8%82%A4/ch=2" target="_blank" name="public0_RSC_男士护肤_9-14656">男士护肤</a> 
         <a href="http://search.suning.com/%E7%99%BE%E9%9B%80%E7%BE%9A/ch=2" target="_blank" name="public0_RSC_百雀羚_10-14656">百雀羚</a> 
        </div>  -->
       </form> 
       <div class="g-ac-results hide" id="ac_results" style="display: none;"></div> 
       <div class="g-rec-results hide" id="rec_results" style="display: none;"> 
        <ul class="history-results"></ul> 
        <ul class="rec-results"></ul> 
       </div> 
      </div> 
     </div> 
     <!-- LOGO --> 
     <div id="ng-top-act" class="ng-top-act"></div> 
    </div> 
   </div> 
  </div> 
  <div class="ng-nav-bar ng-nav-bar-chanel"> 
   <div class="ng-sort"> 
    <a name="public0_none_dht_09" target="_blank" href="http://www.suning.com/emall/pgv_10052_10051_1_.html" class="ng-all-hook"> <span>全部商品分类</span><em class="ng-iconfont"></em> </a> 
    <div class="ng-sort-list-box"> 
     <div class="ng-sort-detail"> 
      <a name="public0_none_ml_gban" class="ng-close-sort" href="javascript:void(0);"><em class="ng-iconfont"></em></a> 
      <div class="sort-chanel"> 
      </div> 
      <div class="cate-list"> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div class="ng-nav-index"> 
    <ul id="ng-main-nav" class="ng-nav"> 
     <li><a name="public0_none_dht_01" target="_blank" href="index.html">首页</a></li> 
     <li><a target="_blank" href="vip.html" name="public0_none_tspd_01">苏宁会员<i class="new"></i></a></li> 
     <li><a name="public0_none_dht_05" target="_blank" href="clothes.html">服装城</a></li> 
     <li><a name="public0_none_dht_02" target="_blank" href="supermarket.html">苏宁超市</a></li> 
     <li><a name="public0_none_dht_04" target="_blank" href="electric.html">电器城</a></li> 
     <li><a name="public0_none_dht_03" target="_blank" href="child.html?/">红孩子母婴</a></li> 
     <li><a name="public0_none_dht_06" target="_blank" href="coupon.html">大聚惠<i class="hot"></i></a></li> 
     <li><a name="public0_none_dht_08" target="_blank" href="mall.html">苏宁金融</a></li> 
     <!-- 		<li><a href="http://binggo.suning.com/" target="_blank" name="public0_none_dht_08">美妆</a></li>
                                    <li><a href="http://pai.suning.com/shanpai" target="_blank" name="public0_none_dht_08">闪拍</a></li> --> 
    </ul> 
   </div> 
   <div class="ng-nav-right-txtact"></div> 
  </div> 
  <div class="suc_wrap"> 
   <!-- 成功加入购物车[[--> 
   <div class="cart_suc clearfix"> 
    <h2 class="fl"><i class="fl"></i><span class="fl"></span>已成功加入购物车&nbsp;!</h2> 
    <p class="fl"> <a name="tjjh_none_top_account " href="/cart" class="bnt_balance fl">去结算</a> <a name="tjjh_none_top_continue" href="javascript:history.back();" class="fl go">继续购物</a> </p> 
    <input type="hidden" value="000000000122639559" id="partnumber" /> 
    <input type="hidden" value="0070078302" id="vendorcode" /> 
    <input type="hidden" value="B" id="cartFlag" /> 
   </div> 
   <!-- 成功加入购物车]] --> 
   <div class="cart_list"> 
    <!-- 大家喜欢[[--> 
    <div class="love" style="display: none;"> 
     <div class="tit clearfix"> 
      <h3 class="text fl"><i class="fl"></i><span class="fl">买了该商品的人还买了</span></h3> 
     </div> 
     <div class="cont love-list"> 
      <div class="load-cont"> 
       <img alt="加载中" src="{{ asset(_HOME_ . '/css') }}/css_sn/shoppingCart/tocart/images/load-o.gif" />&nbsp;&nbsp;正在加载,请稍等~ 
      </div> 
      <ul class="clearfix"> 
       <!--  <li class="out">--> 
      </ul> 
     </div> 
    </div> 
    <!-- 大家喜欢]]--> 
    <!-- 促销优惠商品[[--> 
    <div class="sales"> 
     <div class="tit clearfix"> 
      <!-- <h3 class="text fl"><i class="fl"></i><span class="fl">9.9元专区</span></h3>  -->
      <!-- <a name="tjjh_none_module2_hyz" class="replace fr" href="javascript:void(0);"><i class="fl"></i><span class="fl">换一组</span></a>  -->
     </div> 
     <div class="cont"> 
      <div class="load-cont" style="display: none;"> 
       <img alt="加载中" src="{{ asset(_HOME_ . '/css') }}/css_sn/shoppingCart/tocart/images/load-o.gif" />&nbsp;&nbsp;正在加载,请稍等~ 
      </div> 
      <div class="list-box" style="display: block;"> 
       <ul class="clearfix"> 
        <?php $src = u(GOODS_IMG) ?>
        @foreach($goods as $g)
        <li id="0000000000_120204659"> 
         <div class="pic"> 
          <a target="_blank" name="cart_122639559_recthsp_1-1_p_0000000000_120204659_5_10-35_0_A" href="{{url("goodslist/$g->id")}}">
            <img alt="{{$g->goods_name}}" src="{{ asset($src . $g->goods_img) }}" />
          </a> 
         </div><p class="text"><span class="ju"></span><a target="_blank" name="cart_122639559_recthsp_1-1_c_0000000000_120204659_5_10-35_0_A" id="baoguang_recthsp_1-1_0000000000_120204659_5_10-35_0_A" title="{{$g->goods_name}}" href="{{url("goodslist/$g->id")}}">{{$g->goods_name}}</a></p><p class="price"><i>&yen;</i><strong>{{$g->shop_price}}</strong></p><p name="cart_122639559_recthsp_1-1_b_0000000000_120204659_5_10-35_0_A" params="{" buynum":1,"vendorcode":"0000000000","partnumber":"000000000120204659","cityid":9264,"promotiontype":"9","promotionid":""}"="" class="ic-cart"></p></li> 
         @endforeach
        
       </ul> 
      </div> 
     </div> 
    </div> 
    <!-- 促销优惠商品]]--> 
    <!-- 猜你喜欢[[--> 
    <div class="like" style="display: none;"> 
     <div class="tit clearfix"> 
      <h3 class="text fl"><i class="fl"></i><span class="fl">猜你喜欢</span></h3> 
      <a name="tjjh_none_module3_hyz" class="replace fr" href="javascript:void(0);"><i class="fl"></i><span class="fl">换一组</span></a> 
     </div> 
     <div class="cont"> 
      <div class="load-cont"> 
       <img alt="加载中" src="{{ asset(_HOME_ . '/css') }}/css_sn/shoppingCart/tocart/images/load-o.gif" />&nbsp;&nbsp;正在加载,请稍等~ 
      </div> 
      <div class="list-box"> 
       <ul class="clearfix"> 
       </ul> 
      </div> 
     </div> 
    </div> 
    <!-- 猜你喜欢]]--> 
   </div> 
  </div> 
  <input type="hidden" value="2" id="loveDiv1" /> 
  <input type="hidden" value="1" id="salesDiv" /> 
  <input type="hidden" value="2" id="likeDiv" /> 
  <div style="display:none;" id="sysErrTip"> 
   <!--[[ 系统繁忙--> 
   <div class="dialog-cont revise-busy"> 
    <table> 
     <tbody> 
      <tr> 
       <td class="pic"><img data-src="{{ asset(_HOME_ . '/css') }}/css_sn/shoppingCart/tocart/images/alert-ic.png" src="{{ asset(_HOME_ . '/css') }}/css_sn/shoppingCart/tocart/images/alert-ic.png" /></td> 
       <td class="text"> <p class="tips">嗷~系统繁忙，请您稍后再试</p> <p class="dialog-bnt"><a href="javascript:void(0);" class="lion-btn close">关闭</a></p> </td> 
      </tr> 
     </tbody> 
    </table> 
   </div> 
   <!--系统繁忙]]--> 
  </div> 
  <!-- 尾文件 start --> 
  <div class="clear"></div> 
  <div class="ng-footer"> 
   <div class="ng-ser-box"> 
    <div class="ng-ser-box-con"> 
     <div class="ng-promise"> 
      <dl> 
       <dt class="zheng">
         正品保障 
       </dt> 
       <dd> 
        <p><strong><a name="public0_none_wb_fwxx01" rel="nofollow" target="_blank" href="http://sale.suning.com/images/advertise/yy/keepHeart/keepheart.html?relPro">正品保障</a></strong></p> 
        <p>正品保障，提供发票</p> 
       </dd> 
      </dl> 
      <dl> 
       <dt class="jisu">
         急速物流 
       </dt> 
       <dd> 
        <p><strong><a name="public0_none_wb_fwxx02" rel="nofollow" target="_blank" href="http://image.suning.cn/images/advertise/yy/keepHeart/keepheart.html?halfDay">急速物流</a></strong></p> 
        <p>急速物流，急速送达</p> 
       </dd> 
      </dl> 
      <dl> 
       <dt class="wuyou">
         无忧售后 
       </dt> 
       <dd> 
        <p><strong><a name="public0_none_wb_fwxx03" rel="nofollow" target="_blank" href="http://image.suning.cn/images/advertise/yy/keepHeart/keepheart.html?speed">无忧售后</a></strong></p> 
        <p>7天无理由退换货</p> 
       </dd> 
      </dl> 
      <dl> 
       <dt class="te">
         特色服务 
       </dt> 
       <dd> 
        <p><strong><a name="public0_none_wb_fwxx04" rel="nofollow" target="_blank" href="http://store.suning.com/order.htm">特色服务</a></strong></p> 
        <p>私人定制家电套餐</p> 
       </dd> 
      </dl> 
      <dl> 
       <dt class="help">
         帮助中心 
       </dt> 
       <dd> 
        <p><strong><a name="public0_none_wb_fwxx05" rel="nofollow" target="_blank" href="http://help.suning.com/">帮助中心</a></strong></p> 
        <p>您的购物指南</p> 
       </dd> 
      </dl> 
      <div class="clear"></div> 
     </div> 
     <div class="ng-help-box"> 
      <dl> 
       <dt name="public0_none_wb_bzxx01">
         购物指南 
       </dt> 
       <dd> 
        <a name="public0_none_wb_bzxx0101" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-222.htm">导购演示</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0102" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-26.htm">免费注册</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0103" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-447.htm">会员等级</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0104" rel="nofollow" target="_blank" href="http://help.suning.com/faq/list.htm">常见问题</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0104" target="_blank" href="http://www.suning.com/pinpai/">品牌大全</a> 
       </dd> 
      </dl> 
      <dl> 
       <dt name="public0_none_wb_bzxx02">
         支付方式 
       </dt> 
       <dd> 
        <a name="public0_none_wb_bzxx0201" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-14.htm">易付宝支付</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0202" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-15.htm">网银支付</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0203" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-18.htm">快捷支付</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0204" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-136.htm">分期付款</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0205" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-71.htm">货到付款</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0206" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-628.htm">任性付支付</a> 
       </dd> 
      </dl> 
      <dl> 
       <dt name="public0_none_wb_bzxx03">
         物流配送 
       </dt> 
       <dd> 
        <a name="public0_none_wb_bzxx0301" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-193.htm">免运费政策</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0302" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-197.htm">配送服务承诺</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0303" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-202.htm">签收验货</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0304" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-204.htm">物流查询</a> 
       </dd> 
      </dl> 
      <dl> 
       <dt name="public0_none_wb_bzxx04">
         售后服务 
       </dt> 
       <dd> 
        <a name="public0_none_wb_bzxx0401" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-205.htm">退换货政策</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0402" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-287.htm">退换货流程</a> 
       </dd> 
       <dd> 
        <a href="http://baoxian.suning.com/ins/jiaDian.htm">购买延保服务</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0404" rel="nofollow" target="_blank" href="http://help.suning.com/page/id-290.htm">退款说明</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0405" rel="nofollow" target="_blank" href="member_aftersale.html?storeId=10052&amp;catalogId=10051">退换货申请</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0406" rel="nofollow" target="_blank" href="http://member.suning.com/emall/SNRepairServiceApplyView?storeId=10052&amp;catalogId=10051">维修/保养</a> 
       </dd> 
      </dl> 
      <dl> 
       <dt name="public0_none_wb_bzxx05">
         商家服务 
       </dt> 
       <dd> 
        <a name="public0_none_wb_bzxx0501" rel="nofollow" target="_blank" href="http://sop.suning.com/">商家入驻</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0502" rel="nofollow" target="_blank" href="http://stc.suning.com/">培训中心</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0503" rel="nofollow" target="_blank" href="http://smc.suning.com/smc/notice/showNotice.htm">信息公告</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0504" rel="nofollow" target="_blank" href="http://ap.suning.com">广告服务</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0505" rel="nofollow" target="_blank" href="http://sop.suning.com/sel/help/toMain.htm">商家帮助</a> 
       </dd> 
       <dd> 
        <a name="public0_none_wb_bzxx0506" rel="nofollow" target="_blank" href="http://fuwu.suning.com">服务市场</a> 
       </dd> 
      </dl> 
     </div> 
     <div class="ng-app-down"> 
      <p>易购客户端</p> 
      <a target="_blank" rel="nofollow" href="http://sale.suning.com/syb/20120419xsjkhd/index.html"> <img width="87" height="87" alt="苏宁易购APP二维码" src="https://sslres.suning.com/public/v3/images/bottom-app-down.png?var=07" /> </a> 
     </div> 
     <div class="clear"></div> 
    </div> 
   </div> 
   <div class="ng-new-pro"> 
    <div class="ng-new-pro-con"> 
     <div class="ng-new-pro-list"> 
      <dl> 
       <dt> 
        <a target="_blank" rel="nofollow" name="public0_none_wb_xcp01" href="http://b.suning.com"><img width="80" height="80" src="https://sslres.suning.com/public/v3/images/f1.png?v=01" /></a> 
       </dt> 
       <dd> 
        <p class="ng-title"><a rel="nofollow" target="_blank" name="public0_none_wb_xcp01" href="http://b.suning.com">政企采购</a></p> 
        <p class="ng-intro"><a rel="nofollow" target="_blank" name="public0_none_wb_xcp01" href="http://b.suning.com">为企业用户量身定做的采购平台，优选苏宁易购全站商品，为企业采购提供专业化的一站式采购解决方案。</a></p> 
       </dd> 
      </dl> 
      <dl> 
       <dt> 
        <a name="public0_none_wb_xcp02" rel="nofollow" target="_blank" href="http://sncs.suning.com/"><img width="80" height="80" src="https://sslres.suning.com/public/v3/images/f2.png?v=01" /></a> 
       </dt> 
       <dd> 
        <p class="ng-title"><a name="public0_none_wb_xcp02" rel="nofollow" target="_blank" href="http://sncs.suning.com/">苏宁众包</a></p> 
        <p class="ng-intro"><a name="public0_none_wb_xcp02" rel="nofollow" target="_blank" href="http://sncs.suning.com/">以苏宁全渠道包销为主要特点，整合全社会众包资源，扶持创新企业，推广创新产品。</a></p> 
       </dd> 
      </dl> 
     </div> 
     <div class="ng-serch-suning"> 
      <dl> 
       <dt></dt> 
       <dd> 
        <p class="ng-title">身边苏宁</p> 
        <p class="ng-intro">全国300个城市1600家门店3000个服务点为您提供最贴心的服务！</p> 
        <a name="public0_none_wb_xcp03" class="srh-btn" target="_blank" href="http://store.suning.com"></a> 
       </dd> 
      </dl> 
     </div> 
     <div class="footer-egg-con"></div> 
    </div> 
    <div class="footer-egg-btn"></div> 
   </div> 
   <div class="ng-s-footer"> 
    <div class="ng-s-f-con"> 
     <p class="ng-url-list"> <a name="public0_none_wb_yqlj0101" target="_blank" href="http://www.suning.cn/">苏宁云商</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0102" target="_blank" href="http://10035.suning.com/">苏宁互联</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0111" target="_blank" href="mall.html">苏宁金融</a><span>|</span> <a name="public0_none_wb_yqlj0103" target="_blank" rel="nofollow" href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://pay.suning.com/epp-epw/login/login.action">易付宝</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0105" target="_blank" href="http://www.pptv.com?rcc_id=snyg">PPTV</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0106" target="_blank" href="child.html?/">红孩子</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0107" target="_blank" href="http://binggo.suning.com/">缤购</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0108" target="_blank" href="http://laox.suning.com/">乐购仕</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0111" target="_blank" href="http://wuliu.suning.com/">苏宁物流</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0109" target="_blank" href="http://usa.suning.com/">苏宁美国</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0110" target="_blank" href="http://hk.suning.com/">苏宁香港</a><span>|</span> <a name="public0_none_wb_yqlj0111" target="_blank" href=" http://m.suning.com/">手机苏宁</a> </p> 
     <p class="ng-url-list"> <a rel="nofollow" name="public0_none_wb_yqlj0201" target="_blank" href="http://club.suning.com/hr/aboutus.html">关于苏宁易购</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0202" target="_blank" href="http://help.suning.com/page/id-469.htm">联系我们</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0203" target="_blank" href="http://careers.cnsuning.com/">诚聘英才</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0204" target="_blank" href="http://sop.suning.com/">供应商入驻</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0205" target="_blank" href="http://union.suning.com/">苏宁联盟</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0206" target="_blank" href="http://zb.suning.com/">苏宁招标</a><span>|</span> <a name="public0_none_wb_yqlj0207" target="_blank" href="http://union.suning.com/aas/links.html">友情链接</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0208" target="_blank" href="http://help.suning.com/page/id-281.htm">法律申明</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0209" target="_blank" href="http://ued.suning.com/survey/">用户体验提升计划</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0209" target="_blank" href="http://mrs.suning.com/mrs-web/stockholder/check.htm">股东会员认证</a> </p> 
     <p class="ng-copyright"> Copyright&copy; 2002-2016 ，苏宁云商集团股份有限公司版权所有 <a style="color:#999" target="_blank" href="http://www.miitbeian.gov.cn">苏ICP备10207551号-4</a> <a style="color:#999" rel="nofollow" target="_blank" href="https://sslres.suning.com/public/v3/images/SUB1-20130131.png">苏B1-20130131</a> <a style="color:#999" rel="nofollow" target="_blank" href="https://sslres.suning.com/public/v3/images/SUB2-20130376.png">苏B2-20130376</a> <a style="color:#999" rel="nofollow" target="_blank" href="https://sslres.suning.com/public/v3/images/SUB2-20130391.png">苏B2-20130391</a> 出版物经营许可证新出发苏批字第A-243号</p> 
     <div class="ng-authentication"> 
      <a rel="nofollow" name="public0_none_wb_zs0302" target="_blank" href="https://search.szfw.org/cert/l/CX20111018000608000610"> <img width="76" height="24" alt="诚信网站" src="https://sslres.suning.com/public/v3/images/chengxin.png" /> </a> 
      <a rel="nofollow" name="public0_none_wb_zs0303" target="_blank" href="http://image.suning.cn/uimg/snnet/snnetImg/142891196680527240.jpg"> <img width="76" height="24" alt="中国联通授权网络经营代理商" src="https://sslres.suning.com/public/v3/images/unicom.png" /> </a> 
      <a rel="nofollow" name="public0_none_wb_zs0304" target="_blank" href="https://sslres.suning.com/public/v3/images/dianxin_content.jpg"> <img width="76" height="24" alt="中国电信授权网络经营代理商" src="https://sslres.suning.com/public/v3/images/dianxin.jpg" /> </a> 
      <a name="public0_none_wb_zs0303" rel="nofollow" target="_blank" href="http://www.jsgsj.gov.cn:60101/keyLicense/verifKey.jsp?serial=320000163820130117100000009630&amp;signData=0+ADYt839gp1EiqiZXnsxsyOnpO32Wg4sFePaiV9+NtTV/XCAMXGzT/AOgycGMm0EjsR/Ot661M7h9GeStpA8QyJTs1Ip1K/CSNaemthn7f1NjI03x1E6v9ZRT+3M60WZIGLBEjFs5XMliufNz1cJlYDQrTZvaZbHyJ2KzgJB4Y="> <img width="76" height="24" alt="电子营业执照" src="https://sslres.suning.com/public/v3/images/dianzi.png?v=02" /> </a> 
     </div> 
    </div> 
   </div> 
    
   
    
  </div> 
  <script type="text/javascript">
            //创建在页面引入外部js文件的script标签的方法开始
            function _loadAsyncJs(src) {
                var _src = src;
                var _scripts = document.getElementsByTagName('script');
                for (var i = 0; i < _scripts.length; i++) {
                    if (_scripts[i].src == _src) {
                        return;
                    }
                }
                var _script = document.createElement('script');
                _script.type = 'text/javascript';
                _script.async = true;
                _script.src = _src;
                var _s = _scripts[0];
                _s.parentNode.insertBefore(_script, _s);
            }
            // 创建在页面引入外部js文件的script标签的方法结束
            //判断环境，设置js文件路径开始
            function _getJsFilePath(js_file) {
                sa_src = "{{ asset(_HOME_ . '/css') }}/" + js_file;
                return sa_src;
            }
            //判断环境，设置js文件路径结束
        </script> 
  <script type="text/javascript">
            (function() {
                _loadAsyncJs(_getJsFilePath("da_opt.js"));
            })();
        </script> 
  <script type="text/javascript">
            /**
             * 更新记录：
             * 1.增加对采集元素包裹文字中包含的“|”进行处理（2014/1/21）
             */
            /**
             * 第一步：在页面引入基础代码
             * 埋点前请检查页面是否已经埋入此代码，避免重复引入代码
             * 此部分代码不允许修改，若私自修改源码导致出现的问题，后果自负
             */
            eval(function(p, a, c, k, e, d) {
                e = function(c) {
                    return(c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
                };
                if (!''.replace(/^/, String)) {
                    while (c--) {
                        d[e(c)] = k[c] || e(c)
                    }
                    k = [function(e) {
                            return d[e]
                        }];
                    e = function() {
                        return'\\w+'
                    };
                    c = 1
                }
                ;
                while (c--) {
                    if (k[c]) {
                        p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c])
                    }
                }
                return p
            }('2 9;5(!9)9={};5(!9.A)9.A={};(4(){2 N=/^\\w*?.k.h$/,15=a.y.1r,K=(("1g:"==a.y.K)?"1g://":"1v://"),S=U(),7="|",R=j.16==j.1w?y.P:j.16.y.P,18=p(1f(R));4 E(f){2 6=f.6?p(f.6):"6 L",l=f.l?p(f.l):"l L",c=o 1s(),1m=(C(f,c),c)?p(c.1A("").O(/\\s|\\|/1E,"")):"1y L",g=(g=a.1l("1x"))?g.r:"",1o=l+7+6+7+1m,q=(q=a.1l("1u"))?q.r:"",17=K+S+"/1t.1z",F=V(),I="I";1h(I,F,\'/\',"","");2 1j=W("1D"),T=1C Y=="1B"?Y.12:"1F 1p 1q 12",1n=F+7+1j+7+1o+7+18,14=17+"?"+"1M="+1n+"&"+"20="+q+"&"+"g="+g+"&"+"22="+T;13(14)}4 V(){2 1e=o B(),m=10.1Y(21*10.1Z()),X=1e.D().1W().1X(m);d X}4 W(6){2 G=a.1a.Z("; ");1b(2 i=0;i<G.1k;i++){2 H=G[i].Z("=");5(H[0]==6)d 23(H[1])}}4 13(Q){2 n="28"+(o B()).D();2 i=j[n]=o 27();i.26=(i.24=4(){j[n]=x});i.1G=Q+"&25="+n;i=x}4 U(){5(N.1U(15)){d"A.k.1i/9"}z{d"1L.k.1i/9"}}4 19(){d a.e}4 1h(6,r,t,u,e){2 b=6+"="+1V(r);5(u!=""){2 v=o B();v.1K(v.D()+u);b+=";u="+v.1J()}5(t!=""){b+=";t="+t}2 J=19();5(J.M(".k.h")!=-1){b+=";e=.k.h"}z 5(J.M(".1c.h")!=-1){b+=";e=.1c.h"}z{b+=";e="+e}a.1a=b}4 1f(8){5(8.1k>1H){8=8.1I(0,1N)}1O(8.M(7)!=-1){8=8.O(7,"--")}d 8}4 C(n,c){5(n.1d==3){c.1T(n.1S)}z 5(n.1d==1){1b(2 m=n.1R;m!=x;m=m.1P){C(m,c)}}}4 p(s){d s!=x?1Q(s):""}2 11=9.A;11.E=E})();', 62, 133, '||var||function|if|name|_tag|urlOrTitle|sa|document|str|_strings|return|domain|data|_type|com||window|suning|id|||new|_encode|_errorCode|value||path|expires|date||null|location|else|click|Date|_getString|getTime|sendDatasIndex|oId|arrStr|temp|_snck|dm|protocol|undefined|indexOf|sn_prd_reg|replace|href|strURL|_toUrl|server|_cityId|getServer|getOnlyIdIndex|getCookieIndex|onlyId|sn|split|Math|_click|cityId|httpGifSendIndex|url|hostName|top|clickUrl|_shortToUrl|_getDomain|cookie|for|cnsuning|nodeType|now|_cutUrlToShort|https|_addCookie4Index|cn|pvId|length|getElementById|_text|cDatas|Datas|not|get|hostname|Array|ajaxClick|errorCode|http|self|resourceType|text|gif|join|object|typeof|_snmp|ig|can|src|301|substring|toGMTString|setTime|clicksit|_snmk|300|while|nextSibling|encodeURIComponent|firstChild|nodeValue|push|test|escape|toString|concat|round|random|_snme|100000|_cId|unescape|onerror|iId|onload|Image|log_'.split('|'), 0, {}))
            /**
             * 第二步：为元素绑定click事件
             * 技术支持：此方案需要jQuery支持，使用此方案前请确认使用的jquery版本对live方法的支持性
             * 功能：为点击对象添加点击事件处理函数
             * 示例解释：下面的示例中是为标签的name以test_dac_index_开头的元素埋点，实际生产中的name属性命名约束请联系贺婷芳(12061488)确认；未经确认不得埋点，否则引起冲突后果自负
             * 示例修改：在具体埋点过程中请开发人员根据具体的name修改a[name^=\*需要埋点的name*\]或者input[name^=\*需要埋点的name*\]
             * 命名技术规范：标签的name,id属性不能含有"|"
             */
            $(document).ready(function() {
                //登录页面发送数据到SA
                $("a[name*=Logon_index_],input[name*=Logon_index_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //注册页面发送数据到SA
                $("a[name*=register_info_],input[name*=register_info_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //注册成功页面发送数据到SA
                $("a[name*=register_suc_],input[name*=register_suc_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //我的易购首页发送数据到SA
                $("a[name*=MySuning_index_],input[name*=MySuning_index_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //会员卡绑定易购账号流程验证会员卡和密码页面发送数据到SA
                $("a[name*=CardLogon_],input[name*=CardLogon_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //会员卡绑定易购账号流程验证会员卡信息页面发送数据到SA
                $("a[name*=CardInfo_],input[name*=CardInfo_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //会员卡绑定易购账号流程选择合并方式页面发送数据到SA
                $("a[name*=MergeWay_],input[name*=MergeWay_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //会员卡绑定易购账号流程合并新建易购账号页面发送数据到SA
                $("a[name*=MobRegister_],input[name*=MobRegister_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //会员卡绑定易购账号流程合并存在易购账号页面发送数据到SA
                $("a[name*=CheckNum_],input[name*=CheckNum_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //会员卡绑定易购账号流程合并存在易购账号弹框页面（包括邮箱验证码弹框和手机验证码弹框）发送数据到SA
                $("a[name*=TestNum_],input[name*=TestNum_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //会员卡绑定易购账号流程合并成功页面发送数据到SA
                $("a[name*=MergeSuc_],input[name*=MergeSuc_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //易购账号合并会员卡流程页面发送数据到SA
                $("a[name*=Mergecard_],input[name*=Mergecard_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //会员卡绑定易购账号流程合并新建易购账号页面发送数据到SA（new add by 12070643 2013-10-11）
                $("a[name*=MobReg_index_none_],input[name*=MobReg_index_none_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //互联手机号关联易购账号验证互联账号页面发送数据到SA
                $("a[name*=VerifyHl_index_none_],input[name*=VerifyHl_index_none_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //互联手机号关联易购账号关联已有账号页面发送数据到SA
                $("a[name*=MergeSn_had_index_],input[name*=MergeSn_had_index_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //互联手机号关联易购账号创建新账号页面发送数据到SA
                $("a[name*=MergeSn_reg_index_],input[name*=MergeSn_reg_index_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //互联手机号关联易购账号关联成功页面发送数据到SA
                $("a[name*=ComSH_suc_index_],input[name*=ComSH_suc_index_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //我的易购关联易购账号检查互联手机页面发送数据到SA
                $("a[name*=MySnVerHl_index_none_],input[name*=MySnVerHl_index_none_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //我的易购关联易购账号成功页面发送数据到SA
                $("a[name*=MySnMerSH_suc_index_],input[name*=MySnMerSH_suc_index_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //我的易购关联易购账号查询关联互联手机页面发送数据到SA
                $("a[name*=MySnMerSH_view_index_],input[name*=MySnMerSH_view_index_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //PPTV联合登陆页面发送数据到SA
                $("a[name*=Merge_pptv_none_],input[name*=Merge_pptv_none_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //双线融合选择有无易购账号页面发送数据到SA
                $("a[name*=Chose_hyk_none_],input[name*=Chose_hyk_none_]").live("click", function() {
                    sa.click.sendDatasIndex(this);
                });
                //双线融合记得密码页面发送数据到SA
                $("a[name*=Check_hyk_offremember_],input[name*=Check_hyk_offremember_]").live("click", function() {
                    sa.click.sendDatasIndex(this);
                });
                //双线融合手机验证码页面发送数据到SA
                $("a[name*=Check_phone_offremember_],input[name*=Check_phone_offremember_]").live("click", function() {
                    sa.click.sendDatasIndex(this);
                });
                //双线融合注册页面发送数据到SA
                $("a[name*=Register_suning_none_],input[name*=Register_suning_none_]").live("click", function() {
                    sa.click.sendDatasIndex(this);
                });
                //双线融合忘记密码页面发送数据到SA
                $("a[name*=Check_hyk_offforget_],input[name*=Check_hyk_offforget_]").live("click", function() {
                    sa.click.sendDatasIndex(this);
                });
                //双线融合合并成功页面发送数据到SA
                $("a[name*=Merge_success_none_],input[name*=Merge_success_none_]").live("click", function() {
                    sa.click.sendDatasIndex(this);
                });
                //会员融合优化线上绑线下验证会员卡（记得密码）页面发送数据到SA
                $("a[name*=Check_hyk_onremember_],input[name*=Check_hyk_onremember_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //会员融合优化线上绑线下初始密码验证会员卡手机（记得密码）页面发送数据到SA
                $("a[name*=Check_phone_onremember_],input[name*=Check_phone_onremember_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //会员融合优化线上绑线下验证会员卡（不记得密码）页面发送数据到SA
                $("a[name*=Check_hyk_onforget_],input[name*=Check_hyk_onforget_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
                //会员融合优化线上绑线下验证会员卡手机（不记得密码）页面发送数据到SA
                $("a[name*=Check_phone_onforget_],input[name*=Check_phone_onforget_]").live("click", function() {
                    //sendDatasMember(this);
                    sa.click.sendDatasIndex(this);
                });
            });
        </script> 
  <!-- 尾文件 end --> 
  <!--<script src="{{ asset(_HOME_ . '/css') }}/SFE.lion.dialog.js?v=2016031003" type="text/javascript"></script>--> 
  <script src="{{ asset(_HOME_ . '/css') }}/succCart.js?v=2016031003" type="text/javascript"></script> 
  <script>
            //埋点
            eval(function(p, a, c, k, e, r) {
                e = function(c) {
                    return(c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
                };
                if (!''.replace(/^/, String)) {
                    while (c--)
                        r[e(c)] = k[c] || e(c);
                    k = [function(e) {
                            return r[e]
                        }];
                    e = function() {
                        return'\\w+'
                    };
                    c = 1
                }
                ;
                while (c--)
                    if (k[c])
                        p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
                return p
            }('2 9;5(!9)9={};5(!9.B)9.B={};(4(){2 j=/^\\w*?.x.p$/,1f=7.T.2l,O=(("10:"==7.T.O)?"10://":"2f://"),14=16(),8="|",1e=T.W,1i=y(1v(1e));4 L(a){2 b=a.U?y(a.U):"U A",q=a.q?y(a.q):"q A",J=t 2c(),1m=(Q(a,J),J)?y(J.2a("").1u(/\\s|\\|/29,"")):"28 A",v=(v=7.X("27"))?v.Y:"",1a=q+8+b+8+1m,G=(G=7.X("26"))?G.Y:"",1g=O+14+"/25.20",R=1n(),S="S";1q(S,R,\'/\',"","");2 c=I("1x"),Z=1X 11=="1W"?11.13:"1V 1U 1S 13",17=R+8+c+8+1a+8+1i,M=a.W?a.W:\'\',N=(M?19(M):\'-\'),E=7.X("1R"),1c=(E?E.Y:""),1d=I(\'2m\').P(\'|\')[1],1h=I(\'1N\'),1j=1g+"?"+"1J="+17+"&"+"1H="+G+"&"+"v="+v+"&"+"1F="+Z+\'&\'+\'1E=\'+N+\'&\'+\'E=\'+1c+\'&1D=\'+1d+\'&1C=\'+1h;1p(1j)}4 1n(){2 a=t V(),m=1s.1B(1A*1s.1y()),1w=a.K().1Y().1z(m);6 1w}4 I(a){2 b=7.1t.P("; ");1o(2 i=0;i<b.H;i++){2 c=b[i].P("=");5(c[0]==a)6 1G(c[1])}}4 1p(a){2 n="1I"+(t V()).K();2 i=1k[n]=t 1K();i.1L=(i.1M=4(){1k[n]=F});i.1O=a+"&1P="+n;i=F}4 16(){5(j.1Q(1f)){6"B.x.1b/9"}D{6"1T.x.1b/9"}}4 15(){6 7.C}4 1q(a,b,c,d,e){2 f=a+"="+1Z(b);5(d!=""){2 g=t V();g.21(g.K()+d);f+=";22="+g.23()}5(c!=""){f+=";24="+c}2 h=15();5(h.z(".x.p")!=-1){f+=";C=.x.p"}D 5(h.z(".18.p")!=-1){f+=";C=.18.p"}D{f+=";C="+e}7.1t=f}4 19(r){2 a=\'-\';5(!u(r)){a=1r(r,\'N\',\'&\')}6 a}4 1v(a){5(a.H>2b){a=a.1l(0,2d)}2e(a.z(8)!=-1){a=a.1u(8,"--")}6 a}4 Q(n,a){5(n.12==3){a.2g(n.2h)}D 5(n.12==1){1o(2 m=n.2i;m!=F;m=m.2j){Q(m,a)}}}4 y(s){6 s!=F?2k(s):""}4 1r(a,b,c){2 d="-",l;5(!u(a)&&!u(b)&&!u(c)){l=a.z(b);5(l>-1){2 e=a.z(c,l);5(e<0){e=a.H}d=a.1l(l+b.H+1,e)}}6 d}4 u(o){6(A==o||\'\'==o||\'-\'==o)}2 k=9.B;k.L=L})();', 62, 147, '||var||function|if|return|document|_tag|sa||||||||||||idx||||com|id|||new|IsEmpty|_type||suning|_encode|indexOf|undefined|click|domain|else|urlPattern|null|_errorCode|length|getCookieIndex|_strings|getTime|sendDatasIndex|aHref|sid|protocol|split|_getString|oId|_snck|location|name|Date|href|getElementById|value|_cityId|https|sn|nodeType|cityId|server|_getDomain|getServer|cDatas|cnsuning|GetSID|Datas|cn|urlPatternV|visitorID|_toUrl|hostName|clickUrl|loginUser|_shortToUrl|url|window|substring|_text|getOnlyIdIndex|for|httpGifSendIndex|_addCookie4Index|Pick|Math|cookie|replace|_cutUrlToShort|onlyId|_snmp|random|concat|100000|round|lu|vid|_sid|_cId|unescape|_snme|log_|_snmk|Image|onload|onerror|idsLoginUserIdLastTime|src|iId|test|URLPattern|get|clicksit|not|can|object|typeof|toString|escape|gif|setTime|expires|toGMTString|path|ajaxClick|errorCode|resourceType|text|ig|join|301|Array|300|while|http|push|nodeValue|firstChild|nextSibling|encodeURIComponent|hostname|_snma'.split('|'), 0, {}))
            //埋点-为元素绑定click事件
            $(document).ready(function() {
                $("a[name^=cart_],input[name^=cart_],p[name^=cart_],a[name^=tjjh_]").live("click", function() {
                    sa.click.sendDatasIndex(this);
                });
            });
        </script>  
 </body>
</html>