<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/css/stylesheet.css">
    <link rel="stylesheet" href="/Public/css/stylesheet_PC.css" media="screen and (min-width:1000px)">
    <script src="/Public/js/jquery-3.2.1.min.js"></script>
    <style>
		
    </style>
</head>

<!--页面复制于注册页面 因此页面具有唯一性 js和cs皆写在本页-->
<body class="bodyHeight">
<!--topTitle -->
<div class="pageTitleDiv">
    <div class="backButton">
        返回
    </div>
    <span class="pageTitleText">
		密码找回
	</span>
</div>
<form action="<?php echo U(MODULE_NAME.'/Index/register');?>" method="post" id="myform">
   
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">手机号码:</div>
        <input type="text" placeholder="请输入您注册时的手机号" name="phone" class="rightMessage"/>

    </div>
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">您的账号:</div>
        <input type="text" placeholder="请输入您的帐号" name="parent_account" class="rightMessage"/>

    </div>
	 <div class="messageDidsplayDiv">
        <div class="leftMessage getCodeNum">获取验证码:</div>
        <input type="text" placeholder="请输验证码" name="passwordT" class="rightMessage"/>

    </div>

    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">新密码:</div>
        <input type="text" placeholder="请输登陆密码" name="password" class="rightMessage"/>

    </div>
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">确认新密码:</div>
        <input type="text" placeholder="请输登陆密码" name="passwordT" class="rightMessage"/>

    </div>
  





    <!--确认按钮-->
    <div class="etermineButton" onClick="test()">
        确认更改
    </div>
</form>

<!--input选择列表
<div class="inputSelectOuterDiv">
	<div class="inputSelectDiv">
		<div class="inputSelecList" >
			<span class="inputSelectValue">分享积分 转报单币</span>
			<div style="border-left: solid 50px #fff; border-bottom: solid 23px transparent; border-top: solid 23px transparent;display: inline-block; float: right;"></div>
		</div>
		<div class="inputSelecList" >
			<span class="inputSelectValue">购车积分转分享积分 </span>
			<div style="border-left: solid 50px #fff; border-bottom: solid 23px transparent; border-top: solid 23px transparent;display: inline-block; float: right;"></div>
		</div>
	</div>
</div>
-->
</body>

<script>
    function test() {
        document.getElementById("myform").submit();
    }
	$(function(){
		$(".bodyHeight").css("height",$(window).outerHeight()+"px");
		$(".backButton").click(function(){
			history.back();
		});
	
	});

   
</script>
</html>