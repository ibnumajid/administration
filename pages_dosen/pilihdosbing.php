<?php
session_start();

if ($_SESSION['user'] == '' || $_SESSION['status'] != 2) {
  header("location:../index.php");
}
// Form pengiriman informasi magang
include '../_database/config.php';
$sesnam = $_SESSION['user'];
$id = $_POST['id'];
$tabel = mysqli_query($koneksi, "SELECT * FROM permohonanpmb WHERE id_no = '$id' ");
$data = mysqli_fetch_array($tabel);


// Backend saat melakukan pembaharuan
if(isset($_POST['input'])) {

    $dosbing = $_POST['ds1'];
    $id = $_POST['id'];
  $query2 = mysqli_query($koneksi, "UPDATE permohonanpmb SET dosen1 = '$dosbing' where id_no = $id");
   $query3 =  mysqli_query($koneksi, "UPDATE permohonanpmb SET status_dosen1 = '2' where id_no = '$id' ");

if($query2 && $query3)
{
  ?><script><?php $_SESSION['sukses2'] = true;?></script> 
  <script>history.pushState({}, "", "")</script><?php
  header("location:datamagang.php");

}
else
{
  ?><script><?php $_SESSION['input'] = true;?></script> 
  <script>history.pushState({}, "", "")</script><?php
} } ?>


<!-- KIRIM SURAT -->
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
        
        <span class="ms-1 font-weight-bold">Sistem Administrasi Mahasiswa</span>
      </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">

<!-- Home -->
 <li class="nav-item">
     <a class="nav-link  " href="./dosen.php">
       <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
             <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
           </svg>
         </div>
         <span class="nav-link-text ms-1">Home</span>
       </a>
     </li>

     <?php if ($_SESSION['status2'] == 5) { ?>
        <!-- membuat satu bar navigasi khusus kadep -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Kadep</h6>
        </li>

         <!-- Pemberian mandat kadep -->
  <?php if($_SESSION['status2'] == '5'){ ?>
          <li class="nav-item">
            <a class="nav-link  " href="./kirimkadep.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Pengajuan Mandat </span>
            </a>
          </li>
          <?php } ?>

        
          
          <!--Validasi Surat-->
          <?php if ($_SESSION['status2'] == '5') {?>
          <li class="nav-item">
            <a class="nav-link  " href="./validasisurat2.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
            </a>
          </li>
          <?php } ?>

          <!-- Validasi Surat Dosen -->
          <?php if ($_SESSION['status2'] == '5') {?>
          <li class="nav-item">
            <a class="nav-link  " href="./validasidsn.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Dosen</span>
            </a>
          </li>
          <?php } ?>

                   <!-- Validasi Surat Tendik -->
                   <?php if ($_SESSION['status2'] == '5') {?>
          <li class="nav-item">
            <a class="nav-link  " href="./validasitndk.php">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Validasi Surat Tendik</span>
            </a>
          </li>

          <?php } ?>


        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Navigasi Dosen</h6>
        </li>
        <?php } ?>
   
     <!-- permohonan surat  -->
   <li class="nav-item">
     <a class="nav-link  " href="./permohonandosen.php">
       <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
           <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
         </svg>
       </div>
       <span class="nav-link-text ms-1">Permohonan Surat</span>
     </a>
   </li>

    <!--Validasi Surat-->
    <li class="nav-item">
          <a class="nav-link  " href="./bimbingansurat.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Bimbingan Proposal</span>
          </a>
        </li>
   
   <!--Validasi Surat-->
   <li class="nav-item">
     <a class="nav-link  " href="./validasisurat.php">
         <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
             <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
           </svg>
         </div>
       <span class="nav-link-text ms-1">Validasi Surat Mahasiswa</span>
     </a>
   </li>

   <!-- Validasi Surat Dosen -->
   <?php if ($_SESSION['status2'] == '5') {?>
     <li class="nav-item">
       <a class="nav-link  " href="./validasidsn.php">
         <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
             <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
           </svg>
         </div>
         <span class="nav-link-text ms-1">Validasi Surat Dosen</span>
       </a>
     </li>
     <?php } ?>

         <!-- Validasi Surat Dosen -->
         <?php if ($_SESSION['status2'] == '5') {?>
     <li class="nav-item">
       <a class="nav-link  " href="./validasitndk.php">
         <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
             <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
           </svg>
         </div>
         <span class="nav-link-text ms-1">Validasi Surat Tendik</span>
       </a>
     </li>

     <?php } ?>
     
      <!-- REKAP SURAT -->
      <?php if($_SESSION['status2'] == '2'){ ?>
    <li class="nav-item">
     <a class="nav-link  active" href="./datamagang.php">
       <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
             <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
             <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
           </svg>
       </div>
         <span class="nav-link-text ms-1">Data Magang</span>
       </a>
     </li>
   <?php } ?>

