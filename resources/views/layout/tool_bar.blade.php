<script type="text/javascript" src="{{ asset( _PLUS_ .'/layer/layer.js') }}"></script>
 <div id="_TOP_BANNER_" class="ng-top-banner"></div> 
  <div class="ng-toolbar"> 
   <div class="ng-toolbar-con wrapper"> 
    <div class="ng-toolbar-left"> 
     <a href="{{url('/')}}" class="ng-bar-node ng-bar-node-backhome" id="ng-bar-node-backhome" name="public0_none_dbgjt_fhyisy01"> <i class="ng-iconfont ng-backhome"></i><span>返回易购首页</span> <i class="ng-line ng-iconfont ml10"></i> </a> 
     <script type="text/javascript">
if (!sn.isHome){document.getElementById('ng-bar-node-backhome').style.display = "block";};
</script> 
     <!--网站导航 [[--> 
     <div class="ng-bar-node-box ng-site-nav-box"> 
      <a href="javascript:void(0);" class="ng-bar-node ng-bar-node-site" name="public0_none_dbgjt_wzdh03"> <span>网站导航</span><em class="ng-iconfont down"></em> </a> 
     </div> 
     <!--网站导航 ]]--> 
     <!-- 消息 [[ --> 
     <div class="ng-bar-node-box ng-msg-box"> 
      <a href="member_message.html" class="ng-bar-node ng-bar-node-msg" name="public0_none_dbgjt_wdxx01" target="_blank"> <span>消息<i class="ng-iconfont dot"></i></span><em class="ng-iconfont down"></em> </a> 
      <div class="ng-d-box ng-msg-child" style="display:none;"> 
       <div class="ng-msg-list"> 
        <div class="ng-msg-item ng-msg-item-no"> 
         <i></i> 
         <span>嗷~ 没有新消息...</span> 
        </div> 
       </div> 
       <div class="ng-msg-bottom"> 
        <a href="member_message.html" name="public0_none_dbgjt_wdxx01" target="_blank">查看更多</a> 
       </div> 
      </div> 
     </div> 
     <!-- 消息 ]] --> 
    </div> 
    <div class="ng-toolbar-right"> 
     <!-- 登录注册 --> 
     <a href="javascript:void(0)" class="ng-bar-node username-bar-node username-bar-node-showside" id="username-node" rel="nofollow" style="display:none;"> <span id="usernameHtml01"></span> <em class="hasmsg ng-iconfont"></em> </a> 
     <div class="ng-bar-node-box username-handle" id="username-node-slide" style="display:none;"> 
      <a href="member_index.html" rel="nofollow" class="ng-bar-node username-bar-node username-bar-node-noside"> <span id="usernameHtml02"></span> <em class="hasmsg ng-iconfont"></em> <em class="ng-iconfont down"></em> </a> 
      <div class="ng-d-box ng-down-box ng-username-slide" style="display:none;"> 
       <a href="member_info.html" class="ng-vip-union" target="_blank" rel="nofollow">账号管理</a> 
       <a href="javascript:SFE.base.logoff();" rel="nofollow">退出登录</a> 
      </div> 
     </div> 

     @if(empty(session('UserInfo'))) 
       <div class="ng-bar-node reg-bar-node" id="reg-bar-node"> 
        <a href="{{url('login')}}" name="public0_none_dbgjt_login0800" rel="nofollow" class="login">登录</a> 
        <a href="{{url('register')}}" target="_blank" class="login reg-bbb" rel="nofollow" name="public0_none_dbgjt_register09">注册</a> 
       </div>
     @else
       <div class="ng-bar-node reg-bar-node" id="reg-bar-node"> 
        <a href="{{url('/userinfo')}}" name="public0_none_dbgjt_login0800" rel="nofollow" class="login">{{session('UserInfo')['uname']}}</a> 
        <a href="{{url('logout')}}" target="_self" class="login reg-bbb" rel="nofollow" name="public0_none_dbgjt_register09">退出</a> 
       </div>
     @endif  
     <script type="text/javascript">
