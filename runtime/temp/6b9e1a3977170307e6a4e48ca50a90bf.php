<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:34:"./views/home/mobile/task/add.phtml";i:1557088419;s:67:"/www/wwwroot/diuzha.cn/public/views/home/mobile/common/footer.phtml";i:1557148301;}*/ ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo !empty($item['id'])?'编辑':'发布'; ?>任务</title>
    <link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
    <link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/static/home/mobile/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/static/home/mobile/css/facaeincon.css" />
    <link rel="stylesheet" type="text/css" href="/static/home/mobile/css/base64face.css" />
    <link rel="stylesheet" type="text/css" href="/static/home/mobile/css/baseface3.css" />
    <link rel="stylesheet" type="text/css" href="/static/home/mobile/css/new_page.css?v=2" />
    <link rel="stylesheet" type="text/css" href="/static/home/mobile/css/add_newpage.css?v=2" />
    <!-- 日期选择 -->
    <script src="/static/plugins/mobiscroll-2.5.2/dev/js/mobiscroll.core-2.5.2.js" type="text/javascript"></script>
    <script src="/static/plugins/mobiscroll-2.5.2/dev/js/mobiscroll.core-2.5.2-zh.js" type="text/javascript"></script>
    <link href="/static/plugins/mobiscroll-2.5.2/dev/css/mobiscroll.core-2.5.2.css" rel="stylesheet" type="text/css" />
    <link href="/static/plugins/mobiscroll-2.5.2/dev/css/mobiscroll.animation-2.5.2.css" rel="stylesheet" type="text/css" />
    <script src="/static/plugins/mobiscroll-2.5.2/dev/js/mobiscroll.datetime-2.5.1.js" type="text/javascript"></script>
    <script src="/static/plugins/mobiscroll-2.5.2/dev/js/mobiscroll.datetime-2.5.1-zh.js" type="text/javascript"></script>
    <script src="/static/plugins/mobiscroll-2.5.2/dev/js/mobiscroll.android-ics-2.5.2.js" type="text/javascript"></script>
    <link href="/static/plugins/mobiscroll-2.5.2/dev/css/mobiscroll.android-ics-2.5.2.css" rel="stylesheet" type="text/css" />
    <!-- 日期选择 -->

    <!-- 弹出层 -->
    <link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
    <script src="/static/plugins/dialog/lib/zepto.min.js"></script>
    <script src="/static/plugins/dialog/js/dialog.js"></script>
    <!-- 弹出层 -->
    <script type="text/javascript" src="/static/home/mobile/js/global.js"></script>
    <!-- 页面特效 -->

    <script type="text/javascript" src="/static/home/mobile/js/mobile_index.js"></script>
    <style type="text/css">
        .new-header .dowm-btn {
            bottom: 0;
        }
        .new-header .back {
            bottom: 18px;
           float: left;
         	 background: url(../../static/home/mobile/images/return.png) no-repeat;
          background-size: auto;
          background-size: 9px 21px;
          margin-top: 5px;
        }
        .image-box-img{
            display: flex;
            display: -webkit-flex;
            margin-bottom: 10px;
        }
        .images-box,.image-box-img{
            display: flex;
            display: -webkit-flex;
            flex-flow: wrap;
            margin-bottom: 10px;
        }
        .images-box .item,.image-box-img .item{
            margin-right: 5px;
            margin-bottom: 5px;
            width: 100px;
            height: 100px;
            position: relative;
        }
        .images-box .item input,.image-box-img .item input{
            position: absolute;
            z-index: 3;
            opacity: 0;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        .images-box .item span,.image-box-img .item span{
            display: block;
            width: 100px;
            height: 100px;
            text-align: center;
            line-height: 60px;
        }
        .images-box .img-item img,.image-box-img .item img{
            width: 100%;
            height: 100%;
        }
      .dialog-toast .info-icon{
        margin-left:45px;
      }
      .step{
        margin-bottom:10px;
        height:400px;
      }
    </style>
</head>

<body>
<header class="new-header" style="padding-top: 15px;">
    <a href="javascript:history.go(-1)" class="back"></a>
    <div class="tit-name"><?php echo !empty($item['id'])?'编辑':'发布'; ?>悬赏</div>
  <!--  <span class="dowm-btn publish-task-btn"><?php echo !empty($item['id'])?'保存':'发布'; ?></span>-->
</header>
<div class="form-div">
<form id="post_form">
    <div class="step-task-item">
        <div class="add-step-task-item step-list ">
            <div class="step-item-title">
                选择分类
            </div>
            <div class="circle-container">
                <i class="van-icon van-icon-edit"></i>
            </div>
            <div class="step-line">

            </div>
        </div>
        <div class="add-step-task-item step-list ">
            <div class="step-item-title">
                基本信息
            </div>
            <div class="circle-container">
                <i class="van-step__circle"></i>
            </div>
            <div class="step-line">

            </div>
        </div>
        <div class="add-step-task-item step-list ">
            <div class="step-item-title">
                任务步骤
            </div>
            <div class="circle-container">
                <i class="van-step__circle"></i>
            </div>
            <div class="step-line">

            </div>
        </div>
        <div class="add-step-task-item step-list ">
            <div class="step-item-title">
                任务组
            </div>
            <div class="circle-container">
                <i class="van-step__circle"></i>
            </div>
            <div class="step-line">

            </div>
        </div>
        <div class="add-step-task-item step-list ">
            <div class="step-item-title">
                提交申请
            </div>
            <div class="circle-container">
                <i class="van-step__circle"></i>
            </div>
            <div class="step-line">

            </div>
        </div>
    </div>
    <div class="task" >
        <!-- 选择分类 -->
        <div class="step show-item" >
            <div class="task-item catagory-tree-select">
                <?php if(isset($item['is_display']) && $item['is_display'] == -1): ?>
                <span class="task-span" style="color: #FE511C;">任务未通过审核原因：</span>
                <p style="color: #272727;font-size: 13px;padding-right: 10px;">
                    <?php if(!empty($item['audit_remarks'])): ?>
                    <?php echo nl2br($item['audit_remarks']); endif; ?>
                </p>
                <?php endif; ?>
                <div class="select-catagory">
                    <div class="catagor-ellipsis tree-select">所有分类：</div>
                    <div class="catagor-ellipsis tree-select">简单悬赏：</div>
                    <div class="catagor-ellipsis tree-select">高价悬赏：</div>
                    <div class="catagor-ellipsis tree-select">其他：</div>
                </div>
                <div class="catagory-item">
                    <input type="hidden" name="category_id" value="<?php echo !empty($item['category_id'])?$item['category_id']:'6'; ?>"/>
                    <?php if(!empty($categories)): if(is_array($categories) || $categories instanceof \think\Collection || $categories instanceof \think\Paginator): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?>
                             <div class="catagor-ellipsis catagory-select-item" id="task-select_<?php echo $category['id']; ?>" data-id="<?php echo $category['id']; ?>">
                                 <?php echo $category['title']; ?>
                             </div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>

            </div>
        </div>
        <!-- 基本信息 -->
        <div class="step">
            <div class="task-item">
                <span class="new-add-task-label">任务标题：</span>
                <input type="text" name="title" class="task-txt new-add-task-content" placeholder="请输入任务标题" value="<?php echo !empty($item['title'])?$item['title']:''; ?>" required/>
                <div class="error-message"></div>
            </div>
            <div class="task-item">
                <span class="new-add-task-label">应用名称：</span>
                <input type="text" name="appName" class="task-txt new-add-task-content" placeholder="必须真实应用名，否则审核不过" value="<?php echo !empty($item['appName'])?$item['appName']:''; ?>" required/>
                <div class="error-message"></div>
            </div>
            <div class="task-item" style="padding: 0 0 10px;">
                <span class="new-add-task-label">任务详情：</span>
                <textarea class="shuoming  new-add-task-content" name="detail" placeholder="请在这里说明详细的需求和操作流程，审核标准（必填）" required><?php echo !empty($item['detail'])?$item['detail']:''; ?></textarea>
                <div class="error-message"></div>
            </div>
            <div class="task-item">
                        <span class="task-span" id="task-isRepeat" style="display:inline;">
                            <input type="hidden" name="rate" value="<?php echo !empty($item['rate'])?$item['rate']:'0'; ?>">
                            <a data-rate="0" class="t_wx <?php if(!isset($item['rate']) || $item['rate']==0): ?>t_wx_selected<?php endif; ?>">仅限一次</a>
                            <a data-rate="1" class="t_wx <?php if(isset($item['rate']) && $item['rate']==1): ?>t_wx_selected<?php endif; ?>">每天一次</a>
                           <!-- <a data-rate="2" class="t_wx <?php if(isset($item['rate']) && $item['rate']==2): ?>t_wx_selected<?php endif; ?>">定时任务</a>-->
                        </span>
            </div>
        </div>

        <!-- 设置步骤 -->
        <div class="step">

            <div class="van-cell-group van-hairline--top-bottom">
                <div class="van-cell van-cell--clickable">
                    <i class="van-icon van-icon-add-o van-cell__left-icon"></i>
                    <div class="van-cell__title">
                        <span>添加步骤</span>
                    </div>
                    <div class="van-cell__value">
                        <span>选择步骤类型</span>
                    </div>
                    <i class="van-icon van-icon-arrow van-cell__right-icon"></i>
                </div>
            </div>

            <div class="step-choose-page">
                <div class="step-actionsheet">
                    <div  class="step-actionsheet">
                        <div  class="step-actionsheet_item hairline-top"><span  class="step-actionsheet_name">收集数据</span></div>
                        <div  class="step-actionsheet_item hairline-top"><span  class="step-actionsheet_name">收集截图</span></div>
                        <div  class="step-actionsheet_item hairline-top"><span  class="step-actionsheet_name">网址跳转</span></div>
                        <div  class="step-actionsheet_item hairline-top"><span class="step-actionsheet_name">图文说明</span></div>
                    </div>
                </div>
                <div class="old-task-item">
                        <div class="task-item">
                            <span class="new-add-task-label">收集数据：</span>
                            <div id="data-item">
                            <textarea class='shuoming new-add-task-content' id='check_text_content' name='check_text_content' placeholder='如需接单者提供文字信息，请在此输入内容，如不需要可不填'><?php echo !empty($item['check_text_content'])?$item['check_text_content']:''; ?></textarea>
                            </div>
                        </div>

                        <div class="task-item"> 收集截图：</div>
                        <div id="upform">
                            <a href="javascript:" id="getImg" data-rate="1" class="t_wx2" onclick="getImg();">添加截图</a>
                        </div>
                    <div class="task-item" id="url-item" >
                        <span>网址跳转</span>：
                        <div id="url-redrict">
                            <input type="text" class="task-txt" id="about_url" name="about_url" placeholder="填写跳转网址，以http(s)://开头" value="<?php echo !empty($item['about_url'])?$item['about_url']:''; ?>" style="width:100%;" />
                        </div>
                    </div>
                        <div class="task-item" > 图文说明：
                            <span class="task-span" id="task-isRepeat" style="display:inline;">
                            <div id="upload_img">

                                    <a href="javascript:" id="addStepData" data-rate="1" class="t_wx2" onclick="uploadStepData();"><?php echo !empty($operate_steps)?'已有'.count($operate_steps).'个步骤，编辑操作说明':'添加操作说明'; ?></a>
                            </div>
                                </span>
                        </div>
                </div>
            </div>
            <div class="van-overlay"></div>
        </div>
        <!-- 任务组别 -->
         <div class="step">

             <div  class="van-cell-group van-hairline--top-bottom">
                 <div  class="van-cell van-cell--clickable" id="clicktable">
                     <i  class="van-icon van-icon-add-o van-cell__left-icon"><!----></i>
                     <div  class="van-cell__title">
                         <span >添加任务组</span>
                     </div>
                     <div  class="van-cell__value"><span >点击添加</span></div>
                     <i  class="van-icon van-icon-arrow van-cell__right-icon"><!----></i>
                 </div>
             </div>
             <div class="van-cell-group van-hairline--top-bottom" id="total_info">
                 <div  disable="" class="van-cell">
                     <i  class="van-icon van-icon-after-sale van-cell__left-icon"><!----></i>
                     <div  class="van-cell__title"><span >预付赏金</span></div>
                     <div  class="van-cell__value">
                         0.00元 (含15%服务费)
                     </div>
                 </div>
             </div>
             <div class="old-task-item">
             <div class="task-item">开始时间：
                 <input type="text" style="text-indent: 10px;" readonly id="task_beginTime" name="start_time" placeholder="请选择开始时间" value="<?php echo !empty($item['format_start_time'])?$item['format_start_time']:''; ?>" />
             </div>
             <div class="task-item">结束时间：
<!--                 <input type="text" style="text-indent: 10px;" readonly id="task_endTime" name="end_time" placeholder="请选择结束时间" value="<?php echo !empty($item['end_time'])?$item['end_time']:''; ?>" />-->
             </div>
             <div class="task-item">任务单价：
<!--                 <input type="text" data-fee="<?php echo !empty($setting['fee'])?$setting['fee']:0; ?>" id="unit_price" name="unit_price" placeholder="请输入任务单价" class="task-txt" value="<?php echo !empty($item['unit_price'])?$item['unit_price']:''; ?>" />-->
             </div>
             <div class="task-item">任务数量：
<!--                 <input type="number" id="task_num" name="ticket_num" placeholder="请输入任务数量" class="task-txt" value="<?php echo !empty($item['ticket_num'])?$item['ticket_num']:''; ?>" />-->
             </div>
             <div class="task-item">任务金额：
                 <input type="text" id="count_money" name="give_credit2" class="task-txt" readonly="readonly" placeholder="请输入奖励金额" value="<?php echo !empty($item['give_credit2'])?$item['give_credit2']:''; ?>" />
                 <span class="ts1">余额 <span id="now_gold"><?php echo $member['credit2']; ?></span>元</span>
             </div>
             <div class="task-item" style="color:#A6B5B6;">用户
                 <span style="color:red;" id="user_gold">0.00</span>元&nbsp;服务费
                 <span style="color:red;" id="plat_gold">0.00</span>元，退单按原款
             </div>
             <div class="task-item">
                 奖励积分：
                 <input type="number"  placeholder="请输入奖励积分" class="task-txt" name="give_credit1" value="<?php echo !empty($item['give_credit1'])?$item['give_credit1']:''; ?>" />
                 <span class="ts2">积分 <span id="now_silver"><?php echo intval($member['credit1']); ?></span>分</span>
             </div>



             <div class="task-item"> 审核周期：
                 <select style="display:inline;" class="task-txt" name="check_period">
                     <?php if(check_array($setting['period'])): if(is_array($setting['period']) || $setting['period'] instanceof \think\Collection || $setting['period'] instanceof \think\Paginator): $i = 0; $__LIST__ = $setting['period'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$period): $mod = ($i % 2 );++$i;?>
                     <option value="<?php echo $period; ?>"
                             <?php if(isset($item['check_period']) && $item['check_period']==$period): ?>
                     selected="selected"
                     <?php endif; ?>
                     >
                     <?php if($period == '0'): ?>
                     立即显示
                     <?php else: ?>
                     <?php echo $period; ?>小时后显示
                     <?php endif; ?>
                     </option>
                     <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                 </select>
             </div>

             <div class="task-item">
                 <span class="new-add-task-label">备注：</span>
                 <textarea class="shuoming new-add-task-content" id="remarks" name="remarks" placeholder="200字以内"><?php echo !empty($item['remarks'])?$item['remarks']:''; ?></textarea>
             </div>
             <div class="task-item new-task-item">
                 是否需要截图：
                 <input type="hidden" name="is_screenshot" value="<?php echo !empty($item['is_screenshot'])?$item['is_screenshot']:'0'; ?>">
                 <p class="checkbox checkbox-img <?php echo !empty($item['is_screenshot'])?'active':''; ?>">
                     <span class="circle"></span>
                 </p>
             </div>
             <div class="task-item new-task-item" style="display:none;">
                 是否限制IP：
                 <input type="hidden" name="is_ip_restriction" value="<?php echo !empty($item['is_ip_restriction'])?$item['is_ip_restriction']:'0'; ?>">
                 <p class="checkbox checkbox-ip <?php echo !empty($item['is_ip_restriction'])?'active':''; ?>">
                     <span class="circle"></span>
                 </p>
             </div>
             <div class="task-item" id="limit-area" style="display:none;">
                 请选择区域：
                 <select class="task-txt" style="width:60%;" name="province">
                     <option value="0">请选择限制区域</option>
                     <?php if(check_array($provinces)): if(is_array($provinces) || $provinces instanceof \think\Collection || $provinces instanceof \think\Paginator): $i = 0; $__LIST__ = $provinces;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$province): $mod = ($i % 2 );++$i;?>
                     <option value="<?php echo $province; ?>"><?php echo $province; ?></option>
                     <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                 </select>
             </div>

             <div class="task-item" id="betweenHourdiv" style="display:none;">
                 <input type="number" name="interval_hour" placeholder="请输入参与间隔小时数" class="task-txt" value="<?php echo !empty($item['interval_hour'])?$item['interval_hour']:''; ?>" />小时
             </div>
             <div class="task-item new-task-item">
                 是否限速：
                 <input type="hidden" name="is_limit_speed" value="<?php echo !empty($item['is_limit_speed'])?$item['is_limit_speed']:'0'; ?>">
                 <p class="checkbox checkbox-limitMin <?php echo !empty($item['is_limit_speed'])?'active':''; ?>">
                     <span class="circle"></span>
                 </p>
             </div>
             <div class="task-item" id="limitmindiv" style="display:none;">
                 每&nbsp;<span style="color: red"><?php echo !empty($setting['speed'])?$setting['speed']:5; ?></span>&nbsp;分钟限<input type="number" name="limit_ticket_num" placeholder="票数" class="task-txt" value="<?php echo !empty($item['limit_ticket_num'])?$item['limit_ticket_num']:''; ?>" style="width:80px;text-indent: 10px;" />票
             </div>
             <div class="task-item" style="display:none;">
                 任务完成后是否隐藏：
                 <span class="task-span" id="task-isHide" style="display:inline;">
                        <a href="javascript:void" class="t_wx">是</a><a href="javascript:void" class="t_wx t_wx_selected">否</a></span>
             </div>
             </div>
             <div  class="edit-box van-dialog new-task-item" style="z-index: 5;">
                 <div class="van-dialog__content">
                     <div  class="header van-hairline--bottom">添加任务</div>
                     <div  class="content van-cell-group">
                         <div  class="van-cell van-cell--clickable van-field">
                             <div class="van-cell__title van-field__label"><span>截止时间</span></div>
                             <div class="van-cell__value">
                                 <div class="van-field__body">
