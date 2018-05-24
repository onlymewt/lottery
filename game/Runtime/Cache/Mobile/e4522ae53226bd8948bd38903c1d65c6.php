<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/mc/Public/css/copypagestyle.css">
    <link rel="stylesheet" href="/mc/Public/css/copypagestyle_PC.css" media="screen and (min-width:1000px)">
    <script src="/mc/Public/js/jquery-3.2.1.min.js"></script>
    <style>
    </style>
</head>
<body >
<div class="bodyPageWidth">
    <div class="pageTwoTitleDiv">

        <!--<div class="waibuyuanquan zuobiaopan">
            <div class="zhongxinxuxian"></div>
            <div class="neibuyuanquan">
                <div class="xuanzhuanzhongxin">
                    <div class="zhizhen">                </div>
                </div>
            </div>
        </div>
        <div class="waibuyuanquan youbiaopan">
            <div class="zhongxinxuxian"></div>
            <div class="neibuyuanquan">
                <div class="xuanzhuanzhongxin">
                    <div class="zhizhen"> </div>
                </div>
            </div>
        </div>-->
        <div class="pageTwoTitleDiv-Row">
            <div class="pageTwoTitleDiv-RowLeftDiv oneRowLeft" style="background-color: rgb(0, 193, 239);">
                <div class="pageTwoTitleDiv-RowTitle oneRowLeftSkew">分享积分</div>
                <div class="pageTwoTitleDiv-RowMessage oneRowLeftSkew"><?php echo ((isset($storeInfo["gold"]) && ($storeInfo["gold"] !== ""))?($storeInfo["gold"]):0); ?></div>
            </div>
            <div class="pageTwoTitleDiv-RowRightDiv oneRowRight" style="background-color: rgba(243, 157, 18, 0.98);">
                <div class="pageTwoTitleDiv-RowTitle oneRowRightSkew">报单积分</div>
                <div class="pageTwoTitleDiv-RowMessage oneRowRightSkew"><?php echo ((isset($storeInfo["report_money"]) && ($storeInfo["report_money"] !== ""))?($storeInfo["report_money"]):0); ?></div>
            </div>
        </div>
        <div class="pageTwoTitleDiv-Row">
            <div class="pageTwoTitleDiv-RowLeftDiv twoRowLeft" style="background-color:rgba(0, 167, 90, 0.98);">
                <div class="pageTwoTitleDiv-RowMessage twoRowLeftSkew"><?php echo ((isset($storeInfo["buycar_money"]) && ($storeInfo["buycar_money"] !== ""))?($storeInfo["buycar_money"]):0); ?></div>
                <div class="pageTwoTitleDiv-RowTitle twoRowLeftSkew">购车积分</div>
            </div>
            <div class="pageTwoTitleDiv-RowRightDiv twoRowRight" style="background-color: rgb(221, 74, 56);">
                <div class="pageTwoTitleDiv-RowMessage twoRowRightSkew"><?php echo ((isset($storeInfo["bonus"]) && ($storeInfo["bonus"] !== ""))?($storeInfo["bonus"]):0); ?></div>
                <div class="pageTwoTitleDiv-RowTitle twoRowRightSkew">积分累计</div>

            </div>
        </div>
       <!-- <div class="dongjiejine"> 在途积分 </div>
        <div class="dongjiejine_shuzi"> <?php echo ((isset($storeInfo["frozen_money"]) && ($storeInfo["frozen_money"] !== ""))?($storeInfo["frozen_money"]):0); ?> </div>-->
		<div class="dongjiejine"> 身份 </div>
        <div class="dongjiejine_shuzi"> 
			<?php if($userInfo["leve"] == 1): ?>平民
			<?php else: ?>
				代理<?php endif; ?>
		</div>
        <div class="shoujihao"><?php echo ($userInfo["account"]); ?></div>
        <div class="xingming"><?php echo ($userInfo["username"]); ?></div>
        <div class="shenfen"><?php echo ($userInfo["levename"]); ?></div>
    </div>
    <div class="body_control_functions">
        <div class="body_control_functions_div buyCarApply">
            <img src="/mc/Public/img/5.png" alt="" class="body_control_functions_divImageTitle">
            <div class="body_control_functions_divBottomTitle">购车申请</div>
        </div>
        <a href="<?php echo U('Usersettings/user_systemnotice');?>" class="body_control_functions_div">
            <img src="/mc/Public/img/2.png" alt="" class="body_control_functions_divImageTitle">
            <div class="body_control_functions_divBottomTitle">系统公告</div>
        </a>
        <a href="<?php echo U('Usersettings/user_privateemail');?>" class="body_control_functions_div">
            <img src="/mc/Public/img/4.png" alt="" class="body_control_functions_divImageTitle">
            <div class="body_control_functions_divBottomTitle">站内信件</div>
        </a>
        <div class="body_control_functions_div">
            <img src="/mc/Public/img/1.png" alt="" class="body_control_functions_divImageTitle">
            <div class="body_control_functions_divBottomTitle">退出登陆</div>
        </div>

    </div>

    <div class="">

        <div class="body_control_Div">
            <img src="/mc/Public/img/14.png" alt="" class="body_control_titleImage">
            <span class="body_control_message">团队管理</span>
            <div class="body_control_titleRight">
                <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
            </div>
        </div>
        <!--团队管理二级菜单-->
        <div class="body_control_selectDiv tuanduiguanli" style="margin:50px 0;display:none;">

            <!--<div class="body_control_Div listTwoColor" style="margin-top:0;">-->
                <!--<img src="/mc/Public/img/19.png" alt="" class="body_control_titleImage">-->
                <!--<span class="body_control_message">激活帐号</span>-->
                <!--<div class="body_control_titleRight">-->
                    <!--<img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">-->
                <!--</div>-->
            <!--</div>-->
            <a href="<?php echo U('teamcontrol/team_recommenddetailed');?>" class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/22.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">推荐列表</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
            <a href="<?php echo U('Datamodify/structure');?>" class="body_control_Div listTwoColor" style="margin-top:0;">
                <img src="/mc/Public/img/25.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">结构管理</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
        </div>
        <!--团队管理二级菜单   end-->


        <div class="body_control_Div" style="margin-top: 0;border-top:none;">
            <img src="/mc/Public/img/6.png" alt="" class="body_control_titleImage">
            <span class="body_control_message">业务管理</span>
            <div class="body_control_titleRight">
                <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
            </div>
        </div>

        <!--业务管理二级菜单-->
        <div class="body_control_selectDiv yewuguanli" style="margin:50px 0;display:none;">

            <a href="<?php echo U('Index/user_register');?>" class="body_control_Div listTwoColor" style="margin-top:0;">
                <img src="/mc/Public/img/10.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">注册会员</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
            <!--<a href="<?php echo U('servicemanagement/user_memberupgrade');?>" class="body_control_Div listTwoColor"-->
               <!--style="margin-top:0;">-->
                <!--<img src="/mc/Public/img/18.png" alt="" class="body_control_titleImage">-->
                <!--<span class="body_control_message">会员升级</span>-->
                <!--<div class="body_control_titleRight">-->
                    <!--<img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">-->
                <!--</div>-->
            <!--</a>-->
            <!--<a href="<?php echo U('servicemanagement/user_reportcenter');?>" class="body_control_Div listTwoColor"-->
               <!--style="margin-top:0;">-->
                <!--<img src="/mc/Public/img/26.png" alt="" class="body_control_titleImage">-->
                <!--<span class="body_control_message">报单中心</span>-->
                <!--<div class="body_control_titleRight">-->
                    <!--<img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">-->
                <!--</div>-->
            <!--</a>-->
			<a href="<?php echo U('servicemanagement/apply');?>" class="body_control_Div listTwoColor" style="margin-top:0;">
           <!-- <div class="body_control_Div listTwoColor" style="margin-top:0;">-->
                <img src="/mc/Public/img/15.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">申请报单中心</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
          <!--  </div>-->
			</a>
           <!-- <a href="<?php echo U('servicemanagement/user_provinceapply');?>" class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/26.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">省级代理申请</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
            <a href="<?php echo U('servicemanagement/user_cityapply');?>" class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/26.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">市级代理申请</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
            <a href="<?php echo U('servicemanagement/user_areaapply');?>" class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/26.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">区级代理申请</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>-->

        </div>
        <!--业务管理二级菜单   end-->
        <div class="body_control_Div" style="margin-top: 0;border-top:none;">
            <img src="/mc/Public/img/12.png" alt="" class="body_control_titleImage">
            <span class="body_control_message">财务管理</span>
            <div class="body_control_titleRight">
                <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
            </div>
        </div>

        <!--财务管理二级菜单-->
        <div class="body_control_selectDiv caiwuguanli" style="margin:50px 0;display:none;">

           <!-- <a href="<?php echo U('financemanagement/finance_bonusdetailed');?>" class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/21.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">奖金记录</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>-->
            <a href="<?php echo U('financemanagement/finance_detailed');?>" class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/8.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">资金明细</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
          <!--  <a href="<?php echo U('financemanagement/finance_fundconversion');?> " class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/23.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">资金转换</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>-->
           <!-- <a href="<?php echo U('financemanagement/finance_transfer');?> " class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/16.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">资金转账</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>-->
            <a href="<?php echo U('financemanagement/finance_withdrawals');?> " class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/11.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">资金提现</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
            <a href="<?php echo U('financemanagement/finance_withdrawalsHistory');?> " class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/16.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">提现记录</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
           <!-- <a href="<?php echo U('financemanagement/finance_charge');?> " class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/16.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">账户充值</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
            <a href="<?php echo U('financemanagement/finance_chargeHistory');?> " class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/16.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">充值记录</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>-->
            <a href="<?php echo U('financemanagement/finance_transaction');?> " class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/16.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">交易</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
            <a href="<?php echo U('financemanagement/finance_transactiondetailed');?> " class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/16.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">交易记录</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
			<!-- <a href="<?php echo U('financemanagement/finance_freeze');?> " class="body_control_Div listTwoColor"
               style="margin-top:0;">
                <img src="/mc/Public/img/16.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">冻结记录</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>-->
			
        </div>
		
        <!--财务管理二级菜单   end-->
        <div class="body_control_Div" style="margin-top: 0;border-top:none;">
            <img src="/mc/Public/img/17.png" alt="" class="body_control_titleImage">
            <span class="body_control_message">个人设置</span>
            <div class="body_control_titleRight">
                <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
            </div>
        </div>

        <!--个人设置二级菜单-->
        <div class="body_control_selectDiv gerenshezhi" style="margin:50px 0;display:none;">

            <a href="<?php echo U('Datamodify/user_message');?>" class="body_control_Div listTwoColor" style="margin-top:0;">
                <img src="/mc/Public/img/24.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">个人信息</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
            <a href="<?php echo U('Datamodify/user_bankmessage');?>" class="body_control_Div listTwoColor" style="margin-top:0;">
                <img src="/mc/Public/img/13.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">银行信息</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>
            <a href="<?php echo U('Datamodify/user_passwordchange');?>" class="body_control_Div listTwoColor" style="margin-top:0;">
                <img src="/mc/Public/img/27.png" alt="" class="body_control_titleImage">
                <span class="body_control_message">修改密码</span>
                <div class="body_control_titleRight">
                    <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
                </div>
            </a>

        </div>
        <!--个人设置二级菜单   end-->
		<!--帮助文档-->
		<a href="<?php echo U('Index/helpdocument');?>" class="body_control_Div">
            <img src="/mc/Public/img/14.png" alt="" class="body_control_titleImage">
            <span class="body_control_message">查看帮助</span>
            <div class="body_control_titleRight">
                <img src="/mc/Public/img/rightIcon.gif" alt="" class="body_control_bottomImage">
            </div>
        </a>
    </div>
    <div class="loginBottomMessage">
        <img src="/mc/Public/img/loginBottom.gif" alt="">
        联系在线客服
    </div>
