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
		资金转换
	</span>
</div>
<!---->
<div class="messageDidsplayDiv">
	<div class="leftMessage">购车积分余额:</div>
	<input type="text" value="<?php echo ((isset($storeInfo["buycar_money"]) && ($storeInfo["buycar_money"] !== ""))?($storeInfo["buycar_money"]):0); ?>"  readonly="readonly"  class="rightMessage" />
	
</div>
<!---->
<form action="<?php echo U(MODULE_NAME.'/Financemanagement/finance_fundconversion');?>" method="post" id="myform">
	<div class="messageDidsplayDiv">
		<div class="leftMessage">转换金额:</div>
		<input type="number"  class="rightMessage" name="num" />

	</div>
</form>

<!---->
<!--<div class="messageDidsplayDiv">-->
	<!--<div class="leftMessage">转换类型:</div>-->
	<!--<input type="text" value="-&#45;&#45;&#45;&#45;请选择-&#45;&#45;&#45;&#45;"  readonly="readonly"  class="rightMessage forInputSelect" />-->
	<!---->
<!--</div>-->
<!--input选择列表-->
<div class="inputSelectOuterDiv">
	<div class="inputSelectDiv">
		<div class="inputSelecList" >
			<span class="inputSelectValue">分享积分 转报单币</span>
			<div class="inputSelectOuterDivRightArrow"></div>
		</div>
		<div class="inputSelecList" >
			<span class="inputSelectValue">购车积分转分享积分 </span>
			<div class="inputSelectOuterDivRightArrow"></div>
		</div>
	</div>
</div>

<!--确认按钮-->
<div class="etermineButton" onClick="test()">
	确认
</div>

<span class="tishixinxi">注:购车积分转换报单币手续费<?php echo ($declaration_fee); ?>%</span>


</body>

<script>
    function test() {
        document.getElementById("myform").submit();
    }

</script>
</html>