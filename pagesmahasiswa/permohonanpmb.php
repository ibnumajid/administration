<?php
session_start();

if ($_SESSION['user'] == '' || ($_SESSION['status'] == 4 && $_Session['status2'] == 1)) {
  header("location:../index.php");
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
 
  $query = mysqli_query($koneksi,"INSERT into permohonanpmb values('','$nama','$nrp','$angkatan','$nama_lab', '$perusahaan', '$alamat', '', '0',  sysdate(), '2')");

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
  
          
          <!--persetujuan surat-->
          <li class="nav-item">
            <a class="nav-link  " href="./pmhnsurat.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Permohonan Surat</span>
            </a>
          </li>

          <!--Permohonan Surat-->
        <li class="nav-item">
          <a class="nav-link  active" href="../pagesmahasiswa/permohonanpmb.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Permohonan Dosbing </span>
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
            <li class="nav-item px-3 d-flex align-items-center">
              <!--a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a-->
            </li>
            <!-- notif -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
                <!-- php surat masuk kadep -->
                <?php 
                include '../_database/config.php';
                if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 4) {
                  $query_kadep = mysqli_query($koneksi, 
                  'SELECT * FROM suratmahasiswa WHERE status_kadep = 2 && notif = 3 
                  UNION SELECT * FROM suratdosen WHERE status_kadep = 2 && notif = 1
                  UNION SELECT * FROM surattendik  WHERE status_kadep = 2 && notif = 1 ORDER BY id_no DESC' );
                  $data = mysqli_num_rows($query_kadep); ?>

                  <span class="primary"><?php echo $data ?></span>
                <?php } ?>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-0 py-0 me-sm-n3" aria-labelledby="dropdownMenuButton">
                <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin" style = "height:200px">
                  <!-- surat masuk kadep dari mahasiswa, dosen, tendik -->
                  <?php 
                  include '../_database/config.php';
                  if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 4) {
                    $query = mysqli_query($koneksi, 
                    'SELECT * FROM suratmahasiswa WHERE status_kadep = 2 && notif = 3 
                    UNION SELECT * FROM suratdosen WHERE status_kadep = 2 && notif = 1
                    UNION SELECT * FROM surattendik  WHERE status_kadep = 2 && notif = 1 ORDER BY tanggal DESC' );
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
                            <input name="id3" value=<?php echo $data['id_no'] ?> type="hidden">
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
                            <input name="id2" value=<?php echo $data['id_no'] ?> type="hidden">
                            <p class="text-xs text-left ps-0 text-secondary mb-0">
                              <?php echo $data['tanggal']; ?>
                            </p>
                            <?php } else if ($data['status'] == 4 ) { ?>
                            <button type="submit" name="tndk" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                <span class="font-weight"><?php echo $data['nama']; ?></span>
                              </h6>
                            </button>
                            <!-- Menginput id surat -->
                            <input name="id4" value=<?php echo $data['id_no'] ?> type="hidden">
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
            </li>
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

           

            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group d-flex my-0">
            <div class="card-header pb-0 p-3" style = "width:400px">
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label">Nama Mahasiswa</label>
                <input name="nm" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $_SESSION['user'] ?>" >
                <label name="nm" class="form-control" aria-label="default input example"><?php echo $_SESSION['user'] ?></label>
                </div>
              </div>
            </div>
            
            <div class="card-header pb-0 p-3" style = "width:400px">
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label" >NRP Mahasiswa</label>
                <input name="nrp" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $_SESSION['NIP'] ?>" >
                <label name="nrp" class="form-control" aria-label="default input example"><?php echo $_SESSION['NIP'] ?></label>
                </div>
              </div>
            </div>

            <div class="card-header pb-0 p-3 mt-0" style = "width:400px">
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label">Angkatan</label>
                <input name="angkatan" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $_SESSION['angkatan'] ?>" >
                <label name="angkatan" class="form-control" aria-label="default input example"><?php echo $_SESSION['angkatan'] ?></label>
                </div>
              </div>
            </div>
                   </div>

            <div class="card-header pb-0 pt-0 p-3 my-0">
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label">Nama Lab</label>
                <?php if ($data['status_ajuan'] == 2) { ?>
                <input name="nl" class="form-control" type="text" aria-label="default input example"  value = "<?php echo $data['nama_lab'] ?>" >
                
                <?php } else if ($data ['status_ajuan'] == 1) { ?>
                <input name="nl" class="form-control" type="text" aria-label="default input example"  value = "<?php echo $data['nama_lab'] ?>" >
                    <?php } 
                    else { ?>
                <input name="nl" class="form-control" type="text" aria-label="default input example" placeholder="Masukkan Nama Lab" >
                   <?php }
                    ?>
                    </div>
              </div>
            </div>

            <div class="form-group d-flex">
            <div class="card-header pb-0 p-3" style = "width:550px" >
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label">Nama Tempat Magang</label>
                <?php if ($data['status_ajuan'] == 2) { ?>
                <input name="tm" class="form-control" type="text" aria-label="default input example"  value = "<?php echo $data['nama_perusahaan'] ?>" >
                
                <?php } else if ($data ['status_ajuan'] == 1) { ?>
                <input name="tm" class="form-control" type="text" aria-label="default input example"  value = "<?php echo $data['nama_perusahaan'] ?>" >
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
                <label for="formFile" class="form-label">Alamat Magang</label>
                 <?php if ($data['status_ajuan'] == 2) { ?>
                <input name="am" class="form-control" type="text" aria-label="default input example"  value = "<?php echo $data['alamat_perusahaan'] ?>" >
                
                <?php } else if ($data ['status_ajuan'] == 1) { ?>
                <input name="am" class="form-control" type="text" aria-label="default input example"  value = "<?php echo $data['alamat_perusahaan'] ?>" >
                    <?php } 
                    else { ?>
                <input name="am" class="form-control" type="text" aria-label="default input example" placeholder="Masukkan Nama Alamat Magang" >
                   <?php }
                    ?>
                    </div>
                </div>
              </div>
              </div>
            


           
                    <div class="d-flex justify-content-center ">
                    <?php if ($data['status_ajuan'] == 1) {?> 
                  <h6 class="mb-0 text-danger">Anda Membatalkan Permohonan Pencarian Dosen Pembimbing <br></h6>
                  <?php } 
                   else if ($data['status_ajuan'] == 2) { ?> 
                  <h6 class="mb-0 text-info">Form Telah Dikirim dan Sedang Diproses Dosen Koordinator <br></h6>
                  <?php } ?>
                  </div>
                  <div class="d-flex justify-content-center mt-3">
                    
                    <?php if ($data['status_ajuan'] == 2 || $data['status_ajuan'] == 1) { ?>
                    <button type="submite" name="update" class="btn bg-gradient-info mx-3">Perbarui</button>
                   
                    <button type = "submite" name ="batal" class = "btn bg-gradient-danger">Batalkan</button>
                    <?php } else { ?>
                        <button type="submite" name="input" class="btn bg-gradient-info">Kirim</button>
                        
                       <?php } ?>

                    </div>
                </div>
            </div>
            </form>
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