</div>


<!--购车申请点击提醒-->
<div class="messagePrompt">
    <!--提示框题头-->
    <div class="messagePrompt_TitleDiv">
        提示
    </div>
    <!--提示信息-->
    <div class="messagePrompt_MessageDiv">
        sdfsfsdfsfsdsdf
    </div>
    <!--下方关闭按钮-->
    <div class="messagePrompt_ControlButton">
        确认
    </div>
    <div class="messagePrompt_ControlButton">
        取消
    </div>
</div>
</body>
<script>
    function pageReload() {
        location.reload()
    }
    addEventListener('resize', pageReload, false);
    $('.bodyPageWidth').css('height', $(window).outerHeight() + "px")

    document.getElementsByClassName('body_control_functions_div')[3].onclick = function () {
        location.href = "<?php echo U(MODULE_NAME.'/Regus/login');?>";
    }
</script>
<script>
    $(function () {

        var moveDeg_left = 100;
        var moveDeg_right = 70;
        $('.zuobiaopan .xuanzhuanzhongxin').css('transform', 'rotateZ(' + (moveDeg_left) + 'deg)')
        $('.youbiaopan .xuanzhuanzhongxin').css('transform', 'rotateZ(' + (moveDeg_right) + 'deg)')
        //点击呼出对应二级菜单
        $('.body_control_Div').click(function(){
            if($(this).next().css("display") == "none"){
                $('.body_control_Div').removeClass("body_control_Div_Click");
                $(this).addClass("body_control_Div_Click");
                $(this).next().slideDown();
            }else{
                $(this).next().slideUp();
            }
        });
        //500毫秒后加载动画
        setTimeout(function () {
            $('.pageTwoTitleDiv-RowLeftDiv').addClass('pageTwoTitleDiv-loadLeftMove');
            $('.pageTwoTitleDiv-RowRightDiv').addClass('pageTwoTitleDiv-loadRightMove');
        }, 500);
        //呼出提示窗方法
        function messageDivShow(message){
            $(".messagePrompt .messagePrompt_MessageDiv").text(message);
            $(".messagePrompt").fadeIn();
            $(".messagePrompt_ControlButton").click(function(){
                if($(this).index() == 2){
                    location.href ="<?php echo U('Index/applyCar');?>";
                    $(".messagePrompt").fadeOut();
                }else{
                    $(".messagePrompt").fadeOut();
                    return;
                }
            });
        }
        //点击购车申请呼出提示 方法
        $(".buyCarApply").click(function(){
            messageDivShow("是否发出提车申请？");
        });
    })

</script>
</html>