<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"./views/home/mobile/mytaskaudit/detail.phtml";i:1541935408;}*/ ?>
﻿<!doctype html>
<html>
	<head>
	<meta name="apple-mobile-web-app-capable" content="yes">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo !empty($isview)?'查看':'审核'; ?>任务[<?php echo !empty($item['id'])?$item['id']:''; ?>]</title>
	<link rel="stylesheet" href="/static/home/mobile/css/bootstrap.css">
	<link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
	<link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">
    <link href="/static/home/mobile/css/lightbox.min.css" rel="stylesheet" type="text/css" />
	<link href="/static/home/mobile/css/new_style.css" rel="stylesheet" type="text/css" />
    <link href="/static/home/mobile/css/swiper.min.css" type="text/css" rel="stylesheet">
	<link href="/static/home/mobile/css/new_page.css" rel="stylesheet" type="text/css" />
    <link href="/static/home/mobile/css/new_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
    <style type="text/css">
        .task-list-remain-num span {
            width: 33.33%;
            float: left;
            text-align: center;
        }
        .paging {
            padding: 30px 0;
        }
        .dialog {
          position: fixed;
          left: 0;
          top: 0;
          z-index: 10001;
          width: 100%;
          height: 100%;
        }
        .dialog-content {
            width: 70%;
        }
        .dialog-overlay {
          position: absolute;
          top: 0;
          left: 0;
          z-index: 10002;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
    </head>
    <body data-offset="50" id="htmlBody">
    <header class="site-header header-fixed">
        <input type="hidden" id="taskId">
        <a onclick="history.back()" class="back"></a>
        <div class="tit-name" id="title_txt"><?php echo !empty($isview)?'查看':'审核'; ?>任务[<?php echo !empty($item['id'])?$item['id']:''; ?>]</div>
    </header>
    <div class="main fixed-padding">
        <div class="pr-info borm cl" style=" margin-bottom:10px;">
            <div class="pic type-txuser">
                <a href="#"><img onerror="this.src='/static/home/mobile/picture/pic2.png'" src="<?php echo to_media($item['avatar']?$item['avatar']:''); ?>" id="task_account_img"></a>
            </div>
            <div class="info">
                <div class="bt"><i class="bianhao">编号：</i><span id="task_id"><?php echo !empty($item['id'])?$item['id']:''; ?></span></div>
                <div class="bt"><i class="fabu">发布者：</i><span id="task_account_name"><?php echo !empty($item['username'])?$item['username']:''; ?></span><i class="dengji">V<?php echo !empty($item['level'])?$item['level']:''; ?></i></div>
                <div class="persent-box">
                    <div class="persent-all"><span class="persent-bi" style="width: <?php echo !empty($item['percent'])?$item['percent']:0; ?>%;"></span></div><span class="num"><?php echo !empty($item['percent'])?$item['percent']:0; ?>%</span></div>
                <div class="time">结束：<span id="task_endTime"><?php echo !empty($item['end_time'])?$item['end_time']:''; ?></span>剩余：<span id="task_remain"><?php echo $item['ticket_num']-$item['join_num']; ?></span>份</div>
                <div class="time" style="" id="div_task_stateNum">待审核：<span id="task_stateNum"><?php echo $item['audit_num']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;已抢单：<span id="task_allNum"><?php echo $item['join_num']; ?></span></div>
            </div>
        </div>

        <div class="pr-info borm cl" style=" margin-bottom:10px;">
            <div class="pic type-txuser">
                <a href="#"><img onerror="this.src='/static/home/mobile/picture/pic2.png'" src="<?php echo to_media($joinMember['avatar']?$joinMember['avatar']:''); ?>" id="task_account_img"></a>
            </div>
            <div class="info">
                <div class="bt"><i class="bianhao">抢单用户ID：</i><span id="task_id"><?php echo !empty($joinMember['uid'])?$joinMember['uid']:''; ?></span></div>
                <div class="bt"><i class="fabu">抢单用户：</i><span id="task_account_name"><?php echo !empty($joinMember['username'])?$joinMember['username']:''; ?></span><i class="dengji">V<?php echo !empty($joinMember['level'])?$joinMember['level']:''; ?></i></div>
            </div>
        </div>

        <?php if(!empty($joinInfo['thumbs'])): ?>
        <div class="fujian cl">
            <p class="tit">上传验证图</p>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if(is_array($joinInfo['thumbs']) || $joinInfo['thumbs'] instanceof \think\Collection || $joinInfo['thumbs'] instanceof \think\Paginator): $i = 0; $__LIST__ = $joinInfo['thumbs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$thumb): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide">
                        <a data-lightbox="thumbs-set" href="<?php echo to_media($thumb); ?>"><img src="<?php echo to_media($thumb); ?>"></a></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <?php endif; if(!empty($item['check_text_content'])): ?>
        <div class="pr-xiangqing">
            <p class="tit">文字验证</p>
            <p id="task_description" style="width:98%">
                <?php echo nl2br($item['check_text_content']); ?>
            </p>
            <p class="tit">用户提交</p>
            <?php if(!empty($joinInfo['check_text_content'])): ?>
            <p id="task_description" style="width:98%">
                <?php echo nl2br($joinInfo['check_text_content']); ?>
            </p>
        <?php endif; ?>
        </div>
        <?php endif; if($isview == 0): ?>
        <div class="member-btn">
            <input type="button" class="button1" value="审 核" id="submit" />
        </div>
        <?php endif; ?>

        <script src="/static/home/mobile/js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="/static/home/mobile/js/lightbox.min.js"></script>
        <script type="text/javascript" src="/static/home/mobile/js/swiper.min.js"></script>
        <script type="text/javascript">
            var swiper = new Swiper('.fujian .swiper-container', {
                nextButton: '.fujian .swiper-button-next',
                prevButton: '.fujian .swiper-button-prev',
                spaceBetween: 0,
                speed: 1000,
                autoplay: 3000
            });
        </script>
        <script type="text/javascript" src="/static/home/mobile/js/global.js"></script>
        <!-- 弹出层 -->
        <script src="/static/plugins/dialog/js/dialog.js"></script>
        <script type="text/javascript">
        var id = <?php echo !empty($joinInfo['id'])?$joinInfo['id']:''; ?>;
        $("#submit").click(function(){
            $(document).dialog({
                type : 'confirm',
                closeBtnShow: true,
                titleText: '确认审核',
                content: '用户提交的内容是否符合任务需求吗？',
                buttonTextConfirm: '符合，通过',
                buttonTextCancel: '不符合，拒绝',
                onClickConfirmBtn: function(){
                    $loading = message('审核中','','loading');
                    $.post('/home/mytaskaudit/audit.html', { id: id }, function(res) {
                        message(res.message,res.redirect,res.type);
                        $loading.close();
                    });
                },
                onClickCancelBtn : function(){
                    $loading = message('审核中','','loading');
                    $.post('/home/mytaskaudit/nopass.html', { id: id }, function(res) {
                        message(res.message,res.redirect,res.type);
                        $loading.close();
                    });
                }
            });
        });
        </script>
    </body>
</html>