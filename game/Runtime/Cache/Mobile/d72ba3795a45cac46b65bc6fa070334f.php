<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
	<link rel="stylesheet" href="/mc/Public/css/stylesheet.css">
	<link rel="stylesheet" href="/mc/Public/css/stylesheet_PC.css" media="screen and (min-width:1000px)">
	<script src="/mc/Public/js/jquery-3.2.1.min.js"></script>
	<script src="/mc/Public/js/comment.js"></script>
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
		资金明细
	</span>
</div>
<!--设置密码种类-->
<div class="changeSelect">
	<div class="changeTypeSelect changeTypeSelect_selected">分享积分</div>
	<div class="changeTypeSelect">出局积分</div>
	<div class="changeTypeSelect">购车积分</div>
	<div class="changeTypeSelect">代理奖金</div>
</div>

<!--分享积分 -->
<div class="selectedDiv selected_1">
	<?php if(is_array($goldArr)): foreach($goldArr as $key=>$value): ?><!--信息块-->
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
					分享积分 用途：
				</span>
				<span class="details_RightMessage">
					<?php echo ($value["reason"]); ?>
				</span>
				<!--一条信息 END-->
				<!--一条信息-->
				<span class="details_LeftMessage">
					数量：
				</span>
				<span class="details_RightMessage">
					<?php echo ($value["money"]); ?>
				</span>
				<!--一条信息 END-->
			</div>
			<!--信息显示块 END-->
		</div>
		<!--信息块 END--><?php endforeach; endif; ?>
	
</div>

<!--分享积分  END-->

<!--出局奖金-->
<div class="selectedDiv selected_2" style="display:none;">
	<?php if(is_array($bonusArr)): foreach($bonusArr as $key=>$value): ?><!--信息块-->
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
				分享积分 用途：
			</span>
			<span class="details_RightMessage">
				<?php echo ($value["reason"]); ?>
			</span>
			<!--一条信息 END-->
			<!--一条信息-->
			<span class="details_LeftMessage">
				数量：
			</span>
			<span class="details_RightMessage">
				<?php echo ($value["money"]); ?>
			</span>
			<!--一条信息 END-->
		</div>
		<!--信息显示块 END-->
	</div>
	<!--信息块 END--><?php endforeach; endif; ?>
</div>

<!--报单币 END-->

<!--购车积分-->
<div class="selectedDiv selected_3" style="display:none;">
	<?php if(is_array($buyCarArr)): foreach($buyCarArr as $key=>$value): ?><!--信息块-->
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
					分享积分 用途：
				</span>
				<span class="details_RightMessage">
					<?php echo ($value["reason"]); ?>
				</span>
				<!--一条信息 END-->
				<!--一条信息-->
				<span class="details_LeftMessage">
					数量：
				</span>
				<span class="details_RightMessage">
					<?php echo ($value["money"]); ?>
				</span>
				<!--一条信息 END-->
			</div>
			<!--信息显示块 END-->
		</div>
		<!--信息块 END--><?php endforeach; endif; ?>
</div>

<!--购车积分 END-->
<!--代理奖金-->
<div class="selectedDiv selected_4" style="display:none;">
	<?php if(is_array($buyCarArr)): foreach($buyCarArr as $key=>$value): ?><!--信息块-->
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
					代理奖金：
				</span>
				<span class="details_RightMessage">
					<?php echo ($value["reason"]); ?>
				</span>
				<!--一条信息 END-->
				<!--一条信息-->
				<span class="details_LeftMessage">
					数量：
				</span>
				<span class="details_RightMessage">
					<?php echo ($value["money"]); ?>
				</span>
				<!--一条信息 END-->
			</div>
			<!--信息显示块 END-->
		</div>
		<!--信息块 END--><?php endforeach; endif; ?>
</div>

<!--购车积分 END-->

</body>

<script>
  

</script>
</html>