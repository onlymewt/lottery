<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>功能参数设置</title>
    <script type="text/javascript" src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/mc/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV-->
<div class="topSearchDiv">
    <div class="updateTitleMessage">
        修改功能参数请慎重修改！！！
    </div>
</div>
<form action="<?php echo U(MODULE_NAME.'/ParameterProbability/functionValueResetPage');?>" method="post" id="myform">
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            购车积分提现手续费比例
        </span>
        <input type="text" class="updateMessageInput" name="fund_fee" value="<?php echo ($parameterInfo["fund_fee"]); ?>">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
           出局积分提现手续费比例
        </span>
        <input type="text" class="updateMessageInput" name="bonus_fee" value="<?php echo ($parameterInfo["bonus_fee"]); ?>">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            推荐积分提现手续费比例
        </span>
        <input type="text" class="updateMessageInput" name="cash_fee" value="<?php echo ($parameterInfo["cash_fee"]); ?>">
    </div>
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
           转换报单币手续费比例
        </span>
        <input type="text" class="updateMessageInput" name="declaration_fee" value="<?php echo ($parameterInfo["declaration_fee"]); ?>">
    </div>
</form>


<div class="updateTrue" onclick="test()">
    确认修改
</div>


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