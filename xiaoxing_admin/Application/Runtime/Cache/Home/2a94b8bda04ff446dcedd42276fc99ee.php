<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1400px, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Public/Image/logo.png">

    <title>主页</title>

    <!-- Bootstrap core CSS -->
    <link href="Public/Css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Public/Css/HomeCss/index.css" rel="stylesheet">
	<link href="Public/Css/HomeCss/loginin.css" rel="stylesheet">
    <!-- Custom javascript for this template -->
	<script src="Public/Js/jquery.js"></script>
    <script src="Public/Js/bootstrap.js"></script>
    <script src="Public/Js/HomeJs/index.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="Public/Js/HomeJs/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('../index');?>">孝行</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo U('../index');?>">主页</a></li>
                <li><a href="#" id="dataAnalysis">数据分析架子</a></li>
                <li><a href="<?php echo U('About/about');?>">关于我们</a></li>
            </ul>
			<ul class="nav navbar-nav" style="margin-left:50%;">
                <li id="username" class="dropdown">
                    <a id="login_bt" href="<?php echo U('User/login');?>" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ($user); ?></a>
                    <ul class="dropdown-menu" aria-labelledby="login_bt">
                        <li><a href="#" id="chagePass">修改密码</a></li>
                        <li><a href="#" id="loginOut">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!--滚动屏-->
<div class="spin" >
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div style="position: relative;">
                    <div style="position: absolute; text-align: center;width:100%;">
                        <img src="Public/Image/gun2.png" alt="..." style="width: 50%;height:50%;margin-top:100px;">
                    </div>
                    <img src="Public/Image/gun_1.svg" alt="...">
                </div>
                <!--<img src="Public/Image/gun_1.svg" alt="...">-->

                <div class="carousel-caption">
                    <div class="carousel-caption">
                        <h3 style="font-size: 48px">孝行</h3>
                        <p style="font-size: 24px">让阿尔茨海默症不在孤单！</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div style="position: relative;">
                    <div style="position: absolute; text-align: center;width:100%;">
                        <img src="Public/Image/gun1.png" alt="..." style="width: 30%;height:30%;margin-top:100px;">
                    </div>
                    <img src="Public/Image/gun_1.svg" alt="...">
                </div>
                <!--<img src="Public/Image/gun_1.svg" alt="...">-->

                <div class="carousel-caption">
                    <div class="carousel-caption">
                        <h3 style="font-size: 48px">三端一体</h3>
                        <p style="font-size: 24px">孝行由APP、数据平台、智能硬件三端一体的产品</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div style="position: relative;">
                <div style="position: absolute; text-align: center;width:100%;">
                    <img src="Public/Image/gun3.png" alt="..." style="width: 50%;height:50%;margin-top:100px;">
                </div>
                    <img src="Public/Image/gun_1.svg" alt="...">
                </div>
                <!--<img src="Public/Image/gun_1.svg" alt="...">-->

                <div class="carousel-caption">
                    <div class="carousel-caption">
                        <h3 style="font-size: 48px">大数据分析</h3>
                        <p style="font-size: 24px">将数据汇聚云端，精准分析</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="block">
    <div class="jumbotron block1" style="background-color: inherit">
        <div class="container">
            <div class="row">
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <h1>精准定位，轨迹重现</h1>
                    <p style="color:#428bca; font-size: 40px;font-weight: bold;">功能：</p>
                    <p>GPS定位：家人可随时通过手机和电
                        脑查询老人的精准实时位置。</p>
                    <p>历史轨迹：老人去过哪里，停留多久，
                        一键查看，了解老人生活。</p>
                    <p style="color:#428bca; font-size: 40px;font-weight: bold;">技术：</p>
                    <p>A-GPS定位技术和移动信号基站定位技术，
                        定位误差<5米，实现精准定位。</p>
                    <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>-->
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <div class="container">
                        <img src="Public/Image/jiemian1.png" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block">
    <div class="jumbotron block1">
        <div class="container">
            <div class="row">

                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <div class="container">
                        <img src="Public/Image/jiemian2.png" alt="...">
                    </div>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                <h1>电子围栏</h1>
                <p style="color:#428bca; font-size: 40px;font-weight: bold;">功能：</p>
                <p>围栏半径：根据老人生活的实际情况个
                    性化设置电子围栏半径</p>
                <p>自动报警： 当老人足迹超出预定活动范
                    围后会自动报警提醒子女</p>
                <p style="color:#428bca; font-size: 40px;font-weight: bold;">技术：</p>
                <p>A-GPS定位技术、地理信息技术GIS和移
                    动通讯技术共同完成电子围栏设置，超距
                    报警功能。</p>
                <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>-->
            </div>
            </div>
        </div>
    </div>
</div>
<div class="block">
    <div class="jumbotron block1" style="background-color: inherit">
        <div class="container">
            <div class="row">
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <h1>SOS 一键求救</h1>
                    <p style="color:#428bca; font-size: 40px;font-weight: bold;">功能：</p>
                    <p>如果遇到紧急或特殊情况，老人出现事
                        故，身旁的好心人只要按下按钮，即可
                        向家人发出求救信息和当前位置信息，
                        同时会自动拨打家人电话。</p>
                    <p style="color:#428bca; font-size: 40px;font-weight: bold;">技术：</p>
                    <p>SOS所用设备为SIM普通电话卡，只需缴
                        纳少额费用，支持流量和通话。</p>
                    <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>-->
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <div class="container">
                        <img src="Public/Image/jiemian3.png" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block">
    <div class="jumbotron block1">
        <div class="container">
            <div class="row">

                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <div class="container">
                        <img src="Public/Image/jiemian4.png" alt="...">
                    </div>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                <h1>吃药提醒</h1>
                <p style="color:#428bca; font-size: 40px;font-weight: bold;">功能：</p>
                <p>设定每日吃药的时间，当到达预订时间时，设备会发出语音提示。</p>
                <p style="color:#428bca; font-size: 40px;font-weight: bold;">技术：</p>
                <p>利用单片机编辑程序来控制时间和闹钟，
                    语音模块使用ISD4004语音芯片作用，
                    最终使用单片机制作语音提示器。</p>
                <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>-->
            </div>
            </div>
        </div>
    </div>
</div>
<div class="block">
    <div class="jumbotron block1" style="background-color: inherit">
        <div class="container">
            <div class="row">
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <h1>社区服务</h1>
                    <p style="color:#428bca; font-size: 40px;font-weight: bold;">功能：</p>
                    <p>可购买老人生活必须品，同时根据老人健康情况，自主推荐商品</p>
                    <p style="color:#428bca; font-size: 40px;font-weight: bold;">技术：</p>
                    <p>用户可以在论坛中相互交流咨询，更好地解决老人的健康问题
                        ，同时可以对专业医师进行咨询</p>
                    <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>-->
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <div class="container">
                        <img src="Public/Image/jiemian5.png" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<footer class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span>Copyright &copy; <a href="http://www.golaravel.com/">孝行团队</a></span> |
                <span>联系方式：<a href="http://www.miibeian.gov.cn/" target="_blank">xiaoxing_TM@163.com</a></span>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="Public/Js/HomeJs/ie10-viewport-bug-workaround.js"></script>
</body>
</html>