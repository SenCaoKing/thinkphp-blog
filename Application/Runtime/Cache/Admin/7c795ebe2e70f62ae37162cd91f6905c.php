<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>标签列表</title>
<bootstrap />
</head>
<body>
    <table class="table table-bordered table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th width="10%">tid</th>
                <th width="20%">标签名</th>
                <th width="10%">操作</th>
            </tr>
        </thead>
        <tr>
            <td></td>
            <td></td>
            <td>
                <a href="">修改</a>
                <a href="javascript:if(confirm('确定要删除吗？')) location=''">删除</a>
            </td>
        </tr>
    </table>    
</body>
</html>