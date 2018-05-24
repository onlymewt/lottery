<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/mc/Public/css/copypagestyle.css">
    <link rel="stylesheet" type="text/css" href="/mc/Public/css/copypagestyle_PC.css" media="screen and (min-width: 1000px)">
    <script src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <style>
		.outerDiv{
			background-color:rgba(0,0,0,.8);
			background-image:url('/mc/Public/img/111.jpg');
			background-size:100% 100%;
			background-position:center;
			background-repeat:no-repeat;
		}
	</style>
</head>
<body>

<!--outer div -->
<div class="outerDiv">
    <!--page header div-->
	<form action="<?php echo U(MODULE_NAME.'/Regus/testid');?>" method="post" id="myform">
    <div class="loginPageHeaderDiv">
        <img src="/mc/Public/img/loginTitle.gif" alt="" style="width: 100%;">
    </div>
    <!--login message input-->
    <div class="messageBody">
        <div class="userLoginInput">
            <img src="/mc/Public/img/userTitle.gif" alt="" class="loginPageInputTitle"/>
            <input type="text" placeholder="请输入手机号" class="loginPageInput" name="account">
        </div>
        <div class="userLoginInput">
            <img src="/mc/Public/img/userPassword.gif" alt="" class="loginPageInputTitle"/>
            <input type="password" placeholder="请输入密码" class="loginPageInput" name="password">
          	<!--  <span style="font-size: 4rem;">忘记密码 &nbsp; ></span>-->
        </div>
    </div>
    <!--login button-->
    <div class="loginButton" onClick="test()">
        立即登录
    </div>
	</form>
    <div style="text-align: center;font-size: 4rem;margin:2% 0;">
        <span style="color:#fff;font-size: 4rem;" class="ljzc">忘记密码</span>
    </div>
    <div class="loginBottomMessage">
        <img src="/mc/Public/img/loginBottom.gif" alt="">
        联系在线客服
    </div>
</div>

<!--<span style="position: fixed;
    top: 30%;
    left: 35%;
    display: block;
    width: 550px;
    text-align: center;
    color: red;
    font-weight: bolder;
    font-size: 2rem;">
   测试中

</span>-->
<span id="txt_Msg" style="position:fixed;top:50%;display: none;width:100%;text-align: center;color:red; font-weight: bolder;font-size: 5rem;">
    请联系客服

</span>

</body>
<script>
    //page size changes the page reload
    function pageReload() {
        location.reload();

    }
	function test()
	{
		document.getElementById("myform").submit();    
	}
    //addEventListener('resize', pageReload, false);
    // loginButton click page location
   /* document.getElementsByClassName('loginButton')[0].onclick = function (){
		//document.getElementById('txt_Msg').style.display = "block";
		//setTimeout(function(){document.getElementById('txt_Msg').style.display = "none";},3000);
        location.href = "copypageTwo.html";
    }*/


     document.getElementsByClassName('ljzc')[0].onclick = function (){
	   location.href = "<?php echo U('Regus/userpasswordreset');?>";
    }
</script>
<script>
	$(function(){
   		$('.outerDiv').css('height',$(window).outerHeight() + "px");
        /*因为安卓手机输入法会将定位元素顶起 所以Input获得焦点时将底部联系客服DIV隐藏*/
        var pageInputAll = document.getElementsByTagName("input");
        for(var i=0; i<pageInputAll.length ;i++){
            pageInputAll[i].onfocus = function(){
                document.getElementsByClassName("loginBottomMessage")[0].style.display = "none";
            }
            pageInputAll[i].onblur = function(){
                document.getElementsByClassName("loginBottomMessage")[0].style.display = "block";
            }
        }
	})
</script>

</html>