<script>

  function check() {
    var u = '<?php 
      if(!session('UserInfo')){
          echo 0;
      } else {
          echo 1;
      }
    ?>';

    if (u == 0) {
        alert('您还未登录,请先登录!');
        setTimeout(function() {
          window.location.href = '/login';
        }, 3000);
    }
  }
    
</script>
<script type="text/javascript" src="{{ asset( _PLUS_ .'/layer/layer.js') }}"></script>
 <div id="_TOP_BANNER_" class="ng-top-banner"></div> 
  <div class="ng-toolbar"> 
   <div class="ng-toolbar-con wrapper"> 
    <div class="ng-toolbar-left"> 
     <a href="{{url('/')}}" class="ng-bar-node ng-bar-node-backhome" id="ng-bar-node-backhome" name="public0_none_dbgjt_fhyisy01"> <i class="ng-iconfont ng-backhome"></i><span>返回易购首页</span> <i class="ng-line ng-iconfont ml10"></i> </a> 
     <script type="text/javascript">
if (!sn.isHome){document.getElementById('ng-bar-node-backhome').style.display = "block";};
</script> 
    
     
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
      <a href="{{ url('order') }}" rel="nofollow" name="public0_none_dbgjt_order04" class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>我的订单</span><em class="ng-iconfont down"></em></a> 
      <div class="ng-down-box ng-d-box myorder-child" style="display:none;"> 
       <a href="{{ url("order/waitPay") }}" rel="nofollow" name="public0_none_dbgjt_order0401">待支付<em id="waitPayCounts"></em></a> 
       <a href="{{ url('order/waitReceive') }}" rel="nofollow" name="public0_none_dbgjt_order0402">待收货<em id="waitDeliveryCounts"></em></a>  
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
     <a class="ng-bar-node ng-bar-node-mini-cart" name="public0_none_minicart_gouwclj" rel="nofollow" href="{{ url('cart') }}"> <em class="ng-iconfont cart"></em><span>购物车</span> <span class="total-num-box" id="J_total_num_box">  <span class="total-num-bg-box"> <em></em> <i></i> </span> </span> </a> 
     <script type="text/javascript">
var ngCartNum = d("totalProdQty");
ngCartNum = ( ngCartNum ==0 || ngCartNum == null )?0:ngCartNum;
ngCartNum = ngCartNum>99?'99+':ngCartNum;
document.getElementById('showTotalQty').innerHTML = ngCartNum;
</script> 
     
    
    
    </div> 
    <div id="ng-minicart-slide-box"></div> 
   </div> 
  </div> 