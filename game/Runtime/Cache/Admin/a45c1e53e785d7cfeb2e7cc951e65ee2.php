<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户资金冲减</title>
    <script type="text/javascript" src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/mc/Public/css/styleSheetT.css">
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


<table>
    <tr>
        <th>会员账号</th>
        <th>会员姓名</th>
		<th>分享积分</th>
        <th>报单币</th>
        <th>购车积分</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($userArr)): foreach($userArr as $key=>$value): ?><tr>
            <td><?php echo ($value["account"]); ?></td>
            <td><?php echo ($value["username"]); ?></td>
			<td><?php echo ($value["gold"]); ?></td>
            <td><?php echo ($value["report_money"]); ?></td>
            <td><?php echo ($value["buycar_money"]); ?></td>
            <td>
                <a href="<?php echo U(MODULE_NAME.'/WealthDetailed/userCapitalOffset_Rechange',array('id'=>$value['id']));?>">
                    修改用户财富
                </a>
            </td>
        </tr><?php endforeach; endif; ?>
	

</table>

<!--底部页面切换选项卡-->
<!--底部页面切换选项卡-->
<div class="bottomPageSelect">
    <?php echo ($pageshow); ?>
</div>
</body>
<script type="text/javascript" src="/mc/Public/js/commentT.js"></script>
</html>