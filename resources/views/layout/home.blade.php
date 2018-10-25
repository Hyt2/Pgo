<!DOCTYPE html>
<html lang="zh-cn">
 <head> 
  <meta charset="utf-8" /> 
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>首页</title> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <link rel="stylesheet" href="{{ asset(_HOME_ . '/css') }}/common.css" /> 
  <link rel="stylesheet" type="text/css" href="{{ asset(_HOME_ . '/css') }}/index.css" />
  <script src="{{ asset(_ADMIN_ . '/js/jquery-2.0.3.min.js') }}"></script>
 </head> 
 <body> 
  <script>
// 全局变量
var sn = sn || {
"context": '/emall',
"domain": 'www.suning.com',
"cityId":'9173',
"storeId": '10052',
"catalogId": '10051',
"categoryId": '10051',
"memberDomain": 'member.suning.com',
"online": 'online.suning.com',
"cookieDomain": '.suning.com',
"searchDomain": 'http://search.suning.com/emall/',
"scriptDomianDir": 'http://script.suning.cn',
"apsDomainUrl":"http://th.suning.com",
"smartDomain" :'http://iss.suning.com',
"productDomain" : 'http://product.suning.com',
"imgHost": 'http://image.suning.cn',
"isHome": true,
"isNewHome":true
};
// sidebar开关
var sidebar_config = {
cart: true,
enable: true,
member: true,
message: false,
fav: true,
history: false
};
//宽窄屏切换
var SCREEN = {};
SCREEN.small = false;//750
SCREEN.middle = false;//990
SCREEN.large = false;//1190
SCREEN.wider = false;//1690
if (screen.width < 1190) {
SCREEN.middle = true;
} else {
SCREEN.large = true;
}
var bigscreen = false;
if ( screen.width>=1200 ) {
bigscreen = true;
var bodyTag = document.getElementsByTagName("body")[0],
bodyClassName = bodyTag.getAttribute("className") || bodyTag.getAttribute("class");
bodyClassName = bodyClassName ? bodyClassName+" " : "";
bodyTag.className = bodyClassName+"root1200";
}
</script> 
  <!-- 顶通开始 [[ --> 
  <div id="__TOP_ACTIVE__" class="top-active"> 
   <!-- 开发给传2个高度，如果是顶通就传顶通高度，如果是富文本，就传富文本高度 --> 
   <div id="TOP_ACTIVE_WRAP" class="top-active-wrap" style="height: px;" data-height=" px"></div> 
   <a id="TOP_ACTIVE_BTN" class="btn" href="javascript:void(0);" title="关闭" name="index1_none_dtgg_gban04"></a> 
  </div> 
  <script>
(function () {
//获取cookie
var strCookie = document.cookie,
arrCookie = strCookie.split("; "),
val = false;
for (var i = 0, len = arrCookie.length; i < len; i++) {
var arr = arrCookie[i].split("=");
if ("topActiveStatus" == arr[0]) {
val = arr[1];
break;
}
}
if (val) {
document.getElementById('TOP_ACTIVE_WRAP').style.height = "0";
document.getElementById('TOP_ACTIVE_BTN').className = "btn btn-open";
document.getElementById('TOP_ACTIVE_BTN').setAttribute("title", "打开");
document.getElementById('TOP_ACTIVE_BTN').setAttribute("name", "index1_none_dtgg_dkan05");
}
})();
</script> 
  <script type="text/javascript">
var TOP_BANNER_DATA = {
"99999":{"title":"365天放心购","name":"index2_none_dtgg_cs0100","bgColor":"#e21325","link":"http://sale.suning.com/zh/315baofa/index.html","picNarrow":"{{ asset(_HOME_ . '/images') }}/145770027871038675.jpg","picWide":"{{ asset(_HOME_ . '/images') }}/145770028244971915.jpg"}
};
</script> 
  <!-- 顶通结束 ]] --> 
  <!--tool bar [[--> 
    @include('layout.tool_bar')
  <!--tool bar ]]--> 
  <!--header [[--> 
  <div class="ng-header"> 
   <div class="code-maintain"> 
   </div> 
   <div class="ng-header-con"> 
    <!--促销图片维护]]--> 
    <div class="ng-header-box"> 
     <a href="{{url('/')}}" name="index2_none_logo_logo01" class="logo-set" title="佩奇易购"> <img alt="佩奇易购" src="{{ asset(_HOME_ . '/images') }}/logo/180ico.png" /> </a> 
     <!-- <a href="{{url('/')}}" name="index2_none_logo_logo01" class="logo-set" title="佩奇易购"> <img alt="佩奇易购" src="{{ u(_CONF_IMG) . config('site.logo')}}" /> </a>  -->
     <img src="http://script.suning.cn/images/ShoppingArea/Common/blank.gif" src3="http://img.suning.cn/project/cmsWeb/suning/homepage/v1/images/slogn.png" class="slogn" /> 
    </div> 
    <div class="ng-search"> 
     <!-- PRFLS SEARCH --> 
     <div class="g-search"> 
      <i class="ng-iconfont search-icon"></i> 
      <form method="get" onsubmit="" action="/goodslist"> 
       <div class="search-keyword-box"> 
        <input tabindex="0" id="searchKeywords" type="text" class="search-keyword" name="goods_name" value="<?=  isset($_GET['goods_name']) ? $_GET['goods_name'] : '' ?>" autocomplete="off" /> 
       </div> 
       <input id="searchSubmit" type="submit" class="search-btn" value="搜索" /> 
       <div id="snKeywordNew" class="g-search-hotwords"></div> 
      </form> 
      <div id="ac_results" class="g-ac-results hide"></div> 
      <div id="rec_results" class="g-rec-results hide"> 
       <ul class="history-results"></ul> 
       <ul class="rec-results"></ul> 
      </div> 
     </div> 
    </div> 
    <div class="index-head-active">
    </div>
   </div> 
  </div> 
  <!--header ]]--> 
  <!--sort & nav [[--> 
   <style type="text/css">
      .cate_two{
        float: left;
          height: 24px;
          margin-left: 25px;
          margin-bottom: 25px;
          padding: 0 10px;
          color: #FFF;
          line-height: 24px;
          text-align: center;
          background: #F90;
          text-decoration: none;
          font-family: "Microsoft Yahei",tahoma,arial,"Hiragino Sans GB";
      }
  </style>
  <div class="ng-nav-bar" >
   <div class="ng-sort ng-sort-index"> 
    <a name="public0_none_ml_qbspfl" class="ng-all-hook"> <em class="ng-iconfont"></em><span>全部商品分类</span><b></b> </a>
    <div class="ng-sort-list-box"  >
     <ul class="sort-list">
     <?php $data = model('Cate')->getcate();?> 
      @foreach($data as $k=>$v) 
        <li id="{{$v->id}}" class="cate_one"> 
            <em class="{{$v->icon}}"></em> 
            <a target="_blank" name="public0_none_ml1_zc010101" href="{{'/goodslist?id='.$v->id}}">{{$v->cate_name}}</a>
        </li> 
      @endforeach 
      <div class="clear"></div> 
     </ul> 

     <div class="ng-sort-detail"> 
       <a name="public0_none_ml_gban" href="javascript:void(0);" class="ng-close-sort" target="_self"><em class="ng-iconfont"></em></a>
        <div style="height: 100%;width: 100%;padding: 25px 35px 25px" class="pop">
            
        </div> 
        <div class="sort-chanel"></div> 
        <div class="cate-list"></div> 
     </div> 

     
    </div> 
   </div> 

     <script type="text/javascript">
      // var data=[];
      // $('.cate_one').hover(function(){
      //   var num=0;
      //   var pid=$(this).attr('id');
      //   $('.cate_two').each(function(){
      //     if(pid==$(this).attr('pid')){
      //        data[num++]=$(this);
      //       $(this).css('display','block');
      //     }
      //   })

      // },function(){
      //   var obj=null;
      //   $(data).each(function(){
      //     obj=$(this);
      //     $(this).css('display','none');
      //   });
      //   $(obj).parents('div').hover(function(){
      //       $(data).each(function(){
      //         $(this).css('display','block');
      //       });
      //     },function(){
      //       $(data).each(function(){
      //         $(this).css('display','none');
      //       });
      //     })
      // })
      $('.cate_one').mouseover(function(){
        var pid=$(this).attr('id');
        $.get('/twocate',{pid:pid,'_token':"{{ csrf_token() }}"},function(data){
            $('.pop').empty();
            for (var i =0; i < data.length;i++) {
              $('.pop').append($("<a href='/goodslist?cate_id="+data[i].id+"' class='cate_two'>"+data[i].cate_name+"</a>"));
            }
        })
      })
   </script>   


   <div class="ng-nav-index"> 
    <h4 class="ng-title"><span>特色频道</span></h4> 
    <ul class="ng-nav">
      <?php $navs = model('Nav')->limit(3)->get(); $i = 1; ?>
    @foreach($navs as $k=>$v)
        <li>
          <a name="public0_none_tspd_01 nav" href="/#lou-{{$i}}" @if($v->new_blank=='1') target="_blank" @else target="_self" @endif>
            {{--根据key出现不同样式--}}
          @if($k%4==1) <i class="hot"></i> @elseif($k%4==3) <i class="new"></i> @else  @endif
          {{$v->name}}
          </a>
        </li> 
        <?php $i++ ?>
      @endforeach 
    </ul> 
   </div> 
   <div class="ng-nav-right-txtact"> 
   </div> 
  </div> 
  <!-- 以上是项部 -->


  <!--sort & nav ]]--> 
  <div class="clear"></div> 

