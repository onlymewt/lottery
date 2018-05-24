<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/css/stylesheet.css">
	<link rel="stylesheet" href="/Public/css/stylesheet_PC.css" media="screen and (min-width:1000px)">
	<script src="/Public/js/jquery-3.2.1.min.js"></script>
	<script src="/Public/js/comment.js"></script>
    <style></style>
</head>
<body  class="bodyHeight">
<!--topTitle -->
<div class="pageTitleDiv">
	<div class="backButton">
		返回
	</div>
	<span class="pageTitleText">
		个人信息
	</span>
</div>

<!---->
<!--action <?php echo U(MODULE_NAME.'/Datamodify/updateInfo');?>-->
<form action="" method="post" id="myform">
	<div class="messageDidsplayDiv">
		<div class="leftMessage">会员帐号:</div>
		<input type="text" value="<?php echo ($userInfo["account"]); ?>"  readonly="readonly"  class="rightMessage" disabled/>
		
	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">会员姓名:</div>
		<input type="text" value="<?php echo ($userInfo["username"]); ?>"  readonly="readonly"  class="rightMessage" disabled/>
		
	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">手机号码:</div>
		<input type="text" value="<?php echo ($userInfo["phone"]); ?>" name="phone"  class="rightMessage" disabled/>
		
	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">身份证号:</div>
		<input type="text" value="<?php echo ($userInfo["identity_card"]); ?>" name="identity_card" class="rightMessage" disabled/>
		
	</div>
	<!--确认按钮-->
	<div class="etermineButton" onClick="test()">
		确认
	</div>
</form>
</body>

<script>
   function test()
	{
		document.getElementById("myform").submit();    
	}

</script>
</html>