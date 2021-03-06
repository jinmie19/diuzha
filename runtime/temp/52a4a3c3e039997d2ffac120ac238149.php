<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"./views/home/mobile/taskcheck/index.phtml";i:1556912327;s:67:"/www/wwwroot/diuzha.cn/public/views/home/mobile/common/footer.phtml";i:1557148301;}*/ ?>
﻿<!doctype html>
<html>
	<head>
	<meta name="apple-mobile-web-app-capable" content="yes">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>[<?php echo !empty($item['id'])?$item['id']:''; ?>]<?php echo !empty($item['title'])?$item['title']:''; ?>,佣金<?php echo !empty($item['unit_price'])?$item['unit_price']:''; ?>元</title>
	<link rel="stylesheet" href="/static/home/mobile/css/bootstrap.css">
	<link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
	<link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">
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
/* 审核状态 */
.check_state{
    position: absolute;
    right: 0;
    top: 0;
    z-index:4;
}
.check_state_sign,.down_img_btn,.check_ok,.check_no{
    display: block;
    float: right;
    max-width: 20px;
    height: 20px;
}
.check_state_sign{
    min-width:20px;
    text-align: center;
    font-size: 0.62rem;
    line-height: 20px;
    color: #fff;
    background-color: #56b1ff;
}

.check_ok,.check_no{
    position: relative;
    width: 20px;
    height:20px;
    right: -1px;
}
.check_ok img,.check_no img{
    position: absolute;
    top:50%;
    left:50%;
}
.check_no{
    background-color: #FE4B1C;
}
.check_no img{
    width: 10px;
    height: 10px;
    margin: -5px 0 0 -5px;
}
    </style>
    </head>
    <body data-offset="50" id="htmlBody">
    <header class="site-header header-fixed">
        <input type="hidden" id="taskId">
        <a onclick="history.back()" class="back"></a>
        <div class="tit-name" id="title_txt">上传验证</div>
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
 <?php if(!empty($item['thumbs'])): ?>
<div class="fujian cl">

            <a class=" js-component-link nui-txt-link" style="outline: 0px;cursor: pointer;padding: 5px 8px 4px;border-radius: 3px;background-color: #fde03f;font-family: &quot;Microsoft Yahei&quot;, verdana;font-size: 15px;white-space: nowrap;color: #834100;text-align: center;

