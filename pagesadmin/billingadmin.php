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
          <span class="ms-4 font-weight-bold">Sistem Administrasi Admin</span>
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

        <!-- Bagian Detail Permohonan Surat Dosen -->
        <div class="row">

          <div class="col-md-7 mt-4">
            <div class="card">
              <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Detail Permohonan Surat Dosen</h6>
              </div>
              
              <div class="card-body pt-4 p-3">
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
                        
                        $url2 = $id.'_'.$nama_file2;
                        
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
              <div class="card-header pb-0 px-3">
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
              <div style = "height:380px" class="card example-1 scrollbar-deep-purple bordered-deep-purple thin">

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
                        
                        $url2 = $id.'_'.$nama_file2;
                        
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
    <!-- JS sweetaler notif login berhasil-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <?php if(@$_SESSION['alert']) : ?>
          <script>
              Swal.fire({
              icon: 'success',
              title: 'Berhasil',
              text: 'Berhasil Login',
              })
          </script>
      <?php unset($_SESSION['alert']); ?>
      <?php endif; ?>
  </body>

  </html>