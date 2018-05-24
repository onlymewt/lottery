<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改信息页面</title>
    <script type="text/javascript" src="/peoplecar/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/peoplecar/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV-->
<div class="topSearchDiv">
    <div class="updateTitleMessage">
        顶部提示信息
    </div>
</div>
<div class="upadateMessageDisplay">
    <span class="updateMessageTitle">
        修改信息表头
    </span>
    <input type="text" class="updateMessageInput" placeholder="请输入修改信息">
</div>
<div class="upadateMessageDisplay">
    <span class="updateMessageTitle">
        修改信息表头
    </span>
    <input type="text" class="updateMessageInput" placeholder="请输入修改信息">
</div>
<div class="upadateMessageDisplay">
    <span class="updateMessageTitle">
        修改信息表头
    </span>
    <input type="text" class="updateMessageInput" placeholder="请输入修改信息">
</div>


<div class="updateTrue">
    确认修改按钮
</div>


</body>
<script type="text/javascript" src="/peoplecar/Public/js/commentT.js"></script>
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




</script>
</html>