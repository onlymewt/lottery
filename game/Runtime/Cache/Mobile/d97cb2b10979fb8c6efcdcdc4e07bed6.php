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
<body class="bodyHeight">
<!--topTitle -->
<div class="pageTitleDiv">
    <div class="backButton">
        返回
    </div>
    <span class="pageTitleText">
		账户充值
	</span>
</div>

<form action="<?php echo U(MODULE_NAME.'/Financemanagement/addcharge');?>" method="post" id="myform">
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">充值金额:</div>
        <input type="number" placeholder="请输入充值金额" name="money" class="rightMessage"/>

    </div>
    <!---->
    <div class="messageDidsplayDiv">
        <div class="leftMessage">手机号码:</div>
        <input type="number" placeholder="请输入手机号" name="phone" class="rightMessage"/>

    </div>
    <!---->
    <!--<div class="messageDidsplayDiv">
        <div class="leftMessage">订单号:</div>
        <input type="number" placeholder="请输入充值单号" name="order_no" class="rightMessage"/>

    </div>-->
    <!---->
    <!--<div class="messageDidsplayDiv">
        <div class="leftMessage">转换类型:</div>
        <input type="text" value="-----请选择-----" readonly="readonly" class="rightMessage forInputSelect"/>

    </div>-->
    <!--input选择列表-->
    <div class="inputSelectOuterDiv" style="display:none;">
        <div class="inputSelectDiv">
            <div class="inputSelecList">
                <span class="inputSelectValue">微信充值</span>
                <div class="inputSelectOuterDivRightArrow"></div>
            </div>
            <div class="inputSelecList">
                <span class="inputSelectValue">支付宝充值</span>
                <div class="inputSelectOuterDivRightArrow"></div>
            </div>
            <div class="inputSelecList">
                <span class="inputSelectValue">银行卡充值</span>
                <div class="inputSelectOuterDivRightArrow"></div>
            </div>
        </div>
    </div>
    <!--根据支付方式选择 显示对应输入框DIV -->
    <!--微信输入框 begin-->
    <div class="forInputSelect_InputDiv wechatInputDiv" style="display:none;">
        <!---->
        <div class="messageDidsplayDiv">
            <div class="leftMessage">微信号:</div>
            <input type="number" placeholder="请输入微信号" name="wx_no" class="rightMessage"/>
        </div>
    </div>
    <!--微信输入框 END-->
    <!--支付宝输入框 begin-->
    <div class="forInputSelect_InputDiv wechatInputDiv" style="display:none;">
        <!---->
        <div class="messageDidsplayDiv">
            <div class="leftMessage">支付宝号:</div>
            <input type="number" placeholder="请输入支付宝号" name="alipay_no" class="rightMessage"/>
        </div>
    </div>
    <!--支付宝输入框 END-->
    <!--银行卡输入框 begin-->
    <div class="forInputSelect_InputDiv wechatInputDiv" style="display:none;">
        <!---->
        <div class="messageDidsplayDiv">
            <div class="leftMessage">银行名称:</div>
            <input type="number" placeholder="请输入银行名称" name="bank_name" class="rightMessage"/>
        </div>
        <!---->
        <div class="messageDidsplayDiv">
            <div class="leftMessage">卡号:</div>
            <input type="number" placeholder="请输入银行卡号" name="bank_no" class="rightMessage"/>
        </div>
        <!---->
        <div class="messageDidsplayDiv">
            <div class="leftMessage">持卡人姓名:</div>
            <input type="number" placeholder="请输入持卡人姓名" name="card_name" class="rightMessage"/>
        </div>
    </div>
    <!--银行卡输入框 END-->

    <!--确认按钮-->
    <div class="etermineButton" onClick="test()">
        确认
    </div>
	
	<span  class="tishixinxi">充值后平台会尽快与您取得联系，您也可以直接联系平台，联系电话：0371-55187663</span>
</form>
</body>

<script>
    function test() {
        document.getElementById("myform").submit();
    }
    //根据选择的值 显示后续对应的输入框
    $(".inputSelecList").click(function(){
        //获取所有支付方式的对应输入框
        var chargrType = $(".forInputSelect_InputDiv");
        $(".forInputSelect_InputDiv").slideUp();
        $(chargrType[$(this).index()]).slideDown();
    });

</script>
</html>