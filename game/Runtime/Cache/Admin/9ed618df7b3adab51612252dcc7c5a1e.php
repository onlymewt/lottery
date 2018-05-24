<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改系统公告</title>
    <script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/Public/css/styleSheetT.css">
    <style>

    </style>
</head>
<body>
<!--顶部搜索DIV-->
<div class="topSearchDiv">
    <div class="updateTitleMessage">
        修改系统公告
    </div>
</div>
<form action="<?php echo U(MODULE_NAME.'/NoticControl/editNotice');?>" method="post" id="myform">
    <div class="upadateMessageDisplay">
        <span class="updateMessageTitle">
            公告名称:<?php echo ($newInfo["title"]); ?>
        </span>
       <input type="text" name="id" class="updateMessageInput" value="<?php echo ($newInfo["id"]); ?>" style="display:none">
        <!--添加系统公告输入框  本页特有 使用页内样式-->
        <textarea class="addNoticeDiv" name="content">
			<?php echo ($newInfo["content"]); ?>
        </textarea>
    </div>



    <div class="updateTrue"   onClick="test()">
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