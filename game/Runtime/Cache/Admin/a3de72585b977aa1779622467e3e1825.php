<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台信息显示页面</title>
    <script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/Public/css/styleSheetT.css">
</head>
<body>


<table>

    <tr>
        <th>会员编号</th>
        <th>会员账号</th>
        <th>手机号</th>
        <th>注册时间</th>
        <th>申请区域</th>
        <th>申请时间</th>
        <th>用户资产</th>
    </tr>
    <tr>
        <td><?php echo ($userInfo["uid"]); ?></td>
        <td><?php echo ($userInfo["account"]); ?></td>
        <td><?php echo ($userInfo["phone"]); ?></td>
        <td><?php echo (date("Y-m-d H:i:s",$userInfo["register_time"])); ?></td>
        <td><?php echo ($userInfo["province"]); echo ($userInfo["city"]); echo ($userInfo["area"]); ?></td>
        <td><?php echo (date("Y-m-d H:i:s",$userInfo["time"])); ?></td>
        <td><?php echo ($userInfo["money"]); ?></td>
    </tr>

</table>

<!--底部页面切换选项卡-->
<div class="bottomPageSelect">
    <?php echo ($pageshow); ?>
</div>
</body>
<script type="text/javascript" src="/Public/js/commentT.js"></script>
<script>
    function test()
    {
        document.getElementById("form_search").submit();
    }
</script>
</html>