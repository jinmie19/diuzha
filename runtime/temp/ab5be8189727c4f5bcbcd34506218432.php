<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:38:"./views/home/mobile/auth/linkreg.phtml";i:1556089329;}*/ ?>
<html lang="zh-cmn-Hans" data-dpr="1" style="font-size: 45.1px;"><head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>送你钱，不抢就没了！</title>
    <meta name="format-detection" content="telephone=no, email=no, adress=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" src="//cdn2.jianzhiku.com/c/css/swiper.min.css">
    <style type="text/css">
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        html {
            -ms-text-size-adjust: none;
            -webkit-text-size-adjust: none;
            text-size-adjust: none;
        }

        body {
            font-family: Helvetica Neue,Helvetica,Hiragino Sans GB,Microsoft YaHei,Arial,sans-serif;
            background-color: #fff;
            line-height: 1.5;
            font-size: 14px;
            -webkit-overflow-scrolling: touch;
        }

        a {
            text-decoration: none;
        }

        img {
            display: block;
            max-width: 100%;
        }

        small {
            font-size: 75%;
        }

        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0px 2rem white inset;
        }

        .border-radius {
            -webkit-border-radius: 0.125rem;
            -moz-border-radius: 0.125rem;
            border-radius: 0.125rem;
        }

        .spread-earns-content {
            width: 10rem;
            margin: 0 auto;
        }

        .spread-earns-roll {
            width: 8rem;
            height: .8rem;
            border-radius: 5px;
            text-align: center;
            border: 2px solid #f73a41;
            overflow: hidden;
            position: absolute;
            top: 42%;
            left: 50%;
            margin-left: -4rem;
        }

            .spread-earns-roll p {
                font-size: .3733333333rem;
                font-family: PingFang-SC-Bold;
                color: #666;
                margin: 0;
                line-height: .8rem;
            }

        .spread-earns-bottom {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            position: relative;
            padding: 0 .3125rem .5rem;
            background-color: #f73a41;
            color: white;
            z-index: 1;
        }

        .spread-earns-input {
            display: block;
            display: -moz-box;
            display: -webkit-box;
            display: box;
            box-align: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            margin-bottom: 15px;
            background: #FFF;
            overflow: hidden;
        }

            .spread-earns-input .item-input {
                color: #333;
                background-color: transparent !important;
                border: none;
                padding: .35rem;
                display: block;
                -moz-box-flex: 1.0;
                -webkit-box-flex: 1.0;
                box-flex: 1.0;
                font-size: 16px;
                word-break: break-all;
                width: 100%;
                outline: none;
            }

        .spread-earns-button {
            width: 100%;
            margin: 15px auto;
            background-image: -webkit-gradient(linear,left top,right top,color-stop(2%,#feec00),to(#fec800));
            background-image: -webkit-linear-gradient(left,#feec00 2%,#fec800 100%);
            background-image: -moz-linear-gradient(left,#feec00 2%,#fec800 100%);
            background-image: -o-linear-gradient(left,#feec00 2%,#fec800 100%);
            background-image: linear-gradient(90deg,#feec00 2%,#fec800 100%);
            -webkit-border-radius: 100px;
            border-radius: 100px;
            font-family: PingFangSC-Regular;
            font-size: 18px;
            color: #f73a41;
            letter-spacing: 0;
            height: 1.2rem;
            line-height: 1.2rem;
            display: block;
            text-align: center;
            font-weight: bold;
            border: none;
        }

        .column-title {
            display: table;
            width: 100%;
            margin-bottom: 15px;
            white-space: nowrap;
            border-spacing: 10px 0;
        }

            .column-title:after, .column-title:before {
                display: table-cell;
                content: '';
                width: 50%;
                background: -webkit-linear-gradient(#999,#999) repeat-x left center;
                background: linear-gradient(#999,#999) repeat-x left center;
                background-size: 1px 1px;
                -webkit-transform: scaleY(.5);
                transform: scaleY(.5);
            }

        .sequence {
            clear: both;
            padding-left: 0;
            line-height: 22px;
        }

            .sequence li {
                display: list-item;
                list-style-type: decimal;
                margin: 0 0 0 20px;
            }
        /*弹框样式*/
        .cd-popup {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
            -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
            transition: opacity 0.3s 0s, visibility 0s 0.3s;
            z-index: 9999;
        }

            .cd-popup.is-visible {
                opacity: 1;
                visibility: visible;
                -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
                -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
                transition: opacity 0.3s 0s, visibility 0s 0s;
            }

        .cd-popup-container {
            position: absolute;
            width: 8rem;
            left: 50%;
            top: 15%;
            margin-left: -4rem;
            height: 250px;
            background: #FFF;
            border-radius: .2rem .2rem .2rem .2rem;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -ms-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
            -webkit-backface-visibility: hidden;
            -webkit-transition-property: -webkit-transform;
            -moz-transition-property: -moz-transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            -moz-transition-duration: 0.3s;
            -ms-transition-duration: 0.3s;
            -o-transition-duration: 0.3s;
            transition-duration: 0.3s;
        }

        .cd-popup-close {
            display: none;
        }

        .is-visible .cd-popup-container {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        .cd-buttons {
            position: relative;
            bottom: 2.6rem;
            margin: 0 1.6rem;
        }
    </style>
    <script type="text/javascript" src="https://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
</head>
<body style="font-size: 12px;">
<form action="/home/auth/registe" method="post" >
    <input type="hidden" id="getversion" name="getversion" value="zrb_20190423.apk">
    <div class="spread-earns-content">
        <div class="spread-earns-top" style="position:relative">
            <img src="http://cdn2.jianzhiku.com/C/img/spread_earns_top.png" width="100%" alt="拉好友一起赚钱">
            <div class="spread-earns-roll">
                <div id="share_begin" class="swiper-container swiper-container-vertical">
                    <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, -459px, 0px);"><p class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="18" style="height: 51px;">136***8500刚刚已领取13元现金红包</p>

                        <p class="swiper-slide" data-swiper-slide-index="0" style="height: 51px;">134***2112刚刚已领取14元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="1" style="height: 51px;">152***9283刚刚已领取23元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="2" style="height: 51px;">132***3484刚刚已领取13元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="3" style="height: 51px;">132***3484刚刚已领取19元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="4" style="height: 51px;">157***3051刚刚已领取17元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="5" style="height: 51px;">159***8614刚刚已领取19元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="6" style="height: 51px;">159***8344刚刚已领取10元现金红包</p>
                        <p class="swiper-slide swiper-slide-prev" data-swiper-slide-index="7" style="height: 51px;">135***4212刚刚已领取17元现金红包</p>
                        <p class="swiper-slide swiper-slide-active" data-swiper-slide-index="8" style="height: 51px;">152***5923刚刚已领取28元现金红包</p>
                        <p class="swiper-slide swiper-slide-next" data-swiper-slide-index="9" style="height: 51px;">137***3823刚刚已领取15元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="10" style="height: 51px;">159***4410刚刚已领取10元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="11" style="height: 51px;">134***6741刚刚已领取10元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="12" style="height: 51px;">152***5102刚刚已领取23元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="13" style="height: 51px;">159***3935刚刚已领取16元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="14" style="height: 51px;">183***0799刚刚已领取18元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="15" style="height: 51px;">150***5872刚刚已领取29元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="16" style="height: 51px;">150***9871刚刚已领取29元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="17" style="height: 51px;">152***2921刚刚已领取15元现金红包</p>
                        <p class="swiper-slide" data-swiper-slide-index="18" style="height: 51px;">136***8500刚刚已领取13元现金红包</p>
                    <p class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="height: 51px;">134***2112刚刚已领取14元现金红包</p></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
        <div class="spread-earns-bottom">
            <input type="hidden" id="index" name="index" value="index2">
            <label class="spread-earns-input border-radius">
                <input type="text" name="txtaccount" id="txtaccount" class="item-input" title="手机号码格式不正确" placeholder="11位手机号" maxlength="11" required="">
            </label>
            <label class="spread-earns-input border-radius">
                <input type="text" name="txtcode" id="txtcode" class="item-input" placeholder="请输入短信验证码" maxlength="6" required="">
                <input type="button" id="codebtn" value="获取验证码" style="background:transparent;height:.9812rem;width:2.5rem;border:none;font-size:14px;color:#0091EA" onclick="getvalidate()">
            </label>
            <label class="spread-earns-input border-radius">
                <input type="password" name="txtpwd" id="txtpwd" class="item-input" placeholder="请设置登录密码(6-23位数字及字母)" maxlength="23" required="">
            </label>
            <input type="hidden" id="indroid" name="indroid" value="-2983911">
            <input type="hidden" name="member" value="<?php echo $member; ?>">
            <input type="submit" id="submit_btn" value="注册领取1元红包" class="spread-earns-button">

            <div class="column-title">领取细则</div>
            <ol class="sequence spread-earns-popup">
                <li>红包仅限未注册过“众人帮”的新用户领取。</li>
                <li>每个用户仅限领取一次。</li>
                <li>众人帮严厉打击一人多账户，核查到将封号扣款。</li>
            </ol>
            <p style="text-align:center"><small>Copyright © 2013-2018 众人帮</small></p>
        </div>
    </div></form>
    <!--弹框-->
    
    <script src="//cdn2.jianzhiku.com/c/js/swiper.min.js"></script>

    <script type="text/javascript">
        $(function () {
            //跑马灯
            var mySwiper = new Swiper('.swiper-container', {
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },
                direction: 'vertical',
                slidesPerView: 1,
                loop: true,
                speed: 600,
                height: $('.spread-earns-roll').height(),
            });
            //提交表单

            ////打开窗口
            //$('.spread-earns-popup').on('click', function (event) {
            //    event.preventDefault();
            //    $('.cd-popup').addClass('is-visible');
            //});
            ////关闭窗口
            //$('.cd-popup').on('click', function (event) {
            //    if ($(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup')) {
            //        event.preventDefault();
            //        $(this).removeClass('is-visible');
            //    }
            //});
            //ESC关闭
            //$(document).keyup(function (event) {
            //    if (event.which == '27') {
            //        $('.cd-popup').removeClass('is-visible');
            //    }
            //});
            //下载地址
            $("a.download_apk").click(function () {

                var tempdownfile = 'c/zrb_20190423.apk';
                if (Device.isWeixin) {
                    location.href = "http://a.app.qq.com/o/simple.jsp?pkgname=com.jianzhiku.zhongrenbang";
                } else if (Device.isIos || Device.isIPhone || Device.isIPad) {
                    location.href = "http://wx.zhongrenbang.net/earn/down";
                } else if (Device.isAlipay) {
                    location.href = "http://zhongrenbang.oss-cn-hangzhou.aliyuncs.com/" + tempdownfile;
                } else {
                    location.href = "http://cdn2.jianzhiku.com/" + tempdownfile;
                }
                return false;
            });
        });
        //获取验证码
        var canfa = true;
        function getvalidate() {
            if (!canfa) {
                return;
            }
            var mobile = $("#txtaccount").val();
            if (mobile.length < 1) {
                alert("请填写常用手机号码");
                return false;
            }
            if (!mobile.match(/^0{0,1}1\d{10}$/)) {
                alert("手机号码格式不正确");
                return false;
            }
            $.ajax({
            //几个参数需要注意一下
                type: "POST",//方法类型
                dataType: "json",//预期服务器返回的数据类型
                url: "/home/register/sendsmscode" ,//url   /home/register/sendsmscode
                data: {"mobile":mobile},
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
            $("#codebtn").removeAttr("disabled");
            $("#codebtn").val("获取短信验证");
            wait = 60;
        }else {
            $("#codebtn").attr("disabled","true");
            $("#codebtn").val(wait+"秒后重试");
            wait--;
            setTimeout(function() {     //倒计时方法
                time(obj);
            },1000);    //间隔为1s
        }
    }

        (function (win, lib) {
            var doc = win.document;
            var docEl = doc.documentElement;
            var metaEl = doc.querySelector('meta[name="viewport"]');
            var flexibleEl = doc.querySelector('meta[name="flexible"]');
            var dpr = 0;
            var scale = 0;
            var tid;
            var flexible = lib.flexible || (lib.flexible = {});

            if (metaEl) {
                console.warn('将根据已有的meta标签来设置缩放比例');
                var match = metaEl.getAttribute('content').match(/initial\-scale=([\d\.]+)/);
                if (match) {
                    scale = parseFloat(match[1]);
                    dpr = parseInt(1 / scale);
                }
            } else if (flexibleEl) {
                var content = flexibleEl.getAttribute('content');
                if (content) {
                    var initialDpr = content.match(/initial\-dpr=([\d\.]+)/);
                    var maximumDpr = content.match(/maximum\-dpr=([\d\.]+)/);
                    if (initialDpr) {
                        dpr = parseFloat(initialDpr[1]);
                        scale = parseFloat((1 / dpr).toFixed(2));
                    }
                    if (maximumDpr) {
                        dpr = parseFloat(maximumDpr[1]);
                        scale = parseFloat((1 / dpr).toFixed(2));
                    }
                }
            }
            if (!dpr && !scale) {
                var isAndroid = win.navigator.appVersion.match(/android/gi);
                var isIPhone = win.navigator.appVersion.match(/iphone/gi);
                var devicePixelRatio = win.devicePixelRatio;
                if (isIPhone) {
                    // iOS下，对于2和3的屏，用2倍的方案，其余的用1倍方案
                    if (devicePixelRatio >= 3 && (!dpr || dpr >= 3)) {
                        dpr = 3;
                    } else if (devicePixelRatio >= 2 && (!dpr || dpr >= 2)) {
                        dpr = 2;
                    } else {
                        dpr = 1;
                    }
                } else {
                    // 其他设备下，仍旧使用1倍的方案
                    dpr = 1;
                }
                scale = 1 / dpr;
            }
            docEl.setAttribute('data-dpr', dpr);
            if (!metaEl) {
                metaEl = doc.createElement('meta');
                metaEl.setAttribute('name', 'viewport');
                metaEl.setAttribute('content', 'initial-scale=' + scale + ', maximum-scale=' + scale + ', minimum-scale=' + scale + ', user-scalable=no');
                if (docEl.firstElementChild) {
                    docEl.firstElementChild.appendChild(metaEl);
                } else {
                    var wrap = doc.createElement('div');
                    wrap.appendChild(metaEl);
                    doc.write(wrap.innerHTML);
                }
            }
            function refreshRem() {
                var width = docEl.getBoundingClientRect().width;
                if (width / dpr > 640) {
                    width = 640 * dpr;
                }
                var rem = width / 10;
                docEl.style.fontSize = rem + 'px';
                flexible.rem = win.rem = rem;
            }
            win.addEventListener('resize', function () {
                clearTimeout(tid);
                tid = setTimeout(refreshRem, 300);
            }, false);
            win.addEventListener('pageshow', function (e) {
                if (e.persisted) {
                    clearTimeout(tid);
                    tid = setTimeout(refreshRem, 300);
                }
            }, false);
            if (doc.readyState === 'complete') {
                doc.body.style.fontSize = 12 * dpr + 'px';
            } else {
                doc.addEventListener('DOMContentLoaded', function (e) {
                    doc.body.style.fontSize = 12 * dpr + 'px';
                }, false);
            }
            refreshRem();

            flexible.dpr = win.dpr = dpr;
            flexible.refreshRem = refreshRem;
            flexible.rem2px = function (d) {
                var val = parseFloat(d) * this.rem;
                if (typeof d === 'string' && d.match(/rem$/)) {
                    val += 'px';
                }
                return val;
            }
            flexible.px2rem = function (d) {
                var val = parseFloat(d) / this.rem;
                if (typeof d === 'string' && d.match(/px$/)) {
                    val += 'rem';
                }
                return val;
            }
        })(window, window['lib'] || (window['lib'] = {}));

        (function (window, document, undefined) {
            window.Device = function () {
                var u = navigator.userAgent, app = navigator.appVersion;
                var ua = window.navigator.userAgent.toLowerCase();
                function isPc() {
                    var userAgentInfo = navigator.userAgent;
                    var agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
                    var flag = true;
                    for (var i = 0; i < agents.length; i++) {
                        if (u.indexOf(agents[i]) > 0) {
                            flag = false; break;
                        }
                    }
                    return flag;
                }
                return {
                    //四大内核
                    isTrident: u.indexOf('Trident') > -1,
                    isPresto: u.indexOf('Presto') > -1,
                    isWebKit: u.indexOf('AppleWebKit') > -1,
                    isGecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,
                    //设备判断
                    isMobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                    isIPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                    isIPad: u.indexOf('iPad') > -1, //是否iPad
                    isWebApp: u.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部
                    isPc: isPc(),//是否是PC端
                    //平台判断
                    isAndroid: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                    isIos: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),//ios终端
                    isWebview: u.toLowerCase().indexOf("webview") > -1,
                    //应用程序判断
                    isWeixin: app.toLowerCase().indexOf("micromessenger") > -1,//判断是否是微信
                    isUC: app.toLowerCase().indexOf("ucbrowser") > -1,//判断是否是UC
                    isQQ: app.toLowerCase().indexOf("mqqbrowser") > -1,//判断是否是QQ
                    isAlipay: ua.match(/AlipayClient/i) == "alipayclient",//判断是否是支付宝
                    language: (navigator.browserLanguage || navigator.language).toLowerCase(),
                    userAgent: u,
                    appVersion: app,
                    isOnline: window.navigator.online,
                    isExmobi: app.toLowerCase().indexOf("exmobi") > -1//判断是否是Exmobi
                }
            }();
        })(window, document, undefined);
    </script>
    <div style="display:none"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253252559'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/stat.php%3Fid%3D1253252559' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1253252559"><a href="https://www.cnzz.com/stat/website.php?web_id=1253252559" target="_blank" title="站长统计">站长统计</a></span><script src=" http://s5.cnzz.com/stat.php?id=1253252559" type="text/javascript"></script><script src="http://c.cnzz.com/core.php?web_id=1253252559&amp;t=z" charset="utf-8" type="text/javascript"></script></div>;


</body></html>