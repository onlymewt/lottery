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
		资金提现
	</span>
</div>
<!--设置密码种类-->
<div class="changeSelect">
	<div class="changeTypeSelect changeTypeSelect_selected">购车积分提现</div>
	<div class="changeTypeSelect">出局积分提现</div>
	<div class="changeTypeSelect">分享积分提现</div>
</div>
<form action="<?php echo U(MODULE_NAME.'/Financemanagement/addwithdrawals');?>"class="selectedDiv selected_1" method="post" id="myform">
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">真实户名:</div>
		<input type="text" value="<?php echo ($bankInfo["realname"]); ?>"  readonly="readonly" name="realname"  class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">收款方式:</div>
		<input type="text" value="<?php echo ($bankInfo["bank_name"]); ?>"  readonly="readonly" name="bank_name"  class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">开户地址:</div>
		<input type="text" value="<?php echo ($bankInfo["bank_address"]); ?>" readonly="readonly" name="bank_address"   class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">银行卡号:</div>
		<input type="text" value="<?php echo ($bankInfo["bank_card"]); ?>"  readonly="readonly" name="bank_card"  class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">提现金额:</div>
		<input type="number" placeholder="请输入提现金额" name="money"  class="rightMessage" />

	</div>

	<!--确认按钮-->
	<div class="etermineButton" onClick="test()">
		确认
	</div>
	
	<span style="color:white;text-align:center;display:block;font-size:3.5rem;margin-top:5%;">购车积分提现手续费:<?php echo ($fund_fee); ?>%</span>
</form>
<form action="<?php echo U(MODULE_NAME.'/Financemanagement/addwithdrawalsB');?>"class="selectedDiv selected_2" style="display: none;" method="post" id="myformB">
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">真实户名:</div>
		<input type="text" value="<?php echo ($bankInfo["realname"]); ?>"  readonly="readonly" name="realname"  class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">收款方式:</div>
		<input type="text" value="<?php echo ($bankInfo["bank_name"]); ?>"  readonly="readonly" name="bank_name"  class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">开户地址:</div>
		<input type="text" value="<?php echo ($bankInfo["bank_address"]); ?>" readonly="readonly" name="bank_address"   class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">银行卡号:</div>
		<input type="text" value="<?php echo ($bankInfo["bank_card"]); ?>"  readonly="readonly" name="bank_card"  class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">提现金额:</div>
		<input type="number" placeholder="请输入提现金额" name="money"  class="rightMessage" />

	</div>

	<!--确认按钮-->
	<div class="etermineButton" onClick="testB()">
		确认
	</div>
	
	<span style="color:white;text-align:center;display:block;font-size:3.5rem;margin-top:5%;">出局积分提现手续费:<?php echo ($bonus_fee); ?>%</span>
</form>
<form action="<?php echo U(MODULE_NAME.'/Financemanagement/addwithdrawalsC');?>"class="selectedDiv selected_3" style="display: none;" method="post" id="myformC">
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">真实户名:</div>
		<input type="text" value="<?php echo ($bankInfo["realname"]); ?>"  readonly="readonly" name="realname"  class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">收款方式:</div>
		<input type="text" value="<?php echo ($bankInfo["bank_name"]); ?>"  readonly="readonly" name="bank_name"  class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">开户地址:</div>
		<input type="text" value="<?php echo ($bankInfo["bank_address"]); ?>" readonly="readonly" name="bank_address"   class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">银行卡号:</div>
		<input type="text" value="<?php echo ($bankInfo["bank_card"]); ?>"  readonly="readonly" name="bank_card"  class="rightMessage" />

	</div>
	<!---->
	<div class="messageDidsplayDiv">
		<div class="leftMessage">提现金额:</div>
		<input type="number" placeholder="请输入提现金额" name="money"  class="rightMessage" />

	</div>

	<!--确认按钮-->
	<div class="etermineButton" onClick="testC()">
		确认
	</div>
	
	<span style="color:white;text-align:center;display:block;font-size:3.5rem;margin-top:5%;">分享积分提现手续费:<?php echo ($cash_fee); ?>%</span>
</form>

</body>

<script>
    function test()
    {
        document.getElementById("myform").submit();
    }
    function testB()
    {
        document.getElementById("myformB").submit();
    }
    function testC()
    {
        document.getElementById("myformC").submit();
    }

</script>
</html>