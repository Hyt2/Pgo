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
         <p><a  name="Myyigou_index_none_daohang10035" data-url="" href="member_index.html/address.do">地址管理</a></p> 
         <p><a name="Myyigou_index_none_daohang10036" data-url="" href="member_index.html/student.do">校园用户</a></p> 
         <p><a name="Myyigou_index_none_daohang10038" data-url="" href="member_index.html/eppBind.do">易付宝绑定设置</a></p> 
         <p><a name="Myyigou_index_none_daohang10039" data-url="" href="member_index.html/accountBind.do">绑定管理</a></p> 
         <p><a name="Myyigou_index_none_daohang100310" data-url="" href="member_index.html/personalVat.do">个人增票</a></p> 
        </div> </li> 
       <li class="ms-nav-msg"><a name="Myyigou_index_none_daohang1004" data-url="messageMenuFlag" href="http://msg.suning.com/">消息</a><i class="nav-arrow"></i></li> 
      </ul> 
      <!-- <div class="ms-search" style="padding: 8px;margin-top: -3px"> 
       <form method="get" onsubmit="return SFE.base.onSubmitSearch(this)" id="msiSearchForm"> 
        <span></span> 
        <input type="hidden" value="" id="searchKeywords" /> 
        <input type="text" value="" id="searchKeywordFixed" /> 
        <a href="javascript:ms_common.msiOnSubmitSearch('searchKeywordFixed');" id="msiSearchKeywordOnSub"></a> 
       </form> 
      </div>  -->
     </nav> 
    </div> 
   </article> 
	<article class="ms-useinfo"> 
    <div id="memberInfo" class="header-useinfo"> 
     <div class="ms-avatar"> 
      <div class="useinfo-avatar"> 
       <img src="{{ u(_CONF_IMG) . config('site.member_logo') }}"> 
       <div class="edit-avatar"></div> 
       <a href="member_index.html/person.do" name="Myyigou_index_info_PheadImg" class="text-edit-avatar">修改</a> 
      </div> 
      <a href="member_index.html/person.do" name="Myyigou_index_info_PnickName">{{ session('UserInfo.uemail') }}</a> 
     </div> 
     <!--用户名称及其他--> 
     <div class="ms-name-info"> 
      <div class="link-myinfo"> 
       <a href="/userinfo" name="Myyigou_index_info_PmyDatum">我的资料</a> 
      </div> 
      <div class="info-member"> 
       <!--会员等级对应类名：普通-铂金（member-1/4）--> 
       <!-- <span class="name-member member-1"> <i></i><a href="http://vip.suning.com/ams-web/custLevel/memberLevel.htm" name="Myyigou_index_info_PmemberGrade" target="_blank">新人会员</a></span>  -->
       <!-- <label class="grow-num">成长值：</label>  -->
       <!-- <div class="rate-member"> 
        <div class="text-rate"> 
         <span>20</span>/ 
         <span>0</span> 
        </div> 
        <div style="width:0%" class="bg-rate"></div> 
       </div>  -->
      </div> 
      <div class="info-safety"> 
       <!--安全等级文字颜色状态对应类名：低(lv-1)/中(lv-2)/高(lv-3)--> 
       <!-- <span class="safety-lv lv-3"> <a target="_blank" href="https://aq.suning.com/asc/loginsecurityinfo.do" name="Myyigou_index_info_SecurityLv">安全等级：<span>中</span></a></span>  -->
       <!--未/已绑定状态：(unbind)bind-phone/email--> 
       <!-- <a href="https://aq.suning.com/asc/mobile/check.do?" target="_blank" name="Myyigou_index_info_PbindPhone" class="bind-phone"> <i></i>修改手机</a>  -->
       <!-- <a href="https://aq.suning.com/asc/email/check.do?" target="_blank" name="Myyigou_index_info_PbindEmail" class="bind-email"> <i></i>修改邮箱</a>  -->
       <a href="{{ url('order/change_addr') }}" class="manage-addr" name="Myyigou_index_info_AddressManagement"><i></i>地址管理</a> 
      </div> 
     </div> 
    </div> 
   </article>
  </header> 

  <!-- 我的易购公用头 ]] --> 