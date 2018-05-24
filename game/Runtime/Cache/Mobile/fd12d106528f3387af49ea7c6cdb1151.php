<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/css/stylesheet.css">
	<link rel="stylesheet" href="/Public/css/stylesheet_PC.css" media="screen and (min-width:1000px)">
	<script src="/Public/js/jquery-3.2.1.min.js"></script>
	<script src="/Public/js/comment.js"></script>
	<!--引用三级联动列表所需JS-->
	<script src="/Public/js/bootstrap.min.js"></script>
	<script src="/Public/js/distpicker.data.js"></script>
	<script src="/Public/js/distpicker.js"></script>
	<script src="/Public/js/citymain.js"></script>
	<!--引用三级联动列表所需JS END-->
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
		市级代理申请
	</span>
</div>
<form action="<?php echo U(MODULE_NAME.'/Servicemanagement/user_cityapply');?>" method="post" id="myform">
	<!--省市区三级联动列表-->
	<div  class="citySelect">
		<div class="citySelectLeftTitle">
			请选择市:
		</div>
		<div data-toggle="distpicker" class="citySelectRightList">
			<select name="province"></select>
			<input name="provinceDataCode" type="text" style="display:none;" value="">
			<select name="city"></select>
			<input name="cityDataCode" type="text" style="display:none;" value="">
			<!--<select></select>-->
		</div>
	</div>
	
	
	<!--
	<div class="messageDidsplayDiv">
		<div class="leftMessage">转换类型:</div>
		<input type="text" value="-----请选择-----"  readonly="readonly"  class="rightMessage forInputSelect" />
		
	</div>
	-->
	
	
	<!--确认按钮-->
	<div class="etermineButton" onClick="test()">
		确认申请
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
   function test()
	{
		document.getElementById("myform").submit();    
	}
   /*代理申请 提取 选择值 data-code属性值 */
   //省级提取
   $("select[name='province']").change(function () {
       $("input[name='provinceDataCode']").val($(this).find("option:selected").attr("data-code"));
       //考虑用户不点选下级菜单情况，改变省级一秒后 自动提取市级value值
       setTimeout(function(){
           $("input[name='cityDataCode']").val( $("select[name='city']").find("option:selected").attr("data-code"));
       },500);


   });
   //市级提取
   $("select[name='city']").change(function () {
       $("input[name='cityDataCode']").val($(this).find("option:selected").attr("data-code"));
   });
   //设置初始省级选择框
   $(function(){
       $("select[name='province']").val("");
       $("select[name='city']").val("");
   })
</script>
</html>