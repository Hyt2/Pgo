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
  @include('layout.member_header') 
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
      <!-- <h3> <span>其他说明：您的会员编号为：6150131542，您可以凭此编号到苏宁任一门店消费。</span> <strong>个人信息</strong> </h3>  -->
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