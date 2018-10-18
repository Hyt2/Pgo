<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="_token" content="{{ csrf_token() }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>用户登录 - 苏宁易购</title> 
  <link rel="shortcut icon" href="{{_HOME_}}/images/favicon.ico" type="image/x-icon" /> 
  <!-- 页尾使用的css文件 --> 
  <link type="text/css" rel="stylesheet" href="{{_HOME_}}/css/login.css" /> 
  <script type="text/javascript" src="{{ asset( _PLUS_ .'/layer/layer.js') }}"></script>
  <script type="text/javascript" src="{{_HOME_}}/js/jquery-1.7.1.js"></script> 
  <script type="text/javascript" src="{{_HOME_}}/js/login.js"></script>
  <style>
  	.uname-error{
  		padding-left: 20px;
  		margin: 0px;
  		height: 25px;
  		line-height: 35px;
  		color: red;
  	}
  </style>  
 </head> 
 <body>
	
  <div class="login-main"> 
   <!--顶部logo区域 [[--> 
   <div class="login-logo"> 
		    <a href="{{url('/')}}" title="苏宁易购"><img alt="苏宁易购" src="{{_HOME_}}/images/snlogo.png" /></a>
   </div> 
   <!--顶部logo区域 ]]--> 
   <!--登录区域 表单 [[--> 
   <div class="login-form"> 
    <input type="hidden" id="loginChannel" name="loginChannel" value="208000000000" />
    <!--报错位 [[--> 
    <div class="err-msg hide" id="_err-msg"> 
     	<span>帐号或密码错误，请重新输入或者找回密码</span>
    </div> 
    <!--报错位 ]]--> 
    <div class="login-txtbox"> 
     <label class="input-label">用户名/邮箱/手机号</label> 
     <i class="ico-usename"></i> 
     <input class="txt-input text-email" type="text" id="uname" value="" autocomplete="off" tabindex="1" name="uname" /> 
    </div>
    <div class="login-txtbox"> 
     <i class="ico-pwd"></i> 
     <input class="txt-input" type="password" id="upwd" name="upwd" maxlength="20" autocomplete="off" tabindex="2" /> 
     <label class="input-label">密码</label> 
    </div>
    <!--验证码 [[--> 
    <!--验证码错误添加 login-txtbox-error st-ico --> 
    <div class="login-code" id="imageVerifyArea"> 
     <div id="code-txtboxId" class="code-txtbox"> 
      <i class="ico-code"></i> 
      <input class="txt-input" type="text" id="validate" autocomplete="off" maxlength="5" name="validate" tabindex="3"  class="validate" /> 
      <em id="imageVerifytip" class=""></em> 
      <label class="input-label">验证码</label> 
     </div> 
     <div class="code-num" style="height: 80%;margin-top:10px;padding: 0px"> 
      <img src="{{captcha_src()}}"  onclick="this.src+='?c='+Math.random()" style="width:100%;height:100%" class="code" /> 
     </div> 
     <div class="code-link">
       看不清 
      <a href="javascript:getCode()" name="Logon_index_denglu004">换一张</a> 
     </div>
    </div>

    <!--验证码 ]]--> 
    <!-- 自动登录 [[ --> 
    <div class="auto-login"> 
     <label class="auto-label"><input type="checkbox" id="rememberMe" checked="checked"><span>自动登录</span></label> 
    </div>
    <div class="btn-login"> 
     <a name="submit" class="login-submit" onclick="checkCode()" style="cursor: pointer;">登　录</a> 
    </div> 
    <div class="links-text"> 
     <div class="u-fst-login"> 
      <b class="b1">◆</b> 
      <b class="b2">◆</b>持有苏宁电器/乐购仕会员卡登录，线上线下云钻共享来购物！ 
     </div> 
     <a href="{{url('/forget')}}" class="link-left" id="Logon_index_denglu001" name="Logon_index_denglu001">忘记密码</a> 
     <span class="link-left mid-line"></span> 
     <a href="{{url('/register')}}" class="link-left" name="Logon_index_denglu003" id="Logon_index_denglu003">免费注册</a> 
     <a href="javascript:void(0);" class="link-right" name="Logon_index_denglu012" id="Logon_index_denglu010"><i></i>会员卡融合</a> 
    </div> 
    <form method="post" name="oAuthLogonForm" action="" id="oAuthLogonForm"> 
     <input type="hidden" name="URL" value="https://ssl.suning.com/webapp/wcs/stores/auth?targetUrl=http%3A%2F%2Fwww.suning.com%2F" /> 
    </form> 
    <form method="post" name="snapshotForm" action="login" id="snapshotForm"> 
     <input type="hidden" id="username1" name="username" value="" /> 
     <input type="hidden" id="password1" name="password" value="" /> 
     <input type="hidden" id="loginTheme1" name="loginTheme" value="" /> 
     <input type="hidden" id="highRiskRedirectFlag1" name="highRiskRedirectFlag" value="" /> 
     <input type="hidden" id="service1" name="service" value="" /> 
     <input type="hidden" id="oauth_redirect1" name="oauth_redirect" value="" /> 
     <input type="hidden" id="trust_redirect1" name="trust_redirect" value="" /> 
     <input type="hidden" id="loginChannel1" name="loginChannel" value="" /> 
     <input type="hidden" id="uuid1" name="uuid" value="" /> 
     <input type="hidden" id="validate1" name="verifyCode" value="" /> 
     <input type="hidden" id="rememberMeVal" name="rememberMe" value="" /> 
    </form> 
    <div class="user-frd net-cooperation"> 
     <p class="show-text"><span>用合作网站账号登录</span></p> 
     <p class="account-list clearfix"> <a href="javascript:void(0);" name="Logon_index_denglu026" class="weixin" onclick="weixinLogin();return false;"><i></i><b>微信</b></a> <a href="javascript:void(0);" name="Logon_index_denglu027" class="qq" onclick="qqLogin();return false;"><i></i><b>QQ</b></a> <a href="javascript:void(0);" name="Logon_index_denglu017" class="yifubao" onclick="eppLogin();return false;"><i></i><b>易付宝</b></a> <a href="javascript:void(0);" name="Logon_index_denglu013" class="hulian" id="Logon_index_surfuLink008"><i></i><b>苏宁互联</b></a> <a href="javascript:void(0);" name="Logon_index_denglu015" class="pptv" onclick="pptvLogin();return false;"><i></i><b>PPTV</b></a> 
      <!-- <a href="javascript:void(0);" name="Logon_index_denglu016" class="manzuo"  onclick="manzuoLogin();return false;"><i></i><b>满座</b></a> --> 
      <!-- <a href="javascript:void(0);" name="Logon_index_denglu007" class="tianyi"  onclick="surfingLogin();return false;"><i></i><b>天翼</b></a> --> </p> 
    </div> 
    <div class="email-list hide"></div> 
   </div> 
   <!--登录区域 表单 ]]--> 
   <!--登录区域 扫码登录 [[--> 
	<div class="login-photocode"> 

	    <!--扫描成功提示框 ]]--> 
	    <div class="ico-codephoto"></div> 
   </div> 
   <!--登录区域 扫码登录 ]]--> 
  </div> 
  
  <div class="clear"></div> 
  <!-- 公用尾部 [[ --> 
  <div class="ng-footer"> 
   <div class="ng-s-footer"> 
    <div class="ng-s-f-con"> 
     <p class="ng-url-list"> <a href="http://www.suning.cn/" target="_blank" name="public0_none_wb_yqlj0101">苏宁云商</a><span>|</span> <a href="http://10035.suning.com/" target="_blank" name="public0_none_wb_yqlj0102" rel="nofollow">苏宁互联</a><span>|</span> <a href="mall.html" target="_blank" name="public0_none_wb_yqlj0111" rel="nofollow">苏宁金融</a><span>|</span> <a href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://pay.suning.com/epp-epw/index/welcome.action" rel="nofollow" target="_blank" name="public0_none_wb_yqlj0103">易付宝</a><span>|</span> <a href="http://www.manzuo.com" target="_blank" name="public0_none_wb_yqlj0104" rel="nofollow">满座网</a><span>|</span> <a href="http://www.pptv.com?rcc_id=snyg" target="_blank" name="public0_none_wb_yqlj0105" rel="nofollow">PPTV</a><span>|</span> <a href="child.html?/" target="_blank" name="public0_none_wb_yqlj0106" rel="nofollow">红孩子</a><span>|</span> <a href="http://binggo.suning.com/" target="_blank" name="public0_none_wb_yqlj0107" rel="nofollow">缤购</a><span>|</span> <a href="http://laox.suning.com/" target="_blank" name="public0_none_wb_yqlj0108" rel="nofollow">乐购仕</a><span>|</span> <a href="http://wuliu.suning.com/" target="_blank" name="public0_none_wb_yqlj0111" rel="nofollow">苏宁物流</a><span>|</span> <a href="http://usa.suning.com/" target="_blank" name="public0_none_wb_yqlj0109" rel="nofollow">苏宁美国</a><span>|</span> <a href="http://hk.suning.com/" target="_blank" name="public0_none_wb_yqlj0110" rel="nofollow">苏宁香港</a> </p> 
     <p class="ng-url-list"> <a href="http://club.suning.com/hr/aboutus.html" target="_blank" name="public0_none_wb_yqlj0201" rel="nofollow">关于苏宁易购</a><span>|</span> <a href="http://help.suning.com/page/id-469.htm" target="_blank" name="public0_none_wb_yqlj0202" rel="nofollow">联系我们</a><span>|</span> <a href="http://careers.cnsuning.com/" target="_blank" name="public0_none_wb_yqlj0203" rel="nofollow">诚聘英才</a><span>|</span> <a href="http://sop.suning.com/" target="_blank" name="public0_none_wb_yqlj0204" rel="nofollow">供应商入驻</a><span>|</span> <a href="http://union.suning.com/" target="_blank" name="public0_none_wb_yqlj0205" rel="nofollow">苏宁联盟</a><span>|</span> <a href="http://zb.suning.com/" target="_blank" name="public0_none_wb_yqlj0206" rel="nofollow">苏宁招标</a><span>|</span> <a href="http://union.suning.com/aas/links.html" target="_blank" name="public0_none_wb_yqlj0207">友情链接</a><span>|</span> <a href="http://help.suning.com/page/id-281.htm" target="_blank" name="public0_none_wb_yqlj0208" rel="nofollow">法律申明</a><span>|</span> <a href="http://ued.suning.com/survey/" target="_blank" name="public0_none_wb_yqlj0209" rel="nofollow">用户体验提升计划</a> </p> 
     <p class="ng-copyright">Copyright&copy; 2002-2015 ，苏宁版权所有 苏ICP备10207551号 苏B1-20130131 苏B2-20130376 出版物经营许可证新出发苏批字第A-243号</p> 
     <div class="ng-authentication"> 
      <a href="https://ss.knet.cn/verifyseal.dll?sn=2011060700100009557&amp;ct=ic&amp;pa=911439" target="_blank" name="public0_none_wb_zs0301" rel="nofollow"> <img src2="https://sslres.suning.com/public/v3/images/kexin.png" alt="可信网站" /> </a> 
      <a href="https://search.szfw.org/cert/l/CX20111018000608000610" target="_blank" name="public0_none_wb_zs0302" rel="nofollow"> <img src2="https://sslres.suning.com/public/v3/images/chengxin.png" alt="诚信网站" /> </a> 
      <a href="http://image.suning.cn/uimg/snnet/snnetImg/142891196680527240.jpg" target="_blank" name="public0_none_wb_zs0303" rel="nofollow"> <img src2="https://sslres.suning.com/public/v3/images/unicom.png" alt="中国联通授权网络经营代理商" /> </a> 
      <a href="http://image.suning.cn/uimg/snnet/snnetImg/143010010209282146.jpg" target="_blank" name="public0_none_wb_zs0304" rel="nofollow"> <img src2="https://sslres.suning.com/public/v3/images/dianxin.jpg" alt="中国电信授权网络经营代理商" /> </a> 
      <a href="http://www.jsgsj.gov.cn:60101/keyLicense/verifKey.jsp?serial=320000163820130117100000009630&amp;signData=0+ADYt839gp1EiqiZXnsxsyOnpO32Wg4sFePaiV9+NtTV/XCAMXGzT/AOgycGMm0EjsR/Ot661M7h9GeStpA8QyJTs1Ip1K/CSNaemthn7f1NjI03x1E6v9ZRT+3M60WZIGLBEjFs5XMliufNz1cJlYDQrTZvaZbHyJ2KzgJB4Y=" target="_blank" rel="nofollow" name="public0_none_wb_zs0303"> <img src2="https://sslres.suning.com/public/v3/images/dianzi.png?v=02" alt="电子营业执照" /> </a> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 公用尾部 ]] --> 
  <!--问卷调查--> 
  <!--问卷调查--> 
  <div class="ECode-floatBar" style="position: fixed;_position:absolute; top: auto; left: auto; z-index: 7500; right: 0px; bottom: 0px; margin-bottom: 270px;"> 
   <div id="gSideTools" class="g-sidebar"> 
    <ul> 
     <li><a name="Logon_index_denglu020" target="_blank" href="http://ued.suning.com/survey/view/11" class="i-side-survey"><em>问卷调查</em><i></i></a></li> 
    </ul> 
   </div> 
  </div> 
 </body>
 <script >
 	// $('input[name=validate]').focus(function(){
 	// 	$('.auto-label').find('span').text('');
 	// });
 	//切换验证码
	function getCode(){
		var newSrc = $('.code').attr('src') + "/?c=" + Math.random();
		$('.code').attr({'src': newSrc});
	}
	//验证用户名
	function checkUname()
	{

	}
	//验证密码
	function checkInfo(name,msg)
	{
		var val=$('input[name='+name+']').val();
		if(val==''){
			$('.err-msg').removeClass('hide').text(msg);
			return false;
		}
		return true;
	}
	function checkCode()
	{
		if(!checkInfo('uname','请您输入手机/邮箱/用户名')) return false;
		if(!checkInfo('upwd','请您输入密码')) return false;
		if(!checkInfo('validate','请您输入验证码')) return false;
		$.post("/checkcode",
			{code:$('input[name=validate]').val(),
			'_token':$('meta[name=csrf-token]').attr('content'),
			uname:$('input[name=uname]').val(),
			upwd:$('input[name=upwd]').val()
			}
			,function(data){
			if(data.status=='0'){//验证码错误
				$('.err-msg').removeClass('hide').text(data.msg);
				$('.code-txtbox').css({border:'1px solid red'});
			}else if(data.status=='1'){
				location.replace('/');
			}else{//用户或密码错误
				$('.err-msg').removeClass('hide').text(data.msg);
			}
      console.log(data);
			getCode();
		})
	}
</script>
</html>