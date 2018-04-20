<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"G:\php study\WWW\thinkphp\thinkphp\public/../application/home\view\user\register.html";i:1511337112;s:78:"G:\php study\WWW\thinkphp\thinkphp\public/../application/home\view\layout.html";i:1511337452;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>新闻网站</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/admin_login.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div id="header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/home/user/login">后台管理系统</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/home/user/register">注册</a></li>
                    <li><a href="/home/user/login">登陆</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</div>
<div id="content" class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        
<div class="admin_login_wrap">
    <h1>用户注册</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="/home/user/doregister" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" value="" id="user" size="30" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="pwd" value="" id="pwd" size="30" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">确认密码：</label>
                        <input type="password" name="rpwd" value="" id="rpwd" size="30" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">Email：</label>
                        <input type="text" name="email" value="" id="email" size="30" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <p class="admin_copyright"><a tabindex="5" href="#">返回首页</a> &copy; 2014 Powered by <a href="http://jscss.me" target="_blank">有主机上线</a></p>
</div>

    </div>
    <div class="col-md-2"></div>
</div>
<div id="footer">
    <hr /> &copy; 河北师范大学软件学院
</div>
</body>

</html>