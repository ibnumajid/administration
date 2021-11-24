<?php
    session_start();
    if($_SESSION['user']=='')
    {
          header("location:../index.php");
      }
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
      <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css" rel="stylesheet" />

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
            
            <span class="ms-1 font-weight-bold">Sistem Administrasi Dosen</span>
          </a>
        </div>

        <!--Nefbar-->
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            
          <!--home-->
            <li class="nav-item">
              <a class="nav-link  active" href="./kadep.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

          
          <!-- Permohonan Surat -->
  <?php if($_SESSION['status'] !== '5'){ ?>
          <li class="nav-item">
            <a class="nav-link  " href="./permohonandosen.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Permohonan Surat</span>
            </a>
          </li>
          <?php } ?>
          
          <!--Validasi Surat-->
          <li class="nav-item">
            <a class="nav-link  " href="./validasisurat.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
            </a>
          </li>

          <!-- Validasi Surat Dosen -->
          <?php if ($_SESSION['status'] == '5') {?>
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
                   <?php if ($_SESSION['status'] == '5') {?>
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

          
          
        <!--SURAT MASUK KADEP -->
     <!--   <?php if($_SESSION['status'] == '5'){ ?>
        </li> 
        <li class="nav-item"> 
          <a class="nav-link  " href="./suratmskkdp.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
            <span class="nav-link-text ms-1">Surat Masuk dari Mahasiswa</span>
          </a>
        </li> <?php } ?>
        
<!-- profil-->
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
        <!--barusan dicopy nefbar-->

      </aside>

      <!--BAtas-->
      <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
          <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Dosen</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Home</li>
              </ol>
              <h5 class="font-weight-bolder mb-0">Home</h5>
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
                <!-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </a>
                </li> -->
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



            
                                         <!-- Bagian Detail Permohonan Surat -->
      <div class="row">
     

     <div class="card-body p-3">
       <div class="row">
         <div class="card-body px-3 pt-0 pb-2">
         
           <div class="table-responsive p-0" style = "width:1000px">      
    
        <div class="form-group d-flex justify-content-around">
        <a href="./kadepsm.php" id='failedList'><button class = "btn btn-outline-info">Lihat Semua</button></a>
        <a href="./kadep.php" id='failedList'><button class = "btn btn-outline-info">Menunggu Persetujuan</button></a>
        <a href="./kadep1.php" id='failedList'><button class = "btn btn-info">Ditolak</button></a>
        <a href="./kadep2.php" id='failedList'><button class = "btn btn-outline-info">Disetujui</button></a>
        </div>             
            <div class="col-6 d-flex align-items-center">
         <h6 class="mb-0 pt-1 px-1">Surat yang Belum Divalidasi</h6>
       </div>
       <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin">
             <table class="table table-striped align-items-center mb-6">
               <thead>
                 <tr>
                   <th class="text-center">No</th>
                   <th class="text-left ps-2">Nama</th>
                   <th class="text-left ps-2">Status</th>
                   <th class="text-left ps-2">Perihal</th>
                   <th>Persetujuan Kadep</th>
                   <th class="text-center">Waktu Upload</th>
                   <th class="text-left ps-2"></th>
                 </tr>
               </thead>
               
               <!-- tabel mahasiswa -->
               <?php
                 include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                 $no = 0;
                 $no2 = $no++;
                 $nama = $_SESSION['user'];
                 
                 $query = mysqli_query($koneksi, 'SELECT * FROM suratmahasiswa ORDER BY id_no DESC');
                 
                 while ($data = mysqli_fetch_array($query)) {
                 
                     if ($data['status_kadep'] == 1 && $data['status_surat'] == 2) {?>
               
               <tr>
                 <!-- no -->
                 <td class="text-center"><?php echo $no++ ?></td>
                 <!-- nama -->
                 <form action="./validasimhs.php" method="post">
                 <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                 <td style = "height:20px">
                 <h6 style = "height:35px" class="text-sm-left ps-1 "><button class="btn btn-light"><?php echo $data['nama_mhsw'] ?></button></h6>
                 </td>
                 </form>
                 <!-- status -->
                 <td> <h6 class="text-left ps-1">Mahasiswa</h6></td>
                 <!-- perihal -->
                 <td> <h6 class="text-left ps-1"><?php echo $data['progres'] ?></h6></td>
                 <!-- status surat -->
                 <?php if ($data['status_kadep'] == 0) {?>
                 <td class="align-middle text-center text-sm">
                   <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_kadep'] ?>">Belum Diproses</span>
                 </td> <?php } 
                     else if ($data['status_kadep'] == 1) {?>
                 <td class="align-middle text-center text-sm">
                   <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_kadep'] ?>">Ditolak</span>
                 </td> <?php }
                     else if ($data['status_kadep'] == 2) {?>
                 <td class="align-middle text-center text-sm">
                   <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_kadep'] ?>">Sudah Diproses</span>
                 </td> <?php } ?>
                 <!-- tanggal -->
                 <td class="text-center"><?php echo $data['tanggal'] ?></td>
               
                 <?php } } ?>
               </tr>
               <!-- and tabel mahasiswa -->
               <!-- tabel suratdosen -->
               <?php
                 include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                 $nama = $_SESSION['user'];
                 
                 $query = mysqli_query($koneksi, 'SELECT * FROM suratdosen ORDER BY id_no DESC');
                 
                 while ($data = mysqli_fetch_array($query)) {
                 
                     if ($data['status_kadep'] == 0) {?>
               
               <tr>
                 <!-- no -->
                 <td class="text-center"><?php echo $no++ ?></td>
                 <!-- nama -->
                 <form action="./validasidosen.php" method="post">
                 <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                 <td style = "height:20px">
                   <h6 style = "height:20px" class="text-sm-left"><button style ="width:250px" class="btn btn-light btn-sm"><?php echo $data['nama_dsn'] ?></button></h6>
                 </td>
               </form>
                 <!-- status -->
                 <td> <h6 class="text-left ps-1">Dosen</h6></td>
                 <!-- perihal -->
                 <td> <h6 class="text-left ps-1"><?php echo $data['perihal'] ?></h6></td>
                 <!-- status surat -->
                 <?php if ($data['status_kadep'] == 0) {?>
                 <td class="align-middle text-center text-sm">
                   <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_kadep'] ?>">Belum Diproses</span>
                 </td> <?php } 
                     else if ($data['status_kadep'] == 1) {?>
                 <td class="align-middle text-center text-sm">
                   <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_kadep'] ?>">Ditolak</span>
                 </td> <?php }
                     else if ($data['status_kadep'] == 2) {?>
                 <td class="align-middle text-center text-sm">
                   <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_kadep'] ?>">Sudah Diproses</span>
                 </td> <?php } ?>
                 <!-- tanggal -->
                 <td class="text-center"><?php echo $data['tanggal'] ?></td>
                 
                 <?php } } ?>
               </tr>
               <!-- and tabel dosen -->
               <!-- tabel suratdosen -->
               <?php
                 include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                 $nama = $_SESSION['user'];
                 
                 $query = mysqli_query($koneksi, 'SELECT * FROM surattendik ORDER BY id_no DESC');
                 
                 while ($data = mysqli_fetch_array($query)) {
                 
                     if ($data['status_kadep'] == 0) {?>
               
               <tr>
                 <!-- no -->
                 <td class="text-center"><?php echo $no++ ?></td>
                 <!-- nama -->
                 <form action="./validasitendik.php" method="post">
                 <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                 <td style = "height:20px">
                   <h6 style = "height:20px" class="text-sm-left"><button style ="width:250px" class="btn btn-light btn-sm"><?php echo $data['nama_tdk'] ?></button></h6>
                 </td>
               </form>
                 <!-- status -->
                 <td> <h6 class="text-left ps-1">Tendik</h6></td>
                 <!-- perihal -->
                 <td> <h6 class="text-left ps-1"><?php echo $data['perihal'] ?></h6></td>
                 <!-- status surat -->
                 <?php if ($data['status_kadep'] == 0) {?>
                 <td class="align-middle text-center text-sm">
                   <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_kadep'] ?>">Belum Diproses</span>
                 </td> <?php } 
                     else if ($data['status_kadep'] == 1) {?>
                 <td class="align-middle text-center text-sm">
                   <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_kadep'] ?>">Ditolak</span>
                 </td> <?php }
                     else if ($data['status_kadep'] == 2) {?>
                 <td class="align-middle text-center text-sm">
                   <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_kadep'] ?>">Sudah Diproses</span>
                 </td> <?php } ?>
                 <!-- tanggal -->
                 <td class="text-center"><?php echo $data['tanggal'] ?></td>
                 <!-- button -->
                 <td class="align-middle">
                   <a  href="validaistndkq.php" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                     <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
                   </a>
                 </td>
                 <?php } } ?>
               </tr>
               <!-- and tabel dosen -->
                   <?php 
                   if ($no == 1) { ?>

                     <td></td>
                     <td></td>
                     <td></td>
                 <td class = "text-center"><h6 class = "font-weight-bold">BELUM ADA SURAT YANG DIAJUKAN</h6></td>
                 <?php } ?>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
   </div>

   <div class="row">
                <div class="col-lg-7">  
                <div class="col-md-12 mb-lg-0 mb-4">
                  <div class="card mt-0">
                    <div class="card-header pb-0 p-4">
                      <div class="row">
                        <div class="col-6 d-flex align-items-center">
                          <h6 class="mb-0 pt-1 px-1">Informasi</h6>
                        </div>
                        <hr>
                      </div>
                    </div>

                    <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin" style = "height:400px">
                      <div class="card-body p-3">
                        <div class="row">
                          <?php 
                          include "../_database/config.php";
                          $no = 1;
                          $query = mysqli_query($koneksi, 'SELECT * FROM adminsurat ORDER BY tanggal DESC' );

                          while ($data = mysqli_fetch_array($query)) {
                            $tujuan = $data['tujuan'];
                            if( strpos($tujuan, "Kadep") !== false )
                            { $no++ 
                            ?>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-4 mb-2 border-radius-lg">
                              <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark font-weight-bold text-sm"><?=$data['perihal']?></h6>
                                <span class="text-xs"><?=$data['keterangan']?></span>
                              </div>
                              <div class="d-flex align-items-center text-sm">
                                <a href="../pagesadmin/<?php echo $data['dokumen'] ?>" target="_blank">
                                  <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button" class="btn btn-link text-dark text-sm " class="btn btn-link"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</em></button></p>
                                </a>
                              </div>
                            </li>
                            <?php }?>
                          <?php } ?>

                          <?php if ($no == 1) { ?>
                          <h6 class = "text-center"><br><br><br>Tidak Ada Informasi Terbaru</h6>

                          <?php } ?>
                          <div class="col-md-6 mb-md-0 mb-4">
                          </div>
                          <div class="col-md-6">

                          </div>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
              </div>
           

            
            <div class="col-lg-5">
              <div class="card h-100">
                <div class="card-header pb-0 px-4">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Surat Masuk</h6>
                    </div>
                    <div class="col-6 text-end">

                      <a href = ./rekapdsn.php> <button class="btn btn-outline-primary btn-sm mb-0">View All</button> </a>
                    </div>
                  </div>
                </div>
                    <hr>    
                <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin" style = "height:400px"> 
                  <ul class="list-group">
                        <br>
                    <?php
                        include "../_database/config.php";

                    $query = mysqli_query($koneksi, 'SELECT * FROM kirimadmindsn ');
                    $no = 0;
                    $no2 = $no++;
                    while ($data = mysqli_fetch_array($query)){
                      $tujuan = $data['nama'];
                      if (strpos($tujuan, $_SESSION['user']) !== false) { $no++ ?>
                     
                    <li class="list-group-item border-0 d-flex justify-content-between ps-4 mb-2 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark font-weight-bold text-sm"> <?php echo $data ['file'] ?> </h6>
                        <span class="text-xs"><?php echo $data['perihal'] ?></span>
                        <span class="text-xs"><?php echo $data['tanggal'] ?></span>
                      </div>
                      <div class="d-flex align-items-center text-sm">
                  
                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                      </div>
                    </li>
                      <?php }} ?>
                      <?php if ($no == 1) { ?>

                      <h6 class = "text-center"><br><br><br>BELUM ADA SURAT MASUK</h6>
                      <?php } ?>

                  </ul>
                </div>
              </div>
            </div>
         
         </div>


      </main>
      
      </div>
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
      <!-- JS sweetaler notif login berhasil-->
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php if(@$_SESSION['alert']) : ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Berhasil Login',
                showConfirmButton: false,
                timer: 2000
                })
            </script>
        <?php unset($_SESSION['alert']); ?>
        <?php endif; ?>
    </body>

    </html>