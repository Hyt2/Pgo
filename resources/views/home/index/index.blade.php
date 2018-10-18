@extends('layout.home')
@section('content')

 <div class="first-screen"> 
   <div class="banner"> 
    <a class="banner-btn banner-prev" href="javascript:void(0);" name="index1_none_lbgg_qhan01" role="left"> <span class="btn-bg"></span> <i class="arr"></i> </a> 
    <a class="banner-btn banner-next" href="javascript:void(0);" name="index1_none_lbgg_qhan02" role="right"> <span class="btn-bg"></span> <i class="arr"></i> </a> 
    <div class="banner-pic"> 
      @foreach($ads[0] as $k=>$v) 
        <ul>
          <li style="background:#eeeeee;">
              <a expotype="2" expo="index_lbgg0101:365天放心购" href="http://sale.suning.com/zh/315baofa/index.html" title="365天放心购" target="_blank" name="index2_none_lbgg_010{{$k}}">
                <img data-src="{{u(_AD_).$v}}" alt="365天放心购" class="ad" />
              </a>
          </li>
         </ul> 
        @endforeach 
    </div> 
    <ul class="banner-ctrl">
      @foreach($ads[1] as $k=>$v) 
          <li class="ctrl0{{$k}}"> <span class="bg"></span> 
            <div class="ctrl-dot"> 
             <i></i> 
            </div> 
            <div class="title-item"> 
             <span class="title-bg"></span> 
             <div class="title-list"> 
              <p><i></i><a href="http://sale.suning.com/zh/315baofa/index.html" target="_blank" name="index2_none_lbgg_0{{$k}}01">{{$v['ad_name']}}</a></p>  
             </div> 
            </div> <h4>{{$v['title']}}</h4> 
          </li>
          @endforeach
    </ul>
   </div> 
   <div class="show-case"> 
    <div class="title up-title"> 
     <div class="bg"></div> 
     <div class="main"> 
      <em>公告和生活助手</em> 
     </div> 
    </div> 
    <div class="box-all"> 
     <div class="title"> 
      <i></i> 
      <em>公告</em> 
      <a name="index2_none_gg_gd" target="_blank" href="http://club.suning.com/forum.php?mod=forumdisplay&amp;fid=435&amp;filter=typeid&amp;typeid=1609" class="more">更多</a> 
     </div> 
     <div class="notice"> 
      <div class="bg"></div> 
      <ul class="list">
       @foreach($res as $k=>$v)
       <li ><a name="index2_none_gg_01" href="{{url('notice_content/'.$v->id)}}" rel="nofollow" target="_blank"><i>【公告】</i><em>{{$v->title}}</em></a></li>
       @endforeach
      </ul>
     </div> 
     <div class="title"> 
      <em>生活助手</em> 
     </div> 
     <div class="life"> 
      <div class="bg"></div> 
      <div class="list"> 
       <ul> 
        <li><a name="index1_none_shzs_info01" href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=http://chong.suning.com/eppscrp/mobile/fill.htm" rel="nofollow" target="_blank"><i class="ng-iconfont"></i>充话费</a></li> 
        <li><a name="index1_none_shzs_info06" href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=http://sh.suning.com/life/5-1.html" rel="nofollow" target="_blank"><i class="ng-iconfont"></i>还款</a></li> 
        <li><a name="index1_none_shzs_info02" href="http://huochepiao.suning.com/" rel="nofollow" target="_blank"><i class="ng-iconfont"></i>火车票</a></li> 
        <li><a name="index1_none_shzs_info03" href="http://lvxing.suning.com/" rel="nofollow" target="_blank"><i class="ng-iconfont"></i>机票</a></li> 
        <li><a name="index1_none_shzs_info04" href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=http://jiaofei.suning.com/eppspfi/cityLocation/getCityLocation.htm?pageType=1" rel="nofollow" target="_blank"><i class="ng-iconfont"></i>水电煤</a></li> 
        <li><a name="index1_none_shzs_info05" href="https://licai.suning.com/bof/licaiIndex.htm" rel="nofollow" target="_blank"><i class="ng-iconfont"></i>理财</a></li> 
        <li><a name="index1_none_shzs_info07" href="http://fq.suning.com " rel="nofollow" target="_blank"><i class="ng-iconfont"></i>消费贷款</a></li> 
        <li><a name="index1_none_shzs_info08" href="http://snbook.suning.com/web/index.htm" rel="nofollow" target="_blank"><i class="ng-iconfont"></i>电子书</a></li> 
        <li><a name="index1_none_shzs_info09" href="http://vip.suning.com/sign/welcome.do" rel="nofollow" target="_blank"><i class="ng-iconfont"></i>领云钻</a></li> 
       </ul> 
      </div> 
     </div> 
    </div> 
    <a class="btn btn-down" href="javascript:void(0);"><i></i></a> 
   </div> 
  </div> 
  <script type="text/javascript">
