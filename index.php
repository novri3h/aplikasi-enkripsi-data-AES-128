<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Aplikasi Enkripsi dan Dekripsi</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/gaya.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body style="background-color:#355f64;">
    <section class="material-half-bg">
      <div class="cover-gaya"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h2>APLIKASI ENKRIPSI DATA -<b> AES</b></h2>
      </div>
      <div class="login-box">
        <form class="login-form" action="auth.php" method="post"><img src="" alt="" srcset="">
        <h3 class="login-head text-info"><img src="assets/images/lg.png" width="50px">AES</h3>
          <div class="form-group">
            <label class="control-label">Nama pengguna</label>
            <input class="form-control" type="text" name="username" placeholder="masukan nama pengguna" autofocus autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="control-label">Kata sandi</label>
            <input class="form-control" type="password" name="password" placeholder="masukan kata sandi" required>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-info btn-block" name="login">MASUK <i class="fa fa-sign-in fa-lg"></i></button><br>
            <p style="font-size:10pt mb-3">&copy; Advanced Encryption Standard (AES-128)</p>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src="assets/js/jquery-2.1.4.min.js"></script>
  <script src="assets/js/essential-plugins.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/plugins/pace.min.js"></script>
  <script src="assets/js/main.js"></script>
</html>
