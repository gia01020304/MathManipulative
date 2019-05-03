<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Math Manipulative</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>/lib/admins/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>/lib/admins/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/lib/admins/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
        <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>/lib/admins/_all-skins.min.css">
  

    <!-- Google Font -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" id="main-section">

        <header class="main-header">
            <!-- Logo -->
            <a href="index.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">MM</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                    <b>Math </b>Manipulative</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">
                                <i class="fa fa-gears"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menu</li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cogs"></i>
                            <span>Config page</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                   
                        <div class="box contentbody">
                            <div class="box-header">
                                <?php 
                                if(isset($pageName)){ ?>
                                <h3>
                                    <?php
                                        echo $pageName; 
                                    ?>    
                                </h3>
                                <?php
                                }
                                ?>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <?php 
                        if(isset($subView) && isset($data)) {
                            $this->load->view($subView,$data);
                        } else if (isset($subView) && !isset($data)) {
                            $this->load->view($subView);
                        }
                        ?>
                    </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->
    <script src="<?= base_url() ?>/lib/jquery.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>/lib/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/lib/admins/adminlte.min.js"></script>
    <script src="<?= base_url() ?>/lib/admins/admin.js"></script>

</body>

</html>