function loadBanner(){
if(typeof TOP_BANNER_DATA != "undefined"){
var bannerData;
var cityId=getBannerCookie("cityId");
if(cityId in TOP_BANNER_DATA){
bannerData=TOP_BANNER_DATA[cityId];
}else if("99999" in TOP_BANNER_DATA){
bannerData=TOP_BANNER_DATA[99999];
}
if(bannerData!=null){
var picWide, picNarrow, picWideBg, picNarrowBg, nameWide, nameNarrow, titleWide, titleNarrow, hrefWide, hrefNarrow;
picWide = bannerData.picWide;
picWideBg = bannerData.bgColor;
nameWide = bannerData.name;
titleWide = bannerData.title;
hrefWide = bannerData.link;
picNarrow = bannerData.picNarrow;
picNarrowBg = bannerData.bgColor;
nameNarrow = bannerData.name;
titleNarrow = bannerData.title;
hrefNarrow = bannerData.link;
var screenFlag = (SCREEN.large || SCREEN.wider) ? true : false;//判断宽屏或窄屏
var tem = [
{name: screenFlag ? nameWide : nameNarrow, href: screenFlag ? hrefWide : hrefNarrow, src: screenFlag ? picWide : picNarrow, title: screenFlag ? titleWide : titleNarrow, bg: screenFlag ? picWideBg : picNarrowBg}
],
topName = tem[0].name,
topHref = tem[0].href,
topSrc = tem[0].src,
topTitle = tem[0].title,
topBg = tem[0].bg;
var html = '<a name="' + topName + '" target="_blank" title="' + topTitle + '" href="' + topHref + '">';
html += '<img src="' + topSrc + '" />';
html += '</a>';
document.getElementById('TOP_ACTIVE_WRAP').innerHTML = html;
document.getElementById('TOP_ACTIVE_WRAP').style.background = topBg;
}else{
document.getElementById('__TOP_ACTIVE__').style.display='none';
}
}
}
function getBannerCookie (b) {
var a;
return (a = document.cookie.match(RegExp("(^| )" + b + "=([^;]*)(;|$)"))) ? decodeURIComponent(a[2]
.replace(/\+/g, "%20"))
: null
};
loadBanner();
</script> 
  <!-- 弹窗广告 维护广告时，输出此dom文档，没有则不输出 [[ --> 
  <!-- 如果是新人弹窗，需要维护一个标识【有任意值即可】，否则是促销弹窗 --> 
  <!-- 弹窗广告 ]] --> 
  <!-- 新用户的时候弹框提示 [[--> 
  <div class="new-user"> 
   <div class="new-pic"> 
    <a name="index2_none_tk_xr" href="http://sale.suning.com/zh/xrdlb/index.html" target="_blank"> <img src="{{ asset(_HOME_ . '/images') }}/145639401885988055.png" alt="" data-src="{{ asset(_HOME_ . '/images') }}/145639401885988055.png" /> </a> 
   </div> 
   <i class="close"></i> 
  </div> 
  <div class="dialog-overlay"> 
   <div class="overlay"></div> 
  </div> 
  <!-- 新用户的时候弹框提示 ]]--> 
  <div class="activityEnter"> 
   <ul> 
    @foreach($brand as $k=>$v)
    <li> <a name="index2_none_huichang_04" target="_blank" href="{{$v->brand_url}}" > <img lazy-src="{{_UPLOADS_.'/goods_brand'.'/'.$v->brand_logo}}"/> </a> </li>
    
    @endforeach 
   </ul> 
  </div> 
  <div class="wrapper second-screen J-domLazy"> 
   <script type="text/html">
<div class="title">
<h3>特色馆</h3>
<h4>CHARACTERISTIC</h4>
</div>
<div class="col1">
<a expoType="2" expo="index_yxcp01:名品特卖" name="index2_none_tsg_gg01" href="http://mp.suning.com" rel="nofollow" target="_blank" title="名品特卖"><img src="{{ asset(_HOME_ . '/images') }}/145766648957919765.jpg" alt=""/></a>
</div>
<ul class="col2">
<li class="item0"></li>
<li class="item1"><a expoType="2" expo="index_yxcp02:大聚惠" name="index2_none_tsg_gg0201" href="coupon.html" rel="nofollow" target="_blank" title="大聚惠"><img src="{{ asset(_HOME_ . '/images') }}/145769353515228576.jpg" alt="大聚惠"/></a></li>
<li class="item2"><a expoType="2" expo="index_yxcp03:全球闪购" name="" href="http://g.suning.com/" rel="nofollow" target="_blank" title="全球闪购"><img src="{{ asset(_HOME_ . '/images') }}/145766265376099217.jpg" alt="全球闪购"/></a></li>
</ul>
<div class="col3">
<span class="line1"></span><span class="line2"></span>
<ul>
<li class="item1"><a expoType="2" expo="index_yxcp04:闪拍" name="index2_none_tsg_gg0301" href="http://pai.suning.com/shanpai/" rel="nofollow" target="_blank" title="闪拍"><img src="{{ asset(_HOME_ . '/images') }}/145766756133128419.jpg" alt=""/></a></li>
<li class="item2"><a expoType="2" expo="index_yxcp05:苏宁试用" name="index2_none_tsg_gg0302" href="http://try.suning.com/" rel="nofollow" target="_blank" title="苏宁试用"><img src="{{ asset(_HOME_ . '/images') }}/145769041087958301.jpg" alt="苏宁试用"/></a></li>
<li class="item3"><a expoType="2" expo="index_yxcp06:中华特色馆" name="index2_none_tsg_gg0303" href="http://china.suning.com/" rel="nofollow" target="_blank" title="中华特色馆"><img src="{{ asset(_HOME_ . '/images') }}/145769981576737024.jpg" alt=""/></a></li>
<li class="item4"><a expoType="2" expo="index_yxcp07:品牌街" name="index2_none_tsg_gg0304" href="http://pinpai.suning.com/" rel="nofollow" target="_blank" title="品牌街"><img src="{{ asset(_HOME_ . '/images') }}/145744167265765747.jpg" alt=""/></a></li>
</ul>
</div>
<ul class="col4">
<li><a expoType="2" expo="index_yxcp08:券频道页" name="index2_none_tsg_gg0401" href="http://quan.suning.com/quan_31.htm" rel="nofollow" target="_blank" title="券频道页"><img src="{{ asset(_HOME_ . '/images') }}/145744136281213334.jpg" alt=""/></a></li>
<li><a expoType="2" expo="index_yxcp09:苏宁热卖" name="index2_none_tsg_gg0402" href="http://re.suning.com/?utm_source=shou" rel="nofollow" target="_blank" title="苏宁热卖"><img src="{{ asset(_HOME_ . '/images') }}/145768838933375986.jpg" alt=""/></a></li>
<li><a expoType="2" expo="index_yxcp10:以旧换新" name="index2_none_tsg_gg0403" href="http://hx.suning.com/" rel="nofollow" target="_blank" title="以旧换新"><img src="{{ asset(_HOME_ . '/images') }}/145302297100830612.jpg" alt=""/></a></li>
<li><a expoType="2" expo="index_yxcp11:二手优品" name="index2_none_tsg_gg0404" href="http://2.suning.com/" rel="nofollow" target="_blank" title="二手优品"><img src="{{ asset(_HOME_ . '/images') }}/144991259140483173.jpg" alt=""/></a></li>
</ul>
</script> 
  </div> 
  <div class="wrapper floor-financial J-domLazy"> 
   <script type="text/html">
