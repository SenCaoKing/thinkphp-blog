<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>分类列表</title>
<script type="text/javascript" src="/Public/static/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/static/bootstrap-3.3.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/bootstrap-3.3.2/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/font-awesome-4.3.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/bjy.css" />
<script type="text/javascript" src="/Public/static/bootstrap-3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
    <table class="table table-bordered table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th width="10%">cid</th>
                <th width="10%">排序</th>
                <th width="20%">分类名</th>
                <th width="25%">关键词</th>
                <th width="25%">描述</th>
                <th width="10%">操作</th>
            </tr>
        </thead>
        <tr>
            <td></td>
            <td>
                <input class="form-control" type="text" value="" />
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="<?php echo U('Admin/Category/edit');?>">修改</a>
                <a href="javascript:if(confirm('确定要删除吗？')) location='<?php echo U('Admin/Category/delete');?>'">删除</a>
            </td>
        </tr>
    </table>    
</body>
</html>