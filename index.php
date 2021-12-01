<?php 
    error_reporting(0);
    $page = htmlentities($_REQUEST['page']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>UTS Sistem Informasi Kelas B</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="keywords" content="" />
    <meta name="description" content="Soal UTS Matakuliah Client Side Prodi Sistem Informasi Kelas B" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/css/bootstrap-grid.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/css/bootstrap-reboot.css" rel="stylesheet" />
    <link href="assets/css/colors.css" rel="stylesheet" id="themecolor" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/plugins/waitMe/waitMe.min.js"></script>
    <script src="film2.js"></script>
    <script src="assets/js/pvr_lite_app.js" id="appjs"></script>
</head>
<body>
    <div class="preloader">
        <div class="loading">
            <h2>Loading...</h2>
            <span class="progress"></span>
        </div>
    </div>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-bg.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:void(0)" class="simple-text logo-mini">UTS</a>
                    <a href="javascript:void(0)" class="simple-text logo-normal">Client Side</a>
                </div>
                <div class="user">
                    <div class="photo"><img src="assets/img/default-avatar.jpg" /></div>
                    <div class="info">
                        <a data-toggle="collapse" href="#pvr_user_nav" class="collapsed"><span>Peserta<b class="caret"></b></span></a>
                        <div class="collapse m-t-10" id="pvr_user_nav">
                            <ul class="nav">
                                <li>
                                    <a class="profile-dropdown" href="javascript:void(0)">
                                        <span class="sidebar-mini"><i class="icon-user"></i></span>
                                        <span class="sidebar-normal">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="profile-dropdown" href="javascript:void(0)">
                                        <span class="sidebar-mini"><i class="icon-settings"></i></span>
                                        <span class="sidebar-normal">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="profile-dropdown" href="javascript:void(0)">
                                        <span class="sidebar-mini"><i class="icon-logout"></i></span>
                                        <span class="sidebar-normal">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item mnsidebar" id="mnberanda">
                        <a class="nav-link sub_link" href="home">
                            <i class="material-icons">insert_chart</i>
                            <span class="sidebar-normal">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item mnsidebar" id="mndata">
                        <a class="nav-link sub_link" href="datafilm">
                            <i class="material-icons">insert_chart</i>
                            <span class="sidebar-normal">Data</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" data-color="purple" class="btn btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <a class="navbar-brand" id="page_header_title" href="javascript:void(0)"><i class="material-icons">radio_button_checked</i> Buttons</a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="nav navbar-nav"></ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false"><i class="material-icons">account_box</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <?php
                    if(!file_exists($page) || empty($page)){include "beranda.php";}else{include $page;}
                ?>
            </div>
        </div>
    </div>
</body>
</html>