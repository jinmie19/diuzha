<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"./views/home/mobile/auth/login.phtml";i:1555658506;}*/ ?>
<html lang="en" style="font-size: 53.3333px;"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
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
            <td align="center" class="title"><b>登录</b></td>
            <td class="head_right"></td>
        </tr>
    </tbody></table>
<!--     <div class="nav"><img src="/static/home/mobile/login/user.png" alt=""><span>未注册手机号请<a href="/home/auth/register.html" style="color: red;"><b>免费注册</b></a></span></div> -->
    <div class="logo"><img src="/static/home/mobile/login/img3.png" alt=""></div>
    <div class="test">
        <form id="login_form">
        <div class="phone">
            <img src="/static/home/mobile/login/phone.png" alt="">
            <input type="text" name="username" placeholder="请输入手机号" style="line-height: 300%;width: 80%">
        </div>

        <div class="code">
            <img src="/static/home/mobile/login/lock.png" alt="">
            <input type="password" name="password" placeholder="请输入密码" style="line-height: 300%;width:80%">
        </div>
        </form>
    </div>
    <div style="margin-top: 0px;margin-left: 100px;margin-bottom: 10px">
                <span><a href="/home/auth/register.html">免费注册</a></span> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span><a href="/home/auth/findpwd.html">忘记密码</a></span>
            </div>
    <a href="javascript:void(0);" onclick="binding()" class="login js-login">登录</a>
    </div>

        <script type="text/javascript">
            $(function () {
                //确认登陆
                $('.js-login').click(function () {
                    $.post(
                        window.location.href,
                        $('#login_form').serialize(),
                        function(res) {
                            $('.yzm img').click();
                            message(res.message,res.redirect,res.type);
                        },'json'
                    );
                });

                //回车登录
                $(document).keyup(function(event){
                    if(event.keyCode ==13){
                        $('.js-login').click();
                    }
                });
            });
        </script>

</body></html>