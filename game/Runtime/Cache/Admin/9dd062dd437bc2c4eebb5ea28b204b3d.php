<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户汇款登记</title>
    <script type="text/javascript" src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/mc/Public/css/styleSheetT.css">
    <style>
        .appendNewMessageButton{
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            border: solid 1px #dedede;
            color: #dedede;
            border-radius: 15px;
            background: rgba(0,0,0,.5);
            margin: 10px 0 10px 10px;
            box-shadow: 0 0 20px 5px rgba(255,255,255,.5) inset;
        }

    </style>
</head>
<body>
<!--顶部搜索DIV
<div class="topSearchDiv" style="display:none;">
    <label class="searchTitelDate" for="searchTitelOrStartDate">
        开始日期
    </label>
    <input type="date" class="searchDataStyle" id="searchTitelOrStartDate">
    <label class="searchTitelDate" for="searchTitelOrEndDate"> 结束日期</label>
    <input type="date" class="searchDataStyle" id="searchTitelOrEndDate">
    <label class="searchTitelDate" for="searchConditionSelect"> 搜索条件选择</label>
    <select name="" class="searchConditionSelect" id="searchConditionSelect">
        <option value="" selected="selected">请选择搜索条件</option>
        <option value="1111">1111111</option>
        <option value="2222">22222222222</option>
        <option value="3333">3333333</option>
        <option value="444">444444444</option>
        <option value="555">555555555</option>
        <option value="666">666666666件</option>
    </select>
    <input type="text" class="searchDataStyle searchInputStyle" placeholder="请输入搜索条件">
    <div class="conditionEndSearchStart">开始搜索</div>
</div>
-->

<!--添加新纪录-->
<a href="index.php?s=/super/WealthDetailed/appendNewMessageButton.html" class="appendNewMessageButton">
    添加新记录
</a>
<table>
    <tr>
        <th>收款账号</th>
        <th>收款人姓名</th>
        <th>汇款金额</th>
        <th>汇款银行</th>
        <th>汇款时间</th>
        <th>汇款人</th>
    </tr>
    <?php if(is_array($userArr)): foreach($userArr as $key=>$value): ?><tr>
        <td><?php echo ($value["receivables_account"]); ?></td>
        <td><?php echo ($value["receivables_username"]); ?></td>
        <td><?php echo ($value["remittance_money"]); ?></td>
        <td><?php echo ($value["remittance_bank"]); ?></td>
        <td><?php echo (date("Y-m-d H:i:s",$value["time"])); ?></td>
        <td><?php echo ($value["remittance_user"]); ?></td>

    </tr><?php endforeach; endif; ?>
	

</table>

<!--底部页面切换选项卡-->
<div class="bottomPageSelect">
    <?php echo ($pageshow); ?>
</div>

</body>
<script type="text/javascript" src="/mc/Public/js/commentT.js"></script>
</html>