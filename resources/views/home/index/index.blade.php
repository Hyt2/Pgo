@extends('layout.home')
@section('content')
<?php $goods_src = u(GOODS_IMG) ?>
 <div class="first-screen"> 
   <div class="banner"> 
    <a class="banner-btn banner-prev" href="javascript:void(0);" name="index1_none_lbgg_qhan01" role="left"> <span class="btn-bg"></span> <i class="arr"></i> </a> 
    <a class="banner-btn banner-next" href="javascript:void(0);" name="index1_none_lbgg_qhan02" role="right"> <span class="btn-bg"></span> <i class="arr"></i> </a> 
    <div class="banner-pic"> 
      @foreach($ads[0] as $k=>$v) 
        <ul>
          <li style="background-color:{{$v[1]}};">
              <a expotype="2" expo="index_lbgg0101:365天放心购" href="{{$v[2]}}" target="_blank" name="index2_none_lbgg_010{{$k}}">
                <img data-src="{{u(_AD_).$v[0]}}" alt="365天放心购" class="ad" />
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
              <p><i></i><a target="_blank" name="index2_none_lbgg_0{{$k}}01">{{$v['ad_name']}}</a></p>  
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
      <!-- <a name="index2_none_gg_gd" target="_blank" href="http://club.suning.com/forum.php?mod=forumdisplay&amp;fid=435&amp;filter=typeid&amp;typeid=1609" class="more">更多</a>  -->
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
<?php $goods = model('Goods') ?>
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
        <li>
            <a  target="_blank" href="{{url('/goods_brand/'.$v->id)}}" >
                <img lazy-src="{{_UPLOADS_.'/goods_brand'.'/'.$v->brand_logo}}"/>
            </a>
        </li>
    @endforeach 
   </ul> 
  </div> 


<!-- 2楼 -->
<?php 
    $i = 1 ;
    $m = 1;
?>
@foreach($cates as $k => $v)
  <div class="wrapper floor floor2" id="lou-{{$m}}"> 
   <div class="floor-head clearfix"> 
    <div class="title"> 
     <h3> <b>{{ $i++ }}F</b> {{ cut_str($v->cate_name, 8) }} </h3> 
     <h4>bbbbbbb</h4> 
    </div> 
    <ul class="tab"> 
     <li class="on"><a href="javascript:void(0);"><i></i><em>猜你喜欢</em></a></li> 
    </ul> 
    
    <div class="links"> 
    <?php $gs = [] ?>
    <?php $gs['a'] = [] ?>
    <?php $gs['b'] = [] ?>
    @foreach($v['child'] as $k1 => $v1)
      <?php 
            $res = $goods->where('cate_id', $v1->id)->get();
            if ($res->toArray()) {
                if (count($gs) <= 10) {
                    if (count($gs['a']) <= 5) {
                        $gs['a'][] = $res;
                    }
                    // dump(count($gs));
                    if (count($gs) >= 6 && count($gs) <= 10) {

                        $gs['b'][] = $res;
                    }
                }
            }
            // dump($gs);
       ?>
       <a name="index2_none_floor02_rc01" href="{{ url('goodslist?cate_id=' . $v1->id) }}" target="_blank">
          {{$v1->cate_name}}
       </a> 
     @endforeach
    </div> 
   </div> 
   <div class="floor-main"> 
    <div class="side"> 
     <a expotype="2" expo="index_lcgg0201:手机频道" name="index2_none_floor02_zcgg" class="big" href="http://shouji.suning.com/" target="_blank" title="手机频道"><img lazy-src="{{ asset(_HOME_ . '/images') }}/@if($m == 1)145768389993474361.jpg @elseif($m == 2)145758046843155381.jpg  @elseif($m==3)145768453553677226.jpg @endif" alt="" /></a> 
     <!-- 频道入口，开发需要传个数给我，用css判断是1个、2个还是4个【3个会隐藏1个，多余4个作为4个处理】 --> 
     <div class="entrances entrances4">
     <?php $n = 0 ?> 
      @foreach($v['child'] as $k1 => $v1)
        <?php 

          $n++;
          if ($n >= 5) {
            continue;
          }
         ?>
        <a name="index2_none_floor02_pd01" href="{{ url('goodslist?cate_id=' . $v1->id) }}" target="_blank"> <span class="bg"></span> <i class="ng-iconfont"></i> <em>{{$v1->cate_name}}</em> </a> 
      @endforeach
      
     </div> 
     <!-- 品牌列表 --> 
     <ul class="brands"> 
        <?php $goods_brand = \DB::select('SELECT *,RAND() as `r` FROM `goods_brand` ORDER BY `r` LIMIT 0,6') ?>
      @foreach($goods_brand as $brand)
          <li class="item1">
            <a name="index2_none_floor02_pp01" href="{{ url("goods_brand/$brand->id") }}" target="_blank" title="{{$brand->brand_name}}">
                <img lazy-src="{{ asset(u(_GOODS_BRAND) . $brand->brand_logo) }}" alt="" />
            </a>
          </li> 
      @endforeach
      
     </ul> 
    </div> 
    <!-- tab切第一组 广告[[ --> 
   


    <!-- tab切第一组 广告]] --> 
    <!-- tab切第二组 单品[[ --> 
    <div class="main-col J-domLazy" datacode="tr000000936" jsmodelid="jsModel_4796_6" trickpoint="index2_none_recshouye2_2" floornum="2" style="display: block;"> 
     <script type="text/html">
<ul class="prd-list">
    
    <?php 
        $gs['a'] = isset($gs['a']) ? $gs['a'] : [];
        $gss = [];
        foreach($gs['a'] as $gk => $gv) {
            foreach($gv as $gvv) {
                $gss[] = $gvv;
            }
        }
        $array = [9,8,7,6,5];
        $gss2 = [];
    ?>

    @foreach($gss as $k => $g)
    <?php 
      if (in_array($k, $array)) {
          $gss2[] = $g;
          continue;
      }
     ?>
     <li data-sku="134003091|1|3|">
    <p class="face"><a expoType="1" expo="index_lcsp0205:0000000000|134003091" name="index2_none_floor02_sp05" href="{{url('goodslist/'.$g->id)}}" target="_blank" title="{{ $g->goods_name }}"><img src="{{ $goods_src . $g->goods_img }}" alt="{{ $g->goods_name }}"/></a></p>
    <p class="name"><a href="{{url('goodslist/'.$g->id)}}" target="_blank">{{ $g->goods_name }}</a></p>
    <p class="price"></p>
    </li> 
    @endforeach
   

</ul>
 <ul class="prd-list">
    @foreach($gss2 as $g)
    <li data-sku="141926673|1|3|">
    <p class="face"><a expoType="1" expo="index_lcsp0210:0000000000|141926673" name="index2_none_floor02_sp10" href="{{url('goodslist/'.$g->id)}}" target="_blank" title="{{ $g->goods_name }}"><img src="{{ $goods_src . $g->goods_img }}" alt=""/></a></p>
    <p class="name"><a href="{{url('goodslist/'.$g->id)}}" target="_blank">{{ $g->goods_name }}</a></p>
    <p class="price"></p>
    </li>
    @endforeach
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
<?php $m++;//die; ?>
  @endforeach

@endsection
