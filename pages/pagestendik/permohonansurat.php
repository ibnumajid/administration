<?php
session_start();
 if($_SESSION['user']=='')
 {
      header("location:../../index.php");
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
  <link rel="icon" type="image/png" href="../../assets/images/favicon.png">
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        <span class="ms-1 font-weight-bold">Sistem Administrasi Tendik</span>
      </a>
    </div>

    <!-- navbar  -->
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

      <!-- home  -->
        <li class="nav-item">
          <a class="nav-link  " href="./tendik.php">
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
          <a class="nav-link  active" href="./permohonansurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Permohonan Surat </span>
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
        
        <!--Validasi Surat-->
        <!-- <li class="nav-item">
          <a class="nav-link  " href="./validasisurat.php">
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
            <span class="nav-link-text ms-1">Validasi Surat</span>
          </a>
        </li> -->
    
      <!--profil-->
      <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../../profile.php">
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Tendik</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Permohonan Surat</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">Permohonan Surat</h5>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
            <a href="../../profile.php" class="nav-link text-body font-weight-bold px-0">
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
                <a href="../../logout.php" href="javascript:;" class="nav-link text-body p-0" >
                  <i class="fas fa-sign-out-alt"></i>
                  <span class="d-sm-inline d-none">Logout </span>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- pop up kirim surat  -->
          <div class="text-center">
            <a class="nav-link  " href="./ajukantendik.php"> 
              <button type="button" class="btn btn-secondary btn-lg-center w-95 btn bg-gradient-info" >Ajukan Surat</button>
            </a>
          </div>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Kirim Surat</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
          </div>
            <div class="modal-body">

          <?php
    
            include '../../_database/config.php';
            if(isset($_POST['input']))
            {
              $namatendik = $_POST['nm'];
              $niptendik = $_POST['nip'];
              $perihal = $_POST['perihal'];

              
              $nama_file = basename($_FILES['fl']['name']);
              $ukuran = $_FILES['fl']['size'];
              $tipe = strtolower(pathinfo($nama_file,PATHINFO_EXTENSION));
              $max = 1024 * 5000;
              $ekstensi = "pdf";
              $keterangan = $_POST['keterangan'];

              $url = $niptendik.'_'.$nama_file;

              if ($ukuran > $max && $tipe != $ekstensi)
              {;
                echo '<script> alert("Gagal mengajukan permohonan surat ! Ekstensi file harus pdf dan ukuran file tidak boleh melebihi 5 mb")</script>';}
            
                else if ($ukuran > $max)
                {
                  echo '<script> alert("Gagal mengajukan permohonan surat ! Ukuran file tidak boleh melebihi 5 mb")</script>' ;}
                   
                else if ($tipe != $ekstensi && $tipe != $ekstensi2)
                { 
                  ?><script><?php $_SESSION["file"] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }

              if (move_uploaded_file($_FILES['fl']['tmp_name'], $url)) 
              {
                $query = mysqli_query($koneksi,"insert into surattendik values('','$namatendik','$niptendik','$perihal', '$keterangan', '$url', '0', '0', '', '$ukuran', '$tipe', sysdate())");

                if($query)
                {
                  ?><script><?php $_SESSION["sukses"] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
                else
                {
                  ?><script><?php $_SESSION["input"] = true;?></script> 
                    <script>history.pushState({}, "", "")</script><?php
                }
              }
              else
              {
                echo "Gagal Upload";
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
                    <select name="perihal"  class="form-select" aria-label="Default select example">
                        <option selected>Pilih Jenis Surat</option>
                        <option value="Surat Tugas">Surat Tugas</option>
                        <option value="Surat Keterangan">Surat Keterangan</option>
                        <option value="Surat Perpindahan Barang Lab">Surat Perpindahan Barang Lab</option>
                    </select>
                </div>
              </div>
            </div>

            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="mb-3">
                <label for="formFile" class="form-label">Keterangan</label>
                <input name="keterangan" class="form-control" type="text" placeholder="Masukan Keterangan" aria-label="default input example" ?><script><?php $_SESSION["pdf"] = true;?></script> 
              <script>history.pushState({}, "", "")</script>
              </div>
              </div>
            </div>


            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="mb-3">
                <label for="formFile" class="form-label">Pilih File *pdf</label>
                  <input type="file" name="fl" class="form-control" aria-label="file example" required>
                 <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>
              </div>
            </div>

          </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submite" name="input" class="btn bg-gradient-primary" >Upload</button>
            </div>
           </form>
        </div>
      </div>
    </div>
    <!-- pop up kirim surat selesai  -->


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
                <input type="hidden" name = "filterid" value = "2">
               <button type = "submit" name = "filter2" class = "btn btn-outline-info">Disetujui</button>
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
                      <th>Perihal</th>
                      <th>Tanggal Upload</th>
                      <th class="text-center">Persetujuan Kadep</th>
                      <th class="text-center">Proses Admin</th>
                      <th>Catatan</th>
                    </tr>
                  </thead>

                  <?php
                   include '../../_database/config.php'; //panggil setiap ingin koneksi ke data                  
                   $no = 0;
                   $no2=$no++;
                   $query = mysqli_query($koneksi, 'SELECT * FROM surattendik ORDER BY id_no DESC');                  
                   while ($data = mysqli_fetch_array($query)) {
                  if ($data['nama_tdk'] == $_SESSION['user']) {
                    if (isset($_POST['filter0']) || isset($_POST['filter1']) || isset( $_POST['filter1']) || isset( $_POST['filter2'])) {
                      $idf = $_POST['filterid'];
                        if ($data['status_kadep'] == $idf) {
                      
                  ?>
                      <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td>
                          <h6 class="mb-0 text-sm ps-3"><?php echo $data['perihal'] ?></h6>
                        </td>
                        <td class="align-middle ps-5">
                          <h6 class="mb-0 text-sm"><?php echo $data['tanggal'] ?></h6>
                        </td>

                        <!-- Persetujuan kadep -->
                        <?php if ($data['status_kadep'] == 0) { ?>
                          <td class="text-center">
                            <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_kadep'] ?>">Sedang DiProses</span>
                          </td> <?php } else if ($data['status_kadep'] == 1) { ?>
                          <td class="text-center">
                            <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_kadep'] ?>">Ditolak</span>
                          </td>
                        <?php } else if ($data['status_kadep'] == 2) { ?>
                          <td class="text-center">
                            <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_kadep'] ?>">Disetujui</span>
                          </td> <?php } ?>
                          
                          <!-- status aktivitas admin -->
                      <?php if ($data['status_admin'] == 0) {?>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Menunggu Untuk Diproses</span>
                        </td> 
  
                         <?php } else if ($data['status_admin'] == 2) {?>
                              <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Selesai Diproses</span>
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

                             
                                  <div class="card-header pb-0 p-3">
                                    <div class="row">
                                      <div class="mb-3">
                                        
                                        <!-- Cek File -->
                                        <label for="formFile" class="form-label">File Anda (Klik Untuk Melihat)</label>
                                        <a href="./<?php echo $data['file'] ?>" target="_blank">
                                        <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p></a>

                                        <!-- Keterangan File -->
                                        <label for="formFile" class="form-label">Keterangan Tambahan</label>
                                        <label name="keterangan" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                                  
                                        <!-- Catatan Kadep -->
                                        <label for="formFile" class="form-label">Catatan Kadep</label>
                                        <label name="catatan" class="form-control" aria-label="default input example"><?php echo $data['catatan'] ?></label>
 
                                        <!-- Input ID untuk memberikan identitas surat -->
                                        <input type="hidden" name="id2" value="<?php echo $data['id_no'] ?>">

                                        <div class="modal-footer">
                                          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>

                                          <!-- Saat kadep menolak -->
                                          <?php if ($data['status_kadep'] == 1) { ?>
                         <form action = "../ubahajuantdk.php" method = "post">
                         <!-- Input ID untuk memberikan identitas surat -->
                         <input type="hidden" name="id" value="<?php echo $data['id_no'] ?>">
                         <button class ="btn btn-primary">Ubah</button>
                         </form>
                                         
                        <?php } ?>
                                          </div>
                                        
                                        <?php }
                                        } 
                                        else { ?>

                                          <tr>
                                          <td class="text-center"><?php echo $no++ ?></td>
                                          <td>
                                            <h6 class="mb-0 text-sm ps-3"><?php echo $data['perihal'] ?></h6>
                                          </td>
                                          <td class="align-middle ps-5">
                                            <h6 class="mb-0 text-sm"><?php echo $data['tanggal'] ?></h6>
                                          </td>
                  
                                          <!-- Persetujuan kadep -->
                                          <?php if ($data['status_kadep'] == 0) { ?>
                                            <td class="text-center">
                                              <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_kadep'] ?>">Sedang DiProses</span>
                                            </td> <?php } else if ($data['status_kadep'] == 1) { ?>
                                            <td class="text-center">
                                              <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_kadep'] ?>">Ditolak</span>
                                            </td>
                                          <?php } else if ($data['status_kadep'] == 2) { ?>
                                            <td class="text-center">
                                              <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_kadep'] ?>">Disetujui</span>
                                            </td> <?php } ?>
                                            
                                            <!-- status aktivitas admin -->
                                        <?php if ($data['status_admin'] == 0) {?>
                                          <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Menunggu Untuk Diproses</span>
                                          </td> 
                    
                                           <?php } else if ($data['status_admin'] == 2) {?>
                                                <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Selesai Diproses</span>
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
                  
                                                
                                                    <div class="card-header pb-0 p-3">
                                                      <div class="row">
                                                        <div class="mb-3">
                                                          
                                                          <!-- Cek File -->
                                                          <label for="formFile" class="form-label">File Anda (Klik Untuk Melihat)</label>
                                                          <a href="./<?php echo $data['file'] ?>" target="_blank">
                                                          <p class="modal-title" name="fl" id="edit<?php echo $data['id_no'] ?>"><button type="button"  class="btn btn-link"><em><?php echo $data['file'] ?></em></button></p></a>
                  
                                                          <!-- Keterangan File -->
                                                          <label for="formFile" class="form-label">Keterangan Tambahan</label>
                                                          <label name="keterangan" class="form-control" aria-label="default input example"><?php echo $data['keterangan'] ?></label>
                                                    
                                                          <!-- Catatan Kadep -->
                                                          <label for="formFile" class="form-label">Catatan Kadep</label>
                                                          <label name="catatan" class="form-control" aria-label="default input example"><?php echo $data['catatan'] ?></label>
                   
                                                          <!-- Input ID untuk memberikan identitas surat -->
                                                          <input type="hidden" name="id2" value="<?php echo $data['id_no'] ?>">
                  
                                                       
                  
                  
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                  
                                                            <!-- Saat dosen menolak -->
                                                            <?php if ($data['status_kadep'] == 1) { ?>
                         <form action = "../ubahajuantdk.php" method = "post">
                         <!-- Input ID untuk memberikan identitas surat -->
                         <input type="hidden" name="id" value="<?php echo $data['id_no'] ?>">
                         <button class ="btn btn-primary">Ubah</button>
                         </form>
                                         
                        <?php } ?>
                                                            </div>
                                                          

                                   <?php } } } ?>

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
                include "../../_database/config.php";
                if (isset($_POST['update2'])) {

                  $nama_file3 = basename($_FILES['uflk']['name']);
                  $id4 = $_POST['id2'];
                  $nol = $_POST['stats2'];

                  $url3 = $id4.'_'.$nama_file3;

                  if (move_uploaded_file($_FILES['uflk']['tmp_name'], $url3)) {

                    $query4 = mysqli_query($koneksi, "UPDATE surattendik SET `file` = '$url3' WHERE id_no = '$id4' ");

                    $query5 = mysqli_query($koneksi, "UPDATE surattendik SET `status_kadep` = '$nol' WHERE id_no = '$id4' ");

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
  </main>
  
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="../../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
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
    <?php if(@$_SESSION['file']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Gagal mengajukan permohonan surat ! Ekstensi file harus pdf',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['file']); ?>
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