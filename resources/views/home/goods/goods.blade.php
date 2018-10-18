@extends('layout.home')
@section('content')

   <!--  === -->

     <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/common.css" /> 
  <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/search.css" /> 
  <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/sn-sidebar.css" /> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/jquery.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/sn_lazyload.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/lazyelem.min.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/SFE.base.min.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/search.min.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/sn-sidebar.min.js"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/chatCompat_mini.js"></script> 

    <link href="{{ asset(_HOME_ . '/css') }}/fourth.css?v=2016031004" type="text/css" rel="stylesheet" /> 
  <link href="{{ asset(_HOME_ . '/css') }}/fourthPopBox.css?v=2016031004" type="text/css" rel="stylesheet" /> 
  <script src="{{ asset(_HOME_ . '/js') }}/loginUtil2.js" type="text/javascript"></script> 
  <script src="{{ asset(_HOME_ . '/js') }}/newFourPageService.js" type="text/javascript"></script> 
  <script src="{{ asset(_HOME_ . '/js') }}/fourthAddCart.js?v=2016031004" type="text/javascript"></script> 
  <script id="0001" type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/passport_detail.js"></script> 
  <script src="{{ asset(_HOME_ . '/js') }}/iFourth-min.js" type="text/javascript"></script> 
  <script src="{{ asset(_HOME_ . '/js') }}/itemComDataLoad-min.js" type="text/javascript"></script> 
  <script src="{{ asset(_HOME_ . '/js') }}/item-min.js" type="text/javascript"></script> 
  <script src="{{ asset(_HOME_ . '/js') }}/SFE.city.js?v=2016031004" type="text/javascript"></script> 
  <script src="{{ asset(_HOME_ . '/js') }}/detect.js?v=2016031004" type="text/javascript"></script> 
  <script src="{{ asset(_HOME_ . '/js') }}/showMobilePop1.js" type="text/javascript"></script> 
  <script src="{{ asset(_HOME_ . '/js') }}/memberOrgs.min.js?v=2016031004" type="text/javascript"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/favorite-api.min.js?v=2016031004"></script> 
  <script src="{{ asset(_HOME_ . '/js') }}/SFE.dialog.js" type="text/javascript"></script> 
  <script src="{{ asset(_HOME_ . '/js') }}/jquery.cookie.min.js" type="text/javascript"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/ECode.calendar.js?v=2016031004"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/performance_agent.js?v=2016031004"></script> 
  <script type="text/javascript" src="{{ asset(_HOME_ . '/js') }}/da_opt_detail.js?v=2016031004"></script> 
  <link rel="stylesheet" type="text/css" href="{{ asset(_HOME_ . '/css') }}/review.css?v=2016022201" /> 
  <link rel="stylesheet" type="text/css" href="{{ asset(_HOME_ . '/css') }}/consultation.css" /> 


<script>
	$('.ng-sort-list-box').attr('style', 'display:none');
	$('.ng-all-hook').mouseover(function() {
		$('.ng-sort-list-box').attr('style', 'display:block');
	});
	$('.ng-sort-list-box').mouseover(function() {
		$('.ng-sort-list-box').attr('style', 'display:block');
	});
	$('.ng-sort-list-box').mouseout(function() {
		$('.ng-sort-list-box').attr('style', 'display:none');
	});
	$('.ng-all-hook').mouseout(function() {
		$('.ng-sort-list-box').attr('style', 'display:none')
	});
	
