<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>区域代理</title>
    <script type="text/javascript" src="/Public/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/Public/css/styleSheetT.css">
    <style>
        .tableListDiv{
            height: 83%;
            overflow: auto;
        }
    </style>
</head>
<body>
<!--顶部搜索DIV 删除  如有需要可从用户列表页面复制-->

<!--显示列表切换选线DIV-->
<div class="topTableSelectDiv">
    <div class="tableSelectButton">
        省级代理
    </div>
    <div class="tableSelectButton">
        市级代理
    </div>
    <div class="tableSelectButton">
        区级代理
    </div>
</div>

<!---->
<div class="tableListDiv">
    <table >

        <tr>
            <th>代理名称</th>
            <th>代理账号</th>
            <th>代理区域</th>
            <th>代理区域内人数</th>
            <th>代理区域内总资金</th>
            <th>奖励总数</th>
        </tr>
        <?php if(is_array($provinceArr)): foreach($provinceArr as $key=>$value): ?><tr>
                <td><?php echo ($value["username"]); ?></td>
                <td><?php echo ($value["account"]); ?></td>
                <td><?php echo ($value["province"]); ?></td>
                <td><?php echo ($value["userSum"]); ?></td>
                <td><?php echo ($value["buycar_money_sum"]); ?></td>
                <td><?php echo ($value["rewards"]); ?></td>
            </tr><?php endforeach; endif; ?>
        <!--底部页面切换选项卡-->
        <!--<div class="bottomPageSelect">-->
            <!--<?php echo ($province_pageshow); ?>-->
        <!--</div>-->
    </table>
</div>
<!---->
<div class="tableListDiv" style="display:none;">
    <table  >

        <tr>
            <th>代理名称</th>
            <th>代理账号</th>
            <th>代理区域</th>
            <th>代理区域内人数</th>
            <th>代理区域内总资金</th>
            <th>奖励总数</th>
        </tr>
        <?php if(is_array($cityArr)): foreach($cityArr as $key=>$value): ?><tr>
                <td><?php echo ($value["username"]); ?></td>
                <td><?php echo ($value["account"]); ?></td>
                <td><?php echo ($value["province"]); echo ($value["city"]); ?></td>
                <td><?php echo ($value["userSum"]); ?></td>
                <td><?php echo ($value["buycar_money_sum"]); ?></td>
                <td><?php echo ($value["rewards"]); ?></td>
            </tr><?php endforeach; endif; ?>
        <!--<div class="bottomPageSelect">-->
            <!--<?php echo ($city_pageshow); ?>-->
        <!--</div>-->
    </table>
</div>
<!---->
<div class="tableListDiv" style="display:none;">
    <table >

        <tr>
            <th>代理名称</th>
            <th>代理账号</th>
            <th>代理区域</th>
            <th>代理区域内人数</th>
            <th>代理区域内总资金</th>
            <th>奖励总数</th>
        </tr>
        <?php if(is_array($areaArr)): foreach($areaArr as $key=>$value): ?><tr>
                <td><?php echo ($value["username"]); ?></td>
                <td><?php echo ($value["account"]); ?></td>
                <td><?php echo ($value["province"]); echo ($value["city"]); echo ($value["area"]); ?></td>
                <td><?php echo ($value["userSum"]); ?></td>
                <td><?php echo ($value["buycar_money_sum"]); ?></td>
                <td><?php echo ($value["rewards"]); ?></td>
            </tr><?php endforeach; endif; ?>
        <!--<div class="bottomPageSelect">-->
            <!--<?php echo ($area_pageshow); ?>-->
        <!--</div>-->
    </table>
</div>




<!--底部页面切换选项卡-->
<div class="bottomPageSelect">
    <?php echo ($pageshow); ?>
</div>
</body>
<script type="text/javascript" src="/Public/js/commentT.js"></script>
<script>
    function test() {
        document.getElementById("form_search").submit();
    }
</script>
</html>