<div class="financial-head">
<h3>苏宁金融</h3>
<h4>SUNING FINANCE</h4>
</div>
<div class="financial-main">
<div class="col1">
<a expoType="2" expo="index_jrcp02:苏宁金融" name="index2_none_jrlc_jrpd" href="mall.html" target="_blank"><img src="{{ asset(_HOME_ . '/images') }}/145708474525388981.jpg" width="190" height="240" alt="苏宁金融" /></a>
</div>
<div class="col2">
<a expoType="2" expo="index_jrcp03:苏宁理财" name="index2_none_jrlc_gg02" href="http://sale.suning.com/jr/lc0yg01pc/index.html?channelCode=PC_YGMstation" rel="nofollow" target="_blank" title="苏宁理财"><img src="{{ asset(_HOME_ . '/images') }}/145757705874643253.jpg" alt=""/></a>
</div>
<ul class="col3">
<li><a expoType="2" expo="index_jrcp04:Micoe净水器 " name="index2_none_jrlc_gg0301" href="http://zc.suning.com/project/detail.htm?projectId=5670" rel="nofollow" target="_blank" title="Micoe净水器 "><img src="{{ asset(_HOME_ . '/images') }}/145769981169820787.jpg" alt=""/></a></li>
<li><a expoType="2" expo="index_jrcp05:315任性购" name="index2_none_jrlc_gg0302" href="http://cuxiao.suning.com/city/zh00229.htm" rel="nofollow" target="_blank" title="315任性购"><img src="{{ asset(_HOME_ . '/images') }}/145769044376764243.jpg" alt=""/></a></li>
</ul>
<ul class="col4">
<li><a expoType="2" expo="index_jrcp06:拼手气抢红包" name="index2_none_jrlc_gg0401" href="http://sale.suning.com/jr/luckypc/index.html" rel="nofollow" target="_blank" title="拼手气抢红包"><img src="{{ asset(_HOME_ . '/images') }}/145708458724161957.jpg" alt=""/></a></li>
<li><a expoType="2" expo="index_jrcp07:消费贷款" name="index2_none_jrlc_gg0402" href="http://fq.suning.com/" rel="nofollow" target="_blank" title="消费贷款"><img src="{{ asset(_HOME_ . '/images') }}/145769047347842421.jpg" alt=""/></a></li>
</ul>
</div>
</script> 
  </div> 
  <div class="wrapper floor floor4"> 
   <div class="floor-head clearfix"> 
    <div class="title"> 
     <h3> <b>1F</b> 服饰百货 </h3> 
     <h4>aaaaaa</h4> 
    </div> 
    <ul class="tab"> 
     <li class="on"><a href="javascript:void(0);"><i></i><em>热门活动</em></a></li> 
     <li><a href="javascript:void(0);"><i></i><em>猜你喜欢</em></a></li> 
    </ul> 
    <div class="links"> 
     <a name="index2_none_floor01_rc01" href="http://search.suning.com/%E8%BF%9E%E8%A1%A3%E8%A3%99/&amp;ci=500031&amp;iy=-1" target="_blank">连衣裙</a> 
     <a name="index2_none_floor01_rc02" href="http://list.suning.com/0-346870-0.html" target="_blank">男士衬衫</a> 
     <a name="index2_none_floor01_rc03" href="http://list.suning.com/0-340551-0.html" target="_blank">内衣内裤</a> 
     <a name="index2_none_floor01_rc04" href="http://search.suning.com/%E4%BC%91%E9%97%B2%E9%9E%8B/" target="_blank">休闲鞋</a> 
     <a name="index2_none_floor01_rc05" href="http://search.suning.com/%E7%94%B7%E5%A3%AB%E5%8F%8C%E8%82%A9%E5%8C%85/cityId=" target="_blank">双肩包</a> 
     <a name="index2_none_floor01_rc06" href="http://search.suning.com/%E9%BB%84%E9%87%91/cityId={cityId}" target="_blank">黄金</a> 
     <a name="index2_none_floor01_rc07" href="http://search.suning.com/%E6%89%8B%E8%A1%A8/cityId={cityId}" target="_blank">手表</a> 
     <a name="index2_none_floor01_rc08" href="http://list.suning.com/0-420503-0.html" target="_blank">跑步鞋</a> 
    </div> 
   </div> 
   <div class="floor-main"> 
    <div class="side"> 
     <a expotype="2" expo="index_lcgg0401:女装" name="index2_none_floor01_zcgg" class="big" href="http://cuxiao.suning.com/city/nzny00062.htm" target="_blank" title="女装"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145708338338566561.jpg" alt="" /></a> 
     <!-- 频道入口，开发需要传个数给我，用css判断是1个、2个还是4个【3个会隐藏1个，多余4个作为4个处理】 --> 
     <div class="entrances entrances4"> 
      <a name="index2_none_floor01_pd01" href="clothes.html" target="_blank"> <span class="bg"></span> <i class="ng-iconfont"></i> <em>服装城</em> </a> 
      <a name="index2_none_floor01_pd02" href="http://sports.suning.com/" target="_blank"> <span class="bg"></span> <i class="ng-iconfont"></i> <em>运动馆</em> </a> 
      <a name="index2_none_floor01_pd03" href="http://pindao.suning.com/city/pjxiangbao.htm" target="_blank"> <span class="bg"></span> <i class="ng-iconfont"></i> <em>皮具箱包</em> </a> 
      <a name="index2_none_floor01_pd04" href="http://pindao.suning.com/city/zhubaozhongbiao.htm" target="_blank"> <span class="bg"></span> <i class="ng-iconfont"></i> <em>钟表珠宝</em> </a> 
     </div> 
     <!-- 品牌列表 --> 
     <ul class="brands"> 
      <li class="item1"><a name="index2_none_floor01_pp01" href="http://shop.suning.com/70100330/index.html" target="_blank" title="美特斯邦威"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145586877346781571.jpg" alt="" /></a></li> 
      <li class="item2"><a name="index2_none_floor01_pp02" href="http://shop.suning.com/70084113/index.html" target="_blank" title="拉夏贝尔"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145586837434323541.jpg" alt="" /></a></li> 
      <li class="item3"><a name="index2_none_floor01_pp03" href="http://chowtaiseng.suning.com/" target="_blank" title="周大生"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145587000637829673.jpg" alt="" /></a></li> 
      <li class="item4"><a name="index2_none_floor01_pp04" href="http://shop.suning.com/70086168/index.html" target="_blank" title="美洲野牛"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145732270891116310.jpg" alt="" /></a></li> 
      <li class="item5"><a name="index2_none_floor01_pp05" href="http://shop.suning.com/70109679/index.html" target="_blank" title="卡西欧"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145587002559855079.jpg" alt="" /></a></li> 
      <li class="item6"><a name="index2_none_floor01_pp06" href="http://shengdao.suning.com/" target="_blank" title="阿迪达斯"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145587538477727935.jpg" alt="" /></a></li> 
     </ul> 
    </div> 
    <!-- tab切第一组 广告[[ --> 
    <div class="main-col J-domLazy" style="display: block;"> 
     <script type="text/html">
<div class="col1">
<a expoType="2" expo="index_lcgg0402:钟表会场" name="index2_none_floor01_gg01" href="http://sale.suning.com/bh/gb315/index.html" rel="nofollow" target="_blank" title="钟表会场"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145769569626280647.jpg" alt=""/></a>
</div>
<ul class="col2">
<li cpmid="100002518"><a expoType="2" expo="index_lcgg0403:郎朗推荐 智能钢琴" name="index2_none_floor01_gg0201" d-href="http://shop.suning.com/70083469/index.html" rel="nofollow" target="_blank" d-title="郎朗推荐 智能钢琴"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145766421594550237.jpg" d-alt="郎朗推荐 智能钢琴"/></a></li>
<li ><a expoType="2" expo="index_lcgg0404:男装" name="index2_none_floor01_gg0202" href="http://cuxiao.suning.com/city/nz00051.htm" rel="nofollow" target="_blank" title="男装"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145708571264119283.jpg" alt=""/></a></li>
<li cpmid="100002519"><a expoType="2" expo="index_lcgg0405:高端品质白菜的价格" name="index2_none_floor01_gg0203" d-href="http://shop.suning.com/70132359/index.html?fuwu-qq=2019302821" rel="nofollow" target="_blank" d-title="高端品质白菜的价格"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145708256086316532.jpg" d-alt="高端品质白菜的价格"/></a></li>
<li ><a expoType="2" expo="index_lcgg0406:运动" name="index2_none_floor01_gg0204" href="http://cuxiao.suning.com/city/hwjs00064.htm" rel="nofollow" target="_blank" title="运动"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145757552575532358.jpg" alt=""/></a></li>
</ul>
<ul class="col3">
<li ><a expoType="2" expo="index_lcgg0407:鞋包低至39" name="index2_none_floor01_gg0301" href="http://sale.suning.com/bh/xbkx03/index.html" rel="nofollow" target="_blank" title="鞋包低至39"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145751261111633522.jpg" alt=""/></a></li>
<li ><a expoType="2" expo="index_lcgg0408:内衣" name="index2_none_floor01_gg0302" href="http://cuxiao.suning.com/city/nzny00063.htm" rel="nofollow" target="_blank" title="内衣"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145751286832628027.jpg" alt=""/></a></li>
<li ><a expoType="2" expo="index_lcgg0409:服饰会场" name="index2_none_floor01_gg0303" href="http://sale.suning.com/bh/fsxb315/index.html" rel="nofollow" target="_blank" title="服饰会场"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145769825752648204.jpg" alt=""/></a></li>
</ul>
</script> 
    </div> 
    <!-- tab切第一组 广告]] --> 
    <!-- tab切第二组 单品[[ --> 
    <div class="main-col J-domLazy"> 
     <script type="text/html">
<ul class="prd-list">
<li data-sku="133518085|1|2|0070078769">
<p class="face"><a expoType="1" expo="index_lcsp0401:0070078769|133518085" name="index2_none_floor01_sp01" href="http://product.suning.com/0070078769/133518085.html?srcpoint=index2_none_floor01_sp01" target="_blank" title="麦诺伊春百搭文艺白色衬衫"><img src="{{ asset(_HOME_ . '/images') }}/000000000133518085_1_120x120.jpg" alt="舒适百搭 知性翻领 弧形下摆 纯棉 内搭外穿均可"/></a></p>
<p class="name"><a href="http://product.suning.com/0070078769/133518085.html?srcpoint=index2_none_floor01_sp01" target="_blank">麦诺伊春百搭文艺白色衬衫</a></p>
<p class="price"></p>
</li>
<li data-sku="142647720|1|2|0070062166">
<p class="face"><a expoType="1" expo="index_lcsp0402:0070062166|142647720" name="index2_none_floor01_sp02" href="http://product.suning.com/0070062166/142647720.html?srcpoint=index2_none_floor01_sp02" target="_blank" title="艾塞亚春季公主风家居服"><img src="http://image2.suning.cn/b2c/catentries/000000000142647720_1_120x120.jpg" alt="年关将至，快递进入春节模式，2月1日起只接单不发货，2月15日开始陆续发货。感谢您的选购，祝您春节愉快！"/></a></p>
<p class="name"><a href="http://product.suning.com/0070062166/142647720.html?srcpoint=index2_none_floor01_sp02" target="_blank">艾塞亚春季公主风家居服</a></p>
<p class="price"></p>
</li>
<li data-sku="140921730|1|2|0070081108">
<p class="face"><a expoType="1" expo="index_lcsp0403:0070081108|140921730" name="index2_none_floor01_sp03" href="http://product.suning.com/0070081108/140921730.html?srcpoint=index2_none_floor01_sp03" target="_blank" title="海澜之家2016春季新品夹克"><img src="http://image2.suning.cn/b2c/catentries/000000000140921730_1_120x120.jpg" alt="新品上架"/></a></p>
<p class="name"><a href="http://product.suning.com/0070081108/140921730.html?srcpoint=index2_none_floor01_sp03" target="_blank">海澜之家2016春季新品夹克</a></p>
<p class="price"></p>
</li>
<li data-sku="132972203|1|2|0070076884">
<p class="face"><a expoType="1" expo="index_lcsp0404:0070076884|132972203" name="index2_none_floor01_sp04" href="http://product.suning.com/0070076884/132972203.html?srcpoint=index2_none_floor01_sp04" target="_blank" title="onemix玩觅 气垫跑步鞋"><img src="{{ asset(_HOME_ . '/images') }}/000000000132972203_1_120x120.jpg" alt="【顺丰包邮】休闲时尚百搭鞋，下单即送精美礼品！"/></a></p>
<p class="name"><a href="http://product.suning.com/0070076884/132972203.html?srcpoint=index2_none_floor01_sp04" target="_blank">onemix玩觅 气垫跑步鞋</a></p>
<p class="price"></p>
</li>
<li data-sku="142570713|1|2|0070089331">
<p class="face"><a expoType="1" expo="index_lcsp0405:0070089331|142570713" name="index2_none_floor01_sp05" href="http://product.suning.com/0070089331/142570713.html?srcpoint=index2_none_floor01_sp05" target="_blank" title="正品Armani阿玛尼手表女式时尚休闲欧美品牌女款腕表女表钢带防水石英表指针式女表精钢时尚石英腕表 AR1909 AR1909金色"><img src="{{ asset(_HOME_ . '/images') }}/000000000142570713_1_120x120.jpg" alt="2.26日0点-24点，手机端掌上抢599元疯抢！仅限50只！阿玛尼正品保证，7天无条件退换货，3年店铺保修！"/></a></p>
<p class="name"><a href="http://product.suning.com/0070089331/142570713.html?srcpoint=index2_none_floor01_sp05" target="_blank">正品Armani阿玛尼手表女式时尚休闲欧美品牌女款腕表女表钢带防水石英表指针式女表精钢时尚石英腕表 AR1909 AR1909金色</a></p>
<p class="price"></p>
</li>
</ul>
<ul class="prd-list">
<li data-sku="141522374|1|2|0070063122">
<p class="face"><a expoType="1" expo="index_lcsp0406:0070063122|141522374" name="index2_none_floor01_sp06" href="http://product.suning.com/0070063122/141522374.html?srcpoint=index2_none_floor01_sp06" target="_blank" title="钻石快线 黄金戒指 简约经典光圈足金戒指 黄金戒指男女款情侣款金戒指 女戒"><img src="{{ asset(_HOME_ . '/images') }}/000000000141522374_1_120x120.jpg" alt="男戒约8.48-8.58克，女戒约3.63-3.73克，现货有限，售完则需客服会联系定制，满800减50，下单送镜子一个"/></a></p>
<p class="name"><a href="http://product.suning.com/0070063122/141522374.html?srcpoint=index2_none_floor01_sp06" target="_blank">钻石快线 黄金戒指 简约经典光圈足金戒指 黄金戒指男女款情侣款金戒指 女戒</a></p>
<p class="price"></p>
</li>
<li data-sku="142986355|1|2|0070087597">
<p class="face"><a expoType="1" expo="index_lcsp0407:0070087597|142986355" name="index2_none_floor01_sp07" href="http://product.suning.com/0070087597/142986355.html?srcpoint=index2_none_floor01_sp07" target="_blank" title="星期六ST&SAT 2016年新款职业金属浅口单鞋SS61115553 黑色 38码"><img src="http://image5.suning.cn/b2c/catentries/000000000142986355_1_120x120.jpg" alt="星期六ST&SAT 2016年新款职业金属浅口单鞋SS61115553"/></a></p>
<p class="name"><a href="http://product.suning.com/0070087597/142986355.html?srcpoint=index2_none_floor01_sp07" target="_blank">星期六ST&SAT 2016年新款职业金属浅口单鞋SS61115553 黑色 38码</a></p>
<p class="price"></p>
</li>
<li data-sku="141544195|1|2|0070119648">
<p class="face"><a expoType="1" expo="index_lcsp0408:0070119648|141544195" name="index2_none_floor01_sp08" href="http://product.suning.com/0070119648/141544195.html?srcpoint=index2_none_floor01_sp08" target="_blank" title="歌诺瑞丝新品连衣裙"><img src="{{ asset(_HOME_ . '/images') }}/000000000141544195_1_120x120.jpg" alt="年底放假本店1月15日起暂停退换货，有需要请于2月22日~2月28日申请，1月23日停止发货，详情见店内公告！！！"/></a></p>
<p class="name"><a href="http://product.suning.com/0070119648/141544195.html?srcpoint=index2_none_floor01_sp08" target="_blank">歌诺瑞丝新品连衣裙</a></p>
<p class="price"></p>
</li>
<li data-sku="132906203|1|2|0070085460">
<p class="face"><a expoType="1" expo="index_lcsp0409:0070085460|132906203" name="index2_none_floor01_sp09" href="http://product.suning.com/0070085460/132906203.html?srcpoint=index2_none_floor01_sp09" target="_blank" title="Jussara Lee正品春季新款休闲男士直筒裤牛仔裤修身男装 2065 32(2尺5) 蓝色"><img src="{{ asset(_HOME_ . '/images') }}/000000000132906203_1_120x120.jpg" alt="【即日起只接单不发货，统一到年后2月15日开始发货】防伪正品保障，精美包装，月销30000件"/></a></p>
<p class="name"><a href="http://product.suning.com/0070085460/132906203.html?srcpoint=index2_none_floor01_sp09" target="_blank">Jussara Lee正品春季新款休闲男士直筒裤牛仔裤修身男装 2065 32(2尺5) 蓝色</a></p>
<p class="price"></p>
</li>
<li data-sku="141544477|1|2|0070063204">
<p class="face"><a expoType="1" expo="index_lcsp0410:0070063204|141544477" name="index2_none_floor01_sp10" href="http://product.suning.com/0070063204/141544477.html?srcpoint=index2_none_floor01_sp10" target="_blank" title="莫尔克包包 两件八折"><img src="{{ asset(_HOME_ . '/images') }}/000000000141544477_1_120x120.jpg" alt="贺新年 满100减5 满200减20 满300减40,满立减"/></a></p>
<p class="name"><a href="http://product.suning.com/0070063204/141544477.html?srcpoint=index2_none_floor01_sp10" target="_blank">莫尔克包包 两件八折</a></p>
<p class="price"></p>
</li>
</ul>
</script> 
    </div> 
    <!-- tab切第二组 单品]] jsModelId--> 
    <script type="text/html" id="jsModel_4796_4">
