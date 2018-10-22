<script type="text/javascript" src="{{ asset( _PLUS_ .'/layer/layer.js') }}"></script>
 <div id="_TOP_BANNER_" class="ng-top-banner"></div> 
  <div class="ng-toolbar"> 
   <div class="ng-toolbar-con wrapper"> 

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

     <!-- 购物车 --> 
     <a class="ng-bar-node ng-bar-node-mini-cart" name="public0_none_minicart_gouwclj" rel="nofollow" href="cart.html?langId=-7&amp;storeId=10052&amp;catalogId=10051"> <em class="ng-iconfont cart"></em><span>购物车</span> <span class="total-num-box" id="J_total_num_box"> <b class="total-num J_cart_total_num" id="showTotalQty">0</b> <span class="total-num-bg-box"> <em></em> <i></i> </span> </span> </a> 
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