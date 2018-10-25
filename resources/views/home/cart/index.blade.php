<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
 <!--[if lt IE 7]><html class="ie ie6" lang="zh-cn"> <![endif]-->
 <!--[if IE 7]><html class="ie ie7" lang="zh-cn"> <![endif]-->
 <!--[if IE 8]><html class="ie8" lang="zh"> <![endif]-->
 <!--[if IE 9]><html class="ie9" lang="zh"> <![endif]-->
 <!--[if gt IE 9]><!-->
 <!--<![endif]-->
 <head> 
  <title>我的购物车</title> 
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
  <!-- 引入全站公用资源文件 --> 
  <!-- PRFLS RESOURCES --> 
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" /> 
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
  <!-- 引入项目资源文件 --> 
  <link rel="stylesheet" type="text/css" href="{{ asset(_HOME_ . '/css') }}/Snaddress.css?v=2016031003" /> 
  <!-- 引入项目资源文件 --> 
  <link rel="stylesheet" type="text/css" href="{{ asset(_HOME_ . '/css') }}/cart-base.css?v=2016031003" /> 
  <link rel="stylesheet" type="text/css" href="{{ asset(_HOME_ . '/css') }}/cart-1.css?v=2016031003" /> 
 </head> 
 <body> 
  <input type="hidden" id="resourceType" value="web" /> 
  <!-- 此处引入cart1页头  --> 
  @include('layout.tool_bar') 
  <div id="cart-one-header" class="cart-header"> 
   <div class="wrapper clearfix"> 
    <div class="g-logo" id="cart-g-logo"> 
     <a href="/"><img src="{{ u(CONF_IMG) . config('site.logo')}}" alt="苏宁易购" /></a> 
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
   <div id="cart-wrapper" class="wrapper cart cart-wrapper"> 
    <!--此处引入车一包装页面 --> 
    <!--此处引入购物车未登录标题及提示语 --> 
    <div class="m-cart-header"> 
     <div class="cart-table-header"> 
      <div class="inner-box c6"> 
       <div class="th th-chk form th-chk-chkd"> 
        <div class="cart-checkbox   cart-checkbox-checked"> 
         <input type="checkbox" checked="checked" name="icart1_goods_all01" class="J-AllCheckBox" id="chooseAllCheckBox" /> 
         <label for="chooseAllCheckBox"></label> 
        </div> 全部
       </div> 
       <div class="th th-item">
         商品信息 
       </div> 
       <div class="th th-specs">规格</div> 
       <div class="th th-price">
         单价（元） 
       </div> 
       <div class="th th-amount">
         数量 
       </div> 
       <div class="th th-sum">
         小计（元） 
       </div> 
       <div class="th th-op">
         操作 
       </div> 
      </div> 
     </div> 
    </div> 
    <div id="cart-body" class="m-cart-body"> 
     <div class="m-store" id="store-0070078302"> 
      <!-- 此处引入C店铺头 [[--> 
      <div class="store-title clearfix store-checked"> 
       <div class="cart-checkbox"> 
        <input type="checkbox" name="icart1_buy_shangjia" data-id="store-0070078302" checked="checked" id="J_CheckBox_0070078302" class="l checkbox chk-cstore-all" /> 
        <!-- <label for="J_CheckBox_0070078302"></label>  -->
       </div> 
       <b class="l mr10"><a target="_blank" class="c-name" href="http://shop.suning.com/70078302/index.html">沃美汇美妆专营店</a></b> 
       <a name="icart1_buy_ask" class="tm l" onclick="javascript:findpassSupplier('0070078302','','','');" href="javascript:;" title="点此可以直接和卖家交流选好的产品，或相互交流网购体验。"></a> 
       <div class="ship-desc fr"> 
        <!-- <p shopcode="0070078302" class="save-ship fl mr20">运费：<span class="sn-price"><i>&yen;</i><em>10.00</em></span></p>  -->
        <div class="hide" id="meet-cut-0070078302"> 
         <div class="meet-cut-select"> 
          <div class="ui-tooltip-close" onclick="st.tooltipNew.allHide();">
            &times; 
          </div> 
          <div class="content-title c6">
            凑一凑就可以免邮啦，不要更划算哦 
          </div> 
          <div class="content-box clearfix"> 
           <div class="add-on-container rel J-make-up01"> 
            <a href="javascript:;" class="prev"></a> 
            <a href="javascript:;" class="next"></a> 
            <div class="list-container"> 
             <div class="list-box"> 
              <ul class="list"> 
              </ul> 
              <ul class="list"> 
              </ul> 
              <ul class="list"> 
              </ul> 
             </div> 
            </div> 
            <a href="javascript:void(0);" class="checkbox-certain cart-btn">确定</a> 
           </div> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
        <?php $goods = model('Goods') ?>
      <!-- 此处引入C店铺头 ]]--> 
      <div class="cart-list"> 
      <?php $count = 0; $sum = 0; ?>
      @foreach($carts as $goodsId => $cart)
      <?php $count += $cart['cnt']; $sum += $cart['price']  ?>
       <div class="item  item-checked
   			 item-last"> 
        <div class="item-main  clearfix"> 
         <input type="hidden" itemno="062000000007889634" shopcode="0070078302" cmmdtyqty="1" cmmdtycode="000000000122639559" id="haoye" /> 
         <div class="td td-chk form"> 
          <div class="cart-checkbox"> 
           <input type="checkbox" class="checkbox chk-item" checked="checked" cmmdtyname="" shopcode="0070078302" salesprice="328.00" overseasflag="" cmmdtycode="000000000122639559" activitytype="01" id="062000000007889634" name="icart1_goods_sel" /> 
           <!-- <label for="062000000007889634"></label>  -->
          </div> 
          <span class="line-this"></span> 
          <span class="main-line main-line-11"></span> 
         </div> 
         <div class="td td-item"> 
          <div class="item-pic"> 
           <a name="icart1_goods_pic" target="_blank" class="item-img-box" href="{{ url("goodslist/$goodsId") }}"> <img alt="{{$cart['goods_name']}}" src="{{ asset(u(GOODS_IMG) . $cart['goods_img']) }}" /> </a> 
          </div> 
          <div class="item-info"> 
           <a name="icart1_goods_name" class="item-title" target="_blank" href="{{ url("goodslist/$goodsId") }}">{{ $cart['goods_name'] }}</a> 
          </div> 
          <div class="item-remark"> 
          </div> 
         </div> 
        

         <div class="td td-specs">
          @foreach($cart['attrs'] as $attr_name => $attr_value)
            <div class="specs-line"><p title="175">{{$attr_name}}：{{$attr_value}}</p></div>
          @endforeach
        </div>
      
         <div class="td td-price"> 
          <div class="price-line"> 
           <span class="price-now sn-price"> <i>&yen;</i> <em>{{$cart['shop_price']}}</em> </span> 
          </div> 
         </div> 
         <div class="td td-amount"> 
          <div class="item-amount"> 
           <a name="" class="minus " href="{{url("cart/dec/$goodsId")}}">-</a> 
           <?php $kc = $goods->select('goods_kc')->where('id', $goodsId)->first()->goods_kc; ?>
           <input type="text" id="062000000007889634-text-amount" onblur="changecnt(this)" kc="{{$kc}}" gid="{{$goodsId}}" value="{{ $cart['cnt'] }}" activitytype="01" itemno="062000000007889634" limitqtytype="1" data-min="1" data-max="99" autocomplete="off" class="ui-text text-amount" /> 
           <a name="icart1_goods_numi" class="plus" onclick="kc('{{$goodsId}}')" kc="{{$kc}}" href="javascript:void(0)">+</a> 
          </div> 
          <div id="062000000007889634-amount-msg" class="amount-msg"></div> 
         </div> 
         <div class="td td-sum"> 
          <b class="sn-price price-color"> <i>&yen;</i> <em>{{$cart['price']}}</em> </b> 
         </div> 
         <div activityid="" subactivitytype="" activitytype="01" isoverdue="0" cmmdtycode="000000000122639559" cmmdtyname="{{$cart['goods_name']}}" shopcode="0070078302" itemno="062000000007889634" id="0000000001226395590070078302" class="td td-op"> 
          <a name="icart1_goods_shanchu1" data-tip-type="delOneSp" data-placement="bottom" class="del tip-common-click-fn-btn" href="javascript:delCart('{{$goodsId}}');">删除</a> 
         </div> 
        </div> 
       </div> 
       @endforeach
       <!-- 普通商品-]]--> 
       <!-- 普通商品-]]--> 
       <!-- 循环购物车店铺list ]]--> 
      </div> 
     </div> 
     <script>
        function delCart(goodsId)
        {

            if ('<?php echo !session('UserInfo') ? 0 : 1 ?>' == '0') {
                location = '/ck?id=' + goodsId;
            }

            $.ajax({
                url: '{{url('cart/del')}}',
                type: 'POST',
                dataType: 'json',
                data: {
                    '_token': '{{csrf_token()}}',
                    'goods_id': goodsId
                },

                success:function(data)
                {
                    if (data==1) {
                        window.location.href = '/cart';
                    }
                }
            });
        }

        function kc()
        {
            var cnt = $('#062000000007889634-text-amount').val();
            var gid = $('#062000000007889634-text-amount').attr('gid');
            var kc  = $('#062000000007889634-text-amount').attr('kc');
            if (parseInt(cnt)  >= parseInt(kc)) {
                alert('商品数量大于库存,当前商品的库存为:' + kc + '件!');
                $(o).val(kc);
                return ;
            }
            
            location.href = '/cart/inc/' + gid;
        }

        function changecnt(o) 
        {
            var cnt = $(o).val();
            var gid = $(o).attr('gid');
            var kc  = $(o).attr('kc');

            if (parseInt(cnt)  > parseInt(kc)) {
                alert('商品数量大于库存,当前商品的库存为:' + kc + '件!');
                $(o).val(kc);
                return ;
            }
            $.ajax({
                url: '{{url('cart/changecnt')}}',
                type: 'POST',
                dataType: 'json',
                data: {
                    '_token': '{{csrf_token()}}',
                    'cnt' : cnt,
                    'goods_id' : gid
                },

                success:function(data)
                {
                    if (data==1) {
                        window.location.href = '/cart';

                    } else if (data == 2) {

                    } else {
                        location = '/ck';
                    }
                }
            });         
        }
        
        
     </script>
     <!-- 循环购物车自营+swl店铺list [[--> 
     <input type="hidden" value="true" id="loginSign" /> 
     <input type="hidden" value="0" id="withGifts" /> 
    </div> 
    <!-- 联合满减区域 [[--> 
    <!-- 购物车结算工具条 [[--> 
    <div class="cart-toolbar-box"> 
     <div class="cart-toolbar rel clearfix"> 
      <div class="toolbar-box"> 
       <i class="had-buy-arr"></i> 
       <!-- <div id="cart-toolbar-opt" class="l-column l form rel"> 
        <div class="cart-checkbox  cart-checkbox-checked "> 
         <input type="checkbox" checked="checked" class="J-AllCheckBox" id="chooseAllCheckBox2" name="icart1_ope_all" /> 
         <label class="mr10 clearfix" for="chooseAllCheckBox2"><i class="icon l"></i><span class="l">全选</span></label> 
        </div> 
        <a data-wrapper=".l-column" data-tip-type="delSelect" data-placement="top" class="del-selected ml20 tip-common-click-fn-btn" href="javascript:;">删除选中商品</a> 
        <a data-wrapper=".l-column" data-tip-type="delFail" data-placement="top" class="del-fail ml20 tip-common-click-fn-btn" href="javascript:;" style="display: none;">删除失效商品</a> 
       </div>  -->
       <div class="r-column r  clearfix"> 
        <div class="cart-collect fl"> 
         <div class="save-ship"> 
          <p class="cart-sub-total fl mr20">为您节省：<span class="sn-price"><i>&yen;</i><em>0.00</em></span></p> 
          <!-- <p class="cart-sub-total fl">运费（以结算页为准）：<span class="sn-price"><i>&yen;</i><em>10.00</em></span></p>  -->
         </div> 
         <div class="cart-total-price"> 
          <span>总价（含运费）：</span> 
          <b class="sn-price price-color"><i>&yen;</i><span class="sum">{{$sum}}</span></b> 
         </div> 
        </div> 
        <div class="cart-checkout l"> 
         <a name="icart1_ope_buy01" href="javascript:void(0)" class="checkout cart-btn" onclick="cart()"><b></b>去结算</a> 
         <script>
             function cart()
             {

                if ('<?php echo !session('UserInfo') ? 0 : 1 ?>' == '0') {
                    location = '/ck?id=' + goodsId;
                }

                $.ajax({
                    url: '{{ url('buy') }}',
                    type: 'POST',
                    dataType: 'json',
                    data: {'_token': '{{ csrf_token() }}', 'is_cart': 'ok'},
                    success: function(data) {
                        if (data == '1') {
                            window.location.href = '/order';
                        } else if (data == '0') {
                            alert('当前购物车为空!');
                        }
                        
                    }
                });
                
             }
         </script>
        </div> 
       </div> 
       <div class="alchose rel"> 
        <a data-wrapper=".alchose" data-node="#selected-pro" data-placement="top" class="now-select-goods" href="javascript:void(0);">已选商品 <b class="c-f70 ff-tahoma price-color">{{$count}}</b>件<span class="alchose-span alchose-up"></span></a> 
        <div class="hide" id="selected-pro"> 
         <div class="had-buy"> 
          <div class="ui-had-buy J-selected-pro"> 
           <a href="javascript:void(0);" class="prev"></a> 
           <a href="javascript:void(0);" class="next"></a> 
           <div class="list-container"> 
            <ul class="list-box"> 
             <li class="list"> <a target="_blank" "="" href="http://product.suning.com/0070078302/122639559.html"> <img alt="香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口" src="http://image5.suning.cn/content/catentries/00000000012263/000000000122639559/000000000122639559_ls.jpg" /> <span class="num">1件</span> </a> </li> 
            </ul> 
           </div> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!-- 购物车结算工具条 ]]--> 
    <input type="hidden" id="lastCmmdtyCode" value="000000000122639559" /> 
    <input type="hidden" id="secondCmmdtyCode" value="" /> 
    <input type="hidden" id="isCompany" value="" /> 
    <input type="hidden" id="isCertValidStat" value="" /> 
    <!-- 联合满减区域 ]]--> 
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