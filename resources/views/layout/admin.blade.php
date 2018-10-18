<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="_token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ asset(_ADMIN_ . '/img/favicon.png') }}" type="image/x-icon">

    <!--Basic Styles-->
    <link href="{{ asset(_ADMIN_ . '/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{ asset(_ADMIN_ . '/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset(_ADMIN_ . '/css/weather-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset(_ADMIN_ . '/css/layui.css') }}" rel="stylesheet" />

    <!--Fonts-->
    <!--     <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css"> -->

    <!--Beyond styles-->
    <link id="beyond-link" href="{{ asset(_ADMIN_ . '/css/beyond.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset(_ADMIN_ . '/css/demo.min.css') }}" rel="stylesheet" />
    <link href="{{ asset(_ADMIN_ . '/css/typicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset(_ADMIN_ . '/css/animate.min.css') }}" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />
    <script src="{{ asset(_ADMIN_ . '/js/jquery-2.0.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset( _PLUS_ .'/layer/layer.js') }}"></script>
    <script src="{{ asset(_ADMIN_ . '/js/bootstrap.min.js') }}"></script>


    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{ asset(_ADMIN_ . '/js/skins.min.js') }}"></script>
    <script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/static/ueditor/lang/zh-cn/zh-cn.js"></script>
    <style>
        .btn-addon {
            margin: 0px;
            /*padding: 0px;*/
        }
    </style>
</head>
<!-- /Head -->
<!-- Body -->
<body>
<!-- Loading Container -->
<div class="loading-container">
    <div class="loading-progress">
        <div class="rotator">
            <div class="rotator">
                <div class="rotator colored">
                    <div class="rotator">
                        <div class="rotator colored">
                            <div class="rotator colored"></div>
                            <div class="rotator"></div>
                        </div>
                        <div class="rotator colored"></div>
                    </div>
                    <div class="rotator"></div>
                </div>
                <div class="rotator"></div>
            </div>
            <div class="rotator"></div>
        </div>
        <div class="rotator"></div>
    </div>
