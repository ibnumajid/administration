<?php
session_start();
if ($_SESSION['user'] == '' || $_SESSION['status'] != 2) {
  header("location:../index.php");
}
?>
<?php
$lokasi = $_POST['lokasi'];
$id = $_POST['id'];
include '../_database/config.php'; //panggil setiap ingin koneksi ke data
$nama = $_POST['nm'];
$nrp = $_POST['nrp'];
$query = mysqli_query($koneksi, "SELECT * FROM bimbingan WHERE id_no = '$id' ");
$data = mysqli_fetch_array($query);


?>
<!-- Backend validasi mahasiswa untuk dosen -->
<?php

if (isset($_POST['update'])) {
include "../_database/config.php";
  $nama = $_POST['nm']; 
  $nrp = $_POST['nrp'];
  $status = $_POST['ss'];
  $id2 = $_POST['id'];
  $catatan = $_POST['catatan'];
  $lokasi = $_POST['lokasi'];

  if (($data['status_dosen1'] == 0 || $data['status_dosentkk'] == 0) && $status == 1 && $data['dosen1'] == $_SESSION['user']) {
    $queryup = mysqli_query($koneksi, "UPDATE bimbingan SET status_dosen1 = '$status' WHERE id_no = '$id2' ");
    $queryup2 = mysqli_query($koneksi, "UPDATE bimbingan SET `catatan_pmb` = '$catatan' WHERE id_no = '$id2' ");
    $queryup3 = mysqli_query($koneksi, "UPDATE bimbingan SET `notif` = '1' WHERE id_no = '$id2' ");
    $queryup4 = mysqli_query($koneksi, "INSERT INTO rekap_catatan values ('', '$id2', '$nama', '$nrp', '$catatan', '', '', '', sysdate())");
  }
  else if (($data['status_dosen1'] == 0 || $data['status_dosentkk'] == 0) && $status == 2 && $data['dosen1'] == $_SESSION['user']) {
    $queryup = mysqli_query($koneksi, "UPDATE bimbingan SET status_dosen1 = '$status' WHERE id_no = '$id2' ");
    $queryup2 = mysqli_query($koneksi, "UPDATE bimbingan SET `catatan_pmb` = '$catatan' WHERE id_no = '$id2' ");
    $queryup3 = mysqli_query($koneksi, "UPDATE bimbingan SET `notif` = '2' WHERE id_no = '$id2' ");
    $queryup4 = mysqli_query($koneksi, "INSERT INTO rekap_catatan values ('', '$id2', '$nama', '$nrp', '$catatan', '', '', '', sysdate())");
  }
  if ($queryup && $queryup2 && $queryup3) {
    if ($lokasi == "home") {
  ?><script>
        <?php $_SESSION['sukses'] = true; ?>
      </script>
    <?php header("location:dosen.php");
    } else {
    ?><script>
        <?php $_SESSION['sukses'] = true; ?>
      </script>
    <?php header("location:bimbingansurat.php");
    }
  } else {
    ?><script>
      <?php $_SESSION['input'] = true; ?>
    </script>
    <script>
      history.pushState({}, "", "")
    </script><?php
            }
          } ?>

<!-- Backend validasi mahasiswa untuk kadep -->
<?php
include "../_database/config.php";
if (isset($_POST['updatekdp'])) {
  $catatan2 = $_POST['catatan2'];
  $id = $_POST['id'];
  $status = $_POST['ss'];

  $query = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `catatan_kadep`='$catatan2' WHERE id_no = '$id' ");
  $query2 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `status_kadep`='$status' WHERE id_no = '$id' ");

  if ($query && $query2) {
    if ($lokasi == "home") {
?><script>
        <?php $_SESSION['sukses'] = true; ?>
      </script>
    <?php header("location:dosen.php");
    } else {
    ?><script>
        <?php $_SESSION['sukses'] = true; ?>
      </script>
    <?php header("location:validasisurat2.php");
    }
  } else {
    ?><script>
      <?php $_SESSION['input'] = true; ?>
    </script>
    <script>
      history.pushState({}, "", "")
    </script><?php
            }
          } ?>
