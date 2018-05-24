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
		银行信息
	</span>
</div>

<!---->
<form action="<?php echo U(MODULE_NAME.'/Datamodify/updateBankInfo');?>" method="post" id="myform">
<div class="messageDidsplayDiv">
	<div class="leftMessage">真实姓名:</div>
	<input type="text" value="<?php echo ($bankInfo["realname"]); ?>" placeholder="无"  name="realname"  class="rightMessage" />
	
</div>
<!---->
<div class="messageDidsplayDiv">
	<div class="leftMessage">收款银行:</div>
	<input type="text" value="<?php echo ($bankInfo["bank_name"]); ?>" name="bank_name" placeholder="例：中国银行"   class="rightMessage" />
	
	
</div>
<!---->
<div class="messageDidsplayDiv">
	<div class="leftMessage">银行卡号:</div>
	<input type="text" value="<?php echo ($bankInfo["bank_card"]); ?>" name="bank_card" placeholder="无"   class="rightMessage" />
	
</div>
<!---->
<div class="messageDidsplayDiv">
	<div class="leftMessage">开户地址:</div>
	<input type="text" value="<?php echo ($bankInfo["bank_address"]); ?>" name="bank_address" placeholder="无" class="rightMessage" />
	
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