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
		交易记录
	</span>
</div>

<!--设置密码种类-->
<div class="changeSelect">
	<div class="changeTypeSelect changeTypeSelect_selected">卖出记录</div>
	<div class="changeTypeSelect">购买记录</div>
</div>

<!--交易1-->
<div class="selectedDiv selected_1">
	<?php if(is_array($transaction_list)): foreach($transaction_list as $key=>$value): ?><!--信息块-->
		<div class="detailsDiv">
			<div class="details_Data">
				<?php echo (date("Y-m-d H:i:s",$value["time"])); ?>
				<!--向下三角形-->
				<div style=" border-top: solid 30px #fff; border-left: solid 15px transparent; border-right: solid 15px transparent; display: inline-block;float: right;"></div>
			</div>
			<!--信息显示块-->
			<div class="details_MessageRow">
				<!--一条信息-->
				<span class="details_LeftMessage">
					对方账号：
				</span>
				<span class="details_RightMessage">
					<?php echo ($value["buy_account"]); ?>
				</span>
				<!--一条信息 END-->
				<!--一条信息-->
				<span class="details_LeftMessage">
					交易金额：
				</span>
				<span class="details_RightMessage">
					<?php echo ($value["money"]); ?>
				</span>
				<!--一条信息 END-->
				<!--一条信息-->
				<span class="details_LeftMessage">
					交易类型：
				</span>
				<span class="details_RightMessage">
					<?php echo ($value["reason"]); ?>
				</span>
				<!--一条信息 END-->
			</div>
			<!--信息显示块 END-->
		</div>
		<!--信息块 END--><?php endforeach; endif; ?>
	
</div>

<!--交易记录 END-->

<!--交易记录-->
<div class="selectedDiv selected_2" style="display:none;">
	<?php if(is_array($buy_list)): foreach($buy_list as $key=>$value): ?><!--信息块-->
	<div class="detailsDiv">
		<div class="details_Data">
			<?php echo (date("Y-m-d H:i:s",$value["time"])); ?>
			<!--向下三角形-->
			<div style=" border-top: solid 30px #fff; border-left: solid 15px transparent; border-right: solid 15px transparent; display: inline-block;float: right;"></div>
		</div>
		<!--信息显示块-->
		<div class="details_MessageRow">
			<!--一条信息-->
			<span class="details_LeftMessage">
				对方账号：
			</span>
			<span class="details_RightMessage">
				<?php echo ($value["sell_account"]); ?>
			</span>
			<!--一条信息 END-->
			<!--一条信息-->
			<span class="details_LeftMessage">
				交易金额：
			</span>
			<span class="details_RightMessage">
				<?php echo ($value["money"]); ?>
			</span>
			<!--一条信息 END-->
			<!--一条信息-->
				<span class="details_LeftMessage">
					交易类型：
				</span>
				<span class="details_RightMessage">
					<?php echo ($value["reason"]); ?>
				</span>
				<!--一条信息 END-->
		</div>
		<!--信息显示块 END-->
	</div>
	<!--信息块 END--><?php endforeach; endif; ?>
</div>

<!--交易记录 END-->



</body>

<script>
  

</script>
</html>