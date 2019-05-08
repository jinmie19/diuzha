$(function () {
    //输入
    $(document).on("blur", ".ui-input-txt", function () {
        $(this).parent().removeClass("active")
    }).on("focus", ".ui-input-txt", function () {
        $(this).parent().addClass("active").siblings().removeClass("active")
    });
    //输入new
    $(document).on("blur", ".item-input input, .item-input textarea", function () {
        $(this).removeClass("input-focused");
        $(this).parent().parent().parent().removeClass("item-input-focused");
    }).on("focus", ".item-input input, .item-input textarea", function () {
        $(this).addClass("input-focused").siblings().removeClass("input-focused");
        $(this).parent().parent().parent().addClass("item-input-focused").siblings().removeClass("item-input-focused");
    });
    //按钮
    $(".ui-btn").hover(function () {
        $(this).addClass("btn-hover")
    }, function () {
        $(this).removeClass("btn-hover")
    });
    textarea_height();
    item_upload_photo();

    var isios = GetQueryString("isios");//获取传递的蚕食有没有isios
    //如果不是ios里面的app，并且不是安卓里面的app，并且不是uni里面的app，就展示头部
    if (getCookie("WapTaskCookie") == "" && !window.jianzhiku && !window.jianzhikugame && !Device.isWeixin && getCookie("uniapp") == "" && isios != "1") {
        $("section>header ,#app .view .page").prepend("<div class=\"navbar bg-color-theme no-shadow\"><div class=\"navbar-inner\"><div class=\"left\"><a href=\"#\" class=\"back link icon-only\"><i class=\"icon icon-back\"></i></a></div><div class=\"title\"></div><div class=\"right\"><a href=\"/next/user_admin\" class=\"link icon-only\"><i class=\"icon icon-user\"></i></a></div></div></div>");
        $("article").each(function (index, element) {
            var top = Math.round($(element).position().top) + $(".navbar").outerHeight(true);
            $(element).css("top", +top + "px")
        });
        //页面标题
        $(".navbar .navbar-inner .title").html(document.title.replace(" - 众人帮", ""));
        $('.navbar .left .back').on('click', function (e) {
            window.history.go(-1);
            return false;
        });
    }
    //判断是否是Android
    if (window.jianzhiku && window.jianzhiku.MyTitle) {
        window.jianzhiku.MyTitle(document.title.replace(" - 众人帮", ""))
    }
    //Android下防止键盘把当前输入框给挡住
    if (Device.isAndroid) {
        $('input[type="text"],input[type="password"],input[type="number"],textarea').on('click', function () {
            var target = this;
            setTimeout(function () {
                target.scrollIntoViewIfNeeded();
                console.log('scrollIntoViewIfNeeded');
            }, 400);
        });
    }
    //翻页刷新
    $("article").scroll(function () {
        var id = $(this).attr("id"); //获取对应article的id;
        var scrollTop = $(this).scrollTop(); //设置或获取位于对象最顶端和窗口中可见内容的最顶端之间的距离
        var scrollHeight = $("#" + id + " .scroller").height(); //获取对象的滚动高度。
        var windowHeight = $(this).height();
        if (scrollTop + windowHeight + 1 >= scrollHeight) {
            $(this).trigger("CustomRefresh");
        }
    })
});

//图片加载错误，重新加载
function imgerror(obj) {
    var urlimg = $(obj).prev().attr("src");
    var c = urlimg.substring(urlimg.length - 1, urlimg.length);
    if (c != "?" && isNaN(c)) {
        urlimg += "?";
    } else {
        var randomNum = Math.random() * 10;
        var num = parseInt(randomNum, 10);
        urlimg += num;
    }
    $(obj).prev().attr("src", urlimg);
}

//获取网址中的参数
function GetQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg); //search,查询？后面的参数，并匹配正则
    if (r != null) return unescape(r[2]);
    return null;
}

//正则汇总
//1到999正整数 ^\+?[1-9]\d{0,2}$
//大于4的整数 ^(([5-9])|([2-9]\d)|([1-9]\d{2,}))$
//只支持中文、字母、数字 ^[a-zA-Z0-9\u4e00-\u9fa5]+$
//大于零，小数点后保留2位 ^\d+(.\d{1,2})?$
//大于0.1小于999.99 ^[0-9]{1,3}(\.[1-9]{1,2})?$
//QQ号码 ^\d{5,12}$
//手机号码 ^1(3|4|5|7|8|9)\d{9}$

