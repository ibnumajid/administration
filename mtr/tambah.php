<?php include('../_database/config.php'); ?>

		<center><font size="6">Tambah Data Mitra Industri</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$Nama_Perusahaan			= $_POST['Nama_Perusahaan'];
			$Tahun			= $_POST['Tahun'];
			$Alamat			= $_POST['Alamat'];
			$Status		= $_POST['Status'];
			
			$cek = mysqli_query($koneksi, "SELECT * FROM mtr WHERE Nama_Perusahaan ='$Nama_Perusahaan'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO mtr(Nama_Perusahaan, Tahun, Alamat, Status) VALUES('$Nama_Perusahaan', '$Tahun', '$Alamat', '$Status')") or die(mysqli_error($koneksi));
				
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="admin.php?page=tampil_mtr";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, Perusahaan sudah terdaftar.</div>';
			}
		}
		?>

		<form action="admin.php?page=tambah_mtr" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Perusahaan</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Nama_Perusahaan" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tahun </label>
				<div class="col-md-6 col-sm-6">
					<input type="number" name="Tahun" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat" class="form-control" required>
				</div>
			</div>
			
			<div class="item form-group" hidden>
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6" >
					<input type="text" name="Status" class="form-control" value="1">
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
