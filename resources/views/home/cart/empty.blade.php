<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
 <!--[if lt IE 7]><html class="ie ie6" lang="zh-cn"> <![endif]-->
 <!--[if IE 7]><html class="ie ie7" lang="zh-cn"> <![endif]-->
 <!--[if IE 8]><html class="ie8" lang="zh"> <![endif]-->
 <!--[if IE 9]><html class="ie9" lang="zh"> <![endif]-->
 <!--[if gt IE 9]><!-->
 <!--<![endif]-->
 <head> 
  <title>我的购物车 - 空</title> 
  <!-- 引入公用头 --> 
  <meta charset="UTF-8" /> 
  <script type="text/javascript">
        //全局变量
        var sn = sn || {
            "context": "/emall",
            "domain": "www.suning.com",
            "storeId": "10052",
            "catalogId": "10051",
            "memberDomain": "member.suning.com",
            "online": "online.suning.com",
            "cookieDomain": "suning.com",
            "categoryId": "20089",
            "searchDomain": "http://search.suning.com/emall/",
            "noMiniCart":true
        };
        
	var passport_config = {
            base: "/", 
            loginTheme: "b2c_pop" 
        };
		
</script> 
  <script type="text/javascript">
  function appendInput(id){
        if($("#"+id+"").length == 0){
        	var obj = document.createElement("input");
			obj.setAttribute("type", "hidden");
			obj.setAttribute("id", id);
			document.body.appendChild(obj);
        }
 }	
</script> 
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
  <script src="{{ asset(_HOME_ . '/js') }}/passport.js" type="text/javascript"></script> 
  <!-- 引入项目资源文件 --> 
  <link href="{{ asset(_HOME_ . '/css') }}/Snaddress.css?v=2016031003" type="text/css" rel="stylesheet" /> 
  <link href="{{ asset(_HOME_ . '/css') }}/cart-base.css?v=2016031003" type="text/css" rel="stylesheet" /> 
  <link href="{{ asset(_HOME_ . '/css') }}/cart-1.css?v=2016031003" type="text/css" rel="stylesheet" /> 
 </head> 
 <body> 
  @include('layout.tool_bar')
  <div class="cart-header" id="cart-one-header"> 
   <div class="wrapper clearfix"> 
    <div id="cart-g-logo" class="g-logo"> 
     <a href="index.html"><img alt="苏宁易购" src="http://img.suning.cn/public/images/logo/snlogo.png?v=2016031003" /></a> 
    </div> 
    <div class="r cart-progress"> 
     <ul> 
      <li class="finish finish-01"><i>1</i><span>我的购物车</span><b></b></li> 
      <li><i>2</i><span>确认订单</span><b></b></li> 
      <li><i>3</i><span>付款</span><b></b></li> 
      <li><i>4</i><span>支付成功</span><b></b></li> 
     </ul> 
    </div> 
   </div> 
  </div> 
  <div id="cart-bg" class="cart-bg"> 
   <input type="hidden" value="true" id="loginSign" /> 
   <div id="cart-wrapper" class="wrapper cart cart-wrapper"> 
    <div id="cart-body" class="m-cart-body"> 
     <!-- 此处引入空购物车--> 
     <div class="cart-empty"> 
      <!-- [[ 登录之后空购物车车  --> 
      <h2 class="c3">购物车还是空空的呢，快去 <a class="link-btn cart-btn" href="/">首页</a> 逛逛吧~~</h2> 
      <!-- <p class="link-wrap lh28 clearfix">您可以 <a href="member_collect_goods.html" target="_blank">查看我的收藏&gt;&gt;</a></p> --> 
      <!-- [[ 登录之后空购物车车  --> 
     </div> 
    </div> 
   </div> 
   <!-- 此处引入苏宁推荐 --> 
   @include('layout.like_goods')
  </div> 
  <!-- 引入公用尾 --> 
  <!-- 此处引入公用尾部 --> 
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
 </body>
</html>