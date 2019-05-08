function okalert(str) {
    if (iswww) alert(str);
    else phonealert(str);
}

$(function () {
    try {
        var s = window.jianzhiku.getversion();
        versioncode = s;
    } catch (e) {
        iswww = true;
    }
    if (window.jianzhiku) {
        window.jianzhiku.MyTitle("发布/管理悬赏");
    }
    if (versioncode != 0 && versioncode < 72) {
        alert("您的APP版本过低，请升级到最新版本")
        location.href = "/earn/Down?id=72";
    }
});

function opentg(earnid)
{
    var url = "/earn/TgEarn?earnid="+earnid;
    if(iswww) url+= "&iswww=1";
    location.href = url;
}

function search(zrb_id, select) {
    if (zrb_id == "") {
        alert("请输入搜索内容");
        return false;
    }
    if (select == 5) {
        location.href = "/earn/missiontype?status=biaoti&words=" + zrb_id;
    }
    else {
        location.href = "/earn/wap_taskexaminelist?type=1&earnid=" + zrb_id;
    }
}

function openmanage(sts) {
    location.href = "/earn/MissionType?status=" + sts;
}

function missionactionbase(a, action, reload) {
    $.post("/earn/ThirdTastJson", { "action": action, "id": a }, function (data, s1) {
        if (data == null) {
            okalert("长时间未操作，登录状态已过期")
        } else {
            okalert(data.msg);
            if (reload) location.href = location.href.replace(/#index_section/, "");;
        }
    });
}
function missionaction(a, action) { missionactionbase(a, action, true); }
function missioncopy(a) {
    $.ajax({
        type: "post",
        url: "/api/EarnPhone/DailyTaskCount",
        contentType: 'application/json',
        data: JSON.stringify(""),
        success: function (data) {
            if (data.code != 200) {
                alert(data.msg);
            }
            else {
                missionactionbase(a, "copy", true);
            }
        }
    });
}
function missiondel(a) {
    if (confirm('删除后不可恢复，是否确认')) missionactionbase(a, "del", true);
}
function missionstart(a) {
    missionaction(a, "missionstart");
}
function missionfinish(b, a, status, baomingcount, hours) {
    if (baomingcount) {
        alert("您还有" + baomingcount + "个用户已报名未提交，请先暂停，等待提交期满后(最长" + hours + "小时)再结束");
        return;
    }
    if (status == -98) {
        if (iswww) {
            location.href = "/earn/Wap_FinishAgain?earnid=" + a;
        }
        else {
            window.jianzhiku.startactivity('com.jianzhiku.activity.ExamineShuomingActivity', '[{key:\'earnid\',value:\'' + a + '\'},{key:\'msg\',value:\'该悬赏审核失败率过高，请提交该悬赏后台截图\'}]');
        }
    }
    else {
        if (confirm('提交结算申请后，请等待管理员核查（根据该悬赏审核情况最多需要3个工作日），核查通过后，返还未完成的赏金至悬赏主余额。')) {
            $(b).parent().hide();
            missionaction(a, "finish");
        }
    }
}

function missionstop(a) {
    missionaction(a, "stop");
}
function exporttext(a) {
    if (iswww) {
        //导出文字  还有发红包
        //如何处理
    }
    else {
        window.jianzhiku.exporttext(a);
    }
}
function exportimg(a) {
    if (iswww)
    { }
    else
    {
        window.jianzhiku.exporttext(a);
    }
}
function addcounts(a, b, c,count) {
    var x = prompt("输入想要增加的人数", "");
    if (x == null) return;
    var reg = /^\+?[1-9][0-9]*$/;//非零正整数
    if (!reg.test(x)) {
        alert("请输入正整数!");
        //addcounts(a, b, c,count);
        return;
    }
    x = Number(x);
    var counts = parseInt(x);
    if (counts <= 0) {
        alert("名额必须大于0");
        //addcounts(a, b, c,count);
        return;
    }
    if (count+counts > 9999) {
        alert("为减轻系统压力，总名额不能大于9999，请少量增加或结算退款重新发布");
        return;
    }


    $.ajax({
        type: "post",
        url: "/api/User/IsBlackUser",
        contentType: 'application/json',
        data: JSON.stringify({}),
        success: function (data) {
            if (data.code == 200 && data.isblack == 1)//黑名单用户不能加名额
            {
                alert("由于" + data.msg + "，禁止增加名额");
                return;
            }
            if (iswww)//网页
            {
                BaseAddCounts(b, counts, c);
            }
            else//app
            {
                if (versioncode >= 57) {
                    window.jianzhiku.paytaskbill('6', counts * c, b, counts);
                }
            }
        }
    });
}

function BaseAddCounts(b, counts, c) {
    zhifu(b, counts, c * 100 * counts);
}

function zhifu(tptid, counts, themoney) {
    var date_zhifu = {
        themoney: themoney,
        usermoney: usermoney
    };
    var $popup = A.popup({
        html: template('zhifu', date_zhifu),
        pos: 'bottom',
        isBlock: true
    });
    $popup.popup.find('#zhifubao').on(A.options.clickEvent, function () {
        A.showMask();
        var checkbox = $(this).parent().find("input").is(':checked');
        var usebalance = checkbox ? 1 : 0;
        $.post("/phone/Earn_Pay3", { "type": 6, "id": tptid, "subtype": counts, "usebalance": usebalance }, function (data) {
            if (data.code == 200) {
                $("#zhifu_html").html(data.msg);
            } else {
                alert(data.msg);
                A.hideMask();
            }
        })
    });
    $popup.popup.find('#weixin').on(A.options.clickEvent, function () {
        A.showMask();
        var checkbox = $(this).parent().find("input").is(':checked');
        var pay_type = checkbox ? 1 : 0;
        var device = Device.isPc ? 2 : 1;
        location.href = "/wx/wxpay?type=6&id=" + tptid + "&subtype=" + counts + "&usebalance=" + pay_type + "&device=" + device;
    });
    $popup.popup.find('#yue').on(A.options.clickEvent, function () {
        A.showMask();
        $.ajax({
            type: "post",
            url: "/api/EarnPhone/PayEarnCounts",
            contentType: 'application/json',
            data: JSON.stringify({
                "id": tptid, "counts": counts
            }),
            success: function (data) {
                if (data == null) {
                    okalert("长时间未操作，登录状态已过期")
                } else {
                    okalert(data.msg)
                    location.href = location.href.replace(/#index_section/, "");
                }
            }
        });
    });
    $popup.popup.find('.close').on(A.options.clickEvent, function () {
        $popup.close();
    });
}

function adddays(a, b) {
    var x = prompt("输入想要增加的天数", "")
    if (x == null) return;
    var reg = /^\+?[1-9][0-9]*$/;//非零正整数
    if (!reg.test(x)) {
        alert("请输入正整数!");
        adddays(a, b);
        return;
    }
    x = Number(x);
    var days = parseInt(x);
    if (days <= 0) {
        alert("人数必须大于0");
        adddays(a, b);
        return;
    }
    if (days > 0) {
        $.post("/earn/ThirdTastJson", { "action": "adddays", "id": b, "days": days, "version": versioncode }, function (data, s1) {
            if (data == null) {
                okalert("长时间未操作，登录状态已过期");
            } else {
                okalert(data.msg);
                location.href = location.href.replace(/#index_section/, "");;
            }
        });
    }
}
function stopforthis(a, b) {
    $.post("/earn/ThirdTastJson", { "action": "stop", "id": b }, function (data, s1) {
        if (data == null) {
            okalert("长时间未操作，登录状态已过期")
        } else {
            okalert(data.msg)
            $(a).parent().hide();
        }
    });
}

function zhifuEarn(earnid, themoney, btnpay) {
    var date_zhifu = {
        themoney: themoney,
        usermoney: usermoney
    };
    var $popup = A.popup({
        html: template('zhifu', date_zhifu),
        pos: 'bottom',
        isBlock: true
    });
    $popup.popup.find('#zhifubao').on(A.options.clickEvent, function () {
        A.showMask();
        var checkbox = $(this).parent().find("input").is(':checked');
        var usebalance = checkbox ? 1 : 0;
        $.post("/phone/Earn_Pay3", { "type": 3, "id": earnid, "usebalance": usebalance }, function (data) {
            if (data.code == 200) {
                $("#zhifu_html").html(data.msg);
            } else {
                alert(data.msg);
                A.hideMask();
            }
        })
    });
    $popup.popup.find('#weixin').on(A.options.clickEvent, function () {
        A.showMask();
        var checkbox = $(this).parent().find("input").is(':checked');
        var pay_type = checkbox ? 1 : 0;
        var device = Device.isPc ? 2 : 1;
        location.href = "/wx/wxpay?type=3&id=" + earnid + "&usebalance=" + pay_type + "&device=" + device;
    });
    $popup.popup.find('#yue').on(A.options.clickEvent, function () {
        A.showMask();
        $.ajax({
            type: "post",
            url: "/api/EarnPhone/PayEarnByBalance",
            contentType: 'application/json',
            data: JSON.stringify({
                "earnid": earnid, "version": versioncode
            }),
            success: function (data) {
                if (data == null) {
                    okalert("长时间未操作，登录状态已过期");
                    $(btnpay).show();
                } else if (data.code == 200) {
                    okalert(data.msg)
                    //$(a).parent().hide();
                    location.href = location.href.replace(/#index_section/, "");;
                } else {
                    okalert(data.msg)
                    $(btnpay).show();
                }
            }
        });
    });
    $popup.popup.find('.close').on(A.options.clickEvent, function () {
        $popup.close();
    });
}

function payforthis(b, a, c, type, btnpay) {
    if (type != -105 && type != 3)//微信投票不需要会员
    {
        if (canPublish != '1') {
            alert('您的悬赏数量超过悬赏发布上限，可以充值会员提升最大悬赏数');
            $(btnpay).show();
            return;
        }
    }

    $.ajax({
        type: "post",
        url: "/api/EarnPhone/IsChuFa",
        contentType: 'application/json',
        data: JSON.stringify(""),
        success: function (data) {
            if (data.code != 200) {
                alert(data.msg);
                return;
            }
            else {
                $(btnpay).hide();
                try {
                    window.jianzhiku.paytaskbill('3', a, b, '');
                    $(btnpay).show();
                } catch (e) {
                    zhifuEarn(b, a * 100, btnpay);
                }
            }
        }
    });
}
function missioncancel(a) {
    if (confirm('取消后不能撤销，是否确认')) { missionaction(a, "cancel"); }
}

//修改悬赏
function editoneitem(a, type, canModify, status) {
    if (type < -4) {
        alert("微信悬赏不允许修改，您可以选择重新发布。");
        return;
    }
    if (type == 3 && (status == 2 || status == -2 || status == -3 || status == -5)) {
        alert("趣味悬赏审核通过后不允许修改");
        return;
    }
    if (canModify != 1) {
        alert("您的悬赏审核通过时间距离现在不足1小时，如果悬赏确实有问题，可以暂停、结束、重新发布，或者过段时间再修改");
        return;
    }
    A.showMask();
    $.post("/earn/IsUpdateEarn", { "earnid": a }, function (data) {
        A.hideMask();
        if (data.code == 200) {
            if (iswww) {
                if (type >= -4) {
                    location.href = "/Earn/Wap_TaskAdd?EarnID=" + a;
                }
                else {
                    //跳转到微信任务修改页面
                }
            }
            else {
                if (versioncode >= 108) {
                    window.jianzhiku.startactivity('com.jianzhiku.activity.MissionChoicePublishActivity', '[{key:\'edit\',value:\'true\'},{key:\'earnid\',value:\'' + a + '\'}]');
                }
                else {
                    window.jianzhiku.startactivity('com.jianzhiku.activity.NewMissionPublishActivity', '[{key:\'edit\',value:\'true\'},{key:\'earnid\',value:\'' + a + '\'}]');
                }
            }
        }
        else {
            alert(data.msg);
            return;
        }
    }) //end post
}//end function
//审核任务
function examineitem(a, type) {
    if (iswww || (type <= -101 && versioncode < 62)) {
        location.href = "/Earn/Wap_TaskExamine?earnid=" + a;
    } else {
        if (versioncode >= 84 && type == 2)
            window.jianzhiku.startactivity('com.jianzhiku.activity.CollectMissionExamine', '[{key:\'earnid\',value:\'' + a + '\'}]');
        else
            window.jianzhiku.startactivity('com.jianzhiku.activity.MissionExamine', '[{key:\'earnid\',value:\'' + a + '\'}]');
    }
}
//导出数据
function exportdata() {
    $.post("/earn/ThirdTastJson", { "action": "exportdata", "id": $('#SelEarnId').val(), "status": '99' }, function (data, s1) {
        if (data == null) {
            okalert("长时间未操作，登录状态已过期")
        } else {
            location.href = data.msg;
        }
    });
}

function openmanagedetail(earnid) {
    var detailurl = hosturl + 'earn/managedetail?earnid=' + earnid;
    if (iswww) {
        location.href = detailurl + '&iswww=1';
    }
    else {
        var s = '[{key:\'title\',value:\'悬赏管理详情\'},{key:\'theurl\',value:\'' + detailurl + '\'}]';
        window.jianzhiku.startactivity('com.jianzhiku.activity.MyWebViewActivity', s);
    }
}

function publishtask() {
    //判断是否被封
    $.ajax({
        type: "post",
        url: "/api/EarnPhone/IsChuFa",
        contentType: 'application/json',
        data: JSON.stringify(""),
        success: function (data) {
            if (data.code != 200) {
                if (data.code == 101) {
                    alert(data.msg);
                    location.href = '/earn/VipInfoFirst';
                }
                else if(data.code == 104)
                {
                    alert(data.msg);
                    location.href = '/earn/VipInfoFirst';
                }
                else if (data.code == 102) {
                    alert(data.msg);
                    location.href = '/next/user_BindAccount';
                }
                else {
                    A.confirm('提示', '您已被暂时关闭发布悬赏权限，详情可联系客服', function () {//查看详情
                        location.href = "/luntan/help_cfinfo.aspx?type=0";
                    }, function () {//确定
                    });
                    $(".agile-popup-handler .agile-popup-handler-cancel").text("确定");
                    $(".agile-popup-handler .agile-popup-handler-ok").text("详情");
                }
            }
            else {

                $.ajax({
                    type: "post",
                    url: "/api/EarnPhone/DailyTaskCount",
                    contentType: 'application/json',
                    data: JSON.stringify(""),
                    success: function (data2) {
                        if (data2.code != 200) {
                            alert(data2.msg);
                        }
                        else {
                            if (iswww) {
                                location.href = '/next/task_manage';
                            }
                            else {
                                window.jianzhiku.startactivity('com.jianzhiku.activity.MissionChoicePublishActivity', '');
                            }
                        }
                    }
                });
            }
        }
    });
}

function fahongbao(earnid, type) {
    if ((type <= -101 && versioncode < 48) || iswww) {
        alert('您的当前版本不支持此功能');
        return;
    }
    window.jianzhiku.Redenvelope(earnid);

}
function hrefClick(event, id) {
    event = event ? event : window.event; event.cancelBubble = true;
    location.href = "/luntan/helpitem.aspx?id=" + id;
}
function fenxiang(uid, nickname) {
    try {
        window.jianzhiku.ShareMe(nickname, uid);
    } catch (e) {

    }
}

function PageReload(pageHref) {
    location.href = pageHref.replace(/#index_section/, "");
}