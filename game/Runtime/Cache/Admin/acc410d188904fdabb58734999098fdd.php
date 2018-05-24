<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购车申请</title>
    <script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV 删除  如有需要可从用户列表页面复制-->



<table>

    <tr>
        <th>申请人账号</th>
        <th>申请人手机号</th>
        <th>申请人姓名</th>
        <th>申请时间</th>
        <th>申请状态</th>
    </tr>
    <?php if(is_array($userArr)): foreach($userArr as $key=>$value): ?><tr>
            <td><?php echo ($value["account"]); ?></td>
            <td><?php echo ($value["phone"]); ?></td>
            <td><?php echo ($value["username"]); ?></td>
            <td><?php echo (date("Y-m-d H:i:s",$value["time"])); ?></td>
            <td>
                <?php if($value["status"] == 0): ?><a class="panduan" href="<?php echo U(MODULE_NAME.'/UserAdministration/examine',array('id'=>$value['id']));?>"> 未审核</a>
                    <?php else: ?>
                        已审核<?php endif; ?>
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