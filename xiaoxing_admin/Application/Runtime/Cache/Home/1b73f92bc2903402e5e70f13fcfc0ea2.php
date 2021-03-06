<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1400px, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="memory.sh">
    <link rel="icon" href="Public/Image/logo.png">

    <title>注册</title>

    <!-- Bootstrap core CSS -->
    <link href="../../Public/Css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../Public/Css/HomeCss/loginin.css" rel="stylesheet">
    <!-- Custom javascript for this template -->
    <script src="../../Public/Js/jquery.js"></script>
    <script src="../../Public/Js/bootstrap.js"></script>
    <script src="../../Public/Js/HomeJs/regist.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../Public/Js/HomeJs/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
    <div class="container" id="form1">

        <form class="form-signin">
            <h2 class="form-signin-heading" style="text-align:center;">注册</h2>
            <label for="inputUser" class="sr-only">用户名</label>
            <input type="inputUser" id="inputUser" class="form-control" placeholder="用户名"  autofocus>
            <label for="inputPassword" class="sr-only">密码</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="密码" >
            <label for="inputPassword" class="sr-only">密码</label>
            <input type="password" id="inputPassword2" class="form-control" placeholder="重复密码" >
            <button class="btn btn-lg btn-primary btn-block" id="registBt" type="button">马上注册</button>
            <div class="regist">
                <label >
                    <input type="checkbox" value="xieyi" id="xieyi"> 接受用户服务协议
                </label>
                <label style="width:45%; margin-left:10px;">
                    已有账号?<a style="color:#428bca;" href="../../index">马上登录</a>
                </label>
            </div>
        </form>

    </div> <!-- /container -->
    <form class="top15 captcha " style="margin: auto 30%;" id="form2">
        <div class="page-header">
            <h1 id="registContent">注册账号成功！</h1>
        </div>
    <button id="registSuccess" class="btn btn-lg btn-primary btn-block" type="button">完成</button>
    </form>

</body>
</html>