<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户提现记录</title>
    <script type="text/javascript" src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/mc/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV-->
<div class="topSearchDiv" >
    <!--<label class="searchTitelDate" for="searchTitelOrStartDate">
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
    <div class="conditionEndSearchStart">开始搜索</div>-->
	
	<input type="button" value="导出为EXCEL" class="tableExportButton">
</div>

<table id="export_table">
    <tr>
        <th>提现账号</th>
        <th>账号姓名</th>
        <th>银行卡姓名</th>
        <th>银行卡号</th>
        <th>开户地址</th>
        <th>提现金额</th>
		<th>手续费</th>
        <th>提现种类</th>
        <th>提现时间</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($userArr)): foreach($userArr as $key=>$value): ?><tr>
        <td><?php echo ($value["account"]); ?></td>
        <td><?php echo ($value["username"]); ?></td>
        <td><?php echo ($value["bank_name"]); ?></td>
        <td><?php echo ($value["bank_card"]); ?></td>
        <td><?php echo ($value["bank_address"]); ?></td>
        <td><?php echo ($value["money"]); ?></td>
		<td><?php echo ($value["charge"]); ?></td>
        <td><?php echo ($value["reason"]); ?></td>
        <td><?php echo (date("Y-m-d H:i:s",$value["time"])); ?></td>
        <td>
			<?php if($value["status"] == 0): ?><a href="<?php echo U(MODULE_NAME.'/WealthDetailed/updateCash',array('id'=>$value['id']));?>"> 申请中</a>
                <?php else: ?>
                    已打款<?php endif; ?>
		</td>
    </tr><?php endforeach; endif; ?>
	

</table>

<!--底部页面切换选项卡-->
<div class="bottomPageSelect">
    <?php echo ($pageshow); ?>
</div>
</body>
<script type="text/javascript" src="/mc/Public/js/commentT.js"></script>
<script type="text/javascript" src="/mc/Public/js/tableExport.js"></script>
</html>