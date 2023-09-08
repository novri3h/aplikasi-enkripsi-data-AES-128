<?php
session_start();
include('../config.php');
if(empty($_SESSION['username'])){
header("location:../index.php");
}
$last = $_SESSION['username'];
$sqlupdate = "UPDATE users SET last_activity=now() WHERE username='$last'";
$queryupdate = mysql_query($sqlupdate);
?>
<!DOCTYPE html>
<html>
<?php
$user = $_SESSION['username'];
$query = mysql_query("SELECT fullname,job_title,last_activity FROM users WHERE username='$user'");
$data = mysql_fetch_array($query);
?>
  <head>
    <title><?php echo $data['fullname']; ?> - (AES-128)</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
<!-- NAVBAR SIDEBAR -->
    <?php include('navmenu.php'); ?>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-home"></i> Aplikasi Enkripsi Data<b>(AES)</b></h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Beranda</a></li>
            </ul>
          </div>
        </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                  <div class="col-md-4">
                    <div class="widget-small warning"><i class="icon fa fa-users fa-3x"></i>
                      <?php
      								$query = mysql_query("SELECT count(*) totaluser FROM users");
      								$datauser = mysql_fetch_array($query);
								      ?>
                      <div class="info">
                        <h4>Total Pengguna</h4>
                        <p> <b><?php echo $datauser['totaluser']; ?></b></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="widget-small info"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
                      <?php
      								$query = mysql_query("SELECT count(*) totalencrypt FROM file WHERE status='1'");
      								$dataencrypt = mysql_fetch_array($query);
								      ?>
                      <div class="info">
                        <h4>Total Enkripsi</h4>
                        <p> <b><?php echo $dataencrypt['totalencrypt']; ?></b></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="widget-small danger"><i class="icon fa fa-files-o fa-3x"></i>
                      <div class="info">
                        <?php
        								$query = mysql_query("SELECT count(*) totaldecrypt FROM file WHERE status='2'");
        								$datadecrypt = mysql_fetch_array($query);
  								      ?>
                        <h4>Total Dekripsi</h4>
                        <p> <b><?php echo $datadecrypt['totaldecrypt']; ?></b></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" >
          <div class="col-md-12" >
          <div class="card" style="background-color: #008a9c;">
            <div class="card-body">
          <center><img src="../assets/images/lg.png" alt="" class="img-responsive" width="100px">
        <h3>AES-128</h3>
        <p style="color:#e7e7e7;">Aplikasi Enkripsi Softfile Menggunakan Algoritma Advanced Encryption Standard (AES-128 bit).</p>
        <p style="color:#e7e7e7;">Format file yang didukung untuk di enkripsi adalah docx, xls, txt, ppt ataupun pdf.</p>
        <p style="color:#e7e7e7;">Ukuran file yang akan dienkripsi tidak boleh lebih dari 3MB.</p>

      </center>
        
        </div>
      </div>
    </div>
        </div>
        
      </div>
    </div>
    <script src="../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>
