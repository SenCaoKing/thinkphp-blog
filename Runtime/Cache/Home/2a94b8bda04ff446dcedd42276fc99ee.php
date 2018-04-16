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
            <div class="logo"><a href="<?php echo U('Home/Index/index');?>">Sen个人博客</a></div>
            <ul class="category">
                <li class="cname action">
                    <a href="<?php echo U('Home/Index/index');?>">首页</a>
                </li>
                <?php if(is_array($categorys)): foreach($categorys as $key=>$v): ?><li class="cname <?php if($_GET['cid']== $v['cid']): ?>action<?php endif; ?>">
                        <a href="<?php echo U('Home/Index/category',array('cid'=>$v['cid']));?>"><?php echo ($v['cname']); ?></a>
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

                    <?php if(is_array($articles)): foreach($articles as $key=>$v): ?><div class="detail">
                            <h3 class="title"><?php echo ($v['title']); ?></h3>
                            <ul class="metadata">
                                <li class="date">发布时间：<?php echo (date('Y-m-d H:i:s',$v['addtime'])); ?></li>
                                <li class="category">分类：<a href=""><?php echo ($v['category']['cname']); ?></a></li>
                                <?php if(!empty($v['tag'])): ?><li class="tags">标签：
                                        <?php if(is_array($v['tag'])): foreach($v['tag'] as $key=>$n): ?><a href="<?php echo U('Home/Index/tag',array('tid'=>$n['tid']));?>"><?php echo ($n['tname']); ?></a><?php endforeach; endif; ?>
                                    </li><?php endif; ?>
                            </ul>
                            <div class="article">
                                <div class="pic">
                                    <img src="<?php echo ($v['pic_path']); ?>" alt="" />
                                </div>
                                <div class="word">
                                    <p class="description">
                                        <?php echo ($v['description']); ?>
                                    </p>
                                    <div class="readall">
                                        <a href="readall-a" href="">阅读全文</a>
                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                </div>
            </div>
            <!-- 左侧列表结束 -->

            <!-- 右侧内容开始 -->
            <div class="right">
                <div class="tags">
                    <h4 class="title">热门标签</h4>
                    <ul class="tags-ul">
                        <?php if(is_array($tags)): foreach($tags as $k=>$v): ?><li class="tname">
                                <a class="tstyle-<?php echo ($k); ?>" href="<?php echo U('Home/Index/tag',array('tid'=>$v['tid']));?>"><?php echo ($v['tname']); ?></a>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
            <!-- 右侧内容结束 -->
        </div>
    </div>
    <!-- 主题部分结束 -->
</body>
</html>