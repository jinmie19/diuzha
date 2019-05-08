<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:34:"./views/admin/pc/index/index.phtml";i:1556076205;s:64:"/www/wwwroot/diuzha.cn/public/views/admin/pc/common/header.phtml";i:1541935408;s:65:"/www/wwwroot/diuzha.cn/public/views/admin/pc/common/sidebar.phtml";i:1545544994;s:64:"/www/wwwroot/diuzha.cn/public/views/admin/pc/common/footer.phtml";i:1544122234;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>管理系统 | 管理后台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- 弹出框 -->
    <link rel="stylesheet" type="text/css" href="/static/plugins/SmallPop/spop.min.css">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/static/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/static/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/static/plugins/Ionicons/css/ionicons.min.css">
    <!-- 图片展示插件样式 -->
    <link rel="stylesheet" href="/static/plugins/magnify/dist/jquery.magnify.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/css/skins/_all-skins.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/static/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/static/plugins/html5shiv.min.js"></script>
    <script src="/static/plugins/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/static/plugins/SmallPop/spop.min.js"></script>
    <!-- jQuery 3 -->
    <script src="/static/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/static/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/static/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- 剪切板 -->
    <script type="text/javascript" src="/static/plugins/clipboard.min.js"></script>
    <!-- 图片展示插件 -->
    <script type="text/javascript" src="/static/plugins/magnify/dist/jquery.magnify.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/static/plugins/AdminLTE/js/adminlte.min.js"></script>
    <!--引入JS-->
    <script src="/static/admin/web/js/global.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>系统</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>管理系统</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img onerror="this.src='/static/admin/web/images/avatar.png'" src="<?php echo to_media($admin['avatar']); ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $admin['username']; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img onerror="this.src='/static/admin/web/images/avatar.png'" src="<?php echo to_media($admin['avatar']); ?>" class="img-circle" alt="User Image">
                                <p>
                                    <?php echo $admin['username']; ?>
                                    <small><?php echo date('Y年m月d日'); ?></small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo U('index/profile'); ?>" class="btn btn-default btn-flat">资料设置</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo U('auth/login'); ?>" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img onerror="this.src='/static/admin/web/images/avatar.png'" src="<?php echo to_media($admin['avatar']); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $admin['username']; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i>&#22312;&#32447;</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">&#21151;&#33021;&#33756;&#21333;</li>

            <?php if(is_array($treeMenu) || $treeMenu instanceof \think\Collection || $treeMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $treeMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$oo): $mod = ($i % 2 );++$i;if($oo['childnum'] == '0'): ?>
                <li <?php if(menuActive($oo['name'], $oo['level'])): ?>class="active"<?php endif; ?>><a href="<?php echo U($oo['name']); ?>"><i class="<?php echo $oo['icon']; ?>"></i><span><?php echo $oo['title']; ?></span></a></li>
                <?php elseif($oo['level'] == '1'): ?>
                <li class="treeview <?php if(menuActive($oo['name'], $oo['level'])): ?>active<?php endif; ?>">
                    <a href="javascript:void(0);">
                        <i class="<?php echo $oo['icon']; ?>"></i><span><?php echo $oo['title']; ?></span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                        <?php if(is_array($oo['children']) || $oo['children'] instanceof \think\Collection || $oo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $oo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$to): $mod = ($i % 2 );++$i;?>
                        <li <?php if(menuActive($to['name'])): ?>class="active"<?php endif; ?>><a href="<?php echo U($to['name']); ?>"><i class="<?php echo $to['icon']; ?>"></i><?php echo $to['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>

         

        
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            &#20113;&#29275;&#21697;&#38712;&#23631;&#22825;&#19979;&#32593;&#31449;&#31649;&#29702;
            <small>&#x7F51;&#x7AD9;&#x8BBE;&#x7F6E;</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> &#x7F51;&#x7AD9;&#x7BA1;&#x7406;</a></li>
            <li class="active">&#x7F51;&#x7AD9;&#x8BBE;&#x7F6E;</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#base" data-toggle="tab">&#x57FA;&#x672C;&#x8BBE;&#x7F6E;</a></li>
                        <li><a href="#seo" data-toggle="tab">SEO&#x8BBE;&#x7F6E;</a></li>
                        <li><a href="#email" data-toggle="tab">&#x90AE;&#x7BB1;&#x914D;&#x7F6E;</a></li>
                        <li><a href="#credit" data-toggle="tab">&#x5956;&#x52B1;&#x8BBE;&#x7F6E;</a></li>
                        <li><a href="#task" data-toggle="tab">&#x4EFB;&#x52A1;&#x8BBE;&#x7F6E;</a></li>
                        <li><a href="#study" data-toggle="tab">&#x6559;&#x7A0B;&#x8BBE;&#x7F6E;</a></li>
                      <li><a href="#linkregis" data-toggle="tab">推广链接</a></li>
                    </ul>
                    <div class="page-content" style="padding: 20px 0">
                        <form method="post" class="form-horizontal form" id="post_form">
                            <div class="tab-content">
                                <div class="tab-pane active" id="base">
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x7F51;&#x7AD9;&#x540D;&#x79F0;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[title]" value="<?php echo !empty($config['setting']['title'])?$config['setting']['title']:''; ?>" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x7F51;&#x7AD9;&#x540D;&#x79F0;&#x6BD4;&#x5982;&#xFF1A;&#x4E91;&#x725B;&#x54C1;&#x8BBA;&#x575B;&#x9738;&#x5C4F;&#x5929;&#x4E0B;">
                                        </div>
                                    </div>
                                    <?php echo tpl_upload_image(['name'=>'setting[logo]','title' => '&#x7F51;&#x7AD9;logo','value'=>!empty($config['setting']['logo'])?$config['setting']['logo']:'','placeholder'=>'&#x8BF7;&#x4E0A;&#x4F20;&#x7F51;&#x7AD9;logo','help'=>'&#x5EFA;&#x8BAE;&#x5BBD;&#x9AD8;：138*56']); ?>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">QQ&#x7FA4;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[qq]" value="<?php echo !empty($config['setting']['qq'])?$config['setting']['qq']:''; ?>" placeholder="&#x8BF7;&#x8F93;&#x5165;QQ&#x7FA4;&#x53F7;&#x7801;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x5BA2;&#x670D;&#x5FAE;&#x4FE1;&#x53F7;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[wechat]" value="<?php echo !empty($config['setting']['wechat'])?$config['setting']['wechat']:''; ?>" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x5BA2;&#x670D;&#x5FAE;&#x4FE1;&#x53F7;&#x7801;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x5907;&#x6848;&#x4FE1;&#x606F;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[copyright]" value="<?php echo !empty($config['setting']['copyright'])?$config['setting']['copyright']:''; ?>" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x5907;&#x6848;&#x4FE1;&#x606F;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x767E;&#x5EA6;&#x7EDF;&#x8BA1;&#x4EE3;&#x7801;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="setting[baidu_stat]" maxlength="1000" rows="5" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x767E;&#x5EA6;&#x7EDF;&#x8BA1;&#x4EE3;&#x7801;"><?php echo !empty($config['setting']['baidu_stat'])?$config['setting']['baidu_stat']:''; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x767E;&#x5EA6;&#x5546;&#x6865;&#x4EE3;&#x7801;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="setting[baidu_chat]" maxlength="1000" rows="5" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x767E;&#x5EA6;&#x7EDF;&#x8BA1;&#x4EE3;&#x7801;"><?php echo !empty($config['setting']['baidu_chat'])?$config['setting']['baidu_chat']:''; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="seo">
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x4E91;&#x725B;&#x54C1;SEO&#x6807;&#x9898;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="setting[seo_title]" maxlength="255" placeholder="&#x8BF7;&#x8F93;&#x5165;SEO&#x6807;&#x9898;&#x6BD4;&#x5982;&#x4E91;&#x725B;&#x54C1;&#x8BBA;&#x575B;"><?php echo !empty($config['setting']['seo_title'])?$config['setting']['seo_title']:''; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">SEO&#x5173;&#x952E;&#x8BCD;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="setting[seo_keywords]" maxlength="255" placeholder="&#x8BF7;&#x8F93;&#x5165;SEO&#x5173;&#x952E;&#x8BCD;&#x6BD4;&#x5982;&#x4E91;&#x725B;&#x54C1;&#x6E90;&#x7801;"><?php echo !empty($config['setting']['seo_keywords'])?$config['setting']['seo_keywords']:''; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">SEO&#x63CF;&#x8FF0;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="setting[seo_description]" maxlength="255" placeholder="&#x8BF7;&#x8F93;&#x5165;SEO&#x63CF;&#x8FF0;&#x6BD4;&#x5982; &#x9738;&#x5C4F;&#x5929;&#x4E0B;&#x662F;&#x4E91;&#x725B;&#x54C1;&#x8BBA;&#x575B;&#x72EC;&#x5BB6;&#x5F00;&#x53D1;&#x7684;&#x65B0;&#x578B;&#x4F20;&#x5A92;&#x7CFB;&#x7EDF;"><?php echo !empty($config['setting']['seo_description'])?$config['setting']['seo_description']:''; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="email">
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">SMTP&#x670D;&#x52A1;&#x5668;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[SMTP_HOST]" value="<?php echo !empty($config['setting']['SMTP_HOST'])?$config['setting']['SMTP_HOST']:''; ?>" placeholder="&#x8BF7;&#x8F93;&#x5165;SMTP&#x670D;&#x52A1;&#x5668;&#x5730;&#x5740;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">SMTP&#x670D;&#x52A1;&#x5668;&#x7AEF;&#x53E3;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[SMTP_PORT]" value="<?php echo !empty($config['setting']['SMTP_PORT'])?$config['setting']['SMTP_PORT']:''; ?>" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x7AEF;&#x53E3;&#x53F7;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">SMTP&#x670D;&#x52A1;&#x5668;&#x7528;&#x6237;&#x540D;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[SMTP_USER]" value="<?php echo !empty($config['setting']['SMTP_USER'])?$config['setting']['SMTP_USER']:''; ?>" placeholder="请输入用户名">
                                            <span class="help-block">&#x90AE;&#x7BB1;&#x5730;&#x5740;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">SMTP&#x670D;&#x52A1;&#x5668;&#x5BC6;&#x7801;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[SMTP_PASS]" value="<?php echo !empty($config['setting']['SMTP_PASS'])?$config['setting']['SMTP_PASS']:''; ?>" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x5BC6;&#x7801;">
                                            <span class="help-block">&#x7533;&#x8BF7;SMTP&#x670D;&#x52A1;&#x5668;&#x7684;&#x5BC6;&#x7801;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x53D1;&#x4EF6;&#x4EBA;&#x90AE;&#x7BB1;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[FROM_EMAIL]" value="<?php echo !empty($config['setting']['FROM_EMAIL'])?$config['setting']['FROM_EMAIL']:''; ?>" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x90AE;&#x7BB1;&#x5730;&#x5740;">
                                            <span class="help-block">&#x7533;&#x8BF7;SMTP&#x670D;&#x52A1;&#x5668;&#x7684;&#x90AE;&#x7BB1;&#x5730;&#x5740;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x53D1;&#x4EF6;&#x4EBA;&#x540D;&#x79F0;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[FROM_NAME]" value="<?php echo !empty($config['setting']['FROM_NAME'])?$config['setting']['FROM_NAME']:''; ?>" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x59D3;&#x540D;&#x3001;&#x516C;&#x53F8;&#x540D;&#x3001;&#x53D1;&#x4EF6;&#x4EBA;">
                                            <span class="help-block">&#x90AE;&#x4EF6;&#x53D1;&#x9001;&#x663E;&#x793A;&#x7684;&#x53D1;&#x9001;&#x4EBA;&#x59D3;&#x540D;&#x3001;&#x516C;&#x53F8;&#x540D;&#x79F0;&#x7B49;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x6D4B;&#x8BD5;&#x90AE;&#x7BB1;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[TEST_EMAIL]" value="<?php echo !empty($config['setting']['TEST_EMAIL'])?$config['setting']['TEST_EMAIL']:''; ?>" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x6D4B;&#x8BD5;&#x6536;&#x4EF6;&#x4EBA;&#x90AE;&#x7BB1;&#x5730;&#x5740;">
                                            <span class="help-block js-send-email" style="cursor: pointer;">&#x70B9;&#x51FB;&#x53D1;&#x9001;&#x6D4B;&#x8BD5;&#x90AE;&#x4EF6;</span>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $(function () {
                                            //&#x53D1;&#x9001;&#x6D4B;&#x8BD5;&#x90AE;&#x4EF6;
                                            $(".js-send-email").click(function () {
                                                message('正在发送','','info');
                                                var email = $(this).prev().val();
                                                $.post(
                                                    "<?php echo U('test/email'); ?>",
                                                    {email:email},
                                                    function (res) {
                                                        message(res.message,res.redirect,res.type)
                                                    },'json'
                                                );
                                            });
                                        });
                                    </script>
                                </div>
                                <div class="tab-pane" id="credit">
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x9080;&#x8BF7;&#x597D;&#x53CB;&#x5956;&#x52B1;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">&#x4F1A;&#x5458;&#x9080;&#x8BF7;&#x597D;&#x53CB;</span>
                                                <input type="number" name="setting[invitation_first_task_award]" value="<?php echo !empty($config['setting']['invitation_first_task_award'])?$config['setting']['invitation_first_task_award']:'0'; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x9080;&#x8BF7;&#x8FD4;&#x5229;">
                                                <span class="input-group-addon">&#x5143;</span>
                                            </div>
                                            <span class="help-block">&#x4F1A;&#x5458;&#x9080;&#x8BF7;&#x597D;&#x53CB;&#x7B2C;&#x4E00;&#x6B21;&#x5956;&#x52B1;&#x591A;&#x5C11;&#x91D1;&#x989D;&#xFF0C;&#x5237;&#x624B;&#x505A;&#x7B2C;&#x4E00;&#x5355;&#x4EFB;&#x52A1;&#x540E;&#x624D;&#x4F1A;&#x7ED9;&#x5956;&#x52B1;&#xFF0C;&#x5173;&#x95ED;&#x8BF7;&#x8BBE;&#x7F6E;&#x4E3A;0</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x9080;&#x8BF7;&#x63D0;&#x73B0;&#x8FD4;&#x5229;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">&#x63D0;&#x73B0;&#x65F6;&#x8FD4;&#x5229;</span>
                                                <input type="number" name="setting[invitation_withdraw_rebate]" value="<?php echo !empty($config['setting']['invitation_withdraw_rebate'])?$config['setting']['invitation_withdraw_rebate']:'0'; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x9080;&#x8BF7;&#x8FD4;&#x5229;">
                                                <span class="input-group-addon">%</span>
                                            </div>
                                            <span class="help-block">&#x4F1A;&#x5458;&#x63D0;&#x73B0;&#x91D1;&#x989D;&#x767E;&#x5206;&#x4E4B;&#x51E0;&#x6263;&#x9664;&#x7ED9;&#x9080;&#x8BF7;&#x4E0A;&#x7EBF;&#xFF0C;&#x5173;&#x95ED;&#x8BF7;&#x8BBE;&#x7F6E;&#x4E3A;0</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x9080;&#x8BF7;&#x597D;&#x53CB;&#x8FD4;&#x5229;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">&#x505A;&#x4EFB;&#x52A1;&#x5956;&#x52B1;</span>
                                                <input type="number" name="setting[invitation_rebate]" value="<?php echo !empty($config['setting']['invitation_rebate'])?$config['setting']['invitation_rebate']:'0'; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x9080;&#x8BF7;&#x8FD4;&#x5229;">
                                                <span class="input-group-addon">%</span>
                                            </div>
                                            <span class="help-block">&#x4E0B;&#x7EBF;&#x505A;&#x4EFB;&#x52A1;&#x6BCF;&#x4EFD;&#x767E;&#x5206;&#x4E4B;&#x51E0;&#x6263;&#x9664;&#x7ED9;&#x9080;&#x8BF7;&#x4E0A;&#x7EBF;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x6BCF;&#x65E5;&#x7B7E;&#x5230;&#x8BBE;&#x7F6E;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">&#x6BCF;&#x65E5;&#x7B7E;&#x5230;&#x9001;</span>
                                                <input type="number" name="setting[sign_give_credit1]" value="<?php echo !empty($config['setting']['sign_give_credit1'])?$config['setting']['sign_give_credit1']:''; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x91D1;&#x989D;">
                                                <span class="input-group-addon">&#x79EF;&#x5206;</span>
                                            </div>
                                            <span class="help-block">&#x79EF;&#x5206;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x8FDE;&#x7EED;&#x7B7E;&#x5230;&#x8BBE;&#x7F6E;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">&#x8FDE;&#x63A5;&#x7B7E;&#x5230;&#x500D;&#x6570;</span>
                                                <input type="number" name="setting[sign_continue_give]" value="<?php echo !empty($config['setting']['sign_continue_give'])?$config['setting']['sign_continue_give']:''; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x500D;&#x6570;">
                                            </div>
                                            <span class="help-block">&#x4F8B;&#x5982;&#xFF0C;&#x8BBE;&#x7F6E;&#x4E3A;2&#xFF0C;&#x7B2C;&#x4E00;&#x5929;&#x7B7E;&#x5230;&#x9886;2&#x5206;,&#x7B2C;&#x4E8C;&#x5929;&#x7B7E;&#x5230;4&#x5206;&#xFF0C;&#x7B2C;&#x4E09;&#x5929;6&#x5206;&#xFF0C;&#x5982;&#x679C;&#x9694;&#x4E00;&#x5929;&#x6CA1;&#x7B7E;&#x5230;&#xFF0C;&#x4ECE;&#x5934;&#x5F00;&#x59CB;&#x8BA1;&#x7B97;</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="task">
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x63D0;&#x73B0;&#x6700;&#x4F4E;&#x91D1;&#x989D;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">&#x6700;&#x4F4E;&#x91D1;&#x989D;</span>
                                                <input type="number" name="setting[withdraw_min]" value="<?php echo !empty($config['setting']['withdraw_min'])?$config['setting']['withdraw_min']:0; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x670D;&#x52A1;&#x8D39;&#x7387;">
                                                <span class="input-group-addon">&#x5143;</span>
                                            </div>
                                            <span class="help-block">&#x5982;&#x8BBE;&#x7F6E;1&#xFF0C;&#x63D0;&#x73B0;&#x6700;&#x4F4E;&#x91D1;&#x989D;&#x4E3A;&#xFF1A;1&#x5143;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x63D0;&#x73B0;&#x624B;&#x7EED;&#x8D39;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">&#x63D0;&#x73B0;&#x91D1;&#x989D;&#x7684;</span>
                                                <input type="number" name="setting[withdraw_fee]" value="<?php echo !empty($config['setting']['withdraw_fee'])?$config['setting']['withdraw_fee']:0; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x670D;&#x52A1;&#x8D39;&#x7387;">
                                                <span class="input-group-addon">%</span>
                                            </div>
                                            <span class="help-block">&#x5982;&#x8BBE;&#x7F6E;10%&#xFF0C;&#x63D0;&#x73B0;&#x91D1;&#x989D;&#x4E3A;&#xFF1A;100&#x5143;&#xFF0C;&#x5219;&#x6263;&#x9664;100*10%=10&#x5143;&#x624B;&#x7EED;&#x8D39;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x670D;&#x52A1;&#x8D39;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">&#x5956;&#x52B1;&#x91D1;&#x989D;&#x7684;</span>
                                                <input type="number" name="setting[fee]" value="<?php echo !empty($config['setting']['fee'])?$config['setting']['fee']:0; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x670D;&#x52A1;&#x8D39;&#x7387;">
                                                <span class="input-group-addon">%</span>
                                            </div>
                                            <span class="help-block">&#x5982;&#x8BBE;&#x7F6E;10%&#xFF0C;&#x53D1;&#x5E03;&#x4EFB;&#x52A1;&#x7684;&#x5956;&#x52B1;&#x91D1;&#x989D;&#x4E3A;&#xFF1A;100&#x5143;&#xFF0C;&#x5219;&#x6263;&#x9664;100*10%=10&#x5143;&#x624B;&#x7EED;&#x8D39;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x5BA1;&#x6838;&#x5468;&#x671F;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[period]" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x5C0F;&#x65F6;&#x6570;&#xFF0C;&#x591A;&#x4E2A;'#'&#x9694;&#x5F00;" value="<?php echo !empty($config['setting']['period'])?$config['setting']['period']:''; ?>">
                                            <span class="help-block">&#x8F93;&#x5165;0&#x4EE3;&#x8868;&#x514D;&#x5BA1;&#x6838;&#xFF0C;1&#x4EE3;&#x8868;1&#x5C0F;&#x65F6;&#xFF0C;&#x591A;&#x4E2A;&#x6570;&#x5B57;&#x8BF7;&#x7528;#&#x5206;&#x5272;&#xFF0C;&#x5982;0#6#12</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x9650;&#x901F;&#x9891;&#x7387;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <input type="number" name="setting[speed]" value="<?php echo !empty($config['setting']['speed'])?$config['setting']['speed']:0; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x5206;&#x949F;&#x6570;">
                                                <span class="input-group-addon">&#x5206;&#x949F;</span>
                                            </div>
                                            <span class="help-block">&#x5982;&#x8BBE;&#x7F6E;5&#xFF0C;&#x4EE3;&#x8868;&#x53D1;&#x5E03;&#x4EFB;&#x52A1;&#x65F6;&#x53EF;&#x8BBE;&#x7F6E;5&#x5206;&#x949F;&#x5185;&#x9650;&#x5236;&#x7684;&#x62A2;&#x5355;&#x4EBA;&#x6570;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x5E73;&#x53F0;&#x5BA1;&#x6838;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <label class="radio-inline">
                                                <input type="radio" name="setting[push_check]" value="1" <?php echo !empty($config['setting']['push_check'])?'checked':''; ?>>
                                                &#x5F00;&#x542F;
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="setting[push_check]" value="0" <?php echo !empty($config['setting']['push_check'])?'':'checked'; ?>>
                                                &#x5173;&#x95ED;
                                            </label>
                                            <span class="help-block">&#x5F00;&#x542F;&#x540E;&#xFF0C;&#x53D1;&#x5E03;&#x7684;&#x4EFB;&#x52A1;&#x9700;&#x8981;&#x5E73;&#x53F0;&#x5BA1;&#x6838;&#x540E;&#x624D;&#x80FD;&#x663E;&#x793A;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x7F6E;&#x9876;&#x8D39;&#x7528;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <input type="number" name="setting[top_fee]" value="<?php echo !empty($config['setting']['top_fee'])?$config['setting']['top_fee']:0; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x7F6E;&#x9876;&#x8D39;&#x7528;">
                                                <span class="input-group-addon">&#x5143;</span>
                                            </div>
                                            <span class="help-block">&#x5982;&#x8BBE;&#x7F6E;15&#xFF0C;&#x7F6E;&#x9876;&#x8D39;&#x7528;&#x4E3A;&#x6BCF;&#x5C0F;&#x65F6;15&#x5143;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x7F6E;&#x9876;&#x9650;&#x65F6;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <input type="number" name="setting[top_max_hour]" value="<?php echo !empty($config['setting']['top_max_hour'])?$config['setting']['top_max_hour']:0; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x7F6E;&#x9876;&#x9650;&#x65F6;">
                                                <span class="input-group-addon">&#x5C0F;&#x65F6;</span>
                                            </div>
                                            <span class="help-block">&#x5982;&#x8BBE;&#x7F6E;5&#xFF0C;&#x6700;&#x591A;&#x80FD;&#x7F6E;&#x9876;5&#x4E2A;&#x5C0F;&#x65F6;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x63A5;&#x5355;&#x9650;&#x65F6;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <input type="number" name="setting[receive_order_limit_time]" value="<?php echo !empty($config['setting']['receive_order_limit_time'])?$config['setting']['receive_order_limit_time']:0; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x63A5;&#x5355;&#x9650;&#x65F6;&#x5206;&#x949F;&#x6570;">
                                                <span class="input-group-addon">&#x5206;&#x949F;</span>
                                            </div>
                                            <span class="help-block">&#x5982;&#x8BBE;&#x7F6E;5&#xFF0C;&#x7528;&#x6237;&#x62A2;&#x5355;&#x540E;5&#x5206;&#x949F;&#x5185;&#x672A;&#x4E0A;&#x4F20;&#x9A8C;&#x8BC1;&#xFF0C;&#x62A2;&#x5355;&#x5C06;&#x81EA;&#x5DF1;&#x5220;&#x9664;</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&#x5BA1;&#x6838;&#x9650;&#x65F6;</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <input type="number" name="setting[check_order_limit_time]" value="<?php echo !empty($config['setting']['check_order_limit_time'])?$config['setting']['check_order_limit_time']:0; ?>" class="form-control" placeholder="&#x8BF7;&#x8F93;&#x5165;&#x5BA1;&#x6838;&#x9650;&#x65F6;">
                                                <span class="input-group-addon">&#x5C0F;&#x65F6;</span>
                                            </div>
                                            <span class="help-block">&#x5982;&#x8BBE;&#x7F6E;1&#xFF0C;&#x4EE3;&#x8868;&#x96C7;&#x4E3B;&#x53D1;&#x5E03;&#x4EFB;&#x52A1;&#x540E;1&#x5C0F;&#x65F6;&#x5185;&#x4E0D;&#x5BA1;&#x6838;&#x4EFB;&#x52A1;&#xFF0C;&#x7CFB;&#x7EDF;&#x4F1A;&#x81EA;&#x52A8;&#x5BA1;&#x6838;&#x901A;&#x8FC7;&#xFF0C;&#x4F63;&#x91D1;&#x8FDB;&#x5165;&#x7528;&#x6237;&#x5E10;&#x53F7;&#x4E2D;</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="study">
                                    <?php echo tpl_ueditor(['title'=>'&#x63A5;&#x4EFB;&#x52A1;&#x6559;&#x7A0B;','name'=>'setting[join_task_detail]','value'=>!empty($config['setting']['join_task_detail'])?$config['setting']['join_task_detail']:'']); ?>
                                    <?php echo tpl_ueditor(['title'=>'&#x53D1;&#x4EFB;&#x52A1;&#x6559;&#x7A0B;','name'=>'setting[push_task_detail]','value'=>!empty($config['setting']['push_task_detail'])?$config['setting']['push_task_detail']:'']); ?>
                                </div>

                              
                              
                              
								
