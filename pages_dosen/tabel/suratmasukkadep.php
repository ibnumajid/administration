<?php
session_start();
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
  <!-- CSS scroll -->
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
<!-- tabel -->
<!-- kepala tabel -->
<body class="g-sidenav-show  bg-gray-100">

          <!-- Filter surat masuk -->
          <div class ="fixed-top form-group d-flex justify-content-around mt-4 my-0 md-0">

          <form action = "" method = "post">
                <input type="hidden" name = "filteridk" value = "12">
                <?php if ($_POST['filteridk'] == 0 || $_POST['filteridk'] == 2 || $_POST['filteridk'] == 1 ) { ?>
               <button type = "submit" name = "filterall" class = "btn btn-outline-info">Lihat Semua</button>
               <?php } 
               else { ?>
               <button type = "submit" name = "filterall" class = "btn btn-info">Lihat Semua</button>
             <?php } ?>
               </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filteridk" value = "0">
                <?php if ($_POST['filteridk'] == 12 || $_POST['filteridk'] == 2 || $_POST['filteridk'] == 1 || $_POST['filteridk'] == NULL  ) { ?>
               <button type = "submit" name = "filter0" class = "btn btn-outline-info">Belum Diproses</button>
               <?php } 
               else { ?>
             <button type = "submit" name = "filter0" class = "btn btn-info">Belum Diproses</button>
             <?php } ?>
            </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filteridk" value = "1">
                <?php if ($_POST['filteridk'] == 12 || $_POST['filteridk'] == 2 || $_POST['filteridk'] == 0 || $_POST['filteridk'] == NULL  ) { ?>
               <button type = "submit" name = "filter1" class = "btn btn-outline-info">Ditolak</button>
               <?php } 
               else { ?>
              <button type = "submit" name = "filter1" class = "btn btn-info">Ditolak</button>
             <?php } ?>
            </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filteridk" value = "2">
                <?php if ($_POST['filteridk'] == 12 || $_POST['filteridk'] == 1 || $_POST['filteridk'] == 0 || $_POST['filteridk'] == NULL  ) { ?>
               <button type = "submit" name = "filter2" class = "btn btn-outline-info">Disetujui</button>
               <?php } 
               else { ?>
              <button type = "submit" name = "filter2" class = "btn btn-info">Disetujui</button>
             <?php } ?>
            </form>
        </div>
        <br>
        <br>
        <br>
              
            
     <!-- Tabel penampil surat -->
     <div class="table-responsive p-0 scrollbar-deep-purple bordered-deep-purple thin mt-0 mb-0 pt-0 mt-0 py-0 my-0" style = "height:375px" >
            <table class="table table-striped align-items-center mb-6 mt-0 pt-0">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-left ps-2">Nama</th>
                  <th class="text-left ps-2">Status</th>
                  <th class="text-center ps-2">Perihal</th>
                  <th>Persetujuan Kadep</th>
                  <th class="text-center">Waktu Upload</th>
                  <th class="text-left ps-2"></th>
                </tr>
              </thead>
              
              <!-- tabel mahasiswa -->
              <?php
                include '../../_database/config.php'; //panggil setiap ingin koneksi ke data
                $nama = $_SESSION['user'];
                $no = 0;
                $no2 = $no++;
                $query = mysqli_query($koneksi, 'SELECT * FROM suratmahasiswa UNION SELECT * FROM suratdosen UNION SELECT * FROM surattendik   ORDER BY tanggal DESC' );
                
                while ($data = mysqli_fetch_array($query)) {
                  if ($data['status_dosen2'] == 2 || $data['status_dosentkk'] == 2 || $data['status'] == 2 || $data['status'] == 4 ) {
                    if (isset($_POST['filter0'])  || isset( $_POST['filter1']) || isset( $_POST['filter2'])) {
                   $idfk = $_POST['filteridk'];
                   if ($data['status_kadep'] == $idfk) { ?>
           
           <tr>
             <!-- no -->
             <td class="text-center"><?php echo $no++ ?></td>
             <!-- nama -->
             <?php if ($data['status'] == 3) { ?>
            <form action="../validasimhs.php" method = "post">
             <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
             <input type="hidden" name = "lokasi" value = "home">
             <td style = "height:20px">
               <h6 style = "height:20px" class="text-sm-left"><button style ="width:250px" class="btn btn-light btn-sm"><?php echo $data['nama'] ?></button></h6>
             </td>
             </form>
             <?php }
             else if ($data['status'] == 2) { ?>
               <form action="../validasidosen.php" method = "post">
                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                <input type="hidden" name = "lokasi" value = "home">
                <td style = "height:20px">
                  <h6 style = "height:20px" class="text-sm-left"><button style ="width:250px" class="btn btn-light btn-sm"><?php echo $data['nama'] ?></button></h6>
                </td>
                </form> 
                <?php } 
             else if ($data['status'] == 4) { ?>
                <form action="../validasitendik.php" method = "post">
                <input type="hidden" name = "lokasi" value = "home">
                <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                <td style = "height:20px">
                  <h6 style = "height:20px" class="text-sm-left"><button style ="width:250px" class="btn btn-light btn-sm"><?php echo $data['nama'] ?></button></h6>
                </td>
                </form>
                <?php } ?>

       
             <!-- status -->
             <?php if($data['status'] == 3) { ?>
             <td> <h6 class="text-left ps-1">Mahasiswa</h6></td>
             <?php } 
             else if ($data['status'] == 2) { ?>
              <td> <h6 class="text-left ps-1">Dosen</h6></td>
             <?php } 
             else if ($data['status'] == 4 ){ ?>
              <td> <h6 class="text-left ps-1">Tendik</h6></td>
              <?php } ?> 
             <!-- perihal -->
             <td> <h6 class="text-left ps-1"><?php echo $data['perihal'] ?></h6></td>
             <!-- status surat -->
             <?php if ($data['status_kadep'] == 0) {?>
             <td class="align-middle text-center text-sm">
               <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_kadep'] ?>">Belum Diproses</span>
             </td> <?php } 
                 else if ($data['status_kadep'] == 1) {?>
             <td class="align-middle text-center text-sm">
               <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_kadep'] ?>">Ditolak</span>
             </td> <?php }
                 else if ($data['status_kadep'] == 2) {?>
             <td class="align-middle text-center text-sm">
               <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_kadep'] ?>">Sudah Diproses</span>
             </td> <?php } ?>
             <!-- tanggal -->
             <td class="text-center"><?php echo $data['tanggal'] ?></td>
             <!-- button untuk melihat halaman validasi-->
              <?php if($data['status'] == 3) { ?>
                <td class="align-middle">
               <a  href="validasisurat2.php" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                 <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
               </a>
             </td>
             <?php } 
             else if ($data['status'] == 2) { ?>
                <td class="align-middle">
               <a  href="validasidsn.php" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                 <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
               </a>
             </td>
             <?php } 
             else if ($data['status'] == 4 ){ ?>
                <td class="align-middle">
               <a  href="validasitndk.php" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                 <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
               </a>
             </td>
              <?php } ?>
            
             </tr>
             <?php } } 
             else { ?>
               <tr>
               <!-- no -->
               <td class="text-center"><?php echo $no++ ?></td>
               <!-- nama -->
               <?php if ($data['status'] == 3) { ?>
              <form action="../halamanbimbingan.php" method = "post">
               <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
               <input type="hidden" name = "lokasi" value = "home">
               <td style = "height:20px">
                 <h6 style = "height:20px" class="text-sm-left"><button style ="width:250px" class="btn btn-light btn-sm"><?php echo $data['nama'] ?></button></h6>
               </td>
               </form>
               <?php }
               else if ($data['status'] == 2) { ?>
                 <form action="../validasidosen.php" method = "post">
                  <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                  <input type="hidden" name = "lokasi" value = "home">
                  <td style = "height:20px">
                    <h6 style = "height:20px" class="text-sm-left"><button style ="width:250px" class="btn btn-light btn-sm"><?php echo $data['nama'] ?></button></h6>
                  </td>
                  </form> 
                  <?php } 
               else if ($data['status'] == 4) { ?>
                  <form action="../validasitendik.php" method = "post">
                  <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                  <input type="hidden" name = "lokasi" value = "home">
                  <td style = "height:20px">
                    <h6 style = "height:20px" class="text-sm-left"><button style ="width:250px" class="btn btn-light btn-sm"><?php echo $data['nama'] ?></button></h6>
                  </td>
                  </form>
                  <?php } ?>

         
               <!-- status -->
               <?php if($data['status'] == 3) { ?>
               <td> <h6 class="text-left ps-1">Mahasiswa</h6></td>
               <?php } 
               else if ($data['status'] == 2) { ?>
                <td> <h6 class="text-left ps-1">Dosen</h6></td>
               <?php } 
               else if ($data['status'] == 4 ){ ?>
                <td> <h6 class="text-left ps-1">Tendik</h6></td>
                <?php } ?> 
               <!-- perihal -->
               <td> <h6 class="text-left ps-1"><?php echo $data['perihal'] ?></h6></td>
               <!-- status surat -->
               <?php if ($data['status_kadep'] == 0) {?>
               <td class="align-middle text-center text-sm">
                 <span class="badge badge-sm bg-gradient-secondary" value="<?php echo $data['status_kadep'] ?>">Belum Diproses</span>
               </td> <?php } 
                   else if ($data['status_kadep'] == 1) {?>
               <td class="align-middle text-center text-sm">
                 <span class="badge badge-sm bg-gradient-danger" value="<?php echo $data['status_kadep'] ?>">Ditolak</span>
               </td> <?php }
                   else if ($data['status_kadep'] == 2) {?>
               <td class="align-middle text-center text-sm">
                 <span class="badge badge-sm bg-gradient-success" value="<?php echo $data['status_kadep'] ?>">Sudah Diproses</span>
               </td> <?php } ?>
               <!-- tanggal -->
               <td class="text-center"><?php echo $data['tanggal'] ?></td>
              <!-- button untuk melihat halaman validasi-->
              <?php if($data['status'] == 3) { ?>
                <td class="align-middle">
               <a  href="validasisurat2.php" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                 <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
               </a>
             </td>
             <?php } 
             else if ($data['status'] == 2) { ?>
                <td class="align-middle">
               <a  href="validasidsn.php" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                 <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
               </a>
             </td>
             <?php } 
             else if ($data['status'] == 4 ){ ?>
                <td class="align-middle">
               <a  href="validasitndk.php" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                 <button type="button" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_no'] ?>">Lihat</button>
               </a>
             </td>
              <?php } ?>

             <?php } }
            
             
            if ($no == 1) { ?>

              <td></td>
              <td></td>
              <td></td>
          <td class = "text-center"><h6 class = "font-weight-bold">BELUM ADA SURAT YANG DIAJUKAN</h6></td>
          <td></td>
          <td></td>
          <td></td>
          <?php }
        
        } ?>
              
            </table>
          </div>
        
   
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
    <!-- notif gagal mengajukan -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(@$_SESSION['input']) : ?>
        <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Gagal Di Ajukan',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
    <?php unset($_SESSION['input']); ?>
    <?php endif; ?>
</body>

</html>