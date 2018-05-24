<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/mc/Public/css/stylesheet.css">
    <link rel="stylesheet" href="/mc/Public/css/stylesheet_PC.css" media="screen and (min-width:1000px)">
    <script src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <script src="/mc/Public/js/comment.js"></script>
    <!--引用三级联动列表所需JS-->
    <script src="/mc/Public/js/bootstrap.min.js"></script>
    <script src="/mc/Public/js/distpicker.data.js"></script>
    <script src="/mc/Public/js/distpicker.js"></script>
    <script src="/mc/Public/js/citymain.js"></script>
    <!--引用三级联动列表所需JS END-->
    <style>
		html{
			background-image: url(../img/pageBackImage11.jpg);
		}
		.bodyHeight{
			background-image: url(../img/pageBackImage11.jpg);
		}
    </style>
</head>
<body class="bodyHeight">
<!--topTitle -->
<div class="pageTitleDiv">
    <div class="backButton">
        返回
    </div>
    <span class="pageTitleText">
		注册会员
	</span>
</div>
<form action="<?php echo U(MODULE_NAME.'/Index/register');?>" method="post" id="myform">
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">会员帐号:</div>
        <input type="text" placeholder="请输入帐号" name="account" class="rightMessage"/>

    </div>
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">会员姓名:</div>
        <input type="text" placeholder="请输入真实姓名" name="username" class="rightMessage"/>

    </div>
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">身份证号:</div>
        <input type="text" placeholder="请输入身份证号" name="identity_card" class="rightMessage"/>

    </div>
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">手机号码:</div>
        <input type="text" placeholder="请输入手机号" name="phone" class="rightMessage"/>

    </div>
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">推荐会员:</div>
        <input type="text" value="<?php echo ($account); ?>" name="parent_account" class="rightMessage"/>

    </div>
    <!---->
    <!--<div class="messageDidsplayDiv">
        <div class="leftMessage">报单中心:</div>
        <input type="text"  placeholder="请输报单中心号"  class="rightMessage" />

    </div>-->
    <!--省市区三级联动列表-->
    <div class="citySelect">
        <div class="citySelectLeftTitle">
            请选择市区:
        </div>
        <div data-toggle="distpicker" class="citySelectRightList">
            <select name="province"></select>
            <input type="text" style="display:none;" name="provinceDataCode">
            <select name="city"></select>
            <input type="text" style="display:none;" name="cityDataCode">
            <select name="area"></select>
            <input type="text" style="display:none;" name="areaDataCode">
        </div>
    </div>
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">登陆密码:</div>
        <input type="text" placeholder="请输登陆密码" name="password" class="rightMessage"/>

    </div>
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">确认登陆密码:</div>
        <input type="text" placeholder="请输登陆密码" name="passwordT" class="rightMessage"/>

    </div>
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">安全密码:</div>
        <input type="text" placeholder="请输入安全密码" name="paypassword" class="rightMessage"/>

    </div>
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">确认安全密码:</div>
        <input type="text" placeholder="请输入安全密码" name="paypasswordT" class="rightMessage"/>
    </div>
	
	 <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">分组上级账号:</div>
        <input type="text" placeholder="请输入分组上级账号" name="upside_account" class="rightMessage"/>
    </div>



    <!--
    <div class="messageDidsplayDiv">
        <div class="leftMessage">转换类型:</div>
        <input type="text" value="-----请选择-----"  readonly="readonly"  class="rightMessage forInputSelect" />

    </div>
    -->


    <!--确认按钮-->
    <div class="etermineButton" onClick="test()">
        确认注册
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
    /*代理申请 提取 选择值 data-code属性值 */
    //省级提取
    $("select[name='province']").change(function () {
        $("input[name='provinceDataCode']").val($(this).find("option:selected").attr("data-code"));
        //考虑用户不点选下级菜单情况，改变省级一秒后 自动提取市级value值
        setTimeout(function () {
            $("input[name='cityDataCode']").val($("select[name='city']").find("option:selected").attr("data-code"));
        }, 500);
        //考虑用户不点选下级菜单情况，改变省级一秒后 自动提取区级value值
        setTimeout(function () {
            $("input[name='areaDataCode']").val($("select[name='area']").find("option:selected").attr("data-code"));
        }, 1000);
    });
    //市级提取
    $("select[name='city']").change(function () {
        $("input[name='cityDataCode']").val($(this).find("option:selected").attr("data-code"));
        //考虑用户不点选下级菜单情况，改变市级一秒后 自动提取区级value值
        setTimeout(function () {
            $("input[name='areaDataCode']").val($("select[name='area']").find("option:selected").attr("data-code"));
        }, 500);
    });
    //区级提取
    $("select[name='area']").change(function () {
        $("input[name='areaDataCode']").val($(this).find("option:selected").attr("data-code"));
    });
    //设置初始省级选择框
    $(function () {
        $("select[name='province']").val("");
        $("select[name='city']").val("");
        $("select[name='area']").val("");
    })
</script>
</html>