function d(b) {
var a;
return (a = document.cookie.match(RegExp("(^| )" + b + "=([^;]*)(;|$)"))) ? decodeURIComponent(a[2]
.replace(/\+/g, "%20"))
: null
};
var uernameA = d("logonStatus");
var usernameNode = document.getElementById('username-node');
var usernameNodeSlide = document.getElementById('username-node-slide');
var usernameHtml01 = document.getElementById('usernameHtml01') , usernameHtml02 = document.getElementById('usernameHtml02');
var regBarNode = document.getElementById('reg-bar-node');
if (uernameA != null && uernameA != "") {
var uernameC = d("nick");
// if( ((window.sidebar_config && sidebar_config.enable)||sn.hasSidebar) && !sn.hasNewSidebar ){
// usernameNode.style.display = "block";
// }else{
usernameNodeSlide.style.display = "block";
//}
usernameHtml01.innerHTML = uernameC;
usernameHtml02.innerHTML = uernameC;
regBarNode.style.display = "none";
}else{
usernameNode.style.display = "none";
usernameNodeSlide.style.display = "none";
usernameHtml01.innerHTML = " ";
usernameHtml02.innerHTML = " ";
regBarNode.style.display = "block";
}
</script> 
     <!--我的订单 [[--> 
     <div class="ng-bar-node-box myorder-handle"> 
      <a href="member_order.html?storeId=10052&amp;catalogId=10051" rel="nofollow" name="public0_none_dbgjt_order04" class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>我的订单</span><em class="ng-iconfont down"></em></a> 
      <div class="ng-down-box ng-d-box myorder-child" style="display:none;"> 
       <a href="member_order.html?catalogId=10051&amp;storeId=10052&amp;selectTime=all&amp;status=M" rel="nofollow" name="public0_none_dbgjt_order0401">待支付<em id="waitPayCounts"></em></a> 
       <a href="member_order.html?catalogId=10051&amp;storeId=10052&amp;selectTime=all&amp;status=C000" rel="nofollow" name="public0_none_dbgjt_order0402">待收货<em id="waitDeliveryCounts"></em></a> 
       <a href="member_comments.html" rel="nofollow" name="public0_none_dbgjt_order0403">待评价<em id="waitEvaluation"></em></a> 
       <a href="http://member.suning.com/emall/SNLingYueGoodsOrderView?storeId=10052&amp;catalogId=10051" rel="nofollow" name="public0_none_dbgjt_order0404">修改订单</a> 
      </div> 
     </div> 
     <!--我的订单 ]]--> 
     <!--我的易购 [[--> 
     <div class="ng-bar-node-box mysuning-handle"> 
      <a href="{{url('/userinfo')}}" rel="nofollow" name="public0_none_dbgjt_wdyg05" class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>我的易购</span><em class="ng-iconfont down"></em></a> 
      <div class="ng-down-box ng-d-box mysuning-child" style="display:none;"> 
       <a href="http://2.suning.com/myOrder/queryMyOrders.do" name="public0_none_dbgjt_wdyg0501" rel="nofollow" target="_blank">我的二手</a> 
       <a href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=http://my.jr.suning.com/sfp/accountAssets/index.htm" rel="nofollow" name="public0_none_dbgjt_wdyg0502" target="_blank">我的金融</a> 
       <a href="member_collect_goods.html" rel="nofollow" name="public0_none_dbgjt_wdyg0503">我的收藏</a> 
       <a href="https://rxf.suning.com/epps-cpf/accountMgt/assetOverview.do" rel="nofollow">我的任性付</a> 
       <a href="member_coupon.html?storeId=10052&amp;catalogId=10051" rel="nofollow" name="public0_none_dbgjt_wdyg0504">我的优惠券</a> 
       <a href="http://vip.suning.com/sign/welcome.do" rel="nofollow" name="public0_none_dbgjt_wdyg0505">打卡赚云钻</a> 
       <a href="http://vip.suning.com" class="ng-vip-union" target="_blank" rel="nofollow" name="public0_none_dbgjt_wdyg0506">会员联盟<em class="ng-iconfont"></em></a> 
      </div> 
     </div> 
     <!--我的易购 ]]--> 
     <!-- 购物车 --> 
     <a class="ng-bar-node ng-bar-node-mini-cart" name="public0_none_minicart_gouwclj" rel="nofollow" href="cart.html?langId=-7&amp;storeId=10052&amp;catalogId=10051"> <em class="ng-iconfont cart"></em><span>购物车</span> <span class="total-num-box" id="J_total_num_box"> <b class="total-num J_cart_total_num" id="showTotalQty">0</b> <span class="total-num-bg-box"> <em></em> <i></i> </span> </span> </a> 
     <script type="text/javascript">
