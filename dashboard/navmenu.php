<div class="wrapper">
      <header class="main-header hidden-print"><a class="logo" href="https://bit.ly/NAD-Repo" target="_blank" rel="noopener noreferrer" style="font-size:13pt"><img src="../assets/images/lg.png" width="45px" alt="" srcset=""><strong>AES</strong></a>
        <nav class="navbar navbar-static-top">
          <a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-out fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Keluar</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="../assets/images/user.png" alt="User Image"></div>
            <div class="pull-left info">
              <p style="margin-top:-5px;"><?php echo $data['fullname']; ?></p>
              <p class="designation"><?php echo $data['job_title']; ?></p>
              <p class="designation" style="font-size:6pt;">Aktivitas Terakhir: <?php echo $data['last_activity'] ?></p>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i><span>Beranda</span></a></li>
            <?php
            $v = $_SESSION['username'];
            $query = mysql_query("SELECT * FROM users WHERE username='$v'");
            $users = mysql_fetch_array($query);
            if ($users['status'] == 1) {
              echo '<li class="treeview"><a href="#"><i class="fa fa-file-o"></i><span>Berkas</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="encrypt.php"><i class="fa fa-circle-o"></i> Enkripsi Berkas</a></li>
                  <li><a href="decrypt.php"><i class="fa fa-circle-o"></i> Dekripsi Berkas</a></li>
                </ul>
              </li>';
            }elseif ($users['status'] == 2) {
              echo "";
            }else {
              echo "";
            }
             ?>

            <li><a href="history.php"><i class="fa fa-list-alt"></i><span>Daftar Berkas</span></a></li>
          </ul>
        </section>
      </aside>