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
		帮助文档
	</span>
</div>

		<?php if(is_array($helpdocument_list)): foreach($helpdocument_list as $key=>$value): ?><!--信息块-->
			<div class="detailsDiv">
				<div class="details_Data">
					<?php echo ($value["title"]); ?>
					<!--向下三角形-->
					<div style=" border-top: solid 30px #fff; border-left: solid 15px transparent; border-right: solid 15px transparent; display: inline-block;float: right;"></div>
				</div>
				<!--信息显示块-->
				<div class="details_MessageRow">
					<?php echo ($value["content"]); ?>
				</div>
				<!--信息显示块 END-->
			</div>
			<!--信息块 END--><?php endforeach; endif; ?>



</body>

<script>
  

</script>
</html>