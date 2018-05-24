<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <title>Title</title>
    <link rel="stylesheet" href="/mc/Public/css/stylesheetT.css">
    <link rel="stylesheet" href="/mc/Public/css/userRecommendStructure.css">
    <script src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <script src="/mc/Public/js/commentT.js"></script>
    <style>
        .tableTitle{
            color: #000;
        }
    </style>
</head>
<body class="bodyHeight">
<!--顶部搜索DIV -->
<div class="topSearchDiv" >

    <!--<select name="account" class="searchConditionSelect" id="searchConditionSelect">-->
        <!--<option value="" selected="selected">请选择搜索条件</option>-->
        <!--<option value="1111">1111111</option>-->
        <!--<option value="2222">22222222222</option>-->
        <!--<option value="3333">3333333</option>-->
        <!--<option value="444">444444444</option>-->
        <!--<option value="555">555555555</option>-->
        <!--<option value="666">666666666件</option>-->
    <!--</select>-->
    <form action="<?php echo U(MODULE_NAME.'/UserAdministration/userRecommendStructure');?>" method="post" id="myform">
        <label style="display: inline-block;color:#000;margin-right: 30px;">会员账号</label>
        <input type="text" class="searchDataStyle searchInputStyle" placeholder="请输入搜索条件" name="account">
        <div class="conditionEndSearchStart" onclick="test()">开始搜索</div>
    </form>
</div>
<table cellspacing="0" class="table1">
    <tr>
        <td colspan="2" class="tableTitle"><?php echo ($structureInfo["one_account"]); ?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo ($structureInfo["one_username"]); ?></td>
    </tr>
    <tr>
        <td colspan="2">推荐：<?php echo ($structureInfo["one_parent_account"]); ?>（<?php echo ($structureInfo["one_parent_username"]); ?>）</td>
    </tr>
    <tr>
        <td colspan="2" class="tableTime"><?php echo (date("Y-m-d H:i:s",$structureInfo["one_time"])); ?></td>
    </tr>
</table>
<div>
    <div class="div1"></div>
    <div class="div2"></div>
</div>
<table cellspacing="0" class="table2">
    <tr>
        <td colspan="2" class="tableTitle"><?php echo ((isset($structureInfo["two_account"]) && ($structureInfo["two_account"] !== ""))?($structureInfo["two_account"]):注册); ?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo ($structureInfo["two_username"]); ?></td>
    </tr>
    <tr>
        <td colspan="2">推荐：<?php echo ($structureInfo["two_parent_account"]); ?>（<?php echo ($structureInfo["two_parent_username"]); ?>）</td>
    </tr>
    <tr>
        <td colspan="2" class="tableTime"><?php echo (date("Y-m-d H:i:s",$structureInfo["two_time"])); ?></td>
    </tr>
</table>


<table cellspacing="0" class="table3">
    <tr>
        <td colspan="2" class="tableTitle"><?php echo ((isset($structureInfo["three_account"]) && ($structureInfo["three_account"] !== ""))?($structureInfo["three_account"]):注册); ?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo ($structureInfo["three_username"]); ?></td>
    </tr>
    <tr>
        <td colspan="2">推荐：<?php echo ($structureInfo["three_parent_account"]); ?>（<?php echo ($structureInfo["three_parent_username"]); ?>）</td>
    </tr>
    <tr>
        <td colspan="2" class="tableTime"><?php echo (date("Y-m-d H:i:s",$structureInfo["three_time"])); ?></td>
    </tr>
</table>
<div>
    <div class="div3"></div>
    <div class="div5"></div>
    <br/>
    <div class="div4"></div>
    <div class="div6"></div>
</div>

<table cellspacing="0" class="table4">
    <tr>
        <td colspan="2" class="tableTitle"><?php echo ((isset($structureInfo["four_account"]) && ($structureInfo["four_account"] !== ""))?($structureInfo["four_account"]):注册); ?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo ($structureInfo["four_username"]); ?></td>
    </tr>
    <tr>
        <td colspan="2">推荐：<?php echo ($structureInfo["four_parent_account"]); ?>（<?php echo ($structureInfo["four_parent_username"]); ?>）</td>
    </tr>
    <tr>
        <td colspan="2" class="tableTime"><?php echo (date("Y-m-d H:i:s",$structureInfo["four_time"])); ?></td>
    </tr>
</table>


<table cellspacing="0" class="table5">
    <tr>
        <td colspan="2" class="tableTitle"><?php echo ((isset($structureInfo["five_account"]) && ($structureInfo["five_account"] !== ""))?($structureInfo["five_account"]):注册); ?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo ($structureInfo["five_username"]); ?></td>
    </tr>
    <tr>
        <td colspan="2">推荐：<?php echo ($structureInfo["five_parent_account"]); ?>（<?php echo ($structureInfo["five_parent_username"]); ?>）</td>
    </tr>
    <tr>
        <td colspan="2" class="tableTime"><?php echo (date("Y-m-d H:i:s",$structureInfo["five_time"])); ?></td>
    </tr>
</table>

<table cellspacing="0" class="table6">
    <tr>
        <td colspan="2" class="tableTitle"><?php echo ((isset($structureInfo["six_account"]) && ($structureInfo["six_account"] !== ""))?($structureInfo["six_account"]):注册); ?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo ($structureInfo["six_username"]); ?></td>
    </tr>
    <tr>
        <td colspan="2">推荐：<?php echo ($structureInfo["six_parent_account"]); ?>（<?php echo ($structureInfo["six_parent_username"]); ?>）</td>
    </tr>
    <tr>
        <td colspan="2" class="tableTime"><?php echo (date("Y-m-d H:i:s",$structureInfo["six_time"])); ?></td>
    </tr>
</table>


<table cellspacing="0" class="table7">
    <tr>
        <td colspan="2" class="tableTitle">注册</td>
    </tr>
    <tr>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td colspan="2">推荐：（）</td>
    </tr>
    <tr>
        <td colspan="2" class="tableTime"></td>
    </tr>
</table>


</body>

<script>
    function test() {
        document.getElementById("myform").submit();
    }
    window.onload = function(){
        /*检测日期是否未设置 如果开始为1970 则设置内容为空*/
        var tableTime = document.getElementsByClassName("tableTime");
        /*循环判断内容*/
        function  tableTime_check() {
            for(var i=0; i < tableTime.length; i++ ){
                var tableTime_Text = tableTime[i].innerHTML;
                if(tableTime_Text.indexOf("1970") >=  0){
                    tableTime[i].innerHTML = "";
                }
            }
        }
        tableTime_check();

    }

</script>
</html>