<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台信息显示页面</title>
    <script type="text/javascript" src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/mc/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV-->
<div class="topSearchDiv">
    <form id="form_search" action="<?php echo U(MODULE_NAME.'/UserAdministration/administrationPage');?>" method="post">
        <label class="searchTitelDate" for="searchTitelOrStartDate">
            开始日期
        </label>
        <input type="date" class="searchDataStyle" name="start_time" id="searchTitelOrStartDate">
        <label class="searchTitelDate" for="searchTitelOrEndDate"> 结束日期</label>
        <input type="date" class="searchDataStyle" name="end_time" id="searchTitelOrEndDate">
        <label class="searchTitelDate" for="searchConditionSelect"> 搜索条件选择</label>
        <select name="condition" class="searchConditionSelect" id="searchConditionSelect">
            <option value="" selected="selected">请选择搜索条件</option>
            <option value="userid">会员编号</option>
            <option value="account">会员账号</option>
            <option value="username">会员姓名</option>
            <option value="identity_card">身份证</option>
            <option value="phone">手机号</option>
        </select>
        <input type="text" name="text" class="searchDataStyle searchInputStyle" placeholder="请输入搜索条件">
        <div class="conditionEndSearchStart"  onClick="test()">开始搜索</div>
		<div class="tableExportButton" >导出为EXCEL</div>
    </form>
</div>

<table id="export_table" >

    <tr>
        <th>会员编号</th>
        <th>会员姓名</th>
        <th>会员账号</th>
        <th>身份证号码</th>
        <th>手机号</th>
        <th>注册时间</th>
		<th>购车状态</th>
        <th>锁定状态</th>
		<th>所属代理</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($userArr)): foreach($userArr as $key=>$value): ?><tr>
        <td><?php echo ($value["userid"]); ?></td>
        <td><?php echo ($value["username"]); ?></td>
        <td><?php echo ($value["account"]); ?></td>
        <td><?php echo ($value["identity_card"]); ?></td>
        <td><?php echo ($value["phone"]); ?></td>
        <td><?php echo (date("Y-m-d H:i:s",$value["time"])); ?></td>
		<?php if($value["buycar_status"] == 0): ?><td>未购车</td>
		<?php else: ?>
			<td>已购车</td><?php endif; ?>
        <td>
            <?php if($value["lockuser"] == 0): ?><a href="<?php echo U(MODULE_NAME.'/UserAdministration/updatelockuser',array('userid'=>$value['userid']));?>" >未锁定</a><?php endif; ?>
            <?php if($value["lockuser"] == 1): ?><a href="<?php echo U(MODULE_NAME.'/UserAdministration/updatelockuser',array('userid'=>$value['userid']));?>" >未激活</a><?php endif; ?>
            <?php if($value["lockuser"] == 2): ?><a href="<?php echo U(MODULE_NAME.'/UserAdministration/updatelockuser',array('userid'=>$value['userid']));?>">冻结</a><?php endif; ?>
        </td>
		<td><?php echo ($value["daili_account"]); ?></td>
        <td>
            <a href="<?php echo U(MODULE_NAME.'/UserAdministration/enter_game',array('userid'=>$value['userid']));?>"  target="_blank">进入用户</a></br>
            <!--<a href="<?php echo U(MODULE_NAME.'/UserAdministration/deleteuser',array('userid'=>$value['userid']));?>" >删除用户</a></br>-->
            <a href="<?php echo U(MODULE_NAME.'/UserAdministration/updateUserDataPage',array('userid'=>$value['userid']));?>" >修改资料</a>
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
<script>
    function test()
    {
        document.getElementById("form_search").submit();
    }
	
</script>
</html>