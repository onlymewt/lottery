<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>网站开关</title>
    <script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV-->
<div class="topSearchDiv">
    <div class="updateTitleMessage">
        网站开关请慎重操作！！
    </div>
</div>
<div class="upadateMessageDisplay">
    <span class="updateMessageTitle">
       	网站当前状态：
    </span>
    <input type="text" class="updateMessageInput" readonly="readonly"  value="<?php echo ($zhuangtai); ?>" style="border:none;box-shadow: none;" >
</div>
<!--<div class="upadateMessageDisplay">-->
    <!--<span class="updateMessageTitle">-->
        <!--输入开关指令：-->
    <!--</span>-->
    <!--<input type="text" class="updateMessageInput" maxlength="1" placeholder="请输入管理员密码">-->
<!--</div>-->



<div class="updateTrue">
    <a href="<?php echo U(MODULE_NAME.'/BackstageControl/editSwitch');?>" style="color:#000">确认修改</a>
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




</script>
</html>