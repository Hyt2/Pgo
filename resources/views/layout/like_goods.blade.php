<div class="cart-recommend wrapper"> 
    <div class="recommend-header-box"> 
     <ul class="recommend-header clearfix"> 
      <li class="recommend-name-box active"> <span class="recommend-name">猜你喜欢</span> </li> 
     
     </ul> 
     <span class="slide-line" style="width: 146px; left: 30px;"></span> 
    </div>
    <div class="recommend-body"> 
     <ul id="recommendDiv" class="recommend-box clearfix active"> 
      <?php 
        $src = u(GOODS_IMG) ;
        $goods = \DB::select('SELECT *,RAND() as r FROM `goods` ORDER BY r LIMIT 0,8');
      ?>
      @foreach($goods as $g)
      <li class="product-box">
        <a target="_blank" href="{{ url("goodslist/$g->id") }}" name="cart1_101811384_rectjsp_1-1_p_0000000000_101811384_8_8-11_0_A">
          <img class="product-img" src="{{ asset($src . $g->goods_img) }}" /></a><p><a name="cart1_101811384_rectjsp_1-1_c_0000000000_101811384_8_8-11_0_A" id="baoguang_rectjsp_1-1_0000000000_101811384_8_8-11_0_A" target="_blank" class="product-content" href="{{ url("goodslist/$g->id") }}">{{ $g->goods_name }}<b></b></a></p><p class="product-price sn-price clearfix"><i class="price-icon l">&yen;</i><em class="price-big l">{{ $g->shop_price }}</em><em class="price-small l"></em></p><em name="cart1_101811384_rectjsp_1-1_b_0000000000_101811384_8_8-11_0_A" shopcode="0000000000" cmmdtycode="000000000101811384" class="add-cart"></em>
      </li> 
      @endforeach
      
      
      
     </ul> 
     <ul id="favoriteDiv" class="recommend-box clearfix"> 
      <li class="product-box"><a target="_blank" href="http://product.suning.com/0070078302/122639559.html" name="icart1_recom_collectpic"><img class="product-img" src="http://image5.suning.cn/content/catentries/00000000012263/000000000122639559/000000000122639559_ls1.jpg" /></a><p><a name="icart1_recom_collectname" target="_blank" class="product-content" href="http://product.suning.com/0070078302/122639559.html">香奈儿 /CHANEL 粉色邂逅柔情女士持久淡香水 35ML 法国进口</a></p><p class="product-price sn-price clearfix"><i class="price-icon l">&yen;</i><em class="price-big l">328</em><em class="price-small l">.00</em></p><em name="icart1_recom_collectbuy" shopcode="0070078302" cmmdtycode="000000000122639559" class="add-cart"></em></li> 
     </ul> 
     <ul class="recommend-box clearfix"> 
     </ul> 
     <input type="hidden" id="imgUrl" value="http://image5.suning.cn/content/catentries" /> 
    </div> 
   </div> 