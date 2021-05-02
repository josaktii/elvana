<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Coming Soon - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="style/styles.css" rel="stylesheet" />

    <link rel="stylesheet" href="style/bootstrap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="style/master_style.css">

    <link rel="stylesheet" href="style/themify-icons.css">
</head>

<body style="background:url('assets/bg.jpg') no-repeat center center fixed; background-size: cover;">
    <div class="masthead">
        <div class="masthead-bg"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 my-auto">
                    <div class="masthead-content text-white py-5 py-md-0">
                        <h1 class="mb-3 h3">Selamat Datang</h1>
                        <p class="mb-5">
                            Anda dapat melihat rekam medis anda melalui
                            <strong>Halaman ini.</strong>
                            isi form dibawah ini dengan ID Pasien dan
                            tanggal lahir anda untuk melakukan pengecekan.
                        </p>
                        <form action="guest/dataguest.php" method="POST">
                            <div class="input-group input-group-newsletter">
                                <input class="form-control" type="text" name="idpas" placeholder="Masukkan ID.."> &nbsp;
                                <input class="form-control" type="date" name="tgl">&nbsp;&nbsp;
                                <div class="input-group-append"><input class="btn btn-secondary" id="submit-button" type="submit" name="csubmit"></div>
                            </div>
                            <br>
                            <div class="form-control-feedback">
                                <h5>
                                    Jika anda sudah mempunyai akun, silakan <strong><a href="login.php" class="h5">klik disini!</a></strong> untuk melanjutkan
                                </h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-icons">
        <ul class="list-unstyled text-center mb-0">
            <li class="list-unstyled-item">
                <a href="#!"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-unstyled-item">
                <a href="#!"><i class="fa fa-facebook-f"></i></a>
            </li>
            <li class="list-unstyled-item">
                <a href="#!"><i class="fa fa-instagram"></i></a>
            </li>
        </ul>
    </div>
</body>

</html>