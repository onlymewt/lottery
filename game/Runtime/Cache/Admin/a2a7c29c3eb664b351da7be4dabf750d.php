<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加汇款记录</title>
    <script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV-->
<!--<div class="topSearchDiv">-->
    <!--<div class="updateTitleMessage">-->
        <!--修改功能参数请慎重修改！！！-->
    <!--</div>-->
<!--</div>-->
<form action="<?php echo U(MODULE_NAME.'/WealthDetailed/appendNewMessageButton');?>" method="post" id="myform">
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            收款账号
        </span>
        <input type="text" class="updateMessageInput" placeholder="请输入收款账号" name="receivables_account">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            收款人姓名
        </span>
        <input type="text" class="updateMessageInput" placeholder="请输入收款人姓名" name="receivables_username">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            汇款金额
        </span>
        <input type="text" class="updateMessageInput" placeholder="请输入汇款金额" name="remittance_money">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            汇款银行
        </span>
        <input type="text" class="updateMessageInput" placeholder="请输入汇款银行" name="remittance_bank">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            汇款人
        </span>
        <input type="text" class="updateMessageInput" placeholder="请输入汇款人" name="remittance_user">
    </div>
</form>


<div class="updateTrue" onclick="test()">
    添加
</div>


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