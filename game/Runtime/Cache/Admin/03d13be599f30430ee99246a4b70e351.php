<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>代理审核界面</title>
    <script type="text/javascript" src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/mc/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV 删除  如有需要可从用户列表页面复制-->


<table>

    <tr>
        <th>编号</th>
        <th>会员姓名</th>
        <th>会员账号</th>
        <th>手机号</th>
        <!--<th>申请区域</th>-->
        <th>申请时间</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($userArr)): foreach($userArr as $key=>$value): ?><tr>
            <td><?php echo ($value["id"]); ?></td>
            <td><?php echo ($value["username"]); ?></td>
            <td><?php echo ($value["account"]); ?></td>
            <td><?php echo ($value["phone"]); ?></td>
            <!--<td><?php echo ($value["province"]); echo ($value["city"]); echo ($value["area"]); ?></td>-->
            <td><?php echo (date("Y-m-d H:i:s",$value["time"])); ?></td>
            <td>
				<?php if($value["leve"] == 1): ?><a href="<?php echo U(MODULE_NAME.'/UserAdministration/develop_agent',array('id'=>$value['id']));?>" class="lvUp">提升该会员为代理</a>
				<?php else: ?>
					审核完成<?php endif; ?>
                <!--<a href="<?php echo U(MODULE_NAME.'/UserAdministration/agentExamine_userMessage',array('id'=>$value['id']));?>" >查看该会员信息</a>-->
            </td>

        </tr><?php endforeach; endif; ?>
</table>

<!--底部页面切换选项卡-->
<div class="bottomPageSelect">
    <?php echo ($pageshow); ?>
</div>
</body>
<script type="text/javascript" src="/mc/Public/js/commentT.js"></script>
<script>
    function test() {
        document.getElementById("form_search").submit();
    }
	$(".lvUp").click(function(){
		if(confirm("是否提升该会员为代理？")){
		}else{
			$(this).attr("href","#");
			location.reload();
		}
	});
</script>
</html>