<ul class="prd-list">
<% for ( var i = 0; i < data.length; i++ ) { %>
<% if (i < 5){ %>
<li <%=data[i].sku%>>
<p class="face"><a expoType="1" expo="<%=data[i].expo%>" id="<%=data[i].id%>" name="<%=data[i].trickPointP%>" href="<%=data[i].href%>" target="_blank" title="<%=data[i].name%>"><img src="<%=data[i].pic%>" alt="<%=data[i].name%>"/></a></p>
<p class="name"><a href="<%=data[i].href%>" target="_blank"><%=data[i].name%></a></p>
<p class="price"></p>
</li>
<% } %>
<%}%>
</ul>
<ul class="prd-list">
<% for ( var i = 0; i < data.length; i++ ) { %>
<% if ((i > 4) && (i < 10)){ %>
<li <%=data[i].sku%>>
<p class="face"><a expoType="1" expo="<%=data[i].expo%>" id="<%=data[i].id%>" name="<%=data[i].trickPointP%>" href="<%=data[i].href%>" target="_blank" title="<%=data[i].name%>"><img src="<%=data[i].pic%>" alt="<%=data[i].name%>"/></a></p>
<p class="name"><a href="<%=data[i].href%>" target="_blank"><%=data[i].name%></a></p>
<p class="price"></p>
</li>
<% } %>
<% } %>
</ul>
</script> 
   </div> 
  </div> 
  <div class="wrapper floor-middle-act"> 
   <script type="text/javascript">
