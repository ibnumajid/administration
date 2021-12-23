<?php
session_start();
  if($_SESSION['user']==''  || ($_SESSION['status'] != 2 && $_SESSION['status2'] != 5))
  {
  header("location:../index.php");
  }

  // aski submit kadep
  if (isset($_POST['mhsw'])) {
    $id = $_POST['id'];
  if ($_SESSION['status2'] == 5) {
    $query2 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `notif`= 3 WHERE id_no = '$id' ");
    if ($query2) { 
      header('location:validasisurat2.php'); ?>
      <script>history.pushState({}, "", "")</script><?php
    } else { 
      header('location:./dosen.php'); ?>
      <script>history.pushState({}, "", "")</script><?php
    }
  } }

  if (isset($_POST['dsn'])) {
    $id = $_POST['id'];
    if ($_SESSION['status2'] == 5) {
      $query2 = mysqli_query($koneksi, "UPDATE suratdosen SET `notif`= 1 WHERE id_no = '$id' ");
      if ($query2) { 
        header('location:validasidsn.php'); ?>
        <script>history.pushState({}, "", "")</script><?php
      } else { 
        header('location:./dosen.php'); ?>
        <script>history.pushState({}, "", "")</script><?php
      }
    } }

    if (isset($_POST['tndk'])) {
      $id = $_POST['id'];
      if ($_SESSION['status2'] == 5) {
        $query2 = mysqli_query($koneksi, "UPDATE surattendik SET `notif`= 1 WHERE id_no = '$id' ");
        if ($query2) { 
          header('location:validasitndk.php'); ?>
          <script>history.pushState({}, "", "")</script><?php
        } else { 
          header('location:./dosen.php'); ?>
          <script>history.pushState({}, "", "")</script><?php
        }
      } }
    // akhir aksi submit kadep
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/images/favicon.png">
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

  <style>
            .scrollbar-deep-purple::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px; }

            .scrollbar-deep-purple::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5; }

            .scrollbar-deep-purple::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #aaa; }

            .scrollbar-deep-purple {
            scrollbar-color: #512da8 #F5F5F5;
            }

            .bordered-deep-purple::-webkit-scrollbar-track {
            -webkit-box-shadow: none;
            border: 1px solid #ffffff00; }

            .bordered-deep-purple::-webkit-scrollbar-thumb {
            -webkit-box-shadow: none; }

            .thin::-webkit-scrollbar {
            width: 6px; }

            .example-1 {
            position: relative;
            overflow-y: scroll;
            height: 200px; }
  </style>

</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        <span class="ms-1 font-weight-bold">Sistem Administrasi Kadep</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <!-- home  -->
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

          <!-- NAVIGASI UNTUK KADEP  -->
          <?php if ($_SESSION['status2'] == 5) { ?>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Kadep</h6>
          </li>

         <!-- PENGAJUAN MANDAT -->
         <?php if($_SESSION['status2'] == '5'){ ?>
          <li class="nav-item">
            <a class="nav-link active" href="./kirimkadep.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-exclamation" viewBox="0 0 16 16">
                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363 1.591 6.602l11.833-4.733Z"/>
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
              </svg>
              </div>
              <span class="nav-link-text ms-1">Pengajuan Mandat </span>
            </a>
          </li>
          <?php } ?>
          
          <!--Validasi Surat MAHASISWA-->
          <?php if ($_SESSION['status2'] == '5') {?>
          <li class="nav-item">
            <a class="nav-link  " href="./validasisurat2.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-check-fill" viewBox="0 0 16 16">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1.146 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Tendik</span>
            </a>
          </li>
          <?php } ?>

          <!-- NAVIGASI UNTUK DOSEN  -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Dosen</h6>
        </li>
        <?php } ?>
          
        <!-- Permohonan Surat -->
        <?php if($_SESSION['status'] !== '5'){ ?>
        <li class="nav-item">
          <a class="nav-link  " href="./permohonandosen.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707L6.354 9.854z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Permohonan Surat</span>
          </a>
        </li>
        <?php } ?>

        <!-- BIMBINGAN PROPOSAL-->
        <li class="nav-item">
          <a class="nav-link  " href="./bimbingansurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z"/>
                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Bimbingan Proposal</span>
          </a>
        </li>
          
        <!--Validasi Surat MAHASISWA -->
        <li class="nav-item">
          <a class="nav-link  " href="./validasisurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
          </a>
        </li>

        <!-- Validasi Surat Dosen -->
        <!-- <?php if ($_SESSION['status2'] == '5') {?>
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
        <?php } ?> -->

        <!-- Validasi Surat Tendik -->
        <!-- <?php if ($_SESSION['status2'] == '5') {?>
        <li class="nav-item">
          <a class="nav-link  " href="./validasitndk.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Validasi Surat Tendik</span>
          </a>
        </li> -->
        <?php } ?>

        <!-- DATA MAGANG -->
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

        <!-- MANDAT KADEP -->
        <!-- <?php if($_SESSION['status'] !== '5'){ ?>
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
        <?php } ?> -->

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
        
        <!-- GANTI PASSWORD -->
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Kadep</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Pengajuan Mandat</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">Pengajuan Mandat</h5>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../profile.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?php echo $_SESSION['user']?></span>
              </a>
            </li>
            
            <li class="nav-item px-3 d-flex align-items-center">
            
            </li>
            <!-- Notif -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                  <!-- icon lonceng/bel -->
                  <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell cursor-pointer"></i>
                    <!-- php surat masuk kadep -->
                    <?php 
                    include '../_database/config.php';
                    if ($_SESSION['status2'] == 5) {
                      $query_kadep = mysqli_query($koneksi, 
                      'SELECT * FROM suratmahasiswa WHERE (status_dosen2 = 2 || status_dosentkk = 2) && notif = 2 
                      UNION SELECT * FROM suratdosen WHERE notif = 0
                      UNION SELECT * FROM surattendik  WHERE notif = 0 ORDER BY id_no DESC' );
                      $data = mysqli_num_rows($query_kadep); ?>

                      <span class="primary"><?php echo $data ?></span>
                   <?php } ?>
                  </a>

                  <!-- dropdown surat masuk -->
                  <ul class="dropdown-menu  dropdown-menu-end  px-1 py-1 me-sm-n3" aria-labelledby="dropdownMenuButton">
                    <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin" style = "height:200px">
                    <!-- surat masuk kadep dari mahasiswa, dosen, tendik -->
                      <?php 
                        include '../_database/config.php';
                        if ($_SESSION['status2'] == 5) {
                          $query = mysqli_query($koneksi, 
                          'SELECT * FROM suratmahasiswa WHERE (status_dosen2 = 2 || status_dosentkk = 2) && notif = 2 
                          UNION SELECT * FROM suratdosen WHERE status_kadep = 0 && notif = 0
                          UNION SELECT * FROM surattendik  WHERE status_kadep = 0 && notif = 0 ORDER BY tanggal DESC' );
                          while ($data = mysqli_fetch_array($query)) { ?>
                      <form action="" method = "post">
                        <li class="mb-2">
                          <a class="dropdown-item border-radius-md" href="">
                            <div class="d-flex py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <?php if ($data['status'] == 3) { ?>
                                <button type="submit" name="mhsw" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                    <span class="font-weight"><?php echo $data['nama']; ?></span>
                                  </h6>
                                </button>
                                <!-- Menginput id surat -->
                                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                                <p class="text-xs text-left ps-0 text-secondary mb-0">
                                  <?php echo $data['tanggal']; ?>
                                </p>
                                <?php } else if ($data['status'] == 2) { ?>
                                <button type="submit" name="dsn" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                    <span class="font-weight"><?php echo $data['nama']; ?></span>
                                  </h6>
                                </button>
                                <!-- Menginput id surat -->
                                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                                <p class="text-xs text-left ps-0 text-secondary mb-0">
                                  <?php echo $data['tanggal']; ?>
                                </p>
                                <?php } else if ($data['status'] == 4) { ?>
                                <button type="submit" name="tndk" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                                  <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                    <span class="font-weight"><?php echo $data['nama']; ?></span>
                                  </h6>
                                </button>
                                <!-- Menginput id surat -->
                                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                                <input type="hidden" name = "lokasi" value = "home">
                                <p class="text-xs text-left ps-0 text-secondary mb-0">
                                  <?php echo $data['tanggal']; ?>
                                </p>
                                <?php } } } ?>
                              </div>
                            </div>
                          </a>
                        </li>
                      </form>
                    </div>
                  </ul>
                  <!-- akhir dropdown -->
                </li>
                <!-- and notif -->
                <li class="nav-item px-2 d-flex align-items-center">
                  <!-- <a href="javascript:;" class="nav-link text-body p-0">
                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                  </a> -->
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
    <div class="text-center">
      <a class="nav-link  " href="./ajukankadep.php"> 
        <button type="button" class="btn btn-secondary btn-lg w-95 btn bg-gradient-info">Ajukan Mandat Kepala Departemen</button>
      </a>
    </div>
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Status Surat</h6>
                </div>
                
              </div>
            </div>
            <!-- Filter surat kadep -->
          <div class="form-group d-flex justify-content-around mt-4 my-0 md-0">
          <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "12">
                <?php if ($_POST['filterid'] == 0 || $_POST['filterid'] == 2 || $_POST['filterid'] == 1 || $_POST['filterid'] == 3 ) { ?>
               <button type = "submit" name = "filterall" class = "btn btn-outline-info">Lihat Semua</button>
               <?php } 
               else { ?>
               <button type = "submit" name = "filterall" class = "btn btn-info">Lihat Semua</button>
             <?php } ?>
               </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "0">
                <?php if ($_POST['filterid'] == 12 || $_POST['filterid'] == 2 || $_POST['filterid'] == 1 || $_POST['filterid'] == NULL || $_POST['filterid'] == 3  ) { ?>
               <button type = "submit" name = "filter0" class = "btn btn-outline-info">Belum Diproses</button>
               <?php } 
               else { ?>
             <button type = "submit" name = "filter0" class = "btn btn-info">Belum Diproses</button>
             <?php } ?>
            </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "1">
                <?php if ($_POST['filterid'] == 12 || $_POST['filterid'] == 2 || $_POST['filterid'] == 0 || $_POST['filterid'] == NULL || $_POST['filterid'] == 3  ) { ?>
               <button type = "submit" name = "filter1" class = "btn btn-outline-info">Ditolak</button>
               <?php } 
               else { ?>
              <button type = "submit" name = "filter1" class = "btn btn-info">Ditolak</button>
             <?php } ?>
            </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "3">
                <?php if ($_POST['filterid'] == 12 || $_POST['filterid'] == 1 || $_POST['filterid'] == 0 || $_POST['filterid'] == NULL || $_POST['filterid'] == 2  ) { ?>
               <button type = "submit" name = "filter3" class = "btn btn-outline-info">Sedang Dikerjakan</button>
               <?php } 
               else { ?>
              <button type = "submit" name = "filter3" class = "btn btn-info">Sedang Dikerjakan</button>
             <?php } ?>
            </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "2">
                <?php if ($_POST['filterid'] == 12 || $_POST['filterid'] == 1 || $_POST['filterid'] == 0 || $_POST['filterid'] == NULL || $_POST['filterid'] == 3  ) { ?>
               <button type = "submit" name = "filter2" class = "btn btn-outline-info">Sudah Selesai</button>
               <?php } 
               else { ?>
              <button type = "submit" name = "filter2" class = "btn btn-info">Sudah Selesai</button>
             <?php } ?>
            </form>
        </div>
           
            
            <div class="card-body px-0 pt-0 pb-2 mt-0 pt-0 my-0 py-0">
            <div class="table-responsive scrollbar-deep-purple bordered-deep-purple thin mt-0 pt-0" style = "height:310px" >
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th>  </th>
                      <th class="text-center">No</th>
                      <th class="text-left ps-1">Mandat</th>
                      <th class="text-left ps-1">Dosen Koordinator</th>
                      <th class="text-left ps-1">Perihal</th>
                      <th class="text-left ps-4"> Proses Tugas</th>
                      <th class="text-left">Lihat Laporan</th>
                    </tr>
                  </thead>

                  <?php
                  include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                  $no = 0;
                  $no2 = $no++;
                  $query = mysqli_query($koneksi, 'SELECT * FROM ajukankadep ORDER BY id_no DESC');
                  while ($data = mysqli_fetch_array($query)) {
                    
                         
                    if (isset($_POST['filter0']) || isset($_POST['filter1']) || isset( $_POST['filter1']) || isset( $_POST['filter2']) || isset($_POST['filter3'])) {
                      $idf = $_POST['filterid'];
                        if ($data['proses_tugas'] == $idf) {
                ?>
                 
                
                  <tr>
                  <td class = "my-1 py-1" ><button type="button" class="btn btn-danger btn-sm mt-1 mb-1" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_no'] ?>">Hapus</button></td>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-left ps-1"><?php echo $data['perihal'] ?></td>
                    <td class="text-left ps-1"><?php echo $data['dosen_koor'] ?></td>
                    <td class="text-left ps-1"><?php echo $data['keterangan'] ?></td>
                   
                    
                    
                    <!-- status proses tugas  -->
                    <?php if ($data['proses_tugas'] == 0) {?>
                      <td class="align-middle text-left text-sm">
                        <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['proses_tugas'] ?>">Menunggu Persetujuan</span>
                      </td> <?php } 
                            else if ($data['proses_tugas'] == 1) {?>
                        <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['proses_tugas'] ?>">Ditolak</span>
                      </td> 
                            <?php }

                            else if ($data['proses_tugas'] == 3) {?>
                            <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-info" value="<?php echo $data['proses_tugas'] ?>">Sedang Dikerjakan</span>
                      </td> <?php }  

                      else if ($data['proses_tugas'] == 2) {?>
                            <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['proses_tugas'] ?>">Sudah Selesai</span>
                      </td> <?php } ?> 

                    <?php if ($data['proses_tugas'] == 2) {?>
                        
                    <td class="text-center"> <a href="./mandat/<?php echo $data['laporan'] ?>" target="_blank">
                                  <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p>
                                  </a></td>
                              <?php } 
                           else if ($data['proses_tugas'] == 1) {
                                    ?><td> <?php echo $data['catatan'] ?> </td> 
                                     <?php }
                                  else if ($data['proses_tugas'] == 1) {
                                    ?><td> <?php echo $data['catatan'] ?> </td> <?php }
                                  else if ($data['proses_tugas'] == 3){ ?>
                                      <td>Tugas Belum Selesai</td>
                                 <?php }
                                 else if ($data['proses_tugas'] == 0) { ?> 
                                      <td>Tugas Belum Direspon</td>
                                <?php } ?> </td> 
                          
                    </tr>
                     <?php 
                        } } 
                        
                        else { ?>

                          <tr>
                          <td class = "my-1 py-1" ><button type="button" class="btn btn-danger btn-sm mt-1 mb-1" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_no'] ?>">Hapus</button></td>
                          <td class="text-center"><?php echo $no++ ?></td>
                          <td class="text-left ps-1"><?php echo $data['perihal'] ?></td>
                          <td class="text-left ps-1"><?php echo $data['dosen_koor'] ?></td>
                          <td class="text-left ps-1"><?php echo $data['keterangan'] ?></td>
                        
                          
                          
                          <!-- status proses tugas  -->
                          <?php if ($data['proses_tugas'] == 0) {?>
                            <td class="align-middle text-left text-sm">
                              <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['proses_tugas'] ?>">Menunggu Persetujuan</span>
                            </td> <?php } 
                                  else if ($data['proses_tugas'] == 1) {?>
                              <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['proses_tugas'] ?>">Ditolak</span>
                            </td> 
                                  <?php }
      
                                  else if ($data['proses_tugas'] == 3) {?>
                                  <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-info" value="<?php echo $data['proses_tugas'] ?>">Sedang Dikerjakan</span>
                            </td> <?php }  
      
                            else if ($data['proses_tugas'] == 2 ) {?>
                                  <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['proses_tugas'] ?>">Sudah Selesai</span>
                            </td> <?php } ?> 
                              
                            <?php if ($data['proses_tugas'] == 2) {?>
                        
                        <td class="text-center"> <a href="./mandat/<?php echo $data['laporan'] ?>" target="_blank">
                                      <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p>
                                      </a></td>
                                  <?php }
                                  else if ($data['proses_tugas'] == 1) {
                                    ?><td> <?php echo $data['catatan'] ?> </td> <?php }
                                  else if ($data['proses_tugas'] == 3)  { ?>
                                      <td>Tugas Belum Selesai</td>
                                 <?php }
                                 else if ($data['proses_tugas'] == 0) { ?> 
                                      <td>Tugas Belum Direspon</td> 
                                <?php } ?> </td> 
                                 
                          </tr>
                                          <!-- Modal Hapus -->
                  <div class="modal fade" id="hapus<?php echo $data['id_no'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                   <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">

                       <!-- popup ajuan surat mahasiswa -->
                       <div class="modal-header">
                         <h5 class="modal-title" id="hapus<?php echo $data['id_no'] ?>">Hapus File</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>

                     
                       <div class="modal-body">
                         <form action="" method="post" enctype="multipart/form-data">
                           <div class="card-header pb-0 p-3">
                             <div class="row">
                               <div class="mb-3">
                               
                                 <!-- Nama File -->
                                 <label for="formFile" class="form-label">Nama File</label>
                                 <label name="flhps" class="form-control" aria-label="default input example"><?php echo $data['file'] ?></label>

                                 <!-- NRP mahasiswa -->
                                 <label for="formFile" class="form-label">Perihal</label>
                                 <label name="prhlhps" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                                 
                                 <!-- Lihat File -->
                                 <label for="formFile" class="form-label">File Yang Akan Dihapus</label>
                                 <a href="../pages_dosen/<?php echo $data['file'] ?>" target="_blank">
                                    <h6 class="modal-title" name="fl" id="hapus<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></h6>
                                    </a>
                                 
                                 <!-- Input ID untuk memberikan identitas surat -->
                                 <input type="hidden" name="id" value="<?php echo $data['id_no'] ?>">

                                 <!-- Memberi peringatan -->
                                 <h5 class = "text-danger modal-title text-center">APAKAH ANDA YAKIN ?</h5>
                                 <h6 class = " modal-title text-center">MENGHAPUS FILE BERARTI MENGHILANGKAN SELURUH DATA PERSETUJUAN</h6>
 
                                
                               </div>
                             </div>
                           </div>
                       </div>


                       <div class="modal-footer">
                         <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>

                         <!-- Saat dosen menolak -->
                           <button type="submite" name="hapus" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Hapus</button>
                        
                       </div>

                       </form>

                     </div>
                     </div>
                     </div>
                        <?php }  ?>                                           <!-- Modal Hapus -->
                  <div class="modal fade" id="hapus<?php echo $data['id_no'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                   <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">

                       <!-- popup ajuan surat mahasiswa -->
                       <div class="modal-header">
                         <h5 class="modal-title" id="hapus<?php echo $data['id_no'] ?>">Hapus File</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>

                     
                       <div class="modal-body">
                         <form action="" method="post" enctype="multipart/form-data">
                           <div class="card-header pb-0 p-3">
                             <div class="row">
                               <div class="mb-3">
                               
                                 <!-- Nama File -->
                                 <label for="formFile" class="form-label">Nama File</label>
                                 <label name="flhps" class="form-control" aria-label="default input example"><?php echo $data['file'] ?></label>

                                 <!-- NRP mahasiswa -->
                                 <label for="formFile" class="form-label">Perihal</label>
                                 <label name="prhlhps" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                                 
                                 <!-- Lihat File -->
                                 <label for="formFile" class="form-label">File Yang Akan Dihapus</label>
                                 <a href="../pages_dosen/<?php echo $data['file'] ?>" target="_blank">
                                    <h6 class="modal-title" name="fl" id="hapus<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></h6>
                                    </a>
                                 
                                 <!-- Input ID untuk memberikan identitas surat -->
                                 <input type="hidden" name="id" value="<?php echo $data['id_no'] ?>">

                                 <!-- Memberi peringatan -->
                                 <h5 class = "text-danger modal-title text-center">APAKAH ANDA YAKIN ?</h5>
                                 <h6 class = " modal-title text-center">MENGHAPUS FILE BERARTI MENGHILANGKAN SELURUH DATA PERSETUJUAN</h6> 
                            </div>
                           </div>
                          </div>
                         </div>
                         <div class="modal-footer">
                         <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>

                         <!-- Saat dosen menolak -->
                           <button type="submite" name="hapus" class="btn bg-gradient-info">Hapus</button>
                        
                       </div>
                        </div>
                       </div>
                      </div>


                      

                       </form>

                     </div>
                     </div>
                     </div>
                     <?php }   ?>

                              </div>
                      
                      <?php 
                      if ($no == 1) { ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    <td class = "mx-auto"><h6 class = "font-weight-bold">BELUM ADA SURAT</h6></td>
                    <?php } ?>

                <!-- php hapus file -->
   <?php
                include "../_database/config.php";
                if (isset($_POST['hapus'])) {
                  $id6 = $_POST['id'];
                  $query = mysqli_query($koneksi, "SELECT * FROM ajukankadep WHERE id_no = '$id6'");
                  $data = mysqli_fetch_assoc($query);
                  $nama_file = $data['file']; 
                  $target_file = "./mandat/$nama_file";
                  unlink("$target_file");
                  $query6 = mysqli_query($koneksi, "DELETE FROM ajukankadep  WHERE id_no = '$id6' ");
                 
                  if ($query6) {
                ?><script>
                      <?php $_SESSION['sukseshps'] = true; ?>
                    </script>
                    <script>
                      history.pushState({}, "", "")
                    </script><?php
                              ?> <script>
                      history.pushState({}, "", "")
                    </script>
                <?php } else {
                    echo '<script> alert ("gagal di ajukan")</script></a>';
                  }
                } ?>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  </main>
  
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
    <?php if(@$_SESSION['sukses']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil Mengajukan Mandat',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['sukseshps']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil Menghapus Data',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukseshps']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['pdf']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Gagal mengajukan pengajuan mandat ! Ekstensi file harus pdf',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['pdf']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['input']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal Input',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['input']); ?>
    <?php endif; ?>
</body>

</html>