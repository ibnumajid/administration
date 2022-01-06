<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);

if ($_SESSION['user'] == '' || ($_SESSION['status'] == 4 && $_Session['status2'] == 1)) {
  header("location:../index.php");
}

include "../_database/config.php";
// update notif bimbingan proposal1
if (isset($_POST['revisi'])) {
  $id = $_POST['id'];
  $query_revisi = mysqli_query($koneksi, "SELECT * FROM bimbingan ORDER BY id_no DESC");
  while ($data_revisi = mysqli_fetch_array($query_revisi)) {
  if ($data_revisi['status_dosen1'] == 1) {
    $query2 = mysqli_query($koneksi, "UPDATE bimbingan SET `notif`= 0 WHERE id_no = '$id' ");
    if ($query2) { 
      header('location:bimbingan.php'); ?>
      <script>history.pushState({}, "", "")</script><?php
    } else { 
      header('location:./mahasiswa.php'); ?>
      <script>history.pushState({}, "", "")</script><?php
    }
  } } }

  // update notif bimbingan proposal2
if (isset($_POST['selesai'])) {
  $id = $_POST['id'];
  $nama = $_SESSION['user'];
  $query_selesai = mysqli_query($koneksi, "SELECT * FROM bimbingan ORDER BY id_no DESC");
  while ($data_selesai = mysqli_fetch_array($query_selesai)) {
  if ($data_selesai['status_dosen1'] == 2) {
  $query = mysqli_query($koneksi, "UPDATE bimbingan SET `notif`= 3 WHERE id_no = '$id' ");
  if ($query) { 
    header('location:bimbingan.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  } else { 
    header('location:./mahasiswa.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  } 
    } 
  }
}

// update notif bimbingan proposal hima1
if (isset($_POST['hima1'])) {
  $id = $_POST['id'];
  $nama = $_SESSION['user'];
  $query_hima1 = mysqli_query($koneksi, "SELECT * FROM bimbingan ORDER BY id_no DESC");
  while ($data_hima1 = mysqli_fetch_array($query_hima1)) {
  if ($data_hima1['status_dosentkk'] == 1) {
  $query = mysqli_query($koneksi, "UPDATE bimbingan SET `notif`= 0 WHERE id_no = '$id' ");
  if ($query) { 
    header('location:bimbingan.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  } else { 
    header('location:./mahasiswa.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  } 
    } 
  }
}

// update notif bimbingan proposal hima2
if (isset($_POST['hima2'])) {
  $id = $_POST['id'];
  $nama = $_SESSION['user'];
  $query_hima2 = mysqli_query($koneksi, "SELECT * FROM bimbingan ORDER BY id_no DESC");
  while ($data_hima2 = mysqli_fetch_array($query_hima2)) {
  if ($data_hima2['status_dosentkk'] == 2) {
  $query = mysqli_query($koneksi, "UPDATE bimbingan SET `notif`= 3 WHERE id_no = '$id' ");
  if ($query) { 
    header('location:bimbingan.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  } else { 
    header('location:./mahasiswa.php'); ?>
    <script>history.pushState({}, "", "")</script><?php
  } 
    } 
  }
}




// Form pengiriman informasi magang
include '../_database/config.php';
$sesnam = $_SESSION['user'];
$tabel = mysqli_query($koneksi, "SELECT * FROM permohonanpmb WHERE nama = '$sesnam' ");
$data = mysqli_fetch_array($tabel);

// backend pengiriman pertama
if(isset($_POST['input']))
{
  $nama = $_POST['nm'];
  $nrp = $_POST['nrp'];
  $angkatan = $_POST['angkatan'];
  $nama_lab = $_POST['nl'];
  $perusahaan = $_POST['tm'];
  $alamat = $_POST['am'];
 
  $query = mysqli_query($koneksi, "INSERT into permohonanpmb values('','$nama','$nrp','$angkatan','$nama_lab', '$perusahaan', '$alamat', '', '0',  sysdate(), '2')");

    if($query)
    {
      ?><script><?php $_SESSION['sukses'] = true;?></script> 
      <script>history.pushState({}, "", "")</script><?php

    }
    else
    {
      ?><script><?php $_SESSION['input'] = true;?></script> 
      <script>history.pushState({}, "", "")</script><?php
    }
}
// Backend saat melakukan pembaharuan
if(isset($_POST['update'])) {
    $nama_lab = $_POST['nl'];
    $perusahaan = $_POST['tm'];
    $alamat = $_POST['am'];

  $query2 = mysqli_query($koneksi, "UPDATE permohonanpmb SET nama_lab = '$nama_lab' ");
  $query3 = mysqli_query($koneksi, "UPDATE permohonanpmb SET nama_perusahaan = '$perusahaan' ");
  $query4 = mysqli_query($koneksi, "UPDATE permohonanpmb SET alamat_perusahaan = '$alamat' ");
if ($data['status_ajuan'] == 1) {
  $query5 = mysqli_query($koneksi, "UPDATE permohonanpmb SET status_ajuan = '2' ");
}

if($query2 && $query3 && $query4)
{
  ?><script><?php $_SESSION['sukses2'] = true;?></script> 
  <script>history.pushState({}, "", "")</script><?php

}
else
{
  ?><script><?php $_SESSION['input'] = true;?></script> 
  <script>history.pushState({}, "", "")</script><?php
} } ?>


<!-- Backend saat melakukan pembatalan surat -->
<?php
if(isset($_POST['batal'])) {
 
    $query6 = mysqli_query($koneksi, "UPDATE permohonanpmb SET status_ajuan = '1' ");
   
  if($query6)
  {
    ?><script><?php $_SESSION['sukses3'] = true;?></script> 
    <script>history.pushState({}, "", "")</script><?php
  
  }
  else
  {
    ?><script><?php $_SESSION['input'] = true;?></script> 
    <script>history.pushState({}, "", "")</script><?php
  } } ?>


<!-- KIRIM SURAT -->
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
  <!-- sidebar -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        <span class="ms-1 font-weight-bold">Sistem Administrasi Mahasiswa</span>
      </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        
         <!--Home-->
         <li class="nav-item">
          <a class="nav-link  " href="./mahasiswa.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
          
          <!--Permohonan surat-->
          <li class="nav-item">
            <a class="nav-link  " href="./pmhnsurat.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up-fill" viewBox="0 0 16 16">
                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.354 9.854a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 8.707V12.5a.5.5 0 0 1-1 0V8.707L6.354 9.854z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Permohonan Surat</span>
            </a>
          </li>

          <!--bimbingan proposal-->
        <li class="nav-item">
          <a class="nav-link  " href="./bimbingan.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Bimbingan Proposal</span>
          </a>
        </li>

          <!--Permohonan Pembimbing-->
        <li class="nav-item">
          <a class="nav-link  active" href="../pagesmahasiswa/permohonanpmb.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Permohonan Pembimbing </span>
          </a>
        </li>

        <!-- REKAP SURAT -->
        <li class="nav-item"> 
          <a class="nav-link  " href="./rekapmhs.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Rekap Surat</span>
          </a>
        </li>   
      
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
  <!-- and sidebar -->
  
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Mahasiswa</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Permohonan Pembimbing</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">Permohonan Pembimbing</h5>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <!-- nama user -->
            <li class="nav-item d-flex align-items-center">
              <a href="../profile.php" class="nav-link text-body font-weight-bold px-0">
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
            <!-- jarak -->
            <li class="nav-item px-3 d-flex align-items-center">
              <!--a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a-->
            </li>
            <!-- notif -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <!-- <i class="fa fa-bell cursor-pointer"></i> -->
                <!-- angka pesan masuk -->
                <?php 
                include "../_database/config.php";
                $nama = $_SESSION['user'];
                $query_mhsw = mysqli_query($koneksi, "SELECT * FROM bimbingan WHERE nama = '$nama'");
                $data_mhsw = mysqli_fetch_assoc($query_mhsw);

                if ($nama) {
                  $query1 = mysqli_query($koneksi, "SELECT * FROM bimbingan WHERE (status_dosen1 = 1 || status_dosen1 = 2) & (notif = 1 || notif = 2) ORDER BY id_no DESC");
                  $data1 = mysqli_num_rows($query1); ?>

                <i class="fa fa-bell cursor-pointer" <?php if($data1 > 0){echo 'style="color:#63B3ED"';} ?>></i>
                <span class="primary"><?php echo $data1 ?></span>
                <?php } else if ($_SESSION["status2"] == 3) {
                  $query2 = mysqli_query($koneksi, "SELECT * FROM bimbingan WHERE ((status_dosen1 = 1 || status_dosen1 = 2) & (notif = 1 || notif = 2)) || ((status_dosentkk = 1 || status_dosentkk = 2) & (notif = 1 || notif = 2)) ORDER BY id_no DESC");
                  $data2 = mysqli_num_rows($query2); ?>

                <i class="fa fa-bell cursor-pointer" <?php if($data2 > 0){echo 'style="color:#63B3ED"';} ?>></i>
                <span class="primary"><?php echo $data2 ?></span>
                
                <?php } ?>
              </a>
              <!-- dropdown surat masuk -->
              <ul class="dropdown-menu  dropdown-menu-end  px-1 py-1 me-sm-n3" aria-labelledby="dropdownMenuButton">
                <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin" style = "height:200px">
                  <form action="" method = "post">
                    <?php 
                    include '../_database/config.php';
                    $nama = $_SESSION['user'];
                    $query = mysqli_query($koneksi, 'SELECT * FROM bimbingan ORDER BY id_no DESC');
                    while ($data = mysqli_fetch_array($query)) { 
                    
                    if ($data['status_dosen1'] == 1 && $data['notif'] == 1 && $data['nama'] == $nama) { ?>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <button type="submit" name="revisi" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">Revisi</span>
                                <span class="font-weight"><?php echo $data['perihal']; ?></span>
                              </h6>
                            </button>
                            <p class="text-xs text-secondary mb-0">
                              <?php echo $data['tanggal'] ?>
                            </p>
                            <!-- Menginput id surat -->
                            <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php } 
                    else if ($data['status_dosen1'] == 2 && $data['notif'] == 2 && $data['nama'] == $nama) { ?>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <button type="submit" name="selesai" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">Selesai</span>
                                <span class="font-weight"><?php echo $data['perihal']; ?></span>
                              </h6>
                            </button>
                            <p class="text-xs text-secondary mb-0">
                              <?php echo $data['tanggal'] ?>
                            </p>
                            <!-- Menginput id surat -->
                            <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php } 
                    else if ($data['status_dosentkk'] == 1 && $data['notif'] == 1 && $_SESSION["status2"] == 3) { ?>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <button type="submit" name="hima1" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">Revisi</span>
                                <span class="font-weight"><?php echo $data['perihal']; ?></span>
                              </h6>
                            </button>
                            <p class="text-xs text-secondary mb-0">
                              <?php echo $data['tanggal'] ?>
                            </p>
                            <!-- Menginput id surat -->
                            <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php } 
                    else if ($data['status_dosentkk'] == 2 && $data['notif'] == 2 && $_SESSION["status2"] == 3) { ?>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <button type="submit" name="hima2" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">selesai</span>
                                <span class="font-weight"><?php echo $data['perihal']; ?></span>
                              </h6>
                            </button>
                            <p class="text-xs text-secondary mb-0">
                              <?php echo $data['tanggal'] ?>
                            </p>
                            <!-- Menginput id surat -->
                            <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                          </div>
                        </div>
                      </a>
                    </li>
                    <?php } } ?>
                  </form>
                </div>
              </ul>
            </li>
            <!-- and notif -->
            <!-- jarak -->
            <li class="nav-item px-3 d-flex align-items-center">
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

    <?php  include "../_database/config.php"; 
          $nama = $_SESSION['user'];
          $query = mysqli_query($koneksi, "SELECT * FROM permohonanpmb WHERE nama = '$nama' ");
          $data2 = mysqli_fetch_array($query)
          ?>
          
    <div class="container-fluid py-4">
      <div class="row">
      <div class="col">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Form Informasi Tempat Magang</h6>
                </div>
                
                 
              </div>
            </div>

           
            <!-- Form untuk melakukan permohonan pembimbing -->
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group d-flex my-0">
              <!-- nama -->
              <div class="card-header pb-0 p-3" style = "width:400px">
                <div class="row">
                  <div class="mb-0">
                  <label for="formFile" class="form-label">Nama Mahasiswa</label>
                  <input name="nm" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $_SESSION['user'] ?>" required>
                  <label name="nm" class="form-control" aria-label="default input example"><?php echo $_SESSION['user'] ?></label>
                  </div>
                </div>
              </div>
              
              <!-- nrp -->
              <div class="card-header pb-0 p-3" style = "width:400px">
                <div class="row">
                  <div class="mb-0">
                  <label for="formFile" class="form-label" >NRP Mahasiswa</label>
                  <input name="nrp" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $_SESSION['NIP'] ?>" required>
                  <label name="nrp" class="form-control" aria-label="default input example"><?php echo $_SESSION['NIP'] ?></label>
                  </div>
                  </div>
                  </div>
           
            <div class="card-header pb-0 p-3 mt-0" style = "width:400px">
              <div class="row">
                <div class="mb-0">
                  <!-- Angkatan Mahasiswa -->
                <label for="formFile" class="form-label">Angkatan</label>
                <input name="angkatan" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $_SESSION['angkatan'] ?>" required>
                <label name="angkatan" class="form-control" aria-label="default input example"><?php echo $_SESSION['angkatan'] ?></label>
                </div>
              </div>
            </div>
            </div>
        
            <!-- nama lab -->
            <div class="card-header pb-0 pt-0 p-3 my-0">
              <div class="row">
                <div class="mb-0">
                  <!-- Memilih Lab -->
                <label for="formFile" class="form-label">Nama Lab</label>
                <?php if ($data2['status_ajuan'] == 2 && $data2['status_dosen1'] !== 2 ) { ?>
                  <select id="jenis_surat" name="nl" aria-placeholder="<?php echo $data2['nama_lab'] ?>"  class="form-select" aria-label="Default select example" required>
                            <option selected><?php echo $data2['nama_lab']; ?></option>
                            <option value="Cyber Physical Otomasi dan Robot Industri">Cyber Physical Otomasi dan Robot Industri</option>
                            <option value="Programmable Logic Controller dan Sistem Kontrol Supervisori">Programmable Logic Controller dan Sistem Kontrol Supervisori</option>
                            <option value="Mikroelektronika dan Sistem Embedded">Mikroelektronika dan Sistem Embedded</option>
                            <option value="Motor Penggerak dan Sistem Elektronika Daya">Motor Penggerak dan Sistem Elektronika Daya</option>
                        </select>
                
                <?php } else if ($data2 ['status_ajuan'] == 1 && $data2['status_dosen1'] !== 2) { ?>
                  <select id="jenis_surat" name="nl" aria-placeholder="<?php echo $data2['nama_lab']; ?>"  class="form-select" aria-label="Default select example" required>
                            <option selected><?php echo $data2['nama_lab'] ?></option>
                            <option value="Cyber Physical Otomasi dan Robot Industri">Cyber Physical Otomasi dan Robot Industri</option>
                            <option value="Programmable Logic Controller dan Sistem Kontrol Supervisori">Programmable Logic Controller dan Sistem Kontrol Supervisori</option>
                            <option value="Mikroelektronika dan Sistem Embedded">Mikroelektronika dan Sistem Embedded</option>
                            <option value="Motor Penggerak dan Sistem Elektronika Daya">Motor Penggerak dan Sistem Elektronika Daya</option>
                        </select>
                    <?php } 
                     else if ($data2['status_dosen1'] == 2) { ?>
                        <label name="nl" class="form-control" aria-label="default input example"><?php echo $data2['nama_lab'] ?></label>       
                   <?php }
                    else { ?>
                        <select name="nl" aria-placeholder="Pilih Lab"  class="form-select" aria-label="Default select example" required>
                            <option selected>Pilih Lab</option>
                            <option value="Cyber Physical Otomasi dan Robot Industri">Cyber Physical Otomasi dan Robot Industri</option>
                            <option value="Programmable Logic Controller dan Sistem Kontrol Supervisori">Programmable Logic Controller dan Sistem Kontrol Supervisori</option>
                            <option value="Mikroelektronika dan Sistem Embedded">Mikroelektronika dan Sistem Embedded</option>
                            <option value="Motor Penggerak dan Sistem Elektronika Daya">Motor Penggerak dan Sistem Elektronika Daya</option>
                        </select>
                   <?php }
                    ?>
                    </div>
              </div>
            </div>

            <div class="form-group d-flex">

         
      
            <div class="card-header pb-0 p-3" style = "width:550px" >
              <div class="row">
                <div class="mb-0">
                  <!-- Memilih tempat magang -->
                <label for="formFile" class="form-label">Nama Tempat Magang</label>
                <?php if ($data2['status_ajuan'] == 2 && $data2['status_dosen1'] !== 2) { ?>
                <input name="tm" class="form-control" type="text" aria-label="default input example"  value = "<?php echo $data2['nama_perusahaan'] ?>" >
                
                <?php } else if ($data2 ['status_ajuan'] == 1 && $data2['status_dosen1'] !== 2) { ?>
                <input name="tm" class="form-control" type="text" aria-label="default input example"  value = "<?php echo $data2['nama_perusahaan'] ?>" >
                    <?php } 
                    else if ($data2['status_dosen1'] == 2) { ?>
                        <label name="tm" class="form-control" aria-label="default input example"><?php echo $data2['nama_perusahaan'] ?></label>       
                   <?php }
                    else { ?>
                <input name="tm" class="form-control" type="text" aria-label="default input example" placeholder="Masukkan Nama Tempat Magang" >
                   <?php }
                    ?>
                    </div>
                    </div>
              </div>
            

            <div class="card-header pb-0 p-3" style = "width:550px">
              <div class="row">
                <div class="mb-0">
                  <!-- Memilih alamat magang -->
                <label for="formFile" class="form-label">Alamat Magang</label>
                 <?php if ($data2['status_ajuan'] == 2 && $data2['status_dosen1'] !== 2) { ?>
                <input name="am" class="form-control" type="text" aria-label="default input example"  value = "<?php echo $data2['alamat_perusahaan'] ?>" >
                
                <?php } else if ($data2 ['status_ajuan'] == 1 && $data2['status_dosen1'] !== 2) { ?>
                <input name="am" class="form-control" type="text" aria-label="default input example"  value = "<?php echo $data2['alamat_perusahaan'] ?>" >
                    <?php } 
                     else if ($data2['status_dosen1'] == 2) { ?>
                        <label name="am" class="form-control" aria-label="default input example"><?php echo $data2['alamat_perusahaan'] ?></label>       
                   <?php }
                    else { ?>
                <input name="am" class="form-control" type="text" aria-label="default input example" placeholder="Masukkan Nama Alamat Magang" >
                   <?php }
                    ?>
                    </div>
                </div>
              </div>

              <!-- dosen pemb -->
              <?php if ($data2['status_dosen1'] == 2) { ?>
              <div class="card-header pb-0 p-3 mt-0" style = "width:400px">
                <div class="row">
                  <div class="mb-0">
                    <label for="formFile" class="form-label">Dosen Pembimbing</label>
                    <label name="angkatan" class="form-control" aria-label="default input example"><?php echo $data2['dosen1'] ?></label>
                  </div>
              <div class="row">
                <div class="mb-0">
                  <!-- memilih dosen pembimbing -->
                <label for="formFile" class="form-label">Dosen Pembimbing</label>
                <label name="angkatan" class="form-control" aria-label="default input example"><?php echo $data2['dosen1'] ?></label>
                </div>
              </div>
              <?php } ?>
            </div>

           
                    <div class="d-flex justify-content-center ">

                    <?php if ($data2['status_dosen1'] == 2) { ?>
                    
                    <?php }
                    else if ($data2['status_ajuan'] == 1) {?> 
                  <h6 class="mb-0 text-danger">Anda Membatalkan Permohonan Pencarian Dosen Pembimbing <br></h6>
                  <?php } 
                   else if ($data2['status_ajuan'] == 2) { ?> 
                  <h6 class="mb-0 text-info text-center">Form Telah Dikirim dan Sedang Diproses Dosen Koordinator <br> Anda Bisa Melakukan Perubahan atau Membatalkan Permohonan</h6>
                  <?php } ?>
                  </div>
                  <div class="d-flex justify-content-center mt-3">
                    
                    <?php if ((($data2['status_ajuan'] == 2 || $data2['status_ajuan'] == 1) && $data2['status_dosen1'] != 2)) { ?>
                    <button type="submite" name="update" class="btn bg-gradient-info mx-3">Perbarui</button>
                   
                    <button type = "submite" name ="batal" class = "btn bg-gradient-danger">Batalkan</button>
                    <?php }   
                        else if ($data2['status_dosen1'] == 2) {
                            echo "Anda Sudah Mendapatkan Dosen Pembimbing";
                        }
                    else { ?>
                        <button type="submite" name="input" class="btn bg-gradient-info">Kirim</button>
                        
                       <?php } ?>
                      <input type="hidden" name = "id" value = "<?php echo $data2['id_no'] ?>">
                    </div>
                    </form>
                </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
  <!-- notif sukses memohon pencarian dosbing -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['sukses']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil Memohon Pencarian Dosbing',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses']); ?>
    <?php endif; ?>
    <!-- notif gagal diajukan -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['input']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal Diajukan',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['input']); ?>
    <?php endif; ?>
    <!-- notif sukses melakukan perubahan -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['sukses2']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil Melakukan Perubahan',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses2']); ?>
    <?php endif; ?>
    <!-- notif sukses membatalkan pengiriman -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['sukses3']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil Membatalkan Pengiriman',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses3']); ?>
    <?php endif; ?>
</body>

</html>