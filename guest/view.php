<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.82.0">
  <title>Login</title>

  <link href="../style/bootstrap.css" rel="stylesheet">
  <link href="../style/login.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <?php
    if (isset($_GET['pesan'])) {
      if ($_GET['pesan'] == "gagal") {
        echo "<div class='alert-danger my-4'>Data tidak sesuai!</div>";
      } else if ($_GET['pesan'] == "tidakcari") {
        echo "<div class='alert-danger my-4'>Cari data anda melalui halaman pencarian!</div>";
      }
    }
    ?>
    <form action="dataguest.php" method="POST">
      <h1 class="h3 mb-3 fw-normal">Rekam Medis</h1>
      <hr class="m-4">
      <div class="form-floating">
        <input type="text" class="form-control mb-3" id="floatingInput" placeholder="ID pasien" name="idpas">
        <label for="floatingInput">ID pasien</label>
      </div>
      <!-- <div class="form-floating">
        <input type="date" class="form-control mb-3 mt-1" id="floatingPassword" placeholder="Tanggal lahir" name="tgl">
        <label for="floatingPassword">Tanggal lahir</label>
      </div> -->
      <button class="w-100 btn btn-lg btn-primary" type="submit" name="csubmit">Cari rekam medis</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021–2021</p>
    </form>
  </main>

</body>

</html>