</div>
<!--  /Loading Container -->
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="{{ asset(_ADMIN_ . '/img/logo.png') }}" alt="" />
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->

            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">


                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="{{ asset(_ADMIN_) }}/img/avatars/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="edit" style="text-align:center">
                                    <a href="/admin/profile" class="pull-center">修改头像</a>
                                </li>
                                <li class="edit" style="text-align:center">
                                    <a href="/admin/profile" class="pull-center">修改密码</a>
                                </li>
                                
                                
                                <!--Avatar Area-->
                                
                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="profile.html" class="pull-left">▼选择后台背景色</a>
                                    
                                </li>
                                <!--Theme Selector Area-->
                                <li class="theme-area">
                                    <ul class="colorpicker" id="skin-changer" style="margin-left: 8px">
                                        <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="{{ asset(_ADMIN_ . '/css/skins/blue.min.css') }}"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="{{ asset(_ADMIN_ . '/css/skins/azure.min.css') }}"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="{{ asset(_ADMIN_ . '/css/skins/teal.min.css') }}"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="{{ asset(_ADMIN_ . '/css/skins/green.min.css') }}"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="{{ asset(_ADMIN_ . '/css/skins/orange.min.css') }}"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="{{ asset(_ADMIN_ . '/css/skins/pink.min.css') }}"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="{{ asset(_ADMIN_ . '/css/skins/darkred.min.css') }}"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="{{ asset(_ADMIN_ . '/css/skins/purple.min.css') }}"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="{{ asset(_ADMIN_ . '/css/skins/darkblue.min.css') }}"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="{{ asset(_ADMIN_ . '/css/skins/gray.min.css') }}"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="{{ asset(_ADMIN_ . '/css/skins/black.min.css') }}"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="{{ asset(_ADMIN_ . '/css/skins/deepblue.min.css') }}"></a></li>
                                    </ul>
                                </li>
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="login.html">
                                        退出登录
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                        no space must be between these elements-->
                        <!-- Settings -->
                    </ul><div class="setting">
                        <a id="btn-setting" title="Setting" href="#">
                            <i class="icon glyphicon glyphicon-cog"></i>
                        </a>
                    </div><div class="setting-container">

                        <label>
                            <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                            <span class="text">在线</span>
                        </label>

                    </div>
                    <!-- Settings -->
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /Navbar -->
<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">
                <input type="text" class="searchinput" />
                <i class="searchicon fa fa-search"></i>
                <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">

                <li>
                    <a href="{{ url('admin/index') }}">
                        <i class="menu-icon glyphicon glyphicon-home"></i>
                        <span class="menu-text"> 后台首页 </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text"> 管理员 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{ url('admin/admin/create') }}">
                                <span class="menu-text">添加用户</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/admin') }}">
                                <span class="menu-text">浏览用户</span>
                            </a>
                        </li>

                    </ul>
                </li>

                 <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-user-md"></i>
                        <span class="menu-text"> 用户管理 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="/admin/user">
                                <span class="menu-text">用户管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/user/show">
                                <span class="menu-text">用户详情</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-shopping-cart"></i>
                        <span class="menu-text">商品管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{url('/admin/goods')}}">
                                <span class="menu-text">商品列表</span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/admin/goods/create')}}">
                                <span class="menu-text">添加商品</span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>


                        <li>
                            <a href="{{url('/admin/hs')}}">
                                <span class="menu-text">商品回收站</span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-tasks"></i>
                        <span class="menu-text"> 类别管理 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{ url('admin/goods_cate/create') }}">
                                <span class="menu-text">添加类别</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/goods_cate') }}">
                                <span class="menu-text">浏览类别</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-desktop"></i>
                        <span class="menu-text"> 商品类型 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{url('/admin/goods_type/create')}}">
                                <span class="menu-text">添加类型</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/admin/goods_type')}}">
                                <span class="menu-text">浏览类型</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon typcn typcn-printer"></i>
                        <span class="menu-text"> 属性管理 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{ url('admin/goods_attr/create') }}">
                                <span class="menu-text">添加属性</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/goods_attr') }}">
                                <span class="menu-text">浏览属性</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon typcn typcn-book"></i>
                        <span class="menu-text"> 品牌管理 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{ url('admin/goods_brand/create') }}">
                                <span class="menu-text">添加品牌</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/goods_brand') }}">
                                <span class="menu-text">浏览品牌</span>
                            </a>
                        </li>

                    </ul>
                </li>



                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-calendar-o"></i>
                        <span class="menu-text"> 商城公告 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{ url('admin/notice/create') }}">
                                <span class="menu-text">添加文章</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/notice') }}">
                                <span class="menu-text">浏览文章</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-file-text"></i>
                        <span class="menu-text"> 公告栏目 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{ url('admin/notice_cate/create') }}">
                                <span class="menu-text">添加栏目</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/notice_cate') }}">
                                <span class="menu-text">栏目列表</span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-location-arrow"></i>
                        <span class="menu-text"> 导航管理 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{url('admin/nav/create')}}">
                                <span class="menu-text">添加导航</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('admin/nav')}}">
                                <span class="menu-text">浏览导航</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon glyphicon glyphicon-picture"></i>
                        <span class="menu-text"> 轮播图管理 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{url('admin/ad/create')}}">
                                <span class="menu-text">添加轮播图</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('admin/ad')}}">
                                <span class="menu-text">浏览轮播图</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa  fa-gear"></i>
                        <span class="menu-text">系统设置</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ url('admin/conf/info') }}">
                                <span class="menu-text">配置项</span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/conf') }}">
                                <span class="menu-text">配置管理</span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-text">支付方式设置</span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-link"></i>
                        <span class="menu-text"> 友情链接 </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{ url('admin/links/create') }}">
                                <span class="menu-text">添加外链</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/links') }}">
                                <span class="menu-text">浏览外链</span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
            <!-- /Sidebar Menu -->
        </div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="{{ url('admin/index') }}">后台</a>
                    </li>
                    <li class="active">
                        <a href="@yield('url', '#')">@yield('title')</a>
                    </li>
                    <li>@yield('title2', '#')</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                @section('content')
                @show
            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Container -->
    <!-- Main Container -->

</div>

<!--Basic Scripts-->


<!--Beyond Scripts-->
<script src="{{ asset(_ADMIN_ . '/js/beyond.min.js') }}"></script>


<!--Page Related Scripts-->
<!--Sparkline Charts Needed Scripts-->
<script src="{{ asset(_ADMIN_ . '/js/charts/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset(_ADMIN_ . '/js/charts/sparkline/sparkline-init.js') }}"></script>

<!--Easy Pie Charts Needed Scripts-->
<script src="{{ asset(_ADMIN_ . '/js/charts/easypiechart/jquery.easypiechart.js') }}"></script>
<script src="{{ asset(_ADMIN_ . '/js/charts/easypiechart/easypiechart-init.js') }}"></script>

<!--Flot Charts Needed Scripts-->
<script src="{{ asset(_ADMIN_ . '/js/charts/flot/jquery.flot.js') }}"></script>
<script src="{{ asset(_ADMIN_ . '/js/charts/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset(_ADMIN_ . '/js/charts/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset(_ADMIN_ . '/js/charts/flot/jquery.flot.tooltip.js') }}"></script>
<script src="{{ asset(_ADMIN_ . '/js/charts/flot/jquery.flot.orderBars.js') }}"></script>

