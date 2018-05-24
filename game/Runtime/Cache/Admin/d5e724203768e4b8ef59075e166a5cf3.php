<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改管理员密码</title>
    <script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV-->
<div class="topSearchDiv">
    <div class="updateTitleMessage">
        管理员密码修改
    </div>
</div>
<form action="<?php echo U(MODULE_NAME.'/AdminControl/adminPasswordUpdate');?>" method="post" id="myform">
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            原密码：
        </span>
        <input type="password" name="password" class="updateMessageInput" placeholder="请输入原密码">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            新密码：
        </span>
        <input type="password" name="new_password" class="updateMessageInput" placeholder="请输入管理员新密码">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            确认新密码：
        </span>
        <input type="password" name="new_passwordT" class="updateMessageInput" placeholder="请再次输入管理员新密码">
    </div>
    <input type="text" name="sp_id" class="updateMessageInput" value="<?php echo ($sp_id); ?>" style="display: none">

    <div class="updateTrue"  onClick="test()">
        确认修改
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