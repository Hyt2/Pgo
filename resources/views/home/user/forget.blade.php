<!DOCTYPE html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>找回密码-安全中心</title> 
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
  <!-- PRFLS RESOURCES --> 
  <link rel="shortcut icon" href="{{_HOME_}}/images/favicon.ico" type="image/x-icon" /> 
  <link rel="stylesheet" href="{{_HOME_}}/css/common.css" /> 
  <link rel="stylesheet" href="{{_HOME_}}/css/search.css" /> 
  <link rel="stylesheet" href="{{_HOME_}}/css/sn-sidebar.css" /> 
  <script type="text/javascript" src="{{_HOME_}}/js/jquery.js"></script> 
  <script type="text/javascript" src="{{_HOME_}}/js/sn_lazyload.js"></script> 
  <script type="text/javascript" src="{{_HOME_}}/js/lazyelem.min.js"></script> 
  <script type="text/javascript" src="{{_HOME_}}/js/SFE.base.min.js"></script> 
  <script type="text/javascript" src="{{_HOME_}}/js/search.min.js"></script> 
  <script type="text/javascript" src="{{_HOME_}}/js/sn-sidebar.min.js"></script> 
  <script type="text/javascript" src="{{_HOME_}}/js/chatCompat_mini.js"></script> 
 </head> 
 <body> 
  <input type="hidden" id="baseUrl" value="/asc" /> 
  <script>
        var sn = sn || {}
    </script> 
  <!-- 引入项目css资源文件 --> 
  <link rel="stylesheet" type="text/css" href="{{_HOME_}}/css/safepc.css" /> 
  <link rel="stylesheet" type="text/css" href="{{_HOME_}}/css/head.css?v=201601280042" /> 
  <!-- 此处引入公用头部 --> 
  <!-- 此处引入公用头部 --> 
  <!--#include file="/include/toolbar.shtml"--> 
  <!-- 非普通消费者页头 --> 
  <!-- 普通消费者和默认的页头 --> 
  <div id="_TOP_BANNER_" class="ng-top-banner"></div> 
  <!-- 引入项目模块文件 --> 
  <div class="header"> 
   <div id="snlogo" class="clearfix"> 
    <a href="index.html" title="苏宁易购"><img alt="苏宁易购" src="{{ u(_CONF_IMG) . config('site.logo')}}" /></a> 
    <a href="/asc/index.do" name="asc_index_navbar_logo"><span class="channel"></span></a> 
    <span class="link-cont"> <a href="/asc/index.do" name="asc_index_navbar_homepage" id="head_index">首页</a> <a href="/asc/toolservice.do" name="asc_index_securityinfo" id="head_sectool">安全工具</a> <a href="/asc/school.do" name="asc_index_navbar_school" id="head_secschool">安全学堂</a></span> 
   </div> 
   <script type="text/javascript" src="https://sslres.suning.com/project/asc/style/js/da_opt_inc-min.js?v=201601280042"></script> 
<script type="text/javascript">