<!--                                     <input type="text" placeholder="若不填则满额自动结束" disabled="disabled" class="van-field__control van-field__control--right">-->
                                     <input type="text" class="van-field__control van-field__control--right" style="text-indent: 10px;" readonly id="task_endTime" name="end_time" placeholder="请选择结束时间" value="<?php echo !empty($item['end_time'])?$item['end_time']:''; ?>" />
                                 </div>
                             </div><i class="van-icon van-icon-arrow van-cell__right-icon"><!----></i></div>
                         <div  class="van-field van-cell">
                             <div  class="van-cell__title van-field__label">
                                 <div  style="line-height: 30px;">
                                     任务赏金
                                 </div>
                             </div>
                             <div  class="van-cell__value">
                                 <div  class="van-field__body">
                                     <div  class="van-field__control van-field__control--right van-stepper">
                                         <input type="number" data-fee="<?php echo !empty($setting['fee'])?$setting['fee']:0; ?>" id="unit_price" name="unit_price" placeholder="请输入任务单价" class="task-txt stepper-input" value="<?php echo !empty($item['unit_price'])?$item['unit_price']:''; ?>" />
                                     </div>
                                     <div  class="van-field__icon" style="margin-left: 4px;">
                                         元
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div  class="van-field van-cell">
                             <div  class="van-cell__title van-field__label">
                                 <div style="line-height: 30px;">
                                     悬赏数量
                                 </div>
                             </div>
                             <div  class="van-cell__value">
                                 <div  class="van-field__body">
                                     <div  class="van-field__control van-field__control--right van-stepper">
