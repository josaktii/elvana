<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../style/bootstrap.css" rel="stylesheet">
    <link href="../style/dashboard.css" rel="stylesheet">
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <//?php
        session_start();

        if ($_SESSION['status'] != "login") {
            header("location:../login.php?pesan=belum_login");
        }
        ?>
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="dashboard.php">Admin</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="btn btn-danger mx-0" href="../config/logout.php">Sign out</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Menu Admin</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="user/data.php">
                                <span data-feather="home"></span>
                                User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="poli/data.php">
                                <span data-feather="bar-chart-2"></span>
                                Poli
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pasien/data.php">
                                <span data-feather="users"></span>
                                Pasien
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dokter/data.php">
                                <span data-feather="shopping-cart"></span>
                                Dokter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="karyawan/data.php">
                                <span data-feather="file"></span>
                                Karyawan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rm/data.php">
                                <span data-feather="layers"></span>
                                Rekam Medis
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?php include_once '../config/connect.php'; ?>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h1">Dashboard</h1>
                </div>

                <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Jumlah pasien</h1>
                        <p class="col-md-8 fs-4">
                            <?php
                            $qc = $connect->query("SELECT COUNT(*) AS hitung FROM pasien");
                            $hitung = $qc->fetch_assoc();
                            echo "Pasien yang terdaftar : ".$hitung['hitung'];
                            ?>
                        </p>
                    </div>
                </div>

                <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div class="h-100 p-5 bg-light border rounded-3">
                            <h2 class="fw-bold">Jumlah karyawan</h2>
                            <p class="col-md-8 fs-4">
                            <?php
                            $qk = $connect->query("SELECT COUNT(*) AS hitung FROM karyawan");
                            $hitungk = $qk->fetch_assoc();
                            echo "Karyawan yang terdaftar : ".$hitungk['hitung'];
                            ?>
                        </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-5 bg-light border rounded-3">
                            <h2 class="fw-bold">Jumlah dokter</h2>
                            <p class="col-md-8 fs-4">
                            <?php
                            $qd = $connect->query("SELECT COUNT(*) AS hitung FROM dokter");
                            $hitungd = $qd->fetch_assoc();
                            echo "Dokter yang terdaftar : ".$hitungd['hitung'];
                            ?>
                        </p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>