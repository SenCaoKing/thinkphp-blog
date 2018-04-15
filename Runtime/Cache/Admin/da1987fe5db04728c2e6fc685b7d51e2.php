<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>添加标签</title>
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