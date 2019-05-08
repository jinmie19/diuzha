<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:39:"./views/home/mobile/account/index.phtml";i:1556638553;s:67:"/www/wwwroot/diuzha.cn/public/views/home/mobile/common/footer.phtml";i:1557148301;}*/ ?>
﻿<html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo !empty($site['seo_title'])?$site['seo_title']:''; ?>个人中心</title>
    <link rel="stylesheet" type="text/css" href="/static/home/mobile/css/geren.css">
        <!-- 弹出层 -->
        <link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
        <script src="/static/plugins/dialog/lib/zepto.min.js"></script>
        <script src="/static/plugins/dialog/js/dialog.js"></script>
        <!-- 弹出层 -->
        <script type="text/javascript" src="/static/plugins/clipboard.min.js"></script>
        <script type="text/javascript" src="/static/home/mobile/js/global.js"></script>
        		<link rel="stylesheet" href="/static/home/mobile/css/bootstrap.css">
		<link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">
		<link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
		<link href="/static/home/mobile/css/style.css?v=21019" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/static/home/mobile/css/new_page.css?v=2" />
		<link rel="stylesheet" href="/static/home/mobile/css/swiper.min.css" />
<style>
.l-center-pay{
 font-size: .47rem;
}
#sign{
    background: #cd6681;
    color: #fff;
    padding: 0.1rem .6rem;
    display: block;
    position: absolute;
    right: .5rem;
    top: 1.5rem;
    font-size: .5rem;
    border-radius: 1rem;
}

</style></head>



<body><div class="mui-content person-content">
	<div class="person-top"></div>
	<div class="person-info">
		<div class="person-Photo">
			<a href="/home/account/info.html">
            <img src="<?php echo to_media($member['avatar']); ?>" onerror="this.src='/static/home/mobile/picture/user.png'" id="headimg">
        	</a>
		</div>
		<div class="person-infoRight">
			<div class="person-userName">
                <span id="nickname" style="display:block;text-align:center;"><?php echo !empty($member['nickname'])?$member['nickname']:$member['username']; ?>【<?php echo !empty($msg_levels)?$msg_levels:'普通会员'; ?>】</span>  
			</div>
			<div class="person-id">
				<span>ID：<?php echo $member['uid']; ?></span>
			</div>
							<a href="javascript:;" id="sign" onclick="sign();"><?php echo !empty($is_sign)?'已签到':'签到'; ?></a>		</div>
		<div class="person-coin">
			<a href="">
				<span class="l-center-pay"><i class="icon-source-list icon-gold"></i><var class="span-gold"><?php echo !empty($member['credit2'])?$member['credit2']:0; ?></var>余额</span>
			</a>
	        				<span class="y-vip-menu">
                <i class="y-vip-remind l-center-remind"></i>
                 <a onclick="location.href='/index.php?m=&amp;c=Index&amp;a=vip'">
                    <i class="icon-source-list icon-vip-none"></i>
                    <span class="l-unVip">开通年费 </span>
                </a>
                </span>		
		</div>
	</div>
	 <script type="text/javascript">
            $(function () {
                $('#sign').click(function () {
                    /*$.post(
                        window.location.href,
                        {},
                        function (res) {
                            message(res.message,res.redirect,res.type);
                        }
                    );*/
                    window.location.href = '/home/signin.html';
                });
            });
        </script>
	<script>
		function headimg(){
			$.post("/index.php?m=&c=Ajax&a=sync_profile",function(d){
				if(d){
					if(d.status){
						$('#headimg').attr('src',d.info.headimg);
						$('#nickname').html(d.info.nickname);
						bh_msg_tips('更新头像成功')
					}else{
						bh_msg_tips(d.info);
					}
				}else{
					bh_msg_tips('请求失败！');
				}
			})
		}
		
	</script>
		
	<style>
	.zhicwl-aopsmt{
		overflow: hidden;
		padding-top: 12px;
	}
	.zhicwl-aopsmt dl{
		width: 25%;
		text-align: center;
		float: left;
	}
	.zhicwl-aopsmt dl a h6{
		color: #000;
		font-size: 12px;
		display: block;
		line-height: 1.5;
		padding-top: 6px;
	}	
	</style>
	
	<div class="person-list y-person-list">
		<ul class="mui-table-view">
			
			
			
			
			<li class="mui-table-view-cell person-listLi">
				<a class="mui-navigate-right" href="/home/mytaskjoin.html"><i class="icon-source-list icon-recharge-center"></i>我做的悬赏</a>   
					<div class="zhicwl-aopsmt">
						<dl>
							<a href="/home/mytaskjoin/category/t/lock.html">
								<dt><img src="/static/home/mobile/images/t1.png"></dt>
								<h6>未提交</h6>
							</a>
						</dl>
						<dl>
							<a href="/home/mytaskjoin/category/t/wait.html#">
								<dt><img src="/static/home/mobile/images/t2.png"></dt>
								<h6>已提交</h6>
							</a>
						</dl>
						<dl>
							<a href="/home/mytaskjoin/category/t/nopass.html">
								<dt><img src="/static/home/mobile/images/t3.png"></dt>
								<h6>未通过</h6>
							</a>
						</dl>
						<dl>
							<a href="/home/mytaskjoin/category/t/pass.html">
								<dt><img src="/static/home/mobile/images/t4.png"></dt>
								<h6>已完成</h6>
							</a>
						</dl>							
					</div>				       
			</li>
			
			
			
			
			
			
          			<li class="mui-table-view-cell person-listLi">
				<a class="mui-navigate-right" href="/home/mytask.html"><i class="icon-source-list y-center-task"></i>发布/管理悬赏</a>
			</li>
			<li class="mui-table-view-cell person-listLi">
				<a class="mui-navigate-right" href="/home/fans.html"><i class="icon-source-list icon-record"></i>粉丝关注</a>
			</li>
			<li class="mui-table-view-cell person-listLi">
				<a class="mui-navigate-right" href="/home/feedback.html"><i class="icon-source-list y-center-record"></i>意见反馈</a>
			</li>
            <li class="mui-table-view-cell person-listLi">
                <a class="mui-navigate-right" href="/home/notice.html"><i class="icon-source-list icon-help-center"></i>帮助中心</a>
            </li>
			<li class="mui-table-view-cell person-listLi">
                <a class="mui-navigate-right" href="/home/help.html"><i class="icon-source-list icon-autobuy"></i>新手教程</a>
            </li>
          <li class="mui-table-view-cell person-listLi">
                <a class="mui-navigate-right" href="/home/help.html"><i class="icon-source-list icon-autobuy"></i>联系我们</a>
            </li>
		</ul>
	</div>

	 <!--<div class="person-list ">
		<ul class="mui-table-view">
			<li class="mui-table-view-cell person-listLi">
				<i class="icon-source-list icon-autobuy"></i>我的消息
				<div class="mui-switch " onclick="autoBuy()" data-switch="1">
					<div class="mui-switch-handle"></div>
				</div>
			</li>
			<!--<li class="mui-table-view-cell person-listLi">-->
				<!--<a class="mui-navigate-right" href="/index.php?m=&c=Index&a=feedBack"><i class="icon-source-list icon-feedback"></i>意见反馈</a>-->
			<!--</li>-->

		</ul>
	</div>
	
	<style>
		.logout{
		    display: block;
			background: #ffa921;
			color: #fff;
			width: 50%;
			height: 1.35rem;
			text-align: center;
			line-height: 1.35rem;
			border-radius: 2rem;
			margin: 1rem 25% .5rem 25%;
			font-size: .5rem;
		}
		.logout:link,a:visited{
            color: #fff;
        }
        .logout:hover,a:focus,a:active{
            color: #fff;
        }
	</style>
	<!-- <div class="person-list ">
			<a class="logout" href="/home/auth/login.html">退出登录</a>
		</div> --></div>
