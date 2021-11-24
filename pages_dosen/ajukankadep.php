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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
</script>

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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Kadep</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pengajuan Mandat</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Ajukan Mandat</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Ajukan Surat</h6>
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-11">
          <div class="row">
          
              <div class="card mt-0">
                <!--div class="card-header pb-0 p-4">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0 pt-1 px-1">Permohonan Surat</h6>
                    </div>
                  </div>
                </div-->
                
                
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <?php
                        include '../_database/config.php';
                        if(isset($_POST['input']))
                        {
                        $id = rand(1, 1000000);
                        $perihal = $_POST['sr'];
                        $keterangan = $_POST['keterangan'];
                        $keterangan2 = $_POST['keterangan2'];
                        $dosen1 = $_POST['ds1'];
                        $nama_file = basename($_FILES['fl']['name']);
                        $ukuran = $_FILES['fl']['size'];
                        $tipe = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));
                        
                        $max = 1024 * 5000;
                        $ekstensi = "pdf";
                        

                        $url = $id.'_'.$nama_file;
                        
                        if ($keterangan == NULL || $keterangan2 == NULL || $nama_file == NULL){ 
                            ?><script><?php $_SESSION["isisemua"] = true;?></script> 
                            <script>history.pushState({}, "", "")</script><?php 
                          }
                        else if ($ukuran > $max && $tipe != $ekstensi)
                        {
                        ?><script><?php $_SESSION["pdfuk"] = true;?></script> 
                        <script>history.pushState({}, "", "")</script><?php 
                        }

                        else if ($ukuran > $max)
                        {
                          ?><script><?php $_SESSION['uk'] = true ?></script> 
                          <script>history.pushState({}, "", "")</script><?php
                        }
                        
                        else if ($tipe != $ekstensi)
                        { 
                        ?><script><?php $_SESSION['pdf'] = true ?></script> 
                        <script>history.pushState({}, "", "")</script><?php
                        }  
                        else if (move_uploaded_file($_FILES['fl']['tmp_name'], $url)) 
                        {
                            $query = mysqli_query($koneksi,"INSERT into ajukankadep values('', '$url', '$dosen1', '$perihal','$keterangan','$keterangan2', '0', sysdate())");

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
                        else 
                        {
                         
                          echo '<script> alert("Terjadi Kesalahan yang Tidak Diketahui")</script>';
                         
                        }
                        
                        }

                        ?>

                        <!-- nama & nrp -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-header pb-0 p-3">    
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="formFile" class="form-label">Nama Kepala Departemen</label>
                                        <input name="nm" class="form-control" type="hidden" placeholder="Masukan Nama Mahasiwa" aria-label="default input example"  value = "<?php echo $_SESSION['user'] ?>" >
                                        <label name="nm" class="form-control" aria-label="default input example"><?php echo $_SESSION['user'] ?></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formFile" class="form-label">NPP</label>
                                        <input name="nrp" class="form-control" type="hidden" placeholder="Masukan NRP" aria-label="default input example" value = "<?php echo $_SESSION['NIP'] ?>">
                                        <label name="nrp" class="form-control" aria-label="default input example"><?php echo $_SESSION['NIP'] ?></label>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- jenis surat -->
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Jenis Surat</label>
                                        <select id="jenis_surat" name="sr"  class="form-select" aria-label="Default select example" required>
                                            <option selected>Pilih Jenis Surat</option>
                                            <option value="Rapat">Rapat</option>
                                                <option value="Workshop">Workshop</option>
                                            <option value="Kunjungan">Kunjungan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- keterangan -->
                            <div class="keterangan" style="display: none;">
                              <div class="card-header pb-0 p-3">
                                  <div class="row">
                                      <div class="mb-3">
                                          <label  id="label-keterangan" for="formFile" class="form-label">Nama Perusahaan</label>
                                          <input name="keterangan" class="form-control" type="text" aria-label="default input example" >
                                      </div>
                                  </div>
                              </div>
                            </div>

                             <!-- Keterangan Tambahan -->
                             <div class="ketTA" style="display: none;">
                              <div class="card-header pb-0 p-3">
                                  <div class="row">
                                      <div class="mb-3">
                                          <label  id="label-keterangan2" for="formFile2" class="form-label">Rencana Judul</label>
                                          <input name="keterangan2" class="form-control" type="text" aria-label="default input example" >
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <!-- dosen -->
                            <div class="dosen" style="display: none;">
                              <div class="card-header pb-0 p-3">    
                                <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="formFile" class="form-label">Dosen Koordinator </label>
                                          <select name="ds1"  class="form-select" aria-label="Default select example" >
                                              <option selected>Pilih Dosen Koordinator </option>
                                              <?php
                                              include '../_database/config.php';
                                              $query_dosen = mysqli_query($koneksi, "SELECT * FROM data_dosenb") or die(mysqli_error($koneksi));
                                              while ($data_dosen = mysqli_fetch_array($query_dosen)) { ?>
                                              <option value="<?php echo $data_dosen['nama_anggota'] ?>"><?php echo $data_dosen['nama_anggota'] ?></option>
                                              <?php } ?>
                                          </select>
                                    </div>
                                </div>
                              </div>
                            </div>

                            <!-- dosen tkk -->
                            <div class="dosenTKK" style="display: none;">
                              <div class="card-header pb-0 p-3">    
                                <div class="row">
                                  <div class="mb-3">
                                    <label for="formFile" class="form-label">Dosen TKK</label>
                                    <select name="tkk"  class="form-select" aria-label="Default select example" >
                                      <option selected>Pilih Dosen TKK</option>
                                      <?php
                                      include '../_database/config.php';
                                      $query_dosen = mysqli_query($koneksi, "SELECT * FROM data_dosenb") or die(mysqli_error($koneksi));
                                      while ($data_dosen = mysqli_fetch_array($query_dosen)) { ?>
                                      <option value="<?php echo $data_dosen['nama_anggota'] ?>"><?php echo $data_dosen['nama_anggota'] ?></option>
                                       <?php } ?>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- file -->
                            <div class="file" style="display: none;">  
                              <div class="card-header pb-0 p-3">
                                  <div class="row">
                                      <div class="mb-3">
                                          <label id ="label-file" for="formFile" class="form-label">Masukkan File (Ekstensi File Berupa PDF)</label>
                                          <input type="file" id="file" name="fl" class="form-control" aria-label="file example" >
                                          <div class="invalid-feedback">Example invalid form file feedback</div>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <br><br>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" >Batal</button>
                                <button type="submit" name="input" class="btn bg-gradient-info" >Kirim Permohonan</button>
                            </div>
                        </form>
                    </div>
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['sukses']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil Upload',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['uk']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Gagal mengajukan permohonan surat ! Ukuran file tidak boleh melebihi 5 mb',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['uk']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['pdf']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Gagal mengajukan permohonan surat ! Ekstensi file harus pdf',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['pdf']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['pdfuk']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Gagal mengajukan permohonan surat ! Ekstensi file harus pdf dan ukuran file tidak boleh melebihi 5 mb',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['pdfuk']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['isisemua']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Silahkan Isi Semua Bagian',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['isisemua']); ?>
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
    
    <script>
        $('#jenis_surat').on('change',function () {
            if($('#jenis_surat').val() == 'Rapat') {
                $('.keterangan').show();
                $('#label-keterangan').text("Perihal Rapat");
                $('.ketTA').show(); 
                $('#label-keterangan2').text("Tempat dan Tanggal Rapat");
                $('.tanggalHIMA').hide();
                $('.dosen').show();
                $('.file').show();
                $('#label-file').text("Masukkan File untuk Memberikan Mandat Melakukan Rapat");
                $('.dosenTKK').hide();
              }
            else if($('#jenis_surat').val() == 'Workshop') {
                $('.keterangan').show();
                $('#label-keterangan').text("Perihal Workshop");
                $('.ketTA').show();
                $('#label-keterangan2').text("Tempat dan Tanggal Workshop");
                $('.tanggalHIMA').hide();
                $('.dosen').show();
                $('.file').show();
                $('#label-file').text("Masukkan File untuk Memberikan Mandat Melakukan Workshop");
                $('.dosenTKK').hide();
              }
            else if($('#jenis_surat').val() == 'Kunjungan') {
                $('.keterangan').show();
                $('#label-keterangan').text("Perihal Workshop");
                $('.ketTA').show();
                $('#label-keterangan2').text("Tempat dan Tanggal Kunjungan");
                $('.tanggalHIMA').hide();
                $('.dosen').show();
                $('.file').show();
                $('#label-file').text("Masukkan File untuk Memberikan Mandat Melakukan Kunjungan");
                $('.dosenTKK').hide();
              } 
            else if($('#jenis_surat').val() == 'Surat Cuti') {
                $('.keterangan').show();
                $('#label-keterangan').text("Lama Waktu Cuti (*Satu semester)");
                $('.judulTA').hide();
                $('.tanggalHIMA').hide();
                $('.dosen').hide();
                $('.file').show();
                $('.dosenTKK').hide();
              }
            else if($('#jenis_surat').val() == 'Surat Mengundurkan Diri') {
                $('.keterangan').hide();
                $('.judulTA').hide();
                $('.tanggalHIMA').hide();
                $('.dosen').hide();
                $('.file').show();
                $('.dosenTKK').hide();
              }
            else if($('#jenis_surat').val() == 'Surat Pengajuan Beasiswa') {
                $('.keterangan').show();
                $('#label-keterangan').text("Nama Beasiswa");
                $('.judulTA').hide();
                $('.tanggalHIMA').hide();
                $('.dosen').hide();
                $('.file').show();
                $('.dosenTKK').show();
              }
            else if($('#jenis_surat').val() == 'Surat Keringanan UKT') {
                $('.keterangan').hide();
                $('.judulTA').hide();
                $('.tanggalHIMA').hide();
                $('.dosen').hide();
                $('.file').show();
                $('.dosenTKK').show();
              }
            else if($('#jenis_surat').val() == 'Surat Pengajuan Kegiatan HIMA') {
                $('.keterangan').show();
                $('#label-keterangan').text("Nama Kegiatan");
                $('.judulTA').hide();
                $('.tanggalHIMA').show();
                $('.dosen').hide();
                $('.file').show();
                $('.dosenTKK').show();
              }
            else {
                $('.keterangan').hide();
                $('.judulTA').hide();
                $('.tanggalHIMA').hide();
                $('.dosen').hide();
                $('.file').hide();
                $('.dosenTKK').hide();
              }
        });
    </script>
</body>
</body>

</html>   