</script> 
  </div> 
  <!-- 引入项目模块文件 --> 
  <div class="wrap-cont"> 
   <form class="safe-form safe-form-main" action="/asc/forgetpsw/check.do" method="post"> 
    <input type="hidden" id="uuid" name="uuid" value="ab871111-5aeb-4bbd-b8f9-52248f77e213" /> 
    <input type="hidden" id="imgCodeURL" name="imgCodeURL" value="https://vcs.suning.com/vcs" /> 
    <input type="hidden" id="nextTargetUrl" name="nextTargetUrl" value="" /> 
    <div class="wrap"> 
     <p class="guide-cont"> <span><a href="/asc/index.do">安全中心 &gt;</a></span> <span><a href="/asc/toolservice.do"> 安全工具 &gt;</a></span> <span class="color-gray"> 找回密码</span> </p> 
     <div class="main-wrap"> 
      <div class="main-cont"> 
       <div class="cop tab-cont cont-marg"> 
        <div class="reg-nav"> 
         <ul class="reg-step clearfix" style="text-align:center;"> 
          <li class="current"><i class="icon-1"></i>输入账户名</li> 
          <li><i class="icon-2"></i>验证身份</li> 
          <li><i class="icon-3"></i>重置密码</li> 
          <li><i class="icon-4"></i>重置成功</li> 
         </ul> 
        </div> 
       </div>
       <div class="reg-main mt0">
            
        <div class="h50">
          <div class="error-box mb10 mt10 hide">
              <i class="error">
              </i>
              <span>
                sadasdasd
              </span>
          </div> 
        </div>


        <!-- 用户名  -->
        <div class="reg-txtbox text-uname"> 
         <label class="input-label" style="display: block;"></label> 
         <i class="ico-person"></i> 
         <i class="ms-ico ms-ico-ok" id="errorUname" style="display:none"></i> 
         <input class="txt-input uname" type="text" name="uname" value="" tabindex="1" placeholder="请输入您的易购账号：用户名/邮箱/手机" /> 
        </div>
        <!-- 用户名 -->

        <!-- 邮箱 -->
        <div class="reg-txtbox uemail-txtbox" style="display: none;"> 
         <label class="input-label" style="display: block;"></label> 
         <i class="ico-person"></i> 
         <i class="ms-ico ms-ico-ok" id="errorUemail" style="display:none"></i> 
         <input class="txt-input uemail" type="text" name="uemail" value="" tabindex="1" placeholder="请输入您的绑定邮箱：邮箱" /> 
        </div>
        <!-- 邮箱 -->
        
        <!-- 新密码 -->
        <div class="reg-txtbox upwd-txtbox" style="display: none;"> 
         <label class="input-label" style="display: block;"></label> 
         <i class="ico-code"></i> 
         <i class="ms-ico ms-ico-ok" id="errorUpwd" style="display:none"></i> 
         <input class="txt-input upwd" type="password" name="upwd" value="" tabindex="1" placeholder="请输入新密码" /> 
        </div>

        <!-- 提示位置 -->
        <div class="input-tip per-input-tip" id="tipMessage"></div>


        <!-- 用户名验证码 --> 
        <div class="reg-code uname-code"> 
         <div class="code-txtbox code-uname"> 
          <i class="ms-ico ms-ico-ok" id="errorIcon2" style="display:none"></i> 
          <i class="ico-code"></i> 
          <input class="txt-input unameCode" type="text" name="unameCode" maxlength="4" placeholder="请输入验证码" /> 
          <label class="input-label"></label> 
         </div> 
         <div class="code-num"> 
          <!-- <img id="imgSrc" src="" />  -->
           <img src="{{captcha_src()}}"  onclick="this.src+='?c='+Math.random()" class="code" style="height: 75%;width: 55%" />
          <a href="javascript:" class="changecode" name="asc_forgetpsw_locate_change" onclick="$('.code')[0].click()">换一张</a> 
         </div> 
        </div>
        <!-- 验证码 -->  

        <!-- 邮箱验证码 -->
        <div class="reg-code email-code" style="display:none"> 
          <div class="code-txtbox"> 
              <i class="ms-ico ms-ico-ok" id="errorIcon2" style="display:none"></i> 
              <i class="ico-code"></i> 
              <input class="txt-input uemail-code" type="text" name="uemail-code" maxlength="4" placeholder="请输入验证码" /> 
              <label class="input-label"></label> 
          </div>
          <div class="code-num " style="border:none;"> 
              <button onclick="getcode();return false" style="width: 80%;height: 100%;border:none;float: right;" class="getcode btn-get-code">
                          获取邮件验证码
              </button>
          </div>
         </div>  
          

          <!-- 确认新密码 -->
        <div class="reg-txtbox reupwd-txtbox" style="display: none;"> 
         <label class="input-label" style="display: block;"></label> 
         <i class="ico-code"></i> 
         <i class="ms-ico ms-ico-ok" id="errorReupwd" style="display:none"></i> 
         <input class="txt-input reupwd" type="password" name="reupwd" value="" tabindex="1" placeholder="确认新密码" /> 
        </div>

        <!-- 提示位 -->
        <div class="input-tip per-input-tip" id="tipMessage2"></div> 
        <a class="register-btn" tabindex="-1" name="next" onclick="return false;">下一步</a> 
       </div> 
       <div class="mess-tip show"> 
        <h3>邮箱收不到验证码怎么办：</h3> 
        <p>1.可能由于网络异常导致，请重新获取或稍后再试</p> 
        <p>2.请检查您的垃圾邮箱或广告邮箱，并在邮箱设置中，将苏宁发件人设置为白名单</p> 
        <p>3.一个账号一天最多可以发送5封验证邮件</p> 
       </div> 
      </div> 
     </div> 
    </div> 
   </form> 
  </div>
  <script type="text/javascript">
        var set    = null;
        var count  = 0;
        var uname  = null;
        var uemail = null;
        $('a[name=next]').click(function(){
          if(count==0){
            if(checkNull('.uname','请填写用户名','.text-uname')) return;
            if(checkNull('.unameCode','请填写验证码','.code-uname')) return;
            if(checkUname()) return;
            $('.text-uname').hide(500);
            $('.uname-code').hide(500);
            $('.uemail-txtbox').show(500);
            $('.email-code').show(500);
            count++;
          }else if(count==1){
            if(checkNull('.uemail','请填写邮箱','.uemail-txtbox')) return;
            if(checkNull('.uemail-code','请填写邮箱验证码')) return;
            if(checkEmail()) return;
            $('.uemail-txtbox').hide(500);
            $('.email-code').hide(500);
            $('.upwd-txtbox').show(500);
            $('.reupwd-txtbox').show(500);
            $(this).text('确认');
            count++;
          }else{
            if(checkNull('.upwd','请填写新密码','.upwd-txtbox')) return;
            if(checkNull('.reupwd','请填写确认新密码','.reupwd-txtbox')) return;
            if(!updatePass()) return;
            alert('密码重置成功,请登录！',location.href='/login');
          }
          
          $('.current').next().addClass('current');
        })

        //验证用户名
        function checkNull(name,msg,err)
        {
            var val=$(name).val();
            if(val==''){
              $('.error-box').removeClass('hide').find('span').text(msg);
              $(err).css('border','1px solid red');
              return true;
            }
            $('.error-box').addClass('hide');
            return false;
        }

        // 验证用户
        function checkUname()
        {
            var flag=false;
            code=$('.unameCode').val();
            uname=$('.uname').val();
            $.ajax({
            type : 'POST',
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            url : '/existsu',
            data : {
              code:code,
              uname:uname,
            },
            success : function(data){
                
                if(data.status=='0' || data.status=='2'){
                  flag=true;
                  $('.error-box').removeClass('hide').find('span').text(data.msg);
                }
                console.log(data);
                //刷新验证码
                $('.code')[0].click();
              },
              async:false
            });
            return flag;
        }
        //验证邮箱验证码
        function checkEmail()
        {
            var flag=false;
            uemail=$('.uemail').val();
            $.ajax({
            type : 'POST',
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            url : '/existse',
            data : {
              code:$('.uemail-code').val(),
            },
            success : function(data){
                if(data.status=='0'){
                  flag=true;
                  $('.error-box').removeClass('hide').find('span').text(data.msg);
                }
                console.log(data);
              },
              async:false
            });
            return flag;
        }
        function getcode()
        {
          $.post('/getcode',{
            uname:uname,
            uemail:$('.uemail').val(),
            '_token':"{{ csrf_token() }}"
          },function(data){
              if(data.status=='0'){
                alert(data.msg);
              }else if (data.status == '1'){

                $('.getcode').attr('disabled',true).text(59);
                tem();
                alert(data.msg);
              } else {
                alert(data.msg);
              }
          })
        }

        //修改密码
        function updatePass()
        {
          var reupwd=$('.reupwd').val();
          var upwd=$('.upwd').val();
          if(reupwd!=upwd){
             $('.error-box').removeClass('hide').find('span').text('两次密码不一致');
             return false;
          }
          var flag=false;
            $.ajax({
            type : 'POST',
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            url : '/updatepass',
            data : {
              upwd:upwd,
              uemail:uemail,
              uname:uname
            },
            success : function(data){
                if(data.status=='1'){
                  flag=true;
                }
              },
              async:false
            });
            return flag;
        }
  </script> 
  <!-- 此处引入公用尾部 --> 
  <div class="clear"></div> 
  <div class="ng-s-footer"> 
   <div class="ng-s-f-con"> 
    <p class="ng-url-list"> <a name="public0_none_wb_yqlj0101" target="_blank" href="http://www.suning.cn/">苏宁云商</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0102" target="_blank" href="http://10035.suning.com/">苏宁互联</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0111" target="_blank" href="http://jinrong.suning.com/">苏宁金融</a><span>|</span> <a name="public0_none_wb_yqlj0103" target="_blank" rel="nofollow" href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://pay.suning.com/epp-epw/login/login.action">易付宝</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0105" target="_blank" href="http://www.pptv.com?rcc_id=snyg">PPTV</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0106" target="_blank" href="http://redbaby.suning.com/">红孩子</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0107" target="_blank" href="http://binggo.suning.com/">缤购</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0108" target="_blank" href="http://laox.suning.com/">乐购仕</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0111" target="_blank" href="http://wuliu.suning.com/">苏宁物流</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0109" target="_blank" href="http://usa.suning.com/">苏宁美国</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0110" target="_blank" href="http://hk.suning.com/">苏宁香港</a><span>|</span> <a name="public0_none_wb_yqlj0111" target="_blank" href=" http://m.suning.com/">手机苏宁</a> </p> 
    <p class="ng-url-list"> <a rel="nofollow" name="public0_none_wb_yqlj0201" target="_blank" href="http://club.suning.com/hr/aboutus.html">关于苏宁易购</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0202" target="_blank" href="http://help.suning.com/page/id-469.htm">联系我们</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0203" target="_blank" href="http://careers.cnsuning.com/">诚聘英才</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0204" target="_blank" href="http://sop.suning.com/">供应商入驻</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0205" target="_blank" href="http://union.suning.com/">苏宁联盟</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0206" target="_blank" href="http://zb.suning.com/">苏宁招标</a><span>|</span> <a name="public0_none_wb_yqlj0207" target="_blank" href="http://union.suning.com/aas/links.html">友情链接</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0208" target="_blank" href="http://help.suning.com/page/id-281.htm">法律申明</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0209" target="_blank" href="http://ued.suning.com/survey/">用户体验提升计划</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0209" target="_blank" href="http://mrs.suning.com/mrs-web/stockholder/check.htm">股东会员认证</a> </p> 
    <p class="ng-copyright"> Copyright&copy; 2002-2016 ，苏宁云商集团股份有限公司版权所有 <a style="color:#999" target="_blank" href="http://www.miitbeian.gov.cn">苏ICP备10207551号-4</a> <a style="color:#999" rel="nofollow" target="_blank" href="http://img.suning.cn/public/v3/images/SUB1-20130131.png">苏B1-20130131</a> <a style="color:#999" rel="nofollow" target="_blank" href="http://img.suning.cn/public/v3/images/SUB2-20130376.png">苏B2-20130376</a> <a style="color:#999" rel="nofollow" target="_blank" href="http://img.suning.cn/public/v3/images/SUB2-20130391.png">苏B2-20130391</a> 出版物经营许可证新出发苏批字第A-243号</p> 
    <div class="ng-authentication"> 
     <a rel="nofollow" name="public0_none_wb_zs0302" target="_blank" href="https://search.szfw.org/cert/l/CX20111018000608000610"> <img width="76" height="24" alt="诚信网站" src="http://img.suning.cn/public/v3/images/chengxin.png" /> </a> 
     <a rel="nofollow" name="public0_none_wb_zs0303" target="_blank" href="http://image.suning.cn/uimg/snnet/snnetImg/142891196680527240.jpg"> <img width="76" height="24" alt="中国联通授权网络经营代理商" src="http://img.suning.cn/public/v3/images/unicom.png" /> </a> 
     <a rel="nofollow" name="public0_none_wb_zs0304" target="_blank" href="http://img.suning.cn/public/v3/images/dianxin_content.jpg"> <img width="76" height="24" alt="中国电信授权网络经营代理商" src="http://img.suning.cn/public/v3/images/dianxin.jpg" /> </a> 
     <a name="public0_none_wb_zs0303" rel="nofollow" target="_blank" href="http://www.jsgsj.gov.cn:60101/keyLicense/verifKey.jsp?serial=320000163820130117100000009630&amp;signData=0+ADYt839gp1EiqiZXnsxsyOnpO32Wg4sFePaiV9+NtTV/XCAMXGzT/AOgycGMm0EjsR/Ot661M7h9GeStpA8QyJTs1Ip1K/CSNaemthn7f1NjI03x1E6v9ZRT+3M60WZIGLBEjFs5XMliufNz1cJlYDQrTZvaZbHyJ2KzgJB4Y="> <img width="76" height="24" alt="电子营业执照" src="http://img.suning.cn/public/v3/images/dianzi.png?v=02" /> </a> 
    </div> 
   </div> 
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