<?php
  session_start();
  if($_SESSION['user']=='' )
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
        
        <span class="ms-1 font-weight-bold">Sistem Administrasi Admin</span>
      </a>
    </div>

      <hr class="horizontal dark mt-0">
      <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">

          <!-- HOME -->
          <li class="nav-item">
            <a class="nav-link  active" href="../pagesadmin/billingadmin.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Home</span>
            </a>
          </li>

          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Menu</h6>
          </li>

<?php if ($_SESSION['status'] !== 6) { ?>
          <!-- KIRIM SURAT -->
          <li class="nav-item">
            <a class="nav-link  " href="../pagesadmin/kirimadmin.php">
             <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65l-.095.038L.767 5.854l-.001.001-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.563 2.903.432.275.275.432 2.903 4.563.002.002.26.41a.5.5 0 0 0 .886-.083l.181-.453L15.926.78l.038-.095Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1"> Kirim Surat</span>
            </a>
          </li>

          <!-- VALIDASI SURAT  -->
          <li class="nav-item">
            <a class="nav-link  " href="../pagesadmin/validasiadmin.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Surat Masuk dari Mahasiswa</span>
            </a>
          </li>

          <!-- VALIDASI SURAT  -->
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

        <!-- REKAP SURAT -->
        <li class="nav-item">
          <a class="nav-link  " href="../pagesadmin/rekapadmin.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>
            </div>
            <span class="nav-link-text ms-1">Rekap Surat</span>
          </a>
        </li>

        <?php } ?>

        <?php if ($_SESSION['status'] == 6) { ?> 
          
          <!-- Akun Mahasiswa -->
      <li class="nav-item">
          <a class="nav-link  " href="../pagesadmin/infomahasiswa.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>customer-support</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                        <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                        <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Akun Mahasiswa</span>
          </a>
        </li>

        <!-- Akun Dosen -->
      <li class="nav-item">
          <a class="nav-link  " href="../pagesadmin/infodosen.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>customer-support</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                        <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                        <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Akun Dosen</span>
          </a>
        </li>

        <!-- Akun Tendik  -->
      <li class="nav-item">
          <a class="nav-link  " href="../pagesadmin/infotendik.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>customer-support</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                        <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                        <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Akun Tendik</span>
          </a>
        </li>
          
          
          
          <?php } ?>
        
      <!--profil-->
      <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../profileadmin.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Ganti Password</span>
          </a>
  </li>
      </ul>
    </div>>


    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
      <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Home</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Home</h6>
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
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-0">
                <br>
              <div class="col-6 d-flex align-items-center mx-4">
                  <h6 class="mb-0 pt-1 px-1">Surat Masuk</h6>
              </div>

              <div class="form-group d-flex justify-content-around mt-4 pb-0 mb-0">
        <a href="./billingadminsm.php" id='failedList'><button class = "btn btn-info">Lihat Semua</button></a>
        <a href="./billingadmin.php" id='failedList'><button class = "btn btn-outline-info">Belum Diproses</button></a>
        <a href="./billingadmin2.php" id='failedList'><button class = "btn btn-outline-info">Sudah Diproses</button></a>
        </div> 
                
        <div class="card-body p-3 mt-0 pt-0">
                    <div class="row mt-0 pt-0" >
                        <div class="table-responsive scrollbar-deep-purple bordered-deep-purple thin mt-0 pt-0" style = "height:390px" >
                          <table class="table table-striped align-items-center mb-6 mt-0 pt-0" >
                            <thead>
                              <tr>
                                <th class="text-center">No</th>
                                <th class="text-left ps-2">Nama</th>
                                <th class="text-left ps-2">Status</th>
                                <th class="text-left ps-2">Perihal</th>
                                <th>Proses</th>
                                <th class="text-center">Waktu Upload</th>
                                <th class="text-left ps-2"></th>
                              </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <!-- tabel mahasiswa -->
                            <?php
                              include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                              $nama = $_SESSION['user'];
                              
                              $query = mysqli_query($koneksi, 'SELECT * FROM suratmahasiswa ORDER BY id_no DESC');
                              
                              while ($data = mysqli_fetch_array($query)) {
                               if ( $data['status_kadep'] == 2) {
                                 ?>
                            
                            <tr>
                              <!-- no -->
                              <td class="text-center"><?php echo $no++ ?></td>
                              <!-- nama -->
                              <form action="./kirimmahasiswa.php" method="post">
                              <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                              <td style = "height:20px">
                                <h6 style = "height:20px" class="text-sm-left"><button style ="width:250px" class="btn btn-light btn-sm"><?php echo $data['nama_mhsw'] ?></button></h6>
                              </td>
                            </form>
                              <!-- status -->
                              <td> <h6 class="text-left ps-1">Mahasiswa</h6></td>
                              <!-- perihal -->
                              <td> <h6 class="text-left ps-1"><?php echo $data['perihal'] ?></h6></td>
                              <!-- status surat -->
                              <?php if ($data['status_admin'] == 0) {?>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Belum Diproses</span>
                              </td> <?php } 
                                  else if ($data['status_admin'] == 1) {?>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_admin'] ?>">Ditolak</span>
                              </td> <?php }
                                  else if ($data['status_admin'] == 2) {?>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Sudah Diproses</span>
                              </td> <?php } ?>
                              <!-- tanggal -->
                              <td class="text-center"><?php echo $data['tanggal'] ?></td>
                              <!-- button -->
                              <td class="align-middle">
                                <a  href="validasiadmin.php" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                  <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
                                </a>
                              </td>
                              <?php  } } ?>
                            </tr>
                            <!-- and tabel mahasiswa -->
                            <!-- tabel suratdosen -->
                            <?php
                              include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                              $nama = $_SESSION['user'];
                              
                              $query = mysqli_query($koneksi, 'SELECT * FROM suratdosen ORDER BY id_no DESC');
                              
                              while ($data = mysqli_fetch_array($query)) {
                                if ( $data['status_kadep'] == 2) {
                                ?>
                            
                            <tr>
                              <!-- no -->
                              <td class="text-center"><?php echo $no++ ?></td>
                              <!-- nama -->
                              <form action="./kirimdosen.php" method="post">
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
                              <?php if ($data['status_admin'] == 0) {?>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Belum Diproses</span>
                              </td> <?php } 
                                  else if ($data['status_admin'] == 1) {?>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_admin'] ?>">Ditolak</span>
                              </td> <?php }
                                  else if ($data['status_admin'] == 2) {?>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Sudah Diproses</span>
                              </td> <?php } ?>
                              <!-- tanggal -->
                              <td class="text-center"><?php echo $data['tanggal'] ?></td>
                              <!-- button -->
                              <td class="align-middle">
                                <a  href="validasiadmin2.php" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                  <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
                                </a>
                              </td>
                              <?php } } ?>
                            </tr>
                            <!-- and tabel dosen -->
                            <!-- tabel suratdosen -->
                            <?php
                              include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                              $nama = $_SESSION['user'];
                              
                              $query = mysqli_query($koneksi, 'SELECT * FROM surattendik ORDER BY id_no DESC');
                              
                              while ($data = mysqli_fetch_array($query)) {
                                if ( $data['status_kadep'] == 2) {
                               ?>
                            
                            <tr>
                              <!-- no -->
                              <td class="text-center"><?php echo $no++ ?></td>
                              <!-- nama -->
                              <form action="./kirimtendik.php" method="post">
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
                              <?php if ($data['status_admin'] == 0) {?>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Belum Diproses</span>
                              </td> <?php } 
                                  else if ($data['status_admin'] == 1) {?>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_admin'] ?>">Ditolak</span>
                              </td> <?php }
                                  else if ($data['status_admin'] == 2) {?>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Sudah Diproses</span>
                              </td> <?php } ?>
                              <!-- tanggal -->
                              <td class="text-center"><?php echo $data['tanggal'] ?></td>
                              <!-- button -->
                              <td class="align-middle">
                                <a  href="validasiadmin3.php" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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
            </div>
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