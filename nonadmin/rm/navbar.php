<?php
session_start();
include_once('../../config/connect.php');
?>

<header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
        <!-- mini logo -->
        <b class="logo-mini">
            <span class="light-logo">MEDIS 1</span>
        </b>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </div>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Halo, <?= $_SESSION['username'] ?></a>
                    <ul class="dropdown-menu scale-up">
                        <li class="user-body">
                            <div class="row no-gutters">
                                <div class="col-12 text-left">
                                    <a href="../ubahpassword.php"><i class="fa fa-lock"></i> Ubah Password</a>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-12 text-left">
                                    <a href="../../config/logout.php"><i class="fa fa-power-off"></i> Logout</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                    </ul>
                </li>
                <li>&nbsp;&nbsp;</li>
            </ul>
        </div>
    </nav>
</header>