<div class="tab-pane" id="linkregis">
    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">推广链接</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="setting[linkregis]" value="<?php echo !empty($config['setting']['linkregis'])?$config['setting']['linkregis']:''; ?>" placeholder="例如:  http://www.baidu.com/ ">
                                        </div>
                                    </div>
</div>
                              
                              
                              
                              
                              
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12 col-sm-offset-2">
                                    <button type="button" name="submit" class="btn btn-primary">&#x63D0;&#x4EA4;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            //&#x63D0;&#x4EA4;&#x5206;&#x7C7B;&#x4FE1;&#x606F;
                            $("button[name='submit']").click(function () {
                                $.post(
                                    window.location.href,
                                    $('#post_form').serialize(),
                                    function (res) {
                                        message(res.message,res.redirect,res.type)
                                    },'json'
                                );
                            });
                        });
                    </script>
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
    </section>
</div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
				&#20113;&#29275;&#21697;&#38712;&#23631;&#22825;&#19979;&#20256;&#23186;&#31995;&#32479;&#32;&#50;&#46;&#48;&#46;&#51;</div>
                <strong>&#67;&#111;&#112;&#121;&#114;&#105;&#103;&#104;&#116;&#32;&#38;&#99;&#111;&#112;&#121;&#59;&#32;&#50;&#48;&#49;&#56;&#45;&#45;&#50;&#48;&#50;&#48; <a target="_blank" href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#119;&#119;&#119;&#46;&#118;&#105;&#112;&#49;&#122;&#119;&#46;&#99;&#111;&#109;">&#20113;&#29275;&#21697;&#35770;&#22363;</a>.</strong> All rights reserved.
            </footer>
            <div class="control-sidebar-bg"></div>
        </div>
    </body>
</html>