<script>
    function autoBuy(){
        if($('#autoBuy').prop('checked')){
            $('#autoBuy').prop("checked",true);
        }else{
            $('#autoBuy').prop("checked",false);
        }
        $.post("/index.php?m=&c=Ajax&a=autoBuy",function(d){
            if(!d){
                bh_msg_tips('请求失败！');
            }
        })
    }
</script>
<style>
	.footer-icon-join{
		display: block;
		background: url(./Public/home/images/joinus.png) no-repeat;
		background-size: 100%;
		width: 30px;
		height: 30px;
		margin: 0 auto;
		vertical-align: top;
		position: absolute;
		left: 50%;
		margin-left: -16px;
		top: 4px;
	}
	.mui-active>.footer-icon-join{
		display: block;
		background: url(./Public/home/images/joinuss.png) no-repeat;
		background-size: 100%;
		width: 30px;
		height: 30px;
		margin: 0 auto;
		vertical-align: top;
		position: absolute;
		left: 50%;
		margin-left: -16px;
		top: 4px;
	}
</style>
   <footer id="footer-bar" lang="<?php echo $controller; ?>">
      <ul id="tabbar">
      <li><a href="/"><img src="/static/home/mobile/js/index/hom1<?php if(in_array($controller,array('index'))): ?>_on<?php endif; ?>.png"><b>首页</b></a></li>
      <li><a href="/home/task/index.html"><img src="/static/home/mobile/js/index/hom2<?php if(in_array($controller,array('task'))): ?>_on<?php endif; ?>.png"><b>任务大厅</b></a></li>
      <li><a href="/home/invite.html"><img src="/static/home/mobile/js/index/hom3<?php if(in_array($controller,array('invite'))): ?>_on<?php endif; ?>.png"><b>邀请好友</b></a></td>
      <li><a href="/home/account.html"><img src="/static/home/mobile/js/index/hom4<?php if(in_array($controller,array('account','charge','fans','vip','feedback','feedback','notice','help'))): ?>_on<?php endif; ?>.png"><b>我的</b></a></li>
      </ul>
</footer> <script>
    mui('.tophref').on('tap','a',function(){document.location.href=this.href;});
	$(document).ready(function(){
        $('.nav-footer a').each(function(){
            if($($(this))[0].href==String(window.location))
                $(this).addClass('mui-active');
        });
    })
	
	function bh_msg_tips(msg) {
		var oMask = document.createElement("div");
		oMask.id = "bh_msg_lay";
		oMask.style.position = "fixed";
		oMask.style.left = "0";
		oMask.style.top = "50%";
		oMask.style.zIndex = "100";
		oMask.style.textAlign = "center";
		oMask.style.width = "100%";
		oMask.innerHTML = "<span style='background: rgba(0, 0, 0, 0.65);color: #fff;padding: 10px 15px;border-radius: 3px; font-size: 14px;'>" + msg
			+ "</span>"; document.body.appendChild(oMask);
		setTimeout(function () {
			$("#bh_msg_lay").remove();
		}, 2000);
	}
</script></body></html>