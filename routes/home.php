<?php 
// 这里是后台的路由规则 

/**
 * 路由规范
 * 路由前缀 home
 * 直接写控制器名称
 */


Route::group(['namespace' => 'Home'],function(){

	// 前台主页
	Route::get('/', 'IndexController@index');
	Route::get('/test', 'IndexController@test');

	Route::any('twocate', 'IndexController@twocate'); //获取二级分类

	Route::get('goods', 'IndexController@goods');
	
	Route::any('register', 'RegisterController@register'); // 前台注册页面

	Route::any('reg/regcheck', 'RegisterController@regCheck'); // 检测用户是否已存在

	Route::post('reg/goemail', 'RegisterController@goemail'); // 发送邮件注册

	Route::any('reg/checkcode', 'RegisterController@checkcode'); // 注册校验验证码

	Route::any('regsuccess/{id}', 'RegisterController@regsuccess')->where('id','[a-z]\d{4}'); // 注册成功提示


	//商品文章
    Route::get('notice_content/{id}','IndexController@notice');
    Route::get('notice_cate/{id}','IndexController@notice_cate');


    //商品列表页
    Route::resource('goodslist','GoodsController');
	//首页点击品牌搜索
    Route::get('goods_brand/{id}','GoodsController@brand');

    Route::get('order/change_addr', 'OrderController@changeAddr'); // 修改地址
	Route::post('order/change_addr', 'OrderController@doChangeAddr'); // 修改地址
	Route::post('buy', 'OrderController@buy'); // 立即购买
	Route::get('ck', 'OrderController@ck'); // 跳转页面
	Route::get('order', 'OrderController@index'); // 订单主页
	Route::get('order/{sta}', 'OrderController@index'); // 订单主页
	Route::get('order/payment/{id}/{sta}', 'OrderController@payment'); // 支付

	Route::get('cart', 'CartController@index');
	Route::post('cart/add', 'CartController@add');
	Route::get('cart/add', 'CartController@doAdd');
	Route::post('cart/del', 'CartController@del');
	Route::get('cart/inc/{goodsId}', 'CartController@inc'); // 自增
	Route::get('cart/dec/{goodsId}', 'CartController@dec'); // 自减
	Route::post('cart/changecnt', 'CartController@cahngecnt'); // 自减
});


// 前台登陆模块
Route::group(['namespace' => 'Home'], function () {

	Route::any('login', 'LoginController@index'); // 前台登陆页面

	Route::any('verify', 'LoginController@verify'); // 前台登陆页面

	Route::post('checkcode', 'LoginController@checkCode'); // 验证码校验

	//退出登录
	Route::any('logout', 'LoginController@logout'); // 注销
	Route::any('forget', 'UserController@forget'); // 重置密码
	
});



// 个人中心
Route::group(['namespace' => 'Home','middleware'=>'checklogin'], function () {

		Route::any('userinfo', 'UserController@userinfo'); // 个人中心

		Route::any('home/profile', 'UserController@uploads'); // 头像上传

		Route::any('updateinfo', 'UserController@updateinfo'); // 修改用户信息

});


//重置密码
Route::group(['namespace' => 'Home'], function () {

		Route::any('forget', 'UserController@forget'); // 重置密码页面
		Route::any('existsu', 'LoginController@existsu'); // 验证用户名
		Route::any('existse', 'LoginController@existse'); // 验证邮箱

		Route::any('getcode', 'LoginController@getcode'); // 获取邮箱验证码

		Route::any('updatepass', 'LoginController@updatepass'); // 重置密码

});

