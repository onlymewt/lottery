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
		资金转账
	</span>
</div>

<!---->
<div class="messageDidsplayDiv">
	<div class="leftMessage">当前余额:</div>
	<input type="text" value="100000"  readonly="readonly"  class="rightMessage" />
	
</div>
<!---->
<div class="messageDidsplayDiv">
	<div class="leftMessage">对方帐号:</div>
	<input type="text"  placeholder="请输入对方帐号"    class="rightMessage" />
	
</div>
<!---->
<div class="messageDidsplayDiv">
	<div class="leftMessage">转账金额:</div>
	<input type="text"  placeholder="请输入转账金额"    class="rightMessage" />
	
</div>

<!--确认按钮-->
<div class="etermineButton">
	确认
</div>
</body>

<script>
   

</script>
</html>