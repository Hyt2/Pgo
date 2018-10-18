<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8" />
  <meta name="_token" content="{{ csrf_token() }}" />
  <title>个人信息</title> 
  <script type="text/javascript" src="http://res.suning.cn/project/msIndex/js/siteAnalytics.min.js?v=2016030101"></script> 
  <script type="text/javascript">
        //全局变量
        var sn = sn || {
            "context": "/emall",
            "domain": "www.suning.com",
            "storeId": "10052",
            "catalogId": "10051",
            "memberDomain": "member.suning.com",
            "online": "online.suning.com",
            "cookieDomain": ".suning.com",
            "categoryId": "20089",
            "searchDomain": "http://search.suning.com/emall/",
            "msiDomain":"my.suning.com",
            "scriptDomianDir":""
        };
		// 定义当前页面在我的易购下的类别标识
		var mySuningSideBarSign = "personMyInfoMenuFlag";
		var mySuningSideMenuType = "short";
    </script> 
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
  <link rel="stylesheet" type="text/css" href="{{_HOME_}}/css/reset.min.css?v=2016030101" /> 
  <link rel="stylesheet" type="text/css" href="{{_HOME_}}/css/ms-style.min.css?v=2016030101" /> 
  <link rel="stylesheet" type="text/css" href="{{_HOME_}}/css/personal_member.min.css?v=2016030101" /> 
  <link rel="stylesheet" type="text/css" href="{{_HOME_}}/css/calendar.min.css?v=2016030101" /> 
  <link rel="stylesheet" type="text/css" href="{{_HOME_}}/css/Snaddress.min.css?v=2016030101" /> 
  <link rel="stylesheet" type="text/css" href="{{_HOME_}}/css/imgareaselect-default.min.css?v=2016030101" /> 
 </head> 
 <!--[if lt IE 7 ]><body class="ie ie6"><![endif]--> 
 <!--[if IE 7 ]><body class="ie ie7"><![endif]--> 
 <!--[if IE 8 ]><body class="ie8"><![endif]--> 
 <!--[if IE 9 ]><body class="ie9"><![endif]--> 
 <!--[if (gt IE 9)|!(IE)]><!--> 
 <body class="ms-body"> 
  <!--<![endif]--> 
  <!-- 此处引入公用头部 --> 
  <div id="_TOP_BANNER_" class="ng-top-banner"></div> 
  @include('layout.tool_bar')
  <!--我的易购首页头部--> 
  <!-- 我的易购公用头 [[ --> 
  <header class="ms-header ms-header-inner ms-head-position"> 
   <article class="ms-header-menu"> 
    <style type="text/css">
	.nav-manage .list-nav-manage {
		position: absolute;
		padding: 15px 4px 10px 15px;
		left: 0;
		top: -15px;
		width: 90px;
		background: #FFF;
		box-shadow: 1px 1px 2px #e3e3e3, -1px 1px 2px #e3e3e3;
		z-index: 10;
	}
	.ms-nav li {
		float: left;
		position: relative;
		padding: 0 20px;
		height: 44px;
		font: 14px/26px "Microsoft YaHei";
		color: #FFF;
		cursor: pointer;
		z-index: 10;
	}
</style> 
    <div class="header-menu"> 
     <div class="ms-logo"> 
      <a name="Myyigou_index_none_daohangLogo" href="{{url('/userinfo')}}" class="ms-head-logo"></a> 
     </div> 
     <nav class="ms-nav"> 
      <ul> 
       <li class=""><a name="Myyigou_index_none_daohang1001" data-url="" href="{{url('/')}}">首页</a><i class="nav-arrow"></i></li> 
       <li class="nav-manage selected"> <a name="Myyigou_index_none_daohang1003" data-url="" href="http://www.suning.com">账户管理<em></em></a><i class="nav-arrow"></i> 
        <div class="list-nav-manage hide"> 
         <p class="nav-mge-hover">账户管理<em></em></p> 
         <p><a name="Myyigou_index_none_daohang10031" data-url="" href="{{url('/userinfo')}}">个人信息</a></p> 
         <p><a target="_blank" name="Myyigou_index_none_daohang10032" data-url="" href="https://aq.suning.com/asc/index.do">安全设置</a></p> 
         <p><a name="Myyigou_index_none_daohang10033" data-url="" href="https://my.suning.com/cardBind.do">门店会员卡</a></p> 
         <p><a name="Myyigou_index_none_daohang10037" data-url="" href="https://ssl.suning.com/emall/SNB2CMergeInterconnectInfoCmd?storeId=10052&amp;catalogId=10051">关联互联号</a></p> 
         <p><a target="_blank" name="Myyigou_index_none_daohang10034" data-url="" href="https://pay.suning.com/epp-epw/useraccount/compatible-login!login.action">我的易付宝</a></p> 
         <p><a name="Myyigou_index_none_daohang10035" data-url="" href="member_index.html/address.do">地址管理</a></p> 
         <p><a name="Myyigou_index_none_daohang10036" data-url="" href="member_index.html/student.do">校园用户</a></p> 
         <p><a name="Myyigou_index_none_daohang10038" data-url="" href="member_index.html/eppBind.do">易付宝绑定设置</a></p> 
         <p><a name="Myyigou_index_none_daohang10039" data-url="" href="member_index.html/accountBind.do">绑定管理</a></p> 
         <p><a name="Myyigou_index_none_daohang100310" data-url="" href="member_index.html/personalVat.do">个人增票</a></p> 
        </div> </li> 
       <li class="ms-nav-msg"><a name="Myyigou_index_none_daohang1004" data-url="messageMenuFlag" href="http://msg.suning.com/">消息</a><i class="nav-arrow"></i></li> 
      </ul> 
      <div class="ms-search" style="padding: 8px;margin-top: -3px"> 
       <form method="get" onsubmit="return SFE.base.onSubmitSearch(this)" id="msiSearchForm"> 
        <span></span> 
        <input type="hidden" value="" id="searchKeywords" /> 
        <input type="text" value="" id="searchKeywordFixed" /> 
        <a href="javascript:ms_common.msiOnSubmitSearch('searchKeywordFixed');" id="msiSearchKeywordOnSub"></a> 
       </form> 
      </div> 
     </nav> 
    </div> 
   </article> 
	<article class="ms-useinfo"> 
    <div id="memberInfo" class="header-useinfo"> 
     <div class="ms-avatar"> 
      <div class="useinfo-avatar"> 
       <img src="http://image4.suning.cn/uimg/cmf/cust_headpic/0000000000_01_60x60.jpg"> 
       <div class="edit-avatar"></div> 
       <a href="member_index.html/person.do" name="Myyigou_index_info_PheadImg" class="text-edit-avatar">修改</a> 
      </div> 
      <a href="member_index.html/person.do" name="Myyigou_index_info_PnickName">180******38</a> 
     </div> 
     <!--用户名称及其他--> 
     <div class="ms-name-info"> 
      <div class="link-myinfo"> 
       <a href="member_index.html/person.do" name="Myyigou_index_info_PmyDatum">我的资料</a> 
      </div> 
      <div class="info-member"> 
       <!--会员等级对应类名：普通-铂金（member-1/4）--> 
       <span class="name-member member-1"> <i></i><a href="http://vip.suning.com/ams-web/custLevel/memberLevel.htm" name="Myyigou_index_info_PmemberGrade" target="_blank">新人会员</a></span> 
       <label class="grow-num">成长值：</label> 
       <div class="rate-member"> 
        <div class="text-rate"> 
         <span>20</span>/ 
         <span>0</span> 
        </div> 
        <div style="width:0%" class="bg-rate"></div> 
       </div> 
      </div> 
      <div class="info-safety"> 
       <!--安全等级文字颜色状态对应类名：低(lv-1)/中(lv-2)/高(lv-3)--> 
       <span class="safety-lv lv-3"> <a target="_blank" href="https://aq.suning.com/asc/loginsecurityinfo.do" name="Myyigou_index_info_SecurityLv">安全等级：<span>中</span></a></span> 
       <!--未/已绑定状态：(unbind)bind-phone/email--> 
       <a href="https://aq.suning.com/asc/mobile/check.do?" target="_blank" name="Myyigou_index_info_PbindPhone" class="bind-phone"> <i></i>修改手机</a> 
       <a href="https://aq.suning.com/asc/email/check.do?" target="_blank" name="Myyigou_index_info_PbindEmail" class="bind-email"> <i></i>修改邮箱</a> 
       <a href="member_index.html/address.do" class="manage-addr" name="Myyigou_index_info_AddressManagement"><i></i>地址管理</a> 
      </div> 
     </div> 
    </div> 
   </article>
  </header> 
  <!-- 我的易购公用头 ]] --> 
  <script>
	$(function(){
		getCommonHorizontalMenu();
		getMyMemberInfo();
	});
	
	function getCommonHorizontalMenu(){
		var  _msiDomain = ms_common.getEnv('msiDomain');
		if(!_msiDomain){
			_msiDomain = sn.msiDomain;
		}
		var  _msiT = new Date().getTime();
		try{
			if(ms_common.getCookie('custno')){
				_msiT = ms_common.getCookie('custno') ^ 'mySuningSideMenu';
			}
		}catch(e){
		}
		var url = "//"+ _msiDomain + "/ajax/getCommonHorizontalMenu.do?_t="+_msiT;
	getMyMemberInfo = function(){
		var  _msiDomain = ms_common.getEnv('msiDomain');
		if(!_msiDomain){
			_msiDomain = sn.msiDomain;
		}
		$.ajax({
			type : "post",
			url :"//"+ _msiDomain + "/memberInfoPageHead.do",
			async : true,
			dataType:'jsonp',
			timeout : 15000,
			success : function (data) {
				if("error" != data.htmlDom){
					$("#memberInfo").replaceWith("<div class='header-useinfo' id='memberInfo' >"+data.htmlDom+"</div>");
				    ms_common.userAvatar();
				}else{
	
				}
			},
			error : function(data) {
			}
		});
	};
	
	getMMSMyMessageInfo = function(){
		$('.ms-header .ms-header-menu .ms-nav').find("li").each(function(){
		var data_flag = $(this).find('a').attr('data-url');
			if(data_flag=="messageMenuFlag"){
				var  _mmsDomain = ms_common.getEnv('mmsDomain');
				$.ajax({
					type : "get",
					url :"//"+_mmsDomain+"/service/getUnreadMessages.do",
					async : true,
					dataType:'jsonp',
					timeout : 15000,
					success : function (data) {
						if ("error" != data.returnCode) {
							var messageCount = data.unreadMsgTotal;
							if (messageCount > 0) {
								$('.ms-header-menu .ms-nav').find("li").each(function(){
								var data_flag = $(this).find('a').attr('data-url');
									if(data_flag=="messageMenuFlag"){
							        	$(this).find('a').append("<span>"+messageCount+"</span>");
									}
								})
							}
						}
					},
					error : function(data) {
					}
				});	
			}
		})
	};
	
	setMsiMenuNewIcon = function(){
		$('.ms-header .ms-header-menu .ms-nav').find("li").each(function(){
		var data_flag = $(this).find('a').attr('data-url');
			if(data_flag=="messageMenuFlag"){
				$(this).find('a').after('<i class="nav-new"></i>');
			}
		})
	};
</script> 
  <div id="ms-center" class="personal-member"> 
   <div class="cont"> 
    <!-- 此处引入我的易购左侧组件 --> 
    <!-- 我的易购左侧组件 [[ --> 
    <div class="cont-side"> 
     <div class="side-neck"> 
      <i></i> 
     </div> 
     <div class="ms-side"> 
      <article class="side-menu side-menu-off"> 
       <style type="text/css">

.side-hot-icon{background: url(images/hot.png?v=2016030101) no-repeat right top;
    background-color: u;
    padding-right: 24px;
}
.side-opinion-icon{
	padding-right: 14px;
	background: url(images/opinion.png?v=2016030101) no-repeat right center;
}
.news-icon{
	background: url(images/new.png?v=2016030101) no-repeat right top;
    padding-right: 24px;
}
</style> 
       <dl style="" class="side-menu-tree"> 
        <dt>
          账户管理 
        </dt> 
        <dd> 
         <a href="{{url('/userinfo')}}" data-url="personMyInfoMenuFlag" name="Myyigou_index_none_daohang50011" id="50011" style="color:#f70"><span>&middot;</span>个人信息</a> 
        </dd> 
        <dd> 
         <a href="https://aq.suning.com/asc/index.do" target="_blank" data-url="" name="Myyigou_index_none_daohang50012" id="50012"><span>&middot;</span>安全设置</a> 
        </dd> 
        <dd> 
         <a href="https://my.suning.com/cardBind.do" data-url="BindSNCardMenuFlag" name="Myyigou_index_none_daohang50013" id="50013"><span>&middot;</span>门店会员卡</a> 
        </dd> 
        <dd> 
         <a href="https://ssl.suning.com/emall/SNB2CMergeInterconnectInfoCmd?storeId=10052&amp;catalogId=10051" data-url="" name="Myyigou_index_none_daohang50014" id="50014"><span>&middot;</span>关联互联号</a> 
        </dd> 
        <dd> 
         <a href="https://pay.suning.com/epp-epw/useraccount/compatible-login!login.action" target="_blank" data-url="" name="Myyigou_index_none_daohang50015" id="50015"><span>&middot;</span>我的易付宝</a> 
        </dd> 
        <dd> 
         <a href="member_index.html/address.do" data-url="myAddressMenuFlag" name="Myyigou_index_none_daohang50016" id="50016"><span>&middot;</span>地址管理</a> 
        </dd> 
        <dd> 
         <a href="member_index.html/student.do" data-url="TheCampusUsersMenuFlag" name="Myyigou_index_none_daohang50017" id="50017"><span>&middot;</span>校园用户</a> 
        </dd> 
        <dd> 
         <a href="member_index.html/eppBind.do" data-url="eppBindMenuFlag" name="Myyigou_index_none_daohang50018" id="50018"><span>&middot;</span>易付宝绑定设置</a> 
        </dd> 
        <dd> 
         <a href="member_index.html/accountBind.do" data-url="wechatBindMenuFlag" name="Myyigou_index_none_daohang50019" id="50019"><span>&middot;</span>绑定管理</a> 
        </dd> 
        <dd> 
         <a href="member_index.html/personalVat.do" data-url="personalvatFlag" name="Myyigou_index_none_daohang500110" id="500110"><span>&middot;</span>个人增票</a> 
        </dd> 
       </dl> 
       <a class="switch-side-menu icon-up-side" ison="on"><i></i></a> 
      </article> 
     </div> 
    </div> 
    <!-- 我的易购左侧组件 ]] --> 
    <script>
//获得纵向菜单
/*$(function() {
   		getCommonVerticalMenu();
		window.onresize=resizeBannerImage;//当窗口改变宽度时执行此函数
});*/
function getCommonVerticalMenu(){
	var mySuningSideMenuUrl,menuTypeFlag;
	var  _msiDomain = ms_common.getEnv('msiDomain');//获取我的易购域名
	var _sncfDomain = ms_common.getEnv('sncfDomain');//任性付域名
	var _rxfDomain = ms_common.getEnv('rxfDomain');//任性付激活域名
	var _passportDomain = ms_common.getEnv('passportDomain');//passport域名
	if(!_msiDomain){
		_msiDomain = sn.msiDomain;//如果取不到默认去全局变量SN的
	}
	var  _msiT = new Date().getTime();
	try{
		if(ms_common.getCookie('custno')){
			_msiT = ms_common.getCookie('custno') ^ 'mySuningSideMenu';
		}
	}catch(e){
	}
	//获取菜单类型是否为账户管理下菜单
	if("undefined" != typeof(mySuningSideMenuType) && "short" == mySuningSideMenuType){
		mySuningSideMenuUrl = "//"+ _msiDomain+'/ajax/getCommonVerticalMenu.do?menuType=short&_t='+_msiT;
		menuTypeFlag = 1;//1为账户管理
	}else{
		mySuningSideMenuUrl = "//"+ _msiDomain+'/ajax/getCommonVerticalMenu.do?_t='+_msiT;
		menuTypeFlag = 0;//0为交易管理
	}
	$.ajax({
	    	url : mySuningSideMenuUrl,
	        type : 'GET',
	        dataType : 'jsonp',
			timeout : 15000,
			cache : true,
			jsonpCallback : "getCommonVerticalMenuCallBack",
	        success : function(data){
	        	$(".side-menu-tree").replaceWith(data.htmlDom);
	        	if(1==menuTypeFlag){
					$(".side-menu-tree dt").html("账户管理");
				}
	       		ms_common.treeOrder();
				if("undefined" != typeof(mySuningSideBarSign)){
					if("" != mySuningSideBarSign){
						$('.side-menu-tree').find("a").each(function(){
						var data_flag = $(this).attr('data-url');
							if(data_flag==mySuningSideBarSign){
								$(this).attr("style","color:#f70");
							}
						})	
					}
				}
				var _wWidth = $(window).width();
				if(_wWidth>880){
					//$(".switch-side-menu").click();
					$(".side-menu-tree").show();
				}
			},
	        error : function (){
				$(".side-menu-tree").html("<div style='text-align:center; line-height:40px;'><span></span><a href='javascript:getCommonVerticalMenu();'>刷新</a></div>");
	        }
	});
};



/*function resizeBannerImage(){
    var _wWidth = $(window).width();
	var _menuIsOn = $('.switch-side-menu').attr("ison");
	if(_wWidth>880){
		if('off'==_menuIsOn){
	   		$(".switch-side-menu").click();
		}
	}
	if(_wWidth<880){
		if ('on' == _menuIsOn) {
			$(".switch-side-menu").click();
		}
	}
}*/
</script> 
    <div class="cont-main"> 
     <div class="main-wrap mt15"> 
      <!-- head [[ --> 
      <h3> <span>其他说明：您的会员编号为：6150131542，您可以凭此编号到苏宁任一门店消费。</span> <strong>个人信息</strong> </h3> 
      <div class="user-profile clearfix"> 
       <div class="user-profile-wrap"> 
        <div class="profile-avatar">
        <form action="" method="post" enctype="multipart/form-data" id="art_form">
        	{{csrf_field()}}
         	<img src="{{session('uface')}}" height="150" width="150" style="cursor: pointer;" onclick="pullPic()" id="img1" title="点击修改头像" />

         	<input type="file" name="uface" id="file_upload" onchange="uploads()" style="display: none" />

         	<script type="text/javascript">
         		function pullPic(){
				　　document.getElementById('file_upload').click();
				}
				function uploads()
				{
					var imgPath = $("#file_upload").val();
			        if (imgPath == "") {
			            alert("请选择上传图片！");
			            return;
			        }
			        //判断上传文件的后缀名
			        var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
			        if (strExtension != 'jpg' && strExtension != 'gif'
			            && strExtension != 'png' && strExtension != 'bmp') {
			            alert("请选择图片文件");
			            return;
			        }
			        var formData = new FormData($('#art_form')[0]);
			        $.ajax({
			        	_token:$('meta[name="_token"]').attr('content'),
			            type: "POST",
			            url: "/home/profile",
			            data: formData,
			            contentType: false,
			            processData: false,
			            success: function(data) {
			                $('#img1').attr('src',data.src);
			                // console.log(data);
			                if(data.status=='1'){
			                	layer.msg(data.msg,{icon:6});
			                }else{
			                	layer.msg(data.msg,{icon:5});
			                }
			                
			            },
			            error: function(XMLHttpRequest, textStatus, errorThrown) {
			            	layer.msg('上传失败，请检查网络后重试',{icon:5});
			            }
			        });
				}
         	</script> 
        </form>
        </div> 
        <a href="http://vip.suning.com/ams-web/custLevel/memberLevel.htm" target="_blank" class="vip vip-new"></a> 
       </div> 
       <div class="profile-info"> 
        <div class="control-group clearfix "> 
         <!--<label class="control-label"><em>*</em>用户名：</label>--> 
         <div class="controls lh26"> 
          <input id="userName" name="userName" maxlength="25" type="text" class="text" value="{{session('UserInfo')['uemail']}}"/> 
         </div> 
         <!-- 报错位 [[ --> 
         <div id="userNameErr" class="error-place l"> 
          <!--<i class="error"></i>
	                                    <span class="err-msg">报错位</span>--> 
         </div> 
         <!-- 报错位 ]] --> 
        </div> 
        <p class="profile-member"> <a href="https://aq.suning.com/asc/index.do" class="profile-link" target="_blank">立即查看 </a>账户安全状态 </p> 
       </div> 
      </div> 
      <input id="uuid" type="hidden" autocomplete="off" value="df19853c-1ec3-4c46-bbe6-87960fd7ab77" /> 
      <!-- head ]] --> 
      <!-- 基本信息 [[--> 
      <!-- 表单 [[ --> 
      <div class="form-list tab-switch personal-wrap-show"> 
       <!-- form表单 [[ --> 
       <form> 
        <div class="control-group clearfix"> 
         <label class="control-label">用户名:</label> 
         <div class="controls"> 
          <input name="uname" type="text" class="uname" maxlength="20" value="{{session('UserInfo')['uname']}}" /> 
         </div> 
         <!-- 报错位 [[ --> 
         <div id="nickNameErr" class="error-place"> 
         </div> 
         <!-- 报错位 ]] --> 
        </div> 
        <div class="control-group clearfix"> 
         <label class="control-label"><em>*</em>性别：</label> 
         <div id="gender" class="controls"> 
          <label class="sex-label"> 
              <input type="radio" name="sex" value="m" @if(session('UserInfo')['sex']=='m') checked @endif />
              <span>男</span> 
          </label> 
          <label class="sex-label"> 
              <input type="radio" name="sex" value="w" @if(session('UserInfo')['sex']=='w') checked @endif/> 
              <span>女</span> 
          </label> 
          <label class="sex-label">
             <input type="radio" name="sex" value="o"  @if(session('UserInfo')['sex']=='o') checked @endif/>
             <span>保密</span> </label> 
         </div> 
        </div> 
        <div class="control-group clearfix"> 
         <label class="control-label">手机：</label> 
         <div class="controls lh26"> 
          <span name="pone" class="pone">
          	 	{{session('UserInfo')['pone']}} 
          </span> 
          <a name="uppone" style="cursor: pointer;">修改</a> 
         </div> 
        </div> 
        </div>
        <div class="control-group clearfix priority-low"> 
         <label class="control-label">&nbsp;</label> 
         <div style="float:left;"> 
          <a onclick="updateInfo();return false;" class="ms-stand-btn1" name="person_index_info_data05" style="cursor: pointer;">保 存</a> 
          <!--<a href="#" class="btn-sub btn-sub-ing">保存中...</a>-->
         </div> 
         <!-- 报错位 [[ --> 
         <div id="basicInfoErr" class="error-place"></div> 
         <div class="error-place mt29"></div> 
         <!-- 报错位 ]] --> 
        </div> 
       </form>
        <script type="text/javascript">
        	var flag=true;
        	$('a[name=uppone]').click(function(){
        		var val=$('.pone').text().trim();
        		if(flag){
        			var inputs=$('<input type="text" value="'+val+'" class="newpone">');
        			$('.pone').html(inputs);
        		flag=false;
        		}else{
        			var pone=$('.newpone').val().trim();
        			var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;
        			if(myreg.test(pone)){
        				$('.pone').html(pone);
        				flag=true;
        			}else{
        				layer.msg('您输入的手机号有误！',{icon:2,time:1000});
        			}
        		}
        	})
        	function updateInfo()
        	{
        		if($('.newpone').attr('class')) return layer.msg('请关闭修改后再保存！',{icon:5,time:1000});
        		$.ajax({
			        	headers: {
				        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				        },
			            type: "POST",
			            url: "/updateinfo",
			            data: {
			            	uname:$('input[name=uname]').val(),
			            	sex:$('input[name="sex"]:checked').val(),
			            	pone:$('span[name=pone]').text().trim()
			        	},
			            success: function(data) {
			                // console.log(data);
			                if(data.status=='2'){
			                	return layer.msg(data.msg,{icon:5,time:1000});
			                }
			                layer.msg(data.msg,{icon:1,time:1000});
			            },
			            error: function() {
			                alert("修改失败，请检查网络后重试");
			            }
			        });
        	}
        </script> 
       <!-- form表单 ]] --> 
      </div> 
      <!-- 表单 ]] --> 
      <!-- 基本信息 ]]--> 
      <!-- 头像修改 [[ --> 
      <!-- 基本信息 [[ --> 
      <!--#include virtual="basic_information.html"--> 
      <!-- 基本信息 ]] --> 
      <div class="avatar-container"> 

      <!-- 头像修改 ]] --> 
     </div> 
    </div> 
   </div> 
  </div> 
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
  <script type="text/javascript" src="https://passport.suning.com/ids/js/passport.js?v=2016030101"></script> 
  <script type="text/javascript" src="http://res.suning.cn/project/msIndex/js/ms_common.min.js?v=2016030101"></script> 
  <script type="text/javascript" src="http://res.suning.cn/project/msIndex/js/person/personal_member.min.js?v=2016030101"></script> 
  <script type="text/javascript" src="http://res.suning.cn/project/msIndex/js/person/ECode.calendar.min.js?v=2016030101"></script> 
  <script type="text/javascript" src="http://res.suning.cn/project/msIndex/js/person/SFE.dialog.dev.min.js?v=2016030101"></script> 
  <script type="text/javascript" src="http://image.suning.cn/public/component/citySelect/1.0.0/New.CitySelect.min.js?v=2016030101"></script> 
  <script type="text/javascript" src="http://res.suning.cn/project/msIndex/js/person/jquery.form.min.js?v=2016030101"></script> 
  <script type="text/javascript" src="http://res.suning.cn/project/msIndex/js/person/imgUtils.min.js?v=2016030101"></script> 
  <script type="text/javascript" src="http://res.suning.cn/project/msIndex/js/person/headPic.min.js?v=2016030101"></script> 
  <script>
        function eCodeCalendar(_boxID,_showID,n){
            ECode.calendar({
                inputBox:_boxID,
                showbox:_showID,
                isSelect:true,
                isWeek:false,
                selectRange:{
                    min:1899,
                    max:2099
                },
                range:{
                    mindate:"1900-01-01",
                    maxdate:"2099-12-31"
                },
                callback:function(){
                    var _this = $(_showID);
                    _this.removeClass("date-color");
                    if(n == 1){
                        constellation(_this);
                    }
                    //提示准确完善您的生日有惊喜哦~
                    $("#birthdateErr").html("<i class='tips'></i><span>准确完善您的生日有惊喜哦~</span>");
                }

            });
        }
        	eCodeCalendar("#date01","#birthdate",1);
        //eCodeCalendar("#date02","#show02",0);
        //eCodeCalendar("#date03","#show03",0);
        //eCodeCalendar("#date04","#show04",0);
        
        // 图片验证码输错三次才刷新
		var gImgVerCdeErrorCount = 0;
        
        // 重新获取验证码
		function fun_getVcode() {
			var timenow = new Date().getTime();
			var url="getUuidStr.do";
			$.ajax({
				type : "post",
				url : url,
				contentType : "application/x-www-form-urlencoded;charset=UTF-8",
				dataType : 'json',
				async : false,
				success : function(data) {
					var uuid=data.uuid;
					document.getElementById("imgSrc").src ="http://vcs.suning.com/vcs/imageCode.htm?uuid="+ uuid;
				    $("#vscUuid").val(uuid);
				}
			});
			
		}
    </script>  
 </body>
</html>