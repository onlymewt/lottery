<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <title>Title</title>
    <link rel="stylesheet" href="/mc/Public/css/stylesheet.css">
    <link rel="stylesheet" href="/mc/Public/css/stylesheet_PC.css" media="screen and (min-width:1000px)">
    <script src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <script src="/mc/Public/js/comment.js"></script>
    <style>
        html {
            background-image: url(/mc/Public/img//pageBackImage9.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            width: 300%;
            height: 100%;
            overflow:auto ;
        }
        .div1 {
            position: relative;
            color: white;
            left: 44.5%;
            width: 0;
            height: 2rem;
            border: solid 1px #fff;
        }

        .div2 {
            position: relative;
            color: white;
            left: 23.5%;
            width: 40rem;
            height: 2rem;
            border: solid 1px #fff;
            border-bottom: none;
        }

        .div3 {
            position: relative;
            color: white;
            left: 23.5%;
            width: 0;
            height: 2rem;
            border: solid 1px #fff;
            display: inline-table;
        }

        .div4 {
            position: relative;
            color: white;
            left: 12.5%;
            width: 21rem;;
            height: 2rem;
            border: solid 1px #fff;
            border-bottom: none;
            display: inline-table;

        }

        .div5 {
            position: relative;
            color: white;
            left: 65.3%;
            width: 0;
            height: 2rem;
            border: solid 1px #fff;
            display: inline-table;

        }

        .div6 {
            position: relative;
            color: white;
            left: 31.5%;
            width: 21rem;;
            height: 2rem;
            border: solid 1px #fff;
            border-bottom: none;
            display: inline-table;

        }







        table {
            color: white;
            border: solid 1px #07b4f3;
            width: 14rem;
            text-align: center;
            position: relative;

        }

        tr, td {
            width: 14rem;
            height: 2rem;
            color: white;
            border: solid 1px #07b4f3;
            text-align: center;
			font-size:13px;
        }

        .table1 {
            left: 37%;
        }

        .table2 {
            left: 16%;
            display: inline-block;
        }

        .table3 {
            left: 43%;
            display: inline-block;

        }

        .table4 {
            left: 5%;
            display: inline-block;
        }

        .table5 {
            left: 12%;
            display: inline-block;

        }

        .table6 {
            left: 16.5%;
            display: inline-block;
        }

        .table7 {
            left: 23.5%;
            display: inline-block;

        }
		.backButton{
			font-size: 2rem;
		}
		.pageTitleText{
			font-size: 3rem;
		}
        @media screen and (min-width: 1000px) {
            html {
                background-image: url("");
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100% 100%;
                width: 550px;
                margin-left: 35%;

                overflow-y: hidden;
            }
            .bodyHeight{
                width: 100%;
                overflow-x: auto;


            }
            .tableListDiv{
                position: relative;
                width: 200%;
            }
        }

        .tableTitle {
            background-color: #00ddff;
            color: #000;
        }

    </style>
</head>
<body class="bodyHeight">
<!--topTitle -->
<div class="pageTitleDiv">
    <div class="backButton">
        返回
    </div>
    <span class="pageTitleText">
		结构管理
	</span>

</div>
<br/><br/><br/>
<div class="tableListDiv">
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

</div>


</body>

<script>
    window.onload = function () {
        function test() {
            document.getElementById("myform").submit();
        }

        /*检测日期是否未设置 如果开始为1970 则设置内容为空*/
        var tableTime = document.getElementsByClassName("tableTime");
        /*循环判断内容*/
        function tableTime_check() {
            for (var i = 0; i < tableTime.length; i++) {
                var tableTime_Text = tableTime[i].innerHTML;
                if (tableTime_Text.indexOf("1970") >= 0) {
                    tableTime[i].innerHTML = "";
                }
            }
        }

        tableTime_check();

    }


</script>
</html>