var ngCartNum = d("totalProdQty");
ngCartNum = ( ngCartNum ==0 || ngCartNum == null )?0:ngCartNum;
ngCartNum = ngCartNum>99?'99+':ngCartNum;
document.getElementById('showTotalQty').innerHTML = ngCartNum;
</script> 
     <!--手机苏宁 [[--> 
     <div class="ng-bar-node-box app-down-box"> 
      <a href="http://sale.suning.com/syb/20120419xsjkhd/index.html" target="_blank" name="public0_none_dbgjt_sjsn01" rel="nofollow" class="ng-bar-node mb-suning touch-href"> <em class="ng-iconfont mb"></em><span>手机苏宁</span><em class="ng-iconfont down"></em> </a> 
      <div class="ng-mb-box ng-d-box mb-down-child" style="display:none;"> 
       <div class="ng-code-box"> 
        <p class="ng-tip"> <a href="http://sale.suning.com/syb/20120419xsjkhd/index.html" rel="nofollow" name="public0_none_dbgjt_sjsn0101" target="_blank">扫一扫，下载易购客户端</a> </p> 
        <a href="http://sale.suning.com/syb/20120419xsjkhd/index.html" rel="nofollow" name="public0_none_dbgjt_sjsn0102" target="_blank"> <img src3="http://img.suning.cn/public/v3/images/code.png?var=07" alt="苏宁易购APP二维码" height="80" width="80" /> </a> 
       </div> 
       <div class="ng-app-box"> 
        <div class="ng-app-list"> 
         <a href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://pay.suning.com/epp-epw/login/login.action" target="_blank" rel="nofollow" name="public0_none_dbgjt_sjsn0103" class="ng-app"><img src3="http://img.suning.cn/public/v3/images/app-ebook.png?var=01" title="易付宝钱包" /></a> 
         <a href="http://sale.suning.com/images/advertise/zyn/TV0811sndjt/index.html" target="_blank" rel="nofollow" name="public0_none_dbgjt_sjsn0104" class="ng-app"><img src3="http://img.suning.cn/public/v3/images/app-sn.png?var=03" title="苏宁易购TV版" /></a> 
         <a href="http://app.pptv.com/pg_get_clt" target="_blank" rel="nofollow" name="public0_none_dbgjt_sjsn0105" class="ng-app"><img src3="http://img.suning.cn/public/v3/images/app-pptv.png?var=01" title="PPTV" /></a> 
         <a href="http://snbook.suning.com/web/index.htm" target="_blank" rel="nofollow" name="public0_none_dbgjt_sjsn0106" class="ng-app"><img src3="http://img.suning.cn/public/v3/images/app-suning.png?var=02" title="苏宁阅读" /></a> 
        </div> 
       </div> 
       <a href="http://sale.suning.com/syb/yinliuye0512/index.html" target="_blank" rel="nofollow" name="public0_none_dbgjt_sjsn0108"> <img src3="http://img.suning.cn/public/v3/images/newreg.png?v=20150506" height="35" width="242" /> </a> 
       <a href="javascript:void(0);" name="public0_none_dbgjt_sjsn0109" class="ng-close" rel="nofollow"><em class="ng-iconfont"></em></a> 
      </div> 
     </div> 
     <!--手机苏宁 ]]--> 
     <a href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://pay.suning.com/epp-epw/login/login.action" name="public0_none_dbgjt_yfb06" class="ng-bar-node ng-bar-node-pr5" target="_blank"><span>易付宝</span></a> 
     <a href="http://b.suning.com" class="ng-bar-node ng-bar-node-pr5" name="public0_none_dbgjt_qypd01" target="_blank"><span>政企采购</span></a> 
     <!--服务中心 [[--> 
     <div class="ng-bar-node-box service-handle"> 
      <a href="javascript:void(0);" class="ng-bar-node ng-bar-node-service ng-bar-node-fix touch-href ng-bar-node-pr5" rel="nofollow" name="public0_none_dbgjt_fwzx07"><span>客户服务</span><em class="ng-iconfont down"></em> </a> 
      <div class="ng-down-box ng-d-box service-center-child ng-ser-list" style="display:none;"> 
       <a href="http://help.suning.com" rel="nofollow" target="_blank" name="public0_none_dbgjt_fwzx0705">帮助中心</a> 
       <a href="http://store.suning.com" rel="nofollow" target="_blank" name="public0_none_dbgjt_fwzx0704">查找门店</a> 
       <a href="member_aftersale.html?storeId=10052&amp;catalogId=10051" rel="nofollow" name="public0_none_dbgjt_fwzx0701" target="_blank">退换货</a> 
       <a href="http://assss.suning.com/assss-web/pc/helper/appointmentStep1.do" target="_blank">约服务</a> 
       <a href="member_suggest.html" rel="nofollow" name="public0_none_dbgjt_fwzx0702" target="_blank">投诉</a> 
       <a href="http://s.suning.com" rel="nofollow" name="public0_none_dbgjt_fwzx0706" target="_blank">建议反馈</a> 
       <a href="javascript:findpass();" rel="nofollow" name="public0_none_dbgjt_fwzx0707">在线咨询</a> 
      </div> 
     </div> 
     <!--服务中心 ]]--> 
    </div> 
    <div id="ng-minicart-slide-box"></div> 
   </div> 
  </div> 