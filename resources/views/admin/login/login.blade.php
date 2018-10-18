<!DOCTYPE html>
<!--
Beyond Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html>
<!--Head-->
<head>
    <meta charset="utf-8" />
    <title>pgo后台登录</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{_ADMIN_}}/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="{{_ADMIN_}}/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{_ADMIN_}}/css/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts-->
    <!-- <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css"> -->

    <!--Beyond styles-->
    <link id="beyond-link" href="{{_ADMIN_}}/css/beyond.min.css" rel="stylesheet" />
    <link href="{{_ADMIN_}}/css/demo.min.css" rel="stylesheet" />
    <link href="{{_ADMIN_}}/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{_ADMIN_}}/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body>
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white">
            <!-- <div class="loginbox-title">佩奇易够后台管理</div> -->
            @if(session('error'))  
            <div class="alert alert-warning fade in">
                <button class="close" data-dismiss="alert">×</button>
                <i class="fa-fw fa fa-warning"></i>
              <strong>Warning</strong>{{session('error')}}  
             </div>
            @endif

            <div class="loginbox-social">
               <!--  <div class="social-title ">请填写账户信息</div> -->
                <div class="social-buttons">
                	<img src="{{_ADMIN_}}/img/180ico.png">
                   
                </div>
            </div>
            <div class="loginbox-or">
                <div class="or-line"></div>
                <div class="or">OR</div>
            </div>

            <form action="/admin/dologin" method="post" >
            {{csrf_field()}}
            <div class="loginbox-textbox">
                <input type="text"  name="name" class="form-control" placeholder="请填写账号" />
            </div>
            <div class="loginbox-textbox">
                <input type="password" class="form-control" name="pwd"  value="" placeholder="请填写密码" />
            </div>
            <div class="loginbox-textbox">
            	<img src="/admin/cap" onclick='this.src = this.src +="?1"' style="float:right;">
                <input type="text"  name="code" class="form-control" placeholder="请填写验证码" style="width:130px"/>

            </div>
            <div class="loginbox-forgot">
                <a href="">忘记密码？请联系管理员</a>
            </div>

            <div class="loginbox-submit">
            	
                <input type="submit" class="btn btn-primary btn-block" value="登录" >
            </div>
		</form>

        <!-- <div class="logobox">
        </div> -->
    </div>

    <!--Basic Scripts-->
    <script src="{{_ADMIN_}}/js/jquery-2.0.3.min.js"></script>
    <script src="{{_ADMIN_}}/js/bootstrap.min.js"></script>

    <!--Beyond Scripts-->
    <script src="{{_ADMIN_}}/js/beyond.js"></script>

    <!--Google Analytics::Demo Only-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-52103994-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
<!--Body Ends-->
</html>
