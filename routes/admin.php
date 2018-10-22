<?php 
// 这里是后台的路由规则 

/**
 * 路由规范
 * 路由前缀 admin
 * 直接写控制器名称
 */

Route::any('admin/login','Admin\LoginController@login'); // 用户登录
Route::any('admin/dologin','Admin\LoginController@dologin'); // 用户登录
Route::any('admin/cap','Admin\LoginController@captcha'); // 用户登录

Route::get('admin/index', 'Admin\IndexController@index')->middleware('adminlogin'); // 后台首页


Route::group(['middleware' => ['adminlogin','roleper'],'prefix' => 'admin', 'namespace' => 'Admin'],
function () {
	// * @url admin/links 
	// @ app\Http\Controllers\Admin\LinksController
	Route::resource('links', 'LinksController'); // 友情链接
	Route::resource('goods_attr', 'GoodsAttrController'); // 友情链接
	Route::resource('goods_brand', 'GoodsBrandController'); // 商品品牌
	Route::resource('admin', 'AdminController'); // 管理员
	Route::resource('goods_cate', 'CateController'); // 友情链接

	Route::resource('notice', 'NoticeController'); // 后台商品公告
    Route::resource('notice_cate','NoticeCateController'); //后台商品栏目
    Route::resource('nav','NavController');//导航管理
    Route::resource('goods_type','GoodsTypeController'); //商品类型管理
    Route::resource('goods','GoodsController');//商品管理
    Route::resource('hs','GoodsHsController');//商品回收站
	
	Route::any('conf/info/', 'ConfController@info'); // 配置项
	Route::resource('conf', 'ConfController'); // 系统配置

	// 前后台用户模块
	Route::resource('user', 'UserController'); // 前台用户

	//轮播图模块
	Route::resource('ad', 'AdController'); // 前台用户

	Route::any('profile', 'LoginController@profile'); // 修改头像
	Route::any('doprofile', 'LoginController@doprofile');


	//RBAC
    Route::resource('role','RoleController'); //角色路由
    Route::resource('permission','PermissionController'); //权限路由
    Route::get('user_role/{id}','UserRoleController@index'); //管理员-角色
    Route::any('do_user_role','UserRoleController@do_user_role'); //管理员-角色
    Route::get('role_per/{id}','RolePerController@index'); //管理员-权限
    Route::any('do_role_per','RolePerController@do_role_per'); //管理员-权限
});


/**
 * ajax操作路由分组
 * @prefix `ajax`
 * @namespace `Admin`
 */
Route::group(['prefix' => 'ajax/admin', 'namespace' => 'Admin'],
function() {
	Route::post('change_status', 'AdminController@ajaxChangStatus');
});


