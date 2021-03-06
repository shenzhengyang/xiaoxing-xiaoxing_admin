<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1400px, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="memory.sh">
    <link rel="icon" href="Public/Image/logo.png">

    <title>登录</title>

    <!-- Bootstrap core CSS -->
    <link href="../../Public/Css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../Public/Css/HomeCss/loginin.css" rel="stylesheet">
    <!-- Custom javascript for this template -->
    <script src="../../Public/Js/jquery.js"></script>
    <script src="../../Public/Js/bootstrap.js"></script>
    <script src="../../Public/Js/HomeJs/login.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../Public/Js/HomeJs/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container" id="loginIn">

        <form class="form-signin" action="">
            <h2 class="form-signin-heading" style="text-align:center;">登录</h2>
            <label for="inputUser" class="sr-only">用户名</label>
            <input id="inputUser" class="form-control" name="username" placeholder="用户名" data-toggle="popover" data-trigger="focus" data-content="用户名错误" required autofocus>
            <label for="inputPassword" class="sr-only">密码</label>
            <input type="password" id="inputPassword" class="form-control" name="password"placeholder="密码" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox"  name="rememberme" id="rememberPass"> 记住密码
                </label>
                <label id="forgotpass">
                    忘记密码?
                </label>
            </div>
            <button id="login" type="button" class="btn btn-lg btn-primary btn-block">登录</button>
            <div class="regist">
                <label style="width:100%;">
                    还没有账号?<a href="regist" style="color:#428bca;">马上注册</a>
                </label>
            </div>
        </form>

    </div> <!-- /container -->
</body>
</html>