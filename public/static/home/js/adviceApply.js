var submitFlag=false;var advice=window.advice||{};advice.linkDropSelect=function(){$(".js-linkDrop").each(function(){var that=$(this);that.find(".duration dt").click(function(){$(this).next("dd").show()});that.find(".duration dd a").click(function(){that.find("dt span").text($(this).text()).siblings(".js-val").val($(this).attr("rel"));var v=$(this).attr("rel").split(",");var a="";var temp=[];for(var i=0;i<v.length;i++){var v2=v[i].split("|");temp[i]=v2}for(var j=0;j<temp.length;j++){x=temp[j];if(x[1]!=undefined){a+="<a rel="+x[1]+" href='javascript:;' >"+x[0]+"</a>"}}that.next(".js-commsearch").find("dt span").text("璇烽€夋嫨");that.next(".js-commsearch").find("dt input").val("");that.next(".js-commsearch").find("dd").html(a);$(this).parent("dd").hide()});$(document).on("click",function(e){if($(e.target).closest(".duration").length==0){that.find("dd").hide();that.next(".js-commsearch").find("dd").hide()}})});$(".js-commsearch").each(function(){var that=$(this);that.on("click","dt",function(){$(this).next("dd").show()});that.on("click",".duration dd a",function(){that.find("dt span").text($(this).text()).siblings(".js-val").val($(this).attr("rel"));$(this).parent("dd").hide()})})};advice.prepareSubmit=function(){$("#submitbutton").click(function(){if(submitFlag){return}var mobilePhone=$("#mobilePhone").val();var name=$("#realname").val();var omsOrderItemId=$("#omsOrderItemId").val();var serviceId=$("#serviceId").val();var supplierCode=$("#supplierCode").val();var serviceRequire=$("#serviceRequire").val();var notes=$("#notes").val();var statusCode=$("#statusCode").val();var picId=$("#picId").val();var b2cOrderId=$("#b2cOrderId").val();var orderType=$("#orderType").val();var cmmdtyCode=$("#cmmdtyCode").val();var cmmdtyName=$("#cmmdtyName").val();var orderTime=$("#orderTime").val();var saleQty=$("#saleQty").val();document.getElementById("errormessageName").className="";document.getElementById("errormessageName").innerHTML="";document.getElementById("errormessageMobile").className="";document.getElementById("errormessageMobile").innerHTML="";document.getElementById("errormessage").className="";document.getElementById("errormessage").innerHTML="";if(!advice.checkName()){return}if(!advice.checkMobile()){return}if(!advice.checkProcessFlag()){return}if(!advice.checkNotes()){return}submitFlag=true;advice.popWin({css:{width:"410px",height:"200px"},url:appRoot+"/pc/adviceSubmit.do",title:"娓╅Θ鎻愮ず",callback:advice.intervalTime(appRoot+"/pc/displayAdviceScheduleListInfo.do"),data:{mobilePhone:mobilePhone,name:name,omsOrderItemId:omsOrderItemId,serviceId:serviceId,supplierCode:supplierCode,serviceRequire:serviceRequire,notes:notes,statusCode:statusCode,picId:picId,b2cOrderId:b2cOrderId,orderType:orderType,cmmdtyCode:cmmdtyCode,cmmdtyName:cmmdtyName,orderTime:orderTime,saleQty:saleQty}})})};advice.checkName=function(){var s=document.getElementById("realname").value;var patrn=/^[\u4e00-\u9fa5]+$/;if(s==""){document.getElementById("errormessageName").className="error";document.getElementById("errormessageName").innerHTML="濮撳悕涓嶈兘涓虹┖";return false}else{if(!patrn.exec(s)){document.getElementById("errormessageName").className="error";document.getElementById("errormessageName").innerHTML="濮撳悕搴旇涓烘眽瀛�";return false}}if(s.length<2){document.getElementById("errormessageName").className="error";document.getElementById("errormessageName").innerHTML="濮撳悕鑷冲皯涓轰袱涓瓧绗�";return false}document.getElementById("errormessageName").className="";document.getElementById("errormessageName").innerHTML="";return true};advice.checkMobile=function(){var patrn=/^[1]\d{10}$/;var checkmobile=document.getElementById("mobilePhone").value;if(checkmobile!=""){if(!patrn.test(checkmobile)){document.getElementById("errormessageMobile").className="error";document.getElementById("errormessageMobile").innerHTML="鎵嬫満鍙风爜鏍煎紡涓嶇";return false}document.getElementById("errormessageMobile").className="";document.getElementById("errormessageMobile").innerHTML="";return true}else{document.getElementById("errormessageMobile").className="error";document.getElementById("errormessageMobile").innerHTML="鎵嬫満鍙风爜涓嶈兘涓虹┖";return false}};advice.checkProcessFlag=function(){var serviceRequire=$("#serviceRequire").val();if(serviceRequire==""){document.getElementById("errormessage").className="error";document.getElementById("errormessage").innerHTML="璇烽€夋嫨鎶曡瘔绫诲瀷";return false}document.getElementById("errormessage").className="";document.getElementById("errormessage").innerHTML="";return true};advice.checkNotes=function(){var content=$("#notes").val();if(content.indexOf("濡傛灉涓婅堪鍘熷洜鏃犳硶婊¤冻鎮ㄧ殑瑕佹眰")>=0){content=""}if(content==""){document.getElementById("errormessage").className="error";document.getElementById("errormessage").innerHTML="鎻忚堪涓嶈兘涓虹┖!";return false}if(content!=""&&content.length>120){document.getElementById("errormessage").className="error";document.getElementById("errormessage").innerHTML="杈撳叆鐨勯暱搴﹀ぇ浜�120涓瓧绗�!";return false}document.getElementById("errormessage").className="";document.getElementById("errormessage").innerHTML="";return true};advice.popWin=function(obj){probeAuthStatus(function(){$.mDialog({css:obj.css?obj.css:{width:"885px",height:"512px"},http:function(element,opts){$.ajax({url:obj.url?obj.url:"neterror.html",cache:"false",data:obj.data?obj.data:{},dataType:"html",contentType:"application/x-www-form-urlencoded; charset=UTF-8",async:false,success:function(data){element.find(".content").html(data);obj.callback&&typeof(obj.callback)=="function"?obj.callback():null}})},closeFn:function(){alert(1)},title:obj.title?obj.title:"鏍囬",overlayClick:true,fadeIn:300,fadeOut:500})},function(){window.top.location.href=appRoot+"/pc/displayAdviceListInfo.do"})};advice.intervalTime=function(params){var i=3;var time=setInterval(function(){i-=1;$(".js-time-count").text(i);if(i<=0){clearInterval(time);if(params!=null){document.location.href=params}$.unmDialog()}},1000)};advice.hoverImgWrap=function(){$(".js-img-wrap .img-wrap").live("mouseover mouseout",function(event){if(event.type=="mouseover"){$(this).find(".js-active-box").stop().animate({bottom:"0px"},300)}else{if(event.type=="mouseout"){$(this).find(".js-active-box").stop().animate({bottom:"-20px"},300)}}})};advice.linkDropSelect();advice.prepareSubmit();advice.hoverImgWrap();function checknotes(){var content=$("#notes").val();if(content.indexOf("濡傛灉涓婅堪鍘熷洜鏃犳硶婊¤冻鎮ㄧ殑瑕佹眰")>=0){$("#notes").text("")}return true}function checklength(obj){var max=obj.maxlength;if(max==null||max==""||max==undefined){return}if(obj.value.length>max){obj.value=obj.value.substring(0,(max-1));return}};