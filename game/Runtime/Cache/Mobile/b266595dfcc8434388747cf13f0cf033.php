<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
	<link rel="stylesheet" href="/mc/Public/css/stylesheet.css">
	<link rel="stylesheet" href="/mc/Public/css/stylesheet_PC.css" media="screen and (min-width:1000px)">
	<script src="/mc/Public/js/jquery-3.2.1.min.js"></script>
	<script src="/mc/Public/js/comment.js"></script>
    <style></style>
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
	<div class="changeTypeSelect changeTypeSelect_selected">购车积分转账</div>
	<!--<div class="changeTypeSelect">分享积分 转账</div>-->
</div>
<!--交易1-->
<div class="selectedDiv selected_1">
	<!--交易记录 END-->
	<form action="<?php echo U(MODULE_NAME.'/Financemanagement/finance_transaction');?>" method="post" id="myform">
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">对方账号:</div>
			<input type="text" name="account"  class="rightMessage" />
	
		</div>
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">交易金额:</div>
			<input type="text" name="money"  class="rightMessage" />
	
		</div>
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">交易密码:</div>
			<input type="text" name="password"   class="rightMessage" />
	
		</div>
	
	
		<!--确认按钮-->
		<div class="etermineButton" onClick="test()">
			确认
		</div>
	</form>
</div>
<!--交21-->
<div class="selectedDiv selected_2" style="display:none;">
	<!--交易记录 END-->
	<form action="<?php echo U(MODULE_NAME.'/Financemanagement/finance_transactionT');?>" method="post" id="myformT">
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">对方账号:</div>
			<input type="text" name="account"  class="rightMessage" />
	
		</div>
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">交易金额:</div>
			<input type="text" name="money"  class="rightMessage" />
	
		</div>
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">交易密码:</div>
			<input type="text" name="password"   class="rightMessage" />
	
		</div>
	
	
		<!--确认按钮-->
		<div class="etermineButton" onClick="testT()">
			确认
		</div>
	</form>
</div>


</body>

<script>
    function test()
    {
        document.getElementById("myform").submit();
    }
	
	function testT()
    {
        document.getElementById("myformT").submit();
    }

</script>
</html>