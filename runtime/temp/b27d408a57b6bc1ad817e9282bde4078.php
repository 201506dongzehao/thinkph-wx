<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"G:\php study\WWW\thinkphp\thinkphp\public/../application/admin\view\index\createmine.html";i:1511854059;s:79:"G:\php study\WWW\thinkphp\thinkphp\public/../application/admin\view\layout.html";i:1512522060;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>后台首页</title>

    <!-- Bootstrap -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/common.css" rel="stylesheet">
    <link href="/static/css/main.css" rel="stylesheet">
    <link href="/static/css/admin_login.css" rel="stylesheet">

    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <script src="/static/js/libs/bootstrap.js"></script>



</head>

<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="/admin/index/index" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/admin/index/index">首页</a></li>
                <li><a href="/home/user/index" target="_blank">网站首页</a></li>
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
                    <li><a href="/admin/news/index"><i class="icon-font">&#xe008;</i>所有消息</a></li>
                    <li><a href="#"><i class="icon-font">&#xe005;</i>未读消息</a></li>
                </ul>
            </li>
            <li>
                <a href="/admin/news/material"><i class="icon-font">&#xe018;</i>素材管理</a>
                <ul class="sub-menu">
                    <li><a href="/admin/news/newstext">图文消息</a>
                    <li><a href="/admin/news/photos">图片</a></li>
                    <li><a href="/admin/news/voice">语音</a></li>
                    <li><a href="#">视频</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="icon-font">&#xe018;</i>用户管理</a>
                <ul class="sub-menu">
                    <li><a href="/admin/user/userlist">所有用户(拉黑,移除)</a></li>
                    <li><a href="#">用户黑名单</a></li>
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
    <div class="crumb-wrap">
    <div class="crumb-list"><i class="icon-font"></i>
        <a href="index.html">首页</a>
        <span class="crumb-step">&gt;
            </span><a class="crumb-name" href="/admin/news/create">菜单</a><span class="crumb-step">&gt;
            </span><span>自定义菜单</span></div>
</div>
<div class="result-wrap">
    <div class="result-content">
        <form action="/admin/index/docreate" method="post" id="myform" name="myform" enctype="application/x-www-form-urlencoded">
            <table class="insert-tab" width="100%">
                <tbody>
                <tr>
                    <th><i class="require-red">*</i>菜单：</th>
                    <td>
                        <textarea name="menu" id="menu" cols="100" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input  value="创建菜单" type="submit">
                        <input  onclick="history.go(-1)" value="返回" type="button">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

</div>
<!--/main-->
<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        &copy; 河北师范大学软件学院
    </div>
</nav>
</body>
<script>
    $('document').ready(function(){
        $('#myModal').modal(options);
    })

</script>
</html>