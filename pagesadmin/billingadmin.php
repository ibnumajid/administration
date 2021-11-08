  <?php session_start(); ?>
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
          <!-- <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> -->
          <span class="ms-4 font-weight-bold">Sistem Administrasi</span>
        </a>
      </div>
      <hr class="horizontal dark mt-0">
      <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">

          <!-- HOME -->
          <li class="nav-item">
            <a class="nav-link  active" href="../pagesadmin/billingadmin.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>credit-card</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(453.000000, 454.000000)">
                          <path class="color-background opacity-6" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                          <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Home</span>
            </a>
          </li>

          <!-- PROFILE -->
  <!--       <li class="nav-item">
            <a class="nav-link  " href="../pagesadmin/profileadmin.php">
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
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li> -->


          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Menu</h6>
          </li>


          <!-- KIRIM SURAT -->
          <li class="nav-item">
            <a class="nav-link  " href="../pagesadmin/kirimadmin.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>spaceship</title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rounded-Icons" transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                        <g id="spaceship" transform="translate(4.000000, 301.000000)">
                          <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                          <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z" id="Path"></path>
                          <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" id="color-2" opacity="0.598539807"></path>
                          <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" id="color-3" opacity="0.598539807"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="nav-link-text ms-1"> Kirim Surat</span>
            </a>
          </li>

          <!-- VALIDASI SURAT  -->
          <li class="nav-item">
            <a class="nav-link  " href="../pagesadmin/validasiadmin.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>settings</title>
                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Rounded-Icons" transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                          <g id="settings" transform="translate(304.000000, 151.000000)">
                            <polygon class="color-background" id="Path" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                            <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" id="Path" opacity="0.596981957"></path>
                            <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z" id="Path"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
              </div>
              <span class="nav-link-text ms-1">Surat Masuk Mahasiswa</span>
            </a>
          </li>

          <!-- VALIDASI SURAT  -->
          <li class="nav-item">
            <a class="nav-link  " href="../pagesadmin/validasiadmin2.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>settings</title>
                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Rounded-Icons" transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                          <g id="settings" transform="translate(304.000000, 151.000000)">
                            <polygon class="color-background" id="Path" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                            <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" id="Path" opacity="0.596981957"></path>
                            <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z" id="Path"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
              </div>
              <span class="nav-link-text ms-1">Surat Masuk Dosen</span>
            </a>
          </li>

        <!-- REKAP SURAT -->
        <li class="nav-item">
          <a class="nav-link  " href="../pagesadmin/rekapadmin.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                  <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                        <g id="document" transform="translate(154.000000, 300.000000)">
                          <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" id="Path" opacity="0.603585379"></path>
                          <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z" id="Shape"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
            </div>
            <span class="nav-link-text ms-1">Rekap Surat</span>
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
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Home</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Home</h6>
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
          <div class="col-lg-7">
            <div class="row">
              <!---->

              <div class="col-md-12 mb-lg-0 mb-4">
                <div class="card mt-4">
                  <div class="card-header pb-0 p-3">
                    <div class="row">
                      <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">Informasi</h6>
                      </div>

                    </div>
                  </div>
                  <div class="card-body p-3">
                    <div class="row">
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
                    <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                  </div>
                </div>
              </div>


                <!-- surat dari admin -->
                <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin">
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">

                    <?php
                    include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                    $no = 1;
                    $query = mysqli_query($koneksi, 'SELECT * FROM adminsurat');

                    while ($data = mysqli_fetch_array($query)) {
                      if($data['tujuan'] )
                      {?>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-4 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="mb-1 text-dark font-weight-bold text-sm"><?=$data['tanggal']?></h6>
                          <span class="text-xs"><?=$data['nama']?></span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          <a href="./pagesadmin/<?php echo $data['dokumen'] ?>" target="_blank">
                            <p class="modal-title" name="fl" id="edit<?php echo $data['nomor'] ?>"><button type="button" class="btn btn-link text-dark text-sm " class="btn btn-link"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</em></button></p>
                          </a>
                        </div>
                      </li>
                      <?php }?>
                      <?php if ($data['tujuan'] == 'Dosen, Tendik' or $data['tujuan'] == 'Dosen, Mahasiswa'){?>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-4 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="mb-1 text-dark font-weight-bold text-sm"><?=$data['tanggal']?></h6>
                          <span class="text-xs"><?=$data['nama']?></span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          <a href="./pagesadmin/<?php echo $data['dokumen'] ?>" target="_blank">
                            <p class="modal-title" name="fl" id="edit<?php echo $data['nomor'] ?>"><button type="button" class="btn btn-link text-dark text-sm " class="btn btn-link"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</em></button></p>
                          </a>
                        </div>
                      </li>
                      <?php }?>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>


        <!-- Bagian Detail Permohonan Surat Dosen -->
        <div class="row">

          <div class="col-md-7 mt-4">
            <div style = "width:800px" class="card">
              <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Detail Permohonan Surat Dosen</h6>
              </div>
              
              <div style = "width:800px" class="card-body pt-4 p-3">
              <div class="table-responsive p-0">
              <div style = "height:400px" class="card example-1 scrollbar-deep-purple bordered-deep-purple thin">

                  <table class="table align-items-center mb-0" >
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">Perihal</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-1">Nama Dosen</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-5">Tanggal Pengajuan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Proses</th>
                      </tr>
                    </thead>
            
              
                    <!-- php tabel -->
                    <?php
                    include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                    $nama = $_SESSION['user'];
                    $query = mysqli_query($koneksi, 'SELECT * FROM suratdosen ORDER BY id_no DESC');
                    
                    while ($data = mysqli_fetch_array($query)) {
                    
    ?>   <!-- Persetujuan yang hanya dilihat oleh kadep saja --> <?php 
                          

                      
                    ?> 
                    <!-- tabel -->
                    <tbody>
                      <tr>
                        <!-- file -->
                      
                        
                        <!-- progres -->
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?php echo $data['perihal'] ?></p>
                        </td>
                        <!-- nama -->
                        <td>
                        <h6 class="mb-0 text-sm"><?php echo $data['nama_dsn'] ?></h6>
                        </td>
                        <!-- tanggal -->
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold "><?php echo $data['tanggal'] ?></span>
                        </td>
                        <!-- status surat -->
                          <?php if ($data['status_admin'] == 0) {?>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Belum Diproses</span>
                        </td> <?php } 
                              else if ($data['status_admin'] == 1) {?>
                          <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_admin'] ?>">Ditolak</span>
                        </td> 
                              <?php }

                              else if ($data['status_admin'] == 2) {?>
                              <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Sudah Diproses</span>
                        </td> <?php } ?> 

                        <!-- button edit -->
                        <td class="align-middle">
                          <a  href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Proses</button>
                          </a>
                        </td>
                        <!-- and tabel -->
                        
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

                      <!-- backend upload update surat -->
                              
                  <?php 
                      include "../_database/config.php";

                      if(isset($_POST['update'])){

                        $nama_file2 = basename($_FILES['ufl']['name']); 
                        $ukuran2 = $_FILES['ufl']['size'];
                        $tipe2 = strtolower(pathinfo($nama_file2, PATHINFO_EXTENSION));
                        $id = $_POST['id'];
                        $nama_dsn = $_POST['nm'];
                        $statusadmin = $_POST['stadmin'];
                        $perihal = $_POST['perihal2'];
                        
                        $url2 = $nama_file2;
                        
                      if (move_uploaded_file($_FILES['ufl']['tmp_name'], $url2))  {
                        $query2 = mysqli_query($koneksi, "insert into kirimadmindsn values ('$id', '$url2', '$nama_dsn', '$perihal', sysdate()) ");
                        $query3 = mysqli_query($koneksi, "UPDATE suratdosen SET `status_admin`='$statusadmin' WHERE id_no = '$id'");
                  
                        if($query2){
                          echo '<a href="./validasiadmin.php"><script> alert ("Berhasil dikirimkan")</script></a>';
                        }
                        else {
                          echo '<a href="./validasiadmin.php"><script> alert ("Anda sudah melakukan update")</script></a>';
                        }
                      }
                    }
                  
                  ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="card-header pb-0 p-3">
                                  <div class="row">
                                    <div class="mb-3">
                                      <!-- nama mahasiswa -->
                                      <label for="formFile" class="form-label">Nama Dosen</label>
                                      <label name="nm" class="form-control" aria-label="default input example"><?php echo $data['nama_dsn'] ?></label>
                                      <input name="nm" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $data['nama_dsn'] ?>" >
                                      <!-- NRP mahasiswa -->
                                      <label for="formFile" class="form-label">NPP Dosen</label>
                                      <label name="nrp" class="form-control" aria-label="default input example"><?php echo $data['id_npp'] ?></label>
                                      <!-- progres -->
                                      <label for="formFile" class="form-label">Perihal</label>
                                      <label name="perihal2" class="form-control" aria-label="default input example"><?php echo $data['perihal'] ?></label>
                                      <input type="hidden" name = "perihal2" value = " <?php echo $data['perihal'] ?> " aria-label = "default input label" >

                                      <!-- file surat -->
                                      <label for="formFile" class="form-label">Lihat File</label>
                                      <a href="../pages_dosen/<?php echo $data['file'] ?>" target="_blank">
                                      <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p>
                                      </a>
                                      
                                      <!-- Menginput id surat -->
                                      <input name = "id" value = <?php echo $data['id_no'] ?> type = "hidden" >  

                                      <!-- Menandai Admin bahwa surat sudah diproses dan dikirimkan -->
                                      <input name = "stadmin" value = 2 type = "hidden">
                                      
                                      <!-- upload surat baru -->
                                      <div class="card-header pb-0 p-3">
                                    <div class="row">
                                    <div class="mb-3">
                                  <label for="formFile" class="form-label">Kirim File Baru</label>
                                <input type="file" name="ufl" class="form-control" aria-label="file example" required>
                                <div class="invalid-feedback">Example invalid form file feedback</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                                <!-- button upload close -->
                            </div>
                              <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submite" name="update" class="btn bg-gradient-primary" data-bs-toggle = "modal" data-bs-target = "#exampleModal">Upload</button>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>  
                        <!-- and popup ajuan surat mahasiswa -->
                        <?php  }
                      
                      ?>
                        <!-- and php tabel -->
                      <!-- and modal-->
                      
                    
                      </tr>


                    

                      
                    </tbody>
                  </table>
                </div>
              </div>
              </div>
            </div>
          </div>
        
                    
          <div class="col-md-5 mt-4">
            <div class="card h-100 mb-4">
              <div style = "height:69px" class="card-header pb-0 px-3">
                <div class="row">
                  <div class="col-md-6">
                    <h6 class="mb-0">Detail Permohonan Surat Mahasiswa</h6>
                  </div>
                  <div class="col-6 text-end">
                  <a href = "validasisurat.php"> <button class="btn btn-outline-primary btn-sm mb-0">View All</button> </a>
                  </div>
                </div>
                <hr>
              </div>

              <div class="card-body pt-4 p-3">
              <div class="table-responsive p-0">
              <div style = "height:380px; width:530px;" class="card example-1 scrollbar-deep-purple bordered-deep-purple thin">

                  <table class="table align-items-center mb-0" >
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">Perihal</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Proses</th>
                      </tr>
                    </thead>
            
              
                    <!-- php tabel -->
                    <?php
                    include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                    $nama = $_SESSION['user'];
                    $query = mysqli_query($koneksi, 'SELECT * FROM suratmahasiswa ORDER BY id_no DESC');
                    
                    while ($data = mysqli_fetch_array($query)) {
                    
    ?>   <!-- Persetujuan yang hanya dilihat oleh kadep saja --> <?php 
                          

                      
                    ?> 
                    <!-- tabel -->
                    <tbody>
                      <tr>
                        <!-- file -->
                      
                        
                        <!-- progres -->
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?php echo $data['progres'] ?></p>
                        </td>
                        <!-- nama -->
                        <!-- status surat -->
                          <?php if ($data['status_admin'] == 0) {?>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Belum Diproses</span>
                        </td> <?php } 
                              else if ($data['status_admin'] == 1) {?>
                          <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_admin'] ?>">Ditolak</span>
                        </td> 
                              <?php }

                              else if ($data['status_admin'] == 2) {?>
                              <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Sudah Diproses</span>
                        </td> <?php } ?> 

                        <!-- button edit -->
                        <td class="align-middle">
                          <a  href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Proses</button>
                          </a>
                        </td>
                        <!-- and tabel -->
                        
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

                      <!-- backend upload update surat -->
                              
                              <?php 
                      include "../_database/config.php";

                      if(isset($_POST['update2'])){
                        $nama_file2 = basename($_FILES['ufl']['name']); 
                        $ukuran2 = $_FILES['ufl']['size'];
                        $tipe2 = strtolower(pathinfo($nama_file2, PATHINFO_EXTENSION));
                        $id = $_POST['id'];
                        $nama_mhs = $_POST['nm'];
                        $statusadmin = $_POST['stadmin'];
                        $perihal = $_POST['perihal'];
                        
                        $url2 = $nama_file2;
                        
                      if (move_uploaded_file($_FILES['ufl']['tmp_name'], $url2))  {
                        $query2 = mysqli_query($koneksi, "insert into kirimadmin values ('$id', '$url2', '$perihal', '$nama_mhs', sysdate()) ");
                        $query3 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `status_admin`='$statusadmin' WHERE id_no = '$id'");

                        if($query2){
                          echo '<a href="./validasiadmin.php"><script> alert ("Berhasil dikirimkan")</script></a>';
                        }
                        else {
                          echo '<a href="./validasiadmin.php"><script> alert ("Anda sudah melakukan update")</script></a>';
                        }
                    }}

                    ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="card-header pb-0 p-3">
                                  <div class="row">
                                    <div class="mb-3">
                                      <!-- nama mahasiswa -->
                                      <label for="formFile" class="form-label">Nama Mahasiswa</label>
                                      <label name="nm" class="form-control" aria-label="default input example"><?php echo $data['nama_mhsw'] ?></label>
                                      <input name="nm" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $data['nama_mhsw'] ?>" >
                                      <!-- NRP mahasiswa -->
                                      <label for="formFile" class="form-label">NRP Mahasiswa</label>
                                      <label name="nrp" class="form-control" aria-label="default input example"><?php echo $data['id_nrp'] ?></label>
                                      <!-- Perihal -->
                                      <label for="formFile" class="form-label">Perihal</label>
                                      <label name="perihal" class="form-control" aria-label="default input example"><?php echo $data['progres'] ?></label>
                                      <input name="perihal" class="form-control" type="hidden" aria-label="default input example"  value = "<?php echo $data['progres'] ?>" >
                                      <!-- file surat -->
                                      <label for="formFile" class="form-label">Lihat File</label>
                                      <a href="../pagesmahasiswa/<?php echo $data['file'] ?>" target="_blank">
                                      <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p>
                                      </a>
                                      
                                      

                                      <!-- Menginput id surat -->
                                      <input name = "id" value = <?php echo $data['id_no'] ?> type = "hidden" >  

                                      <!-- Menandai Admin bahwa surat sudah diproses dan dikirimkan -->
                                      <input name = "stadmin" value = 2 type = "hidden">
                                      
                                      <!-- upload surat baru -->
                                      <div class="card-header pb-0 p-3">
                                    <div class="row">
                                    <div class="mb-3">
                                  <label for="formFile" class="form-label">Kirim File Baru</label>
                                <input type="file" name="ufl" class="form-control" aria-label="file example" required>
                                <div class="invalid-feedback">Example invalid form file feedback</div>
                              </div>
                            </div>
                          </div>

                      </div>
                      </div>
                      </div>
                                <!-- button upload close -->
                            </div>
                              <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submite" name="update2" class="btn bg-gradient-primary" data-bs-toggle = "modal" data-bs-target = "#exampleModal">Upload</button>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>  
                        <!-- and popup ajuan surat mahasiswa -->
                        <?php  }
                      
                      ?>
                        <!-- and php tabel -->
                      <!-- and modal-->
                      
                    
                      </tr>



                    

                      
                    </tbody>
                  </table>
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
  </body>

  </html>