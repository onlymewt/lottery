<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
	<link rel="stylesheet" href="/peoplecar/Public/css/stylesheet.css">
	<link rel="stylesheet" href="/peoplecar/Public/css/stylesheet_PC.css" media="screen and (min-width:1000px)">
	<script src="/peoplecar/Public/js/jquery-3.2.1.min.js"></script>
	<script src="/peoplecar/Public/js/comment.js"></script>
    <style></style>
</head>
<body  class="bodyHeight">
<!--topTitle -->
<div class="pageTitleDiv">
	<div class="backButton">
		返回
	</div>
	<span class="pageTitleText">
		会员升级
	</span>
</div>

<!---->
<div class="messageDidsplayDiv">
	<div class="leftMessage">当前级别:</div>
	<input type="text"  value="<?php echo ($userInfo["shenfen"]); ?>" readonly="readonly" class="rightMessage" />
	
</div>
<!---->
<!--<div class="messageDidsplayDiv">-->
	<!--<div class="leftMessage">当前余额:</div>-->
	<!--<input type="text"  value="100000000" readonly="readonly" class="rightMessage" />-->
	<!---->
<!--</div>-->

<!---->
<form action="<?php echo U(MODULE_NAME.'/Servicemanagement/user_memberupgrade');?>" method="post" id="myform">
	<div class="messageDidsplayDiv">
		<div class="leftMessage">转换类型:</div>
		<input type="text" value="管理员" name="degree"  readonly="readonly"  class="rightMessage forInputSelect" />
	</div>
</form>



<!--确认按钮-->
<div class="etermineButton" onclick="test()">
	确认升级
</div>

<!--input选择列表-->
<!--<div class="inputSelectOuterDiv">-->
	<!--<div class="inputSelectDiv">-->
		<!--<div class="inputSelecList" >-->
			<!--<span class="inputSelectValue">代理商</span>-->
			<!--<div style="border-left: solid 50px #fff; border-bottom: solid 23px transparent; border-top: solid 23px transparent;display: inline-block; float: right;"></div>-->
		<!--</div>-->
		<!---->
	<!--</div>-->
<!--</div>-->

</body>

<script>
    function test()
    {
        document.getElementById("myform").submit();
    }

</script>
</html>