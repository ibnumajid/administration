<?php
session_start();
  if($_SESSION['user']==''  || $_SESSION['status'] != 2)
  {
  header("location:../index.php");
  }
?>
  <?php
                        include '../_database/config.php';
                        if(isset($_POST['input']))
                        {
                        $id = rand(1, 999999999);
                        $perihal = $_POST['sr'];
                        $keterangan = $_POST['keterangan'];
                        $keterangan2 = $_POST['keterangan2'];
                        $tanggal=$_POST['tanggal'];
                        $dosen = $_POST['dosen'];
                        $nama_file = basename($_FILES['fl']['name']);
                        $ukuran = $_FILES['fl']['size'];
                        $tipe = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));
                        $target = "./mandat/";
                        
                        $max = 1024 * 5000;
                        $ekstensi = "pdf";
                        

                        $url = $id.'_'.$nama_file;
                        $upl = $target . $url;
                        
                        if ($keterangan == NULL || $keterangan2 == NULL || $nama_file == NULL || $tanggal == NULL || $dosen == NULL){ 
                            ?><script><?php $_SESSION["isisemua"] = true;?></script> 
                            <script>history.pushState({}, "", "")</script><?php 
                          }
                        else if ($ukuran > $max && $tipe != $ekstensi)
                        {
                        ?><script><?php $_SESSION["pdfuk"] = true;?></script> 
                        <script>history.pushState({}, "", "")</script><?php 
                        }

                        else if ($ukuran > $max)
                        {
                          ?><script><?php $_SESSION['uk'] = true ?></script> 
                          <script>history.pushState({}, "", "")</script><?php
                        }
                        
                        else if ($tipe != $ekstensi)
                        { 
                        ?><script><?php $_SESSION['pdf'] = true ?></script> 
                        <script>history.pushState({}, "", "")</script><?php
                        }  
                        else if (move_uploaded_file($_FILES['fl']['tmp_name'], $upl)) 
                        {
                            $query = mysqli_query($koneksi,"INSERT into ajukankadep values('', '$url', '', '$dosen', '$tanggal', '$perihal','$keterangan','$keterangan2', '0', '', sysdate())");

                            if($query)
                            {
                            ?><script><?php $_SESSION['sukses'] = true;?></script> 
                         <?php header("location:kirimkadep.php");
                            }
                            else
                            {
                            ?><script><?php $_SESSION['input'] = true;?></script> 
                            <script>history.pushState({}, "", "")</script><?php
                            }
                        }
                        else 
                        {
                          ?><script><?php $_SESSION['gagal'] = true;?></script> 
                          <script>history.pushState({}, "", "")</script><?php
                        }
                        
                        }

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
</script>

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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pengajuan Mandat</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Ajukan Mandat</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Ajukan Surat</h6>
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-11">
          <div class="row">
              <div class="card mt-0">
                <!--div class="card-header pb-0 p-4">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0 pt-1 px-1">Permohonan Surat</h6>
                    </div>
                  </div>
                </div-->
                
                <!-- Backend pengajuan mandat kadep -->
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      

                        <!-- nama & nrp -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-header pb-0 p-3">    
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="formFile" class="form-label">Nama Kepala Departemen</label>
                                        <input name="nm" class="form-control" type="hidden" placeholder="Masukan Nama Mahasiwa" aria-label="default input example"  value = "<?php echo $_SESSION['user'] ?>" >
                                        <label name="nm" class="form-control" aria-label="default input example"><?php echo $_SESSION['user'] ?></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formFile" class="form-label">NPP</label>
                                        <input name="nrp" class="form-control" type="hidden" placeholder="Masukan NRP" aria-label="default input example" value = "<?php echo $_SESSION['NIP'] ?>">
                                        <label name="nrp" class="form-control" aria-label="default input example"><?php echo $_SESSION['NIP'] ?></label>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- jenis surat -->
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Jenis Surat</label>
                                        <select id="jenis_surat" name="sr"  class="form-select" aria-label="Default select example" required>
                                            <option selected>Pilih Jenis Surat</option>
                                            <option value="Rapat">Rapat</option>
                                                <option value="Workshop">Workshop</option>
                                            <option value="Kunjungan">Kunjungan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Keterangan -->
                            <div class="keterangan" style="display: none;">
                              <div class="card-header pb-0 p-3">    
                                  <div class="row">
                                      <div class="form-group col-md-6">
                                          <label id="label-keterangan" for="formFile" class="form-label">Perihal Rapat</label>
                                          <input name="keterangan" class="form-control" type="text" aria-label="default input example" >
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label id="label-keterangan2" for="formFile" class="form-label">Tempat Rapat</label>
                                          <input name="keterangan2" class="form-control" type="text" aria-label="default input example" >
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <!-- dosen -->
                            <div class="tanggal" style="display: none;">
                              <div class="card-header pb-0 p-3">    
                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <label id="label-tanggal" for="formFile" class="form-label">Tanggal Rapat</label>
                                    <input name="tanggal" class="form-control" type="date" value="Masukkan Tanggal" id="example-date-input">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="formFile" class="form-label">Dosen Koordinator </label>
                                        <select name="dosen"  class="form-select" aria-label="Default select example" >
                                            <option selected>Pilih Dosen Koordinator </option>
                                            <?php
                                            include '../_database/config.php';
                                            $query_dosen = mysqli_query($koneksi, "SELECT * FROM data_dosenb") or die(mysqli_error($koneksi));
                                            while ($data_dosen = mysqli_fetch_array($query_dosen)) { ?>
                                            <option value="<?php echo $data_dosen['nama_anggota'] ?>"><?php echo $data_dosen['nama_anggota'] ?></option>
                                            <?php } ?>
                                        </select>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- file -->
                            <div class="file" style="display: none;">  
                              <div class="card-header pb-0 p-3">
                                  <div class="row">
                                      <div class="mb-3">
                                          <label id ="label-file" for="formFile" class="form-label">Masukkan File untuk Memberikan Mandat Melakukan Rapat</label>
                                          <input type="file" id="file" name="fl" class="form-control" aria-label="file example" >
                                          <div class="invalid-feedback">Example invalid form file feedback</div>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <br><br>
                            <div class="modal-footer">
                            <a href = "./kirimkadep.php"><button type="button" class="btn bg-gradient-secondary" >Kembali</button></a>
                                <button type="submit" name="input" class="btn bg-gradient-info" >Kirim Mandat</button>
                            </div>
                        </form>
                    </div>
                </div>  
              </div>
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
    <?php if(@$_SESSION['uk']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Gagal mengajukan permohonan surat ! Ukuran file tidak boleh melebihi 5 mb',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['uk']); ?>
    <?php endif; ?>

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
    <?php if(@$_SESSION['pdfuk']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Gagal mengajukan permohonan surat ! Ekstensi file harus pdf dan ukuran file tidak boleh melebihi 5 mb',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['pdfuk']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['isisemua']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Silahkan Isi Semua Bagian',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['isisemua']); ?>
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['gagal']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Terjadi Kesalahan yang Tidak Diketahui',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['gagal']); ?>
    <?php endif; ?>
    
    <script>
        $('#jenis_surat').on('change',function () {
            if($('#jenis_surat').val() == 'Rapat') {
                $('.keterangan').show();
                $('#label-keterangan').text("Perihal Rapat");
                $('#label-keterangan2').text("Tempat Rapat");
                $('.tanggal').show();
                $('#label-tanggal').text("Tanggal Rapat");
                $('.file').show();
                $('#label-file').text("Masukkan File untuk Memberikan Mandat Melakukan Rapat");
              }
            else if($('#jenis_surat').val() == 'Workshop') {
                $('.keterangan').show();
                $('#label-keterangan').text("Perihal Workshop");
                $('#label-keterangan2').text("Tempat Workshop");
                $('.tanggal').show();
                $('#label-tanggal').text("Tanggal Workshop");
                $('.file').show();
                $('#label-file').text("Masukkan File untuk Memberikan Mandat Melakukan Workshop");
              }
            else if($('#jenis_surat').val() == 'Kunjungan') {
                $('.keterangan').show();
                $('#label-keterangan').text("Perihal Kunjungan");
                $('#label-keterangan2').text("Tempat Kunjungan");
                $('.tanggal').show();
                $('#label-tanggal').text("Tanggal Kunjungan");
                $('.file').show();
                $('#label-file').text("Masukkan File untuk Memberikan Mandat Melakukan Kunjungan");
              } 
            else {
                $('.keterangan').hide();
                $('.tanggal').hide();
                $('.file').hide();
              }
        });
    </script>
</body>
</body>

</html>   