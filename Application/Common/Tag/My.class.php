<?php

namespace Common\Tag;
use Think\Template\TagLib;

class My extends TagLib {
    // 定义标签
    protected $tags=array(
        'jquery'    => array('attr'=>'','close'=>0),
        'bjycss'    => array('attr'=>'','close'=>0),
        'bootstrap' => array('attr'=>'','close'=>0),
        'ueditor'   => array('attr'=>'name,content','close'=>0),
    );

    // 引入jquery
    public function _jquery($tag,$content) {
        return '<script type="text/javascript" src="__PUBLIC__/static/js/jquery-2.0.0.min.js"></script>';
    }
    // 引入bootstrap的css组件
    public function _bjycss($tag,$content) {
        return '<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/css/bjy.css" />';
    }
    /**
     * 引入jquery、 bootstrap、foot-awesome、icheck
     * @param  string $tag name:表单name content：编辑器初始化后 默认内容
     */
    // 引入jquery、 bootstrap css组件、bootstrap js组件
    public function _bootstrap($tag) {
        $icheck=isset($tag['icheck']) ? $tag['icheck'] : 'blue';
        $link=<<<php
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script type="text/javascript" src="__PUBLIC__/static/js/jquery-2.0.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/bootstrap-3.3.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/bootstrap-3.3.2/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/font-awesome-4.3.0/css/font-awesome.min.css" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__PUBLIC__/static/bootstrap-3.3.2/js/html5shiv.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/bootstrap-3.3.2/js/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/css/bjy.css" />
<script type="text/javascript" src="__PUBLIC__/static/bootstrap-3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/iCheck-1.0.2/icheck.min.js"></script>
<link rel="stylesheet" href="__PUBLIC__/static/iCheck-1.0.2/skins/all.css" />
<script>
$(document).ready(function(){
    $('.icheck').iCheck({
        checkboxClass: "icheckbox_square-$icheck",
        radioClass: "iradio_square-$icheck",
        increaseArea: 20%
    });
});
</script>
php;
        return $link;
    }

    /**
     * 引入ueditor编辑器
     * @param string $tag name:表单name content:编辑器初始化后 默认内容
     */
    public function _ueditor($tag){
        $name=$tag['name'];
        $content=$tag['content'];
        $link=<<<php
<script id="container" name="$name" type="text/plain">
    $content
</script>
<script type="text/javascript" src="__PUBLIC__/static/ueditor1_4_3/ueditor.config.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/ueditor1_4_3/ueditor.all.js"></script>
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>
php;
        return $link;
    }





}


?>