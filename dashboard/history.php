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
    <title> <?php echo $data['fullname']; ?> - AES-128</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/datatables/css/jquery.dataTables.css">
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
            <h1><i class="fa fa-dashboard"></i> Daftar Berkas Enkripsi dan Dekripsi</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Daftar Berkas</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="file" class="table striped">
                    <thead class="bg-primary">
                        <tr>
                          <td><strong>ID File</strong></td>
                          <td><strong>Nama pengguna</strong></td>
                          <td><strong>Nama Berkas</strong></td>
                          <td><strong>Nama Berkas Enkripsi</strong></td>
                          <td><strong>Ukuran Berkas</strong></td>
                          <td><strong>Tanggal</strong></td>
                          <td><strong>Status</strong></td>
                        </tr>
                      </thead>
                      <tfoot class="bg-primary">
                        <tr>
                          <td><strong>ID Berkas</strong></td>
                          <td><strong>Nama pengguna</strong></td>
                          <td><strong>Nama Berkas Sumber</strong></td>
                          <td><strong>Nama Berkas Enkripsi</strong></td>
                          <td><strong>Ukuran Berkas</strong></td>
                          <td><strong>Tanggal</strong></td>
                          <td><strong>Status</strong></td>
                        </tr>
                      </tfoot>
                        <tbody>
                        <?php
                          
                          $query = mysql_query("SELECT * FROM file");
                          while ($data = mysql_fetch_array($query)) { ?>
                          <tr>
                            <td><?php echo $data['id_file']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['file_name_source']; ?></td>
                            <?php $namabrks = $data['file_name_source']; ?>
                            <td><?php echo $data['file_name_finish']; ?></td>
                            <td><?php echo $data['file_size']; ?> KB</td>
                            <td><?php echo $data['tgl_upload']; ?></td>
                            <td><?php if ($data['status'] == 1) {
                              echo "<a href='decrypt.php' class='btn btn-success'>Terenkripsi</a>";
                            }elseif ($data['status'] == 2) {
                              echo "<a href='file_decrypt/$namabrks' class='btn btn-warning'>Terdekripsi</a>     
                              ";
                            }else {
                              echo "<span class='btn btn-danger'>Status Tidak Diketahui</span>";
                            }
                             ?></td>
                          </tr>
                          <?php
                        } ?>
                        </tbody>
                      </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#file').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": true,
          "order": [0, "asc"]
        });
        });
        </script>
    <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/datatables/js/jquery.dataTables.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>
