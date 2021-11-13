<?php
  session_start();
  if($_SESSION['user']=='')
  {
        header("location:home.php");
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
        
        <span class="ms-1 font-weight-bold">Sistem Administrasi Dosen</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link  " href="../dosen_2.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>

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
          <a class="nav-link  " href="../pages_dosen/validasisurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
                  <g id="Rounded-Icons" transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero"> 
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> 
                      <g id="box-3d-50" transform="translate(603.000000, 0.000000)"> 
                        <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z" id="Path"></path> 
                        <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" id="Path" opacity="0.7"></path> 
                        <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" id="Path" opacity="0.7"></path> 
                      </g> 
                    </g> 
                  </g> 
                </g> 
              </svg>
            </div>
            <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
          </a>
        </li>

        <!-- Validasi Surat Dosen -->
        <?php if ($_SESSION['user'] == "Imam Arifin, S.T, MT") {?>
          <li class="nav-item">
            <a class="nav-link  " href="./validasidsn.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
                  <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
                    <g id="Rounded-Icons" transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero"> 
                      <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> 
                        <g id="box-3d-50" transform="translate(603.000000, 0.000000)"> 
                          <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z" id="Path"></path> 
                          <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" id="Path" opacity="0.7"></path> 
                          <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" id="Path" opacity="0.7"></path> 
                        </g> 
                      </g> 
                    </g> 
                  </g> 
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Dosen</span>
            </a>
          </li>
          <?php } ?>

                           <!-- Validasi Surat Dosen -->
                           <?php if ($_SESSION['user'] == "Imam Arifin, S.T, MT") {?>
          <li class="nav-item">
            <a class="nav-link  " href="./validasitendik.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> 
                  <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
                    <g id="Rounded-Icons" transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero"> 
                      <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> 
                        <g id="box-3d-50" transform="translate(603.000000, 0.000000)"> 
                          <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z" id="Path"></path> 
                          <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" id="Path" opacity="0.7"></path> 
                          <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" id="Path" opacity="0.7"></path> 
                        </g> 
                      </g> 
                    </g> 
                  </g> 
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Tendik</span>
            </a>
          </li>

          <?php } ?>


         <!--SURAT MASUK KADEP -->
    <?php if($_SESSION['user'] == "Imam Arifin, S.T, MT"){ ?>
      </li> 
       <li class="nav-item"> 
        <a class="nav-link  " href="./suratmskkdp.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                  <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                </svg>
              </div>
          <span class="nav-link-text ms-1">Surat Masuk</span>
        </a>
      </li> <?php } ?>

    
<!--profil-->
<li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../profile.php">
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
          <h6 class="font-weight-bolder mb-0">Permohonan Surat</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
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
    <div class="text-center">
      <button type="button" class="btn btn-secondary btn-lg-center w-95 btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajukan Surat</button>
    </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Permohonan Surat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <?php


            include '../_database/config.php';
            if (isset($_POST['input'])) {
              $nama_dsn = $_POST['nm'];
              $id_npp = $_POST['nip'];
              $perihal = $_POST['sr'];


              $file = basename($_FILES['fl']['name']);
              $ukuran = $_FILES['fl']['size'];
              $tipe = strtolower(pathinfo($file, PATHINFO_EXTENSION));
              $max = 1024 * 20000;
              $ekstensi = "pdf";


              $url = $file;

              if ($ukuran > $max && $tipe != $ekstensi) {;
                echo '<script> alert("Gagal mengajukan permohonan surat ! Ekstensi file harus pdf dan ukuran file tidak boleh melebihi 20 mb")</script>';
              } else if ($ukuran > $max) {
                echo '<script> alert("Gagal mengajukan permohonan surat ! Ukuran file tidak boleh melebihi 20 mb")</script>';
              } else if ($tipe != $ekstensi && $tipe != $ekstensi2) {
                echo '<script> alert("Gagal mengajukan permohonan surat ! Ekstensi file harus pdf")</script>';
              } else if (move_uploaded_file($_FILES['fl']['tmp_name'], $url)) {
                $query = mysqli_query($koneksi, "insert into suratdosen values('', '$nama_dsn','$id_npp','$perihal','$url', '0', '0', '', '$ukuran', '$tipe', sysdate())");

                if ($query) {
                  echo '<script> alert ("Berhasil mengajukan permohonan surat")</script>';
                  ?> <script>history.pushState({}, "", "")</script> <?php
                  exit;
                } else {
                  echo '<script> alert ("Gagal input")</script>';
                }
              } else {
                echo '<script> alert ("Gagal Upload")</script>';
              }
            }

            ?>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="card-header pb-0 p-3">
                <div class="row">
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Nama</label>
                <input name="nm" class="form-control" type="hidden" placeholder="Masukan Nama" aria-label="default input example"  value = "<?php echo $_SESSION['user'] ?>" >
                <label name="nm" class="form-control" aria-label="default input example"><?php echo $_SESSION['user'] ?></label>
                  </div>
                </div>
              </div>

              <div class="card-header pb-0 p-3">
                <div class="row">
                  <div class="mb-3">
                    <label for="formFile" class="form-label">NIP</label>
                    <input name="nip" class="form-control" type="hidden" placeholder="Masukan NIP" aria-label="default input example" value = "<?php echo $_SESSION['NIP'] ?>">
                    <label name="nip" class="form-control" aria-label="default input example"><?php echo $_SESSION['NIP'] ?></label>
                  </div>
                </div>
              </div>


              <div class="card-header pb-0 p-3">
                <div class="row">
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Jenis Surat</label>
                    <select name="sr" class="form-select" aria-label="Default select example">
                      <option selected>Pilih Jenis Surat</option>
                      <option value="Surat Perpindahan Barang Lab">Surat Perpindahan Barang Lab</option>
                      <option value="Permohonan Surat Tugas">Permohonan Surat Tugas</option>
                      <option value="Permohonan SK">Permohonan SK</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="card-header pb-0 p-3">
                <div class="row">
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Masukkan File (Ekstensi Berupa PDF)</label>
                    <input type="file" name="fl" class="form-control" aria-label="file example" required>
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                  </div>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submite" name="input" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Kirim Permohonan Surat</button>
          </div>
          </form>
        </div>
      </div>
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

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Perihal</th>
                      <th>Tanggal Upload</th>
                      <th>Status Kadep</th>
                      <th>Proses Admin</th>
                      <th>Catatan</th>
                    </tr>
                  </thead>

                  <?php
                  include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                  $no = 0;
                  $no2 = $no++;
                  $query = mysqli_query($koneksi, 'SELECT * FROM suratdosen ORDER BY id_no DESC');
                  while ($data = mysqli_fetch_array($query)) {
                    if ($data['nama_dsn'] == $_SESSION['user']) {
                        $no++
                  ?>
                      <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td><?php echo $data['perihal'] ?></td>
                        <td><?php echo $data['tanggal'] ?></td>

                        <!-- status kadep -->
                        <?php if ($data['status_kadep'] == 0) { ?>
                          <td class="align-middle">
                            <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_kadep'] ?>">Sedang Di Proses</span>
                          </td> <?php } else if ($data['status_kadep'] == 1) { ?>
                          <td class="align-middle">
                            <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_kadep'] ?>">Ditolak</span>
                          </td>
                        <?php } else if ($data['status_kadep'] == 2) { ?>
                          <td>
                            <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_kadep'] ?>">Disetujui</span>
                          </td> <?php } ?>
                          
                          <!-- status aktivitas admin -->
                      <?php if ($data['status_admin'] == 0) {?>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Menunggu Proses</span>
                        </td> 
  
                         <?php } else if ($data['status_admin'] == 2) {?>
                              <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Proses Selesai</span>
                        </td> <?php } ?> 

                        <!-- button edit -->
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
                          </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="edit<?php echo $data['id_no'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <!-- popup ajuan surat mahasiswa -->
                              <div class="modal-header">
                                <h5 class="modal-title" id="edit<?php echo $data['id_no'] ?>">Persetujuan Surat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">

                              <form action="" method="post" enctype="multipart/form-data">
                                  <div class="card-header pb-0 p-3">
                                    <div class="row">
                                      <div class="mb-3">
                                        <!-- nama mahasiswa -->
                                        <label for="formFile" class="form-label">Catatan Kadep</label>
                                        <label name="catatan" class="form-control" aria-label="default input example"><?php echo $data['catatan'] ?></label>
 
                                        <!-- Input ID untuk memberikan identitas surat -->
                                        <input type="hidden" name="id2" value="<?php echo $data['id_no'] ?>">

                                        <!-- Ubah File saat ditolak filenya -->
                                         <?php if ($data['status_kadep'] == "1") { ?>
                                          <label for="formFile" class="form-label">Ubah File Untuk Kadep</label>
                                          <input type="file" name="uflk" id="edit<?php echo $data['id_no'] ?>" class="form-control" aria-label="file example" required>
                                          <input type="hidden" name="stats2" value= "0">
                                        <?php } ?>


                                        <div class="modal-footer">
                                          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>

                                          <!-- Saat dosen menolak -->
                                          <?php if ($data['status_kadep']  == "1") { ?>
                                            <button type="submite" name="update2" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Upload</button>
                                          <?php } ?>
                                          </div>
                                        </form>
                                        <?php }
                                        }  ?>

                                        </div>
                                        
                      </tr>
                      <?php 
                      if ($no == 1) { ?>

                         <td></td>
                         <td></td>
                         <td></td>
                    <td class = "text-center"><h6 class = "font-weight-bold">BELUM ADA SURAT YANG DIAJUKAN</h6></td>
                    <?php } ?>

                </table>
                  <!-- php update surat saat kadep menolak -->
                  <?php
                include "../_database/config.php";
                if (isset($_POST['update2'])) {

                  $nama_file3 = basename($_FILES['uflk']['name']);
                  $id4 = $_POST['id2'];
                  $nol = $_POST['stats2'];

                  $url3 = $nama_file3;

                  if (move_uploaded_file($_FILES['uflk']['tmp_name'], $url3)) {

                    $query4 = mysqli_query($koneksi, "UPDATE suratdosen SET `file` = '$url3' WHERE id_no = '$id4' ");

                    $query5 = mysqli_query($koneksi, "UPDATE suratdosen SET `status_kadep` = '$nol' WHERE id_no = '$id4' ");

                    if ($query4 && $query5) {
                      echo '<a href="./permohonandosen.php"><script> alert ("Berhasil di ajukan")</script></a>';
                ?> <script> history.pushState({}, "", "") </script> <?php
                              } else {
                                echo '<a href="./permohonandosen.php"><script> alert ("gagal di ajukan")</script></a>';
                              }
                            }
                          }

                                ?>
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
</body>

</html>