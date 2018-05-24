/**
 * Created by q8982 on 2018/4/12.
 */
$(function () {
    var getCode = true;
    var getCountTime = 10;
    var timecount;
    $('.joinus-getCode button').click(function (){
        if(getCode){
            getCode = false;
            timecount = setInterval(function (){
                if(getCountTime == 0){
                    clearInterval(timecount);
                    getCode = true;
                    getCountTime = 10;
                    $('.joinus-getCode button').text('获取验证码');
                    return false;
                }
                $('.joinus-getCode button').text(getCountTime-=1);
                console.log(getCountTime);
            },1000);
        }else{
            return false;
        }
    });

})

function register(){
    var account = $('#account').val();
    var username = $('#username').val();
    var mobile = $('#mobile').val();
    var password = $('#password').val();
    var passwordT = $('#passwordT').val();
    var paypassword = $('#paypassword').val();
    var paypasswordT = $('#paypasswordT').val();

    //判断信息是否填写完整
    if(account==""||username==""||mobile==""||password==""||passwordT==""||paypassword==""||paypasswordT==""){
        $("#message").html("请填写完整信息");
        $(".public-promptMessage").show();
    }

    //正则匹配账号是否为数字和字母
    var reg = /^[0-9a-zA-Z]+$/
    if(!reg.test(account)) {
        $("#message").html("账号只允许数字和字母");
        $(".public-promptMessage").show();
    }

    //正则验证手机号
    var ismobile=/^[1][3,4,5,6,7,8][0-9]{9}$/;
    if(!ismobile.test(mobile)){
        $("#message").html("请填写正确手机号");
        $(".public-promptMessage").show();
    }

    //ajax提交注册信息


}