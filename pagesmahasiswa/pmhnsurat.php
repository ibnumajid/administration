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

        <li class="nav-item">
          <a class="nav-link  " href="../mahasiswa.php">
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

        <!--Permohonan Surat-->
        <li class="nav-item">
          <a class="nav-link  active" href="../pagesmahasiswa/pmhnsurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>home</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Permohonan Surat </span>
          </a>
        </li>
        
                      <!-- REKAP SURAT -->
       <li class="nav-item"> 
        <a class="nav-link  " href="./rekapmhs.php">
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
        
        
    
        
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pagesmahasiswa/profilmhsw.php">
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
              <a href="profilmhsw.php" class="nav-link text-body font-weight-bold px-0">
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
    <button type="button" class="btn btn-secondary btn-lg w-95 btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajukan Surat</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>  
        
          <div class="modal-body">

          <?php

    
              include '../_database/config.php';
              if(isset($_POST['input']))
              {
                $nama_mhsw = $_POST['nm'];
                $id_nrp = $_POST['nrp'];
                $progres = $_POST['sr'];
                $dosen_pembimbing = implode(', ', $_POST['ds']);
                
                $nama_file = basename($_FILES['fl']['name']);
                $ukuran = $_FILES['fl']['size'];
                $tipe = strtolower(pathinfo($nama_file,PATHINFO_EXTENSION));
                $max = 1024 * 20000;
                $ekstensi = "pdf";
                $ekstensi2 = "docx";

                $url = $nama_file;

             if ($ukuran > $max && $tipe != $ekstensi && $tipe != $ekstensi2)
            {;
            echo '<script> alert("Gagal mengajukan permohonan surat ! Ekstensi file harus docx atau pdf dan ukuran file tidak boleh melebihi 20 mb")</script>';}
        
            else if ($ukuran > $max)
            {
              echo '<script> alert("Gagal mengajukan permohonan surat ! Ukuran file tidak boleh melebihi 20 mb")</script>' ;}
               
            else if ($tipe != $ekstensi && $tipe != $ekstensi2)
            { 
              echo '<script> alert("Gagal mengajukan permohonan surat ! Ekstensi file harus docx atau pdf")</script>';
            }  
                else if (move_uploaded_file($_FILES['fl']['tmp_name'], $url)) 
                {
                  $query = mysqli_query($koneksi,"insert into suratmahasiswa values('', '$nama_mhsw','$id_nrp','$progres','$dosen_pembimbing','$url', '0', '0', '0', '', '', '$ukuran', '$tipe', sysdate())");

                  if($query)
                  {
                    echo '<script> alert ("Berhasil mengajukan permohonan surat")</script>';
                    ?> <script>history.pushState({}, "", "")</script> <?php
                  }
                  else
                  {
                    echo "Gagal Input";
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
                <label for="formFile" class="form-label">Nama Mahasiswa</label>
                <input name="nm" class="form-control" type="hidden" placeholder="Masukan Nama Mahasiwa" aria-label="default input example"  value = "<?php echo $_SESSION['user'] ?>" >
                <label name="nm" class="form-control" aria-label="default input example"><?php echo $_SESSION['user'] ?></label>
              </div>
              </div>
            </div>

            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="mb-3">
                <label for="formFile" class="form-label">NRP</label>
                <input name="nrp" class="form-control" type="hidden" placeholder="Masukan NRP" aria-label="default input example" value = "<?php echo $_SESSION['NIP'] ?>">
                <label name="nrp" class="form-control" aria-label="default input example"><?php echo $_SESSION['NIP'] ?></label>
              </div>
              </div>
            </div>
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="mb-3">
                <label for="formFile" class="form-label">Jenis Surat</label>
                    <select name="sr"  class="form-select" aria-label="Default select example">
                        <option selected>Pilih Jenis Surat</option>
                        <option value="Surat Magang">Surat Magang</option>
                        <option value="Surat Tugas Akhir">Surat Tugas Akhir</option>
                        <option value="Surat Cuti">Surat Cuti</option>
                    </select>
                </div>
              </div>
            </div>
            
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="mb-3">

                <div class="dropdown">
              <button class="btn btn-outline-secondary btn-lg w-100 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Pilih Dosen
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <?php
                        include '../_database/config.php';
                          $query_dosen = mysqli_query($koneksi, "SELECT * FROM data_dosenb") or die (mysqli_error($koneksi));
                          while ($data_dosen =mysqli_fetch_array($query_dosen)){?>
                           <div class="form-check">
                            <div class="card-header pb-0 p-2">
                              <div class="row">
                                <div class="mb-3">
                            <input class="form-check-input" Name="ds[ ]" type="checkbox" value="<?php echo$data_dosen['nama_anggota']?>" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            <?php echo $data_dosen['nama_anggota'] ?>
                            </label>
                           </div>  
                           </div>
                           </div>
                           </div>
                        <?php }?>
              </ul>
            </div>

                </div>
              </div>
            </div>
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="mb-3">
                <label for="formFile" class="form-label">Masukan File</label>
                  <input type="file" name="fl" class="form-control" aria-label="file example" required>
                 <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>
              </div>
            </div>
           

          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submite" name="input" class="btn bg-gradient-primary" data-bs-toggle = "modal" data-bs-target = "#exampleModal">Upload</button>
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
                      <th>No</th>
                      <th>Perihal</th>
                      <th>Dosen Pembimbing</th>
                      <th>Status Dosen</th>
                      <th>Status Kadep</th>
                      <th>Waktu Upload</th>
                      <th>Catatan</th>
                    </tr>
                  </thead>

                  <?php
                  include '../_database/config.php'; //panggil setiap ingin koneksi ke data
                  $no = 1;
                  $query = mysqli_query($koneksi, 'SELECT * FROM suratmahasiswa ORDER BY id_no DESC');
                  while ($data = mysqli_fetch_array($query)) {
                    if ($data['nama_mhsw'] == $_SESSION['user']) {
                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['progres'] ?></td>
                    <td><?php echo $data['dosen_pembimbing'] ?></td>
                    <!-- status surat -->
                    <?php if ($data['status_surat'] == 0) {?>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_surat'] ?>">Sedang Di Proses</span>
                      </td> <?php } 
                            else if ($data['status_surat'] == 1) {?>
                        <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_surat'] ?>">Ditolak</span>
                      </td> 
                            <?php }

                            else if ($data['status_surat'] == 2) {?>
                            <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_surat'] ?>">Disetujui</span>
                      </td> <?php } ?> 
                     
                    <!-- status surat -->
                    <?php if ($data['status_kadep'] == 0) {?>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_surat'] ?>">Sedang Di Proses</span>
                      </td> <?php } 
                            else if ($data['status_kadep'] == 1) {?>
                        <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_surat'] ?>">Ditolak</span>
                      </td> 
                            <?php }

                            else if ($data['status_kadep'] == 2) {?>
                            <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_surat'] ?>">Disetujui</span>
                      </td> <?php } ?> 

                    <td><?php echo $data['tanggal'] ?></td>
                     <!-- button edit -->
                     <td class="align-middle">
                          <a  href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
                          </a>
                        </td>
                       <!-- Modal -->
                       <div class="modal fade" id="edit<?php echo $data['id_no'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                             <!-- popup ajuan surat mahasiswa -->
                              <div class="modal-header">
                                <h5 class="modal-title" id="edit<?php echo $data['id_no'] ?>">Catatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>  
                            
                              <div class="modal-body">
                          
                          <form action="" method="post">
                              <div class="card-header pb-0 p-3">
                                <div class="row">
                                  <div class="mb-3">
                           <!-- nama mahasiswa -->
                           <label for="formFile" class="form-label">Catatan Dosen</label>
                           <label name="catatan" class="form-control" aria-label="default input example"><?php echo $data['catatan'] ?></label>
                                  
                           <!-- NRP mahasiswa -->
                           <label for="formFile" class="form-label">Catatan Kadep</label>
                           <label name="catatan2  " class="form-control" aria-label="default input example"><?php echo $data['catatan2'] ?></label>
                  </tr>
                  <?php }} ?>
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
</body>

</html>   