<!-- REKAP SURAT -->
<?php if($_SESSION['status'] !== '5'){ ?>
     <li class="nav-item"> 
       <a class="nav-link  " href="./rekapmndt.php">
         <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
             <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
           </svg>
         </div>
         <span class="nav-link-text ms-1">Mandat Kadep</span>
       </a>
     </li>  
     <?php } ?>


<!-- REKAP SURAT -->
<?php if($_SESSION['status'] !== '5'){ ?>
     <li class="nav-item"> 
       <a class="nav-link  " href="./rekapdsn.php">
         <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
             <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
           </svg>
         </div>
         <span class="nav-link-text ms-1">Rekap Surat</span>
       </a>
     </li>  
     <?php } ?>
  

   

   
 <!--SURAT MASUK KADEP -->
 <?php if($_SESSION['status2'] == '5'){ ?>
 </li> 
  <li class="nav-item"> 
   <a class="nav-link  " href="./suratmskkdp.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Permohonan Pembimbing</li>
          </ol>
          <h5 class="font-weight-bolder mb-0">Permohonan Pembimbing</h5>
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
            <!-- notif -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
                <!-- php surat masuk kadep -->
                <?php 
                include '../_database/config.php';
                if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 4) {
                  $query_kadep = mysqli_query($koneksi, 
                  'SELECT * FROM suratmahasiswa WHERE status_kadep = 2 && notif = 3 
                  UNION SELECT * FROM suratdosen WHERE status_kadep = 2 && notif = 1
                  UNION SELECT * FROM surattendik  WHERE status_kadep = 2 && notif = 1 ORDER BY id_no DESC' );
                  $data = mysqli_num_rows($query_kadep); ?>

                  <span class="primary"><?php echo $data ?></span>
                <?php } ?>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-0 py-0 me-sm-n3" aria-labelledby="dropdownMenuButton">
                <div class="card example-1 scrollbar-deep-purple bordered-deep-purple thin" style = "height:200px">
                  <!-- surat masuk kadep dari mahasiswa, dosen, tendik -->
                  <?php 
                  include '../_database/config.php';
                  if ($_SESSION['status2'] == 1 && $_SESSION['status'] == 4) {
                    $query = mysqli_query($koneksi, 
                    'SELECT * FROM suratmahasiswa WHERE status_kadep = 2 && notif = 3 
                    UNION SELECT * FROM suratdosen WHERE status_kadep = 2 && notif = 1
                    UNION SELECT * FROM surattendik  WHERE status_kadep = 2 && notif = 1 ORDER BY tanggal DESC' );
                    while ($data = mysqli_fetch_array($query)) { ?>
                  <form action="" method = "post">
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="">
                        <div class="d-flex py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <?php if ($data['status'] == 3) { ?>
                            <button type="submit" name="mhsw" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                <span class="font-weight"><?php echo $data['nama']; ?></span>
                              </h6>
                            </button>
                            <!-- Menginput id surat -->
                            <input name="id3" value=<?php echo $data['id_no'] ?> type="hidden">
                            <p class="text-xs text-left ps-0 text-secondary mb-0">
                              <?php echo $data['tanggal']; ?>
                            </p>
                            <?php } else if ($data['status'] == 2) { ?>
                            <button type="submit" name="dsn" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                <span class="font-weight"><?php echo $data['nama']; ?></span>
                              </h6>
                            </button>
                            <!-- Menginput id surat -->
                            <input name="id2" value=<?php echo $data['id_no'] ?> type="hidden">
                            <p class="text-xs text-left ps-0 text-secondary mb-0">
                              <?php echo $data['tanggal']; ?>
                            </p>
                            <?php } else if ($data['status'] == 4 ) { ?>
                            <button type="submit" name="tndk" class="border-0 btn btn-outline-dark btn-sm px-0 mb-0 mt-1">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold"><?php echo $data['perihal']; ?></span>
                                <span class="font-weight"><?php echo $data['nama']; ?></span>
                              </h6>
                            </button>
                            <!-- Menginput id surat -->
                            <input name="id4" value=<?php echo $data['id_no'] ?> type="hidden">
                            <p class="text-xs text-left ps-0 text-secondary mb-0">
                              <?php echo $data['tanggal']; ?>
                            </p>
                            <?php } } } ?>
                          </div>
                        </div>
                      </a>
                    </li>
                  </form>
                </div>
              </ul>
            </li>
            <li class="nav-item px-2 d-flex align-items-center">
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
      <div class="col">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Form Informasi Tempat Magang</h6>
                </div>
                
                 
              </div>
            </div>

           

            <form action="" method="post">
                <div>
            <div class="form-group d-flex my-0">
                <!-- Nama Mahasiswa -->
            <div class="card-header pb-0 p-3" style = "width:400px">
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label">Nama Mahasiswa</label>
                <label name="nm" class="form-control" aria-label="default input example"><?php echo $data['nama'] ?></label>
                </div>
              </div>
            </div>
            <!-- NRP Mahasiswa -->
            <div class="card-header pb-0 p-3" style = "width:400px">
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label" >NRP Mahasiswa</label>
                <label name="nrp" class="form-control" aria-label="default input example"><?php echo $data['id_nrp'] ?></label>
                </div>
              </div>
            </div>
            <!-- Angkatan Mahasiswa -->
            <div class="card-header pb-0 p-3 mt-0" style = "width:400px">
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label">Angkatan</label>
                <label name="angkatan" class="form-control" aria-label="default input example"><?php echo $data['angkatan'] ?></label>
                </div>
              </div>
            </div>
                   </div>
            <!-- Asal Lab Mahasiswa -->
            <div class="card-header pb-0 pt-0 p-3 my-0">
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label">Asal Lab</label>
                <label name="nl" class="form-control" aria-label="default input example"><?php echo $data['nama_lab'] ?></label>
                    </div>
              </div>
            </div>
            <!-- Nama Tempat Magang -->
            <div class="form-group d-flex my-0">
            <div class="card-header pb-0 p-3" style = "width:550px" >
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label">Nama Tempat Magang</label>
                <label name="nl" class="form-control" aria-label="default input example"><?php echo $data['nama_perusahaan'] ?></label>
                    </div>
                    </div>
              </div>
            
            <!-- Alamat Perusahaan -->
            <div class="card-header pb-0 p-3" style = "width:550px">
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label">Alamat Perusahaan</label>
                <label name="nl" class="form-control" aria-label="default input example"><?php echo $data['alamat_perusahaan'] ?></label>
                    </div>
                </div>
              </div>
              </div>
            
              <!-- Pilih Dosen Pembimbing -->
              <div class="card-header pb-0 p-3 my-0" style = "width:550px">
              <div class="row">
                <div class="mb-0">
                <label for="formFile" class="form-label">Dosen Pembimbing</label>
                <select name="ds1"  class="form-select" aria-label="Default select example" >
                <option value="Tidak Memerlukan Dosen Pembimbing" selected>Pilih Dosen Pembimbing</option>
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
              


            


                  <div class="d-flex justify-content-center mt-3">
                    <input type="hidden" name = "id" value = "<?php echo $id ?>" >
                        <button type="submite" name="input" class="btn bg-gradient-info">Kirim</button>
                        
                        </div>
                        </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
    <?php if(@$_SESSION['sukses3']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil Membatalkan Pengiriman',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['sukses3']); ?>
    <?php endif; ?>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['input']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal Diajukan',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['input']); ?>
    <?php endif; ?>

</html>