<!--                                         <button class="van-stepper__minus"></button>-->
<!--                                         <input type="number" class="van-stepper__input">-->
<!--                                         <button class="van-stepper__plus"></button>-->
                                         <input type="number" id="task_num" name="ticket_num" placeholder="请输入任务数量" class="task-txt stepper-input" value="<?php echo !empty($item['ticket_num'])?$item['ticket_num']:''; ?>" />
                                     </div>
                                     <div class="van-field__icon" style="margin-left: 4px;">
                                         个
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="van-hairline--top van-dialog__footer van-dialog__footer--buttons">
                     <button class="van-button van-button--default van-button--large van-dialog__cancel"><span class="van-button__text">取消</span></button>
                     <button class="van-button van-button--default van-button--large van-dialog__confirm van-hairline--left"><span class="van-button__text">添加</span></button>
                 </div>
             </div>
             <div class="van-overlay"></div>
         </div>
        <!-- 提交申请 -->
        <div class="step">



        </div>
    </div>
    <!--   收集截图   -->
    <div class="write_step_wrap task-item-pic" style="z-index: 2013;">
        <div class="step_cont_wrap" style="top:30px">
            <div class="opera_content">
            <div class="image-box-img">
                <?php if(!empty($item['thumbs'])): if(is_array($item['thumbs']) || $item['thumbs'] instanceof \think\Collection || $item['thumbs'] instanceof \think\Paginator): $k = 0; $__LIST__ = $item['thumbs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$thumb): $mod = ($k % 2 );++$k;?>
                <div class="item img-item">
                    <img class="images-item" src="<?php echo to_media($thumb); ?>" />
                    <input type="hidden" name="thumbsi[]" value="<?php echo $k-1; ?>" id="thumbsi-img"/>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                <div class="item">
                    <span id="uploadForm"></span>
                </div>
            </div>
            <div class="files"  style="display: none">
                <input type="file" accept="image/*" name="thumbs[]">
            </div>
                <div class="message"></div>
        </div>
            <div class="guize_btn_wrap"  onclick="finishStepImg();">确定</div>
        </div>
    </div>

    <!-- 操作流程   -->
    <div class="write_step_wrap" style="z-index: 2013;">
        <div class="step_cont_wrap" style="top:30px">
            <div class="opera_content">
                <!-- <div class="close_wrapper"  onclick="returnCreateStep();"></div> -->
                <div class="guize_title">请填写操作说明</div>
                <!-- 内容 -->
                <div class="write_step_content">
                    <div class="step_content step_cont">
                        <ul class="clearfix" id="stepUl"></ul>
                        <div class="write_step_pager">
                            <select id="write_step_pager_select" onchange="changePage(this);">
                                <option value="0">步骤</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="guize_btn_wrap"  onclick="finishStep();">确定</div>
            <a class="step_bottom_a  bottom_a  prev_a " onclick="changePrev(1);"></a>
            <a class="step_bottom_a  bottom_a  next_a " onclick="changeNext(1);"></a>
        </div>
    </div>
    <input type="hidden" name="id" id="id" value="<?php echo !empty($item['id'])?$item['id']:'0'; ?>">
    <div class="action-bar action-step">
        <button class="warning button-warning" style="background: #fde03f;"><span  class="button-text" style="color:#834100;">上一步</span></button>
        <button  class="show-btn button-show"><span class="button-text">查看预览</span></button>
        <button class="danger button-danger"  style="background: #fde03f;"><span  class="button-text"  style="color:#834100;">下一步</span></button>
    </div>
</form>
<input type="hidden" name="check_state" id="check_state">
<input type="hidden" name="min_price" id="min_price">
<input type="hidden" name="min_number" id="min_number" value="1">
<input type="hidden" name="service_charge" id="service_charge" value="<?php echo !empty($setting['fee'])?$setting['fee']:0; ?>">


</div>

<script type="text/javascript" src="/static/home/mobile/js/task_add.js?v=6"></script>
<script type="text/javascript">
    var scroWidth= 300;//流程图的宽度
    var scroWidthCheck = 70;//验证图的宽度
    var post_form_action = window.location.href;

    <?php if(isset($item['id']) && $item['id'] > 0): ?>
    countMoney(<?php echo $item['unit_price']; ?>, <?php echo $item['ticket_num']; ?>);

    post_form_action = '/home/task/save';
    <?php endif; ?>

        //审核图样
        /*var checkImgLength = $("#clearfix li").length;
        if(checkImgLength == 0 ){
            var html = '';
            html += '<li class="checkFile" id="checkFile0">';
            html += '<div class="file_wrap checkFileWrap" id="checkFileWrap0">';
            html += '<img src="/static/home/mobile/images/img.png" id="checkImg0">';
            html += '<input type="file" name="checkFile" class="checkInput" id="checkImgData0" onchange="setImagePreviews(0);" accept="image/*">';
            html += '<div class="upload_msg checkMsg" id="checkMsg0">上传图片</div></div></li>';
            html += '<div class="clear"></div>';
            $("#clearfix").append(html);
        }else{
            var html = '';
            html += '<li class="checkFile" id="checkFile' + checkImgLength + '">';
            html += '<div class="file_wrap checkFileWrap" id="checkFileWrap' + checkImgLength + '">';
            html += '<img src="/static/home/mobile/images/img.png" id="checkImg' + checkImgLength + '">';
            html += '<input type="file" name="checkFile" class="checkInput" id="checkImgData' + checkImgLength + '" onchange="setImagePreviews(' + checkImgLength + ');" accept="image/*">';
            html += '<div class="upload_msg checkMsg" id="checkMsg' + checkImgLength + '">上传图片</div></div></li>';
            html += '<div class="clear"></div>';
            $("#clearfix").append(html);
        }
        if(checkImgLength > 1){
            $("#imgNum").html(checkImgLength-1);//已上传审核图片的张数
        }*/

        var html = '';
        var operate_step_i, operate_step_result;

        <?php if(!is_null($operate_steps)): if(is_array($operate_steps) || $operate_steps instanceof \think\Collection || $operate_steps instanceof \think\Paginator): $k = 0; $__LIST__ = $operate_steps;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$operate_step): $mod = ($k % 2 );++$k;?>
        operate_step_i = <?php echo $k; ?>;
        //阿拉伯数字转换为简写汉字转换
        try {
            operate_step_result = Arabia_To_SimplifiedChinese(operate_step_i);
        } catch (e) {
            console.error(e);
        }

        html += '<li class="each_step' + (operate_step_i-1) + '">';
        html += '<div class="each_step"><div class="step_intro">';
        html += '<div class="stepWrap" id="stepWrap' + (operate_step_i-1) + '">';
        html += '<div class="step_title"  id="step_title' + (operate_step_i-1) + '">步骤' + operate_step_result +'<span class="del' + (operate_step_i-1) + '"   onclick="delStep(' + (operate_step_i-1) + ');">删除</span></div>';
        html += '</div>';
        html += '<input type="hidden" class="operate_step_id" name="operate_step_id[]" value="<?php echo $operate_step['id']; ?>" />';
        html += '<textarea id="stepText' + (operate_step_i-1) + '" name="process_sm[org<?php echo $operate_step['id']; ?>]" onblur="checkContent(this);" maxlength="1000" id="stepText' + (operate_step_i-1) + '" class="step_text" placeholder="请输入操作说明文字"><?php echo $operate_step['content']; ?></textarea></div>';
        html += '<div class="step_photo_wrap  stepPhotoWrap"  id="stepPhotoWrap' + (operate_step_i-1) + '"><div class="file_wrap stepFileWrap" id="stepFileWrap' + (operate_step_i-1) + '">';
        html += '<img src="<?php echo to_media($operate_step['image']); ?>" class="uploadImg" id="resultImg' + (operate_step_i-1) + '"/>';
        html += '<input type="file" name="processFile[org<?php echo $operate_step['id']; ?>]" class="stepInput"  id="uploadImgData' + (operate_step_i-1) + '"  onchange="stepSetImagePreviews(' + (operate_step_i-1) + ');" accept="image/*" />';
        html += '<div class="upload_msg stepMsg" id="stepMsg' + (operate_step_i-1) + '">上传图片</div>';
        html += '</div></div></div></li>';
        <?php endforeach; endif; else: echo "" ;endif; ?>
            $("#stepUl").append(html+'<div class="clear"></div>');
            $("#stepUl").css({width:scroWidth * operate_step_i + "px"});
            <?php endif; ?>

                //写流程
                /* $(".step_cont_wrap").css({minHeight : scroHeight + "px"}); */
                var stepImgLength = $("#stepUl li").length;

                if(stepImgLength == 0 ){
                    //初次进入，未添加过任何步骤
                    html += '<li class="each_step0">';
                    html += '<div class="each_step"><div class="step_intro">';
                    html += '<div class="stepWrap" id="stepWrap0">';
                    html += '<div class="step_title"  id="step_title0">步骤一<span class="del0"   onclick="delStep(0);">删除</span></div>';
                    html += '</div>';
                    html += '<textarea id="process_sm" name="process_sm[]" onblur="checkContent(this);" maxlength="1000" id="stepText0" class="step_text" placeholder="请输入操作说明文字"></textarea></div>';
                    html += '<div class="step_photo_wrap  stepPhotoWrap"  id="stepPhotoWrap0"><div class="file_wrap stepFileWrap" id="stepFileWrap0">';
                    html += '<img src="/static/home/mobile/images/img.png" id="resultImg0"/>';
                    html += '<input type="file" name="processFile[]" class="stepInput"  id="uploadImgData0"  onchange="stepSetImagePreviews(0);" accept="image/*" />';
                    html += '<div class="upload_msg stepMsg" id="stepMsg0">上传图片</div>';
                    html += '</div></div></div></li><div class="clear"></div>';

                    $("#stepUl").append(html);
                    $("#stepUl").css({width:scroWidth + "px"});
                }else{
                    $(".step_bottom_a").css({display:"block"});
                }
                $("#stepUl li").css({width:scroWidth + "px"});

			console.log(document.body.clientHeight);
			
</script>
<!--<footer id="footer-bar" lang="<?php echo $controller; ?>">
      <ul id="tabbar">
      <li><a href="/"><img src="/static/home/mobile/js/index/hom1<?php if(in_array($controller,array('index'))): ?>_on<?php endif; ?>.png"><b>首页</b></a></li>
      <li><a href="/home/task/index.html"><img src="/static/home/mobile/js/index/hom2<?php if(in_array($controller,array('task'))): ?>_on<?php endif; ?>.png"><b>任务大厅</b></a></li>
      <li><a href="/home/invite.html"><img src="/static/home/mobile/js/index/hom3<?php if(in_array($controller,array('invite'))): ?>_on<?php endif; ?>.png"><b>邀请好友</b></a></td>
      <li><a href="/home/account.html"><img src="/static/home/mobile/js/index/hom4<?php if(in_array($controller,array('account','charge','fans','vip','feedback','feedback','notice','help'))): ?>_on<?php endif; ?>.png"><b>我的</b></a></li>
      </ul>
</footer>-->
</body>

</html>