@extends('layout.home')
@section('content')
 <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/common.css" />
 <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/search.css" />
 <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/sn-sidebar.css" />
 <link href="{{ asset(_HOME_ . '/css') }}/fourth.css?v=2016031004" type="text/css" rel="stylesheet" />
 <link href="{{ asset(_HOME_ . '/css') }}/fourthPopBox.css?v=2016031004" type="text/css" rel="stylesheet" />
 <link rel="stylesheet" type="text/css" href="{{ asset(_HOME_ . '/css') }}/review.css?v=2016022201" />
 <link rel="stylesheet" type="text/css" href="{{ asset(_HOME_ . '/css') }}/consultation.css" />


 <div class="wrapper proinfo" style="margin-top: 20px">
  <div class="proinfo-container clearfix">
    <div class="proinfo-left">

    <div class="imgzoom" id="imgZoom">
        {{--商品主图--}}
     <div class="imgzoom-main"  id="small">
      <a href="javascript:void(0);" class="view-img" >
          <img id="smallImg" src="{{url(asset(GOODS_IMG.'/'.$goods->goods_img))}}" alt="{{$goods->goods_name}}" width="100%" />
      </a>
         <div id="move" style="width: 180px;height: 180px;position: absolute;left: 0px;top: 0px;display: none;border: solid 1px orange"></div>
     </div>

     <div class="imgzoom-thumb">
         {{--<--}}
        <a href="javascript:void(0);" class="prev prev-disable" name="item_122639559_sppic_picup01"></a>
         {{--商品相册--}}
        <div class="imgzoom-thumb-main">

       <ul id="uls" style="left: 0px;">
        @foreach($photo as $k=>$v)
        <li class="current">
            <a href="javascript:void(0);" name="item_122639559_sppic_xiaop01">
                <img src="{{url(asset(GOODS_IMG.'/'.$v->img))}}"  alt="香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口" />
            </a>
        </li>
        @endforeach
       </ul>
      </div>
         {{-->--}}
        <a href="javascript:void(0);" class="next next-disable" name="item_122639559_sppic_picdown01"></a>
     </div>

    </div>
       {{--图片下编码与分享--}}
    <div class="imgzoom-memo">
        <label>商品编码</label>:
        <em id="partNumberLable">{{$goods->goods_num}}</em>
        <div class="share">
            <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a></div>
            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
        </div>
    </div>

   </div>
      {{--商品价格信息--}}
    <div class="proinfo-title">
    <h1 id="itemDisplayName">{{$goods->goods_name}}</h1>
    <h2 id="promotionDesc">过年放假不打烊 包邮顺丰 专柜包装 送专柜礼袋</h2>
    </div>
    {{--放大镜--}}
    <div class="proinfo" id="big" style="width: 400px;height: 400px;position: absolute;left:400px;top:0px;display: none;overflow: hidden;">
        <img id="bigImg" src="{{url(asset(GOODS_IMG.'/'.$goods->goods_img))}}" style="position: absolute;">
    </div>

    <div class="proinfo-main" style="height: 400px;">
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
       <span class="mainprice" id="promotionPrice"><i>&yen;</i>{{$goods->shop_price}}</span>
       <a href="javascript:FourPage.subscribePriceNotice();" class="link" id="PriceNotice2" item_122639559_gmq_jjtz""="" name="name=">降价通知</a>

      </dd>
     </dl>
     <dl class="proinfo-star">
      <dd>
       <span class="stars"><em style="width:92%;"></em></span>
       <span>4.7分</span>
       <a href="#pro_detail_tab" class="totalReview" name="item_122639559_gmq_pingjia">共有177条评价</a>
      </dd>
     </dl>

        {{--二维码--}}
     <div id="qrCode" class="qrcode-main">
      <img src=""  alt="客户端扫购更便捷" onerror="javascript:$('#qrCode').children().hide();" id="qrCodeImg" />
      <p>客户端扫购更便捷</p>
     </div>

    </div>

    <div style="margin-top:5px;" class="proinfo-num" id="buycount">
        <dl  class="proinfo-buytype proattr-radio">
            <dt >
                <span>物品重量</span>
            </dt>
            <dt style="padding-left:1px;">
                {{$goods->goods_weight}}@if($goods->weight_unit == 0) g @elseif($goods->weight_unit == 1) Kg @endif
            </dt>
        </dl>
    </div>
    <div style="border: dotted 1px gainsboro;">
        @foreach($type as $k=>$v)
            <div style="margin-top:1px;">
                <dl id="versionItemList" class="proinfo-buytype proattr-radio">
                    <dt> <span class=""> {{$v->attr_name}} </span> </dt>
                    <dd>
                        <ul>
                            <?php $array = explode(',',$v->attr_values);?>
                            @foreach($array as $kk=>$vv)
                                <li onclick="dian(this)">
                                    <a  href="javascript:void(0);"  >{{$vv}}</a>
                                </li>
                            @endforeach
                            {{--<li class="selected" >--}}
                            {{--<a name="item_10606649858_ysc_size02" href="javascript:void(0);" title="金色 512GB">512GB<i></i></a>--}}
                            {{--</li>--}}

                        </ul>
                    </dd>
                </dl>
            </div>
        @endforeach
    </div>


   <dl style="margin-top: 1px;" class="proinfo-num" id="buycount">
           <dt>
               购买数量
           </dt>
           <dd>
               <a name="" class="minus" href="javascript:void(0);"></a>
               <input type="text" max="99" value="1" id="buyNum" style="height: 20px" />
               <a name="" class="plus" href="javascript:void(0);"></a>
           </dd>
       <dt >
           库存:(<sanp id="goods_kc">{{$goods->goods_kc}}</sanp>)件
       </dt>

   </dl>

    <dl>
     <dt>
      <span class="w2">服务</span>
     </dt>
     <dd id="shopNameBox" >
      <span id="shopName">由&quot;<a href="http://shop.suning.com/70078302/index.html" target="_blank" name="item_122639559_shop_dianpu02">沃美汇美妆专营店</a>&quot;从&nbsp;&nbsp;广州市&nbsp;&nbsp;销售和发货，并提供售后服务</span>
      <a class="ml10" href="javascript:findpassSupplier('0070078302','http://www.suning.com/emall/sprdonline_10052_14656_22265955_0070078302_.html','','');" name="item_122639559_gmq_offlinechat01" id="callme"><img alt="和我联系" src="http://talk8.suning.com/project/yunxin/images/online.gif?_t=1457752466615" style="vertical-align:middle" /></a>
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

    <div class="mainbtns clearfix">

     <a style="" href="javascript:Cart.buyNowTime();" class="btn-buynow" name="item_122639559_gmq_ljgm" id="buyNowAddCart"><span>立即购买</span></a>
     <a href="javascript:Cart.addCart();" class="btn-addcart" name="item_122639559_gmq_buy01" id="addCart"><span>加入购物车</span></a>
    </div>

     {{--商家  --}}
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
         <p><span class="detail-name">公司：</span><span class="detail-val">北京有限有限公司</span></p>
         <p><span style="letter-spacing: 2px;" class="detail-name">TEL：</span><span class="detail-val">1861234578</span></p>
        </div>

        <div class="si-website">
         <a href="" target="_blank" title="进入店铺" class="si-btn si-btn-yellow" name="">进入店铺</a>
         <a href="" title="收藏店铺" class="si-btn" name="">收藏店铺</a>
        </div>

       </div>
      </div>
     </div>
    </div>
    <a href="javascript:void(0);" class="proinfo-side-switch">卖家信息<p>&lt;</p></a>

   </div>


  </div>

 </div>


 <div class="wrapper mt15">
     <div class="procon-side">
         <div data-type="jsonp" class="lazy-ajax area loading-holder mt10" id="buyAlsoBuy" style="display: none;">
             <div class=" loading-holder"></div>
         </div>
         {{--同品牌商品排行榜--}}
         <div data-type="jsonp" id="hotRank" class="lazy-ajax area mt10">
             <div class="area-head"><h3>同品牌排行</h3></div>
             <ul class="toppro-list" id="J-topPro-1" style="display:block;">
                @foreach($goods_brand as $k=>$v)
                 <li>
                     <a name="" target="_blank" href="{{url('goodslist/'.$v->id)}}" >
                         <img alt="" src="{{url(asset(GOODS_IMG.'/'.$v->goods_img))}}">
                     </a>
                     <p class="title">
                         <a id="" name="" target="_blank" href="{{url('goodslist/'.$v->id)}}">
                            {{$v->goods_name}}
                         </a>
                     </p>
                     <p class="price"><i>¥</i>{{$v->shop_price}}</p>
                     <span class="num highlight">{{$k+1}}</span>
                 </li>
                 @endforeach
             </ul>
         </div>
         {{--同类商品排行榜--}}
        <div data-type="jsonp" id="hotRank" class="lazy-ajax area mt10">
        <div class="area-head"><h3>同类型排行</h3></div>
        <ul class="toppro-list" id="J-topPro-1" style="display:block;">
            @foreach($goods_type as $k=>$v)
           <li>
               <a  target="_blank" href="{{url('goodslist/'.$v->id)}}" title="">
                   <img alt="" src="{{url(asset(GOODS_IMG.'/'.$v->goods_img))}}">
               </a>
               <p class="title">
                   <a id=""  target="_blank" href="{{url('goodslist/'.$v->id)}}">
                       {{$v->goods_name}}
                   </a>
               </p>
               <p class="price"><i>¥</i>{{$v->shop_price}}</p>
               <span class="num highlight">{{$k+1}}</span>
           </li>
            @endforeach
          </ul>
        </div>


     </div>

     <div class="procon">

    <div class="tabarea">
   {{--商品详情--}}
    <div id="pro_detail_tab" class="procon-toolbar">
        <ul class="tabarea-items">
            <li class="current" data-type="function" rel="#J-procon-desc">
                <a href="javascript:void(0);" name="item_122639559_tab_xiangqing">商品详情</a>
            </li>
        </ul>
    </div>
    <div class="tabarea-content" id="J-procon-desc">
     <div data-type="json" class="lazy-ajax pro-detail-pics" id="productDetail">
       {!! $goods->goods_desc !!}
     </div>
    </div>

    {{--售后--}}
    <div class="area mt10" id="serviceArea">
    <div class="area-head">
     <h3>售后保障</h3>
    </div>
    <div style="" class="after-market" id="snService">
     <div class="after-market-hd">
      <h4>苏宁承诺</h4>
     </div>
     <div id="snAftermarket" class="after-market-cnt clearfix">
      <ul class="snpromise">
       <li><img alt="正品保障" class="lazy-loading" src="http://res.suning.cn/project/pdsWeb/images/promise1.jpg"><p>正品保障</p></li>
       <li><img alt="全国联保" class="lazy-loading" src="http://res.suning.cn/project/pdsWeb/images/promise2.jpg"><p>全国联保</p></li>
       <li><img alt="送货入户" class="lazy-loading" src="http://res.suning.cn/project/pdsWeb/images/promise4.jpg"><p>送货入户</p></li>
       <li><img alt="正规发票" class="lazy-loading" src="http://res.suning.cn/project/pdsWeb/images/promise5.jpg"><p>正规发票</p></li>
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
       <img width="760" height="140" alt="退换货流程图" class="lazy-loading" src="http://res.suning.cn/project/pdsWeb/images/return-process.jpg">
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
    <div style="display: none;" class="after-market" id="cService">
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
       <img width="760" height="300" alt="退换货流程图" class="lazy-loading" src="http://res.suning.cn/project/pdsWeb/images/return-process-cd.jpg">
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
       <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise1.jpg" alt="正品保障" class="lazy-loading"><p>正品保障</p></li>
       <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise2.jpg" alt="全国联保" class="lazy-loading"><p>全国联保</p></li>
       <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise4.jpg" alt="送货入户" class="lazy-loading"><p>送货入户</p></li>
       <li><img lazy-src="http://res.suning.cn/project/pdsWeb/images/promise5.jpg" alt="正规发票" class="lazy-loading"><p>正规发票</p></li>
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
       <img width="760" height="140" lazy-src="http://res.suning.cn/project/pdsWeb/images/return-process.jpg" alt="退换货流程图" class="lazy-loading">
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
       <img width="760" height="250" lazy-src="http://res.suning.cn/project/pdsWeb/images/return-process-oversea.jpg" alt="退换货流程图" class="lazy-loading">
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
 </div>
