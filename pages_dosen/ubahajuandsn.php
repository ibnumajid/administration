<?php
session_start();
if ($_SESSION['user'] == '' || $_SESSION['status'] != 2) {
  header("location:../index.php");
}
?>
 <?php

$id = $_POST['id'];
include '../_database/config.php'; //panggil setiap ingin koneksi ke data
$nama = $_SESSION['user'];
$query = mysqli_query($koneksi, "SELECT * FROM suratdosen WHERE id_no = '$id' ");
$data = mysqli_fetch_array($query)


?>
<!-- Backend perubahan surat dosen -->
<?php
        include "../_database/config.php";
        if (isset($_POST['update'])) {

        $nama_file = basename($_FILES['fl']['name']);
        $id = $_POST['id'];
        $ukuran = $_FILES['fl']['size'];
        $tipe = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));
        
        $ket = $_POST['keterangan'];
        $jb = $_POST['jb'];
        $nl = $_POST['nl'];
        $nb = $_POST['nb'];
        $tgl1 = $_POST['tp1'];
        $tgl2 = $_post['tp2'];

        $max = 1024 * 5000;
        $ekstensi = "pdf";
        $url = $id.'_'.$nama_file;

        if ($ukuran > $max && $tipe !== $ekstensi)
        {
        ?><script><?php $_SESSION["pdfuk"] = true;?></script> 
        <script>history.pushState({}, "", "")</script><?php 
        }

        else if ($ukuran > $max)
        {
          ?><script><?php $_SESSION["uk"] = true;?></script> 
          <script>history.pushState({}, "", "")</script><?php 
        }
        
        else if ($tipe != $ekstensi && $tipe != NULL)
        { 
        ?><script><?php $_SESSION['pdf'] = true ?></script> 
        <script>history.pushState({}, "", "")</script><?php
        }  
          
          if ($data['status_kadep'] == '1'){
          $query = mysqli_query($koneksi, "UPDATE suratdosen SET `file` = '$url' WHERE id_no = '$id' ");
          $query2 = mysqli_query($koneksi, "UPDATE suratdosen SET `status_kadep` = '0' WHERE id_no = '$id' ");
          $query3 = mysqli_query($koneksi, "UPDATE suratdosen SET `nama_barang` = '$nb' WHERE id_no = '$id' ");
          $query4 = mysqli_query($koneksi, "UPDATE suratdosen SET `jumlah_barang` = '$jb' WHERE id_no = '$id' ");
          $query5 = mysqli_query($koneksi, "UPDATE suratdosen SET `nama_lab` = '$nl' WHERE id_no = '$id' ");
          $query6 = mysqli_query($koneksi, "UPDATE suratdosen SET `tgl_pel1` = '$tgl1' WHERE id_no = '$id' ");
          $query7 = mysqli_query($koneksi, "UPDATE suratdosen SET `tgl_pel2` = '$tgl2' WHERE id_no = '$id' ");
          $query8 = mysqli_query($koneksi, "UPDATE suratdosen SET `keterangan` = '$ket' WHERE id_no = '$id' ");
          move_uploaded_file($_FILES['fl']['tmp_name'], $url);
          }
          
          
          if ($query && $query2) {
            if ($lokasi == "home"){
              ?><script><?php $_SESSION['sukses'] = true;?></script> 
              <?php header("location:dosen.php");
              }
              else {
               ?><script><?php $_SESSION['sukses'] = true;?></script> 
              <?php header("location:permohonandosen.php");
               } 
          } else {
            ?><script><?php $_SESSION['input'] = true;?></script> 
            <script>history.pushState({}, "", "")</script><?php
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
          <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
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
  <?php if($_SESSION['status2'] == '5'){ ?>
          <li class="nav-item">
            <a class="nav-link  " href="./kirimkadep.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Pengajuan Mandat </span>
            </a>
          </li>
          <?php } ?>

        
          
          <!--Validasi Surat-->
          <?php if ($_SESSION['status2'] == '5') {?>
          <li class="nav-item">
            <a class="nav-link  " href="./validasisurat2.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
            </a>
          </li>
          <?php } ?>

          <!-- Validasi Surat Dosen -->
          <?php if ($_SESSION['status2'] == '5') {?>
          <li class="nav-item">
            <a class="nav-link  " href="./validasidsn.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Dosen</span>
            </a>
          </li>
          <?php } ?>

                   <!-- Validasi Surat Tendik -->
                   <?php if ($_SESSION['status2'] == '5') {?>
          <li class="nav-item">
            <a class="nav-link  " href="./validasitndk.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
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

<!--Permohonan Surat-->
<li class="nav-item">
  <a class="nav-link  active" href="./permohonandosen.php">
  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
      </svg>
    </div>
    <span class="nav-link-text ms-1">Permohonan Surat </span>
  </a>
</li>

 <!--Validasi Surat-->
 <li class="nav-item">
          <a class="nav-link  " href="./bimbingansurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Bimbingan Proposal</span>
          </a>
        </li>

<!--Validasi Surat-->
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
 <?php if($_SESSION['status2'] == '2'){ ?>
          <li class="nav-item"> 
            <a class="nav-link  " href="./datamagang.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Data Magang</span>
            </a>
          </li>  
          <?php } ?>

    <!-- REKAP SURAT -->
    <?php if($_SESSION['status'] !== '5'){ ?>
  <li class="nav-item"> 
    <a class="nav-link  " href="./rekapmndt.php">
      <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
          <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
        </svg>
      </div>
      <span class="nav-link-text ms-1">Mandat Kadep</span>
    </a>
  </li>  
  <?php } ?>

<!-- REKAP SURAT -->
<?php if($_SESSION['status'] !== '5'){ ?>
  <li class="nav-item"> 
    <a class="nav-link  " href="./rekapdsn.php">
        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
          </svg>
        </div>
      <span class="nav-link-text ms-1">Rekap Surat</span>
    </a>
  </li>
<?php } ?>

<!-- Validasi Surat Dosen -->
<?php if ($_SESSION['status2'] == '5') {?>
  <li class="nav-item">
    <a class="nav-link  " href="./validasidsn.php">
      <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
        </svg>
      </div>
      <span class="nav-link-text ms-1">Validasi Surat Dosen</span>
    </a>
  </li>
  <?php } ?>

<!-- Validasi Surat Dosen -->
<?php if ($_SESSION['status2'] == '5') {?>
  <li class="nav-item">
    <a class="nav-link  " href="./validasitndk.php">
      <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
        </svg>
      </div>
      <span class="nav-link-text ms-1">Validasi Surat Tendik</span>
    </a>
  </li>

  <?php } ?>


 <!--SURAT MASUK KADEP -->
<!--  <?php if($_SESSION['status2'] == '5'){ ?>
</li> 
<li class="nav-item"> 
<a class="nav-link  " href="./suratmskkdp.php">
  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
          <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
          <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
        </svg>
      </div>
  <span class="nav-link-text ms-1">Surat Masuk dari Mahasiswa</span>
</a>
</li> <?php } ?> -->


<!--profil-->
<li class="nav-item mt-3">
  <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
</li>
<li class="nav-item">
  <a class="nav-link  " href="../profile.php">
    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z"/>
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Permohonan Surat</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">Ubah Ajuan</h5>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../profile.php" href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?php echo $_SESSION['user']?></span>
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
                <a href="../logout.php" href="javascript:;" class="nav-link text-body p-0" >
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
                  <h6 class="mb-0"></h6>
                </div>
              </div>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">

               

                <form action="" method="post" enctype = "multipart/form-data">
                  <div class="card-header pb-0 p-3">
                    <div class="row">
                      <div class="mb-3">
                        <!-- nama mahasiswa -->
                        <label for="formFile" class="form-label">Nama Dosen</label>
                        <label name="nm" class="form-control" aria-label="default input example"><?php echo $data['nama'] ?></label>
                        <!-- NRP mahasiswa -->
                        <label for="formFile" class="form-label">NRP Mahasiswa</label>
                        <label name="nrp" class="form-control" aria-label="default input example"><?php echo $data['id_npp'] ?></label>
                        <!-- progres -->
                        <label for="formFile" class="form-label">Perihal</label>
                        <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>

                         <!-- Keterangan tiap Perihal -->
                        
                        <?php if ($data['perihal'] == "Surat Perpindahan Barang Lab") { ?>
                          <!-- Keterangan Tambahan -->
                          <label for="formFile" class="form-label">Nama Barang</label>
                          <input type="text" class = "form-control" name = "nb" value = "<?php echo $data['nama_barang'] ?>">
                         
                           <!-- Keterangan Tambahan -->
                           <label for="formFile" class="form-label">Jumlah Barang</label>
                           <input type="text" class = "form-control" name = "jb" value = "<?php echo $data['jumlah_barang'] ?>">

                          <!-- Keterangan Tambahan -->
                          <label for="formFile" class="form-label">Nama Laboratorium</label>
                          <input type="text" class = "form-control" name = "nl" value = "<?php echo $data['nama_lab'] ?>">
                       
                        <?php }

                         else if ($data['perihal'] == "Permohonan Surat Tugas") { ?>
                          <!-- Keterangan Tambahan -->
                          <label for="formFile" class="form-label">Tugas</label>
                          <input type="text" class = "form-control" name = "keterangan" value = "<?php echo $data['keterangan'] ?>">
                          <!-- Keterangan Tambahan -->
                          <div class="row">
                                <div class="form-group col-md-2 text-center">
                                  <label for="formFile" class="form-label">Tanggal Mulai</label>
                                  <input type="date" class = "form-control" name = "tp1" value = "<?php echo $data['tgl_pel1'] ?>">
                                </div>
                                <div class="form-group col-md-2 text-center">
                                  <label for="formFile" class="form-label">Tanggal Selesai</label>
                                  <input type="date" class = "form-control" name = "tp2" value = "<?php echo $data['tgl_pel2'] ?>">
                                </div>
                          </div>
                          <div>
                        </div>
                          <?php }  
                          else if ($data['perihal'] == "Pengajuan Barang Habis Pakai") { ?>
                          <!-- Keterangan Tambahan -->
                          <label for="formFile" class="form-label">Keterangan</label>
                          <input type="text" class = "form-control" name = "keterangan" value = "<?php echo $data['keterangan'] ?>">
                          
                        <?php } ?>

                        <!-- file surat -->
                        <label id="label-file" for="formFile" class="form-label">Masukkan File Baru</label>
                        <input type="file" name="fl" class="form-control" aria-label="file example" >
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                        <!-- Menginput id surat -->
                        <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">


                      </div>
                    </div>
                  </div>
                  <!-- button upload close -->
              
                      <div class = "mx-4">
            <button type="button" class="btn bg-gradient-secondary" onclick = "goBack()">Batal</button>
              <?php if ($data['status_kadep'] == 1){ ?>
                <button type="submite" name="update" class="btn bg-gradient-info">Ubah</button>
                <?php } 
                ?>
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
    <?php if(@$_SESSION['pdf']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Gagal mengajukan permohonan surat ! Ekstensi file harus pdf',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['pdf']); ?>
    <?php endif; ?>
    
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['uk']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal mengajukan permohonan surat ! ukuran file harus di bawah 5 mb',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['uk']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['pdfuk']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal mengajukan permohonan surat ! Ekstensi file harus pdf dan ukuran di bawah 5 mb',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['pdfuk']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['input']) : ?>
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