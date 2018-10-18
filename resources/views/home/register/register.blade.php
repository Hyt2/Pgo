<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="_token" content="{{ csrf_token() }}">
  <title>注册</title> 
  <link rel="shortcut icon" href="{{ _HOME_ }}/images/favicon.ico" type="image/x-icon" /> 
  <!-- 引入全站公用资源文件 --> 
  <link rel="stylesheet" href="{{ _HOME_ }}/css/reg.css" /> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/jquery.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/sn_lazyload.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/lazyelem.min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/SFE.base.min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/search.min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/sn-sidebar.min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/chatCompat_mini.js"></script> 
 </head> 
 <body> 
  <input type="hidden" id="baseUrl" value="" /> 
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

function logonUrl(url,logonType,userVal){
   if(url == "" || typeof(url) == "undefined"){
     url = "http://www.suning.com";
   }
   if(logonType == "" || typeof(logonType) == "undefined"){
     logonType = "b2c";
   }
 var targetUrl = encodeURIComponent(url);
 var logonurl = "https://passport.suning.com/ids/login?service="
       + encodeURIComponent("https://reg.suning.com/auth?targetUrl="+ targetUrl)
       + "&method=GET&loginTheme="+logonType;
  if("" !=userVal && "undefined" != typeof(userVal) ){
     logonurl = logonurl+"&username="+userVal;
  }
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
  <!-- 引入项目资源文件 --> 
  <link rel="stylesheet" type="text/css" href="{{ _HOME_ }}/css/snAccount_v2-min.css" /> 
  <link rel="stylesheet" type="text/css" href="{{ _HOME_ }}/css/style-min.css" /> 
  <link rel="stylesheet" type="text/css" href="{{ _HOME_ }}/css/style-person-reg-min.css" /> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/porto.js"></script> 
  <div class="wrapper"> 
   <!-- 简头 [[ --> 
   <div class="simple-header"> 
    <div id="snlogo" class="clearfix"> 
     <a href="index.html" title="苏宁易购"><img alt="苏宁易购" src="https://sslres.suning.com/project/srsregister/images/snlogo.png" /></a> 
     <span class="channel l reglogo"></span> 
    </div> 
   </div> 
   <!-- 简头 ]] --> 
   <div class="main-box reg mart reg-bor-top"> 
    <p class="tr lh36 notice login-bor"> 我已经注册，马上<a href="{{url('/')}}" name="Preg_index_none_log">登录 &gt;</a></p> 
    <form id="enterReg_form" action="/home/reg/doreg" method="post" autocomplete="off"> 
     <div class="tab-cont cont-marg" id="step1"> 
      <div class="reg-nav"> 
       <ul class="reg-step clearfix" style="text-align:center;"> 
        <li class="current"><i class="icon-1"></i>设置登录名</li> 
        <li><i class="icon-2"></i>设置邮箱</li>
        <li><i class="icon-3"></i>注册成功</li> 
       </ul> 
      </div> 
      

      <!-- 用户名 -->
      <!-- reg-type-cont [[ -->
      <div class="reg-main" style=" min-height: 560px;height: auto!important;height: 560px;">
        <div class="error-wrap">
            <div class="error-box mb10 mt10 hide">
                <i class="error">
                </i>
                <span>
                </span>
            </div>
        </div>
        <div class="reg-form pb85">
            <div class="reg-txtbox">
                <label class="input-label">
                    
                </label>
                <i class="ico-usename">
                </i>
                <input class="txt-input text-uname" type="text" id="" name="uname"
                maxlength="18" tabindex="1" value="{{session('unames')}}" placeholder="用户名" />
            </div>
            <div class="input-tip per-input-tip uname">
                3-12位数字字母或汉字
                <span style="float: right;">
                </span>
            </div>
            <div class="reg-txtbox">
                <label class="input-label">
                    
                </label>
                <i class="ico-password">
                </i>
                <input class="txt-input text-upwd" type="password" name="upwd" value=""
                maxlength="18" tabindex="1" placeholder="密码" />
            </div>
            <div class="input-tip per-input-tip upwd">
                8-16位数字字母
                <span style="float: right;">
                </span>
            </div>
            <div class="reg-txtbox">
                <label class="input-label">
                    
                </label>
                <i class="ico-password">
                </i>
                <input class="txt-input text-reupwd" type="password" name="reupwd" value=""
                maxlength="18" tabindex="1" placeholder="确认密码" />
            </div>
            <div class="input-tip per-input-tip smsCodeDiv" id="smsCodeTip">
              8-16位数字字母
            </div>
            <div class="reg-form pb85">
                <div class="reg-txtbox mail-reg">
                    <label class="input-label">
                        
                    </label>
                    <i class="ico-email">
                    </i>
                    <input class="txt-input text-uemail yfb-acc-mark yfb-account" type="text" name="uemail" maxlength="50" tabindex="1" value="{{session('uemails')}}" placeholder="请输入您的邮箱" />
                </div>
                <div class="input-tip per-input-tip uemail" id="emailAliasTip">
                  例：1664747641@qq.com 提示：此邮箱必须要能收到邮件<span style="float:right;"></span>
                </div>
                <div class="reg-code reg-phone-code">
                    <div class="code-txtbox">
                        <i class="ico-code">
                        </i>
                        <input class="txt-input" type="text" name="emailCode" maxlength="6" tabindex="4" placeholder="请输入邮件验证码" />
                        <label class="input-label">
                            
                        </label>
                    </div>
                    <a class="btn-get-code" onclick="" name="Preg_index_none_getmailnew" >
                        <button onclick="return goemails('.text-uemail')" style="width: 100%;height: 100%;border:none" class="getcode btn-get-code">
                            获取邮件验证码
                        </button>
                    </a>
                </div>
                <div class="input-tip  per-input-tip red" id="protocolTip">
                </div>
                <div class="reg-tip">
                    <div class="auto-label">
                        <input type="checkbox" id="protocol" name="Preg_index_none_check" checked="checked"
                        />
                        &nbsp;同意
                        <a target="_blank" href="/memberRegu.do" name="Preg_index_none_hyzc" tabindex="-1">
                            《苏宁易购会员章程》
                        </a>
                        <a target="_blank" href="/eppAggrement.do" name="Preg_index_none_yfb"
                        tabindex="-1">
                            《易付宝协议》
                        </a>
                        及
                        <a target="_blank" href="/snAdPlatformTreaty.do" name="Preg_index_none_snlm"
                        tabindex="-1">
                            《苏宁广告联盟在线协议》
                        </a>
                    </div>
                </div>
                <div class="btn-reg">
                    <button class="reg-submit reg-next complete" name="Preg_index_none_submit1" style="width: 460px;height: 50px;" >
                        下一步
                    </button>
                </div>
                <p class="bottom-tip mt10">
                    <a href="{{url('/login')}}" name="Preg_index_none_companyreg">
                        已有账户,去登陆 &gt;
                    </a>
                </p>
                <div class="clear">
                </div>
            </div>
        </div>
      <!-- reg-type-cont [[ --> 

       
      </div> 
     </div> 
    </form> 
   </div> 
  </div> 
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
  <script type="text/javascript">
var sa = sa || {};
sa.bid = "106";
</script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/snAccount_v2-min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/main-min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/srs-common-min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/srs-validate-min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/perReg-min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/password-min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/sa-analytics.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/sa-functions.js"></script> 
  <script>
$(function(){
  if (typeof(yfb) != "undefined") {
      yfb.account();
  }
  
  if (typeof(porto) != "undefined") {
    porto.init({
        partnerCode:'none',
        appName:'commerce',
        referenceId:'123',
        sessionId:'123',
        serviceUrl:"https://fp.suning.com/bennu-collector/fp/porto.json"
    });
  }

});
</script> 
<script type="text/javascript" src="{{ _HOME_ }}/js/da_opt_inc-min.js"></script> 
<script src="{{_PLUS_}}/layer/layer.js"></script>
<script type="text/javascript">
  var num=0;
  var ureg=/^[\u4e00-\u9fa5-\w]{3,12}$/;
  var dreg=/^\w{8,16}$/;
  var ereg=/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/;
  var set=null;
  $('.reg-next').click(function(){
        // 判断用户名是否为空
        if(!getv('uname')) {layer.msg('请填写用户名!', {icon: 2,time:1000}); return false;}
        // 判断密码是否为空
        if(!getv('upwd')) {layer.msg('请填写密码!', {icon: 2,time:1000}); return false};

        //验证确认密码是否一致
        if(getv('upwd')!=getv('reupwd')){layer.msg('两次密码不一致!', {icon: 2,time:1000});  return false}

        //验证用户名格式
        if(!getlen('.text-uname',ureg,'.uname')) return false;
        //验证密码格式  
        if(!getlen('.text-upwd',dreg,'.upwd')) return false;

        //验证邮箱
        if(!getlen('.text-uemail',ereg,'.uemail')) return false;
        

        //验证用户名是否重复
        if(!check()) return false;

        var v=getv('emailCode');
        if(v==''){
          layer.msg('请填写验证码',{time:1000});
          return false;
        }
        checkCode();

        return false;
  })

  //失去焦点是验证用户名是否重复
  $('input[name=uname]').blur(function(){
    check();
  })

  //验证用户名
  $('.text-uname').focus(function(){//在获取焦点并监听键盘事件
    $('.text-uname').keyup(function(){
      getlen($('.text-uname'),ureg,'.uname');
    })
  })

  //验证密码
  $('.text-upwd').focus(function(){//在获取焦点并监听键盘事件
    $('.text-upwd').keyup(function(){
      getlen($('.text-upwd'),dreg,'.upwd');
    })
  })

  //验证邮箱
  $('.text-uemail').focus(function(){//在获取焦点并监听键盘事件
    $('.text-uemail').keyup(function(){
      getlen($('.text-uemail'),ereg,'.uemail');
    })
  })

  function check()
  {
    var uname=getv('uname');
    var flag=true;
    $.ajax({
          type : 'POST',
          dateType : 'json',
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url : '/reg/regcheck',
          data : {uname:uname},
          success : function(data){
              if(data!='0'){
                layer.msg('该用户已存在!', {icon: 5,time:1000});
                flag=false;
              }
          },
          async:false
      });
    return flag;
  }

 //获取name指定字段的值
  function getv(name)
  {
    return $('input[name='+name+']').val().trim();
  }

  //判断输入时字符长度
  var txt=$('.upwd').text();
  /*
  *obj  监听输入字符的对象或类名或其他的标识
  *reg  正则表达式
  *cla  提示信息对象的类名
  */
  function getlen(obj,reg,cla)
  {
    var val=$(obj).val().trim();
    if(!reg.test(val)){
      $(cla).css('color','red').find('span').text('格式错误');
      return false;
    }else{
      $(cla).css('color','green').find('span').text('正确');
      return true;
    };
  }
  //发送邮件获取验证码
  function goemails(obj){

    // 判断用户名是否为空
        if(!getv('uname')) {layer.msg('请填写用户名!', {icon: 2,time:1000}); return false;}
        // 判断密码是否为空
        if(!getv('upwd')) {layer.msg('请填写密码!', {icon: 2,time:1000}); return false};

        //验证确认密码是否一致
        if(getv('upwd')!=getv('reupwd')){layer.msg('两次密码不一致!', {icon: 2,time:1000});  return false}

        //验证用户名格式
        if(!getlen('.text-uname',ureg,'.uname')) return false;
        //验证密码格式  
        if(!getlen('.text-upwd',dreg,'.upwd')) return false;

        //验证邮箱
        if(!getlen('.text-uemail',ereg,'.uemail')) return false;

    if($(obj).val()=='') return layer.msg('请填写邮箱',{time:1000});

    if(!ereg.test($(obj).val())) return layer.msg('邮箱格式错误',{time:1000});
    $.ajax({
          type : 'POST',
          dateType : 'json',
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url : '/reg/goemail',
          data : {uemail:getv('uemail'),uname:getv('uname')},
          success : function(data){
              if(data.status=='1'){
                    $('.getcode').attr('disabled',true).text(299);
                    tem();
                    $('.reg-step li').eq(1).addClass('current');
                    layer.msg(data.msg, {icon: 6,time:1000});
                  }else{
                    layer.msg(data.msg, {icon: 5,time:1000});
                  }
          },
          async:true
      });
    return false;
  }

  function checkCode()
  {
    $.ajax({
          type : 'POST',
          dateType : 'json',
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url : '/reg/checkcode',
          data : {uemail:getv('uemail'),uname:getv('uname'),upwd:getv('upwd'),code:getv('emailCode')},
          success : function(data){
                  
                  if(data.status=='1'){
                    // layer.msg(data.msg, {icon: 6,time:1000});
                    location.href="{{url('/reg/reg_success/a5&!888')}}";
                  }else{
                    layer.msg(data.msg, {icon: 5,time:1000});
                  }
          },
          async:true
      });
  }
  function tem(){
    var s=$('.getcode').text();
    set=setInterval(function(){
      $('.getcode').text(s--);
      if(s<0){clearInterval(set);$('.getcode').attr('disabled',false).text('获取邮件验证码');};
    },1000);
    
  }
</script>  
 </body>
</html>