<!-- ======================================================= -->

 @yield('content')
 @show
  
  <!-- ===================================================== -->
  
  <div class="clear"></div> 

  <!-- 以下是脚部 -->
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
      <?php 
          $notice  = model('NoticeCate')::getcate();
       ?>
      @foreach($notice as $kk=>$vv) 
        <dl style=""> 
         <dt name="public0_none_wb_bzxx01">
          {{$vv->cate_name}}
         </dt>
         @foreach($vv->sub as $k=>$v) 
          <dd>
            <a  rel="nofollow" target="_blank" href="{{url('/notice_cate/'.$v->id)}}">{{$v->cate_name}}</a>
         </dd>
         @endforeach 
        </dl>
        @endforeach 
     </div> 



   </div> 
   <div class="ng-new-pro"> 
    <div class="ng-new-pro-con"> 
     <div class="ng-new-pro-list"> 
      <dl> 
       <dt> 
        <a target="_blank" rel="nofollow" name="public0_none_wb_xcp01" href="http://b.suning.com"><img width="80" height="80" src="http://img.suning.cn/public/v3/images/f1.png?v=01" /></a> 
       </dt> 
       <dd> 
        <p class="ng-title"><a rel="nofollow" target="_blank" name="public0_none_wb_xcp01" href="http://b.suning.com">政企采购</a></p> 
        <p class="ng-intro"><a rel="nofollow" target="_blank" name="public0_none_wb_xcp01" href="http://b.suning.com">为企业用户量身定做的采购平台，优选佩奇易购全站商品，为企业采购提供专业化的一站式采购解决方案。</a></p> 
       </dd> 
      </dl> 
      <dl> 
       <dt> 
        <a name="public0_none_wb_xcp02" rel="nofollow" target="_blank" href="http://sncs.suning.com/"><img width="80" height="80" src="http://img.suning.cn/public/v3/images/f2.png?v=01" /></a> 
       </dt> 
       <dd> 
        <p class="ng-title"><a name="public0_none_wb_xcp02" rel="nofollow" target="_blank" href="http://sncs.suning.com/">佩奇众包</a></p> 
        <p class="ng-intro"><a name="public0_none_wb_xcp02" rel="nofollow" target="_blank" href="http://sncs.suning.com/">以佩奇全渠道包销为主要特点，整合全社会众包资源，扶持创新企业，推广创新产品。</a></p> 
       </dd> 
      </dl> 
     </div> 
     <div class="ng-serch-suning"> 
      <dl> 
       <dt></dt> 
       <dd> 
        <p class="ng-title">身边佩奇</p> 
        <p class="ng-intro">全国300个城市1600家门店3000个服务点为您提供最贴心的服务！</p> 
        <a name="public0_none_wb_xcp03" class="srh-btn" target="_blank" href="http://store.suning.com"></a> 
       </dd> 
      </dl> 
     </div> 
     <div class="footer-egg-con"></div> 
    </div> 
    <div class="footer-egg-btn" style="width: 356.5px;"></div> 
   </div> 
   <div class="ng-s-footer"> 
    <div class="ng-s-f-con"> 

    

    <p class="ng-url-list">
      <?php $link = model('Links');
      $txt        = $link->where('status', '1')->where('type','0')->get()
        ?>
      @foreach($txt as $k=>$v)
      <span>
        <a name="public0_none_wb_yqlj0101" target="_blank" href="{{$v->url}}">
        {{$v->title}}
        </a>
      <span>@if(count($txt)-1!=$k) |  @else  @endif
      @endforeach
    <p class="ng-copyright"> Copyright© 2002-2016 ，苏宁云商集团股份有限公司版权所有 <a style="color:#999" target="_blank" href="http://www.miitbeian.gov.cn">苏ICP备10207551号-4</a> <a style="color:#999" rel="nofollow" target="_blank" href="http://img.suning.cn/public/v3/images/SUB1-20130131.png">苏B1-20130131</a> <a style="color:#999" rel="nofollow" target="_blank" href="http://img.suning.cn/public/v3/images/SUB2-20130376.png">苏B2-20130376</a> <a style="color:#999" rel="nofollow" target="_blank" href="http://img.suning.cn/public/v3/images/SUB2-20130391.png">苏B2-20130391</a> 出版物经营许可证新出发苏批字第A-243号</p>

      
     <div class="ng-authentication">
