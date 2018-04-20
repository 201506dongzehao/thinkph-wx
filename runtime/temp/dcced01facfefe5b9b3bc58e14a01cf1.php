<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"G:\php study\WWW\thinkphp\thinkphp\public/../application/admin\view\layout.html";i:1511395995;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>新闻后台管理</title>
    <link rel="stylesheet" type="text/css" href="/static/css/common.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/main.css" />
    <script type="text/javascript" src="__PUBLIC__/js/libs/modernizr.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="/admin/index/index" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/admin/index/index">首页</a></li>
                <li><a href="/home/user/login" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="/admin/user/changepswd">修改密码</a></li>
                <li><a href="/admin/user/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-content" >
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>菜单</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/index/createmine"><i class="icon-font">&#xe008;</i>自定义菜单</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>消息管理</a>
                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-font">&#xe008;</i>所有消息</a></li>
                        <li><a href="#"><i class="icon-font">&#xe005;</i>未读消息</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>素材管理</a>
                    <ul class="sub-menu">
                        <li><a href="#">图文消息</a>
                        <li><a href="#"><i class="icon-font">&#xe037;</i>图片</a></li>
                        <li><a href="#"><i class="icon-font">&#xe037;</i>语音</a></li>
                        <li><a href="#"><i class="icon-font">&#xe037;</i>视频</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>用户管理</a>
                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-font">&#xe017;</i>所有用户</a></li>
                        <li><a href="#"><i class="icon-font">&#xe017;</i>拉黑用户</a></li>
                        <li><a href="#"><i class="icon-font">&#xe037;</i>用户黑名单</a></li>
                        <li><a href="#"><i class="icon-font">&#xe037;</i>移除用户</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>联系我们</a>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        {"errcode":40016,"errmsg":"invalid button size hint: [Evqrha0909vr19]"}
    </div>
    <!--/main-->
</div>
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        &copy; 河北师范大学软件学院
    </div>
</nav>
</body>

</html>