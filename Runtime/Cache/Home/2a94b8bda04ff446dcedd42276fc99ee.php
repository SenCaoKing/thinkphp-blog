<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Sen-Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script type="text/javascript" src="/Public/static/js/jquery-2.0.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/static/bootstrap-3.3.4/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/bootstrap-3.3.4/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/font-awesome-4.3.0/css/font-awesome.min.css" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/static/js/html5shiv.min.js"></script>
<script type="text/javascript" src="/Public/static/js/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/static/css/bjy.css" />
<script type="text/javascript" src="/Public/static/bootstrap-3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/static/iCheck-1.0.2/icheck.min.js"></script>
<link rel="stylesheet" href="/Public/static/iCheck-1.0.2/skins/all.css" />
<script>
$(document).ready(function(){
    $('.icheck').iCheck({
        checkboxClass: "icheckbox_square-blue",
        radioClass: "iradio_square-blue",
        increaseArea: 20%
    });
});
</script>
<link rel="stylesheet" href="/Public/Home/css/index.css" />
</head>
<body>
    <!-- 顶部导航开始 -->
    <div id="nav">
        <div class="b-inside">
            <div class="logo">Sen个人博客</div>
            <ul class="category">
                <li class="cname action">首页</li>
                <?php if(is_array($category)): foreach($category as $key=>$v): ?><li class="cname">
                        <a href=""><?php echo ($v['cname']); ?></a>
                    </li><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
    <!-- 顶部导航结束 -->

    <!-- 主体部分开始 -->
    <div id="content">
        <div class="b-inside">
            <!-- 左侧列表开始 -->
            <div class="left">
                <div class="list">
                    <div class="detail">
                        <h3 class="title">解析当下流行的网站侧边栏导航</h3>
                        <ul class="metadata">
                            <li class="date">发布时间：Saturday, March 14, 2015 3:22:16 PM</li>
                            <li class="category">分类：<a href="">Web</a></li>
                            <li class="tags">标签：<a href="">Web趋势</a>,<a href="">设计技巧</a></li>
                        </ul>
                        <div class="article">
                            <div class="pic">
                                <img src="http://www.58img.com/Media/Default/web/20150314150912.jpg" alt="" />
                            </div>
                            <div class="word">
                                <p class="description">
                                电子商务网站商品详情页设计分析
                                </p>
                                <div class="readall">
                                    <a href="readall-a" href="">阅读全文</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 复制部份开始 -->
                    <div class="detail">
                        <h3 class="title">解析当下流行的网站侧边栏导航</h3>
                        <ul class="metadata">
                            <li class="date">发布时间：Saturday, March 14, 2015 3:22:16 PM</li>
                            <li class="category">分类：<a href="">Web</a></li>
                            <li class="tags">标签：<a href="">Web趋势</a>,<a href="">设计技巧</a></li>
                        </ul>
                        <div class="article">
                            <div class="pic">
                                <img src="http://www.58img.com/Media/Default/web/20150314150912.jpg" alt="" />
                            </div>
                            <div class="word">
                                <p class="description">
                                电子商务网站商品详情页设计分析
                                </p>
                                <div class="readall">
                                    <a href="readall-a" href="">阅读全文</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h3 class="title">解析当下流行的网站侧边栏导航</h3>
                        <ul class="metadata">
                            <li class="date">发布时间：Saturday, March 14, 2015 3:22:16 PM</li>
                            <li class="category">分类：<a href="">Web</a></li>
                            <li class="tags">标签：<a href="">Web趋势</a>,<a href="">设计技巧</a></li>
                        </ul>
                        <div class="article">
                            <div class="pic">
                                <img src="http://www.58img.com/Media/Default/web/20150314150912.jpg" alt="" />
                            </div>
                            <div class="word">
                                <p class="description">
                                电子商务网站商品详情页设计分析
                                </p>
                                <div class="readall">
                                    <a href="readall-a" href="">阅读全文</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 复制部分结束 -->
                </div>
            </div>
            <!-- 左侧列表结束 -->
            <!-- 右侧内容开始 -->
            <div class="right">
                <div class="tags">
                    <h4 class="title">热门标签</h4>
                    <ul class="tags-ul">
                    <?php if(is_array($tags)): foreach($tags as $key=>$v): ?><li class="tname tstyle-1"><a href=""><?php echo ($v['tname']); ?></a></li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
            <!-- 右侧内容结束 -->
        </div>
    </div>
    <!-- 主题部分结束 -->
</body>
</html>