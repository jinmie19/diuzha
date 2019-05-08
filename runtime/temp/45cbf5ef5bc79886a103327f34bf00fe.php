<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:37:"./views/home/mobile/index/index.phtml";i:1556987217;s:67:"/www/wwwroot/diuzha.cn/public/views/home/mobile/common/footer.phtml";i:1557148301;}*/ ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo !empty($site['seo_title'])?$site['seo_title']:''; ?></title>
		<meta name="Description" content="<?php echo !empty($site['seo_description'])?$site['seo_description']:''; ?>" />
		<meta name="Keywords" content="<?php echo !empty($site['seo_keywords'])?$site['seo_keywords']:''; ?>" />
		<link rel="stylesheet" href="/static/home/mobile/css/bootstrap.css">
		<link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">
		<link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
		<link href="/static/home/mobile/css/style.css?v=21019" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/static/home/mobile/css/new_page.css?v=2" />
		<link rel="stylesheet" href="/static/home/mobile/css/swiper.min.css" />
		<style type="text/css">
			.new-main {
				padding-bottom: 40px;
			}
            .load-more{
                margin-top: -10px;
                margin-bottom: 30px;
                height: 30px;
                line-height: 30px;
                text-align: center;
                background: #ffffff;
            }
		</style>
        <!-- 弹出层 -->
        <link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
        <script type="text/javascript" src="/static/home/mobile/js/jquery-2.0.3.min.js"></script>
        <script src="/static/plugins/dialog/js/dialog.js"></script>
        <!-- 弹出层 -->
        <script type="text/javascript" src="/static/plugins/clipboard.min.js"></script>
        <script type="text/javascript" src="/static/home/mobile/js/swiper.min.js"></script>
        <script type="text/javascript" src="/static/home/mobile/js/global.js"></script>
        <script type="text/javascript" src="/static/home/mobile/js/index/jquery.flexslider-min.js"></script>
        <link rel="stylesheet" href="/static/home/mobile/js/index/flexslider.min.css" />
        <link rel="stylesheet" href="/static/home/mobile/js/index/index.css?v=1">
	</head>
    <body class="new-body">

      
   <section id="banner">
   <div class="flexslider"> 
      <ul class="slides"> 
        <li><a href="#"><img src="http://1.so4.top/Public/upload/images/1903/30/5154135.jpg"></a></li> 
        <li><a href="#"><img src="http://1.so4.top/Public/upload/images/1903/30/5154135.jpg"></a></li> 
      </ul> 
   </div>
   </section>
    
   <div class="banner-bottom">
        <img src="/static/home/mobile/js/index/home-banner-bottom.png">
    </div>
    <section id="container">
      <div class="app_download">
      <img src="/static/home/mobile/js/index/horn.png" alt="">
      <div id="notice" class="swiper-container swiper-container-vertical">
            <div class="swiper-wrapper">
               <?php if(!empty($notices)): if(is_array($notices) || $notices instanceof \think\Collection || $notices instanceof \think\Paginator): $i = 0; $__LIST__ = $notices;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$notice): $mod = ($i % 2 );++$i;?>
                        <div class="swiper-slide swiper-slide-duplicate">
                            <a id="slide_href" href="/home/notice/detail/id/<?php echo $notice['id']; ?>.html" hid="12"><?php echo $notice['title']; ?></a>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
               </div>
            </div>
      </div>
       <div class="index_menu">
      <ul>
      <li><a href="#"><img src="/static/home/mobile/js/index/menu2.png"><b>会员专区</b></a></li>
      <li><a href="#"><img src="/static/home/mobile/js/index/menu1.png"><b>新作榜</b></a></li>
      <li><a href="#"><img src="/static/home/mobile/js/index/menu3.png"><b>排行榜</b></a></li>
      <li><a href="#"><img src="/static/home/mobile/js/index/menu4.png"><b>分类</b></a></li>
      </ul>
     </div>
      <div class="clear"></div>
      <div class="h1_title">
      <h4>推荐任务</h4>
      </div>
    

      </section>
     <?php if(!empty($tasks)): ?>   
     <div class="list-block">
      <ul>
      <?php if(is_array($tasks) || $tasks instanceof \think\Collection || $tasks instanceof \think\Paginator): $task_index = 0; $__LIST__ = $tasks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$task): $mod = ($task_index % 2 );++$task_index;?>  
      <li style="height: 100px;">
      <a href="/home/task/detail/id/<?php echo $task['id']; ?>.html" class="userlogo"><img src="<?php echo $task['avatar']; ?>" alt=""></a>
      <a href="/home/task/detail/id/<?php echo $task['id']; ?>.html" class="title">
      <div class="subtitle" style="font-size: 15px;font-weight: bold;"><?php echo $task['title']; ?></div>
      <div class="money" style="color:#FF2424;font-weight: bold;font-size: 15px;">赏  <?php echo $task['unit_price']; ?>元</div>
      <div class="keywords" style="margin-top: 10px;margin-bottom: 10px;"><span class="blue"><?php echo $categories[0]['title']; ?></span> <span class="yellow"> <?php if(!empty($task['appName'])): ?>
                              <?php echo $task['appName']; else: ?>
                                应用名称
                            <?php endif; ?></span> <span class="red" style="position: absolute;right:0;margin-right: 0px"><?php echo $task['give_credit1']; ?>积分</span>
        </div>  
        <div class="desc" style="color:#5f4b4b"><span>编号：<?php echo $task['id']; ?></span>  <span style="margin-left: 26px;"> <?php echo $task['join_num']; ?>人已赚到赏金</span>　<span style="position: absolute;right:0">剩余<?php echo $task['ticket_num']-$task['join_num']; ?>份 </span></div>

      </a> 
      </li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</div>
   <div class="clear"></div>
    <?php endif; ?>
      <div style="height:85px;"></div>
   <footer id="footer-bar" lang="<?php echo $controller; ?>">
      <ul id="tabbar">
      <li><a href="/"><img src="/static/home/mobile/js/index/hom1<?php if(in_array($controller,array('index'))): ?>_on<?php endif; ?>.png"><b>首页</b></a></li>
      <li><a href="/home/task/index.html"><img src="/static/home/mobile/js/index/hom2<?php if(in_array($controller,array('task'))): ?>_on<?php endif; ?>.png"><b>任务大厅</b></a></li>
      <li><a href="/home/invite.html"><img src="/static/home/mobile/js/index/hom3<?php if(in_array($controller,array('invite'))): ?>_on<?php endif; ?>.png"><b>邀请好友</b></a></td>
      <li><a href="/home/account.html"><img src="/static/home/mobile/js/index/hom4<?php if(in_array($controller,array('account','charge','fans','vip','feedback','feedback','notice','help'))): ?>_on<?php endif; ?>.png"><b>我的</b></a></li>
      </ul>
</footer>   
   <script>
    $(function() { 
      $(".flexslider").flexslider({
		animation: "slide",
		slideshowSpeed: 3000,
		directionNav: false, 
		pauseOnHover:true,
		}); 
    }); 
   </script>
       <script type="text/javascript" src="/static/home/mobile/js/index.js"></script>
    <?php echo !empty($site['baidu_stat'])?$site['baidu_stat']:''; ?>
    <?php echo !empty($site['baidu_chat'])?$site['baidu_chat']:''; ?>
      
    </body>
</html>