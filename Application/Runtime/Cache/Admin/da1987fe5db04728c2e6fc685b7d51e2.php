<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>添加标签</title>
<bootstrap />
</head>
<body>
    <table class="table table-bordered table-hover">
        <form action="" method="post">
            <tr>
                <th>标签名</th>
                <td><textarea class="form-control modal-sm bjy-noresize" name="tnames" rows="5" placeholder="可以批量添加标签，每行一个。"></textarea></td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input class="btn btn-default" type="submit" value="添加" />
                </td>
            </tr>
        </form>
    </table>   
</body>
</html>