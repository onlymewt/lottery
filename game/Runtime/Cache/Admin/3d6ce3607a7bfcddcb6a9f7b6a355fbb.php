<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>死点区域团队详情</title>
    <script type="text/javascript" src="/peoplecar/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/peoplecar/Public/css/styleSheetT.css">
</head>
<body>
<!--顶部搜索DIV-->
<div class="topSearchDiv">
    <form id="form_search" action="<?php echo U('Index/administrationPage');?>" method="post">
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
        <div class="conditionEndSearchStart" onClick="test()">开始搜索</div>
    </form>
</div>

<table>

    <tr>
        <th>成员名称</th>
        <th>成员账号</th>
        <th>加入日期</th>
    </tr>
    <?php if($groupInfo["one_id"] > 0): ?><tr>
            <td><?php echo ($groupInfo["one_username"]); ?></td>
            <td><?php echo ($groupInfo["one_account"]); ?></td>
            <td><?php echo (date("Y-m-d H:i:s",$groupInfo["one_time"])); ?></td>
        </tr><?php endif; ?>
    <?php if($groupInfo["two_id"] > 0): ?><tr>
            <td><?php echo ($groupInfo["two_username"]); ?></td>
            <td><?php echo ($groupInfo["two_account"]); ?></td>
            <td><?php echo (date("Y-m-d H:i:s",$groupInfo["two_time"])); ?></td>
        </tr><?php endif; ?>
    <?php if($groupInfo["three_id"] > 0): ?><tr>
            <td><?php echo ($groupInfo["three_username"]); ?></td>
            <td><?php echo ($groupInfo["three_account"]); ?></td>
            <td><?php echo (date("Y-m-d H:i:s",$groupInfo["three_time"])); ?></td>
        </tr><?php endif; ?>
    <?php if($groupInfo["four_id"] > 0): ?><tr>
            <td><?php echo ($groupInfo["four_username"]); ?></td>
            <td><?php echo ($groupInfo["four_account"]); ?></td>
            <td><?php echo (date("Y-m-d H:i:s",$groupInfo["four_time"])); ?></td>
        </tr><?php endif; ?>
    <?php if($groupInfo["five_id"] > 0): ?><tr>
            <td><?php echo ($groupInfo["five_username"]); ?></td>
            <td><?php echo ($groupInfo["five_account"]); ?></td>
            <td><?php echo (date("Y-m-d H:i:s",$groupInfo["five_time"])); ?></td>
        </tr><?php endif; ?>
    <?php if($groupInfo["six_id"] > 0): ?><tr>
            <td><?php echo ($groupInfo["six_username"]); ?></td>
            <td><?php echo ($groupInfo["six_account"]); ?></td>
            <td><?php echo (date("Y-m-d H:i:s",$groupInfo["six_time"])); ?></td>
        </tr><?php endif; ?>
</table>

<!--底部页面切换选项卡-->
<div class="bottomPageSelect">
    <?php echo ($pageshow); ?>
</div>
</body>
<script type="text/javascript" src="/peoplecar/Public/js/commentT.js"></script>
<script>
    function test() {
        document.getElementById("form_search").submit();
    }
</script>
</html>