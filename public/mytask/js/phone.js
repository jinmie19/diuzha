function connectWebViewJavascriptBridge(callback) {
    if (window.WebViewJavascriptBridge) {
        callback(WebViewJavascriptBridge)
    } else {
        document.addEventListener('WebViewJavascriptBridgeReady', function () {
            callback(WebViewJavascriptBridge)
        }, false)
    }
}
function kaopu(a, b, c) {
    try {
        window.jianzhiku.kaopu(a,b,c);
    }
    catch (e) {
        try {
            window.jianzhiku.MyAlert("升级后才可以使用该功能");
        } catch (e) { }
    }
}

function lianxi(a, b, c) {
    try {
        window.jianzhiku.startactivity('com.bumiu.jianzhi.MyMsgActivity', '[{key:\'fromid\',value:\'' + a + '\'},{key:\'linkman\',value:\'' + b + '\'}]');
    } catch (e) { }

    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"msg","uid":' + c + ',"name":"' + b + '"}');
    });
}
function jobshow(a) {
    try {
        window.jianzhiku.startactivity('com.bumiu.jianzhi.jobitemshow', '[{key:\'id\',value:\'' + a + '\'},{key:\'scroll\',value:\'false\'}]');
    } catch (e) { }

    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"jobitemshow","jobid":"' + a + '"}');
    });
}
function phonealert(a) {
    try {
        window.jianzhiku.MyAlert(a)
    } catch (e) { }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"myalert","title":"' + e + '"}')
    });
}
function signin() {
    try {
        window.jianzhiku.startactivity('com.bumiu.jianzhi.SigninActivity', '')
    } catch (e) { }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"open","page":"sign"}');
    });
}
function regview() {
    try {
        window.jianzhiku.startactivity('com.bumiu.jianzhi.RegistActivity', '')
    } catch (e) { }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"open","page":"reg"}');
    });
}
function jianliview() {
    try {
        window.jianzhiku.startactivity('com.bumiu.jianzhi.ModifyActivity', '')
    } catch (e) { }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"open","page":"jianli"}');
    });
}
function getjob() {
    try {
        window.jianzhiku.changedtojoblist()
    } catch (e) { }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"joblist"}')
    });
}
//开启签到
function startsign(a,b) {
    try {
        window.jianzhiku.usersign(a, b);
    } catch (e) {
        try{
        window.jianzhiku.MyAlert("该功能正在进行内测");
        }catch(ex){}
    }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"startsign","jobid":"' + a + '","wifitoken":"' + b + '"}');
    });
}
//关闭签到
function finishsign(a) {
    try {
        window.jianzhiku.closewifiap();
    } catch (e) {
    try {
        window.jianzhiku.MyAlert("该功能正在进行内测");
    } catch (ex) { }
    }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"finishsign","jobid":' + a + '}');
    });
}
//导出签到
function exportsign(a) {
    try {
        window.jianzhiku.getsignuser(a);
    } catch (e) {
    try {
        window.jianzhiku.MyAlert("该功能正在进行内测");
    } catch (ex) { }
    }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"exportsign","jobid":' + a + '}');
    });
}
//申请靠谱
function applyreliable(a, b,c,d) {
    try {
        window.jianzhiku.kaopu(a, b, c, d);
    } catch (e) {
    }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"applyreliable","title":"' + a + '","gongzi":"' + b + '","number": ' + c + ' ,"jobid": ' + d + ' }');
    });
}

function getoneusergps(u) {
    try {
        window.jianzhiku.getoneusergps(u)
    } catch (e) { }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"getoneusergps","xuid":' + u + '}');
    });
}

function getmaptrack(u) { 
    try{
        window.jianzhiku.getmaptrack(u);
    } catch (e) { }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"getmaptrack","uid":'+u+'}');
    })
}
function talktouser(u, n) { 
    try{
        window.jianzhiku.talktouser(u, n)
    } catch (e) { }
    connectWebViewJavascriptBridge(function (bridge) {
        bridge.send('{"type":"talktouser","name":"' + n + '","uid":' + u + '}');
    })
}