<?php $pic=$link->where('type','1')->get(); ?>
@foreach($pic as $k=>$v) 
<a rel="nofollow" name="public0_none_wb_zs0302" target="_blank" href="https://search.szfw.org/cert/l/CX20111018000608000610"> <img width="76" height="24" alt="诚信网站" src="{{ asset(u(LINKS_IMG) . $v->logo) }}" /> </a>
@endforeach
</div>
    </div> 
   </div> 
    
   
    
  </div> 
  <script src="{{ asset(_HOME_ . '/js') }}/jquery.js?201603090001"></script> 
  <script>
var sa;if(!sa){sa={}}if(!sa.click){sa.click={}}(function(){var u=/\.suning\.com/,t=document.location.hostname,h=(("https:"==document.location.protocol)?"https://":"http://"),p=i(),b="|",c=location.href,n=m(q(c));function r(aa,N){try{var Z=aa.name?m(aa.name):"name undefined";if(Z=="name undefined"){var ab=aa.attributes.name;if(ab!=undefined&&ab!=null){Z=ab.value?m(ab.value):"name undefined"}}if(N!=undefined&&N!=null&&N!=""){var K=aa.attributes[N];if(K!=undefined&&K!=null){Z=K.value?m(K.value):N+" undefined"}}var O=aa.id?m(aa.id):"id undefined",R=new Array(),A=(f(aa,R),R)?m(R.join("").replace(/\s|\|/ig,"")):"text undefined",U=(U=document.getElementById("resourceType"))?U.value:"",B=O+b+Z+b+A,S=(S=document.getElementById("errorCode"))?S.value:"",X=h+p+"/ajaxClick.gif",z=v(),k="_snck";l(k,z,"/","","");var Y=d();var E=typeof sn=="object"?sn.cityId:"can not get cityId",J=z+b+Y+b+B+b+n,W=aa.href?aa.href:"",I=(W?x(W):"-"),L=document.getElementById("URLPattern"),Q=(L?L.value:"");var D="";var G=o("logonStatus");if(G!=undefined&&G!=null){D=G}var F="";var j=o("_snma");if(j!=undefined&&j!=null&&j.indexOf("|")>=0){try{F=j.split("|")[1]}catch(V){}}var C="";var y=o("idsLoginUserIdLastTime");if(y!=undefined&&y!=null){C=y}var T="";var P=o("custno");if(P!=undefined&&P!=null){T=P}var M="";var ac=o("_snmb");if(ac!=undefined&&ac!=null&&ac.indexOf("|")>=0){try{M=ac.split("|")[0]}catch(V){}}var H=X+"?_snmk="+J+"&_snme="+S+"&_type="+U+"&_cId="+E+"&_sid="+I+"&urlPattern="+Q+"&vid="+F+"&lu="+C+"&sid="+M+"&mid="+T+"&ls="+D;w(H)}catch(V){}}function d(){if(!sa.pvId){sa.pvId=v()}return sa.pvId}function v(){try{var k=new Date(),j=Math.round(100000*Math.random()),z=k.getTime().toString().concat(j);return z}catch(y){}}function o(k){var j=document.cookie.split("; ");for(var y=0;y<j.length;y++){var z=j[y].split("=");if(z[0]==k){return unescape(z[1])}}}function w(j){var y="log_"+(new Date()).getTime();var k=window[y]=new Image();k.onload=(k.onerror=function(){window[y]=null});k.src=j+"&iId="+y;k=null}function i(){if(u.test(t)){return"click.suning.cn/sa"}else{return"clicksit.suning.cn/sa"}}function e(){return document.domain}function l(k,j,D,C,B){try{var A=k+"="+escape(j);if(C!=""){var z=new Date();z.setTime(z.getTime()+C);A+=";expires="+z.toGMTString()}if(D!=""){A+=";path="+D}var y=e();if(y.indexOf(".suning.com")!=-1){A+=";domain=.suning.com"}else{if(y.indexOf(".cnsuning.com")!=-1){A+=";domain=.cnsuning.com"}else{A+=";domain="+B}}document.cookie=A}catch(B){}}function x(k){var j="-";if(!a(k)){j=g(k,"tid","&")}return j}function q(j){try{if(j.length>301){j=j.substring(0,300)}while(j.indexOf(b)!=-1){j=j.replace(b,"--")}return j}catch(k){}}function f(z,k){try{if(z.nodeType==3){k.push(z.nodeValue)}else{if(z.nodeType==1){for(var j=z.firstChild;j!=null;j=j.nextSibling){f(j,k)}}}}catch(y){}}function m(j){return j!=null?encodeURIComponent(j):""}function g(y,k,B){try{var A="-",j;if(!a(y)&&!a(k)&&!a(B)){j=y.indexOf(k);if(j>-1){var z=y.indexOf(B,j);if(z<0){z=y.length}A=y.substring(j+k.length+1,z)}}return A}catch(z){}}function a(j){return(undefined==j||""==j||"-"==j)}var s=sa.click;s.sendDatasIndex=r})();
$(document).ready(function(){
$("a[name^=index],h5[name^=index],h4[name^=index],h3[name^=index],h2[name^=index],h1[name^=index],li[name^=index],div[name^=index],label[name^=index],input[name^=index],span[name^=index]").live("click",function(){
try {
sa.click.sendDatasIndex(this);
} catch(e){
}
});
})
</script> 
  <script type="text/javascript">
