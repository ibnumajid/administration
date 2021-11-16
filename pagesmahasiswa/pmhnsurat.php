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
        <!--Home-->
        <li class="nav-item">
          <a class="nav-link  " href="../mahasiswa.php">
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
          <a class="nav-link  active" href="../pagesmahasiswa/pmhnsurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Permohonan Surat </span>
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
    <button type="button" class="btn btn-secondary btn-lg w-95 btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajukan Permohonan Surat</button>
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

                $url = $id_nrp.'_'.$nama_file;

             if ($ukuran > $max && $tipe != $ekstensi)
            {;
            echo '<script> alert("Gagal mengajukan permohonan surat ! Ekstensi file harus pdf dan ukuran file tidak boleh melebihi 20 mb")</script>';}
        
            else if ($ukuran > $max)
            {
              echo '<script> alert("Gagal mengajukan permohonan surat ! Ukuran file tidak boleh melebihi 20 mb")</script>' ;}
               
            else if ($tipe != $ekstensi && $tipe != $ekstensi2)
            { 
              echo '<script> alert("Gagal mengajukan permohonan surat ! Ekstensi file haru pdf")</script>';
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
                        <option value="Surat PBL (Project Based Learning)">Surat PBL (Project Based Learning)</option>
                        <option value="Surat Cuti">Surat Cuti</option>
                        <option value="Surat Mengundurkan Diri">Surat Mengundurkan Diri</option>
                        <option value="Surat Pengajuan Beasiswa">Surat Pengajuan Beasiswa</option>
                        <option value="Surat Keringanan UKT">Surat Keringanan UKT</option>
                        <option value="Surat Pengajuan Kegiatan HIMA">Surat Pengajuan Kegiatan HIMA</option>
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
                <label for="formFile" class="form-label">Masukkan File (Ekstensi File Berupa PDF)</label>
                  <input type="file" name="fl" class="form-control" aria-label="file example" required>
                 <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>
              </div>
            </div>
           

          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submite" name="input" class="btn bg-gradient-info" data-bs-toggle = "modal" data-bs-target = "#exampleModal">Kirim Permohonan</button>
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
                      <th class="text-left ps-1">Perihal</th>
                      <th class="text-left ps-1">Dosen Koordinator</th>
                      <th>Status Dosen</th>
                      <th>Status Kadep</th>
                      <th class="text-left ps-1">Proses Admin</th>
                      <th class="text-center">Waktu Upload</th>
                      <th class="text-left ps-1">Catatan</th>
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
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-left ps-1"><?php echo $data['progres'] ?></td>
                    <td class="text-left ps-1"><?php echo $data['dosen_pembimbing'] ?></td> 
                    <!-- status surat osen  -->
                    <?php if ($data['status_surat'] == 0) {?>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_surat'] ?>">Sedang DiProses</span>
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
                     
                    <!-- status surat kadep -->
                    <?php if ($data['status_kadep'] == 0) {?>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_surat'] ?>">Sedang DiProses</span>
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
                    
                      <!-- status aktivitas admin -->
                      <?php if ($data['status_admin'] == 0) {?>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_admin'] ?>">Menunggu Untuk Diproses</span>
                        </td> 
  
                         <?php } else if ($data['status_admin'] == 2) {?>
                              <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_admin'] ?>">Selesai Diproses</span>
                        </td> <?php } ?> 
                        
                    <td class="text-center"><?php echo $data['tanggal'] ?></td>
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
                          
                              <form action="" method="post" enctype="multipart/form-data">
                                  <div class="card-header pb-0 p-3">
                                    <div class="row">
                                      <div class="mb-3">

                                        <!-- nama mahasiswa -->
                                        <label for="formFile" class="form-label">Catatan Dosen</label>
                                        <label name="catatan" class="form-control" aria-label="default input example"><?php echo $data['catatan'] ?></label>

                                        <!-- NRP mahasiswa -->
                                        <label for="formFile" class="form-label">Catatan Kadep</label>
                                        <label name="catatan2  " class="form-control" aria-label="default input example"><?php echo $data['catatan2'] ?></label>

                                        <!-- Input ID untuk memberikan identitas surat -->
                                        <input type="hidden" name="id2" value="<?php echo $data['id_no'] ?>">

                                        <!-- Ubah File saat ditolak filenya -->
                                        <?php if ($data['status_surat'] == "1") { ?>
                                          <label for="formFile" class="form-label">Ubah File Untuk Dosen</label>
                                          <input type="file" name="ufl" id="edit<?php echo $data['id_no'] ?>" class="form-control" aria-label="file example" required>
                                          <input type="hidden" name="stats" value="0">
                                        <?php } else if ($data['status_kadep'] == "1") { ?>
                                          <label for="formFile" class="form-label">Ubah File Untuk Kadep</label>
                                          <input type="file" name="uflk" id="edit<?php echo $data['id_no'] ?>" class="form-control" aria-label="file example" required>
                                          <input type="hidden" name="stats2" value="0">
                                        <?php } ?>


                                        <div class="modal-footer">
                                          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>

                                          <!-- Saat dosen menolak -->
                                          <?php if ($data['status_surat']  == "1") { ?>
                                            <button type="submite" name="update" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Upload</button>
                                          <?php } else if ($data['status_kadep']  == "1") { ?>
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

                <!-- php update surat -->
                <?php
                include "../_database/config.php";
                if (isset($_POST['update'])) {

                  $nama_file2 = basename($_FILES['ufl']['name']);
                  $id3 = $_POST['id2'];
                  $nol = $_POST['stats2'];

                  $url2 = $id3.'_'.$nama_file2;

                  if (move_uploaded_file($_FILES['ufl']['tmp_name'], $url2)) {

                    $query2 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `file`='$url2' WHERE id_no = '$id3' ");
                    $query3 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `status_surat`='$nol' WHERE id_no = '$id3' ");

                    if ($query2 && $query3) {
                      echo '<a href="./pmhnsurat.php"><script> alert ("Berhasil di ajukan")</script></a>';
                ?> 
                <script> history.pushState({}, "", "")</script> <?php
                              } else {
                                echo '<a href="./pmhnsurat.php"><script> alert ("gagal di ajukan")</script></a>';
                              }
                            }
                          }

                                ?>

                <!-- php update surat saat kadep menolak -->
                <?php
                include "../_database/config.php";
                if (isset($_POST['update2'])) {

                  $nama_file3 = basename($_FILES['uflk']['name']);
                  $id4 = $_POST['id2'];
                  $nol = $_POST['stats2'];

                  $url3 = $id4.'_'.$nama_file3;

                  if (move_uploaded_file($_FILES['uflk']['tmp_name'], $url3)) {

                    $query4 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `file`='$url3' WHERE id_no = '$id4' ");
                    $query5 = mysqli_query($koneksi, "UPDATE suratmahasiswa SET `status_kadep`='$nol' WHERE id_no = '$id4' ");

                    if ($query4 && $query5) {
                      echo '<a href="./pmhnsurat.php"><script> alert ("Berhasil di ajukan")</script></a>';
                ?> <script> history.pushState({}, "", "") </script> <?php
                              } else {
                                echo '<a href="./pmhnsurat.php"><script> alert ("gagal di ajukan")</script></a>';
                              }
                            }
                          }

                                ?>

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