<?php
include "../_database/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Sistem Administrasi DTEO
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link rel="icon" type="image/png" href="../assets/images/favicon.png">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        <span class="ms-1 font-weight-bold">Sistem Administrasi Dosen</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">


        <li class="nav-item">
          <a class="nav-link  " href="./dosen.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
              </svg>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

        <?php if ($_SESSION['status2'] == 5) { ?>
          <!-- membuat satu bar navigasi khusus kadep -->
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Kadep</h6>
          </li>

          <!-- Pemberian mandat kadep -->
          <?php if ($_SESSION['status2'] == '5') { ?>
            <li class="nav-item">
              <a class="nav-link  " href="./kirimkadep.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                  </svg>
                </div>
                <span class="nav-link-text ms-1">Pengajuan Mandat </span>
              </a>
            </li>
          <?php } ?>



          <!--Validasi Surat-->
          <?php if ($_SESSION['status2'] == '5') { ?>
            <li class="nav-item">
              <a class="nav-link  " href="./validasisurat2.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                  </svg>
                </div>
                <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
              </a>
            </li>
          <?php } ?>

          <!-- Validasi Surat Dosen -->
          <?php if ($_SESSION['status2'] == '5') { ?>
            <li class="nav-item">
              <a class="nav-link  " href="./validasidsn.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                  </svg>
                </div>
                <span class="nav-link-text ms-1">Validasi Surat Dosen</span>
              </a>
            </li>
          <?php } ?>

          <!-- Validasi Surat Tendik -->
          <?php if ($_SESSION['status2'] == '5') { ?>
            <li class="nav-item">
              <a class="nav-link  " href="./validasitndk.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                  </svg>
                </div>
                <span class="nav-link-text ms-1">Validasi Surat Tendik</span>
              </a>
            </li>

          <?php } ?>


          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Dosen</h6>
          </li>
        <?php } ?>


        <!-- Permohonan Surat -->
        <?php if ($_SESSION['status'] !== '5') { ?>
          <li class="nav-item">
            <a class="nav-link  " href="./permohonandosen.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                </svg>
              </div>
              <span class="nav-link-text ms-1">Permohonan Surat</span>
            </a>
          </li>
        <?php } ?>

      

        <!--Validasi Surat-->
        <li class="nav-item">
          <a class="nav-link active" href="./bimbingansurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z" />
              </svg>
            </div>
            <span class="nav-link-text ms-1">Bimbingan Proposal</span>
          </a>
        </li>

        <!--Validasi Surat Mahasiswa-->
        <li class="nav-item">
          <a class="nav-link  " href="../pages_dosen/validasisurat.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
            <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
          </a>
        </li>  

          

        <!-- REKAP SURAT -->
        <?php if ($_SESSION['status2'] == '2') { ?>
          <li class="nav-item">
            <a class="nav-link  " href="./datamagang.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
                </svg>
              </div>
              <span class="nav-link-text ms-1">Data Magang</span>
            </a>
          </li>
        <?php } ?>

        <!-- REKAP SURAT -->
        <?php if ($_SESSION['status'] !== '5') { ?>
          <li class="nav-item">
            <a class="nav-link  " href="./rekapmndt.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
                </svg>
              </div>
              <span class="nav-link-text ms-1">Mandat Kadep</span>
            </a>
          </li>
        <?php } ?>

        <!-- REKAP SURAT -->
        <?php if ($_SESSION['status'] !== '5') { ?>
          <li class="nav-item">
            <a class="nav-link  " href="./rekapdsn.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
                </svg>
              </div>
              <span class="nav-link-text ms-1">Rekap Surat</span>
            </a>
          </li>
        <?php } ?>

        <!-- profil-->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../profile.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
              </svg>
            </div>
            <span class="nav-link-text ms-1">Ganti Password</span>
          </a>
        </li>
      </ul>
    </div>

  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Dosen</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Bimbingan Proposal</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">Bimbingan Proposal Mahasiswa</h5>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../profile.php" href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?php echo $_SESSION['user'] ?></span>
              </a>
            </li>
            <!--li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li-->
            <li class="nav-item px-3 d-flex align-items-center">
              <!--a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a-->
            </li>

            <li class="nav-item d-flex align-items-center">
              <a href="../logout.php" href="javascript:;" class="nav-link text-body p-0">
                <i class="fas fa-sign-out-alt"></i>
                <span class="d-sm-inline d-none">Logout </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Tabel Validasi -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Validasi Surat</h6>
                </div>
              </div>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">



                <form action="" method="post">
                  <div class="card-header pb-0 p-3">
                    <div class="row">
                      <div class="mb-3">
                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="formFile" class="form-label">Nama Mahasiswa</label>
                            <label name="nm" class="form-control" aria-label="default input example"><?php echo $data['nama'] ?></label>
                            <input type="hidden" name="nm" value="<?php echo $data['nama'] ?>">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="formFile" class="form-label">NRP Mahasiswa</label>
                            <label name="nrp" class="form-control" aria-label="default input example"><?php echo $data['id_nrp'] ?></label>
                            <input type="hidden" name="nrp" value="<?php echo $data['id_nrp'] ?>">
                          </div>
                        </div>

                        <!-- Keterangan tiap Perihal -->
                        <?php if ($data['perihal'] == "Bimbingan Magang") { ?>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">Perihal</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                            </div>
                            <div class="form-group col-md-6">
                              <!-- Keterangan Tambahan -->
                              <label for="formFile" class="form-label">Nama Tempat Magang</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                            </div>
                          </div>
                        <?php } else if ($data['perihal'] == "Bimbingan Proposal Proyek Akhir") { ?>
                          <label for="formFile" class="form-label">Perihal</label>
                          <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <!-- Keterangan Tambahan -->
                              <label for="formFile" class="form-label">Industri Tempat Melakukan Proyek Akhir</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                            </div>
                            <div class="form-group col-md-6">
                              <!-- Keterangan Tambahan -->
                              <label for="formFile" class="form-label">Rencana Judul</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['judul_ta'] ?></label>
                            </div>
                          </div>
                        <?php } else if ($data['perihal'] == "Bimbingan Proposal PBL") { ?>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">Perihal</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                            </div>
                            <div class="form-group col-md-6">
                              <!-- Keterangan Tambahan -->
                              <label for="formFile" class="form-label">Nama Tempat PBL</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                            </div>
                          </div>
                        <?php } else if ($data['perihal'] == "Surat Cuti") { ?>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">Perihal</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                            </div>
                            <div class="form-group col-md-6">
                              <!-- Keterangan Tambahan -->
                              <label for="formFile" class="form-label">Lama Waktu Cuti (*Dalam Semester)</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                            </div>
                          </div>
                        <?php } else if ($data['perihal'] == "Surat Pengajuan Beasiswa") { ?>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">Perihal</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                            </div>
                            <div class="form-group col-md-6">
                              <!-- Keterangan Tambahan -->
                              <label for="formFile" class="form-label">Nama Beasiswa</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                            </div>
                          </div>
                        <?php } else if ($data['perihal'] == "Bimbingan Proposal Kegiatan HIMA") { ?>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="formFile" class="form-label">Perihal</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                            </div>
                            <div class="form-group col-md-6">
                              <!-- Keterangan Tambahan -->
                              <label for="formFile" class="form-label">Nama Kegiatan</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                            </div>
                          </div>
                          <!-- Keterangan Tambahan -->
                          <div class="row">
                            <div class="form-group col-md-2 text-center">
                              <label for="formFile" class="form-label">Tanggal Mulai</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['tgl_hima1'] ?> </label>
                            </div>
                            <div class="form-group col-md-2 text-center">
                              <label for="formFile" class="form-label">Tanggal Selesai</label>
                              <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['tgl_hima2'] ?> </label>
                            </div>
                          </div>
                        <?php } ?>

                        <!-- file surat -->
                        <label for="formFile" class="form-label">Lihat File</label>
                        <a href="../pagesmahasiswa/<?php echo $data['file'] ?>" target="_blank">
                          <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button" class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p>
                        </a>
                        <!-- Menginput id surat -->
                        <input name="id" value = "<?php echo $id ?>" type="hidden">
                        <input type="hidden" name="lokasi" value="<?php echo $lokasi ?>">

                          <?php if ($data['status_dosen1'] == 0 || $data['status_dosentkk'] == 0) { ?>
                            <!-- persetujuan surat -->
                        <label for="formFile" class="form-label">Apakah Anda Menyetujui Proposal Ini ?</label>
                        <div class="form-check">
                          <input type="radio" class="btn-check" name="ss" id="success-outlined" value="2" autocomplete="off">
                          <label class="btn btn-outline-success" for="success-outlined">Setuju</label>

                          <input type="radio" class="btn-check" name="ss" id="danger-outlined" value="1" autocomplete="off">
                          <label class="btn btn-outline-danger" for="danger-outlined">Tolak</label>
                        </div>
                        <!-- Menginput catatan -->
                        <div>
                          <label for="catatan" class="form-label"> Catatan/Revisi </label>
                          <br>
                          <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                  <!-- button upload close -->

                  <div class="mx-4">
                    <button type="button" class="btn bg-gradient-secondary" onclick="goBack()">Kembali</button>
                    <?php if ($data['status_dosen1'] == 0 || $data['status_dosentkk'] == 0) { ?>
                    <button type="submite" name="update" class="btn bg-gradient-info">OK</button>
                    <?php } ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- and popup ajuan surat mahasiswa -->


      <!-- and php tabel -->
      <!-- and modal-->


      </tr>
      <!-- php update surat -->


      <!-- php update catatan dosen -->

      <!-- update catatan kadep -->


      </tbody>
      </table>
    </div>
    </div>




  </main>
  <script>
    function goBack() {
      window.history.back();
    }
  </script>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php if (@$_SESSION['input']) : ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Gagal Di Ajukan',
        showConfirmButton: false,
        timer: 2000
      })
    </script>
    <?php unset($_SESSION['input']); ?>
  <?php endif; ?>
</body>

</html>