;">&nbsp;+ 请按以下“审核图例”提交审核验证 +</a>
  <br><br>
            <div class=" swiper-container">
                <div class="swiper-wrapper">
                    <?php if(is_array($item['thumbs']) || $item['thumbs'] instanceof \think\Collection || $item['thumbs'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['thumbs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$thumb): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide">
                        <a><img src="<?php echo to_media($thumb); ?>"></a></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <?php endif; ?>
        <div class="fujian2 cl">
            <form id="post_form">
            <p class="tit">验证图</p>
            <!-- 详细验证图 -->
            <div class="step_wrap check_step_wrap">
                <ul class="clearfix" id="checkUl">
                    <!-- <div id="checkDiv"></div> -->
                    <li class="checkFile" id="checkFile0">
                        <div class="file_wrap" id="checkFileWrap0">
                            <img src="/static/home/mobile/images/img.png" id="checkImg0">
                            <input type="file" name="checkFile[]" class="checkInput" id="checkImgData0" onchange="setImagePreviews(0);" accept="image/*">
                            <div class="upload_msg checkMsg" id="checkMsg0">上传图片</div>
                        </div>
                    </li>
                </ul>
                <a class="bottom_a  prev_a" onclick="changePrev();"></a>
                <a class="bottom_a  next_a" onclick="changeNext();"></a>
            </div>  
            <!-- 提示信息   -->
            <div class="msg_cont check_msg">注：如需上传多张验证图，传完第一张后，点击右侧箭头可继续上传下一张，最多可上传5张。</div>
            <!-- 文字验证   -->
              <?php if(!empty($item['check_text_content'])): ?>
            <div class="check_text_content_wrap">
                <textarea name="check_text_content" id="check_text_content" class="wenzi_check_textarea"  placeholder="<?php echo $item['check_text_content']; ?>"></textarea>  
            </div>
              <?php endif; ?>
            <!-- 上传之后显示按钮 -->
            <div class="check_btn_wrap content_hide">
                <div class="check_btn">
                    <div class="each_check_btn" onclick="returnCreateCheck();">取消</div>
                    <div class="each_check_btn" onclick="save();">确认提交</div>
                </div>
            </div> 
            <div class="check_msg">提示：请诚信做单，骗单将被罚款，严重者封号。</div>
            <input type="hidden" name="id" value="<?php echo !empty($item['id'])?$item['id']:'0'; ?>" />
            </form>
        </div>

<!--<div class="pr-shuxing">
            <p>标题：<span id="task_title" style="color:#666666"><?php echo $item['title']; ?></span></p>
            <p>审核周期：<span id="task_cycle" style="color:#666666"><?php echo $item['check_period']; ?>小时</span></p>
            <p>是否需要截图：<span id="task_needImg" style="color:#666666"><?php echo !empty($item['is_screenshot'])?'是':'否'; ?></span></p>
            <p style="display: none;">是否限制区域：<span id="task_limitIp" style="color:#666666"><?php echo !empty($item['is_ip_restriction'])?'是':'否'; ?></span></p>
            <p style="display: none;"><span id="task_isRepeat" style="color:red;"><?php echo !empty($item['province'])?$item['province']:'无地区限制'; ?></span></p>
            <p id="task_number">
                <?php if($item['rate'] == 0): ?>
                仅限一次
                <?php elseif($item['rate'] == 1): ?>
                每天一次
                <?php elseif($item['rate'] == 2): ?>
                <?php echo $item['interval_hour']; ?>小时一次
                <?php endif; ?>
            </p>
            <p>任务奖励：单价&nbsp;<span id="task_gold"><?php echo $item['unit_price']; ?></span>&nbsp;元&nbsp;&nbsp;积分&nbsp;<span id="task_silver" style="color:#333333"><?php echo floor_float($item['give_credit1']/$item['ticket_num']); ?></span>&nbsp;分 </p>
        </div>
        <div class="pr-xiangqing" id="task_url_div">
            <p class="tit" id="task_url_txt">相关地址</p>
            <p id="task_url" onclick="location.href='<?php echo $item['about_url']; ?>'"><?php echo $item['about_url']; ?></p>
        </div>
        <div class="pr-xiangqing">
            <p class="tit">任务需求</p>
            <p id="task_description" style="width:98%">
                <?php echo nl2br($item['detail']); ?>
            </p>
        </div>
        <?php if(!empty($item['check_text_content'])): ?>
        <div class="pr-xiangqing">
            <p class="tit">文字验证</p>
            <p id="task_description" style="width:98%">
                <?php echo nl2br($item['check_text_content']); ?>
            </p>
        </div>
        <?php endif; if(!empty($item['remarks'])): ?>
        <div class="pr-xiangqing">
            <p class="tit">备注</p>
            <p id="task_description" style="width:98%">
                <?php echo nl2br($item['remarks']); ?>
            </p>
        </div>
        <?php endif; ?>
-->
       
        
        <footer id="footer-bar" lang="<?php echo $controller; ?>">
      <ul id="tabbar">
      <li><a href="/"><img src="/static/home/mobile/js/index/hom1<?php if(in_array($controller,array('index'))): ?>_on<?php endif; ?>.png"><b>首页</b></a></li>
      <li><a href="/home/task/index.html"><img src="/static/home/mobile/js/index/hom2<?php if(in_array($controller,array('task'))): ?>_on<?php endif; ?>.png"><b>任务大厅</b></a></li>
      <li><a href="/home/invite.html"><img src="/static/home/mobile/js/index/hom3<?php if(in_array($controller,array('invite'))): ?>_on<?php endif; ?>.png"><b>邀请好友</b></a></td>
      <li><a href="/home/account.html"><img src="/static/home/mobile/js/index/hom4<?php if(in_array($controller,array('account','charge','fans','vip','feedback','feedback','notice','help'))): ?>_on<?php endif; ?>.png"><b>我的</b></a></li>
      </ul>
</footer>

        <script type="text/javascript" src="/static/home/mobile/js/jquery.min.js"></script>
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
        <!-- 弹出层 -->
        <script type="text/javascript">
    //屏幕可用区域高度
    var scroWidth=$(window).width();
    var scroHeight=window.innerHeight;

    //上传
    function setImagePreviews(id) {

        var docObj = document.getElementById("checkImgData" + id);
        if (docObj.files && docObj.files[0]) {
            
            $("#checkImg" + id).attr("src",window.URL.createObjectURL(docObj.files[0]));

        }else {
            //IE下，使用滤镜
            docObj.select();
            var imgSrc = document.selection.createRange().text;
            var localImagId = document.getElementById("checkImg" + id);
            //必须设置初始大小
            localImagId.style.width = "300px";
            localImagId.style.height = "500px";
            //图片异常的捕捉，防止用户修改后缀来伪造图片
            try {
                localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
            }
            catch (e) {
                alert("您上传的图片格式不正确，请重新选择!");
                return false;
            }
            document.selection.empty();
        }


        $("#checkImg" + id).addClass('uploadImg');
        $("#checkFileWrap" + id + "  input[type=file]").css({width:"10rem",marginLeft:"-5rem"});
        $("#checkMsg" + id).addClass('content_hide');
        $("#checkUl li").css({width:scroWidth + "px"});

        var delWrap = document.getElementById("checkState" + id);
        if(delWrap == null || delWrap == '' || delWrap == undefined){
            //判断是否是一张多次更改 - 否
            //增加删除按钮
            var delHtml = '';
            delHtml += '<div class="check_state" id="checkState'+ id +'">';
            delHtml += '<div class="check_no" onclick="delCheckImg('+ id +');"><img src="/static/home/mobile/images/state_no.png" alt="不合格"/></div></div>';
            $("#checkFileWrap" + id).append(delHtml);
           
            var liLength = $("#checkUl li").length; 
            if(liLength < 5){
                $("#checkUl .clear").remove();
                //增减添加图片项
                var html = '';
                html += '<li class="checkFile" id="checkFile' + (id+1) + '">';
                html += '<div class="file_wrap" id="checkFileWrap' + (id+1) + '">';
                html += '<img src="/static/home/mobile/images/img.png" id="checkImg' + (id+1) + '">';
                html += '<input type="file" name="checkFile[]" class="checkInput" id="checkImgData' + (id+1) + '" onchange="setImagePreviews(' + (id+1) + ');" accept="image/*">';
                html += '<div class="upload_msg checkMsg" id="checkMsg' + (id+1) + '">上传图片</div></div></li>';
                html += '<div class="clear"></div>';
                $("#checkUl").append(html);
               // $(".bottom_a").css({display:"block"});
            }          
            var img_num=$("#checkUl li").length; //图片个数
            $("#checkUl").css( "width",scroWidth * img_num); //设置ul的长度
            $("#checkUl li").css("width",scroWidth + "px"); 
            $(".msg_cont").html("注：点击右侧箭头可继续上传。");//上传过相片的提示信息
            $(".msg_cont").addClass('msg_cont_center');
               var divstart="<div class='newShow'>";
               var divend="</div>";
              	var addpiclist="";
          		var len=img_num-1;
               if(img_num>0)
               {
                
                 for(var g=0;g<len;g++)
                 {
                   if(g!=0)
                   {
                      $("#checkFile"+(g-1)).find(".newShow").remove();
                   }
                   addpiclist+=$("#checkFile"+(g)).html();
                   $("#checkFile"+(g)).empty();
                 }
                 var newid=id+1;
                 console.log(newid+"开始");
              	$("#checkFileWrap"+newid).before(addpiclist);
               }

          		console.log(newid+"后面");
          changeNext();
			
        }
		
        var subBtnStat = $(".check_btn_wrap").css("display");
        if(subBtnStat == 'none'){
            $(".check_btn_wrap").show();
        }
        return true;
    }
    function delCheckImg(id){
    	$("#checkFileWrap"+id).remove();
    }

    function delCheckImg_default(id){
        //删除审核图样单张图片
        //图片上传后点取消，改变title  并且隐藏图片切换和提交按钮
        //$("title,.title").html('上传图片');
        $("#checkFile" + id).remove();
        var checkLiNum = $("#checkUl li").length;
        if(checkLiNum == 1){
            $(".bottom_a").css({display:"none"});
            $(".msg_cont").html("注：如需上传多张验证图，传完第一张后，点击右侧箭头可继续上传下一张，最多可上传5张。");//没有上传过的提示信息     
            $(".msg_cont").removeClass('msg_cont_center');
            $("#checkUl").css({width:scroWidth * checkLiNum + "px"});
        }else if(checkLiNum == 4){
            //删除此张照片之前已经上传的5张照片，没有空白的上传页，所以在删除之后在最后添加一个上传空白页
            var lastLiId = $(".checkFile").eq(checkLiNum-1).attr("id");
            var lastLiIdNum = parseInt(lastLiId.substr(lastLiId.length-1 , 1));
            var lastImgSrc = $("#checkImg" + lastLiIdNum).attr("src");      
            if(lastImgSrc != '/static/home/mobile/images/img.png'){  
                $("#checkUl .clear").remove();
                //增减添加图片项
                var html = '';
                html += '<li class="checkFile" id="checkFile' + (lastLiIdNum+1) + '">';
                html += '<div class="file_wrap" id="checkFileWrap' + (lastLiIdNum+1) + '">';
                html += '<img src="/static/home/mobile/images/img.png" id="checkImg' + (lastLiIdNum+1) + '">';
                html += '<input type="file" name="checkFile[]" class="checkInput" id="checkImgData' + (lastLiIdNum+1) + '" onchange="setImagePreviews(' + (lastLiIdNum+1) + ');" accept="image/*">';
                html += '<div class="upload_msg checkMsg" id="checkMsg' + (lastLiIdNum+1) + '">上传图片</div></div></li>';
                html += '<div class="clear"></div>';
                $("#checkUl").append(html);
                var img_num=$("#checkUl li").length; //图片个数
                $("#checkUl").css( "width",scroWidth * img_num); //设置ul的长度
                $("#checkUl li").css("width",scroWidth + "px"); 
                $(".msg_cont").html("注：点击右侧箭头可继续上传。");//上传过相片的提示信息
                $(".msg_cont").addClass('msg_cont_center');
            }
            
        }else{
            $("#checkUl").css({width:scroWidth * checkLiNum + "px"});
        }   
        
    }     

    function returnCreateCheck(){
        //取消
        var checkLiNum = $("#checkUl").html('');
        $(".checkFile,#checkUl .clear").remove();
        //图片上传后点取消，改变title  并且隐藏图片切换和提交按钮
        $("title,.title").html('上传图片');
        var html = '';
        html += '<li class="checkFile" id="checkFile0">';
        html += '<div class="file_wrap checkFileWrap" id="checkFileWrap0">';
        html += '<img src="/static/home/mobile/images/img.png" id="checkImg0">';
        html += '<input type="file" name="checkFile[]" class="checkInput" id="checkImgData0" onchange="setImagePreviews(0);" accept="image/*">';
        html += '<div class="upload_msg checkMsg" id="checkMsg0">上传图片</div></div></li>';
        html += '<div class="clear"></div>';
        $("#checkUl").append(html);

        $("#checkUl").css({width:scroWidth + "px" , marginLeft:"0"});
        $(".bottom_a").css({display:"none"});//左右切换按钮
        $(".check_btn_wrap").hide();
        $(".msg_cont").html("注：如需上传多张验证图，传完第一张后，点击右侧箭头可继续上传下一张，最多可上传5张。");//没有上传过的提示信息
        $(".msg_cont").removeClass('msg_cont_center');
        
    }

    var checkImgN = 0 , stepImgN = 0;
    play();

    //点击放大图片
    function imgBig(id){
        var thisSrc = $(id).attr("src");
        $(".big_img").attr("src",thisSrc);
        $(".big_img_wrap,.big_img_content").show();
        var thisHeight = parseInt($(".big_img").css("height"));
        $(".big_img").css({ marginTop : -thisHeight/2 + "px"});
    }

    function  changePrev(){
        //上一张
        checkImgN--;
        checkImgN = (checkImgN < 0 ? 0 : checkImgN);
        play();
    }

    function changeNext(){
        //下一张
        var img_num = $("#checkUl li").length; //图片个数
        checkImgN++;
        checkImgN = ( checkImgN > (img_num-1) ? (img_num-1) : checkImgN );
        play();
    }

    function play() {
        //动画移动
        var img_num=$("#checkUl li").length; //图片个数
        if(img_num > 0){
            img = new Image(); //图片预加载
            img.src = $("#checkUl li").eq(checkImgN).find("img").attr("src");
        }

        if (img_num > 1) {
            //大于1个的时候进行移动
            if (checkImgN < (img_num - 1)) {
                //前1个
                $("#checkUl").animate({"marginLeft": (-(scroWidth) * (checkImgN < 0 ? 0 : checkImgN))});
            }
            else if (checkImgN >= (img_num - 1)) {
                //后1个
                $("#checkUl").animate({"marginLeft": (-(scroWidth) * (img_num - 1))});
            }
        }
    }

    function save() {
        var checkImgLength = $("#checkUl li").length - 1;
        if(checkImgLength==0){
             message('请上传验证图！','','error');
             return false;
        } 
        var check_text_flag = '<?php echo $check_text_flag; ?>';
        if(check_text_flag=='1'){
            if($("#check_text_content").val().trim()==""){
                message('文字验证 "<?php echo $check_text_content_js; ?>" 未按要求填写！','','error');
                $("#check_text_content").focus();
                return false;
            }           
        }

        message('正在发布','','loading');
        var formData = new FormData($( "#post_form" )[0]);
        var ua = navigator.userAgent.toLowerCase();
        if (ua.indexOf('safari') != -1 || ua.indexOf('iphone') != -1 || ua.indexOf('ipad') != -1 || ua.indexOf('ipod') != -1) {
            try {
                var iterator = formData.entries(), end = false;
                while(end == false) {
                    var item = iterator.next();
                    if (item.value != undefined) {
                        var pair = item.value;
                        console.log(pair);
                        if (pair[1] instanceof File) {
                            var files = formData.getAll(pair[0]);
                            formData.delete(pair[0]);
                            jQuery.each(files, function (key, fileNameObject) {
                                if (fileNameObject.name && fileNameObject.size != 0) {
                                    formData.append(pair[0], fileNameObject);
                                }
                            });
                        }
                    } else if (item.done == true) {
                        end = true;
                    }
                }
            } catch (e) {
                console.log(e.message);
            }
        }
        $.ajax({
            url: '/home/taskcheck/post',
            type: 'POST',
            data: formData,
            dataType: "json",
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
                message(res.message,res.redirect,res.type);
            },
            error: function () {
                message('请求错误','','error');
            }
        });
    }

        </script>
    </body>
</html>