function _getJsFilePath(js_file){
sa_src = "{{ asset(_HOME_ . '/js') }}/"+js_file;
return sa_src;
}
var isArray = function(obj) {
return Object.prototype.toString.call(obj) === '[object Array]';
}
var windowOnLoadEventQueue = [];
var scriptOnLoadEventQueue = [];
window.onload = function() {
for ( var aFunc in windowOnLoadEventQueue) {
windowOnLoadEventQueue[aFunc]();
}
}
function addOnLoad(func) {
windowOnLoadEventQueue = windowOnLoadEventQueue.concat(func);
}
var lazyScriptMap = {};
function lazyLoadScript(src, callback) {
if (!lazyScriptMap[src]) {
lazyScriptMap[src] = callback;
var scriptNode = document.createElement("script");
if ('function' === typeof callback) {
if (!/msie/i.test(navigator.userAgent.toLowerCase())) {
scriptNode.onload = callback;
}
scriptNode.onreadystatechange = function() {
if ("loaded" == scriptNode.readyState
|| "complete" == scriptNode.readyState) {
callback();
}
}
} else if (isArray(callback)) {
var callbackSequence = function() {
for ( var i = 0; i < callback.length; i++) {
(callback[i])();
}
};
scriptNode.onload = callbackSequence;
scriptNode.onreadystatechange = function() {
if ("loaded" == scriptNode.readyState
|| "complete" == scriptNode.readyState) {
callbackSequence();
}
}
}
scriptNode.type = "text/javascript";
scriptNode.src = src;
var scriptContainer = document.getElementsByTagName("head")[0];
scriptContainer.appendChild(scriptNode);
} else {
}
}
function lazyLoadScripts(srcs, callback) {
var srcNum = srcs.length;
var loadingProgress = 0;
if (srcNum > 0) {
for ( var i = 0; i < srcNum; i++) {
var currSrc = srcs[i];
lazyLoadScript(currSrc, function() {
loadingProgress++;
if (srcNum == loadingProgress) {
if ('function' === typeof callback) {
callback();
} else if (isArray(callback)) {
for ( var i = 0; i < callback.length; i++) {
(callback[i])();
}
}
}
});
}
}
}
var isTimeout = false;
var lazyLoadFunction = null;
var lazyScriptLoaded = false;
var lazyScriptTimeout = 2000;
lazyloadBindingFuc = function() {
}
lazyLoadFunction = function() {
if (lazyScriptLoaded && isTimeout) {
lazyLoadScript(_getJsFilePath("da_opt.js"));
return;
}
lazyScriptLoaded = true;
if (isTimeout) {
lazyLoadScript(
"{{ asset(_HOME_ . '/js') }}/search.min.js?201603090001",
function() {
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/SFE.base.min.js?201603090001",
function(){
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/a_load_m_g.js?201603090001",
function (){
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/a_load_t_pv.js?201603090001",
function(){
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/lazyelem.min.js?201603090001",
function() {
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/index.js?201603090001",
function() {
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/sn-sidebar.min.js?201603090001",
function() {
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/chatCompat_mini.js?201603090001");
lazyLoadScript(_getJsFilePath("da_opt.js"));
});
});
});
});
});
});
});
} else {
lazyLoadScript(
"{{ asset(_HOME_ . '/js') }}/search.min.js?201603090001",
function() {
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/SFE.base.min.js?201603090001",
function(){
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/a_load_m_g.js?201603090001",
function (){
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/a_load_t_pv.js?201603090001",
function(){
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/lazyelem.min.js?201603090001",
function() {
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/index.js?201603090001",
function() {
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/sn-sidebar.min.js?201603090001",
function() {
lazyLoadScript("{{ asset(_HOME_ . '/js') }}/chatCompat_mini.js?201603090001");
lazyLoadScript(_getJsFilePath("da_opt.js"));
});
});
});
});
});
});
});
}
}
addOnLoad(lazyloadBindingFuc);
addOnLoad(lazyLoadFunction);
function checkLazyScriptTimeout() {
isTimeout = true;
if (!lazyScriptLoaded) {
if (!!lazyLoadFunction) {
lazyLoadFunction();
} else {
setTimeout(checkLazyScriptTimeout, 1000);
}
}
}
setTimeout(checkLazyScriptTimeout, lazyScriptTimeout);
</script>
@section('js')
@show
 </body>
</html>