@stop


@section('js')
    <script>
        $('.ng-sort').attr('style','display: none;');
        function dian(obj){
            $(obj).attr('class','selected');
        }
//        - +
        $('.minus').click(function(){
            var num = $('#buyNum').val();
            num--;
            if(num <= 1){
                num =1;
            }
            $('#buyNum').val(num);
        });
        $('.plus').click(function(){
            var num = $('#buyNum').val();
            num++;
            var goods_kc = $('#goods_kc').text();
            if(num >= goods_kc){
                num = goods_kc;
            }
            $('#buyNum').val(num);
        });

        //放大镜
        $('#small').mouseover(function(){
            $('#move').css('display','block');
            $('#big').css('display','block');
            $('#move').mousemove(function(e){
                //获取移动时获取各项的值
                var x = e.pageX;
                var y = e.pageY;

                var l = $('#small').offset().left;
                var t = $('#small').offset().top;

                var mw = $('#move').width() /2;
                var mh = $('#move').height() /2;

                var sl = x - l - mw;
                var sh = y -t - mh;
                if(sl <= 0){
                    sl =0;
                }
                if(sh <= 0){
                    sh =0;
                }
                var maxl = $('#small').width()-$('#move').width();
                var maxt = $('#small').height()-$('#move').height();
                if(sl >= maxl){
                    sl = maxl;
                }
                if(sh >= maxt){
                    sh = maxt;
                }
                //设置偏移量
                $('#move').css('left',sl+'px');
                $('#move').css('top',sh+'px');


                //2.大图片 移动
                var bl = sl / $('#small').width() * $('#bigImg').width();
                var bt = sh / $('#small').height() * $('#bigImg').height();

                $('#bigImg').css('left',-bl+'px');
                $('#bigImg').css('top',-bt+'px');
            });
        });


        $('#small').mouseout(function(){
            $('#move').css('display','none');
            $('#big').css('display','none');
        });

        //更换图片
        $('#uls img').click(function(){
            var src = $(this).attr('src');
            $('#bigImg').attr('src',src);
            $('#smallImg').attr('src',src);
        });
    </script>
@stop