(function () {
//中通数据
var activity_data = {
srcWide: '{{ asset(_HOME_ . '/images') }}/145770213618356511.jpg',
srcNarrow: '{{ asset(_HOME_ . '/images') }}/145770213284981321.jpg',
href: 'http://sale.suning.com/sh/joyoung0310/index.html',
title: '九阳品牌日',
name: 'index2_none_floor01_zt'
};
var src = bigscreen ? activity_data.srcWide : activity_data.srcNarrow,
href = activity_data.href,
title = activity_data.title,
name = activity_data.name;
var html = '<a name="' + name + '" target="_blank" title="' + title + '" href="' + href + '">';
html += '<img lazy-src="' + src + '" alt="' + title + '" />';
html += '</a>';
var obj = document.getElementsByTagName('script'),
objLen = obj.length;
obj[objLen - 1].parentNode.innerHTML = html;
})();
</script> 
  </div> 
  <div class="wrapper floor floor2"> 
   <div class="floor-head clearfix"> 
    <div class="title"> 
     <h3> <b>2F</b> 手机通讯 </h3> 
     <h4>bbbbbbb</h4> 
    </div> 
    <ul class="tab"> 
     <li class="on"><a href="javascript:void(0);"><i></i><em>热门活动</em></a></li> 
     <li><a href="javascript:void(0);"><i></i><em>潮机推荐</em></a></li> 
    </ul> 
    <div class="links"> 
     <a name="index2_none_floor02_rc01" href="http://search.suning.com/iPhone6s/cityId={city}" target="_blank">iPhone6s</a> 
     <a name="index2_none_floor02_rc02" href="http://product.suning.com/142074417.html" target="_blank">小米4S</a> 
     <a name="index2_none_floor02_rc03" href="http://search.suning.com/%E8%8D%A3%E8%80%805X/cityId={city}" target="_blank">荣耀5X</a> 
     <a name="index2_none_floor02_rc04" href="http://product.suning.com/0000000000/142929539.html" target="_blank">三星Galaxy S7</a> 
     <a name="index2_none_floor02_rc05" href="http://search.suning.com/%E8%8D%A3%E8%80%807/cityId={city}" target="_blank">荣耀7</a> 
     <a name="index2_none_floor02_rc06" href="http://search.suning.com/vivo%20Xplay5/cityId={city}" target="_blank">vivo Xplay5</a> 
     <a name="index2_none_floor02_rc07" href="http://search.suning.com/oppo%20r7s/cityId={city" target="_blank">OPPO R7s</a> 
     <a name="index2_none_floor02_rc08" href="http://search.suning.com/zuk/cityId={city}" target="_blank">ZUK</a> 
    </div> 
   </div> 
   <div class="floor-main"> 
    <div class="side"> 
     <a expotype="2" expo="index_lcgg0201:手机频道" name="index2_none_floor02_zcgg" class="big" href="http://shouji.suning.com/" target="_blank" title="手机频道"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145768453553677226.jpg" alt="" /></a> 
     <!-- 频道入口，开发需要传个数给我，用css判断是1个、2个还是4个【3个会隐藏1个，多余4个作为4个处理】 --> 
     <div class="entrances entrances4"> 
      <a name="index2_none_floor02_pd01" href="http://shouji.suning.com/" target="_blank"> <span class="bg"></span> <i class="ng-iconfont"></i> <em>热卖手机</em> </a> 
      <a name="index2_none_floor02_pd02" href="http://pindao.suning.com/city/sjpj.htm" target="_blank"> <span class="bg"></span> <i class="ng-iconfont"></i> <em>手机配件</em> </a> 
      <a name="index2_none_floor02_pd03" href="http://pindao.suning.com/city/zhinengchuandai.htm" target="_blank"> <span class="bg"></span> <i class="ng-iconfont"></i> <em>智能手环</em> </a> 
      <a name="index2_none_floor02_pd04" href="http://yys.suning.com/" target="_blank"> <span class="bg"></span> <i class="ng-iconfont"></i> <em>合约机</em> </a> 
     </div> 
     <!-- 品牌列表 --> 
     <ul class="brands"> 
      <li class="item1"><a name="index2_none_floor02_pp01" href="http://cuxiao.suning.com/city/tx00666.htm" target="_blank" title="小米"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145699221854752431.jpg" alt="" /></a></li> 
      <li class="item2"><a name="index2_none_floor02_pp02" href="http://honor.suning.com/index.html" target="_blank" title="荣耀"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145699242740351623.jpg" alt="" /></a></li> 
      <li class="item3"><a name="index2_none_floor02_pp03" href="http://cuxiao.suning.com/city/tx00007.htm" target="_blank" title="苹果"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145699261702726317.jpg" alt="" /></a></li> 
      <li class="item4"><a name="index2_none_floor02_pp04" href="http://nubia.suning.com/" target="_blank" title="努比亚官方旗舰店"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145699276423099556.jpg" alt="" /></a></li> 
      <li class="item5"><a name="index2_none_floor02_pp05" href="http://shop.suning.com/30000033/index.html" target="_blank" title="OPPO手机官方旗舰店"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145699247073975447.jpg" alt="" /></a></li> 
      <li class="item6"><a name="index2_none_floor02_pp06" href="http://shop.suning.com/30000019/index.html" target="_blank" title="vivo官方旗舰店"><img lazy-src="{{ asset(_HOME_ . '/images') }}/145681842701340551.jpg" alt="" /></a></li> 
     </ul> 
    </div> 
    <!-- tab切第一组 广告[[ --> 
    <div class="main-col J-domLazy" style="display: block;"> 
     <script type="text/html">
<div class="col1">
<a expoType="2" expo="index_lcgg0202:红包限量抢" name="index2_none_floor02_gg01" href="http://sale.suning.com/tx/m309phone/index.html" rel="nofollow" target="_blank" title="红包限量抢"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145768468714084679.jpg" alt=""/></a>
</div>
<ul class="col2">
<li cpmid="100002520"><a expoType="2" expo="index_lcgg0203:三星Galaxy S7预约" name="index2_none_floor02_gg0201" d-href="http://sale.suning.com/tx/samsungS7/index.html" rel="nofollow" target="_blank" d-title="三星Galaxy S7预约"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145760262012161424.jpg" d-alt="三星Galaxy S7预约"/></a></li>
<li ><a expoType="2" expo="index_lcgg0204:zuk苏宁开售" name="index2_none_floor02_gg0202" href="http://cuxiao.suning.com/city/tx00556.htm" rel="nofollow" target="_blank" title="zuk苏宁开售"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145768992998347943.jpg" alt=""/></a></li>
<li cpmid="100002521"><a expoType="2" expo="index_lcgg0205:vivo曲屏金属Xplay5" name="index2_none_floor02_gg0203" d-href="http://shop.suning.com/30000019/index.html" rel="nofollow" target="_blank" d-title="vivo曲屏金属Xplay5"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145690806455152340.jpg" d-alt="vivo曲屏金属Xplay5"/></a></li>
<li ><a expoType="2" expo="index_lcgg0206:PRO5 领券直降" name="index2_none_floor02_gg0204" href="http://cuxiao.suning.com/city/tx309.htm " rel="nofollow" target="_blank" title="PRO5 领券直降"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145768953237367557.jpg" alt=""/></a></li>
</ul>
<ul class="col3">
<li ><a expoType="2" expo="index_lcgg0207:苏宁KA平台" name="index2_none_floor02_gg0301" href="http://cuxiao.suning.com/city/tx00638.htm" rel="nofollow" target="_blank" title="苏宁KA平台"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145742774257547120.jpg" alt=""/></a></li>
<li ><a expoType="2" expo="index_lcgg0208:315正品特价" name="index2_none_floor02_gg0302" href="http://sale.suning.com/tx/pjnwj01/index.html" rel="nofollow" target="_blank" title="315正品特价"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145770448321928612.jpg" alt=""/></a></li>
<li ><a expoType="2" expo="index_lcgg0209:白送流量要不要" name="index2_none_floor02_gg0302" href="http://sale.suning.com/tx/zgydtc/index.html" rel="nofollow" target="_blank" title="白送流量要不要"><img class="lazy-loading" src="{{ asset(_HOME_ . '/images') }}/145761090986364893.jpg" alt=""/></a></li>
</ul>
</script> 
    </div> 
    <!-- tab切第一组 广告]] --> 
    <!-- tab切第二组 单品[[ --> 
    <div class="main-col J-domLazy" datacode="tr000000936" jsmodelid="jsModel_4796_6" trickpoint="index2_none_recshouye2_2" floornum="2"> 
     <script type="text/html">
<ul class="prd-list">
<li data-sku="125359836|1|3|">
<p class="face"><a expoType="1" expo="index_lcsp0201:0000000000|125359836" name="index2_none_floor02_sp01" href="http://product.suning.com/0000000000/125359836.html?srcpoint=index2_none_floor02_sp01" target="_blank" title="华为荣耀畅玩4X（CHE1-CL20）金 全网通4G手机 双卡双待"><img src="{{ asset(_HOME_ . '/images') }}/000000000125359836_1_120x120.jpg" alt="①【1.27】用券再减30元，手机端请点击商品详情页图片领券！②使用任性付，0首付，6期免息，每月只要166.5元"/></a></p>
<p class="name"><a href="http://product.suning.com/0000000000/125359836.html?srcpoint=index2_none_floor02_sp01" target="_blank">华为荣耀畅玩4X（CHE1-CL20）金 全网通4G手机 双卡双待</a></p>
<p class="price"></p>
</li>
<li data-sku="125567965|1|2|0070086258">
<p class="face"><a expoType="1" expo="index_lcsp0202:0070086258|125567965" name="index2_none_floor02_sp02" href="http://product.suning.com/0070086258/125567965.html?srcpoint=index2_none_floor02_sp02" target="_blank" title="荣耀 6 Plus (PE-TL20) 3GB内存 移动4G手机 双卡双待双通 白"><img src="http://image2.suning.cn/b2c/catentries/000000000125567965_1_120x120.jpg" alt="【领红包直减100,享任性付6期免息分期】优惠仅限27日当天,官方行货,品质保证,发货迅速"/></a></p>
<p class="name"><a href="http://product.suning.com/0070086258/125567965.html?srcpoint=index2_none_floor02_sp02" target="_blank">荣耀 6 Plus (PE-TL20) 3GB内存 移动4G手机 双卡双待双通 白</a></p>
<p class="price"></p>
</li>
<li data-sku="129801979|1|3|">
<p class="face"><a expoType="1" expo="index_lcsp0203:0000000000|129801979" name="index2_none_floor02_sp03" href="http://product.suning.com/0000000000/129801979.html?srcpoint=index2_none_floor02_sp03" target="_blank" title="华为荣耀7移动4G（冰河银）双卡双待（PLK-TL00）（3GB RAM）"><img src="http://image2.suning.cn/b2c/catentries/000000000129801979_1_120x120.jpg" alt="【用券立减50元】移动端用户，请点击详情页中图片领券。27日3场脉冲抢购，10点08/16点/20点！"/></a></p>
<p class="name"><a href="http://product.suning.com/0000000000/129801979.html?srcpoint=index2_none_floor02_sp03" target="_blank">华为荣耀7移动4G（冰河银）双卡双待（PLK-TL00）（3GB RAM）</a></p>
<p class="price"></p>
</li>
<li data-sku="141926677|1|3|">
<p class="face"><a expoType="1" expo="index_lcsp0204:0000000000|141926677" name="index2_none_floor02_sp04" href="http://product.suning.com/0000000000/141926677.html?srcpoint=index2_none_floor02_sp04" target="_blank" title="小米 红米手机2A 高配移动4G双卡版 白色 16GB"><img src="{{ asset(_HOME_ . '/images') }}/000000000141926677_1_120x120.jpg" alt="新品上市，新升级高通骁龙64位四核处理器，4.7英寸舒适握感，2GB内存+16GB容量！"/></a></p>
<p class="name"><a href="http://product.suning.com/0000000000/141926677.html?srcpoint=index2_none_floor02_sp04" target="_blank">小米 红米手机2A 高配移动4G双卡版 白色 16GB</a></p>
<p class="price"></p>
</li>
<li data-sku="134003091|1|3|">
<p class="face"><a expoType="1" expo="index_lcsp0205:0000000000|134003091" name="index2_none_floor02_sp05" href="http://product.suning.com/0000000000/134003091.html?srcpoint=index2_none_floor02_sp05" target="_blank" title="Apple iPhone 6s 16GB 玫瑰金色 移动联通电信4G手机"><img src="{{ asset(_HOME_ . '/images') }}/000000000134003091_1_120x120.jpg" alt="苏宁直发，正品行货，全国联保，急速物流！"/></a></p>
<p class="name"><a href="http://product.suning.com/0000000000/134003091.html?srcpoint=index2_none_floor02_sp05" target="_blank">Apple iPhone 6s 16GB 玫瑰金色 移动联通电信4G手机</a></p>
<p class="price"></p>
</li>
</ul>
<ul class="prd-list">
<li data-sku="140866131|1|3|">
<p class="face"><a expoType="1" expo="index_lcsp0206:0000000000|140866131" name="index2_none_floor02_sp06" href="http://product.suning.com/0000000000/140866131.html?srcpoint=index2_none_floor02_sp06" target="_blank" title="华硕手机电神5000 Zenfone Max（黑色）"><img src="http://image5.suning.cn/b2c/catentries/000000000140866131_1_120x120.jpg" alt="前5000名699元限量抢！5.5英寸大屏，5000mAh大电池，30天超长待机。"/></a></p>
<p class="name"><a href="http://product.suning.com/0000000000/140866131.html?srcpoint=index2_none_floor02_sp06" target="_blank">华硕手机电神5000 Zenfone Max（黑色）</a></p>
<p class="price"></p>
</li>
<li data-sku="134731665|1|3|">
<p class="face"><a expoType="1" expo="index_lcsp0207:0000000000|134731665" name="index2_none_floor02_sp07" href="http://product.suning.com/0000000000/134731665.html?srcpoint=index2_none_floor02_sp07" target="_blank" title="锤子 坚果 16GB 青色 移动联通4G手机 双卡双待"><img src="{{ asset(_HOME_ . '/images') }}/000000000134731665_1_120x120.jpg" alt="1月23日起，每天购买前五十名 送坚果手机价值49元原装后壳，先到先得"/></a></p>
<p class="name"><a href="http://product.suning.com/0000000000/134731665.html?srcpoint=index2_none_floor02_sp07" target="_blank">锤子 坚果 16GB 青色 移动联通4G手机 双卡双待</a></p>
<p class="price"></p>
</li>
<li data-sku="136784875|1|3|">
<p class="face"><a expoType="1" expo="index_lcsp0208:0000000000|136784875" name="index2_none_floor02_sp08" href="http://product.suning.com/0000000000/136784875.html?srcpoint=index2_none_floor02_sp08" target="_blank" title="OPPO R7s 长续航闪充利器移动4G手机 玫瑰金色"><img src="{{ asset(_HOME_ . '/images') }}/000000000136784875_1_120x120.jpg" alt="【领券20再购买】即日起至31日，购买R7系列机型，每天10点前30名支付用户再送新年大礼包（背包+台历）！赠品限量！"/></a></p>
<p class="name"><a href="http://product.suning.com/0000000000/136784875.html?srcpoint=index2_none_floor02_sp08" target="_blank">OPPO R7s 长续航闪充利器移动4G手机 玫瑰金色</a></p>
<p class="price"></p>
</li>
<li data-sku="139556371|1|3|">
<p class="face"><a expoType="1" expo="index_lcsp0209:0000000000|139556371" name="index2_none_floor02_sp09" href="http://product.suning.com/0000000000/139556371.html?srcpoint=index2_none_floor02_sp09" target="_blank" title="华为 HUAWEI Mate8 3GB+32GB版 联通定制版（月光银）"><img src="{{ asset(_HOME_ . '/images') }}/000000000139556371_1_120x120.jpg" alt="现货发售，年度旗舰机！6寸大屏，指纹识别，4000毫安电池，搭载麒麟950芯片，高性能与长续航的结合。支持移动联通双4G！"/></a></p>
<p class="name"><a href="http://product.suning.com/0000000000/139556371.html?srcpoint=index2_none_floor02_sp09" target="_blank">华为 HUAWEI Mate8 3GB+32GB版 联通定制版（月光银）</a></p>
<p class="price"></p>
</li>
<li data-sku="141926673|1|3|">
<p class="face"><a expoType="1" expo="index_lcsp0210:0000000000|141926673" name="index2_none_floor02_sp10" href="http://product.suning.com/0000000000/141926673.html?srcpoint=index2_none_floor02_sp10" target="_blank" title="小米 红米Note 3 全网通版 金色 16GB"><img src="http://image5.suning.cn/b2c/catentries/000000000141926673_1_120x120.jpg" alt=""/></a></p>
<p class="name"><a href="http://product.suning.com/0000000000/141926673.html?srcpoint=index2_none_floor02_sp10" target="_blank">小米 红米Note 3 全网通版 金色 16GB</a></p>
<p class="price"></p>
</li>
</ul>
</script> 
    </div> 
    <!-- tab切第二组 单品]] jsModelId--> 
    <script type="text/html" id="jsModel_4796_6">
