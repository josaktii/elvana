<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.82.0">
  <title>Login</title>

  <link href="style/bootstrap.css" rel="stylesheet">
  <link href="style/login.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <?php
    if (isset($_GET['pesan'])) {
      if ($_GET['pesan'] == "gagal") {
        echo "<div class='alert-danger my-4'>Username dan Password tidak sesuai!</div>";
      } else if ($_GET['pesan'] == "belum_login") {
        echo "<div class='alert-danger my-4'>Anda harus login untuk mengakses halaman!</div>";
      }
    }
    ?>
    <form action="config/login.php" method="POST">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <hr class="m-4">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021–2021</p>
    </form>
  </main>

</body>

</html>