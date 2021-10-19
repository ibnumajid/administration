
<?php
session_start();
 if($_SESSION['user']=='')
 {
      header("location:home.php");
  }
?>
 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/dteonew.jpeg" type="image/ico" />

    <title> Sistem Informasi DTEO </title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <center>
            &nbsp; <a href="dosen.php" class="fa fa-mortar-board fa-2x" style="color:#fff;"><span><font size="4.95" color="white" face="Helvetica Neue">SISTEM INFORMASI</font></span></a>
            </center>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/dteonew.jpeg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcomdwarwr3wetwetwetwetwe</span>
                <h2><?=$_SESSION['user'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="dosen.php?page=dashboard"><i class="fa fa-home"></i> Home <span class="fa fa-home"></span></a>
                  </li>
                  <li><a href="dosen.php?page=tampil_mhs"><i class="fa fa-users"></i> Daftar Mahasiswa <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="#"><i class="fa fa-book"></i> Daftar Porposal <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="dosen.php?page=tampil_daf_proposal">Tampil Data</a></li>
                      <li><a href="dosen.php?page=tambah_daf_proposal">Tambah Data</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-university"></i> Bimbingan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="dosen.php?page=tampil_bim_tugasakhir">Tugas Akhir</a></li>
                      <li><a href="dosen.php?page=tampil_bim_magang">Magang</a></li>
                      <li><a href="#">Lainnya</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-fax"></i> Administrasi<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="dosen.php?page=tampil_permohonan_surat">Permohonan Surat</a></li>
                      <li><a href="dosen.php?page=tampil_dana">Pengajuan Dana </a></li>
                    </ul>
                  </li>
                  <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout </a>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="#">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" href="#">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock" href="#">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" >
                  <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/dteonew.jpeg" alt="">Dosen
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#"> Profile</a>
                      <a class="dropdown-item"  href="#">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content - HALAMAN UTAMA ISI DISINI -->
        <div class="right_col" role="main">
      <?php
      include('_database/config.php');
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
        case 'dashboard':
          # code...
          include 'dashboard.php';
          break;
        case 'tampil_dsn':
          # code...
          include 'dosen/tampil.php';
          break;
        case 'tambah_dsn':
          # code...
          include 'dosen/tambah.php';
          break;
        case 'tampil_mhs':
            # code...
          include 'mahasiswa/tampilV.php';
          break;
        case 'tampil_daf_proposal':
            # code...
          include 'dosen/daftarproposal/tampil_proposal.php';
          break;
        case 'tambah_daf_proposal':
            # code...
          include 'dosen/daftarproposal/tambah_proposal.php';
          break;
        case 'tampil_bim_tugasakhir':
            # code...
          include 'dosen/bimbingan/tampil_tugasakhir.php';
          break;
        case 'tampil_bim_magang':
            # code...
          include 'dosen/bimbingan/tampil_magang.php';
          break;
        case 'tampil_permohonan_surat':
            # code...
          include 'dosen/administrasi/tampil_surat.php';
          break;
        case 'tambah_surat':
            # code...
          include 'dosen/administrasi/tambah_surat.php';
          break;
        case 'tampil_dana':
            # code...
          include 'dosen/administrasi/tampil_dana.php';
          break;
        case 'tambah_pengajuan_dana':
            # code...
          include 'dosen/administrasi/tambah.php';
          break;
        default:
              #code...
          include 'awal.php';
          break;
        }
        ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          sistem informasi departement teknik elektro otomasi
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

  </body>
</html>