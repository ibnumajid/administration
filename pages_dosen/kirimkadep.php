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
          <a class="nav-link  " href="./kadep.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                  </svg>
              </div>
             <span class="nav-link-text ms-1">Home</span>
           </a>
         </li>

          
       <!--Pengajuan Mandat-->
       <li class="nav-item">
          <a class="nav-link  active" href="./kirimkadep.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1"> Pengajuan Mandat </span>
          </a>
        </li>
          
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
        
 profil-->
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
          <h6 class="font-weight-bolder mb-0">Pengajuan Mandat</h6>
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
    <div class="text-center">
      <a class="nav-link  " href="./ajukankadep.php"> 
        <button type="button" class="btn btn-secondary btn-lg w-95 btn bg-gradient-info">Ajukan Mandat Kepala Departemen</button>
      </a>
    </div>
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div class="form-group d-flex justify-content-around mt-4">
          <form method = "post">
                <input type="hidden" name = "filterid" value = "012">
               <button type = "submit" name = "filterall" class = "btn btn-outline-info">Lihat Semua</button>
               </form>
            <form action="" method = "post">
                <input type="hidden" name = "filterid" value = "0">
               <button type = "submit" name = "filter0" class = "btn btn-outline-info">Menunggu untuk Divalidasi</button>
            </form>
            <form action="" method = "post">
                <input type="hidden" name = "filterid" value = "1">
               <button type = "submit" name = "filter1" class = "btn btn-outline-info">Menolak</button>
            </form>
            <form action="" method = "post">
                <input type="hidden" name = "filterid" value = "3">
               <button type = "submit" name = "filter3" class = "btn btn-outline-info">Sedang Dikerjakan</button>
            </form>
            <form action="" method = "post">
                <input type="hidden" name = "filterid" value = "2">
               <button type = "submit" name = "filter2" class = "btn btn-outline-info">Sudah Selesai</button>
            </form>
        </div>     
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Status Surat</h6>
                </div>
                
              </div>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-left ps-1">Mandat</th>
                      <th class="text-left ps-1">Dosen Koordinator</th>
                      <th class="text-left ps-1">Perihal</th>
                      <th class="text-left ps-1">Tempat dan Waktu</th>
                      <th class="text-left ps-4"> Proses Tugas</th>
                      <th class="text-center">Lihat Laporan</th>
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
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-left ps-1"><?php echo $data['perihal'] ?></td>
                    <td class="text-left ps-1"><?php echo $data['dosen_koor'] ?></td>
                    <td class="text-left ps-1"><?php echo $data['keterangan'] ?></td>
                    <td class="text-left ps-1"><?php echo $data['keterangan2'] ?></td>
                    
                    
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
                                  } ?>
                    </tr>
                     <?php 
                        } } 
                        
                        else { ?>

                          <tr>
                          <td class="text-center"><?php echo $no++ ?></td>
                          <td class="text-left ps-1"><?php echo $data['perihal'] ?></td>
                          <td class="text-left ps-1"><?php echo $data['dosen_koor'] ?></td>
                          <td class="text-left ps-1"><?php echo $data['keterangan'] ?></td>
                          <td class="text-left ps-1"><?php echo $data['keterangan2'] ?></td>
                          
                          
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
                                    ?><td> <?php echo $data['catatan'] ?> </td> 
                                  } ?>
                          </tr>

                        <?php }

                        }  ?>

                              </div>
                      
                      <?php 
                      if ($no == 1) { ?>

                        <td></td>
                        <td></td>
                        <td></td>
                    <td class = "mx-auto"><h6 class = "font-weight-bold">BELUM ADA SURAT</h6></td>
                    <?php } ?>



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
            title: 'Berhasil Mengajukan Surat',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses']); ?>
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