(function(C,u){var M,l=C["_AYWM"];if(l&&"version" in l){M=l["gpa"]}else{M=(function(){var P=(+new Date).toString(36),Q=Math.random().toString(36).substring(2,7);return P+Q})();l=C["_AYWM"]={"version":"1.01","gpa":M,"collector":{}}}var E=C[u]?C[u]:(C[u]=[]);var w=Array["prototype"],k=Object["prototype"],q=Function["prototype"],h=k.toString,o=k.hasOwnProperty,x={};var N={nativeKeys:Object.keys};N.slice=w.slice;N.isArray=Array.isArray||function(P){return h.call(P)=="[object Array]"};N.has=function(Q,P){return o.call(Q,P)};N.isObject=function(P){return P===Object(P)};N.isFunction=function(P){return typeof P==="function"};var b=function(P){return N.isFunction(P)?P:function(Q){return Q[P]}};N.each=function(U,R,Q){if(U==null){return}if(w.forEach&&U.forEach===w.forEach){U.forEach(R,Q)}else{if(U.length===+U.length){for(var P=0,T=U.length;P<T;P++){if(R.call(Q,U[P],P,U)===x){return}}}else{var S=N.keys(U);for(var P=0,T=S.length;P<T;P++){if(R.call(Q,U[S[P]],S[P],U)===x){return}}}}};N.keys=N.nativeKeys||function(R){if(R!==Object(R)){throw new TypeError("Invalid object")}var Q=[];for(var P in R){if(N.has(R,P)){Q.push(P)}}return Q};N.sortedIndex=function(W,V,S,R){S=S==null?N.identity:b(S);var U=S.call(R,V);var P=0,T=W.length;while(P<T){var Q=(P+T)>>>1;S.call(R,W[Q])<U?P=Q+1:T=Q}return P};N.indexOf=function(T,R,S){if(T==null){return -1}var P=0,Q=T.length;if(S){if(typeof S=="number"){P=(S<0?Math.max(0,Q+S):S)}else{P=N.sortedIndex(T,R);return T[P]===R?P:-1}}if(w.indexOf&&T.indexOf===w.indexOf){return T.indexOf(R,S)}for(;P<Q;P++){if(T[P]===R){return P}}return -1};N.extend=function(P){N.each(N.slice.call(arguments,1),function(Q){if(Q){for(var R in Q){P[R]=Q[R]}}});return P};N.clone=function(P){if(!N.isObject(P)){return P}return N.isArray(P)?P.slice():N.extend({},P)};N.keys=Object.keys||function(R){if(R!==Object(R)){throw new TypeError("Invalid object")}var Q=[];for(var P in R){if(N.has(R,P)){Q.push(P)}}return Q};N.values=function(T){var S=N.keys(T);var R=S.length;var P=new Array(R);for(var Q=0;Q<R;Q++){P[Q]=T[S[Q]]}return P};N.encodeParams=function(P){return encodeURIComponent(P)};N.trim=function(P){return P.replace(/(^\s*)|(\s*$)/g,"")};var D={getItem:function(P){if(!P){return null}return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*"+encodeURIComponent(P).replace(/[\-\.\+\*]/g,"\\$&")+"\\s*\\=\\s*([^;]*).*$)|^.*$"),"$1"))||null},setItem:function(S,V,R,Q,P,T){if(!S||/^(?:expires|max\-age|path|domain|secure)$/i.test(S)){return false}var U="";if(R){switch(R.constructor){case Number:U=R===Infinity?"; expires=Fri, 31 Dec 9999 23:59:59 GMT":"; max-age="+R;break;case String:U="; expires="+R;break;case Date:U="; expires="+R.toUTCString();break}}document.cookie=encodeURIComponent(S)+"="+encodeURIComponent(V)+U+(P?"; domain="+P:"")+(Q?"; path="+Q:"")+(T?"; secure":"");return true},removeItem:function(R,Q,P){if(!this.hasItem(R)){return false}document.cookie=encodeURIComponent(R)+"=; expires=Thu, 01 Jan 1970 00:00:00 GMT"+(P?"; domain="+P:"")+(Q?"; path="+Q:"");return true},hasItem:function(P){if(!P){return false}return(new RegExp("(?:^|;\\s*)"+encodeURIComponent(P).replace(/[\-\.\+\*]/g,"\\$&")+"\\s*\\=")).test(document.cookie)},keys:function(){var P=document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g,"").split(/\s*(?:\=[^;]*)?;\s*/);for(var R=P.length,Q=0;Q<R;Q++){P[Q]=decodeURIComponent(P[Q])}return P},set:function(Q,S,P,U,R,T){var V=encodeURIComponent(Q)+"="+encodeURIComponent(S);if(P instanceof Date){V+="; expires="+P.toGMTString()}if(U){V+="; path="+U}if(R){V+="; domain="+R}if(T){V+="; secure"}document.cookie=V}};var d=(function(){if(/(iphone|ios|android|mini|mobile|mobi|Nokia|Symbian|iPod|iPad|Windows\s+Phone|MQQBrowser|wp7|wp8|UCBrowser7|UCWEB|360\s+Aphone\s+Browser)/i.test(navigator.userAgent)){return true}return false})();var a=location.protocol==="https:"?true:false;var y=30*60*1000,t;t=new Date();t.setTime(t.getTime()+365*24*60*60*1000);var g={domain:"",cookiepath:""};var f={"db":false,"sitecode":false,"gid":false,"gname":false,"gcate":false,"gprice":false,"gnum":false,"gimgurl":false,"gorgprice":false,"gdisprice":false,"gdisrate":false,"gcatename":false,"gbrand":false,"ogid":true,"ogname":true,"ogprice":true,"ogcate":true,"ognum":true,"ogurl":true,"ogimgurl":true,"ogorgprice":true,"ogdisprice":true,"ogdisrate":true,"ogcatename":true,"ogbrand":true,"ofristflag":false,"orderid":false,"ordermoney":false,"orderstatus":false,"paytype":false,"promotion":false,"cgid":true,"cgname":true,"cgcate":true,"cgprice":true,"cgnum":true,"cgurl":true,"cgimgurl":true,"cgorgprice":true,"ogdisprice":true,"ogdisrate":true,"ogcatename":true,"ogbrand":true,"carttype":false,"userid":false,"userflag":false,"keywords":false,"convtype":false,"convaction":false,"convid":false,"convvalue":false,"tag":false,"tkey":true,"tvalue":true,"evtcate":false,"evtaction":false,"evtlable":false,"evtvalue":false,"audage":false,"audgender":false,"audeducation":false,"domain":false,"cookiepath":false,"externalsrc":false,"searchengine":false,"sekeyword":false};
var G={"db":true,"sitecode":true,"userid":true,"userflag":true};var v={"sitecode":"ao","evtcate":"ec","evtaction":"ea","evtlable":"el","evtvalue":"ev","externalsrc":"oc","sekeyword":"kw","searchengine":"se"};var p=function(){this.db="";this.sitecode="";this.gid="";this.gname="";this.gcate="";this.gprice="";this.gnum="";this.og=[];this.ofristflag="";this.orderid="";this.ordermoney="";this.orderstatus="";this.paytype="";this.promotion="";this.cg=[];this.userid="";this.userflag="";this.keywords="";this.convtype="";this.convaction="";this.convid="";this.convvalue="";this.tag="";this.kv=[];this.evtcate="";this.evtaction="";this.evtlable="";this.evtvalue="";this.audage="";this.audgender="";this.audeducation="";this.carttype="";this.other={};this.gimgurl="";this.gorgprice="";this.gdisprice="";this.gdisrate="";this.gcatename="";this.gbrand="";this.externalsrc="";this.searchengine="";this.sekeyword=""};var H={og:{ogcate:"",ogname:"",ogid:"",ognum:"",ogprice:"",ogurl:"",ogimgurl:"",ogorgprice:"",ogdisprice:"",ogdisrate:"",ogcatename:"",ogbrand:""},cg:{cgcate:"",cgname:"",cgid:"",cgnum:"",cgprice:"",cgurl:"",cgimgurl:"",cgorgprice:"",cgdisprice:"",cgdisrate:"",cgcatename:"",cgbrand:""},kv:{tkey:"",tvalue:""},isArray:function(P){if(H.og.hasOwnProperty(P)){return"og"}if(H.cg.hasOwnProperty(P)){return"cg"}if(H.kv.hasOwnProperty(P)){return"kv"}return false},setArrItem:function(P){return N.clone(H[P])}};var z=["gcate","gname","gid","gnum","gprice"];var e=["audage","audgender","audeducation"];var s=["convtype","convaction","convid","convvalue"];var L=["userid","userflag","orderid","ordermoney","og","ofristflag","product","person","cg","keywords","promotion","oval","orderstatus","paytype"];var c=["gimgurl","gorgprice","gbrand","gcatename","gdisprice","gdisrate"];var n=["ogurl","ogimgurl","ogorgprice","ogdisprice","ogdisrate","ogcatename","ogbrand"];var i=["cgurl","cgimgurl","cgorgprice","cgdisprice","cgdisrate","cgcatename","cgbrand"];var O=true;var F=function(P){return function(Q){if(Q[P]==undefined){return""}return N.encodeParams(Q[P])}};var B=function(P){var Q=P;return function(X){var U=[],V=X[P]||[],T=[],S=Q==="og"?n:i;N.each(V,function(ad,ac){if(N.isObject(ad)){var ab,ae,Z,Y={};if(Q==="og"){ab=ad.ogid==undefined?"":N.encodeParams(ad.ogid);ae=ad.ogname==undefined?"":N.encodeParams(ad.ogname)}else{ab=ad.cgid==undefined?"":N.encodeParams(ad.cgid);ae=ad.cgname==undefined?"":N.encodeParams(ad.cgname)}var aa=[];N.each(ad,function(ag,af){if(N.indexOf(S,af)<0){var ah=ag==undefined||(af=="ogname"||af=="cgname")?"":N.encodeParams(ag);aa.push(ah);if(af==="ogprice"||af==="cgprice"){Y[af]=N.encodeParams(ag)}}else{Y[af]=N.encodeParams(ag)}});U.push(N.encodeParams(aa.join("^")));if(ab!==""||ae!==""){Y["id"]=ab;Y["value"]=ae;T.push(Y)}}});var R=X["carttype"]==undefined?"":N.encodeParams(X["carttype"]);var W="";if(Q=="cg"){W=(R!==""||U.join("|")!=="")?R+"@":""}return{val:N.encodeParams(W+U.join("|")),ds:T}}};var m={userid:F("userid"),userflag:F("userflag"),orderid:F("orderid"),ordermoney:F("ordermoney"),ofristflag:F("ofristflag"),person:function(R){var P=[],Q=1;N.each(e,function(T,S){var U=R[T]==undefined?"":N.encodeParams(R[T]);if(U!==""){Q=0}P.push(U)});return Q?"":N.encodeParams(P.join("|"))},keywords:F("keywords"),promotion:F("promotion"),oval:F("oval"),orderstatus:F("orderstatus"),paytype:F("paytype"),product:function(R){var P=[],Q=1;N.each(z,function(T,S){var U=R[T]==undefined||T==="gname"?"":N.encodeParams(R[T]);if(U!==""){Q=0}P.push(U)});return{val:Q?"":N.encodeParams(P.join("^"))}},cg:B("cg"),og:B("og")};var r=l["collector"][u]||(l["collector"][u]=new p()),j=(function(){if(a){return"https://idigger.qtmojo.com/main/adftrack"}return"http://idigger.qtmojo.com/main/adftrack"})();var K={setCkWmv:function(){var Y="",U=document.domain,P=g.domain;if("www."==U.substring(0,4)){U=U.substring(4,U.length)}if(""==g.domain){Y=U}else{P="www."==P.substring(0,4)?P.substring(3,P.length):P;U=P.substring(0,1)=="."?"."+U:U;var S=P.length;var R=U.length;if(R-S>=0){if(U.indexOf(P)==R-S){Y=P}}}g.domain=Y.toLowerCase();var X="",V=g.cookiepath,T=document.location.pathname;if(V==""||V=="/"){X=V}else{if(V.indexOf("/")==0){var W=V.lastIndexOf("/");if(W!=V.length-1){V+="/"}if(T.indexOf(V)==0){X=V}}}g.cookiepath=X;if(!D.getItem("__wmv")){var Z=Math.floor(+(new Date())/1000);D.setItem("__wmv",Z+".1",t,X,Y);return}else{if(!D.getItem("__wms")){var Q=D.getItem("__wmv").split(".");if(Q.length>=2){Q[1]=parseInt(Q[1],10)+1;D.setItem("__wmv",Q.join("."),t,X,Y)}return}}D.setItem("__wmv",D.getItem("__wmv"),t,X,Y)},pushHandler:function(P){var Q=P||E;N.each(Q,function(S,R){K.setWmColledtor(S)})},setWmColledtor:function(S){if(!N.isArray(S)){return}if(S[0]==="_trackPoint"){K.trackPoint();return}var R=H.isArray(S[0]);if(R){var U=H.setArrItem(R);for(var Q=0;Q<S.length;Q=Q+2){var T=S[Q];(U[T]==="")&&(U[T]=(S[Q+1]||""))}r[R].push(U)}else{var P=false;for(var Q=0;Q<S.length;Q=Q+2){if(!r.hasOwnProperty(S[Q])||S[Q]==="other"){if(g.hasOwnProperty(S[Q])){g[S[Q]]=N.trim((S[Q+1]||""));
P=true}else{r.other[S[Q]]=(S[Q+1]||"")}}else{r[S[Q]]=(S[Q+1]||"")}}if(P){K.setCkWmv()}}},clearWmColledtor:function(){N.each(r,function(Q,P){if(N.isFunction(Q)||G.hasOwnProperty(P)){return}if(N.isArray(Q)){r[P]=[];return}r[P]=""});r["other"]={}},IFCCookieMapping:function(){var Q=document.createElement("iframe");Q.src="http://wmcdn.qtmojo.cn/adxcm_base_idigger.htm";Q.style.width="0px";Q.style.height="0px";Q.style.marginheight="0px";Q.style.marginwidth="0px";Q.style.position="absolute";Q.style.top="-100px";Q.style.left="-100px";Q.style.FRAMEBORDER="0";Q.style.SCROLLING="0";Q.style.display="none";var P=document.getElementsByTagName("script")[0];P.parentNode.insertBefore(Q,P)},getParams:function(){var P=[],Q=[];N.each(L,function(T,R){var S=m[T](r);if(N.isObject(S)){(S.val!==undefined)&&P.push(S.val);S.ds&&(Q=Q.concat(S.ds))}else{P.push(S)}});return{ecms:N.encodeParams(P.join("`")),ds:Q}},getAcvParams:function(){var P=[];N.each(s,function(R,Q){P.push(N.encodeParams(R+"|"+(F(R))(r)))});return P.join(";")},getTkvParams:function(){var P=[];N.each(r.kv,function(R,Q){P.push((F("tkey"))(R)+"|"+(F("tvalue"))(R))});return P.join(";")},getOtherParams:function(){var Q=[],R="",P=[].concat(L,s,z,e,["carttype"],c);N.each(r,function(V,T){if(N.isArray(V)||N.isFunction(V)||N.indexOf(P,T)>-1){return}if(T==="other"){var S=[];N.each(V,function(X,W){S.push(N.encodeParams(N.encodeParams(W)+"|"+N.encodeParams((X==undefined?"":X))))});R="&ctd="+S.join(";");return}var U=v[T]||T;Q.push(U+"="+N.encodeParams((V==undefined?"":V)))});return{ctd:R,val:Q.join("&")}},getWmvParams:function(){var R="",Q="",S="1";if(D.getItem("__wmv")){var P=D.getItem("__wmv").split(".");if(P.length>=2){R=P[0];Q=P[1]}S=0}else{S="1"}if(Q=="1"){S="1"}return"&cct="+R+"&sc="+Q+"&nv="+S},getHostParams:function(){var P=document.location;return"&hn="+N.encodeParams(P.hostname)+"&pu="+N.encodeParams(P.pathname+P.search)+"&rf="+N.encodeParams(document.referrer)},getEcompParams:function(){var P="";P+="&epi="+(F("gid"))(r);P+="&epn="+(F("gname"))(r);P+="&epu="+N.encodeParams(document.location.pathname+document.location.search);P+="&hn="+N.encodeParams(document.location.hostname);P+="&imu="+(F("gimgurl"))(r);P+="&pri="+(F("gprice"))(r);P+="&opri="+(F("gorgprice"))(r);P+="&dpri="+(F("gdisprice"))(r);P+="&drat="+(F("gdisrate"))(r);P+="&brd="+(F("gbrand"))(r);P+="&cid="+(F("gcate"))(r);P+="&cnm="+(F("gcatename"))(r);P+="&prom="+(F("promotion"))(r);return P},send:function(Q){var P=new Image();P.onload=P.onerror=function(){};P.src=j+Q+"&gpa="+M+"&r="+(new Date().getTime())},trackPoint:function(){if(!(d)&&!a){K.IFCCookieMapping()}var U=K.getParams();var P=U.ds||[];var V=U.ecms||"";var Z=K.getAcvParams();var Y=K.getTkvParams();var aa=K.getWmvParams();var S=K.getOtherParams();var R=S.val;var X=S.ctd;K.send("?lt=i&"+R+X+"&acv="+Z+"&ecm="+V+"&tkv="+Y+aa+K.getHostParams());var Q=r["sitecode"]==undefined?"":N.encodeParams(r["sitecode"]);var W=r["db"]==undefined?"":N.encodeParams(r["db"]);var T="?lt=p&db="+W;T+="&ao="+Q;if(O){N.each(P,function(af,ad){if(!N.isObject(af)){return}var ae=T,ac=N.encodeParams(af.id||""),ab=N.encodeParams((af.ogurl||"")||(af.cgurl||""));if(ac==""||ab==""){return}ae+="&epi="+ac;ae+="&epn="+N.encodeParams(af.value||"");ae+="&epu="+ab;ae+="&hn="+N.encodeParams(document.location.hostname);ae+="&imu="+N.encodeParams((af.ogimgurl||"")||(af.cgimgurl||""));ae+="&pri="+N.encodeParams((af.ogprice||"")||(af.cgprice||""));ae+="&opri="+N.encodeParams((af.ogorgprice||"")||(af.cgorgprice||""));ae+="&dpri="+N.encodeParams((af.ogdisprice||"")||(af.cgdisprice||""));ae+="&drat="+N.encodeParams((af.ogdisrate||"")||(af.cgdisrate||""));ae+="&brd="+N.encodeParams((af.ogbrand||"")||(af.cgbrand||""));ae+="&cid="+N.encodeParams((af.ogcate||"")||(af.cgcate||""));ae+="&cnm="+N.encodeParams((af.ogcatename||"")||(af.cgcatename||""));ae+=X;K.send(ae)})}if((F("gid"))(r)!=""){T+=K.getEcompParams()+X;K.send(T)}K.clearWmColledtor()}};K.pushHandler();K.setCkWmv();if(!D.getItem("__wms")){var I=new Date();I.setTime(I.getTime()+y);D.setItem("__wms",Math.floor(+I/1000),I)}var A=E.push;var J=function(Q){var P=N.slice.call(arguments,0);A.call(this,P);K&&K.pushHandler(P)};E.push=J})(window,"_wmmq");