<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>死点区域</title>
    <script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV 删除  如有需要可从用户列表页面复制-->



<table>

    <tr>
        <th>小组编号</th>
        <th>组长账号</th>
        <th>组长姓名</th>
        <th>最后加入新成员日期</th>
        <th>查看所有成员</th>
    </tr>

    <?php if(is_array($userArr)): foreach($userArr as $key=>$value): ?><tr>
            <td><?php echo ($value["id"]); ?></td>
            <td><?php echo ($value["account"]); ?></td>
            <td><?php echo ($value["username"]); ?></td>
            <td><?php echo (date("Y-m-d H:i:s",$value["last_time"])); ?></td>
            <td>
                <a href="<?php echo U(MODULE_NAME.'/UserAdministration/deadAgent_HrefPage',array('id'=>$value['id']));?>" >
                    查看
                </a>
            </td>

        </tr><?php endforeach; endif; ?>
</table>

<!--底部页面切换选项卡-->
<div class="bottomPageSelect">
    <?php echo ($pageshow); ?>
</div>
</body>
<script type="text/javascript" src="/Public/js/commentT.js"></script>
<script>
    function test() {
        document.getElementById("form_search").submit();
    }
</script>
</html>