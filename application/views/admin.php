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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>/lib/admins/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/lib/admins/AdminLTE.css">
    <link rel="stylesheet" href="<?= base_url() ?>/lib/1.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>/lib/admins/_all-skins.min.css">
    <link rel="icon" href="<?= base_url() ?>/lib/images/favicon.png">

    <!-- Google Font -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
    <script type="text/javascript">
        var pathRelative = '<?= base_url() ?>';
    </script>
    <?php 
        $isAdmin = false;
        if(array_key_exists('id_user',$this->session->userdata)) {
            $id = $this->session->userdata['id_user'];
            $userModel = new UsersModel();
            $user = $userModel->GetUserById($id);
            if(!empty($user) && $user->role == 0) { // Normal
                    $isAdmin = false;
            } else if(!empty($user) && $user->role == 1) { // Admin
                    $isAdmin = true;
            }
        }
    ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="loading">Loading&#8230;</div>
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
                        <?php
		            if (!isset($this->session->userdata['logged_in'])) { ?>
                        <li id="login">
                            <a href="#">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>Login</span>
                            </a>
                        </li>
                        <?php	
                    } else {?>
                        <li id="logout">
                            <a href="#">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                        <?php }?>
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
                    <?php if($isAdmin === true) { ?>
                    <li>
                        <a href="<?= base_url()?>ConfigCL">
                            <i class="fa fa-cogs"></i>
                            <span>Config page</span>
                        </a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="#">
                            <i class="fas fa-user-circle"></i>
                            <span>Account</span>
                        </a>
                    </li>
                    <li class="li-item">
                        <a href="#" id="btnMyFile">
                            <i class="fa fa-file"></i>
                            <span>My File</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row" id="div-wrap">

                <div class="box contentbody">
                    <div class="box-header" id="div-title">
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
    <!-- ./wrapper -->
    <script src="<?= base_url() ?>/lib/jquery.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>/lib/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/lib/admins/adminlte.min.js"></script>
    <script src="<?= base_url() ?>/lib/admins/admin.js"></script>
    <script src="<?= base_url() ?>/lib/1.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#btnMyFile').click(function (event) {
                event.preventDefault();
                activeItem(event.target);
                triggerSpinner()
                $.ajax({
                    url: '<?= site_url('ConfigCL/getViewMyFile') ?>',
                            type: 'GET',
                    dataType: 'json',
                    success: function (resp) {
                        $('.container-fluid').remove();
                        $('#div-wrap').append(resp.data);
                    },
                    error: function (resp) {
                        alert('Load page My File Error');
                    }
                })
                    .always(function () {
                        removeSpinner();
                    });

            });
            $('#btnConfig').click(function (event) {
                event.preventDefault();
                activeItem(event.target);
            });
        });
        function activeItem(elt) {
            $('.li-item').each(function (index, el) {
                $(el).removeClass('active');
            });
            $(elt).closest('li').addClass('active');
        }
    </script>
</body>

</html>