<ul class="prd-list">
<% for ( var i = 0; i < data.length; i++ ) { %>
<% if (i < 5){ %>
<li <%=data[i].sku%>>
<p class="face"><a expoType="1" expo="<%=data[i].expo%>" id="<%=data[i].id%>" name="<%=data[i].trickPointP%>" href="<%=data[i].href%>" target="_blank" title="<%=data[i].name%>"><img src="<%=data[i].pic%>" alt="<%=data[i].name%>"/></a></p>
<p class="name"><a href="<%=data[i].href%>" target="_blank"><%=data[i].name%></a></p>
<p class="price"></p>
</li>
<% } %>
<%}%>
</ul>
<ul class="prd-list">
<% for ( var i = 0; i < data.length; i++ ) { %>
<% if ((i > 4) && (i < 10)){ %>
<li <%=data[i].sku%>>
<p class="face"><a expoType="1" expo="<%=data[i].expo%>" id="<%=data[i].id%>" name="<%=data[i].trickPointP%>" href="<%=data[i].href%>" target="_blank" title="<%=data[i].name%>"><img src="<%=data[i].pic%>" alt="<%=data[i].name%>"/></a></p>
<p class="name"><a href="<%=data[i].href%>" target="_blank"><%=data[i].name%></a></p>
<p class="price"></p>
</li>
<% } %>
<% } %>
</ul>
</script> 
   </div> 
  </div> 

@endsection
