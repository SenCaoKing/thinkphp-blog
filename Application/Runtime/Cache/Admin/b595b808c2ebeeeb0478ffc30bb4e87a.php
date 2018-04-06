<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>后台管理</title>
<bootstrap />
<link rel="sheet" type="text/css" href="/Public/Admin/css/index.css" />
<script type="text/javascript" src="/Public/static/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/index.js"></script>
</head>
<style type="text/css">
    body {
    overflow-x: hidden;
    overflow-y: hidden;
    }
    ul {
        margin: 0;
    }
    #nav-top {
        width: 100%;
        height: 60px;
        background: #438EB9;
    }
    #nav-top .nt-logo {
        width: 190px;
        height: 60px;
        line-height: 60px;
        text-align: center;
        font-size: 30px;
        font-weight: 700;
        float: left;
        position: relative;
    }
    #nav-top .nt-logo a {
        display: block;
        width: 190px;
        height: 60px;
        position: absolute;
        left: 0;
        top: 0;
    }
    #nav-top .nt-nav {
        width: 700px;
        height: 60px;
        float: left;
    }
    #nav-top .nt-nav li {
        margin: 4px 20px;
        width: 60px;
        height: 50px;
        text-align: center;
        cursor: pointer;
        float: left;
    }
    #nav-top .nt-nav li .nt-ico {
        font-size: 25px;
    }
    #nav-top .nt-nav .ntn-active {
        background: #62A8D1;
    }
    #nav-top .nt-msg {
        width: 400px;
        height: 60px;
        float: right;
    }
    #nav-left {
        width: 160px;
        height: 600px;
        border-right: 1px solid #CCCCCC;
        float: left;
        background: #F2F2F2;
    }
    #nav-left .nl-con {
        display: none;
    }
    #nav-left .ni-con dl {
        margin: 0;
    }
    #nav-left .nl-con dl dt {
        padding-left: 15px;
        width: 190px;
        height: 40px;
        line-height: 40px;
        border-bottom: 1px solid #E5E5E5;
    }
    #nav-left .nl-con dl dt span {
        margin-right: 10px;
    }
    #nav-left .nl-con dl dd {
        padding-left: 30px;
        width: 189px;
        height: 40px;
        line-height: 40px;
        border-top: 1px solid #fff;
        border-bottom: 1px solid #E5E5E5;
        background: #fff;
        position: relative;
    }
    #nav-left .nl-con dl dd span {
        margin-right: 5px;
    }
    #nav-left .nl-con dl dd a {
        display: block;
        width: 190px;
        height: 40px;
        position: absolute;
        top: 0;
        left: 0;
    }
    #nav-left .nl-show {
        display: block;
    }
    #content {
        width: 1175px;
        height: 590px;
        float: left;
    }
</style>
<body>
    <!-- 顶部导航菜单开始 -->
    <div id="nav-top">
        <div class="nt-logo">
            <a href=""></a>
            <span>ThinkBlog</span>
        </div>
        <ul class="nt-nav list-unstyled">
            <li class="ntn-li ntn-active">
                <span class="glyphicon glyphicon-list-alt nt-ico"></span>
                <br />
                内容管理
            </li>
            <li class="ntn-li">
                <span class="glyphicon glyphicon-comment nt-ico"></span>
                <br />
                留言评论
            </li>
            <li class="ntn-li">
                <span class="glyphicon glyphicon-trash nt-ico"></span>
                <br />
                回收管理
            </li>
            <li class="ntn-li">
                <span class="glyphicon glyphicon-cog nt-ico"></span>
                <br />
                网站设置
            </li>
        </ul>
        <ul class="nt-msg list-unstyled">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- 顶部导航菜单结束 -->

    <!-- 左侧导航菜单开始 -->
    <div id="nav-left">
        <!-- 内容管理开始 -->
        <div class="nl-con nl-show">
            <dl>
                <dt>
                    <span class="fa fa-th"></span>文章管理
                </dt>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>添加文章
                </dd>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>文章列表
                </dd>
            </dl>
            <dl>
                <dt>
                    <span class="fa fa-tags"></span>标签管理
                </dt>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>添加标签
                </dd>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>标签列表
                </dd>
            </dl>
            <dl>
                <dt>
                    <span class="fa fa-columns"></span>分类管理
                </dt>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>添加分类
                </dd>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>分类列表
                </dd>
            </dl>
        </div>
        <!-- 内容管理结束 -->

        <!-- 留言评论开始 -->
        <div class="nl-con">
            <dl>
                <dt>
                    <span class="fa fa-th"></span>评论管理
                </dt>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>待审评论
                </dd>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>已审评论
                </dd>
            </dl>
            <dl>
                <dt>
                    <span class="fa fa-th"></span>留言管理
                </dt>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>待审留言
                </dd>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>已审留言
                </dd>
            </dl>
        </div>
        <!-- 留言评论结束 -->

        <!-- 回收管理开始 -->
        <div class="nl-con">
            <dl>
                <dt>
                    <span class="fa fa-th"></span>回收管理
                </dt>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>已删文章
                </dd>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>已删评论
                </dd>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>已删留言
                </dd>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>已删链接
                </dd>
            </dl>
        </div>
        <!-- 回收管理结束 -->

        <!-- 网站设置开始 -->
        <div class="nl-con">
            <dl>
                <dt>
                    <span class="fa fa-th"></span>友情链接
                </dt>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>添加链接
                </dd>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>链接列表
                </dd>
                <dd>
                    <a href="" target="right_content"></a>
                    <span class="fa fa-caret-right"></span>已删链接
                </dd>
            </dl>
        </div>
        <!-- 网站设置结束 -->
    </div>
    <!-- 左侧导航菜单结束 -->

    <!-- 右侧内容开始 -->
    <div id="content">
        <iframe src="" frameboder="0" width="100%" height="100%" name="right_content" scrolling="auto" frameborder="0" scrolling="no"></iframe>
    </div>
    <!-- 右侧内容结束 -->

<script type="text/javascript">
    $(function(){
        $("#nav-top .nt-nav li").click(function(event) {
            var i=$(this).index();
            $(this).addClass('ntn-active').siblings('li').removeClass('ntn-active');
            $('#nav-left .nl-con').eq(i).addClass('nl-show').siblings('.nl-con').removeClass('nl-show');
        });
    });
</script>
</body>
</html>