<!DOCTYPE html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="keywords" content="安全中心,密码强度,绑定手机,绑定邮箱,安保问题, 找回密码,修改登录密码,修改邮箱,修改手机,设置安保问题,怎么绑定手机,怎么换绑定邮箱,密码忘了怎么办" /> 
  <meta name="description" content="苏宁易购安全中心为您在苏宁易购的网购提供安全保证。在这里，您可以管理您的帐号密码、安保问题、绑定手机、绑定邮箱等安全工具。苏宁易购给您最安全、最舒心的网购体验" /> 
  <title>手机验证</title> 
  <script>
        var sn = sn || {}
    </script> 
  <!-- 引入全站公用资源文件 --> 
  <script type="text/javascript">	
        //全局变量	
        var sn = sn || {
            "context": "/emall",
            "domain": "www.suning.com",
            "storeId": "10052",
            "catalogId": "10051",
            "memberDomain": "member.suning.com",
            "sslDomain": "ssl.suning.com",
            "imgssl": "imgssl.suning.com",
            "online": "online.suning.com",
            "cookieDomain": ".suning.com",
            "categoryId": "0",
            "searchDomain": "http://search.suning.com/emall/"
        };

//跳转到passport登录
/*
*url 登录成功后跳转 目标 URL
*logonType  passport 的登录皮肤  
*  b2c 主站      默认值
*  sop 苏宁云商
*/

function logonUrl(url,logonType){
   if(url == "" || typeof(url) == "undefined"){
     url = window.location.href;
   }
   if(logonType == "" || typeof(logonType) == "undefined"){
     logonType = "b2c";
   }
 var targetUrl = encodeURIComponent(url);
 var logonurl = "https://passport.suning.com/ids/login?service="
			 + encodeURIComponent("https://aq.suning.com/asc/auth?targetUrl="+ targetUrl)
			 + "&method=GET&loginTheme="+logonType;
 hrefLink(logonurl);
}

function hrefLink(e) {
		if (navigator.userAgent.indexOf("Firefox") > 0) {
			window.location = e
		} else {
			var f = document.createElement("a");
			f.href = e;
			document.body.appendChild(f);
			if (/msie/i.test(navigator.userAgent.toLowerCase())) {
				f.click()
			} else {
				var d = document.createEvent("MouseEvent");
				d.initEvent("click", false, false);
				f.dispatchEvent(d)
			}
		}
	};
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
 </head>
 <body>
  <input type="hidden" id="baseUrl" value="/asc" /> 
  <!-- 引入项目css资源文件 --> 
  <link rel="stylesheet" type="text/css" href="{{ asset(_HOME_ . '/css') }}/safepc-min.css?v=201601280042" /> 
  <link rel="stylesheet" type="text/css" href="{{ asset(_HOME_ . '/css') }}/head-min.css?v=201601280042" />   
  <!-- 此处引入公用头部 --> 
  <!-- 此处引入公用头部 --> 
  <!--#include file="/include/toolbar.shtml"--> 
  <!-- 非普通消费者页头 --> 
  <!-- 普通消费者和默认的页头 --> 
  @include('layout.tool_bar')
  <!-- 引入项目模块文件 --> 
  <div class="header"> 
   <div id="snlogo" class="clearfix"> 
    <a href="index.html" title="苏宁易购"><img alt="苏宁易购" src="{{u(_CONF_IMG) . config('site.logo')}}" /></a> 
    <!-- <a href="/asc/index.do" name="asc_index_navbar_logo"><span class="channel"></span></a>  -->
    <span class="link-cont"> <a href="/" name="asc_index_navbar_homepage" id="head_index">首页</a> <a href="/order" name="asc_index_securityinfo" id="head_sectool">订单管理</a> <a href="/userinfo" name="asc_index_navbar_personal" id="head_loginhis">个人中心</a> </span> 
   </div> 

  </div> 
  <!-- 引入项目模块文件 --> 
  <form id="form_validatePhone" action="{{ url('order/change_addr') }}" method="post"> 
    {{csrf_field()}}
   <div class="wrap-cont"> 
    <div class="wrap"> 
     <p class="guide-cont"> <span><a href="/order">订单管理 &gt;</a></span> <span><a href="/order/change_addr"> 收货信息 &gt;</a></span>
     <div class="main-wrap"> 
      <div class="main-cont"> 
       
       <div class="reg-main"> 
        <div class="h30"> 
        </div> 


        <div class="input-tip mess-notice">
            <p>收货人:
              <!-- <a href="/asc/selfService/show.do" name="asc_rebindmobile_check_uselessM">手机暂停使用？点此修改</a> -->
            </p>
        </div> 
        <div class="reg-code reg-phone-code"> 
           <div class="code-txtbox"> 
            <i class="ico-code"></i> 
            <input class="txt-input" type="text" id="phoneCode" name="rec" tabindex="3" value="{{ $info->rec }}" /> 
            <i class="ms-ico" id="errorIcon" style="display:none"></i> 
            <!-- <label class="input-label">请输入收货人</label>  -->
           </div> 
            
        </div> 


         <div class="input-tip mess-notice">
            <p>手机号：
            </p>
        </div> 
        <div class="reg-code reg-phone-code"> 
           <div class="code-txtbox"> 
            <i class="ico-code"></i> 
            <input class="txt-input" type="text" id="phoneCode" name="tel" tabindex="3" value="{{ $info->tel }}" /> 
            <i class="ms-ico" id="errorIcon" style="display:none"></i> 
            <!-- <label class="input-label">请输入收货人手机</label>  -->
           </div> 
            
        </div>


         <div class="input-tip mess-notice">
            <p>收货地址：</p>
        </div> 
        <div class="reg-code reg-phone-code"> 
           <div class="code-txtbox"> 
            <i class="ico-code"></i> 
            <input class="txt-input" type="text" id="phoneCode" name="addr" tabindex="3" value="{{ $info->addr }}" /> 
            <i class="ms-ico" id="errorIcon" style="display:none"></i> 
            <!-- <label class="input-label">请输入收货地址</label>  -->
           </div> 
             
        </div>



        <div class="input-tip per-input-tip" id="tipMessage"></div> 
        <a class="register-btn" tabindex="-1" onclick="a();return false;" name="asc_rebindmobile_check_submit1">确认使用当前</a> 
        
       </div> 
       <script>
          function a()
          {
              document.getElementById('form_validatePhone').submit();
          }
       </script>
       
      </div> 
     </div> 
    </div> 
   </div> 
  </form> 
  <!-- 此处引入公用尾部 --> 
  <div class="clear"></div> 
  @include('layout.member_footer')
</div>
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