<?php
session_start();
  if($_SESSION['user']=='' || $_SESSION['status'] != 4)
  {
  header("location:../../index.php");
  }
?>
<?php
//backend pengiriman surat ke surattendik
                            include '../../_database/config.php';//menggabungkan variable global
                            if(isset($_POST['input'])) //kondisi saat button kirim ditekan
                            {
                            $namatendik = $_POST['nm']; //memberikan deklarasi namatendik
                            $niptendik = $_POST['nip']; //memberikan deklarasi niptendik
                            $perihal = $_POST['perihal']; //memberikan deklarasi perihal surat
                            $keterangan = $_POST['keterangan']; //memberikan deklarasi keterangan
                            $tgl_pel1 = $_POST['pel1']; //memberikan deklarasi tanggal mulai pelatihan
                            $tgl_pel2 = $_POST['pel2']; //memberikan deklarasi tanggal pelatihan selesai
                            $nama_barang = $_POST['nb']; //memberikan deklarasi nama barang
                            $jumlah_barang = $_POST['jb']; //memberikan deklarasi jumlah barang 
                            $dari_lab = $_POST['dl']; //memberikan deklarasi asal lab
                            $ke_lab = $_POST['kl']; //memberikan deklarasi tujuan barang dikirimkan

                            
                            $nama_file = basename($_FILES['fl']['name']); //Memberikan deklarasi nama file
                            $ukuran = $_FILES['fl']['size']; //Memberikan deklarasi Ukuran file
                            $tipe = strtolower(pathinfo($nama_file,PATHINFO_EXTENSION)); //Memberikan deklarasi tipe file
                            $max = 1024 * 5000; //Memberikan deklarasi maksimal file yang bisa diupload
                            $ekstensi = "pdf"; //Memberikan deklarasi ekstensi file

                            $url = $niptendik.'_'.$nama_file; //Memberikan deklarasi nama file saat masuk ke dalam database

                            if ($ukuran > $max && $tipe != $ekstensi) // Jika ukuran melebihi maksimal dan tipe tidak sesuai maka akan ditolak
                            {
                              ?><script><?php $_SESSION["pdfuk"] = true;?></script> 
                              <script>history.pushState({}, "", "")</script><?php }
                            
                                else if ($ukuran > $max) //Jika ukuran melebihi maksimal maka akan ditolak
                                {
                                  ?><script><?php $_SESSION["uk"] = true;?></script> 
                                  <script>history.pushState({}, "", "")</script><?php }
                                
                                else if ($tipe != $ekstensi) 
                                { 
                                    ?><script><?php $_SESSION["file"] = true;?></script> 
                                    <script>history.pushState({}, "", "")</script><?php
                                }
                                else if (move_uploaded_file($_FILES['fl']['tmp_name'], $url)){
                                $query = mysqli_query($koneksi,"INSERT into surattendik values('', '4', '$namatendik','$niptendik','$perihal', '$keterangan', '', '$ukuran', '$tipe', '0', '', '', '', '0', '0',  '$nama_barang', '$jumlah_barang', '',  '$url', '$dari_lab', '$ke_lab', ' $tgl_pel1', ' $tgl_pel2', '',  '',  sysdate(), '')");

                                if($query)
                                {
                                ?><script><?php $_SESSION["sukses"] = true;?></script> 
                                    <?php header("location:permohonansurat.php");
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/images/favicon.png">
  <title>
    Sistem Administrasi DTEO
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  <!--Styling untuk scrollbar-->
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

<!-- Javascript untuk memunculkan dan menghilangkan file -->
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
        <span class="ms-1 font-weight-bold">Sistem Administrasi Tendik</span>
      </a>
    </div>

    <!-- navbar  -->
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main" style = "height:513px">
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
        
      <?php if ($_SESSION['status2'] == 1) { ?>
      <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Tata Usaha</h6>
        </li>
      
         <!-- KIRIM SURAT -->
         <li class="nav-item">
            <a class="nav-link  " href="../../pagesadmin/kirimadmin.php">
             <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65l-.095.038L.767 5.854l-.001.001-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.563 2.903.432.275.275.432 2.903 4.563.002.002.26.41a.5.5 0 0 0 .886-.083l.181-.453L15.926.78l.038-.095Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1"> Upload Informasi</span>
            </a>
          </li>

          <!-- VALIDASI SURAT MAHASISWA -->
          <li class="nav-item">
            <a class="nav-link  " href="../../pagesadmin/validasiadmin.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Surat Masuk dari Mahasiswa</span>
            </a>
          </li>

          <!-- VALIDASI SURAT DOSEN  -->
          <li class="nav-item">
            <a class="nav-link  " href="../../pagesadmin/validasiadmin2.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Surat Masuk dari Dosen</span>
            </a>
          </li>

           <!-- VALIDASI SURAT TENDIK -->
           <li class="nav-item">
            <a class="nav-link  " href="../../pagesadmin/validasiadmin3.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Surat Masuk dari Tendik</span>
            </a>
          </li>

           <!-- rekap bimbingan  -->
        <li class="nav-item"> 
          <a class="nav-link  " href="../../pagesadmin/rekapbimbingan.php">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>
            </div>
            <span class="nav-link-text ms-1">Rekap Bimbingan</span>
          </a>
        </li>

        <!-- REKAP SURAT -->
        <li class="nav-item">
          <a class="nav-link  " href="../../pagesadmin/rekapadmin.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>
            </div>
            <span class="nav-link-text ms-1">Rekap Surat</span>
          </a>
        </li>
      <?php } ?>

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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Sistem Administrasi Mahasiswa</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Permohonan Surat</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Ajukan Surat</li>
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-11">
          <div class="row">
            <!---->

            <div class="col-md-12 mb-lg-0 mb-4">
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
                            

                        <!-- nama & nip -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-header pb-0 p-3">    
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="formFile" class="form-label">Nama Tendik</label>
                                        <input name="nm" class="form-control" type="hidden"  aria-label="default input example"  value = "<?php echo $_SESSION['user'] ?>" >
                                        <label name="nm" class="form-control" aria-label="default input example"><?php echo $_SESSION['user'] ?></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="formFile" class="form-label">NPP</label>
                                        <input name="nip" class="form-control" type="hidden" aria-label="default input example" value = "<?php echo $_SESSION['NIP'] ?>">
                                        <label name="nip" class="form-control" aria-label="default input example"><?php echo $_SESSION['NIP'] ?></label>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- jenis surat -->
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Jenis Surat</label>
                                        <select name="perihal" id="jenis_surat" class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Jenis Surat</option>
                                            <option value="Surat Tugas">Surat Tugas</option>
                                            <option value="Surat Perpindahan Barang Lab">Surat Perpindahan Barang Lab</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- keterangan/perihal -->
                            <div class="tugas" style="display: none;">
                              <div class="card-header pb-0 p-3">
                                  <div class="row">
                                      <div class="mb-3">
                                          <label  id="label-keterangan"for="formFile" class="form-label">Perihal</label>
                                          <input name="keterangan" class="form-control" type="text" aria-label="default input example" >
                                      </div>
                                  </div>
                              </div>
                            
                              <!-- tanggal pelaksanaan -->
                              <div class="card-header pb-0 p-3">
                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <label for="example-date-input" class="form-control-label">Tanggal Pelaksanaan</label>
                                    <input name="pel1" class="form-control" type="date" value="Masukkan Tanggal" id="example-date-input">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="example-date-input" class="form-control-label">Tanggal Selesai Pelaksanaan</label>
                                    <input name="pel2" class="form-control" type="date" value="Masukkan Tanggal" id="example-date-input">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- surat barang -->
                            <div class="barang" style="display: none;">
                                <div class="card-header pb-0 p-3">    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="formFile" class="form-label">Nama Barang</label>
                                            <input name="nb" class="form-control" type="text"  aria-label="default input example">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formFile" class="form-label">Jumlah Barang</label>
                                            <input name="jb" class="form-control" type="text" aria-label="default input example">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header pb-0 p-3">    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="formFile" class="form-label">Dari</label>
                                            <input name="dl" class="form-control" type="text"  aria-label="default input example">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formFile" class="form-label">Ke</label>
                                            <input name="kl" class="form-control" type="text" aria-label="default input example">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- file -->
                            <div class="file" style="display: none;">  
                              <div class="card-header pb-0 p-3">
                                  <div class="row">
                                      <div class="mb-3">
                                          <label id="label-file" for="formFile" class="form-label">Masukkan File (Ekstensi File Berupa PDF)</label>
                                          <input type="file" id="file" name="fl" class="form-control" aria-label="file example" >
                                          <div class="invalid-feedback">Example invalid form file feedback</div>
                                      </div>
                                  </div>
                              </div>
                            </div>

                            <br><br>
                            <div class="modal-footer">
                            <a href="./permohonansurat.php"><button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Kembali</button></a>
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
  
<!-- POP UP NOITIFIKASI YANG DIPANGGIL SESSION -->
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
    <?php if(@$_SESSION['uk']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal mengajukan permohonan surat ! ukuran file harus di bawah 5 mb',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['uk']); ?>
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['pdfuk']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal mengajukan permohonan surat ! Ekstensi file harus pdf dan ukuran di bawah 5 mb',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['pdfuk']); ?>
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
            if($('#jenis_surat').val() == 'Surat Tugas') {
                $('.tugas').show();
                $('.barang').hide();
                $('.file').show();
                $('#label-file').text("Upload Bukti Kegiatan (contoh: poster ) (Ekstensi File Berupa PDF)");
              }
            else if($('#jenis_surat').val() == 'Surat Perpindahan Barang Lab') {
                $('.tugas').hide();
                $('.barang').show();
                $('.file').show();
                $('#label-file').text("Upload File (Ekstensi File Berupa PDF)");
              }
            else {
                $('.tugas').hide();
                $('.barang').hide();
                $('.file').hide();
              }
        });
    </script>
</body>
</body>

</html>   