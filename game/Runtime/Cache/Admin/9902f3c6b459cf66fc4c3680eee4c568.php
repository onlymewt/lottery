<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>站内信息列表</title>
    <script type="text/javascript" src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/mc/Public/css/styleSheetT.css">
</head>
<body>

<table>
    <tr>
        <th>邮件标题</th>
        <th>接收人账号</th>
        <th>接收人姓名</th>
        <th>添加时间</th>
        <th>操作</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($emailArr)): foreach($emailArr as $key=>$value): ?><tr>
            <td><?php echo ($value["title"]); ?></td>
            <td><?php echo ($value["account"]); ?></td>
            <td><?php echo ($value["username"]); ?></td>
            <td><?php echo (date("Y-m-d H:i:s",$value["time"])); ?></td>
            <td>
                <span class="documentCall documentSelect">查看公告</span>
                <textarea  class=" documentDisplay documentReadonly" readonly="readonly"    >
                  <?php echo ($value["content"]); ?>
                </textarea>
                <input type="button" value="关闭" class="documentButtonStyle documentClose">
            </td>
            <td>
                <a class="emailDelete" href="<?php echo U(MODULE_NAME.'/NoticControl/deleteemail',array('id'=>$value['id']));?>" >删除邮件</a>
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
    function test()
    {
        document.getElementById("myform").submit();
    }
	$(".emailDelete").click(function(){
		if(confirm("是否确认删除？")){}else{
			$(this).attr("href","#");
			location.reload();
		}
	});
</script>
</html>