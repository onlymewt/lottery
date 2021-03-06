<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>金品车翼购后台管理汇总页面</title>
    <script type="text/javascript" src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/mc/Public/js/commentT.js"></script>
    <link rel="stylesheet" href="/mc/Public/css/styleSheetT.css">

	<style>
		.contentTitelDiv{
			background: url("/mc/Public/image/systemTitle.jpg");
			background-size:100% 100%;
			background-position:center;
			background-repeat:no-repeat
		}
		 .leftControle{
		 	background: url("/mc/Public/image/systemTitle.jpg");
			background-size:100% 100%;
			background-position:center;
			background-repeat:no-repeat
		 }
	</style>
</head>
<body>
<!--后台管理首页内容显示DIV-->
<div class="contentDisplayDiv">
    <!--上方题头显示-->
    <div class="contentTitelDiv">
        <div class="titleMessage">
            金品车翼购后台管理
        </div>
        <div class="adminMessageDiv">
            <span class="welcomeDiv"><span class="welcome">欢迎：</span><span class="userName"><?php echo ($sp_username); ?></span></span>
            <span class="loginOut"><a href="<?php echo U(MODULE_NAME.'/Index/outlogin');?>">退出</a></span>
        </div>
    </div>
    <!--左侧显示控制列表-->
    <div class="leftControle">

        <div class="liDiv">
            <div class=" liTitle">会员管理功能</div>
            <ul class="ulDiv">
                <li class="testOne">会员列表</li>
                <!--<li class="testTwo">222222222222</li>-->
                <li class="userRecommendStructure">结构图</li>
                <li class="agentExamine">代理审核</li>
                <!--<li class="regionAgent">区域代理</li>-->
                <li class="buyCarApply">申请购车记录</li>
                <li class="deadAgent">死点区域</li>
            </ul>


        </div>
        <div class="liDiv">
            <div class=" liTitle">财富汇总明细</div>
            <ul class="ulDiv">
                <li class="userDetails">会员注册记录</li>
                <li class="userActivationDetails">会员激活记录</li>
                <li class="userChargeHistory">会员充值记录</li>
                <li class="userTransactionHistory">会员交易记录</li>
                <li class="userCapitalOffset">会员资金冲减</li>
                <li class="remittanceHistory">汇款登记管理</li>
                <li class="cashHistory">提现管理</li>
                <li class="bonusDetails">奖金明细</li>
				<!--<li class="freezeDetails">冻结记录</li>-->
            </ul>
        </div>
        <div class="liDiv">
            <div class=" liTitle">公告选项</div>
            <ul class="ulDiv">
                <li class="addNoticePage">添加公告</li>
                <li class="noticeListPage">公告列表</li>
                <li class="emailToUserPage">站内信息管理</li>
                <li class="emailToUserListPage">站内信息列表</li>
                <!--<li>全部会员列表</li>-->
                <!--<li>全部会员列表</li>-->
            </ul>
        </div>
        <div class="liDiv">
            <div class=" liTitle">参数概率</div>
            <ul class="ulDiv">
				<?php if($power == 1): ?><li class="functionValueReset">功能参数设置</li>
					<li class="operationLog">操作日志</li><?php endif; ?>
                <li class="helpDocument">帮助文档列表</li>
                <li class="addHelpDocument">添加帮助文档</li>
                <!--<li>全部会员列表</li>-->
                <!--<li>全部会员列表</li>-->
            </ul>
        </div>
		<?php if($power == 1): ?><div class="liDiv">
				<div class=" liTitle">后台管理</div>
				<ul class="ulDiv">
					<li class="websiteSwitch">网站开关</li>
					<!--<li>全部会员列表</li>-->
					<!--<li>全部会员列表</li>-->
					<!--<li>全部会员列表</li>-->
					<!--<li>全部会员列表</li>-->
					<!--<li>全部会员列表</li>-->
				</ul>
			</div>
			<div class="liDiv">
				<div class=" liTitle">管理员选项</div>
				<ul class="ulDiv">
					<li class="adminAppend">新增管理员</li>
					<li class="adminList">管理员列表</li>
				   <!-- <li class="adminActiveList">管理员操作记录</li>-->
					<!--<li>全部会员列表</li>-->
					<!--<li>全部会员列表</li>-->
					<!--<li>全部会员列表</li>-->
				</ul>
			</div><?php endif; ?>


    </div>
    <!--控制左侧控制列表收缩-->
    <div class="leftControDiv" id="controDiv"></div>
    <!--右方页面切换DIV-->
    <div class="rightPageChange">
        <iframe align="center" width="100%" height="100%" src="<?php echo U(MODULE_NAME.'/Index/gameNotice');?>"
                style="border: none;">

        </iframe>
    </div>

</div>


</body>
<script>

</script>

</html>