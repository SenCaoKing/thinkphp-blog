<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>添加分类</title>
<bootstrap />
</head>
<body>
    <table class="table table-bordered table-hover">
        <form action="<?php echo U('Admin/Category/add');?>" method="post">
            <tr>
                <th>分类名</th>
                <td><input class="form-control modal-sm" type="text" name="cname" /></td>
            </tr>
            <tr>
                <th>所属栏目</th>
                <td>
                    <select class="form-control modal-sm" name="pid">
                        <option value="0">顶级栏目</option>
                        <option value="">次级栏目</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>排序</th>
                <td><input class="form-control modal-sm" type="text" name="sort" /></td>
            </tr>
            <tr>
                <th>关键词</th>
                <td><input class="form-control modal-sm" type="text" name="keyword" /></td>
            </tr>
            <tr>
                <th>描述</th>
                <td>
                    <textarea class="form-control modal-sm bjy-noresize" name="des"></textarea>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input class="btn btn-default" type="submit" value="提交" />
                </td>
            </tr>
        </form>
    </table>   
</body>
</html>