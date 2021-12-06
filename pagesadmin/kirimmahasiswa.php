<?php
  session_start();
  if($_SESSION['user']=='' && ($_SESSION['status'] != 1 || ($_SESSION['status'] == 4 && $_Session['status2'] == 1)) )
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
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

  <!-- CSS form upload file -->
  <style>
    .btn-upload {
        padding: 10px 20px;
        margin-left: 10px;
    }
    .upload-input-group {
        margin-bottom: 10px;
    }

    .input-group>.custom-select:not(:last-child), .input-group>.form-control:not(:last-child) {
      height: 37px;
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        
        <span class="ms-1 font-weight-bold">Sistem Administrasi Tata Usaha</span>
      </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

      <li class="nav-item">
          <a class="nav-link  " href="../pages/pagestendik/tendik.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                  </svg>
              </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

         <!--permohonan surat-->
         <li class="nav-item">
          <a class="nav-link  " href="./permohonansurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Permohonan Surat</span>
          </a>
        </li>

        <!-- REKAP SURAT -->
      <li class="nav-item"> 
        <a class="nav-link  " href="./rekapsurat.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Rekap Surat</span>
        </a>
      </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Tata Usaha</h6>
        </li>
        
      <li class="nav-item"> <!-- INI KIRIM SURAT  -->
        <a class="nav-link  " href="../pagesadmin/kirimadmin.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65l-.095.038L.767 5.854l-.001.001-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.563 2.903.432.275.275.432 2.903 4.563.002.002.26.41a.5.5 0 0 0 .886-.083l.181-.453L15.926.78l.038-.095Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z"/>
                </svg>
          </div>
            <span class="nav-link-text ms-1">Kirim Surat</span>
          </a>
       </li>

       <!-- Validasi Surat Mahasiswa -->
        <li class="nav-item">
          <a class="nav-link  active" href="../pagesadmin/validasiadmin.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Surat Masuk dari Mahasiswa</span>
          </a>
        </li>
    
        <!-- VALIDASI SURAT Dosen -->
        <li class="nav-item">
          <a class="nav-link  " href="../pagesadmin/validasiadmin2.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
            <span class="nav-link-text ms-1">Surat Masuk dari Dosen</span>
          </a>
        </li>

          <!-- VALIDASI SURAT  -->
          <li class="nav-item">
            <a class="nav-link  " href="../pagesadmin/validasiadmin3.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Surat Masuk dari Tendik</span>
            </a>
          </li>

        <li class="nav-item"> <!-- INI Rekap SURAT  -->
          <a class="nav-link  " href="../pagesadmin/rekapadmin.php">
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
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Tata Usaha</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Surat Masuk dari Mahasiswa</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">Surat Masuk dari Mahasiswa</h5>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../profile.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"> <?php echo $_SESSION['user']?> </span>
              </a>
            </li>
            <!--li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a-->
            </li>
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
                <!-- <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Surat Masuk dari Mahasiswa</h6>
                </div> -->
              </div>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <?php
                  
                  $id = $_POST['id'];
                  include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                  $nama = $_SESSION['user'];
                  $query = mysqli_query($koneksi, "SELECT * FROM suratmahasiswa WHERE id_no = '$id' ");
                  $query2 = mysqli_query($koneksi, "SELECT * FROM kirimadmin WHERE id_no = '$id' ");
                  $data = mysqli_fetch_array($query);
                  $data2 =  mysqli_fetch_array($query2);

                  
   ?> 
                          <form action="" method="post" enctype="multipart/form-data">
                              <div class="card-header pb-0 p-3">
                                <div class="row">
                                  <div class="mb-3">
                                    <div class="row">
                                      <div class="form-group col-md-6">
                                          <label for="formFile" class="form-label">Nama Mahasiswa</label>
                                          <label name="nm" class="form-control" aria-label="default input example"><?php echo $data['nama'] ?></label>
                                          <input type="hidden" name="nm" value = "<?php echo $data['nama'] ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="formFile" class="form-label">NRP Mahasiswa</label>
                                          <label name="nrp" class="form-control" aria-label="default input example"><?php echo $data['id_nrp'] ?></label>
                                        </div>
                                    </div>

                                    <!-- Keterangan tiap Perihal -->
                                    <?php if ($data['perihal'] == "Surat Magang") { ?>
                                      <div class="row">
                                        <div class="form-group col-md-6">
                                          <label for="formFile" class="form-label">Perihal</label>
                                          <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                                          <input type="hidden" name = "perihal" value = "<?php echo $data['perihal'] ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <!-- Keterangan Tambahan -->
                                          <label for="formFile" class="form-label">Nama Tempat Magang</label>
                                          <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                                        </div>
                                      </div>
                                    <?php }
                                    else if ($data['perihal'] == "Surat Proyek Akhir") { ?>
                                      <label for="formFile" class="form-label">Perihal</label>
                                      <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                                      <input type="hidden" name = "perihal" value = "<?php echo $data['perihal'] ?>">
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
                                    <?php } 
                                    else if ($data['perihal'] == "Surat PBL (Project Based Learning)") { ?>
                                      <div class="row">
                                        <div class="form-group col-md-6">
                                          <label for="formFile" class="form-label">Perihal</label>
                                          <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                                          <input type="hidden" name = "perihal" value = "<?php echo $data['perihal'] ?>">
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
                                          <input type="hidden" name = "perihal" value = "<?php echo $data['perihal'] ?>">
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
                                          <input type="hidden" name = "perihal" value = "<?php echo $data['perihal'] ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <!-- Keterangan Tambahan -->
                                          <label for="formFile" class="form-label">Nama Beasiswa</label>
                                          <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                                        </div>
                                      </div>
                                    <?php } else if ($data['perihal'] == "Surat Pengajuan Kegiatan HIMA") { ?>
                                      <div class="row">
                                        <div class="form-group col-md-6">
                                          <label for="formFile" class="form-label">Perihal</label>
                                          <label name="sr" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                                          <input type="hidden" name = "perihal" value = "<?php echo $data['perihal'] ?>">
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
                                    <?php if ($data['status_admin'] == 0) { ?>
                                    <label for="formFile" class="form-label">Lihat File dari Mahasiswa</label>
                                    <a href="../pagesmahasiswa/<?php echo $data['file'] ?>" target="_blank">
                                    <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button" class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p>
                                    </a>
                                  <?php }
                                  else { ?>
                                    <label for="formFile" class="form-label">Lihat File yang Sudah Dikirim Admin</label>
                                    <a href="./<?php echo $data2['file'] ?>" target="_blank">
                                    <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button" class="btn btn-link"><em><?php echo $data2['file'] ?></em></button></p>
                                    </a>
                                    <?php } ?>
                                    <!-- Menginput id surat -->
                                    <input name = "id" value = <?php echo $data['id_no'] ?> type = "hidden" >  

                                    <!-- Menandai Admin bahwa surat sudah diproses dan dikirimkan -->
                                    <input name = "stadmin" value = 2 type = "hidden">
                                   
                                   
                                    <!-- upload surat baru -->
                                    <?php if ($data['status_admin'] == 0) { ?>
                                      <div class="row">
                                      <div class="form-group col-md-12">
                                        <label for="formFile" class="form-label">Kirim File Baru</label> 
                                        <div class="controls">
                                            <div class="entry input-group upload-input-group">
                                                <input class="form-control" name="file[]" type="file" >
                                                <button class="btn btn-upload btn-success btn-add" type="button">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <?php } ?>

                     </div>
                    </div>
                    </div>
                              <!-- button upload close -->
                              <div class = "mx-4">
                      <button type="button" class="btn bg-gradient-secondary" onclick = "goBack()">Kembali</button>
                            
                            <?php if ($data['status_admin'] == 0) { ?>
                            <button type="submite" class="btn bg-gradient-info" name="update" >Kirim Surat</button>
                           <?php } ?>
                           </div>
                          </div>
                         
                           </form>
                          </div>
                        </div>
                       </div>  
                        <!-- and popup ajuan surat mahasiswa -->
                     


                        <?php 
                    include "../_database/config.php";

                    if(isset($_POST['update'])){
                      $r = rand(0, 999);
                      $id = $_POST['id'];
                      $nama_mhs = $_POST['nm'];
                      $perihal = $_POST['perihal'];

                      $name = $_FILES['file']['name'];
                      $size = $_FILES['file']['size'];
                      $type = $_FILES['file']['type'];
                      $tmp_name = $_FILES['file']['tmp_name'];

                      $ukuran = 1024 * 5000;
                      $tipe = array("pdf");

                      if ($size > $ukuran) {
                        echo "ukuran terlalu besar.";
                      }
                      else if ($type != $tipe && $type != NULL) {
                        echo "file harus pdf.";
                      }

                      if (move_uploaded_file($tmp_name, $name))  {
                      $query2 = mysqli_query($koneksi, "INSERT into kirimadmin values ('$id', '$name', '$perihal', '$nama_mhs', sysdate()) ");
                      $query3 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `status_admin`= 2 WHERE id_no = '$id'");

                      if($query2 && $query3){
                        ?><script><?php $_SESSION["sukses"] = true;?></script> 
                        <script>history.pushState({}, "", "")</script><?php
                      }
                      else {
                        ?><script><?php $_SESSION["input"] = true;?></script> 
                        <script>history.pushState({}, "", "")</script><?php
                      }
                  }}

                  ?>
              </div>
            </div>
          </div>
        </div>
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
    <?php if(@$_SESSION['sukses']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Anda Berhasil Melakukan Perubahan',
            text: 'Perubahan Akan Disimpan',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['input']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal Dikirim',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['input']); ?>
    <?php endif; ?>

    <script>
        function myFunction() {
          var x = document.getElementById("file");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
    </script>
    <!-- BOOTSTREP 4 -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script> 
    $(function () {
                $(document).on('click', '.btn-add', function (e) {
                    e.preventDefault();

                    var controlForm = $('.controls:first'),
                        currentEntry = $(this).parents('.entry:first'),
                        newEntry = $(currentEntry.clone()).appendTo(controlForm);

                    newEntry.find('input').val('');
                    controlForm.find('.entry:not(:last) .btn-add')
                        .removeClass('btn-add').addClass('btn-remove')
                        .removeClass('btn-success').addClass('btn-danger')
                        .html('<span class="fa fa-trash"></span>');
                }).on('click', '.btn-remove', function (e) {
                    $(this).parents('.entry:first').remove();

                    e.preventDefault();
                    return false;
                });
            });
    </script>
</body>

</html>