</script>
  <div class="wrapper"> 
   <form method="post" action="https://cart.suning.com/emall/addMiniSoppingCart" id="reflashForm" name="reflashForm"> 
    <input type="hidden" value="1" name="quantity" id="quantity" /> 
    <input type="hidden" value="0" name="fullInventoryCheck" /> 
    <input type="hidden" value="0" name="inventoryCheckType" /> 
    <input type="hidden" value="0" name="fullVoucherCheck" /> 
    <input type="hidden" value="0" name="voucherCheckType" /> 
    <input type="hidden" value="1" name="inventoryRemoteCheck" /> 
    <input type="hidden" value="1" name="voucherRemoteCheck" /> 
    <input type="hidden" value="." name="orderId" /> 
    <input type="hidden" value="OrderItemDisplay" name="URL" /> 
    <input type="hidden" value="22265955" name="catEntryId_1" /> 
    <input type="hidden" value="prd_10052_14656_-7_22265955_.html" name="ERROEVIEW" /> 
    <input type="hidden" value="10052" name="storeId" /> 
    <input type="hidden" value="14656" name="catalogId" /> 
    <input type="hidden" value="" id="buyPackSort" name="buyPackSort" /> 
    <input type="hidden" value="" id="buyPackPartNumber_1" name="buyPackPartNumber_1" /> 
    <input type="hidden" value="" id="buyPackQuantity_1" name="buyPackQuantity_1" /> 
    <input type="hidden" value="0" id="isOldToNew" name="isOldToNew" /> 
    <input type="hidden" value="0" id="isfourPageBuyNow" name="isfourPageBuyNow" /> 
    <input type="hidden" value="0" id="sellType" name="sellType" /> 
    <input type="hidden" value="" id="actionName" name="actionName" /> 
    <input type="hidden" value="-1" id="easilyBuyId" name="easilyBuyId" /> 
    <input type="hidden" value="http://www.suning.com/emall/prd_10052_14656_-7_22265955_.html" name="returnURL" /> 
   </form> 
   <div class="breadcrumb"> 
    <a href="http://binggo.suning.com/caizhuang.html" id="category1" name="item_122639559_guide_mulu01" class="ft" gid="315581">香水 香氛 精油</a> 
    <span class="sep">&gt;</span> 
    <div class="dropdown"> 
     <span class="dropdown-text" gid="315147"><a href="http://list.suning.com/0-315147-0.html" name="item_122639559_guide_mulu02" class="ft">香水香氛</a></span> 
     <p></p> 
     <i></i> 
    </div> 
    <span class="sep">&gt;</span> 
    <div class="dropdown"> 
     <span class="dropdown-text" gid="362505"><a href="http://list.suning.com/0-362505-0.html" name="item_122639559_guide_mulu03" class="ft">香水</a></span> 
     <p></p> 
     <ul class="dropdown-option"> 
      <li><a title="香体喷雾" href="http://list.suning.com/0-315156-0.html" name="item_122639559_mulu03_fenlei01" rel="nofollow">香体喷雾</a></li> 
      <li><a title="香氛套装/礼盒" href="http://list.suning.com/0-315157-0.html" name="item_122639559_mulu03_fenlei02" rel="nofollow">香氛套装/礼盒</a></li> 
      <li><a title="香体露/走珠/香膏" href="http://list.suning.com/0-315159-0.html" name="item_122639559_mulu03_fenlei03" rel="nofollow">香体露/走珠/香膏</a></li> 
      <li><a title="香精" href="http://list.suning.com/0-336030-0.html" name="item_122639559_mulu03_fenlei04" rel="nofollow">香精</a></li> 
     </ul> 
     <i></i> 
    </div> 
    <span class="sep">&gt;</span> 
    <div class="dropdown"> 
     <span class="dropdown-text"><a href="http://www.suning.com/pinpai/3823-362505-0.html">香奈儿(CHANEL)</a></span> 
     <p></p> 
     <ul class="dropdown-option"> 
      <li><a title="香奈儿" href="http://www.suning.com/pinpai/3823-362505-0.html" rel="nofollow">香奈儿</a></li> 
      <li><a title="迪奥" href="http://www.suning.com/pinpai/4487-362505-0.html" rel="nofollow">迪奥</a></li> 
      <li><a title="范思哲" href="http://www.suning.com/pinpai/0EGG-362505-0.html" rel="nofollow">范思哲</a></li> 
      <li><a title="卡尔文&middot;克莱恩" href="http://www.suning.com/pinpai/X093-362505-0.html" rel="nofollow">卡尔文&middot;克莱恩</a></li> 
      <li><a title="菲拉格慕" href="http://www.suning.com/pinpai/9240-362505-0.html" rel="nofollow">菲拉格慕</a></li> 
      <li><a title="博柏利" href="http://www.suning.com/pinpai/9331-362505-0.html" rel="nofollow">博柏利</a></li> 
      <li><a title="宝格丽" href="http://www.suning.com/pinpai/7171-362505-0.html" rel="nofollow">宝格丽</a></li> 
      <li><a title="古驰" href="http://www.suning.com/pinpai/0CCQ-362505-0.html" rel="nofollow">古驰</a></li> 
      <li><a title="安娜苏" href="http://www.suning.com/pinpai/0EQF-362505-0.html" rel="nofollow">安娜苏</a></li> 
      <li><a title="爱马仕" href="http://www.suning.com/pinpai/G326-362505-0.html" rel="nofollow">爱马仕</a></li> 
      <li><a title="阿迪达斯" href="http://www.suning.com/pinpai/K674-362505-0.html" rel="nofollow">阿迪达斯</a></li> 
      <li><a title="大卫杜夫" href="http://www.suning.com/pinpai/0ELF-362505-0.html" rel="nofollow">大卫杜夫</a></li> 
      <li><a title="伊丽莎白.雅顿" href="http://www.suning.com/pinpai/9333-362505-0.html" rel="nofollow">伊丽莎白.雅顿</a></li> 
      <li><a title="竹萃集" href="http://www.suning.com/pinpai/Y159-362505-0.html" rel="nofollow">竹萃集</a></li> 
      <li><a title="莎娃蒂尼达利" href="http://www.suning.com/pinpai/06S4-362505-0.html" rel="nofollow">莎娃蒂尼达利</a></li> 
      <li><a title="兰蔻" href="http://www.suning.com/pinpai/7146-362505-0.html" rel="nofollow">兰蔻</a></li> 
      <li><a title="碧欧泉" href="http://www.suning.com/pinpai/7140-362505-0.html" rel="nofollow">碧欧泉</a></li> 
      <li><a title="浪凡" href="http://www.suning.com/pinpai/0ECF-362505-0.html" rel="nofollow">浪凡</a></li> 
      <li><a title="雅芳" href="http://www.suning.com/pinpai/7127-362505-0.html" rel="nofollow">雅芳</a></li> 
      <li><a title="美丽法则" href="http://www.suning.com/pinpai/06G0-362505-0.html" rel="nofollow">美丽法则</a></li> 
     </ul> 
     <i></i> 
    </div> 
    <span class="sep">&gt;</span> 
    <span id="productName" title="香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口" class="breadcrumb-title">香奈儿 /CHANEL 粉色邂逅柔情...</span> 
   </div> 
  </div> 
  <div class="wrapper proinfo"> 
   <div class="proinfo-container clearfix"> 
    <div class="proinfo-left"> 
     <div class="imgzoom" id="imgZoom"> 
      <div class="imgzoom-main"> 
       <a href="javascript:void(0);" name="item_122639559_sppic_bigpic01" class="view-img" id="bigImg"> <img src="{{ asset(_HOME_ . '/images') }}/000000000122639559_1_400x400.jpg" alt="香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口" /> </a> 
       <div class="imgzoom-shot"></div> 
       <i style="display:none;" class="g-sticker-80" id="labelPicture"><b class=""></b></i> 
       <i class="oversea-logo hide" style="display: none;"></i> 
      </div> 
      <div class="imgzoom-thumb"> 
       <a href="javascript:void(0);" class="prev prev-disable" name="item_122639559_sppic_picup01"></a> 
       <div class="imgzoom-thumb-main"> 
        <ul style="left: 0px;"> 
         <li class="current"><a href="javascript:void(0);" name="item_122639559_sppic_xiaop01"><img src="{{ asset(_HOME_ . '/images') }}/000000000122639559_1_60x60.jpg" src-medium="{{ asset(_HOME_ . '/images') }}/000000000122639559_1_400x400.jpg" src-large="{{ asset(_HOME_ . '/images') }}/000000000122639559_1_800x800.jpg" alt="香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口" /></a></li> 
         <li class=""><a href="javascript:void(0);" name="item_122639559_sppic_xiaop02"><img src="{{ asset(_HOME_ . '/images') }}/000000000122639559_2_60x60.jpg" src-medium="{{ asset(_HOME_ . '/images') }}/000000000122639559_2_400x400.jpg" src-large="{{ asset(_HOME_ . '/images') }}/000000000122639559_2_800x800.jpg" alt="香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口" /></a></li> 
         <li class=""><a href="javascript:void(0);" name="item_122639559_sppic_xiaop03"><img src="{{ asset(_HOME_ . '/images') }}/000000000122639559_3_60x60.jpg" src-medium="{{ asset(_HOME_ . '/images') }}/000000000122639559_3_400x400.jpg" src-large="{{ asset(_HOME_ . '/images') }}/000000000122639559_3_800x800.jpg" alt="香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口" /></a></li> 
         <li class=""><a href="javascript:void(0);" name="item_122639559_sppic_xiaop04"><img src="{{ asset(_HOME_ . '/images') }}/000000000122639559_4_60x60.jpg" src-medium="{{ asset(_HOME_ . '/images') }}/000000000122639559_4_400x400.jpg" src-large="{{ asset(_HOME_ . '/images') }}/000000000122639559_4_800x800.jpg" alt="香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口" /></a></li> 
         <li class=""><a href="javascript:void(0);" name="item_122639559_sppic_xiaop05"><img src="{{ asset(_HOME_ . '/images') }}/000000000122639559_5_60x60.jpg" src-medium="{{ asset(_HOME_ . '/images') }}/000000000122639559_5_400x400.jpg" src-large="{{ asset(_HOME_ . '/images') }}/000000000122639559_5_800x800.jpg" alt="香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口" /></a></li> 
        </ul> 
       </div> 
       <a href="javascript:void(0);" class="next next-disable" name="item_122639559_sppic_picdown01"></a> 
      </div> 
      <div class="imgzoom-pop"> 
       <img /> 
      </div> 
     </div> 
     <div class="imgzoom-memo"> 
      <div class="share"> 
       <span class="label">分享到：</span> 
       <div class="share-list"> 
        <i></i> 
        <a href="http://v.t.sina.com.cn/share/share.php?url=http://product.suning.com/122639559.html&amp;appkey=400813291&amp;title=%E9%A6%99%E5%A5%88%E5%84%BF%20/CHANEL%20%E7%B2%89%E8%89%B2%E9%82%82%E9%80%85%E6%9F%94%E6%83%85...%EF%BC%8C%E6%98%93%E8%B4%AD%E4%BB%B7%EF%BC%9A%EF%BF%A5328.00%20%E8%8B%8F%E5%AE%81%E6%98%93%E8%B4%AD%E8%AE%A9%E6%82%A8%E5%B0%BD%E4%BA%AB%E8%B4%AD%E7%89%A9%E4%B9%90%E8%B6%A3%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA%20@%E8%8B%8F%E5%AE%81%E6%98%93%E8%B4%AD%EF%BC%89&amp;pic=" class="sina" title="新浪微博" name="item_122639559_sppic_share02" target="_blank" rel="nofollow"></a> 
        <a href="http://v.t.qq.com/share/share.php?title=%E9%A6%99%E5%A5%88%E5%84%BF%20/CHANEL%20%E7%B2%89%E8%89%B2%E9%82%82%E9%80%85%E6%9F%94%E6%83%85...%EF%BC%8C%E6%98%93%E8%B4%AD%E4%BB%B7%EF%BC%9A%EF%BF%A5328.00%20%E8%8B%8F%E5%AE%81%E6%98%93%E8%B4%AD%E8%AE%A9%E6%82%A8%E5%B0%BD%E4%BA%AB%E8%B4%AD%E7%89%A9%E4%B9%90%E8%B6%A3%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA%20@%E8%8B%8F%E5%AE%81%E6%98%93%E8%B4%AD%EF%BC%89&amp;url=http://product.suning.com/122639559.html&amp;appkey=65e3731f449e42a484c25c668160b355&amp;site=http://www.suning.com&amp;pic={{ asset(_HOME_ . '/images') }}/000000000122639559_1_400x400.jpg" class="tengxun" title="腾讯微博" name="item_122639559_sppic_share04" target="_blank" rel="nofollow"></a> 
        <a href="http://share.renren.com/share/buttonshare.do?link=http://product.suning.com/122639559.html&amp;title=%E9%A6%99%E5%A5%88%E5%84%BF%20/CHANEL%20%E7%B2%89%E8%89%B2%E9%82%82%E9%80%85%E6%9F%94%E6%83%85...%EF%BC%8C%E6%98%93%E8%B4%AD%E4%BB%B7%EF%BC%9A%EF%BF%A5328.00%20%E8%8B%8F%E5%AE%81%E6%98%93%E8%B4%AD%E8%AE%A9%E6%82%A8%E5%B0%BD%E4%BA%AB%E8%B4%AD%E7%89%A9%E4%B9%90%E8%B6%A3%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA%20@%E8%8B%8F%E5%AE%81%E6%98%93%E8%B4%AD%EF%BC%89" class="renren" title="人人" name="item_122639559_sppic_share06" target="_blank" rel="nofollow"></a> 
        <a href="http://www.douban.com/recommend/?url=http://product.suning.com/122639559.html&amp;title=%E9%A6%99%E5%A5%88%E5%84%BF%20/CHANEL%20%E7%B2%89%E8%89%B2%E9%82%82%E9%80%85%E6%9F%94%E6%83%85...&amp;comment=%E6%8E%A8%E8%8D%90%E8%8B%8F%E5%AE%81%E7%94%B5%E5%99%A8%E7%BD%91%E4%B8%8A%E5%95%86%E5%9F%8E(suning.cn)%20%E9%A6%99%E5%A5%88%E5%84%BF%20/CHANEL%20%E7%B2%89%E8%89%B2%E9%82%82%E9%80%85%E6%9F%94%E6%83%85%E5%A5%B3%E5%A3%AB%E6%8C%81%E4%B9%85%E6%B7%A1%E9%A6%99%E6%B0%B4%2035ML%20%E6%B3%95%E5%9B%BD%E8%BF%9B%E5%8F%A3%20%E9%A6%99%E5%A5%88%E5%84%BF%E9%A6%99%E6%B0%B4%20%E3%80%90%E4%BB%B7%E6%A0%BC%20%E5%9B%BE%E7%89%87%20%E5%93%81%E7%89%8C%20%E6%8A%A5%E4%BB%B7%E3%80%91-%E8%8B%8F%E5%AE%81%E6%98%93%E8%B4%AD%E4%BB%B7%E6%A0%BC%E4%BE%BF%E5%AE%9C%EF%BC%8C%E8%AF%84%E4%BB%B7%E4%B9%9F%E4%B8%8D%E9%94%99%EF%BC%8C%E5%BF%AB%E5%8E%BB%E7%9C%8B%E7%9C%8B%E8%AF%A6%E7%BB%86%E4%BB%8B%E7%BB%8D%E5%90%A7%0Ahttp://product.suning.com/122639559.html%0A%E8%8B%8F%E5%AE%81%E6%89%BF%E8%AF%BA%EF%BC%9A%E6%89%80%E5%94%AE%E5%95%86%E5%93%81%E5%9D%87%E4%B8%BA%E6%AD%A3%E5%93%81%E8%A1%8C%E8%B4%A7%EF%BC%8C%E5%B8%A6%E5%8F%91%E7%A5%A8%EF%BC%8C%E5%87%AD%E8%B4%A8%E4%BF%9D%E8%AF%81%E4%B9%A6%E5%8F%8A%E5%8F%91%E7%A5%A8%E5%8F%AF%E5%85%A8%E5%9B%BD%E8%81%94%E4%BF%9D" class="douban" title="豆瓣" name="item_122639559_sppic_share01" target="_blank" rel="nofollow"></a> 
        <a href="http://www.kaixin001.com/repaste/bshare.php?rtitle=%E9%A6%99%E5%A5%88%E5%84%BF%20/CHANEL%20%E7%B2%89%E8%89%B2%E9%82%82%E9%80%85%E6%9F%94%E6%83%85...%EF%BC%8C%E6%98%93%E8%B4%AD%E4%BB%B7%EF%BC%9A%EF%BF%A5328.00%20%E8%8B%8F%E5%AE%81%E6%98%93%E8%B4%AD%E8%AE%A9%E6%82%A8%E5%B0%BD%E4%BA%AB%E8%B4%AD%E7%89%A9%E4%B9%90%E8%B6%A3%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA%20@%E8%8B%8F%E5%AE%81%E6%98%93%E8%B4%AD%EF%BC%89&amp;rurl=http://product.suning.com/122639559.html&amp;from=maxthon" class="kaixin" title="开心" name="item_122639559_sppic_share05" target="_blank" rel="nofollow"></a> 
       </div> 
       <div class="share-btn"> 
        <i></i> 
       </div> 
      </div> 
      <label>商品编码</label>: 
      <em id="partNumberLable">122639559</em> 
     </div> 
    </div> 
    <div class="proinfo-title"> 
     <h1 id="itemDisplayName">香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口</h1> 
     <h2 id="promotionDesc">过年放假不打烊 包邮顺丰 专柜包装 送专柜礼袋</h2> 
    </div> 
    <div class="proinfo-main" style="height: 480px;"> 
     <div style="" class="proinfo-focus clearfix proinfo-focus-qrcode proinfo-focus-qrcode-short" id="existPrice"> 
      <dl class="price-sn" id="netPriceBox" style="display: none;"> 
       <dt> 
        <span class="w3">易购价</span> 
       </dt> 
       <dd id="netPrice"> 
        <del> 
         <i>&yen;</i> 
        </del> 
        <a href="javascript:FourPage.subscribePriceNotice();" class="link" id="PriceNotice1" name="item_122639559_gmq_jjtz">降价通知</a> 
       </dd> 
      </dl> 
      <dl class="price-promo" id="promotionPriceBox" style="display: block;"> 
       <dt> 
        <span class="w3">易购价</span> 
       </dt> 
       <dd id="proPriceBox"> 
        <span class="mainprice" id="promotionPrice"><i>&yen;</i>328.<span>00</span></span> 
        <span class="label" id="limitTime" style="display: none;">限时促销</span> 
        <a href="javascript:FourPage.subscribePriceNotice();" class="link" id="PriceNotice2" item_122639559_gmq_jjtz""="" name="name=">降价通知</a> 
        <span class="presell-price hide" id="bookPrice" style="display: none;">定金：<i>&yen;</i><em>4999.00</em></span> 
        <div class="presell-rule hide" id="bookRule" style="display: none;"> 
         <a name="item_122639559_gmq_ydgz" class="title" href="javascript:void(0);">预订规则<i class="arr-drop"></i></a> 
         <div class="content"> 
          <i class="arr"></i> 
          <p>1.定金支付后，若非商家责任（以“售后政策“为准），恕不退还；</p> 
          <p>2.请在要求付尾款时间内至“我的订单”进行支付，超时关闭，且定金不予退还；</p> 
          <p>3.生鲜、定制类预订商品不支持7天无理由退换货；</p> 
          <p>4.发货时间请以预售商品详情页“发货时间”为准；</p> 
          <p>5.批量购买可通过4008516516大客户渠道，我司有权取消普通渠道下的批量订单.</p> 
          <a href="http://help.suning.com/page/id-582.htm" target="_blank">规则详情</a> 
         </div> 
        </div> 
        <span class="memo hide" id="tariff" style="display: none;">商家承担关税</span> 
       </dd> 
      </dl> 
      <dl class="proinfo-star"> 
       <dt>
         &nbsp; 
       </dt> 
       <dd> 
        <span class="stars"><em style="width:92%;"></em></span> 
        <span>4.7分</span> 
        <a href="#pro_detail_tab" class="totalReview" name="item_122639559_gmq_pingjia">共有177条评价</a> 
       </dd> 
      </dl> 
      <div id="qrCode" class="qrcode-main"> 
       <img src="http://code.suning.cn/qrcode/buildQrCodeUrlPCWap_68,74,74,70,3a,2f,2f,72,65,73,2e,6d,2e,73,75,6e,69,6e,67,2e,63,6f,6d,2f,70,72,6f,6a,65,63,74,2f,6c,61,6e,64,69,6e,67,70,61,67,65,2f,69,6e,64,65,78,5f,32,2e,68,74,6d,6c,3f,75,72,6c,3d,68,74,74,70,3a,2f,2f,6d,2e,73,75,6e,69,6e,67,2e,63,6f,6d,2f,70,72,6f,64,75,63,74,2f,30,30,37,30,30,37,38,33,30,32,2f,31,32,32,36,33,39,35,35,39,2e,68,74,6d,6c,26,75,74,6d,5f,73,6f,75,72,63,65,3d,71,72,63,6f,64,65,26,75,74,6d,5f,6d,65,64,69,75,6d,3d,30,36,26,75,74,6d,5f,63,6f,6e,74,65,6e,74,3d,34,30,30,30,26,75,74,6d,5f,74,65,72,6d,3d,30,31,26,75,74,6d,5f,63,61,6d,70,61,69,67,6e,3d,26,61,64,54,79,70,65,43,6f,64,65,3d,31,30,31,33,26,61,64,49,64,3d,31,32,32,36,33,39,35,35,39,5f,30,30,37,30,30,37,38,33,30,32,26,63,68,61,6e,6e,65,6c,74,79,70,65,3d,30,36,26,73,74,6f,72,65,3d,34,30,30,30,5f,30,31,5f,26,68,61,73,77,61,6b,65,3d,31,26,64,6f,77,6e,6c,6f,61,64,75,72,6c,3d,68,74,74,70,25,33,41,25,32,46,25,32,46,63,6f,64,65,2e,73,75,6e,69,6e,67,2e,63,6e,25,32,46,32,75,79,75,47,6c_JPG_115_ff5500__-1.html" alt="客户端扫购更便捷" onerror="javascript:$('#qrCode').children().hide();" id="qrCodeImg" /> 
       <p>客户端扫购更便捷</p> 
      </div> 
     </div> 
     <div style="display:none;" class="proinfo-focus proinfo-focus-disable clearfix" id="noPrice"> 
      <dl class="price-promo"> 
       <dt> 
        <span class="w3">易购价</span> 
       </dt> 
       <dd> 
        <span class="noprice">暂无报价</span> 
       </dd> 
      </dl> 
      <dl class="proinfo-star"> 
       <dt>
         &nbsp; 
       </dt> 
       <dd> 
        <span class="stars"><em style="width:92%;"></em></span> 
        <span>4.7分</span> 
        <a href="#pro_detail_tab" class="totalReview" name="item_122639559_gmq_pingjia">共有177条评价</a> 
       </dd> 
      </dl> 
     </div> 
     <dl style="" id="allcuxiao" class="proinfo-promo"> 
      <dt>
        正在促销 
      </dt> 
      <dd> 
       <ul> 
        <li style="display:none;" id="jnbtTitle"><label>节能补贴</label><p id="jnbtBox" class="promotion-content"></p></li> 
        <li style="display:none;" id="scodeTitle"><label>S 码</label><p id="scodeBox" class="promotion-content"></p></li> 
        <li style="display:none;" id="isquickBuyTitle"><label>抢购预告</label><p id="isquickBuyBox" class="promotion-content"></p></li> 
        <li style="display:none;" id="istuangouTitle"><label>定 金 团</label><p id="istuangouBox" class="promotion-content"></p></li> 
        <li style="display:none;" id="isXYuanNItemTitle"><label>套 装 价</label><p id="isXYuanNItemBox" class="promotion-content"></p></li> 
        <li style="display:none;" id="couponTitle"><label>返 券</label><p id="couponBox" class="promotion-content"></p></li> 
        <li style="display:none;" id="newcouponTitle"><label>返 券</label><p id="newcouponBox" class="promotion-content"></p></li> 
        <li style="display:none;" id="voucherTitle"><label>满 减</label><p id="voucherBox" class="promotion-content"></p></li> 
        <li style="display:none;" id="lhvoucherTitle"><label>联合满减</label><p id="lhvoucherBox" class="promotion-content"></p></li> 
        <li style="display:none;" id="taogouyhTitle"><label>套购优惠</label><p id="taogouyhBox" class="promotion-content"></p></li> 
        <li style="display:none;" id="freightfreeTitle"><label>免运费</label><p id="freightfreeBox" class="promotion-content"></p></li> 
        <li style="display:none;" id="freeCouponTitle"><label>领 券</label><p id="freeCouponBox" class="promotion-content"></p></li> 
        <li style="display: block;" id="pointTitle"><label>云 钻</label><p id="pointBox" class="promotion-content">购买可返98云钻 <a target="_blank" class="b ml10" href="http://vip.suning.com" name="item_122639559_jifen_xq">看看能换啥</a></p><p id="yunzuan" class="promotion-content" style="display: none;"></p></li> 
        <li style="display:none;" class="promo-gift" id="giftTitle"><label>赠 品</label> 
         <div id="giftBox" class="zengpin"></div></li> 
        <li style="display:none;" id="rayBuyTitle"><label>闪 购</label><p></p></li> 
        <li style="display:none;" id="govTitle"></li> 
       </ul> 
      </dd> 
     </dl> 
     <div class="proinfo-deliver"> 
      <dl> 
       <dt> 
        <span class="w2">送至</span> 
       </dt> 
       <dd> 
        <div class="l" id="sncity"> 
         <div class="ui-city"> 
          <a hidefocus="true" class="ui-city-toggle" href="###" name="item_none_dizhi_01"><em class="address-placement"><span role="20,,,上海" class="pr dn" id="provinceName">上海</span><span role="1000267,9264,01,上海" id="citybName" class="ct">上海</span><span role=",12113,01,黄浦区" class="ds" id="districtName">黄浦区</span></em><b class="arr"></b></a> 
         </div> 
        </div> 
        <div class="proinfo-deliver-tip"> 
         <strong id="c_kucun">现货</strong> 
         <span id="c_yunfei" style="display: inline;">运费 &yen;10.00</span> 
         <span id="nowProduct"></span> 
        </div> 
       </dd> 
      </dl> 
     </div> 
     <div class="clear"></div> 
     <dl style="display:none" class="proinfo-o2o"> 
      <dt>
        门店服务 
      </dt> 
      <dd> 
       <ul> 
        <li style="display:none" class="item1"> 
         <div id="btn_jsd" class="icon-wrapper"> 
          <a name="item_122639559_mdfw_jsd" class="icon" href="javascript:void(0);"></a> 
          <a name="item_122639559_mdfw_jsd" href="javascript:void(0);">急速达</a> 
         </div> <span>&middot; 下单后2小时内送达，点击查看您所在地址是否支持</span> </li> 
        <li style="display:none" class="item2"> <a name="item_122639559_mdfw_mdxh" class="icon" href="javascript:void(0);"></a> <a name="item_122639559_mdfw_mdxh" href="javascript:void(0);">门店现货</a> <span>&middot; 选择有现货的门店下单，可立即提货</span> </li> 
        <li style="display:none" class="item5"> <a name="item_122639559_mdfw_zjty" class="icon" href="javascript:void(0);"></a> <a name="item_122639559_mdfw_zjty" href="javascript:void(0);">门店样机</a> <span>&middot; 门店提供样机，可现场咨询与试用</span> </li> 
        <li style="display:none" class="item3"> <a name="item_122639559_mdfw_vgou" class="icon" href="javascript:void(0);"></a> <a name="item_122639559_mdfw_vgou" href="javascript:void(0);">苏宁V购</a> <span>&middot; 免费为您定制家电套餐，尊享门店一对一服务</span> </li> 
        <li style="display:none" class="item4"> <a name="item_122639559_mdfw_mftm" class="icon" href="javascript:void(0);"></a> <a name="item_122639559_mdfw_mftm" href="javascript:void(0);">免费贴膜</a> <span>&middot; 门店专业贴膜师将免费为您的设备贴膜</span> </li> 
        <li style="display:none" class="item6"> <a class="icon" href="javascript:void(0);"></a> <a name="item_122639559_mdfw_ddsc" href="javascript:void(0);">到店试</a> <span>&middot; 可支持到店试穿服务</span> </li> 
       </ul> 
      </dd> 
     </dl> 
     <div class="proinfo-deliver-oversea hide" style="display: none;"> 
      <dl> 
       <dt> 
        <span class="w2">配送</span> 
       </dt> 
       <dd> 
        <div class="l" id="overSeaPlace"> 
         <span>由美国发货</span> 
         <span class="ml10">海外直邮</span> 
        </div> 
        <div class="process"> 
         <div class="bg"></div> 
         <span id="overSeaArea">国际物流配送流程</span> 
         <i></i> 
        </div> 
        <div class="process-dropdown"> 
         <img width="465" height="70" src="http://res.suning.cn/project/pdsWeb/images/deliver-process1.jpg" /> 
        </div> 
       </dd> 
      </dl> 
     </div> 
     <dl> 
      <dt> 
       <span class="w2">服务</span> 
      </dt> 
      <dd id="shopNameBox"> 
       <span id="shopName">由&quot;<a href="http://shop.suning.com/70078302/index.html" target="_blank" name="item_122639559_shop_dianpu02">沃美汇美妆专营店</a>&quot;从&nbsp;&nbsp;广州市&nbsp;&nbsp;销售和发货，并提供售后服务</span> 
       <a class="ml10" href="javascript:findpassSupplier('0070078302','http://www.suning.com/emall/sprdonline_10052_14656_22265955_0070078302_.html','','');" name="item_122639559_gmq_offlinechat01" id="callme"><img alt="和我联系" src="{{ asset(_HOME_ . '/images') }}/online.gif" style="vertical-align:middle" /></a> 
      </dd> 
     </dl> 
     <div class="proinfo-serv clearfix"> 
      <span><a name="item_122639559_gmq_rxf" title="任性付" class="rxf" href="http://rxf.suning.com/" target="_blank"><i class="icon"></i>任性付</a></span> 
      <span style="display:none;" id="oversea"><a rel="nofollow" title="海外正品" class="hwzp"><i class="icon"></i>海外正品</a></span> 
      <span id="installment"><a rel="nofollow" class="fen" target="_blank" name="item_122639559_gmq_fqfk" href="http://help.suning.com/page/id-136.htm"><i class="icon"></i>分期付款</a></span> 
      <span style="display: none;"><a rel="nofollow" class="mian" href="http://help.suning.com/page/id-193.htm" target="_blank" name="item_122639559_gmq_yunfei" id="mianyunfei"><i class="icon"></i>免运费</a></span> 
      <span style="display:none;" title="支持苏宁门店、自提点自提商品，自提免收运费"><a href="http://help.suning.com/page/id-198.htm" class="ziti" target="_blank"><i rel="nofollow" class="icon"></i>自提</a></span> 
      <span style="display:none;" title="支持送装一体服务" id="szyt"><a href="http://help.suning.com/page/id-463.htm" name="item_122639559_gmq_szyt" class="song" target="_blank"><i rel="nofollow" class="icon"></i>送装一体</a></span> 
      <span style="display:none;" id="giftCard"><a rel="nofollow" title="可使用苏宁礼品卡" target="_blank" class="lpk" href="http://help.suning.com/page/id-300.htm"><i class="icon"></i>礼品卡</a></span> 
      <span style="" id="jypw"><a title="正品保障" class="bao" href="http://help.suning.com/page/id-558.htm" target="_blank"><i class="icon"></i>正品保障</a></span> 
      <span id="returnCate" title="7天无理由退换货"><a href="http://help.suning.com/page/id-205.htm" target="_blank" name="item_122639559_gmq_tuihuan" class="tui"><i class="icon"></i>7天无理由退换货</a><a class="new" href="http://help.suning.com/page/id-205.htm" target="_blank"></a></span> 
      <span style="display:none;" id="yfxian"><a rel="nofollow" class="xian"><i class="icon"></i>退运费险</a></span> 
      <span style="display:none;" id="yjhx"><a href="http://hx.suning.com" target="_blank" rel="nofollow" class="yjhx"><i class="icon"></i>以旧换新</a></span> 
      <span><a title="针对企业客户采购的专业服务" class="zqfw" target="_blank" href="http://b.suning.com"><i class="icon"></i>政企采购</a></span> 
     </div> 
     <div id="J-TZM" class="tzm"> 
      <dl style="display:none;" class="proinfo-buytype proattr-radio proinfo-hyj" id="phonedl"> 
       <dt>
         购买方式 
       </dt> 
       <dd> 
        <ul></ul> 
        <input type="hidden" /> 
       </dd> 
      </dl> 
      <dl style="display:none;" class="proinfo-buytype proattr-radio proinfo-hyj-rel" id="phoned2"> 
       <dt>
         合约类型 
       </dt> 
       <dd></dd> 
      </dl> 
      <div class="tzm-border"> 
       <div class="tip"> 
        <span>请选择您要的商品信息</span> 
       </div> 
      </div> 
      <a class="close" href="javascript:void(0);">&gt;&lt;</a> 
      <dl style="" class="proinfo-num" id="buycount"> 
       <dt>
         购买数量 
       </dt> 
       <dd> 
        <a name="item_122639559_gmq_fuhao-" class="minus minus-disable" href="javascript:void(0);"></a> 
        <input type="text" max="99" value="1" id="buyNum" /> 
        <a name="item_122639559_gmq_fuhaojia" class="plus" href="javascript:void(0);"></a> 
        <span style="display:none;" class="tip" id="productLimit">每人限购<em>99</em>件</span> 
       </dd> 
      </dl> 
     </div> 
     <dl style="display:none;" class="proinfo-yanbao proattr-check" id="yanbao"> 
      <dt>
        购买延保 
      </dt> 
      <dd> 
       <ul> 
        <li part="000000000101010356" title="延长保修1年160元" data-id="1"><a href="javascript:void(0);"><i class="icon1"></i>延长保修1年160元<i class="flag"></i></a></li> 
       </ul> 
       <a href="http://baoxian.suning.com/ins/jiaDian.htm" target="_blank" name="item_122639559_gmq_ybxq" class="b">详情&gt;</a> 
       <input type="hidden" /> 
      </dd> 
     </dl> 
     <dl style="display:none;" id="preTime" class="proinfo-cd"> 
      <dt id="beginOrEnd">
        抢购结束 
      </dt> 
      <dd> 
       <em class="d">00</em> 
       <span>天</span> 
       <em class="h">00</em> 
       <span>时</span> 
       <em class="m">00</em> 
       <span>分</span> 
       <em class="s">00</em> 
       <span>秒</span> 
       <input type="hidden" class="duration-time" value="360000" /> 
       <div style="display:none;" class="total" id="yushouCount"> 
        <span>已有</span> 
        <strong>36,958</strong> 
        <span>人成功预约</span> 
       </div> 
      </dd> 
     </dl> 
     <div class="proinfo-line"></div> 
     <dl class="proattr-result" id="selectCB" style="display: none;"> 
      <dt>
        您已选择 
      </dt> 
      <dd> 
       <span class="result-text"></span> 
       <span id="phoneText"></span> 
      </dd> 
     </dl> 
     <dl class="hide" id="bigPolyVerify" style="display: none;"></dl> 
     <div class="mainbtns clearfix"> 
      <a style="display:none;" class="btn-presell-over" id="cuxiaoEnd"><span>活动已结束</span></a> 
      <a style="display:none;" class="btn-rush-no" id="cuxiaoNoNum"><span>已抢完</span></a> 
      <a style="" href="javascript:Cart.buyNowTime();" class="btn-buynow" name="item_122639559_gmq_ljgm" id="buyNowAddCart"><span>立即购买</span></a> 
      <a href="javascript:Cart.addCart();" class="btn-addcart" name="item_122639559_gmq_buy01" id="addCart"><span>加入购物车</span></a> 
      <a style="display:none;" href="javascript:FourPage.subscribeArrivalNotice();" class="btn-inform" name="item_122639559_gmq_daohuotz01" id="tellMe"><span>到货通知</span></a> 
      <a href="javascript:FourPage.addProductFavorite();" class="btn-collect" name="item_122639559_gmq_shoucang01" id="inerestBox"><span>收藏</span></a> 
      <a href="javascript:void(0);" id="btn_mdjt" class="btn-ziti link hide">查看现货门店 &gt;</a> 
     </div> 
     <p style="display: none;" id="buyReminder" class="proinfo-memo"><span>由于此商品库存有限，请在下单后15分钟之内支付完成，手慢无哦！</span></p> 
     <p class="proinfo-memo"> <a style="" class="b btn-price-feedback" href="javascript:void(0);" name="item_122639559_gmq_jgfk" id="loginFeedBack">请告诉我们更低的价格</a> </p> 
     <div class="renxf-box"> 
      <dl id="freenessPay" class="renxf hide" style="display: none;"> 
       <dt>
         任 性 付 
       </dt> 
       <dd> 
        <p id="freenessLogin" class="renxf-des hide"><a name="item_122639559_gmq_rxfdl" href="javascript:Renxf.login();">登录</a>查看是否享有<a name="item_122639559_gmq_rxfjs" target="_blank" href="http://rxf.suning.com/">任性付</a><i class="tip">优惠（30天免息、任性分期）</i></p> 
        <p id="freenessOpen" class="renxf-des hide">使用<a name="item_122639559_gmq_rxfjs" target="_blank" href="http://rxf.suning.com/">任性付</a><i class="tip">享优惠（30天免息、任性分期）</i>，立即<a name="item_122639559_gmq_rxfqkt" target="_blank" href="http://rxf.suning.com/">开通</a></p> 
        <ul id="freenessInfo" class="renxf-list hide"> 
        </ul> 
        <ul id="freenessUnable" class="renxf-list renxf-list-disable hide"> 
        </ul> 
       </dd> 
      </dl> 
      <div class="tzm-border"> 
       <div class="tip"> 
        <span>请选择您需要的分期方式</span> 
       </div> 
      </div> 
     </div> 
     <div style="display:none;" data-type="jsonp" id="J-slide1" class="lazy-ajax proinfo-rec"> 
      <div class=" loading-holder"></div> 
     </div> 
     <div class="proinfo-side hide" id="cshopBox" style="display: block; height: 520px;"> 
      <div class="proinfo-side-inner"> 
       <div class="si-wrap si-own" id="curShop"> 
        <div class="si-flag si-flag-sj"></div> 
        <h3 class="si-shopname" id="shopMain"><span class="si-role">商家：</span><span class="si-name" id="curShopName"><a href="http://shop.suning.com/70078302/index.html" target="_blank" name="item_122639559_shop_dianpu02">沃美汇美妆专营店</a></span></h3> 
        <div class="si-main"> 
         <ul class="clearfix"> 
          <li> 
           <div class="si-rating si-fl"> 
            <span class="rating-name">商家满意度</span> 
            <span class="rating-val"><em></em></span> 
           </div> 
           <div class="si-range si-range-title si-fr"> 
            <span>与同行业相比</span> 
           </div></li> 
          <li> 
           <div class="si-rating si-fl"> 
            <span class="rating-name">商品评分：</span> 
            <span class="rating-val"><em id="gSatisfy">4.77</em>分</span> 
           </div> 
           <div id="gSatisfyP" class="si-range si-fr"> 
            <i class="si-icon icon-upper"></i> 
            <span class="rating-val">32.35%</span> 
           </div></li> 
          <li> 
           <div class="si-rating si-fl"> 
            <span class="rating-name">服务态度：</span> 
            <span class="rating-val"><em id="sSatisfy">4.77</em>分</span> 
           </div> 
           <div id="sSatisfyP" class="si-range si-fr"> 
            <i class="si-icon icon-upper"></i> 
            <span class="rating-val">34.29%</span> 
           </div></li> 
          <li> 
           <div class="si-rating si-fl"> 
            <span class="rating-name">物流速度：</span> 
            <span class="rating-val"><em id="dSatisfy">4.77</em>分</span> 
           </div> 
           <div id="dSatisfyP" class="si-range si-fr"> 
            <i class="si-icon icon-upper"></i> 
            <span class="rating-val">43.90%</span> 
           </div></li> 
         </ul> 
         <div class="si-detail"> 
          <p><span class="detail-name">公司：</span><span class="detail-val">唐山沃美汇商贸有限公司</span></p> 
          <p><span style="letter-spacing: 2px;" class="detail-name">TEL：</span><span class="detail-val">18630789229</span></p> 
         </div> 
         <div class="si-website"> 
          <a href="http://shop.suning.com/70078302/index.html" target="_blank" title="进入店铺" class="si-btn si-btn-yellow" name="item_122639559_shop_jinru02">进入店铺</a> 
          <a href="javascript:FourPage.addShopFavorite();" title="收藏店铺" class="si-btn" name="item_122639559_shop_shoucang02">收藏店铺</a> 
         </div> 
        </div> 
       </div> 
       <div class="si-wrap store-more" id="c_shop_list" style="display: none;"> 
        <h3 class="si-head" id="moreShop"><span class="si-role si-fl">更多商家</span><span class="si-name si-fr"><a href="http://www.suning.com/sellers/122639559.html" target="_blank" title="1家" name="item_122639559_shop_allshop01">1家</a></span></h3> 
        <div class="si-main"> 
         <ul class="clearfix hide" id="cslpBox" style="display: block;"> 
          <li class="first selected" rating="95%" id="shop0070078302"><a href="http://product.suning.com/0070078302/122639559.html" title="" name="item_122639559_shop_allshop0101"> 
            <div class="si-name">
              沃美汇美妆专营店 
            </div> 
            <div class="si-main-info"> 
             <div class="si-fl" id="shopNetPrice0070078302"> 
              <span class="price"><i>&yen;</i><em>328.00</em></span> 
             </div> 
             <div id="fare0070078302" class="trans-charge si-fr"> 
              <span>运费:</span> 
              <span class="price"><i>&yen;</i><em>10.00</em></span> 
             </div> 
            </div></a></li> 
         </ul> 
         <div class="more-info"> 
          <div class="info-row"> 
           <span class="row-name">评分：</span> 
           <span class="row-val star-bg"><i class="star-val"></i></span> 
          </div> 
          <div class="info-row"> 
           <span class="row-name">好评：</span> 
           <span class="row-val good-val">96%</span> 
          </div> 
          <i class="icon-arrow-right"></i> 
         </div> 
        </div> 
       </div> 
       <div style="" class="si-rec" id="J-sideRec"> 
        <div class="si-rec-head"> 
         <a href="javascript:void(0);" class="more" name="item_122639559_shop_next">换一组</a> 
         <h3>同类推荐</h3> 
        </div> 
        <ul class="si-rec-list" id="tuijianShopList"> 
         <li><a href="http://product.suning.com/0070112611/134652539.html?src=item_122639559_recliken_1-1_p_0070112611_134652539_01A_1-1_0_A" target="_blank" title="Dior/迪奥女士香水套装 两件套真我5ml+花漾5ml" name="item_122639559_recliken_1-1_p_0070112611_134652539_01A_1-1_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000134652539_1_60x60.jpg" alt="Dior/迪奥女士香水套装 两件套真我5ml+花漾5ml" /></a><p class="title"><a href="http://product.suning.com/0070112611/134652539.html?src=item_122639559_recliken_1-1_c_0070112611_134652539_01A_1-1_0_A" target="_blank" id="baoguang_recliken_1-1_0070112611_134652539_01A_1-1_0_A" name="item_122639559_recliken_1-1_c_0070112611_134652539_01A_1-1_0_A">Dior/迪奥女士香水套装 两件套真我5ml+花漾5ml</a></p><p class="price"><i>&yen;</i>99.00</p></li> 
         <li><a href="http://product.suning.com/0070082245/107033915.html?src=item_122639559_recliken_1-2_p_0070082245_107033915_01A_1-2_0_A" target="_blank" title="古驰(GUCCI)罪爱女士香水 50ml" name="item_122639559_recliken_1-2_p_0070082245_107033915_01A_1-2_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000107033915_1_60x60.jpg" alt="古驰(GUCCI)罪爱女士香水 50ml" /></a><p class="title"><a href="http://product.suning.com/0070082245/107033915.html?src=item_122639559_recliken_1-2_c_0070082245_107033915_01A_1-2_0_A" target="_blank" id="baoguang_recliken_1-2_0070082245_107033915_01A_1-2_0_A" name="item_122639559_recliken_1-2_c_0070082245_107033915_01A_1-2_0_A">古驰(GUCCI)罪爱女士香水 50ml</a></p><p class="price"><i>&yen;</i>285.00</p></li> 
         <li><a href="http://product.suning.com/0070078302/121566332.html?src=item_122639559_recliken_2-1_p_0070078302_121566332_01A_1-2_0_A" target="_blank" title="香奈儿 /CHANEL 五号 NO.5 淡香水5号女士香水50ML EDT 法国进口" name="item_122639559_recliken_2-1_p_0070078302_121566332_01A_1-2_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000121566332_1_60x60.jpg" alt="香奈儿 /CHANEL 五号 NO.5 淡香水5号女士香水50ML EDT 法国进口" /></a><p class="title"><a href="http://product.suning.com/0070078302/121566332.html?src=item_122639559_recliken_2-1_c_0070078302_121566332_01A_1-2_0_A" target="_blank" id="baoguang_recliken_2-3_0070078302_121566332_01A_1-2_0_A" name="item_122639559_recliken_2-1_c_0070078302_121566332_01A_1-2_0_A">香奈儿 /CHANEL 五号 NO.5 淡香水5号女士香水50ML EDT 法国进口</a></p><p class="price"><i>&yen;</i>458.00</p></li> 
         <li><a href="http://product.suning.com/0070082245/124928361.html?src=item_122639559_recliken_2-2_p_0070082245_124928361_01A_1-1_0_A" target="_blank" title="Burberry/巴宝莉/博柏利 红粉恋歌/粉红风格女士淡香水50ml EDT" name="item_122639559_recliken_2-2_p_0070082245_124928361_01A_1-1_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000124928361_1_60x60.jpg" alt="Burberry/巴宝莉/博柏利 红粉恋歌/粉红风格女士淡香水50ml EDT" /></a><p class="title"><a href="http://product.suning.com/0070082245/124928361.html?src=item_122639559_recliken_2-2_c_0070082245_124928361_01A_1-1_0_A" target="_blank" id="baoguang_recliken_2-4_0070082245_124928361_01A_1-1_0_A" name="item_122639559_recliken_2-2_c_0070082245_124928361_01A_1-1_0_A">Burberry/巴宝莉/博柏利 红粉恋歌/粉红风格女士淡香水50ml EDT</a></p><p class="price"><i>&yen;</i>213.00</p></li> 
         <li><a href="http://product.suning.com/0070090522/132160117.html?src=item_122639559_recliken_3-1_p_0070090522_132160117_01A_1-1_0_A" target="_blank" title="Gucci 古姿妒忌我女士香水 50ml" name="item_122639559_recliken_3-1_p_0070090522_132160117_01A_1-1_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000132160117_1_60x60.jpg" alt="Gucci 古姿妒忌我女士香水 50ml" /></a><p class="title"><a href="http://product.suning.com/0070090522/132160117.html?src=item_122639559_recliken_3-1_c_0070090522_132160117_01A_1-1_0_A" target="_blank" id="baoguang_recliken_3-5_0070090522_132160117_01A_1-1_0_A" name="item_122639559_recliken_3-1_c_0070090522_132160117_01A_1-1_0_A">Gucci 古姿妒忌我女士香水 50ml</a></p><p class="price"><i>&yen;</i>285.00</p></li> 
         <li><a href="http://product.suning.com/0070088752/126824119.html?src=item_122639559_recliken_3-2_p_0070088752_126824119_01A_1-1_0_A" target="_blank" title="CHANEL香奈儿 摩登COCO小姐 持久淡香水50ml EDT可可小姐 赠专柜礼品袋 情人节/生日礼物" name="item_122639559_recliken_3-2_p_0070088752_126824119_01A_1-1_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000126824119_1_60x60.jpg" alt="CHANEL香奈儿 摩登COCO小姐 持久淡香水50ml EDT可可小姐 赠专柜礼品袋 情人节/生日礼物" /></a><p class="title"><a href="http://product.suning.com/0070088752/126824119.html?src=item_122639559_recliken_3-2_c_0070088752_126824119_01A_1-1_0_A" target="_blank" id="baoguang_recliken_3-6_0070088752_126824119_01A_1-1_0_A" name="item_122639559_recliken_3-2_c_0070088752_126824119_01A_1-1_0_A">CHANEL香奈儿 摩登COCO小姐 持久淡香水50ml EDT可可小姐 赠专柜礼品袋 情人节/生日礼物</a></p><p class="price"><i>&yen;</i>720.00</p></li> 
        </ul> 
       </div> 
      </div> 
     </div> 
     <a href="javascript:void(0);" class="proinfo-side-switch">卖家信息<p>&lt;</p></a> 
     <!-- S码通道 --> 
     <div id="scode" class="scode-link-box hide" style="display: none;"> 
      <a class="scode-link" href="javascript:YuShou.checkScode();" title="请在下单后15分钟之内完成支付" name="cprd_122639559_gmq_smtd"></a> 
     </div> 
    </div> 
    <div style="display:none;" class="nopro"> 
     <div class="nopro-attr clearfix"> 
      <dl> 
       <dt> 
        <span class="w2">服务</span> 
       </dt> 
       <dd id="shopNameBox"> 
        <span id="shopName">&quot;苏宁&quot;销售和发货，并享受售后服务</span> 
        <a class="ml10" href="javascript:void(0);" id="callme"><img alt="在线客服" src="http://res.suning.cn/project/pdsWeb/images/online.gif" class="btn-online" /></a> 
       </dd> 
      </dl> 
     </div> 
     <div style="display:none;" class="nopro-rec proinfo-rec" id="J-slide3"> 
      <h3>此商品已下架，您可能喜欢</h3> 
      <div class="nopro-rec-list"> 
       <ul class="loading-holder" id="noPublishLike"></ul> 
      </div> 
     </div> 
     <div style="display:none;" class="nopro-rec proinfo-rec" id="J-slide2"> 
      <h3>其它类似商品</h3> 
      <div class="nopro-rec-list"> 
       <ul data-type="jsonp" class="lazy-ajax loading-holder" id="noPublish"></ul> 
      </div> 
     </div> 
    </div> 
   </div> 
   <!-- 预订流程 --> 
   <div class="presell-process hide" id="bookProcedure"> 
    <ul> 
     <li class="step-1 current" id="depositTime"> <i class="icon-1"></i> 
      <dl> 
       <dt>
         付定金 
       </dt> 
       <dd></dd> 
       <dd></dd> 
      </dl> </li> 
     <li class="sep">&gt;</li> 
     <li class="step-2"> <i class="icon-2"></i> 
      <dl> 
       <dt>
         商家备货 
       </dt> 
      </dl> </li> 
     <li class="sep">&gt;</li> 
     <li class="step-3" id="balanceTime"> <i class="icon-3"></i> 
      <dl> 
       <dt>
         付尾款 
       </dt> 
       <dd></dd> 
       <dd>
         结束：6月30日23:59 
       </dd> 
      </dl> </li> 
     <li class="sep">&gt;</li> 
     <li class="step-4" id="sendTime"> <i class="icon-4"></i> 
      <dl> 
       <dt>
         发货 
       </dt> 
       <dd>
         预计7月1日发货 
       </dd> 
      </dl> </li> 
    </ul> 
   </div> 
  </div> 
  <div class="imgview"> 
   <div class="imgview-head">
     查看大图 
   </div> 
   <div class="imgview-main"> 
    <img /> 
    <div class="mask-l"></div> 
    <div class="mask-r"></div> 
    <div class="imgview-count"> 
     <em>1</em>/ 
     <span>5</span> 
    </div> 
   </div> 
   <div class="imgview-thumb imgview-thumb-single"> 
    <a class="btn-dir prev prev-disable" href="javascript:void(0);"></a> 
    <div class="imgview-thumb-main"> 
     <ul style="top: 0px;"> 
      <li class="current"><a href="javascript:void(0);"><img src3="{{ asset(_HOME_ . '/images') }}/000000000122639559_1_100x100.jpg" src-large="{{ asset(_HOME_ . '/images') }}/000000000122639559_1_800x800.jpg" alt="" /></a></li> 
      <li class=""><a href="javascript:void(0);"><img src3="{{ asset(_HOME_ . '/images') }}/000000000122639559_2_100x100.jpg" src-large="{{ asset(_HOME_ . '/images') }}/000000000122639559_2_800x800.jpg" alt="" /></a></li> 
      <li class=""><a href="javascript:void(0);"><img src3="{{ asset(_HOME_ . '/images') }}/000000000122639559_3_100x100.jpg" src-large="{{ asset(_HOME_ . '/images') }}/000000000122639559_3_800x800.jpg" alt="" /></a></li> 
      <li class=""><a href="javascript:void(0);"><img src3="{{ asset(_HOME_ . '/images') }}/000000000122639559_4_100x100.jpg" src-large="{{ asset(_HOME_ . '/images') }}/000000000122639559_4_800x800.jpg" alt="" /></a></li> 
      <li class=""><a href="javascript:void(0);"><img src3="{{ asset(_HOME_ . '/images') }}/000000000122639559_5_100x100.jpg" src-large="{{ asset(_HOME_ . '/images') }}/000000000122639559_5_800x800.jpg" alt="" /></a></li> 
     </ul> 
    </div> 
    <a class="btn-dir next" href="javascript:void(0);"></a> 
   </div> 
   <a class="close" href="javascript:void(0);">&times;</a> 
  </div> 
  <div style="display:none;" class="wrapper tiein-box mt15" id="listProContent"> 
   <div class="tabarea"> 
    <ul class="tabarea-items"> 
     <li class="current" rel="#J-tieIn" style="display: none;"><a href="javascript:void(0);">推荐搭配</a></li> 
    </ul> 
    <div class="tiein-tzm-pop"> 
     <div class="title">
       请选择商品规格 
     </div> 
     <div class="main"></div> 
     <div class="tip"> 
      <span class="normal"></span> 
      <span class="error"></span> 
     </div> 
     <div class="handle"> 
      <a class="btn-ok" href="javascript:void(0);">确 认</a> 
      <a class="btn-cancel" href="javascript:void(0);">取 消</a> 
     </div> 
     <i class="arr"></i> 
     <a href="javascript:void(0);" class="close">&times;</a> 
    </div> 
    <div data-type="function" class="lazy-ajax tiein tabarea-content" id="J-tieIn" style="display: none;"></div> 
   </div> 
  </div> 
  <div class="hide" id="win_o2o"> 
   <div class="container"> 
    <div class="title"> 
     <h3>门店服务</h3> 
    </div> 
    <a title="关闭" class="btn close" href="javascript:;"><i class="gt">&gt;</i><i class="lt">&lt;</i></a> 
    <div class="content"> 
     <!-- 弹窗主要内容 --> 
     <div class="o2o-service"> 
      <dl class="areas"> 
       <dt>
         区域： 
       </dt> 
       <dd> 
        <ul id="o2o_service_ul_districtList" class="clearfix"> 
         <li id="o2o_service_clone_li_districtId" name="item_122639559_mdfw_quanbu" districtid="" class="current"> <a href="javascript:void(0);">全部</a> </li> 
        </ul> 
        <a href="javascript:void(0);" class="more">更多<i></i></a> 
       </dd> 
      </dl> 
      <dl class="services"> 
       <dt>
         服务： 
       </dt> 
       <dd> 
        <ul id="o2o_service_store_service_ul"> 
         <li style="display:none" id="win_o2o_spotGoods"><a name="item_122639559_mdfw_mdxh01" href="javascript:void(0);">门店现货</a> </li> 
         <li style="display:none" id="win_o2o_realExperience"><a name="item_122639559_mdfw_zjty01" href="javascript:void(0);">门店样机</a> </li> 
         <li style="display:none" id="win_o2o_vBuy"><a name="item_122639559_mdfw_vgou01" href="javascript:void(0);">苏宁V购</a> </li> 
         <li style="display:none" id="win_o2o_freeFilm"><a name="item_122639559_mdfw_mftm01" href="javascript:void(0);">免费贴膜</a> </li> 
         <li style="display:none" id="win_o2o_guideShop"><a name="item_122639559_mdfw_ddsc01" href="javascript:void(0);">到店试</a> </li> 
        </ul> 
       </dd> 
      </dl> 
      <div class="o2o-service-main o2o-com-loading"> 
       <ul> 
        <li style="display:none" id="o2o-service-clone-storeList-li"> 
         <div style="display:none" class="handle"> 
          <a target="_blank" href="javascript:;">&gt;</a> 
         </div> <h5><i class="icon"></i><a target="_blank" href="###"></a></h5> <p title="完整内容">地址：</p> </li> 
       </ul> 
       <div class="watermark"></div> 
      </div> 
      <div class="no-data no-shop hide">
        很抱歉，该区域暂无门店支持V购服务，正努力开放中••• 
      </div> 
      <div class="no-data no-goods hide">
        很抱歉，该区域暂无门店有现货，正努力补货中••• 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div id="J-overlay" class="overlay"> 
   <div class="overlay-main"></div> 
  </div> 
  <script type="text/javascript"> 
		(function(){
		   	 FourPage.initialize();
		}( window ));
	 </script> 
  <div class="wrapper mt15"> 
   <div class="procon-side"> 
    <div data-type="jsonp" class="lazy-ajax area loading-holder mt10" id="buyAlsoBuy" style="display: none;"> 
     <div class=" loading-holder"></div> 
    </div> 
    <div id="view_Also_ViewProduct" class="area mt10 hide" style="display: block;"> 
     <div class="area-head"> 
      <h3>看了还看</h3> 
     </div> 
     <ul id="vav" class="exprec"> 
      <li><a title="香奈儿 chanel 粉色邂逅 柔情女士淡香水 持久 茉莉淡雅香氛情人礼物 50ml 粉色邂逅 EDT" href="http://product.suning.com/0070127699/140556485.html?src=item_122639559_recviewviewn_1-1_p_0070127699_140556485_01A_1-1_0_A" name="item_122639559_recviewviewn_1-1_p_0070127699_140556485_01A_1-1_0_A" target="_blank"><img src="{{ asset(_HOME_ . '/images') }}/000000000140556485_1_120x120.jpg" alt="香奈儿 chanel 粉色邂逅 柔情女士淡香水 持久 茉莉淡雅香氛情人礼物 50ml 粉色邂逅 EDT" class="image" /></a><p class="title"><a href="http://product.suning.com/0070127699/140556485.html?src=item_122639559_recviewviewn_1-1_c_0070127699_140556485_01A_1-1_0_A" title="香奈儿 chanel 粉色邂逅 柔情女士淡香水 持久 茉莉淡雅香氛情人礼物 50ml 粉色邂逅 EDT" name="item_122639559_recviewviewn_1-1_c_0070127699_140556485_01A_1-1_0_A" id="baoguang_recviewviewn_1-1_0070127699_140556485_01A_1-1_0_A" target="_blank">香奈儿 chanel 粉色邂逅 柔情女士淡香水 持久 茉莉淡雅香氛情人礼物 50ml 粉色邂逅 EDT</a></p><p class="price"><span><i>&yen; </i>680.00</span></p></li> 
      <li><a title="香奈儿 /CHANEL 五号 NO.5 淡香水5号女士香水50ML EDT 法国进口" href="http://product.suning.com/0070078302/121566332.html?src=item_122639559_recviewviewn_1-2_p_0070078302_121566332_01A_1-1_0_A" name="item_122639559_recviewviewn_1-2_p_0070078302_121566332_01A_1-1_0_A" target="_blank"><img src="{{ asset(_HOME_ . '/images') }}/000000000121566332_1_120x120.jpg" alt="香奈儿 /CHANEL 五号 NO.5 淡香水5号女士香水50ML EDT 法国进口" class="image" /></a><p class="title"><a href="http://product.suning.com/0070078302/121566332.html?src=item_122639559_recviewviewn_1-2_c_0070078302_121566332_01A_1-1_0_A" title="香奈儿 /CHANEL 五号 NO.5 淡香水5号女士香水50ML EDT 法国进口" name="item_122639559_recviewviewn_1-2_c_0070078302_121566332_01A_1-1_0_A" id="baoguang_recviewviewn_1-2_0070078302_121566332_01A_1-1_0_A" target="_blank">香奈儿 /CHANEL 五号 NO.5 淡香水5号女士香水50ML EDT 法国进口</a></p><p class="price"><span><i>&yen; </i>458.00</span></p></li> 
      <li><a title="Dior/迪奥女士香水礼盒套装 三件套真我5ml+魅惑5ml+花漾5ml" href="http://product.suning.com/0070112611/134652726.html?src=item_122639559_recviewviewn_1-3_p_0070112611_134652726_01A_1-1_0_A" name="item_122639559_recviewviewn_1-3_p_0070112611_134652726_01A_1-1_0_A" target="_blank"><img src="{{ asset(_HOME_ . '/images') }}/000000000134652726_1_120x120.jpg" alt="Dior/迪奥女士香水礼盒套装 三件套真我5ml+魅惑5ml+花漾5ml" class="image" /></a><p class="title"><a href="http://product.suning.com/0070112611/134652726.html?src=item_122639559_recviewviewn_1-3_c_0070112611_134652726_01A_1-1_0_A" title="Dior/迪奥女士香水礼盒套装 三件套真我5ml+魅惑5ml+花漾5ml" name="item_122639559_recviewviewn_1-3_c_0070112611_134652726_01A_1-1_0_A" id="baoguang_recviewviewn_1-3_0070112611_134652726_01A_1-1_0_A" target="_blank">Dior/迪奥女士香水礼盒套装 三件套真我5ml+魅惑5ml+花漾5ml</a></p><p class="price"><span><i>&yen; </i>138.00</span></p></li> 
      <li><a title="CHANEL香奈儿 摩登可可小姐香水 50ML COCO小姐香水 EDP 官方授权/进口 情人节/生日礼物" href="http://product.suning.com/0070088752/126824010.html?src=item_122639559_recviewviewn_1-4_p_0070088752_126824010_01A_1-1_0_A" name="item_122639559_recviewviewn_1-4_p_0070088752_126824010_01A_1-1_0_A" target="_blank"><img src="{{ asset(_HOME_ . '/images') }}/000000000126824010_1_120x120.jpg" alt="CHANEL香奈儿 摩登可可小姐香水 50ML COCO小姐香水 EDP 官方授权/进口 情人节/生日礼物" class="image" /></a><p class="title"><a href="http://product.suning.com/0070088752/126824010.html?src=item_122639559_recviewviewn_1-4_c_0070088752_126824010_01A_1-1_0_A" title="CHANEL香奈儿 摩登可可小姐香水 50ML COCO小姐香水 EDP 官方授权/进口 情人节/生日礼物" name="item_122639559_recviewviewn_1-4_c_0070088752_126824010_01A_1-1_0_A" id="baoguang_recviewviewn_1-4_0070088752_126824010_01A_1-1_0_A" target="_blank">CHANEL香奈儿 摩登可可小姐香水 50ML COCO小姐香水 EDP 官方授权/进口 情人节/生日礼物</a></p><p class="price"><span><i>&yen; </i>930.00</span></p></li> 
      <li><a title="菲拉格慕FERRAGAMO 甜心魔力女士香水 30ml" href="http://product.suning.com/0070088542/132210282.html?src=item_122639559_recviewviewn_1-5_p_0070088542_132210282_01A_1-1_0_A" name="item_122639559_recviewviewn_1-5_p_0070088542_132210282_01A_1-1_0_A" target="_blank"><img src="{{ asset(_HOME_ . '/images') }}/000000000132210282_1_120x120.jpg" alt="菲拉格慕FERRAGAMO 甜心魔力女士香水 30ml" class="image" /></a><p class="title"><a href="http://product.suning.com/0070088542/132210282.html?src=item_122639559_recviewviewn_1-5_c_0070088542_132210282_01A_1-1_0_A" title="菲拉格慕FERRAGAMO 甜心魔力女士香水 30ml" name="item_122639559_recviewviewn_1-5_c_0070088542_132210282_01A_1-1_0_A" id="baoguang_recviewviewn_1-5_0070088542_132210282_01A_1-1_0_A" target="_blank">菲拉格慕FERRAGAMO 甜心魔力女士香水 30ml</a></p><p class="price"><span><i>&yen; </i>89.00</span></p></li> 
     </ul> 
    </div> 
    <div id="view_Also_BuyProduct" class="area mt10 hide" style="display: block;"> 
     <div class="area-head"> 
      <h3>看了最终买</h3> 
     </div> 
     <ul id="vab" class="exprec"> 
      <li><a title="Bvlgari 宝格丽 花舞轻盈紫晶纯香女士淡香水 40ml 进口" href="http://product.suning.com/0070078302/137756957.html?src=item_122639559_recviewbuyn_1-1_p_0070078302_137756957_01A_1-2_0_A" name="item_122639559_recviewbuyn_1-1_p_0070078302_137756957_01A_1-2_0_A" target="_blank"><img src="{{ asset(_HOME_ . '/images') }}/000000000137756957_1_120x120.jpg" alt="Bvlgari 宝格丽 花舞轻盈紫晶纯香女士淡香水 40ml 进口" class="image" /></a><p class="title"><a href="http://product.suning.com/0070078302/137756957.html?src=item_122639559_recviewbuyn_1-1_c_0070078302_137756957_01A_1-2_0_A" title="Bvlgari 宝格丽 花舞轻盈紫晶纯香女士淡香水 40ml 进口" name="item_122639559_recviewbuyn_1-1_c_0070078302_137756957_01A_1-2_0_A" id="baoguang_recviewbuyn_1-1_0070078302_137756957_01A_1-2_0_A" target="_blank">Bvlgari 宝格丽 花舞轻盈紫晶纯香女士淡香水 40ml 进口</a></p><p class="price"><span><i>&yen; </i>218.00</span></p></li> 
      <li><a title="伊法芙兰EVAFLOR 威士忌运动款男士淡香水 法国原装进口" href="http://product.suning.com/0070126748/140293870.html?src=item_122639559_recviewbuyn_1-2_p_0070126748_140293870_01A_1-2_0_A" name="item_122639559_recviewbuyn_1-2_p_0070126748_140293870_01A_1-2_0_A" target="_blank"><img src="{{ asset(_HOME_ . '/images') }}/000000000140293870_1_120x120.jpg" alt="伊法芙兰EVAFLOR 威士忌运动款男士淡香水 法国原装进口" class="image" /></a><p class="title"><a href="http://product.suning.com/0070126748/140293870.html?src=item_122639559_recviewbuyn_1-2_c_0070126748_140293870_01A_1-2_0_A" title="伊法芙兰EVAFLOR 威士忌运动款男士淡香水 法国原装进口" name="item_122639559_recviewbuyn_1-2_c_0070126748_140293870_01A_1-2_0_A" id="baoguang_recviewbuyn_1-2_0070126748_140293870_01A_1-2_0_A" target="_blank">伊法芙兰EVAFLOR 威士忌运动款男士淡香水 法国原装进口</a></p><p class="price"><span><i>&yen; </i>98.00</span></p></li> 
      <li><a title="古驰(GUCCI)罪爱女士香水 50ml" href="http://product.suning.com/0070082245/107033915.html?src=item_122639559_recviewbuyn_1-3_p_0070082245_107033915_01A_1-2_0_A" name="item_122639559_recviewbuyn_1-3_p_0070082245_107033915_01A_1-2_0_A" target="_blank"><img src="{{ asset(_HOME_ . '/images') }}/000000000107033915_1_120x120.jpg" alt="古驰(GUCCI)罪爱女士香水 50ml" class="image" /></a><p class="title"><a href="http://product.suning.com/0070082245/107033915.html?src=item_122639559_recviewbuyn_1-3_c_0070082245_107033915_01A_1-2_0_A" title="古驰(GUCCI)罪爱女士香水 50ml" name="item_122639559_recviewbuyn_1-3_c_0070082245_107033915_01A_1-2_0_A" id="baoguang_recviewbuyn_1-3_0070082245_107033915_01A_1-2_0_A" target="_blank">古驰(GUCCI)罪爱女士香水 50ml</a></p><p class="price"><span><i>&yen; </i>285.00</span></p></li> 
      <li><a title="香奈儿粉红邂逅香水2ml" href="http://product.suning.com/0070122357/139511096.html?src=item_122639559_recviewbuyn_1-4_p_0070122357_139511096_01A_1-2_0_A" name="item_122639559_recviewbuyn_1-4_p_0070122357_139511096_01A_1-2_0_A" target="_blank"><img src="{{ asset(_HOME_ . '/images') }}/000000000139511096_1_120x120.jpg" alt="香奈儿粉红邂逅香水2ml" class="image" /></a><p class="title"><a href="http://product.suning.com/0070122357/139511096.html?src=item_122639559_recviewbuyn_1-4_c_0070122357_139511096_01A_1-2_0_A" title="香奈儿粉红邂逅香水2ml" name="item_122639559_recviewbuyn_1-4_c_0070122357_139511096_01A_1-2_0_A" id="baoguang_recviewbuyn_1-4_0070122357_139511096_01A_1-2_0_A" target="_blank">香奈儿粉红邂逅香水2ml</a></p><p class="price"><span><i>&yen; </i>29.00</span></p></li> 
     </ul> 
    </div> 
    <div data-type="jsonp" id="hotRank" class="lazy-ajax area mt10"> 
     <div class="area-head"> 
      <h3>香水排行榜</h3> 
     </div> 
     <ul id="hot_sort" class="toppro-tab clearfix"> 
      <li rel="#J-topPro-1" class="current"><a href="javascript:void(0);" name="item_122639559_tab_price">同价位</a></li> 
      <li rel="#J-topPro-2"><a href="javascript:void(0);" name="item_122639559_tab_pingpai">同品牌</a></li> 
      <li rel="#J-topPro-3"><a href="javascript:void(0);" name="item_122639559_tab_cata">同类别</a></li> 
     </ul> 
     <ul style="display:block;" id="J-topPro-1" class="toppro-list"> 
      <li><a title="古驰GUCCi花之舞淡香水30ml" href="http://product.suning.com/0070082245/102458184.html?src=item_122639559_rectjwn_1-1_p_0070082245_102458184_5_1-4_0_A" target="_blank" name="item_122639559_rectjwn_1-1_p_0070082245_102458184_5_1-4_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000102458184_1_60x60.jpg" alt="古驰GUCCi花之舞淡香水30ml" /></a><p class="title"><a href="http://product.suning.com/0070082245/102458184.html?src=item_122639559_rectjwn_1-1_c_0070082245_102458184_5_1-4_0_A" target="_blank" title="古驰GUCCi花之舞淡香水30ml" name="item_122639559_rectjwn_1-1_c_0070082245_102458184_5_1-4_0_A" id="baoguang_rectjwn_1-1_0070082245_102458184_5_1-4_0_A">古驰GUCCi花之舞淡香水30ml</a></p><p class="price"><i>&yen;</i>238.00</p><span class="num highlight">1</span></li> 
      <li><a title="BVLGARI宝格丽晶莹纯香女士香水65ml" href="http://product.suning.com/0070082245/103723328.html?src=item_122639559_rectjwn_1-2_p_0070082245_103723328_5_1-4_0_A" target="_blank" name="item_122639559_rectjwn_1-2_p_0070082245_103723328_5_1-4_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000103723328_1_60x60.jpg" alt="BVLGARI宝格丽晶莹纯香女士香水65ml" /></a><p class="title"><a href="http://product.suning.com/0070082245/103723328.html?src=item_122639559_rectjwn_1-2_c_0070082245_103723328_5_1-4_0_A" target="_blank" title="BVLGARI宝格丽晶莹纯香女士香水65ml" name="item_122639559_rectjwn_1-2_c_0070082245_103723328_5_1-4_0_A" id="baoguang_rectjwn_1-2_0070082245_103723328_5_1-4_0_A">BVLGARI宝格丽晶莹纯香女士香水65ml</a></p><p class="price"><i>&yen;</i>296.00<span class="label">促</span></p><span class="num highlight">2</span></li> 
      <li><a title="阿曼尼(ARMANI)CODE EDP 密码印记女士香水(魅力花香调 )30ML" href="http://product.suning.com/0070069341/106230615.html?src=item_122639559_rectjwn_1-3_p_0070069341_106230615_5_1-4_0_A" target="_blank" name="item_122639559_rectjwn_1-3_p_0070069341_106230615_5_1-4_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000106230615_1_60x60.jpg" alt="阿曼尼(ARMANI)CODE EDP 密码印记女士香水(魅力花香调 )30ML" /></a><p class="title"><a href="http://product.suning.com/0070069341/106230615.html?src=item_122639559_rectjwn_1-3_c_0070069341_106230615_5_1-4_0_A" target="_blank" title="阿曼尼(ARMANI)CODE EDP 密码印记女士香水(魅力花香调 )30ML" name="item_122639559_rectjwn_1-3_c_0070069341_106230615_5_1-4_0_A" id="baoguang_rectjwn_1-3_0070069341_106230615_5_1-4_0_A">阿曼尼(ARMANI)CODE EDP 密码印记女士香水(魅力花香调 )30ML</a></p><p class="price"><i>&yen;</i>298.00<span class="label">促</span></p><span class="num highlight">3</span></li> 
      <li><a title="Armani Code EDP阿玛尼密码印记女士淡香精20ML 2747" href="http://product.suning.com/0070069341/106236324.html?src=item_122639559_rectjwn_1-4_p_0070069341_106236324_5_1-4_0_A" target="_blank" name="item_122639559_rectjwn_1-4_p_0070069341_106236324_5_1-4_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000106236324_1_60x60.jpg" alt="Armani Code EDP阿玛尼密码印记女士淡香精20ML 2747" /></a><p class="title"><a href="http://product.suning.com/0070069341/106236324.html?src=item_122639559_rectjwn_1-4_c_0070069341_106236324_5_1-4_0_A" target="_blank" title="Armani Code EDP阿玛尼密码印记女士淡香精20ML 2747" name="item_122639559_rectjwn_1-4_c_0070069341_106236324_5_1-4_0_A" id="baoguang_rectjwn_1-4_0070069341_106236324_5_1-4_0_A">Armani Code EDP阿玛尼密码印记女士淡香精20ML 2747</a></p><p class="price"><i>&yen;</i>298.00<span class="label">促</span></p><span class="num">4</span></li> 
      <li><a title="宝格丽(BVLGARI) 天之骄女亚洲典藏版女士香水 简装EDT 65ml" href="http://product.suning.com/0070069341/106252429.html?src=item_122639559_rectjwn_1-5_p_0070069341_106252429_5_1-4_0_A" target="_blank" name="item_122639559_rectjwn_1-5_p_0070069341_106252429_5_1-4_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000106252429_1_60x60.jpg" alt="宝格丽(BVLGARI) 天之骄女亚洲典藏版女士香水 简装EDT 65ml" /></a><p class="title"><a href="http://product.suning.com/0070069341/106252429.html?src=item_122639559_rectjwn_1-5_c_0070069341_106252429_5_1-4_0_A" target="_blank" title="宝格丽(BVLGARI) 天之骄女亚洲典藏版女士香水 简装EDT 65ml" name="item_122639559_rectjwn_1-5_c_0070069341_106252429_5_1-4_0_A" id="baoguang_rectjwn_1-5_0070069341_106252429_5_1-4_0_A">宝格丽(BVLGARI) 天之骄女亚洲典藏版女士香水 简装EDT 65ml</a></p><p class="price"><i>&yen;</i>298.00<span class="label">促</span></p><span class="num">5</span></li> 
      <li><a title="波士(BOSS) 光采女人/风尚女士香水(木质麝香调)50ML" href="http://product.suning.com/0070069341/106235025.html?src=item_122639559_rectjwn_1-6_p_0070069341_106235025_5_1-4_0_A" target="_blank" name="item_122639559_rectjwn_1-6_p_0070069341_106235025_5_1-4_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000106235025_1_60x60.jpg" alt="波士(BOSS) 光采女人/风尚女士香水(木质麝香调)50ML" /></a><p class="title"><a href="http://product.suning.com/0070069341/106235025.html?src=item_122639559_rectjwn_1-6_c_0070069341_106235025_5_1-4_0_A" target="_blank" title="波士(BOSS) 光采女人/风尚女士香水(木质麝香调)50ML" name="item_122639559_rectjwn_1-6_c_0070069341_106235025_5_1-4_0_A" id="baoguang_rectjwn_1-6_0070069341_106235025_5_1-4_0_A">波士(BOSS) 光采女人/风尚女士香水(木质麝香调)50ML</a></p><p class="price"><i>&yen;</i>280.00<span class="label">促</span></p><span class="num">6</span></li> 
     </ul> 
     <ul style="display:none;" id="J-topPro-2" class="toppro-list hide"> 
      <li><a title="香奈儿 chanel 粉色邂逅 柔情女士淡香水 持久 茉莉淡雅香氛情人礼物 50ml 粉色邂逅 EDT" href="http://product.suning.com/0070127699/140556485.html?src=item_122639559_rectppn_1-1_p_0070127699_140556485_01A_1-5_0_A" target="_blank" name="item_122639559_rectppn_1-1_p_0070127699_140556485_01A_1-5_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000140556485_1_60x60.jpg" alt="香奈儿 chanel 粉色邂逅 柔情女士淡香水 持久 茉莉淡雅香氛情人礼物 50ml 粉色邂逅 EDT" /></a><p class="title"><a href="http://product.suning.com/0070127699/140556485.html?src=item_122639559_rectppn_1-1_c_0070127699_140556485_01A_1-5_0_A" target="_blank" title="香奈儿 chanel 粉色邂逅 柔情女士淡香水 持久 茉莉淡雅香氛情人礼物 50ml 粉色邂逅 EDT" name="item_122639559_rectppn_1-1_c_0070127699_140556485_01A_1-5_0_A" id="baoguang_rectppn_1-1_0070127699_140556485_01A_1-5_0_A">香奈儿 chanel 粉色邂逅 柔情女士淡香水 持久 茉莉淡雅香氛情人礼物 50ml 粉色邂逅 EDT</a></p><p class="price"><i>&yen;</i>680.00</p><span class="num highlight">1</span></li> 
      <li><a title="香奈儿 /CHANEL 五号 NO.5 淡香水5号女士香水50ML EDT 法国进口" href="http://product.suning.com/0070078302/121566332.html?src=item_122639559_rectppn_1-2_p_0070078302_121566332_01A_1-5_0_A" target="_blank" name="item_122639559_rectppn_1-2_p_0070078302_121566332_01A_1-5_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000121566332_1_60x60.jpg" alt="香奈儿 /CHANEL 五号 NO.5 淡香水5号女士香水50ML EDT 法国进口" /></a><p class="title"><a href="http://product.suning.com/0070078302/121566332.html?src=item_122639559_rectppn_1-2_c_0070078302_121566332_01A_1-5_0_A" target="_blank" title="香奈儿 /CHANEL 五号 NO.5 淡香水5号女士香水50ML EDT 法国进口" name="item_122639559_rectppn_1-2_c_0070078302_121566332_01A_1-5_0_A" id="baoguang_rectppn_1-2_0070078302_121566332_01A_1-5_0_A">香奈儿 /CHANEL 五号 NO.5 淡香水5号女士香水50ML EDT 法国进口</a></p><p class="price"><i>&yen;</i>458.00</p><span class="num highlight">2</span></li> 
      <li><a title="香奈儿粉红邂逅香水2ml" href="http://product.suning.com/0070122357/139511096.html?src=item_122639559_rectppn_1-3_p_0070122357_139511096_01A_1-5_0_A" target="_blank" name="item_122639559_rectppn_1-3_p_0070122357_139511096_01A_1-5_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000139511096_1_60x60.jpg" alt="香奈儿粉红邂逅香水2ml" /></a><p class="title"><a href="http://product.suning.com/0070122357/139511096.html?src=item_122639559_rectppn_1-3_c_0070122357_139511096_01A_1-5_0_A" target="_blank" title="香奈儿粉红邂逅香水2ml" name="item_122639559_rectppn_1-3_c_0070122357_139511096_01A_1-5_0_A" id="baoguang_rectppn_1-3_0070122357_139511096_01A_1-5_0_A">香奈儿粉红邂逅香水2ml</a></p><p class="price"><i>&yen;</i>29.00</p><span class="num highlight">3</span></li> 
      <li><a title="CHANEL香奈儿 摩登可可小姐香水 50ML COCO小姐香水 EDP 官方授权/进口 情人节/生日礼物" href="http://product.suning.com/0070088752/126824010.html?src=item_122639559_rectppn_1-4_p_0070088752_126824010_01A_1-5_0_A" target="_blank" name="item_122639559_rectppn_1-4_p_0070088752_126824010_01A_1-5_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000126824010_1_60x60.jpg" alt="CHANEL香奈儿 摩登可可小姐香水 50ML COCO小姐香水 EDP 官方授权/进口 情人节/生日礼物" /></a><p class="title"><a href="http://product.suning.com/0070088752/126824010.html?src=item_122639559_rectppn_1-4_c_0070088752_126824010_01A_1-5_0_A" target="_blank" title="CHANEL香奈儿 摩登可可小姐香水 50ML COCO小姐香水 EDP 官方授权/进口 情人节/生日礼物" name="item_122639559_rectppn_1-4_c_0070088752_126824010_01A_1-5_0_A" id="baoguang_rectppn_1-4_0070088752_126824010_01A_1-5_0_A">CHANEL香奈儿 摩登可可小姐香水 50ML COCO小姐香水 EDP 官方授权/进口 情人节/生日礼物</a></p><p class="price"><i>&yen;</i>930.00</p><span class="num">4</span></li> 
      <li><a title="CHANEL香奈儿 摩登COCO小姐 持久淡香水50ml EDT可可小姐 赠专柜礼品袋 情人节/生日礼物" href="http://product.suning.com/0070088752/126824119.html?src=item_122639559_rectppn_1-5_p_0070088752_126824119_01A_1-5_0_A" target="_blank" name="item_122639559_rectppn_1-5_p_0070088752_126824119_01A_1-5_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000126824119_1_60x60.jpg" alt="CHANEL香奈儿 摩登COCO小姐 持久淡香水50ml EDT可可小姐 赠专柜礼品袋 情人节/生日礼物" /></a><p class="title"><a href="http://product.suning.com/0070088752/126824119.html?src=item_122639559_rectppn_1-5_c_0070088752_126824119_01A_1-5_0_A" target="_blank" title="CHANEL香奈儿 摩登COCO小姐 持久淡香水50ml EDT可可小姐 赠专柜礼品袋 情人节/生日礼物" name="item_122639559_rectppn_1-5_c_0070088752_126824119_01A_1-5_0_A" id="baoguang_rectppn_1-5_0070088752_126824119_01A_1-5_0_A">CHANEL香奈儿 摩登COCO小姐 持久淡香水50ml EDT可可小姐 赠专柜礼品袋 情人节/生日礼物</a></p><p class="price"><i>&yen;</i>720.00</p><span class="num">5</span></li> 
      <li><a title="香奈儿邂逅柔情淡香水(粉邂)50ml" href="http://product.suning.com/0070107383/135615205.html?src=item_122639559_rectppn_1-6_p_0070107383_135615205_01A_1-5_0_A" target="_blank" name="item_122639559_rectppn_1-6_p_0070107383_135615205_01A_1-5_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000135615205_1_60x60.jpg" alt="香奈儿邂逅柔情淡香水(粉邂)50ml" /></a><p class="title"><a href="http://product.suning.com/0070107383/135615205.html?src=item_122639559_rectppn_1-6_c_0070107383_135615205_01A_1-5_0_A" target="_blank" title="香奈儿邂逅柔情淡香水(粉邂)50ml" name="item_122639559_rectppn_1-6_c_0070107383_135615205_01A_1-5_0_A" id="baoguang_rectppn_1-6_0070107383_135615205_01A_1-5_0_A">香奈儿邂逅柔情淡香水(粉邂)50ml</a></p><p class="price"><i>&yen;</i>830.00</p><span class="num">6</span></li> 
     </ul> 
     <ul style="display:none;" id="J-topPro-3" class="toppro-list hide"> 
      <li><a title="Dior/迪奥女士香水礼盒套装 三件套真我5ml+魅惑5ml+花漾5ml" href="http://product.suning.com/0070112611/134652726.html?src=item_122639559_rectlbn_1-1_p_0070112611_134652726_01A_1-6_0_A" target="_blank" name="item_122639559_rectlbn_1-1_p_0070112611_134652726_01A_1-6_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000134652726_1_60x60.jpg" alt="Dior/迪奥女士香水礼盒套装 三件套真我5ml+魅惑5ml+花漾5ml" /></a><p class="title"><a href="http://product.suning.com/0070112611/134652726.html?src=item_122639559_rectlbn_1-1_c_0070112611_134652726_01A_1-6_0_A" target="_blank" title="Dior/迪奥女士香水礼盒套装 三件套真我5ml+魅惑5ml+花漾5ml" name="item_122639559_rectlbn_1-1_c_0070112611_134652726_01A_1-6_0_A" id="baoguang_rectlbn_1-1_0070112611_134652726_01A_1-6_0_A">Dior/迪奥女士香水礼盒套装 三件套真我5ml+魅惑5ml+花漾5ml</a></p><p class="price"><i>&yen;</i>138.00</p><span class="num highlight">1</span></li> 
      <li><a title="碧欧泉男士驭能香氛55ml" href="http://product.suning.com/0000000000/104032648.html?src=item_122639559_rectlbn_1-2_p_0000000000_104032648_01A_1-6_0_A" target="_blank" name="item_122639559_rectlbn_1-2_p_0000000000_104032648_01A_1-6_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000104032648_1_60x60.jpg" alt="碧欧泉男士驭能香氛55ml" /></a><p class="title"><a href="http://product.suning.com/0000000000/104032648.html?src=item_122639559_rectlbn_1-2_c_0000000000_104032648_01A_1-6_0_A" target="_blank" title="碧欧泉男士驭能香氛55ml" name="item_122639559_rectlbn_1-2_c_0000000000_104032648_01A_1-6_0_A" id="baoguang_rectlbn_1-2_0000000000_104032648_01A_1-6_0_A">碧欧泉男士驭能香氛55ml</a></p><p class="price"><i>&yen;</i>394.30</p><span class="num highlight">2</span></li> 
      <li><a title="竹萃集传奇香水女持久淡香清新香气持久留香桂花绿茶琥珀" href="http://product.suning.com/0070096997/129466102.html?src=item_122639559_rectlbn_1-3_p_0070096997_129466102_01A_1-6_0_A" target="_blank" name="item_122639559_rectlbn_1-3_p_0070096997_129466102_01A_1-6_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000129466102_1_60x60.jpg" alt="竹萃集传奇香水女持久淡香清新香气持久留香桂花绿茶琥珀" /></a><p class="title"><a href="http://product.suning.com/0070096997/129466102.html?src=item_122639559_rectlbn_1-3_c_0070096997_129466102_01A_1-6_0_A" target="_blank" title="竹萃集传奇香水女持久淡香清新香气持久留香桂花绿茶琥珀" name="item_122639559_rectlbn_1-3_c_0070096997_129466102_01A_1-6_0_A" id="baoguang_rectlbn_1-3_0070096997_129466102_01A_1-6_0_A">竹萃集传奇香水女持久淡香清新香气持久留香桂花绿茶琥珀</a></p><p class="price"><i>&yen;</i>39.90</p><span class="num highlight">3</span></li> 
      <li><a title="泊泉雅男士香水 古龙香水50ml 持久淡香淡雅清新 诱惑魅力正品" href="http://product.suning.com/0070110663/135544817.html?src=item_122639559_rectlbn_1-4_p_0070110663_135544817_01A_1-6_0_A" target="_blank" name="item_122639559_rectlbn_1-4_p_0070110663_135544817_01A_1-6_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000135544817_1_60x60.jpg" alt="泊泉雅男士香水 古龙香水50ml 持久淡香淡雅清新 诱惑魅力正品" /></a><p class="title"><a href="http://product.suning.com/0070110663/135544817.html?src=item_122639559_rectlbn_1-4_c_0070110663_135544817_01A_1-6_0_A" target="_blank" title="泊泉雅男士香水 古龙香水50ml 持久淡香淡雅清新 诱惑魅力正品" name="item_122639559_rectlbn_1-4_c_0070110663_135544817_01A_1-6_0_A" id="baoguang_rectlbn_1-4_0070110663_135544817_01A_1-6_0_A">泊泉雅男士香水 古龙香水50ml 持久淡香淡雅清新 诱惑魅力正品</a></p><p class="price"><i>&yen;</i>15.90</p><span class="num">4</span></li> 
      <li><a title="Dior迪奥女士香水Q版小样 礼盒三件套 真我+甜心小姐+魅惑5ml" href="http://product.suning.com/0070093558/137614767.html?src=item_122639559_rectlbn_1-5_p_0070093558_137614767_01A_1-6_0_A" target="_blank" name="item_122639559_rectlbn_1-5_p_0070093558_137614767_01A_1-6_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000137614767_1_60x60.jpg" alt="Dior迪奥女士香水Q版小样 礼盒三件套 真我+甜心小姐+魅惑5ml" /></a><p class="title"><a href="http://product.suning.com/0070093558/137614767.html?src=item_122639559_rectlbn_1-5_c_0070093558_137614767_01A_1-6_0_A" target="_blank" title="Dior迪奥女士香水Q版小样 礼盒三件套 真我+甜心小姐+魅惑5ml" name="item_122639559_rectlbn_1-5_c_0070093558_137614767_01A_1-6_0_A" id="baoguang_rectlbn_1-5_0070093558_137614767_01A_1-6_0_A">Dior迪奥女士香水Q版小样 礼盒三件套 真我+甜心小姐+魅惑5ml</a></p><p class="price"><i>&yen;</i>99.00</p><span class="num">5</span></li> 
      <li><a title="菲拉格慕FERRAGAMO 甜心魔力女士香水 30ml" href="http://product.suning.com/0070088542/132210282.html?src=item_122639559_rectlbn_1-6_p_0070088542_132210282_01A_1-6_0_A" target="_blank" name="item_122639559_rectlbn_1-6_p_0070088542_132210282_01A_1-6_0_A"><img src="{{ asset(_HOME_ . '/images') }}/000000000132210282_1_60x60.jpg" alt="菲拉格慕FERRAGAMO 甜心魔力女士香水 30ml" /></a><p class="title"><a href="http://product.suning.com/0070088542/132210282.html?src=item_122639559_rectlbn_1-6_c_0070088542_132210282_01A_1-6_0_A" target="_blank" title="菲拉格慕FERRAGAMO 甜心魔力女士香水 30ml" name="item_122639559_rectlbn_1-6_c_0070088542_132210282_01A_1-6_0_A" id="baoguang_rectlbn_1-6_0070088542_132210282_01A_1-6_0_A">菲拉格慕FERRAGAMO 甜心魔力女士香水 30ml</a></p><p class="price"><i>&yen;</i>89.00</p><span class="num">6</span></li> 
     </ul> 
    </div> 
    <div class="area mt10" id="relClass"> 
     <div class="area-head"> 
      <h3>相关分类</h3> 
     </div> 
     <ul class="procon-relate"> 
      <li><a href="http://list.suning.com/0-362505-0.html" title="香水" target="_blank" name="item_122639559_xgcata_cata01">香水</a></li> 
      <li><a title="香体喷雾" href="http://list.suning.com/0-315156-0.html" name="item_122639559_xgcata_cata02" target="_blank">香体喷雾</a></li> 
      <li><a title="香氛套装/礼盒" href="http://list.suning.com/0-315157-0.html" name="item_122639559_xgcata_cata03" target="_blank">香氛套装/礼盒</a></li> 
      <li><a title="香体露/走珠/香膏" href="http://list.suning.com/0-315159-0.html" name="item_122639559_xgcata_cata04" target="_blank">香体露/走珠/香膏</a></li> 
      <li><a title="香精" href="http://list.suning.com/0-336030-0.html" name="item_122639559_xgcata_cata05" target="_blank">香精</a></li> 
     </ul> 
    </div> 
    <div class="area mt10"> 
     <div class="area-head"> 
      <h3>相关品牌</h3> 
     </div> 
     <ul class="procon-relate"> 
      <li><a name="item_122639559_xgpp_01_c__3823_01A" id="baoguang_xgpp_01_none_3823_01A" title="香奈儿" href="http://www.suning.com/pinpai/3823-362505-0.html" target="_blank">香奈儿</a></li> 
      <li><a name="item_122639559_xgpp_02_c__4487_01A" id="baoguang_xgpp_02_none_4487_01A" title="迪奥" href="http://www.suning.com/pinpai/4487-362505-0.html" target="_blank">迪奥</a></li> 
      <li><a name="item_122639559_xgpp_03_c__0EGG_01A" id="baoguang_xgpp_03_none_0EGG_01A" title="范思哲" href="http://www.suning.com/pinpai/0EGG-362505-0.html" target="_blank">范思哲</a></li> 
      <li><a name="item_122639559_xgpp_04_c__X093_01A" id="baoguang_xgpp_04_none_X093_01A" title="卡尔文&middot;克莱恩" href="http://www.suning.com/pinpai/X093-362505-0.html" target="_blank">卡尔文&middot;克莱恩</a></li> 
      <li><a name="item_122639559_xgpp_05_c__9240_01A" id="baoguang_xgpp_05_none_9240_01A" title="菲拉格慕" href="http://www.suning.com/pinpai/9240-362505-0.html" target="_blank">菲拉格慕</a></li> 
      <li><a name="item_122639559_xgpp_06_c__9331_01A" id="baoguang_xgpp_06_none_9331_01A" title="博柏利" href="http://www.suning.com/pinpai/9331-362505-0.html" target="_blank">博柏利</a></li> 
      <li><a name="item_122639559_xgpp_07_c__7171_01A" id="baoguang_xgpp_07_none_7171_01A" title="宝格丽" href="http://www.suning.com/pinpai/7171-362505-0.html" target="_blank">宝格丽</a></li> 
      <li><a name="item_122639559_xgpp_08_c__0CCQ_01A" id="baoguang_xgpp_08_none_0CCQ_01A" title="古驰" href="http://www.suning.com/pinpai/0CCQ-362505-0.html" target="_blank">古驰</a></li> 
      <li><a name="item_122639559_xgpp_09_c__0EQF_01A" id="baoguang_xgpp_09_none_0EQF_01A" title="安娜苏" href="http://www.suning.com/pinpai/0EQF-362505-0.html" target="_blank">安娜苏</a></li> 
      <li><a name="item_122639559_xgpp_10_c__G326_01A" id="baoguang_xgpp_10_none_G326_01A" title="爱马仕" href="http://www.suning.com/pinpai/G326-362505-0.html" target="_blank">爱马仕</a></li> 
      <li><a name="item_122639559_xgpp_11_c__K674_01A" id="baoguang_xgpp_11_none_K674_01A" title="阿迪达斯" href="http://www.suning.com/pinpai/K674-362505-0.html" target="_blank">阿迪达斯</a></li> 
      <li><a name="item_122639559_xgpp_12_c__0ELF_01A" id="baoguang_xgpp_12_none_0ELF_01A" title="大卫杜夫" href="http://www.suning.com/pinpai/0ELF-362505-0.html" target="_blank">大卫杜夫</a></li> 
      <li><a name="item_122639559_xgpp_13_c__9333_01A" id="baoguang_xgpp_13_none_9333_01A" title="伊丽莎白.雅顿" href="http://www.suning.com/pinpai/9333-362505-0.html" target="_blank">伊丽莎白.雅顿</a></li> 
      <li><a name="item_122639559_xgpp_14_c__Y159_01A" id="baoguang_xgpp_14_none_Y159_01A" title="竹萃集" href="http://www.suning.com/pinpai/Y159-362505-0.html" target="_blank">竹萃集</a></li> 
      <li><a name="item_122639559_xgpp_15_c__06S4_01A" id="baoguang_xgpp_15_none_06S4_01A" title="莎娃蒂尼达利" href="http://www.suning.com/pinpai/06S4-362505-0.html" target="_blank">莎娃蒂尼达利</a></li> 
      <li><a name="item_122639559_xgpp_16_c__7146_01A" id="baoguang_xgpp_16_none_7146_01A" title="兰蔻" href="http://www.suning.com/pinpai/7146-362505-0.html" target="_blank">兰蔻</a></li> 
      <li><a name="item_122639559_xgpp_17_c__7140_01A" id="baoguang_xgpp_17_none_7140_01A" title="碧欧泉" href="http://www.suning.com/pinpai/7140-362505-0.html" target="_blank">碧欧泉</a></li> 
      <li><a name="item_122639559_xgpp_18_c__0ECF_01A" id="baoguang_xgpp_18_none_0ECF_01A" title="浪凡" href="http://www.suning.com/pinpai/0ECF-362505-0.html" target="_blank">浪凡</a></li> 
      <li><a name="item_122639559_xgpp_19_c__7127_01A" id="baoguang_xgpp_19_none_7127_01A" title="雅芳" href="http://www.suning.com/pinpai/7127-362505-0.html" target="_blank">雅芳</a></li> 
      <li><a name="item_122639559_xgpp_20_c__06G0_01A" id="baoguang_xgpp_20_none_06G0_01A" title="美丽法则" href="http://www.suning.com/pinpai/06G0-362505-0.html" target="_blank">美丽法则</a></li> 
     </ul> 
    </div> 
   </div> 
   <div class="procon"> 
    <div class="tabarea"> 
     <div id="pro_detail_tab" class="procon-toolbar"> 
     </div> 
     <div class="tabarea-content" id="J-procon-desc"> 
      <div class="pro-detail-parameter" id="kernelParmeter" style="display: none;"> 
       <div class="hd"> 
        <h4>核心参数</h4> 
        <span class="opt"><a href="javascript:FourPage.productParTitleClick();">更多参数</a></span> 
       </div> 
       <ul class="cnt clearfix"> 
       </ul> 
      </div> 
      <div class="pro-detail-oversea hide" style="display: none;"> 
       <img width="743" height="369" class="err-product lazy-loading" lazy-src="http://res.suning.cn/project/pdsWeb/images/oversea-detail.jpg?v=2016031004" usemap="#map_oversea-detail" alt="" /> 
       <map id="map_oversea-detail" name="map_oversea-detail"> <area target="_blank" href="http://help.suning.com/page/id-78.htm" coords="119,308,180,329" shape="rect"></area> </map> 
      </div> 
      
      </div> 
     </div> 
     <div style="display: none;" class="tabarea-content" id="J-procon-param"> 
      <div class="procon-param"> 
       <table class="pro-para-tbl" style="display: none;" id="bzqd_tag"> 
        <tbody> 
         <tr> 
          <th colspan="3">包裹清单</th> 
         </tr> 
         <tr> 
          <td class="name">包裹清单</td> 
          <td class="val"></td> 
          <td class="err"></td> 
         </tr> 
        </tbody> 
       </table> 
       <table class="pro-para-tbl" id="itemParameter"> 
        <tbody> 
         <tr> 
          <th colspan="3">主体</th> 
         </tr> 
         <tr> 
          <td class="name"> 
           <div class="name-inner"> 
            <span>品牌</span> 
           </div> </td> 
          <td class="val">香奈儿</td> 
          <td class="err"><a name="item_122639559_canshu_jiucuo" href="javascript:void(0);">纠错</a></td> 
         </tr> 
         <tr> 
          <td class="name"> 
           <div class="name-inner"> 
            <span>类别</span> 
           </div> </td> 
          <td class="val">女士香水</td> 
          <td class="err"><a name="item_122639559_canshu_jiucuo" href="javascript:void(0);">纠错</a></td> 
         </tr> 
         <tr> 
          <td class="name"> 
           <div class="name-inner"> 
            <span>类型</span> 
           </div> </td> 
          <td class="val">淡香水</td> 
          <td class="err"><a name="item_122639559_canshu_jiucuo" href="javascript:void(0);">纠错</a></td> 
         </tr> 
         <tr> 
          <td class="name"> 
           <div class="name-inner"> 
            <span>保质期</span> 
           </div> </td> 
          <td class="val">3年数</td> 
          <td class="err"><a name="item_122639559_canshu_jiucuo" href="javascript:void(0);">纠错</a></td> 
         </tr> 
         <tr> 
          <td class="name"> 
           <div class="name-inner"> 
            <span>产地</span> 
           </div> </td> 
          <td class="val">法国</td> 
          <td class="err"><a name="item_122639559_canshu_jiucuo" href="javascript:void(0);">纠错</a></td> 
         </tr> 
         <tr> 
          <td class="name"> 
           <div class="name-inner"> 
            <span>香调</span> 
           </div> </td> 
          <td class="val">花果香调</td> 
          <td class="err"><a name="item_122639559_canshu_jiucuo" href="javascript:void(0);">纠错</a></td> 
         </tr> 
         <tr> 
          <td class="name"> 
           <div class="name-inner"> 
            <span>适用人群</span> 
           </div> </td> 
          <td class="val">通用</td> 
          <td class="err"><a name="item_122639559_canshu_jiucuo" href="javascript:void(0);">纠错</a></td> 
         </tr> 
         <tr> 
          <td class="name"> 
           <div class="name-inner"> 
            <span>适用场所</span> 
           </div> </td> 
          <td class="val">其他</td> 
          <td class="err"><a name="item_122639559_canshu_jiucuo" href="javascript:void(0);">纠错</a></td> 
         </tr> 
         <tr> 
          <th colspan="3">规格</th> 
         </tr> 
         <tr> 
          <td class="name"> 
           <div class="name-inner"> 
            <span>规格</span> 
           </div> </td> 
          <td class="val">35毫升</td> 
          <td class="err"><a name="item_122639559_canshu_jiucuo" href="javascript:void(0);">纠错</a></td> 
         </tr> 
        </tbody> 
       </table> 
      </div> 
     </div> 
     <div style="display:none;" class="tabarea-content" id="J-procon-comment"></div> 
     <div style="display:none;" class="tabarea-content" id="J-procon-refer"></div> 
     <div style="display:none;" class="tabarea-content" id="J-procon-sale"></div> 
     <div style="display:none;" id="J-procon-oversea" class="tabarea-content"> 
      <div class="procon-oversea"> 
       <img width="765" height="105" alt="" lazy-src="http://res.suning.cn/project/pdsWeb/images/oversea-question-1.jpg" class="lazy-loading" /> 
       <img width="765" height="263" alt="" lazy-src="http://res.suning.cn/project/pdsWeb/images/oversea-question-2.jpg" class="lazy-loading" /> 
       <img width="765" height="180" alt="" lazy-src="http://res.suning.cn/project/pdsWeb/images/oversea-question-3.jpg" class="lazy-loading" /> 
       <img width="765" height="122" alt="" lazy-src="http://res.suning.cn/project/pdsWeb/images/oversea-question-4.jpg" class="lazy-loading" /> 
       <img width="765" height="150" alt="" lazy-src="http://res.suning.cn/project/pdsWeb/images/oversea-question-5.jpg" class="lazy-loading" /> 
       <img width="765" height="168" alt="" lazy-src="http://res.suning.cn/project/pdsWeb/images/oversea-question-6.jpg" class="lazy-loading" /> 
       <img width="765" height="160" alt="" lazy-src="http://res.suning.cn/project/pdsWeb/images/oversea-question-7.jpg" class="lazy-loading" /> 
       <img width="765" height="75" alt="" lazy-src="http://res.suning.cn/project/pdsWeb/images/oversea-question-8.jpg" class="lazy-loading" /> 
       <img width="765" height="200" alt="" lazy-src="http://res.suning.cn/project/pdsWeb/images/oversea-question-9.jpg" class="lazy-loading" /> 
      </div> 
     </div> 
    </div> 
    <div class="area mt10" id="serviceArea"> 
     <div class="area-head"> 
      <h3>售后保障</h3> 
     </div> 
     <div style="display:none;" class="after-market" id="snService"> 
      <div class="after-market-hd"> 
       <h4>苏宁承诺</h4> 
      </div> 
      <div id="snAftermarket" class="after-market-cnt clearfix"> 
       <ul class="snpromise"> 
        <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise1.jpg" alt="正品保障" class="lazy-loading" /><p>正品保障</p></li> 
        <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise2.jpg" alt="全国联保" class="lazy-loading" /><p>全国联保</p></li> 
        <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise4.jpg" alt="送货入户" class="lazy-loading" /><p>送货入户</p></li> 
        <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise5.jpg" alt="正规发票" class="lazy-loading" /><p>正规发票</p></li> 
       </ul> 
      </div> 
      <div id="suningService" class="after-market-hd"> 
       <h4>售后服务</h4> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="guarantees"> 
        <p id="productService">本商家商品保证正品行货，严格按照国家三包政策提供售后服务，因质量问题或实物与描述不符产生的退换货服务运费由本店承担。</p> 
        <p>苏宁易购向您保证所售商品均为正品行货，与您亲临商场选购的商品享受相同的质量保证。本站为您提供具有竞争力的商品价格和服务保障，请放心购买！</p> 
        <p>注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！</p> 
       </div> 
      </div> 
      <div class="after-market-hd"> 
       <h4>退换货流程</h4> 
       <span class="opt"><a target="_blank" href="http://help.suning.com/page/id-227.htm">退货细则及服务</a></span> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="return-process"> 
        <img width="760" height="140" lazy-src="http://res.suning.cn/project/pdsWeb/images/return-process.jpg" alt="退换货流程图" class="lazy-loading" /> 
       </div> 
      </div> 
      <div class="after-market-hd"> 
       <h4>温馨提示</h4> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="declare"> 
        <p>1、网站为您提供的送货、安装、维修等服务可能需收取一定的服务费和远程费；</p> 
        <p>2、服务中可能涉及的材料费请以服务工程师出示的报价单为准；</p> 
        <p>3、亲爱的顾客，苏宁承诺所售产品均为正品，如您购物环节遇到任何问题，请第一时间<a href="http://online.suning.com/webchat/index.jsp?url=https%3A%2F%2Fmember.suning.com%2Femall%2FMyGiftTicket%3FstoreId%3D10052%26catalogId%3D10051%26URL%3DMyGiftTicket&amp;h=%E8%B4%A6%E6%88%B7%E7%AE%A1%E7%90%86_%E6%88%91%E7%9A%84%E6%98%93%E8%B4%AD%E5%88%B8" target="_blank">联系客服人员</a>，我们会尽心为您处理问题。</p> 
        <p>4、请您收货后与快递人员一起开箱验货，确保产品完好，生产日期认可。如有问题请当场拒收。</p> 
       </div> 
       <div class="after-market-hd"> 
        <h4>特别声明</h4> 
       </div> 
       <div class="after-market-cnt"> 
        <div class="declare"> 
         <p>本站商品信息均来自苏宁自营商品，其真实性、准确性和合法性由信息拥有者（厂商）负责。本站不提供任何保证，并不承担任何法律责任。因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，我司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。网站商品的功能参数仅供参考，请以实物为准，我司只能确保网站经营商品均为原厂正品行货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，敬请谅解！</p> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div style="" class="after-market" id="cService"> 
      <div class="after-market-hd"> 
       <h4>售后服务</h4> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="guarantees"> 
        <p id="cProductService">本商家商品保证正品行货，严格按照国家三包政策提供售后服务，因质量问题或实物与描述不符产生的退换货服务运费由本店承担。</p> 
       </div> 
      </div> 
      <div class="after-market-hd"> 
       <h4>退货流程</h4> 
       <span class="opt"><a target="_blank" href="http://help.suning.com/page/id-227.htm">退货细则及服务</a></span> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="return-process"> 
        <img width="760" height="300" alt="退换货流程图" class="lazy-loading" src="http://res.suning.cn/project/pdsWeb/images/return-process-cd.jpg" /> 
       </div> 
      </div> 
      <div class="after-market-hd"> 
       <h4>温馨提示</h4> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="declare"> 
        <p>亲爱的顾客，为保障您的权益，请您对配送商品查验确认合格后签收，如有问题，请及时与商家联系。如需退货，请将包装一并寄回哦。</p> 
       </div> 
      </div> 
      <div class="after-market-hd"> 
       <h4>特别声明</h4> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="declare"> 
        <p>本站商品信息均来自于苏宁云台商家，其真实性、准确性和合法性由信息发布者（商家）负责。本站不提供任何保证，并不承担任何法律责任。因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本站不能确保客户收到的货物与网站图片、产地、附件说明完全一致，网站商品的功能参数仅供参考，请以实物为准。若本站没有及时更新，请您谅解！</p> 
       </div> 
      </div> 
     </div> 
     <div style="display:none;" class="after-market" id="swlService"> 
      <div class="after-market-hd"> 
       <h4>苏宁承诺</h4> 
      </div> 
      <div id="swlAftermarket" class="after-market-cnt clearfix"> 
       <ul class="snpromise"> 
        <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise1.jpg" alt="正品保障" class="lazy-loading" /><p>正品保障</p></li> 
        <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise2.jpg" alt="全国联保" class="lazy-loading" /><p>全国联保</p></li> 
        <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise4.jpg" alt="送货入户" class="lazy-loading" /><p>送货入户</p></li> 
        <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise5.jpg" alt="正规发票" class="lazy-loading" /><p>正规发票</p></li> 
       </ul> 
      </div> 
      <div id="swlSuningService" class="after-market-hd"> 
       <h4>售后服务</h4> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="guarantees"> 
        <p>本商家商品保证正品行货，严格按照国家三包政策提供售后服务，因质量问题或实物与描述不符产生的退换货服务运费由本店承担。</p> 
        <p>注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！</p> 
       </div> 
      </div> 
      <div class="after-market-hd"> 
       <h4>退换货流程</h4> 
       <span class="opt"><a target="_blank" href="http://help.suning.com/page/id-227.htm">退货细则及服务</a></span> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="return-process"> 
        <img width="760" height="140" lazy-src="http://res.suning.cn/project/pdsWeb/images/return-process.jpg" alt="退换货流程图" class="lazy-loading" /> 
       </div> 
      </div> 
      <div class="after-market-hd"> 
       <h4>温馨提示</h4> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="declare"> 
        <p>1、网站为您提供的送货、安装、维修等服务可能需收取一定的服务费和远程费；</p> 
        <p>2、服务中可能涉及的材料费请以服务工程师出示的报价单为准；</p> 
        <p>3、如存在收费争议，可咨询<a href="http://online.suning.com/webchat/index.jsp?url=https%3A%2F%2Fmember.suning.com%2Femall%2FMyGiftTicket%3FstoreId%3D10052%26catalogId%3D10051%26URL%3DMyGiftTicket&amp;h=%E8%B4%A6%E6%88%B7%E7%AE%A1%E7%90%86_%E6%88%91%E7%9A%84%E6%98%93%E8%B4%AD%E5%88%B8" target="_blank">在线客服</a>。</p> 
       </div> 
      </div> 
     </div> 
     <div style="display:none;" class="after-market" id="hwgService"> 
      <div class="after-market-hd"> 
       <h4>售后服务</h4> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="guarantees"> 
        <p>本店商品享有正品保障，因质量问题或实物与描述不符产生的退换货服务运费由商家承担</p> 
       </div> 
      </div> 
      <div class="after-market-hd"> 
       <h4>退换货流程</h4> 
       <span class="opt"><a target="_blank" href="http://help.suning.com/page/channel-258.htm" name="_122639559_shbz_tuihuo">退货细则及服务</a></span> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="return-process"> 
        <img width="760" height="250" lazy-src="http://res.suning.cn/project/pdsWeb/images/return-process-oversea.jpg" alt="退换货流程图" class="lazy-loading" /> 
       </div> 
      </div> 
      <div class="after-market-hd"> 
       <h4>温馨提示</h4> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="declare"> 
        <p>亲爱的顾客，为保障您的权益，请您对配送商品查验确认合格后签收，如有问题，请及时与商家联系。如需退货，请将包装一并寄回哦。</p> 
       </div> 
      </div> 
      <div class="after-market-hd"> 
       <h4>特别声明</h4> 
      </div> 
      <div class="after-market-cnt"> 
       <div class="declare"> 
        <p>苏宁易购为第三方网络交易平台，苏宁海外购的商品信息均由海外购商家自行发布，其真实性、准确性和合法性由海外购商家负责。苏宁易购对此不提供任何保证，也不承担任何法律责任。苏宁易购提醒用户购买商品/服务前注意谨慎核实。如用户对商品/服务的标题、价格、详情等任何信息有任何疑问的，请在购买前通过与商家沟通确认；如用户发现店铺内有任何违法信息，请向苏宁客服举报并提供有效依据。</p> 
       </div> 
      </div> 
     </div> 
    </div> 

  </div> 
  </div> 
  <div class="hide" id="paramWrongPop"> 
   <div class="param-wrong-pop"> 
    <div class="param-wrong-main fix"> 
     <p class="param-wrong-title">香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口</p> 
     <p>参数类型</p> 
     <textarea></textarea> 
     <p class="param-wrong-memo">请输入您认为正确的参数，我们将尽快核实并更正，谢谢您的参与！</p> 
     <p class="param-wrong-err hide">报错信息</p> 
    </div> 
    <div class="param-down"> 
     <a href="javascript:paramCorrectSubmit();" name="item_122639559_canshu_tijiao" class="pop-com-btn">提交</a> 
    </div> 
   </div> 
  </div> 
  <div class="hide" id="win_priceFeedback"> 
   <div class="price-feedback"> 
    <div class="price-feedback-msg"> 
     <i class="tipInfo4"></i> 
     <p>如果您发现了更低价格，请告诉我们。我们将认真对待您的每一份建议，确保提供最优质的服务及最优惠的价格。</p> 
    </div> 
    <div class="price-feedback-pro"> 
     <img class="proimage" alt="" id="feedBackImg" src="{{ asset(_HOME_ . '/images') }}/000000000122639559_1_60x60.jpg" /> 
     <p title="香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口" class="protitle"> <a class="close" href="javascript:void(0);"> 香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口 </a> </p> 
     <p id="feedback_price_name"><label>易购价：</label><span id="feedbackPrice" class="proprice"><i>&yen;</i> 21.9</span></p> 
     <p><label>商家：</label><span class="shopname" id="feedbackShopName"></span></p> 
    </div> 
    <div class="price-feedback-form"> 
     <p class="price-feedback-form-title"><strong>请选择您所发现的位置：</strong></p> 
     <p class="price-feedback-form-radio"><input type="radio" checked="checked" id="place_online" name="priceplace" value="0" /> <label for="place_online">网上商城</label></p> 
     <div style="display:block;" class="price-feedback-form-item"> 
      <p> <label><i class="require">*</i> 商品网址：</label> <input type="text" default="请输入您发现的销售网址" class="price-feedback-text price-feedback-text-long" onkeyup="iFourth.checkFeedBackInput(this);" id="productNetAddr" /> </p> 
      <p id="productNetAddrTip" class="formtip hide"> <i class="tipFalse5"></i> <span></span> </p> 
      <p> <label><i class="require">*</i> 价格：</label> <input type="text" default="单位（元）" class="price-feedback-text" onkeyup="Util.checkkey(this,event);iFourth.checkFeedBackInput(this);" id="feedbackPrice1" /> <span id="feedbackPrice1Tip" class="formtip-inline hide"> <i class="tipFalse5"></i> <span></span> </span> </p> 
      <p> <label>运费：</label> <input type="text" default="单位（元）" class="price-feedback-text" onkeyup="Util.checkkey(this,event);iFourth.checkFeedBackInput(this);" id="feedbackFreight" /> <span id="feedbackFreightTip" class="formtip-inline hide"> <i class="tipFalse5"></i> <span></span> </span> </p> 
     </div> 
     <p class="price-feedback-form-radio"><input type="radio" id="place_offline" name="priceplace" value="1" /> <label for="place_offline">线下实体店</label></p> 
     <div class="price-feedback-form-item"> 
      <p> <label><i class="require">*</i> 实体店名称：</label> <input type="text" default="请输入实体店的名称" class="price-feedback-text price-feedback-text-long" onkeyup="iFourth.checkFeedBackInput(this);" value="" id="feedbackRealShopName" /> </p> 
      <p id="feedbackRealShopNameTip" class="formtip hide"> <i class="tipFalse5"></i> <span></span> </p> 
      <p> <label><i class="require">*</i> 价格：</label> <input type="text" default="单位（元）" class="price-feedback-text" onkeyup="Util.checkkey(this,event);iFourth.checkFeedBackInput(this);" id="feedbackPrice2" /> <span id="feedbackPrice2Tip" class="formtip-inline hide"> <i class="tipFalse5"></i> <span></span> </span> </p> 
      <p> <label>城市：</label> <input type="text" default="" class="price-feedback-text" onkeyup="iFourth.checkFeedBackInput(this);" id="feedbackCity" /> <span id="feedbackCityTip" class="formtip-inline hide"> <i class="tipFalse5"></i> <span></span> </span> </p> 
      <p class="founddate"> <label><span>发现日期</span>：</label> <input type="text" value="" id="foundDate" class="price-feedback-text price-feedback-text-dark" readonly="true" /> <a class="founddate-calendar" id="J-calendar" href="javascript:void(0);"></a> </p> 
      <p id="foundDateTip" class="formtip hide"> <i class="tipFalse5"></i> <span>请输入发现日期</span> </p> 
     </div> 
     <div class="price-feedback-button"> 
      <a class="btn-submit" name="prd_22265955_jgfk_tijiao" href="javascript:void(0);">提交</a> &nbsp; &nbsp; 
      <a class="btn-cancel close" name="prd_22265955_jgfk_quxiao" href="javascript:void(0);">取消</a> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="hide" id="win_success"> 
   <div class="price-feedback-success"> 
    <i class="tipOK4"></i> 
    <span>提交成功，感谢您的反馈</span> 
    <p class="mt20"><a class="btn-cancel close" href="javascript:void(0);">关闭</a></p> 
   </div> 
  </div> 
  <div class="promtip-addcart hide" id="addCartPop"> 
   <div class="promtip-addcart-title"> 
    <i class="tipInfo4 mr5"></i> 
    <span>该商品在当前城市正在进行</span> 
    <label class="promtip-label">抢购</label> 
    <span>促销</span> 
   </div> 
   <ul class="promtip-addcart-panel clearfix"> 
    <li> <p>抢购价：<span class="price"><i>&yen;</i> <em id="qg_qgprice">38.00</em></span> </p> <a target="_blank" class="btn-view" id="qg_href" href="javascript:void(0);">查看抢购信息</a> </li> 
    <li class="sep"></li> 
    <li> <p>易购价：<span class="price"><i>&yen;</i> <em id="qg_promotionPrice">38.00</em></span> </p> <a class="btn-buy" id="qg_promotion_href" href="javascript:void(0);">以易购价购买</a> </li> 
   </ul> 
   <p class="promtip-addcart-memo">注：参加抢购将不再享受其他优惠活动</p> 
   <a class="close" href="javascript:void(0)"></a> 
  </div> 
  <!--[[ 风控防黄牛验证码 2015-05-27--> 
  <div style="display: none;" id="J-identify-code"> 
   <div class="identify-code"> 
    <p class="tips">亲，很抱歉，您购买的宝贝销售异常火爆，让小苏措手不及，请稍后再试~</p> 
    <div class="code-input clearfix"> 
     <dl> 
      <dt class="l">
        验证码 
      </dt> 
      <dd class="l"> 
       <p class="item-ide"><input type="text" value="以下字符不区分大小写" class="ui-text l" autocomplete="off" id="validateCode" /><i style="display:none;" class="tip-icon tip-ok-16 tip-ok l" id="imageVerifytip"></i><em style="display:none;" class="code-error l">验证码错误</em></p> 
       <p class="item-ide"><img alt="" src="" class="l" id="vcodeimg1" name="vcodeimg1" onclick="fun_getVcode()" /><span class="change l">看不清楚？<a onclick="fun_getVcode()" href="javascript:void(0);">换一张</a></span></p> 
       <p class="item-ide"><a onclick="ajaxCheckVerifyCodeOrSubmit(true);return false;" href="javascript:void(0);" class="lion-btn certain">确定</a><a href="javascript:void(0);" class="lion-btn close">关闭</a></p> 
      </dd> 
     </dl> 
    </div> 
   </div> 
  </div> 
  <!-- 风控防黄牛验证码 2015-05-27 ]]--> 
  <!--[[ 企业渠道 2015-05-27 --> 
  <div style="display: none;" id="J-company-channel"> 
   <div class="company-channel"> 
    <p class="tips">亲，大宗购物请点击<span><a href="http://b.suning.com">企业用户渠道&gt;</a></span>小苏的服务会更贴心！</p> 
   </div> 
  </div> 
  <!--企业渠道 2015-05-27]]--> 
  <!--[[ 异常火爆 2015-06-01 --> 
  <div style="display: none;" id="J-boom"> 
   <div class="company-channel"> 
    <p class="tips">亲，很抱歉，您购买的宝贝销售<span>异常火爆</span>让小苏措手不及，请稍后再试~</p> 
   </div> 
  </div> 
  <!--异常火爆 2015-06-01 ]]--> 
  <div id="proPop" class="pro-pop gray6 hide"> 
   <div class="pop-up fix"> 
    <a title="关闭" href="javascript:void(0)" class="close-btn" id="proPopCloseBtn">x</a> 
   </div> 
   <div class="pop-main pop-main-normal fix"> 
    <em class="tipIcon"></em> 
    <div class="msg"> 
     <strong>您已成功将商品加入收藏夹</strong> 
     <p style="font-size:12px;">查看<a href="#">我的收藏夹</a> </p> 
    </div> 
   </div> 
   <div class="pop-down"> 
    <a href="javascript:;" class="pop-btn" id="proPopSubmit">确定</a> 
   </div> 
  </div> 
  <!-- 预订弹框 --> 
  <div class="hide" id="win_presell"> 
   <div class="presell-pay-failed"> 
    <i></i> 
    <p id="psellBookMessage">非常抱歉，您前期未参加预订活动，<br />无法支付尾款哦！</p> 
    <p class="mt20"><a class="btn-cancel close" href="javascript:void(0);">关闭</a></p> 
   </div> 
  </div> 
  <div id="J-fixBar" class="fixbar" style="display: block;"> 
   <div class="wrapper"> 
    <div class="area"> 
     <div class="handle" id="tabAddCart" style="display: block;"> 
      <a href="javascript:Cart.addCart();" class="btn-addcart-mini" name="item_122639559_tab_buy03" id="addCart2"></a> 
      <div class="proinfo-mini"> 
       <p class="pro-img"><img width="60" height="60" alt="香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口" src="{{ asset(_HOME_ . '/images') }}/000000000122639559_1_60x60.jpg" /></p> 
       <p class="pro-name">香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口</p> 
       <p class="pro-price"><span class="price"><i>&yen;</i> <em id="cart2Price">328.00</em></span><span class="count"> &times;<em id="cart2Count">1</em></span></p> 
      </div> 
     </div> 
     <ul class="tabarea-items"> 
      <li class="current" data-type="function" rel="#J-procon-desc"><a href="javascript:void(0);" name="item_122639559_tab_xiangqing">商品详情</a></li> 
      <li data-type="function" rel="#J-procon-sale" id="productProconSaleTitle"><a href="javascript:void(0);" name="item_122639559_tab_shouhou">售后保障</a></li> 
      <li data-type="function" class="hide" rel="#J-procon-oversea" id="productOverseaTitle" style="display: none;"><a href="javascript:void(0);">海外购</a></li> 
     </ul> 
    </div> 
   </div> 
  </div> 
  <div class="clear"></div> 
@stop