<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1400px, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../Public/Image/logo.png">

    <title>修改密码</title>
    <!-- Bootstrap core CSS -->
    <link href="../../Public/Css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../Public/Css/HomeCss/index.css" rel="stylesheet">
    <!-- Custom javascript for this template -->
    <script src="../../Public/Js/jquery.js"></script>
    <script src="../../Public/Js/bootstrap.js"></script>
    <script src="../../Public/Js/HomeJs/changepass.js"></script>
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
<div class="container">
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
            30%
        </div>
    </div>
    <form class="top15 captcha " id="form1" style="margin: auto 30%;">
        <label for="inputUser" class="sr-only" >用户名</label>
        <input name="username"id="inputUser" style="margin: 10px 0px;height:50px;" class="form-control" placeholder="用户名" required autofocus>
        <input name="verify" id="Verify" style="width:50%;height:50px;margin:10px 0px;margin-right: 10px;border: 1px solid #ccc;
        border-radius: 4px;padding: 6px 12px;"   placeholder="验证码" type="text">
        <img width="40%" class="left15"  alt="验证码" src="<?php echo U('Home/Index/verify',array());?>" title="点击刷新">

        <button id="changepass1" class="btn btn-lg btn-primary btn-block" type="button">下一步</button>

    </form>
    <form class="top15 captcha " style="margin: auto 30%;" id="form2">
        <label for="inputPassword1" class="sr-only">密码</label>
        <input name="password1" style="height: 50px;margin: 10px 0px;" type="password" id="inputPassword1" class="form-control" placeholder="密码" required>
        <label for="inputPassword2" class="sr-only">密码</label>
        <input name="password2" style="height: 50px;margin: 10px 0px;" type="password" id="inputPassword2" class="form-control" placeholder="重复密码" required>
        <button id="changepass2" class="btn btn-lg btn-primary btn-block" type="button">下一步</button>
    </form>
    <form class="top15 captcha " style="margin: auto 30%;" id="form3">
        <div class="page-header">
            <h1>修改密码成功！</h1>
        </div>
        <button id="changepass3" class="btn btn-lg btn-primary btn-block" type="button">完成</button>

    </form>
</div>
</body>
</html>