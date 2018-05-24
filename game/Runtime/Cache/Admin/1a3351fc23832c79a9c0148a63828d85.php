<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改用户信息</title>
    <script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV-->
<div class="topSearchDiv">
    <div class="updateTitleMessage">
        请慎重修改信息！
    </div>
</div>
<form action="<?php echo U(MODULE_NAME.'/UserAdministration/edituserInfo');?>" method="post" id="myform">
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            用户姓名：
        </span>
        <input type="text" name="username" class="updateMessageInput" placeholder="<?php echo ($userInfo["username"]); ?>">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            手机号：
        </span>
        <input type="text" name="phone" class="updateMessageInput" placeholder="<?php echo ($userInfo["phone"]); ?>">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            身份证号：
        </span>
        <input type="text" name="identity_card" class="updateMessageInput" placeholder="<?php echo ($userInfo["identity_card"]); ?>">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            用户身份：
        </span>
        <input type="text" name="leve" class="updateMessageInput" placeholder="<?php echo ($userInfo["leve"]); ?>">
        <!--<span>(1:普通会员   2：区级代理  3：市级代理  4：省级代理)</span>-->
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            密码：
        </span>
        <input type="text" name="password" class="updateMessageInput" placeholder="请输入新密码">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            安全密码：
        </span>
        <input type="text" name="paypassword" class="updateMessageInput" placeholder="请输入新安全密码">
    </div>
    <input type="text" name="userid" class="updateMessageInput" value="<?php echo ($userInfo["userid"]); ?>" hidden="hidden">


    <div class="updateTrue" onclick="test()">
        确认修改按钮
    </div>
</form>


</body>
<script type="text/javascript" src="/Public/js/commentT.js"></script>
<script>
    $(function(){
        var testListData =$('#testList option');
        function textFor() {
            for(var i=0; i<testListData.length;i++){
                alert(testListData[i].val());

            }
            return 1;
        }
        $('.updateTrue').click(function(){

            textFor()
        });
    })

    function test()
    {
        document.getElementById("myform").submit();
    }




</script>
</html>