//textarea 高度自适应
function textarea_height() {
    function setHeight(element) {
        $(element).css({ 'height': 'auto', 'overflow-y': 'hidden' }).height(element.scrollHeight);
    }
    $('textarea').each(function () {
        setHeight(this);
    }).on('input', function () {
        setHeight(this);
    });
}
//item_upload_photo 上传图片区域
function item_upload_photo() {
    $(".item-upload-photo").css("height", parseInt($('.item-upload-photo').css('width')) + "px");
}
//必填
(function ($, undefined) {
    $.fn.isRequired = function () {
        var required;
        if (document.querySelector) {
            required = $(this).attr("required");
            if (required === undefined || required === false) {
                return undefined;
            }
            return "required";
        } else {
            // IE6, IE7
            var outer = $(this).get(0).outerHTML, part = outer.slice(0, outer.search(/\/?['"]?>(?![^<]*<['"])/));
            return /\srequired\b/.test(part) ? "required" : undefined;
        }
    };
})(jQuery);
//单选 item-radio <li><label>
function item_radio() {
    $(".ui-radio li").bind("click", function () {
        $(this).addClass("checked").siblings().removeClass("checked");
        //$(this).find("input[type='radio']").attr("checked", true);
        //$(this).find("input[type='radio']:checked").val();
    });
};
//多选 item-checkbox <li><label>
function item_checkbox() {
    
};
function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=")
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1
            c_end = document.cookie.indexOf(";", c_start)
            if (c_end == -1) c_end = document.cookie.length
            return unescape(document.cookie.substring(c_start, c_end))
        }
    }
    return ""
}

/*!
 * 设备信息
 * @version 1.0.0
 * @class Device
*/
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

//加载表
function GetTheChart(categoriesx, datay, namey) {
    var thetype = "line";
    var thedata = [{
        data: datay
    }]
    chart = new Highcharts.Chart({
        chart: {
            renderTo: 'container',
            type: "line",
            marginBottom: 25
        },
        title: {
            text: '',
            x: 20 //center
        },
        xAxis: {
            categories: categoriesx
        },
        yAxis: {
            title: {
                text: '',
                align: 'high',
                rotation: 0,
                y: 5
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            formatter: function () {
                return ' <b>' + this.y + '元 </b> ';
            }
        },
        legend: {
            layout: 'vertical',
            align: 'center',
            x: 0,
            y: 0,
            borderWidth: 0,
            enabled: false
        },
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        },
        series: thedata
    });
}


//上传图片
var upload_photo_show = {
    init: function () {
        this.eventBind();
    },
    eventBind: function () {
        var that = this;
        $(document).on("change", ".item-upload-photo input", function () {
            var object = this;
            var reader = new FileReader();
            reader.onload = function (e) {
                that.compress(this.result, object);
            };
            reader.readAsDataURL(this.files[0]);
        });
    },
    compress: function (res, object) {
        var that = this;
        var img = new Image(),
            maxH = 300;

        img.onload = function () {
            var cvs = document.createElement('canvas'),
                ctx = cvs.getContext('2d');

            if (img.height > maxH) {
                img.width *= maxH / img.height;
                img.height = maxH;
            }
            cvs.width = img.width;
            cvs.height = img.height;

            ctx.clearRect(0, 0, cvs.width, cvs.height);
            ctx.drawImage(img, 0, 0, img.width, img.height);
            var dataUrl = cvs.toDataURL();
            $(object).parent().css("background-image", "url(" + dataUrl + ")");
            var id = $(object).attr("id")
            $(object).trigger("addImg", id);
        };
        img.onerror = function () {
            alert("请选择正确格式的图片！");
            return false;
        }
        img.src = res;
    }
};

//上传图片
var demo_h5_upload_ops = {
    init: function () {
        this.eventBind();
    },
    eventBind: function () {
        var that = this;
        $(document).on("change", ".a-upload-icon input", function () {
            var object = this;
            var reader = new FileReader();
            reader.onload = function (e) {
                that.compress(this.result, object);
            };
            reader.readAsDataURL(this.files[0]);
        });
    },
    compress: function (res, object) {
        var that = this;
        var img = new Image(),
            maxH = 300;

        img.onload = function () {
            var cvs = document.createElement('canvas'),
                ctx = cvs.getContext('2d');

            if (img.height > maxH) {
                img.width *= maxH / img.height;
                img.height = maxH;
            }
            cvs.width = img.width;
            cvs.height = img.height;

            ctx.clearRect(0, 0, cvs.width, cvs.height);
            ctx.drawImage(img, 0, 0, img.width, img.height);
            var dataUrl = cvs.toDataURL();
            $(object).prev().prev().css("opacity", "0.4");
            $(object).parent().parent().css("background-image", "url(" + dataUrl + ")");
            $(object).parent().parent().css("background-size", "100% 100%");
            //document.documentElement.clientWidth
            if ($(object).parent().parent().parent().find("li").length == 1) {
                $(object).parent().parent().css("height", document.documentElement.clientWidth * 1.25);
            }
            var id = $(object).attr("id")
            $(object).trigger("addImg", id);
        };
        img.onerror = function () {
            alert("请选择正确格式的图片！");
            return false;
        }
        img.src = res;
    }
};