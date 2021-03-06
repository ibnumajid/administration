<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
  session_start();
  if($_SESSION['user']=='' || $_SESSION['status'] != 6 )
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
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        
        <span class="ms-1 font-weight-bold">Sistem Administrasi Admin</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

      <li class="nav-item">
          <a class="nav-link  " href="../pagesadmin/adminsuper.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Menu</h6>
        </li>
        
         <!-- Akun Mahasiswa -->
      <li class="nav-item">
          <a class="nav-link  " href="../pagesadmin/infomahasiswa.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Akun Mahasiswa</span>
          </a>
        </li>

        <!-- akun dosen -->
        <li class="nav-item">
          <a class="nav-link  active" href="../pagesadmin/infomahasiswa.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Akun Dosen</span>
          </a>
        </li>
    
        <!-- Akun Tendik  -->
      <li class="nav-item">
          <a class="nav-link  " href="../pagesadmin/infotendik.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Akun Tendik</span>
          </a>
        </li>

         <!-- Akun Admin  -->
      <li class="nav-item">
          <a class="nav-link  " href="../pagesadmin/infoadmin.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Akun Admin</span>
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
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Akun Dosen</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Akun Dosen</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="profile.php" class="nav-link text-body font-weight-bold px-0">
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

        <div class="col-12">

      

          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Modifikasi Akun Dosen</h6>
                </div>
                
              </div>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Nama</th>
                      <th class="text-center">NPP</th>
                      <th class="text-center">Informasi ID & PASS</th>
                      <th class="text-center">Ganti Password</th>
                    </tr>
                  </thead>
            
                  <?php
                  include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                  $no = 1 ;
                  $query = mysqli_query($koneksi, 'SELECT * FROM data_dosenb ORDER BY nama_anggota');

               
                  while ($data = mysqli_fetch_array($query)) {
    
                  $npp = $data['id_npp']; 
                  $query2 = mysqli_query($koneksi, "SELECT * FROM masuk WHERE user = '$npp' ");
                  $data2 = mysqli_fetch_array($query2); 
                  ?>

                  
                  <tr>
                    <!-- no -->
                    <td class="text-center"><?php echo $no++ ?></td>
                    <!-- nama -->
                    <td>
                      <h6 class="mb-0 text-sm ps-3"><?php echo $data['nama_anggota'] ?></h6>
                    </td>
                    <!-- npp -->
                    <td>
                      <h6 class="mb-0 text-sm text-center"><?php echo $data['id_npp'] ?></h6>
                    </td>
                    <!-- button -->
                    <td>
                      <div class="text-center">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_npp'] ?>">Lihat</button>
                        </a>
                      </div>
                    </td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="edit<?php echo $data['id_npp'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <!-- popup ajuan surat mahasiswa -->
                              <div class="modal-header">
                                <h5 class="modal-title" id="edit<?php echo $data['id_npp'] ?>">Lihat Info Akun</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">



                                <form action="" method="post" enctype="multipart/form-data">
                                  <div class="card-header pb-0 p-3">
                                    <div class="row">
                                      <div class="mb-3">

                                        <!-- user -->
                                        <label for="formFile" class="form-label">USER</label>
                                        <label name="catatan" class="form-control" aria-label="default input example"><?php echo $data['id_npp'] ?></label>

                                        <!-- NRP mahasiswa -->
                                        <label for="formFile" class="form-label">PASSWORD</label>
                                        <?php 
                                        if ($data2['pass'] == NULL) { ?>
                                        <label name="catatan2  " class="form-control" aria-label="default input example">Belum Ada Password</label>

                                          <?php }
                                        else { ?> 
                                        <label name="catatan2  " class="form-control" aria-label="default input example"><?php echo $data2['pass'] ?></label>
                                            <?php } ?>
                                        
                                        

                                        <!-- Input ID untuk memberikan identitas surat -->
                                        <input type="hidden" name="id2" value="<?php echo $data['id_npp'] ?>">
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        

                                        <div class="modal-footer">
                                          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>

                                          <!-- Saat dosen menolak -->
                                            <button type="submite" name="update" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_npp'] ?>">Ganti</button>
                                         
                                          </div>
                                        </form>
                                        </div>
                                        </div>
                                        </div>
                    
                                <!-- Modal Ganti Password -->
                    <td>
                      <div class="text-center">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#ganti<?php echo $data['id_npp'] ?>">Ganti</button>
                        </a>
                      </div>
                    </td>
                     <!-- Modal -->
                     <div class="modal fade" id="ganti<?php echo $data['id_npp'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <!-- popup ajuan surat mahasiswa -->
                              <div class="modal-header">
                                <h5 class="modal-title" id="ganti<?php echo $data['id_npp'] ?>">Ganti Password</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">



                                <form action="" method="post" enctype="multipart/form-data">
                                  <div class="card-header pb-0 p-3">
                                    <div class="row">
                                      <div class="mb-3">  
                                        

                                      <input type="hidden" name = "nrp_mhs" value = "<?php echo $data['id_npp'] ?>">
                                        <!-- user -->
                                        <label for="formFile" class="form-label">PASSWORD ADMIN</label>
                                        <input name ="pass" type="password" class="form-control" placeholder="Masukan Password Admin">

                                       <!-- Password Sekarang -->
                                        <label for="formFile" class="form-label">PASSWORD SEKARANG</label>
                                        <?php 
                                        if ($data2['pass'] == NULL) { ?>
                                        <label name="catatan2  " class="form-control" aria-label="default input example">Belum Ada Password</label>
                                        <?php }
                                        else { ?> 
                                        <label name="pwl" class="form-control" aria-label="default input example"><?php echo $data2['pass'] ?></label>
                                        <input type="hidden" name = "pwl" value = "<?php echo $data2['pass'] ?>">
                                        <?php } ?>
                                        

                                        <!-- user -->
                                        <label for="formFile" class="form-label">PASSWORD BARU</label>
                                        <input name ="pwb" type="text" class="form-control" placeholder="Masukan Password Baru">

                                        
                                        

                                        <!-- Input ID untuk memberikan identitas surat -->
                                        <input type="hidden" name="id2" value="<?php echo $data['id_npp'] ?>">
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        

                                        <div class="modal-footer">
                                          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>

                                          <!-- Saat dosen menolak -->
                                            <button type="submite" name="ganti" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_npp'] ?>">Ganti</button>
                                         
                                          </div>
                                        </form>
                                        </div>
                                        </div>
                                        </div>
                   </tr>
                  <?php } ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

  <!-- php update surat saat dosen menolak -->
  <?php
                include "../_database/config.php";
                if (isset($_POST['ganti'])) {

                  $passwordadmin = $_SESSION['pass'];
                  $passwordlama = $_POST['pass'];
                  $passwordbaru = $_POST['pwb'];
                

                  $nrp = $_POST['nrp_mhs'];
                 
                  if ($passwordlama == $passwordadmin) {

                      $query = mysqli_query($koneksi, 'SELECT * FROM masuk');
                      $query2 = mysqli_query($koneksi, "UPDATE masuk SET `pass` = '$passwordbaru' WHERE user = '$nrp' ");
                      if ($query2) {
                                echo '<a href="./pmhnsurat.php"><script> alert ("Berhasil Merubah Password")</script></a>';
                                ?>  <script> history.pushState({}, "", "")</script> <?php
                                        } 
                      else {
                                echo '<a href="./pmhnsurat.php"><script> alert ("gagal merubah password")</script></a>';
                              }
                         
                  
                          } 
                  else { 
                      echo '<a href="./pmhnsurat.php"><script> alert ("Password Admin Salah")</script></a>';
                      ?>  <script> history.pushState({}, "", "")</script> <?php }
                        }
                     ?>
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
 
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
</body>

</html>