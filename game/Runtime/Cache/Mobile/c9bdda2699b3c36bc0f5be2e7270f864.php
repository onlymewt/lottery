<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=10,user-scalable=no" />
    <title>博彩之家</title>

    <link rel="stylesheet" href="/lottery/Public/css/public_style.css">
    <link rel="stylesheet" href="/lottery/Public/css/login_style.css">
</head>
<body style="background: #ccc;">
<!--信息弹窗-->
<div class="public-promptMessage" style="display: none">
    <div class="">
        <p>提示！</p>
        <span>this is message</span>
        <button class="public-promptClose">确定</button>
    </div>
</div>
<div method="post" action="" class="login-outer">
    <!--页面标题信息-->
    <div class="login-pageTitle">博彩之家</div>
    <!--登陆框-->
    <div class="login-inputBlock">
        <!--输入行-->
        <div class="login-userInput">
            <img src="/lottery/Public/images/login_userIcon.png" class="" />
            <input type="text" class="" placeholder="请输入用户名" />
        </div>
        <!--输入行-->
        <div class="login-userInput">
            <img src="/lottery/Public/images/login_pwd.png" class="" />
            <input type="text" class="" placeholder="请输入密码" />
        </div>
    </div>
    <!--记住密码 找回密码-->
    <div class="login-remeberAndForgot">

        <a href="rechangepasword.html" >找回密码</a>
    </div>
    <!--登陆按钮-->
    <input type="submit" value="登陆" class="login-loginButton">
    <!--注册-->
    <div class="login-joinUs">
        <a href="<?php echo U('Regus/register');?>" >
            还没有账户 &nbsp;<span>点此注册</span>
        </a>
    </div>
</div>

</body>
<script src="/lottery/Public/js/jq-3.2.0.js"></script>
<script src="/lottery/Public/js/public_page-size.js"></script>
<script src="/lottery/Public/js/public_comment.js"></script>
<script src="/lottery/Public/js/login_js.js"></script>

</html>