<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>分类列表</title>
<bootstrap />
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