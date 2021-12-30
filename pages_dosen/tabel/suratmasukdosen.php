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
                <input type="hidden" name = "filterid" value = "12">
                <?php if ($_POST['filterid'] == 0 || $_POST['filterid'] == 2 || $_POST['filterid'] == 1 ) { ?>
               <button type = "submit" name = "filterall" class = "btn btn-outline-info">Lihat Semua</button>
               <?php } 
               else { ?>
               <button type = "submit" name = "filterall" class = "btn btn-info">Lihat Semua</button>
             <?php } ?>
               </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "0">
                <?php if ($_POST['filterid'] == 12 || $_POST['filterid'] == 2 || $_POST['filterid'] == 1 || $_POST['filterid'] == NULL  ) { ?>
               <button type = "submit" name = "filter0" class = "btn btn-outline-info">Belum Diproses</button>
               <?php } 
               else { ?>
             <button type = "submit" name = "filter0" class = "btn btn-info">Belum Diproses</button>
             <?php } ?>
            </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "1">
                <?php if ($_POST['filterid'] == 12 || $_POST['filterid'] == 2 || $_POST['filterid'] == 0 || $_POST['filterid'] == NULL  ) { ?>
               <button type = "submit" name = "filter1" class = "btn btn-outline-info">Ditolak</button>
               <?php } 
               else { ?>
              <button type = "submit" name = "filter1" class = "btn btn-info">Ditolak</button>
             <?php } ?>
            </form>
            <form action = "" method = "post">
                <input type="hidden" name = "filterid" value = "2">
                <?php if ($_POST['filterid'] == 12 || $_POST['filterid'] == 1 || $_POST['filterid'] == 0 || $_POST['filterid'] == NULL  ) { ?>
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
              
            
        <!-- Tabel dimulai -->
        <div class="table-responsive scrollbar-deep-purple bordered-deep-purple thin mt-0 pt-0" style = "height:390px" >
        <table class="table table-striped align-items-center mb-6 mt-0">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Status</th>
                <th class="text-center ps-2">Perihal</th>
                <th class="text-center">Proses</th>
                <th class="text-center">Waktu Upload</th>
                <th class="text-left ps-2"></th>  
              </tr>
            </thead>
            <tbody>
            <!-- tabel mahasiswa -->
            <?php
            include '../../_database/config.php'; //panggil setiap ingin koneksi ke data
            $no = 0;
            $no2 = $no++;
            $nama = $_SESSION['user'];

            $query = mysqli_query($koneksi, 'SELECT * FROM suratmahasiswa ORDER BY id_no DESC');

            while ($data = mysqli_fetch_array($query)) {
              $tujuan = $data['dosen1'];
              $tujuan2 = $data['dosen2'];
              
              if ($_SESSION['status'] == 2 && (($data['status_dosen1'] == 2 && ($tujuan2 == $nama)) || ($tujuan == $nama)  || ($data['dosen_tkk'] == $_SESSION['user'] && $_SESSION['status2'] == 1) ) ) {
                if (isset($_POST['filter0']) || isset($_POST['filter1']) || isset( $_POST['filter2'])) {
                  $idf = $_POST['filterid'];
                    if ($_SESSION['status'] == 2 && (($data['status_dosen1'] == $idf && $data['dosen1'] == $nama) || ($data['status_dosen1'] == 2 && $data['status_dosen2'] == $idf && $data['dosen2'] == $nama) || ($data['status_dosentkk'] == $idf))) { ?>
              
                <?php $id = $data['id_no'] ?>
                <tr>
                  <!-- no -->
                  <td class="text-center"><?php echo $no++ ?></td>
                  <!-- nama -->
               
                          <form action="../validasimhs.php" method="post">
                            <input type="hidden" name = "lokasi" value = "home">
                            <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                            <input type="hidden" name = "lokasi" value = "home">
                            <td style = "height:20px">
                              <h6 style = "height:35px" class="text-sm-left ps-1 "><button class="btn btn-light"><?php echo $data['nama'] ?></button></h6>
                            </td>
                          </form>

                       
                  <!-- status respon -->
                  <td>
                  <?php 
                           if (($data['status_dosen1'] == 0 || $data['status_dosen1'] == 1 || $data['status_dosen1'] == 2)  && $tujuan == $nama && ($tujuan == $tujuan2)) {?>
                            <?php if ($data['status_dosen1'] == 0) { 
                              echo "Menunggu Proses Anda Sebagai Dosbing dan Koor";
                              } 
                              else if ($data['status_dosen1'] == 1) { 
                              echo "Anda Menolak Sebagai Dosbing dan Koor"; }
                              else if ($data['status_dosen1'] == 2) {
                              echo "Anda Menyetujui Sebagai Dosbing dan Koor";
                              }
                            }
                          else if (($data['status_dosen1'] == 0 || $data['status_dosen1'] == 1 || $data['status_dosen1'] == 2)  && $tujuan == $nama && $nama != $tujuan2) {?>
                            <?php if ($data['status_dosen1'] == 0) { 
                              echo "Menunggu Proses Anda Sebagai Dosbing";
                              } 
                              else if ($data['status_dosen1'] == 1) { 
                              echo "Anda Menolak Sebagai Dosbing"; }
                              else if ($data['status_dosen1'] == 2) {
                              echo "Anda Menyetujui Sebagai Dosbing";
                              }
                            }
                            else if (($data['status_dosen2'] == 0 || $data['status_dosen2'] == 1 || $data['status_dosen2'] == 2)  && $tujuan2 == $nama && $tujuan != $tujuan2) {
                               if ($data['status_dosen2'] == 0) { 
                                echo "Menunggu Proses Anda Sebagai Dosen Koor";
                                } 
                                else if ($data['status_dosen2'] == 1) { 
                                echo "Anda Menolak Sebagai Dosen Koor"; }
                                else if ($data['status_dosen2'] == 2) {
                                echo "Anda Menyetujui Sebagai Dosen Koor";
                                }
                             }
                             else if (($data['status_dosen1'] == 9 || $data['status_dosen2'] == 9) && ($data['status_dosentkk'] == 0 || $data['status_dosentkk'] == 1 || $data['status_dosentkk'] == 2)  && $tujuan3 == $nama && $_SESSION['status2'] == 1) {
                              if ($data['status_dosentkk'] == 0) { 
                               echo "Menunggu Proses Anda Sebagai Dosen TKK";
                               } 
                               else if ($data['status_dosentkk'] == 1) { 
                               echo "Anda Menolak Sebagai Dosen TKK"; }
                               else if ($data['status_dosentkk'] == 2) {
                               echo "Anda Menyetujui Sebagai Dosen TKK";
                               }
                            }
                              ?>
                  </td>
                  <!-- perihal -->
                  <td>
                    <h6 class="text-left ps-1"><?php echo $data['perihal'] ?></h6>
                  </td>
                  <!-- status surat -->
            
                  <?php if (($data['status_dosen1'] == 0 && $tujuan == $nama) || ($data['status_dosen1'] == 2 && $data['status_dosen2'] == 0 && $tujuan2 == $nama) || ($data['status_dosentkk'] == 0 && $_SESSION['status2'] == 1)) { ?>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">Belum Diproses</span>
                    </td> <?php } else if (($data['status_dosen1'] == 1 && $data['dosen1'] == $_SESSION['user']) || ($data['status_dosen1'] == 2 && $data['status_dosen2'] == 1 && $data['dosen2'] == $_SESSION['user'] ) || ($data['status_dosentkk'] == 1 && $_SESSION['status2'] == 1)) { ?>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-danger">Ditolak</span>
                    </td> <?php } else if (($data['status_dosen1'] == 2 && $data['dosen1'] == $_SESSION['user'] && $data['dosen1'] != $data['dosen2'] ) || ($data['status_dosen1'] == 2 && $data['status_dosen2'] == 2 && $data['dosen2'] == $_SESSION['user'] ) || ($data['status_dosentkk'] == 2 && $_SESSION['status2'] == 1)) { ?>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Sudah Diproses</span>
                    </td> <?php } ?>
                  <!-- tanggal -->
                  <td class="text-center"><?php echo $data['tanggal'] ?></td>
                    </tr>
              <?php } } 
              
              else { ?>
                <tr>
                   <!-- no -->
                   <td class="text-center"><?php echo $no++ ?></td>
                  <!-- nama -->
                          <form action="../validasimhs.php" method="post">
                          <input type="hidden" name = "lokasi" value = "home">
                            <input name="id" value=<?php echo $data['id_no'] ?> type="hidden">
                            <td style = "height:20px">
                              <h6 style = "height:35px" class="text-sm-left ps-1 "><button class="btn btn-light"><?php echo $data['nama'] ?></button></h6>
                            </td>
                          </form>
                  <!-- status -->
                  <td>
                    <h6 class="text-left ps-1">Mahasiswa</h6>
                  </td>
                  <!-- perihal -->
                  <td>
                    <h6 class="text-left ps-1"><?php echo $data['perihal'] ?></h6>
                  </td>



                   <!-- status surat -->
            
                   <?php if (($data['status_dosen1'] == 0 && $data['dosen1'] == $_SESSION['user']) || ($data['status_dosen1'] == 2 && $data['status_dosen2'] == 0 && $data['dosen2'] == $_SESSION['user'] ) || ($data['status_dosentkk'] == 0 && $_SESSION['status2'] == 1)) { ?>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary" >Belum Diproses</span>
                    </td> <?php } else if (($data['status_dosen1'] == 1 && $data['dosen1'] == $_SESSION['user']) || ($data['status_dosen1'] == 2 && $data['status_dosen2'] == 1 && $data['dosen2'] == $_SESSION['user'] ) || ($data['status_dosentkk'] == 1 && $_SESSION['status2'] == 1)) { ?>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-danger" >Ditolak</span>
                    </td> <?php } else if (($data['status_dosen1'] == 2 && $data['dosen1'] == $_SESSION['user'] && $data['dosen1'] != $data['dosen2'] ) || ($data['status_dosen1'] == 2 && $data['status_dosen2'] == 2 && $data['dosen2'] == $_SESSION['user'] ) || ($data['status_dosentkk'] == 2 && $_SESSION['status2'] == 1)) { ?>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Sudah Diproses</span>
                    </td> <?php } ?>
                  <!-- tanggal -->
                  <td class="text-center"><?php echo $data['tanggal'] ?></td>
                    </tr>
              <?php } }  } ?>
          <?php if ($no == 1) { ?>  
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><h6 class="text-center"><br><br><br>BELUM ADA SURAT YANG PERLU DIVALIDASI</h6></td>
           <td></td>
           <td></td>
           <td></td>
           </tr>
            <?php } ?>
          </tbody>
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