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
		密码修改
	</span>
</div>
<!--设置密码种类-->
<div class="changeSelect">
	<div class="changeTypeSelect changeTypeSelect_selected">登陆密码</div>
	<div class="changeTypeSelect">安全密码</div>
</div>

<!--登陆密码-->
<div class="selectedDiv selected_1">
	<form action="<?php echo U(MODULE_NAME.'/Datamodify/updatepassword');?>" method="post" id="myform">
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">原登陆密码:</div>
			<input type="password" placeholder="原登陆密码" name="password"    class="rightMessage" />
		
		</div>
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">新登陆密码:</div>
			<input type="password"  placeholder="新登陆密码" name="newpassword"   class="rightMessage" />
		
		
		</div>
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">确认新密码:</div>
			<input type="password" placeholder="确认新密码" name="newpasswordT"  class="rightMessage" />
		</div>
	
		<!--确认按钮-->
		<div class="etermineButton" onClick="test()">
			确认
		</div>
	</form>
</div>

<!--登陆密码 END-->

<!--安全密码-->
<div class="selectedDiv selected_2" style="display:none;">
	<form action="<?php echo U(MODULE_NAME.'/Datamodify/updatepaypassword');?>" method="post" id="myformT">
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">原安全密码:</div>
			<input type="password" placeholder="原登陆密码" name="paypassword"    class="rightMessage" />
		
		</div>
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">新安全密码:</div>
			<input type="password"  placeholder="新登陆密码" name="newpaypassword"  class="rightMessage" />
		
		
		</div>
		<!---->
		<div class="messageDidsplayDiv">
			<div class="leftMessage">确认新密码:</div>
			<input type="password" placeholder="确认新密码" name="newpaypasswordT"  class="rightMessage" />
		
		</div>
	
		<!--确认按钮-->
		<div class="etermineButton" onClick="testT()">
			确认
		</div>
	</form>
</div>

<!--安全密码 END-->

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