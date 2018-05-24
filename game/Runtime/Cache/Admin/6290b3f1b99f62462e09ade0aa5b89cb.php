<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发送用户邮件</title>
    <script type="text/javascript" src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/mc/Public/css/styleSheetT.css">
    <style>

    </style>
</head>
<body>
<!--顶部搜索DIV-->
<div class="topSearchDiv">
    <div class="updateTitleMessage">
        向指定用户发送邮件
    </div>
</div>
<form action="<?php echo U(MODULE_NAME.'/NoticControl/addUserEmail');?>" method="post" id="myform">
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            用户账号:
        </span>
        <input type="text" class="updateMessageInput" name="account" placeholder="请输入用户帐号">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            公告名称:
        </span>
        <input type="text" class="updateMessageInput" name="title" placeholder="请输入公告名称">
        <!--添加系统公告输入框  本页特有 使用页内样式-->
        <textarea class="addNoticeDiv" name="content">

        </textarea>
    </div>



    <div class="updateTrue"  onClick="test()">
        确认发送
    </div>
</form>


</body>
<script type="text/javascript" src="/mc/Public/js/commentT.js"></script>
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