<script>
    // If you want to draw your charts with Theme colors you must run initiating charts after that current skin is loaded
    $(window).bind("load", function () {

        /*Sets Themed Colors Based on Themes*/
        themeprimary = getThemeColorFromCss('themeprimary');
        themesecondary = getThemeColorFromCss('themesecondary');
        themethirdcolor = getThemeColorFromCss('themethirdcolor');
        themefourthcolor = getThemeColorFromCss('themefourthcolor');
        themefifthcolor = getThemeColorFromCss('themefifthcolor');

        //Sets The Hidden Chart Width
        $('#dashboard-bandwidth-chart')
            .data('width', $('.box-tabbs')
                .width() - 20);

        //-------------------------Visitor Sources Pie Chart----------------------------------------//
        var data = [
            {
                data: [[1, 21]],
                color: '#fb6e52'
            },
            {
                data: [[1, 12]],
                color: '#e75b8d'
            },
            {
                data: [[1, 11]],
                color: '#a0d468'
            },
            {
                data: [[1, 10]],
                color: '#ffce55'
            },
            {
                data: [[1, 46]],
                color: '#5db2ff'
            }
        ];
        var placeholder = $("#dashboard-pie-chart-sources");
        placeholder.unbind();

        $.plot(placeholder, data, {
            series: {
                pie: {
                    innerRadius: 0.45,
                    show: true,
                    stroke: {
                        width: 4
                    }
                }
            }
        });

        //------------------------------Visit Chart------------------------------------------------//
        var data2 = [{
            color: themesecondary,
            label: "Direct Visits",
            data: [[3, 2], [4, 5], [5, 4], [6, 11], [7, 12], [8, 11], [9, 8], [10, 14], [11, 12], [12, 16], [13, 9],
                [14, 10], [15, 14], [16, 15], [17, 9]],

            lines: {
                show: true,
                fill: true,
                lineWidth: .1,
                fillColor: {
                    colors: [{
                        opacity: 0
                    }, {
                        opacity: 0.4
                    }]
                }
            },
            points: {
                show: false
            },
            shadowSize: 0
        },
            {
                color: themeprimary,
                label: "Referral Visits",
                data: [[3, 10], [4, 13], [5, 12], [6, 16], [7, 19], [8, 19], [9, 24], [10, 19], [11, 18], [12, 21], [13, 17],
                    [14, 14], [15, 12], [16, 14], [17, 15]],
                bars: {
                    order: 1,
                    show: true,
                    borderWidth: 0,
                    barWidth: 0.4,
                    lineWidth: .5,
                    fillColor: {
                        colors: [{
                            opacity: 0.4
                        }, {
                            opacity: 1
                        }]
                    }
                }
            },
            {
                color: themethirdcolor,
                label: "Search Engines",
                data: [[3, 14], [4, 11], [5, 10], [6, 9], [7, 5], [8, 8], [9, 5], [10, 6], [11, 4], [12, 7], [13, 4],
                    [14, 3], [15, 4], [16, 6], [17, 4]],
                lines: {
                    show: true,
                    fill: false,
                    fillColor: {
                        colors: [{
                            opacity: 0.3
                        }, {
                            opacity: 0
                        }]
                    }
                },
                points: {
                    show: true
                }
            }
        ];
        var options = {
            legend: {
                show: false
            },
            xaxis: {
                tickDecimals: 0,
                color: '#f3f3f3'
            },
            yaxis: {
                min: 0,
                color: '#f3f3f3',
                tickFormatter: function (val, axis) {
                    return "";
                },
            },
            grid: {
                hoverable: true,
                clickable: false,
                borderWidth: 0,
                aboveData: false,
                color: '#fbfbfb'

            },
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false,
                content: " <b>%x May</b> , <b>%s</b> : <span>%y</span>",
            }
        };
        var placeholder = $("#dashboard-chart-visits");
        var plot = $.plot(placeholder, data2, options);

        //------------------------------Real-Time Chart-------------------------------------------//
        var data = [],
            totalPoints = 300;

        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1);

            // Do a random walk

            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }

                data.push(y);
            }

            // Zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]]);
            }

            return res;
        }
        // Set up the control widget
        var updateInterval = 100;
        var plot = $.plot("#dashboard-chart-realtime", [getRandomData()], {
            yaxis: {
                color: '#f3f3f3',
                min: 0,
                max: 100,
                tickFormatter: function (val, axis) {
                    return "";
                }
            },
            xaxis: {
                color: '#f3f3f3',
                min: 0,
                max: 100,
                tickFormatter: function (val, axis) {
                    return "";
                }
            },
            colors: [themeprimary],
            series: {
                lines: {
                    lineWidth: 0,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 0.5
                        }, {
                            opacity: 0
                        }]
                    },
                    steps: false
                },
                shadowSize: 0
            },
            grid: {
                hoverable: true,
                clickable: false,
                borderWidth: 0,
                aboveData: false
            }
        });

        function update() {

            plot.setData([getRandomData()]);

            plot.draw();
            setTimeout(update, updateInterval);
        }
        update();


        //-------------------------Initiates Easy Pie Chart instances in page--------------------//
        InitiateEasyPieChart.init();

        //-------------------------Initiates Sparkline Chart instances in page------------------//
        InitiateSparklineCharts.init();
    });

</script>
<script type="text/javascript">
    function del(id, $url, $mes)
    {
        layer.confirm('您确定要删除' + $mes + '吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post("" + $url + "/" + id,
                    {'_method':'delete','_token':"{{ csrf_token() }}"},
                    function (data) {
                        if(data.status == 0){
                            layer.msg(data.msg, {icon: 6});
                            location.href = $url;
                        } else {
                            layer.msg(data.msg, {icon: 5});
                        }
                    });
        }, function(){

        });
    }
</script>
@section('js')
@show
</html>
