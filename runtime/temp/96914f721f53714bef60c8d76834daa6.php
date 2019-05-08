<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:36:"./views/home/mobile/task/index.phtml";i:1557148554;s:67:"/www/wwwroot/diuzha.cn/public/views/home/mobile/common/footer.phtml";i:1557148301;}*/ ?>
<!DOCTYPE html>
<html lang="en" style="font-size: 100px;background-color:white">
<head>
    <meta charset="UTF-8">
    <title>任务中心</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta content="telephone=no,email=no" name="format-detection">
    <meta name="Cache-Control" content="private">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">

    <link rel="stylesheet" href="/static/home/mobile/css/bootstrap.css">
    <link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">
    <link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
    <link href="/static/home/mobile/css/style.css?v=21019" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/static/home/mobile/css/new_page.css?v=2" />
    <link rel="stylesheet" href="/static/home/mobile/css/swiper.min.css" />
    <link rel="stylesheet" href="/static/home/mobile/js/index/flexslider.min.css" />
    <link rel="stylesheet" href="/static/home/mobile/js/index/index.css?v=1">
    <link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
    <link rel="stylesheet" href="/static/home/mobile/css/mui.min.css">



    <script src="/static/home/mobile/js/jquery.min.js"></script>
    <script src="/static/home/mobile/js/mui.min.js"></script>
    <link rel="stylesheet" href="/static/home/mobile/js/index/index.css?v=1">
    <style>
        html, body, ul, li, ol, dl, dd, dt, p, h1, h2, h3, h4, h5, h6, form, fieldset, legend, img {
            margin: 0;
            padding: 0;
        }
        html{
            font-size: 100px;
        }
        fieldset, img {
            border: none;
        }

        address, caption, cite, code, dfn, th, var {
            font-style: normal;
            font-weight: normal;
        }
        ul, ol {
            list-style: none;
        }
        body {
            font: 12px/20px "微软雅黑", "SimSun", "宋体", "Arial Narrow", HELVETICA;
            overflow-x: hidden;
        }
        i {
            font-style: normal;
        }
        a{
            color: #666;
            text-decoration: none;
        }

        a:link{
            color: #666;
        }

        a:visited {
            color: #666;
        }
        a:hover, a:active, a:focus {
            /*color: #834100;*/
            color: #666;
            /*text-decoration: underline;*/
        }
      #footer-bar li b {
    font-weight:normal
}

        a,a:hover,a:active,a:visited,a:link,a:focus{
            -webkit-tap-highlight-color:rgba(0,0,0,0);
            -webkit-tap-highlight-color: transparent;
            outline:none;
            background: none;
            text-decoration: none;
        }

        input {
            outline: none
        }
        .shade {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, .5);
            display: none;
        }
        button {
            outline: none;
        }
        .header{
            display: flex;
            justify-content: space-between;
            background-color: #fde03f;
            align-items: center;
            width: 100%;
            height: .68rem;
            padding: 0 .24rem;

            box-sizing: border-box;
        }

        .header-left{
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 16px;
        }

        .left-itme{
            color: #ffffff;
            margin-right: .14rem;
            font-size: 16px;
            position: relative;
        }

        .select-header{
            color: #834100;
            font-weight: bold;
        }

        .right{
            position: relative;
        }

        .right input{
            width: 3.4rem;
            height: .48rem;
            padding-left: .56rem;
            border: 1px solid rgba(0,0,0,.1);
            border-radius: .40rem;
            box-sizing: border-box;
        }

        .search-img {
            width: .38rem;
            height: .38rem;
            position: absolute;
            top: .16rem;
            left: .1rem;
        }
		.content{
          background-color:white;}
        input::-ms-input-placeholder{
            font-size: 14px;
            color: #999;
        }
        input::-webkit-input-placeholder{
            font-size: 14px;
            color: #999;
        }
      .mui-scroll-wrapper{
        background-color:white;
      	width:95%;
        left:0.1
      }

        .tab-wrap {
            width: 100%;
            height: .68rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: .14rem 0;
            border-top: 8px solid rgba(0,0,0,.05);
            position: relative;
          background-color:white;
        }

        .tab-wrap .tab-item{
            width: 50%;
            height: 100%;
            font-size: 16px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .tab-title{
            width: 100%;
            height: .68rem;
            line-height: .68rem;
            text-align: center;
            border-right: 1px solid rgba(0,0,0,.08);
            position: relative;
        }

        .tab-title::after{
            content: '';
            width: 0;
            height: 0;
            border: 6px solid transparent ;
            border-top-color:#B0B0B0 ;
            position: absolute;
            top: .3rem;
            margin-left: .08rem;
        }

        .tab-wrap .tab-item .tab-list{
            width: 100%;
            margin-top: .24rem;
            position: absolute;
            top: .68rem;
            left: 0;
            background: white;
            border-top: 1px solid rgba(0,0,0,.08);
            box-shadow: 0 .05rem .05rem rgba(0,0,0,.03);
            z-index: 100000;
        }

        .tab-wrap .tab-item .tab-list li {
            width: 100%;
            line-height: .48rem;
            color: #666;
            padding: .14rem .24rem;
            border-bottom: 1px solid rgba(0,0,0,.08);
            box-sizing: border-box;
        }

        .tab-wrap .tab-item .tab-list li a{
            display: block;
            width: 100%;
            line-height: .48rem;
        }

        .tab-wrap .tab-item .tab-list .tab-select{
            color: black;
            font-weight: bolder;
        }

        .cueText{
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        #downRefresh{
            width: 100%;
            height: 80vh;
        }

        .hidetr{
            display: none;
        }
        .pull-loading {
            text-align: center;
            height: 40px;
            line-height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #scroller ul li {
            padding: 20px 10px;
            border-bottom: solid 1px #ccc;
            background: #fff;
        }
        .hidetr{
            display: none;
        }
        .mui-pull-caption{
            text-align: center;
        }
        .mui-scroll-wrapper{
            top:1.5rem;
            bottom:63px;
          	left:0.15rem !important;
        }
        .right input{
            margin-bottom: 7px;
            margin-top: 7px;
        }
    </style>

</head>
<body>
<div class="header">
    <div class="header-left">
        <div class="left-itme">推荐</div>
        <div class="left-itme select-header">任务大厅</div>
        <div class="left-itme">关注</div>
    </div>
    <div class="right">
        <img class="search-img" src="/static/search.png" alt="" onclick="javascript:document.keyform.submit()">
        <form id="search_form" action="/home/task/index.html" name="keyform">
            <input type="text" placeholder="请输入标题关键词" name="keyword">
        </form>
    </div>
</div>

<div class="tab-wrap">
    <div class="tab-item">
        <div class="tab-title tab-title-one"><?php echo $catename; ?></div>
        <ul class="tab-list" style="display: none;">
            <li <?php if($category_id == 0): ?>class="tab-select"<?php endif; ?>> <a data-cate="0" href="/home/task/index.html" style="display:block;width:100%">全部</a></li>
            <?php if(is_array($taskcate) || $taskcate instanceof \think\Collection || $taskcate instanceof \think\Paginator): $i = 0; $__LIST__ = $taskcate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li><a data-cate="<?php echo $vo['id']; ?>"  href="/home/task/index/category_id/<?php echo $vo['id']; ?>.html" <?php if($category_id == $vo['id']): ?>class="tab-select category"<?php endif; ?> style="display:block;width:100%"><?php echo $vo['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>

    <div class="tab-item">
        <div class="tab-title">
            <?php if($paixu == 3): ?>佣金排序 <?php elseif($paixu == 2): ?>最新任务<?php else: ?>默认排序<?php endif; ?>
        </div>
        <ul class="tab-list" style="display: none;">
            <li><a data-paixu="1" href="/home/task/index/category_id/<?php echo $category_id; ?>/paixu/1.html" <?php if($paixu == 1): ?> class="tab-select paixu"<?php endif; ?> style="display:block;width:100%">默认排序</a></li>
            <li><a data-paixu="2" href="/home/task/index/category_id/<?php echo $category_id; ?>/paixu/2.html" <?php if($paixu == 2): ?> class="tab-select paixu"<?php endif; ?> style="display:block;width:100%">最新任务</a></li>
            <li><a data-paixu="3" href="/home/task/index/category_id/<?php echo $category_id; ?>/paixu/3.html" <?php if($paixu == 3): ?> class="tab-select paixu"<?php endif; ?> style="display:block;width:100%">佣金排序</a></li>
        </ul>
    </div>
</div>

<input type="hidden" name="cate" value="<?php echo $category_id; ?>" >
<input type="hidden" name="paixu" value="<?php echo $paixu; ?>" >
<input type="hidden" name="keyword" value="<?php echo $keyword; ?>" >
<div class="content" id="wrapper">
    <?php if(!empty($tasks)): ?>

    <div class="list-block">
        <div id="pullrefresh" class="mui-content mui-scroll-wrapper" style="left:0.1">
            <div class="mui-scroll">
        <ul>
            <?php if(is_array($tasks) || $tasks instanceof \think\Collection || $tasks instanceof \think\Paginator): $k = 0; $__LIST__ = $tasks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$task): $mod = ($k % 2 );++$k;?>
            <li class='<?php if($k > 7): ?> hidetr <?php endif; ?>' >
                <a href="/home/task/detail/id/<?php echo $task['id']; ?>.html" class="userlogo"><img src="<?php echo $task['avatar']; ?>" alt=""></a>
                <a href="/home/task/detail/id/<?php echo $task['id']; ?>.html" class="title">
                    <div class="subtitle"><?php echo $task['title']; ?></div>
                    <div class="money">赏￥<?php echo $task['unit_price']; ?>元</div>
                    <div class="desc"><?php echo $task['join_num']; ?>人已赚　剩余<?php echo $task['ticket_num']-$task['join_num']; ?>份</div>
                    <div class="keywords"><span class="blue">商<?php echo $task['id']; ?></span> <span class="yellow"><?php echo $task['give_credit1']; ?>积分</span> </div>
                </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
        </div>
    </div>
    <div class="clear"></div>
    <?php endif; ?>
</div>
<footer id="footer-bar" lang="<?php echo $controller; ?>">
      <ul id="tabbar">
      <li><a href="/"><img src="/static/home/mobile/js/index/hom1<?php if(in_array($controller,array('index'))): ?>_on<?php endif; ?>.png"><b>首页</b></a></li>
      <li><a href="/home/task/index.html"><img src="/static/home/mobile/js/index/hom2<?php if(in_array($controller,array('task'))): ?>_on<?php endif; ?>.png"><b>任务大厅</b></a></li>
      <li><a href="/home/invite.html"><img src="/static/home/mobile/js/index/hom3<?php if(in_array($controller,array('invite'))): ?>_on<?php endif; ?>.png"><b>邀请好友</b></a></td>
      <li><a href="/home/account.html"><img src="/static/home/mobile/js/index/hom4<?php if(in_array($controller,array('account','charge','fans','vip','feedback','feedback','notice','help'))): ?>_on<?php endif; ?>.png"><b>我的</b></a></li>
      </ul>
</footer>
<script>
  mui('body').on('tap','a',function(){document.location.href=this.href;});
    mui.init({
        pullRefresh: {
            container: '#pullrefresh',
            down: {
                // callback: pulldownRefresh
            },
            up: {
                contentrefresh: '正在加载...',
                callback: pullupRefresh
            }
        }
    });

    var count = 0;
    /**
     * 上拉加载具体业务实现
     */
    function pullupRefresh() {
        setTimeout(function() {
            mui('#pullrefresh').pullRefresh().endPullupToRefresh((++count > 2)); //参数为true代表没有更多数据了。
            var table = document.body.querySelector('.mui-table-view');
            var cells = document.body.querySelectorAll('.mui-table-view-cell');
            // for (var i = cells.length, len = i + 5; i < len; i++) {
            //     var li = document.createElement('li');
            //     li.className = 'mui-table-view-cell';
            //     li.innerHTML = '<a class="mui-navigate-right">Item ' + (i + 1) + '</a>';
            //     table.appendChild(li);
            // }
            if($('.hidetr').length > 0){

                $('.hidetr').each(function(i,v){
                    if(i<= 4){
                        $(v).removeClass('hidetr');
                    }else{
                        return false;
                    }
                })


            }

            console.log(count)
        }, 1500);
    }

</script>
<script>
    (function (doc, win) {
        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                if(clientWidth>=640){
                    docEl.style.fontSize = '100px';
                }else{
                    docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
                }
            };
        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document, window);
</script>

<script>
    $('.header-left').find('.left-itme').on('click', function(event) {
        event.stopPropagation();
        $(this).addClass('select-header').siblings().removeClass('select-header');
        var header_index = $(this).index();
        // console.log(header_index)
    });

    $('.tab-item').find('.tab-title').on('click', function(event) {
        event.stopPropagation();
        if($(this).next().is(':hidden')){
            $(this).next().show();
        }else{
            $(this).next().hide();
        }
        $(this).parent().siblings().find('ul').hide();
    });

    $(document).on('click', function(event) {
        $('.tab-list').hide();
    });
    $('.tab-list').find('li').on('click',function() {
        event.stopPropagation();
        $(this).addClass('tab-select').siblings().removeClass('tab-select');
        $(this).parent().hide();
        var li_index = $(this).index();
        //  console.log(li_index)
    });
</script>
</body>
</html>