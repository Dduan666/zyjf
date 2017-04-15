<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo ($title); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/Public/bootstrap/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/Public/bootstrap/css/ionicons.min.css">

    <link rel="stylesheet" href="/Public/bootstrap/css/public.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="/Public/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/Public/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/Public/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/Public/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/Public/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/Public/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/Public/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/Public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script type="text/javascript" src="/Public/bootstrap/js/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" href="/Public/bootstrap/js/jquery.validation/1.14.0/validation.css">
    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo U('Admin/Index/index');?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>侧栏</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>返回主页</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                    <?php if(session('user.id') == null): ?><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/Public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">管理员</span>
                        </a>
                        
                    </li>
                    <?php else: ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/Public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo session('user.name') ?></span>
                        </a><?php endif; ?>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="<?php echo U('Admin/Login/loginOut');?>">退出</a>
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
                    <img src="/Public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo session('user.name') ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> 欢迎您!</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                        class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>用户项</span> 
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="<?php echo U('Admin/Auser/index');?>"><i class="fa fa-circle-o"></i> 用户列表</a></li>
                        <li><a href="<?php echo U('Admin/Auser/add');?>"><i class="fa fa-circle-o"></i> 用户添加</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>流量统计</span> 
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="<?php echo U('Admin/Tong/index');?>"><i class="fa fa-circle-o"></i> 统计列表</a></li>
                        <li class="active"><a href="<?php echo U('Admin/Tong/flow');?>"><i class="fa fa-circle-o"></i> IP列表</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>销售精英</span>
                        <i class="fa fa-angle-left pull-right"></i>

                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Jy/index');?>"><i class="fa fa-circle-o"></i> 精英列表</a></li>
                        <li><a href="<?php echo U('Admin/Jy/add');?>"><i class="fa fa-circle-o"></i> 添加精英</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>精英审核</span>
                        <i class="fa fa-angle-left pull-right"></i>

                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Sh/index');?>"><i class="fa fa-circle-o"></i> 审核列表</a></li>
                        <li><a href="<?php echo U('Admin/Sh/add');?>"><i class="fa fa-circle-o"></i> 添加精英</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>精英顾问图</span>
                        <i class="fa fa-angle-left pull-right"></i>

                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Jt/index');?>"><i class="fa fa-circle-o"></i> 精英顾问图列表</a></li>
                        <li><a href="<?php echo U('Admin/Jt/add');?>"><i class="fa fa-circle-o"></i> 精英顾问图添加</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>精英评价</span>
                        <i class="fa fa-angle-left pull-right"></i>

                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Click/index');?>"><i class="fa fa-circle-o"></i> 评价列表</a></li>
                        <li><a href="<?php echo U('Admin/Click/add');?>"><i class="fa fa-circle-o"></i> 添加评价</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>成功案例</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Case/index');?>"><i class="fa fa-circle-o"></i> 案例列表</a></li>
                        <li><a href="<?php echo U('Admin/Case/add');?>"><i class="fa fa-circle-o"></i> 添加案例</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>服务类型</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Type/index');?>"><i class="fa fa-circle-o"></i> 类型列表</a></li>
                        <li><a href="<?php echo U('Admin/Type/add');?>"><i class="fa fa-circle-o"></i> 类型添加</a></li>
                        <li><a href="<?php echo U('Admin/Serve/index');?>"><i class="fa fa-circle-o"></i> 服务类型列表</a></li>
                        <li><a href="<?php echo U('Admin/Serve/add');?>"><i class="fa fa-circle-o"></i> 服务类型添加</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>资讯管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Notice/index');?>"><i class="fa fa-circle-o"></i> 资讯列表</a></li>
                        
                        <li><a href="<?php echo U('Admin/Notice/add');?>"><i class="fa fa-circle-o"></i> 资讯添加</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>攻略问答</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Problem/index');?>"><i class="fa fa-circle-o"></i> 问答列表</a></li>
                        
                        <li><a href="<?php echo U('Admin/Problem/add');?>"><i class="fa fa-circle-o"></i> 问答添加</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>预约信息</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <!-- <li><a href="<?php echo U('Admin/Yu/index');?>"><i class="fa fa-circle-o"></i> 手机号预约</a></li> -->
                        
                        <li><a href="<?php echo U('Admin/Yu/index2');?>"><i class="fa fa-circle-o"></i> 在线预约</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>帮助预约</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/By/index');?>"><i class="fa fa-circle-o"></i> 贷款预约</a></li>
                        
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>首页轮播图</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Lun/index');?>"><i class="fa fa-circle-o"></i> 轮播列表</a></li>
                        
                        <li><a href="<?php echo U('Admin/Lun/add');?>"><i class="fa fa-circle-o"></i> 轮播添加</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>未完成评估</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Ping/index');?>"><i class="fa fa-circle-o"></i> 评估参数</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>评估数据</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Pg/index');?>"><i class="fa fa-circle-o"></i> 评估列表</a></li>
                        <li><a href="<?php echo U('Admin/Pg/index2');?>"><i class="fa fa-circle-o"></i> 手机评估列表</a></li>
                    </ul>
                </li>
                <?php if(session('user.rank') == 5): ?><li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>业务员管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Userbusiness/index');?>"><i class="fa fa-circle-o"></i> 业务员列表</a></li>
                        <li><a href="<?php echo U('Admin/Userbusiness/add');?>"><i class="fa fa-circle-o"></i> 添加业务员</a>
                        </li>
                        
                    </ul>
                </li><?php endif; ?>
				<?php if(session('user.rank') == 5): ?><li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>管理员管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/User/index');?>"><i class="fa fa-circle-o"></i> 管理员列表</a></li>
                        <li><a href="<?php echo U('Admin/User/add');?>"><i class="fa fa-circle-o"></i> 添加管理员</a>
                        </li>
                        
                    </ul>
                </li><?php endif; ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>友情链接</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Links/index');?>"><i class="fa fa-circle-o"></i> 链接列表</a></li>
                        <li><a href="<?php echo U('Admin/Links/add');?>"><i class="fa fa-circle-o"></i> 添加链接</a></li>
                    </ul>
                </li>
                
                <li class="treeview">
                    <a href="<?php echo U('Admin/Webconfig/index');?>">
                        <i class="fa fa-folder"></i> <span>网站配置</span>
                    </a>
                    
                </li>
                
                <!-- <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    


        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    后台首页
                    <small>首页列表</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                    <li class="active">后台首页</li>
                </ol>
            </section>
            <section class="content">
                <div class="col-lg-3 col-xs-6" id="auser">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>Auser</h3>
                            <p>用户管理</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="<?php echo U('Admin/Auser/index');?>" class="small-box-footer">转到 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6" id="case">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>Case</h3>
                            <p>成功案例</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-smile
                            "></i>
                        </div>
                        <a href="<?php echo U('Admin/Case/index');?>" class="small-box-footer">转到 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green" id="notice">
                        <div class="inner">
                            <h3>Notice<sup style="font-size: 20px"></sup></h3>
                            <p>资讯管理</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?php echo U('Admin/Notice/index');?>" class="small-box-footer">转到 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                
                <div class="col-lg-3 col-xs-6" id="webconfig">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>Config</h3>
                            <p>网站配置</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-laptop"></i>
                        </div>
                        <a href="<?php echo U('Admin/Webconfig/index');?>" class="small-box-footer">转到 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
            </section>
        </div>
        
             
    

    
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="/Public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/Public/bootstrap/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/Public/bootstrap/js/raphael-min.js"></script>
<script src="/Public/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/Public/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/Public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/Public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/Public/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="/Public/bootstrap/js/moment.min.js"></script>
<script src="/Public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/Public/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/Public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/Public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/Public/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="/Public/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/Public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/Public/dist/js/demo.js"></script>

</body>
</html>


<script>
function all(){
    alert(11)
}
</script>