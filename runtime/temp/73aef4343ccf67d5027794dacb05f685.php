<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:39:"./views/home/mobile/notice/detail.phtml";i:1541935408;}*/ ?>
﻿<!DOCTYPE html>
<html>
	<head>
		<meta name="apple-mobile-web-app-capable" content="yes">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
		<title>下载地址</title>
		<link rel="shortcut icon" href="clientapp/images/new_images/favicon.ico"/>
		<link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
		<link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css" />
		<link href="/static/home/mobile/css/new_style.css" rel="stylesheet" type="text/css" />
	</head>
	<style type="text/css">
		/*reset*/
		* {
		   margin: 0px;
		   padding: 0px;
		}
		html {
		   font-size: 62.5%;
		}
		body {
		   font-family: "微软雅黑", "Microsoft Yahei", "Arial";
		   font-size: 1.4rem;
		   background: #F5F5F5;
		   line-height: 1.5;
		   color: #333;
		   overflow-x: hidden;
		   overflow-y: auto;
		   -webkit-overflow-scrolling: touch;
		}
		a {
		   text-decoration: none;
		   -webkit-transition: all 0.3s ease-in-out;
		   transition: all 0.3s ease-in-out;
		   color: #333;
		}
		.head{
			background-color: #e74b3c;
			height: 64px;
			line-height: 64px;
			text-align: center;
			color: #fff;
			font-size: 2.0rem;
			position: relative;
		}
		.head a{
			position: absolute;
			left: 0px;
			top: 0px;
			width: 50px;
			text-align: center;
		}
		.site-header .tit-name{
			font-size: 1.6rem;
			text-indent: -60px;
		}
		.tips{
			display: inline-block;
			width: 100%;
			text-align: center;
			margin-top: 120px;
		}
		.notice-img{
			margin-bottom: 40px;
		}
		p{
			font-size: 1.4rem;
			line-height: 30px;
		}
		.notice-content{
			width: 85%;
			font-size: 1.4rem;
			line-height: 30px;
			text-align: center;
			margin: auto;
		}
        .detail{
            padding:80px 15px 15px 15px;
            overflow-x: hidden;
        }
        .detail img{
            max-width: 100%;
        }
	</style>
	<body>
		<div class="site-header header-fixed">
			<a onclick="window.history.back();" class="back"></a>
			<div class="tit-name"><?php echo $item['title']; ?></div>
			<!--<a href="myAttend.html" class="sc">发布</a>-->
		</div>
		<div class="detail">
            <?php echo $item['detail']; ?>
        </div>
</body>
</html>