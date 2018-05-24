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
		省级代理申请
	</span>
</div>
<form action="<?php echo U(MODULE_NAME.'/Servicemanagement/user_provinceapply');?>" method="post" id="myform">
	<!--省市区三级联动列表-->
	<div  class="citySelect">
		<div class="citySelectLeftTitle">
			请选择省:
		</div>
		<div data-toggle="distpicker" class="citySelectRightList">
			<select name="province"></select>
			<input name="provinceDataCode" type="text" style="display:none"  >
			<!--<select ></select>-->
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
	    alert($(this).find("option:selected").attr("data-code"))
		$("input[name='provinceDataCode']").val($(this).find("option:selected").attr("data-code"));
    });
	//设置初始省级选择框
   $(function(){
       $("select[name='province']").val("");
   })

</script>
</html>