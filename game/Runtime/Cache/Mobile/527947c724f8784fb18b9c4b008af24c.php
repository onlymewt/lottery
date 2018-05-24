<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
	<link rel="stylesheet" href="/Public/css/stylesheet.css">
	<link rel="stylesheet" href="/Public/css/stylesheet_PC.css" media="screen and (min-width:1000px)">
	<script src="/Public/js/jquery-3.2.1.min.js"></script>
	<script src="/Public/js/comment.js"></script>
    <style>
	
	</style>
</head>
<body  class="bodyHeight">
<!--topTitle -->
<div class="pageTitleDiv">
	<div class="backButton">
		返回
	</div>
	<span class="pageTitleText">
		系统邮件
	</span>
</div>


<!--推荐列表-->
<div class="selectedDiv selected_1">
	<?php if(is_array($private_email)): foreach($private_email as $key=>$value): ?><!--信息块-->
		<div class="detailsDiv">
			<div class="details_Data">
				来信时间：<?php echo (date("Y-m-d H:i:s",$value["time"])); ?>
				<!--向下三角形-->
				<div style=" border-top: solid 30px #fff; border-left: solid 15px transparent; border-right: solid 15px transparent; display: inline-block;float: right;"></div>
			</div>
			<!--信息显示块-->
			<div class="details_MessageRow">
				<!--信息显示区域-->
				<textarea class="details_noticeMessage" readonly="readonly"><?php echo ($value["content"]); ?></textarea>

				<!--一条信息-->
				<span class="details_LeftMessage">
					公告发布：
				</span>
				<span class="details_RightMessage">
					运维中心
				</span>
				<!--一条信息 END-->
			</div>
			<!--信息显示块 END-->
		</div>
		<!--信息块 END--><?php endforeach; endif; ?>
	
	
</div>

<!--推荐列表 END-->



</body>

<script>
  

</script>
</html>