<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:39:"./views/home/mobile/auth/register.phtml";i:1555658961;}*/ ?>
<html lang="en" style="font-size: 53.3333px;"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="/static/home/mobile/css/login.css">
        <script type="text/javascript" src="/static/home/mobile/js/jquery.min.js"></script>
    <!-- 弹出层 -->
    <link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
    <script src="/static/plugins/dialog/lib/zepto.min.js"></script>
    <script src="/static/plugins/dialog/js/dialog.js"></script>
    <!-- 弹出层 -->
    <script type="text/javascript" src="/static/home/mobile/js/global.js"></script>
<style type="text/css">
.disable {
    pointer-events: none;
}

</style>
</head>

<body>
    <table class="head" cellpadding="0" cellspacing="0">
        <tbody><tr>
            <td class="head_left">
                <a href="javascript:history.back();">
                    <img src="/static/home/mobile/login/back.png">
                </a>
            </td>
            <td align="center" class="title"><b>注册</b></td>
            <td class="head_right"></td>
        </tr>
    </tbody></table>
    <div class="logo"><img src="/static/home/mobile/login/img3.png" alt=""></div>
    <div class="test">
        <form id="register_form">
        <div class="phone">
            <img src="/static/home/mobile/login/phone.png" alt="">
            <input type="text" name="username" placeholder="请输入手机号" id='phones' style="line-height: 300%;width:80%">
        </div>
         <div class="code" style="border-bottom-left-radius:0;border-bottom-right-radius:0;margin-bottom:0;">
            <img src="/static/home/mobile/login/lock.png" alt="">
            <input type="text" name="captcha" placeholder="请输入验证码" style="line-height: 300%;width:40%">
            <div class="again" style="background-color: #ffffff;height: 90%">
                <input type="button" value="获取短信验证" style="width:100%;height: 60%;margin-top: 10px;border-radius: 10px;border:0;border-bottom: 1px;background-color: #3cb33c;color:#ffffff" onclick="javascript:getmessage()" id="getCode">
            </div>
        </div>
         <div class="phone" style="border-top-left-radius:0;border-top-right-radius:0;margin-bottom:0;">
            <img src="/static/home/mobile/login/lock.png" alt="">
            <input type="password" name="password" placeholder="请输入密码" style="line-height: 300%;width:80%">
        </div>
         <div class="code" style="border-top-left-radius:0;border-top-right-radius:0;margin-bottom:0;"><img src="/static/home/mobile/login/lock.png" alt="">
            <input type="password" name="password_confirm" placeholder="请确认密码" style="line-height: 300%;width:80%">
        </div>
        </form>
    </div>
        <div style="margin-top: 0px;margin-left: 50%;margin-bottom: 10px">
                <span>已有账号?请 <a href="/home/auth/login.html">登录</a></span>
            </div>
    <a href="javascript:void(0);" onclick="binding()" class="login js-register">登录</a>
    </div>
    <script type="text/javascript">
        function getmessage(){
            var phone = $("#phones").val();
             if(!(/^1[34578]\d{9}$/.test(phone))){ 
                    alert("手机号码有误，请重填");  
                    return false; 
                } 
                $("#getCode").removeAttr("disabled");
            $.ajax({
            //几个参数需要注意一下
                type: "POST",//方法类型
                dataType: "json",//预期服务器返回的数据类型
                url: "/home/register/sendsmscode" ,//url   /home/register/sendsmscode
                data: {"mobile":phone},
                success: function (result) {
                    console.log(result);//打印服务端返回的数据(调试用)
                    if (result.type == 'success') {
                          alert("验证码发送成功，收到后请输入验证码");
                        time(this);
                    } else {
                        alert("验证码发送失败");
                    }
                },
                error : function() {
                    alert("异常！");
                }
            });
        }


         var wait = 60;
    function time(obj) {
        if(wait==0) {
            $("#getCode").removeAttr("disabled");
            $("#getCode").val("获取短信验证");
            wait = 60;
        }else {
            $("#getCode").attr("disabled","true");
            $("#getCode").val(wait+"秒后重试");
            wait--;
            setTimeout(function() {     //倒计时方法
                time(obj);
            },1000);    //间隔为1s
        }
    }
    </script>

            <script type="text/javascript">
        $(function () {
            //确认注册
            $('.js-register').click(function () {
                $.post(
                    window.location.href,
                    $('#register_form').serialize(),
                    function(res) {
                        $('.yzm img').click();
                        message(res.message,res.redirect,res.type);
                    },'json'
                );
            });

            //回车登录
            $(document).keyup(function(event){
                if(event.keyCode ==13){
                    $('.js-register').click();
                }
            });
        });
    </script>

</body></html>