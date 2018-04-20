<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"G:\php study\WWW\thinkphp\thinkphp\public/../application/admin\view\news\newstext.html";i:1513124876;s:79:"G:\php study\WWW\thinkphp\thinkphp\public/../application/admin\view\layout.html";i:1512888803;}*/ ?>
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
                    <li><a href="/admin/user/index">所有用户(拉黑,移除)</a></li>
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
            </span><a class="crumb-name" href="/admin/news/material">素材管理</a><span class="crumb-step">&gt;
            </span><span>图文消息</span></div>
</div>
<div class="result-wrap">
    <div class="result-content">
        <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
            <table class="insert-tab" width="100%">
                <tbody>
                <tr>
                    <th><i class="require-red">*</i>标题：</th>
                    <td>
                        <input class="common-text required" id="abstract" name="abstract" size="50" value="" type="text">
                    </td>
                </tr>
                <tr>
                    <th><i class="require-red">*</i>摘要：</th>
                    <td>
                        <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                    </td>
                </tr>
                <tr>
                    <th><i class="require-red">*</i>正文：</th>
                    <td>
                        <textarea name="content" id="content" cols="90" rows="7"></textarea>
                    </td>
                </tr>
                <tr>
                    <th width="120"><i class="require-red">*</i>封面：</th>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" data-toggle="modal" data-target=".bs-example-modal-lg">
                            选择图片
                        </button>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="result-wrap">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">选择图片</h4>
                                        </div>
                                        <br>
                                        <div class="result-content" >
                                            <form action="/admin/news/uploadi" method="post" id="imyform" name="imyform" enctype="multipart/form-data">
                                                <table  width="100%">
                                                    <tr>
                                                        <input type="file" name="image" /> <br>
                                                        <input type="submit" name="submit" value="本地上传">
                                                    </tr>
                                                    <tr>
                                                        <hr>
                                                    </tr>
                                                    <!--</tbody>-->
                                                </table>
                                                <div style="width: 900px; height: 140px;">
                                                    <?php if(is_array($image) || $image instanceof \think\Collection || $image instanceof \think\Paginator): $i = 0; $__LIST__ = $image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 4 );++$i;?>
                                                        <div style="width:25%;height:100%;float:left;margin-bottom:50px;">
                                                            <a href="javascript:void(0);" onclick="choose()">
                                                                <img data-dismiss="modal" class="thumb" src="/<?php echo $vo['image']; ?>" alt="" height="140px" width="140px" id="<?php echo $vo['media_id']; ?>" name="thumb">
                                                            </a>
                                                        </div>
                                                    <?php if($mod == '3'): endif; endforeach; endif; else: echo "" ;endif; ?>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"  data-dismiss="modal">关闭</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="mediaid" value="">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input  value="保存" type="button" onclick="save()" />
                        <input  value="保存并群发" type="button" onclick="savesent()" />
                        <input  onclick="history.go(-1)" value="返回" type="button" />
                    </td>
                </tr>
                </tbody></table>
        </form>
    </div>
</div>

<script language="JavaScript" type="text/javascript">
   function  save(){
        document.all.myform.action="/admin/news/ntsave";
        document.all.myform.submit();
   }
   function  savesent(){
        document.all.myform.action="/admin/news/ntsavesent";
        document.all.myform.submit();
   }
   function choose() {
       var value= $('.thumb').attr('id');
       document.getElementsByName("mediaid").value=value;
   }
</script>

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