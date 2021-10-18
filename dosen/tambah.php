<?php include('../_database/config.php'); ?>

		<center><font size="6">Tambah Data Dosen</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$dsn_nim			= $_POST['dsn_nim'];
			$dsn_nama			= $_POST['dsn_nama'];
			$dsn_alamat			= $_POST['dsn_alamat'];
			$dsn_thn_masuk		= $_POST['dsn_thn_masuk'];
			$dsn_status			= $_POST['dsn_status'];
			$pass				= $_POST['pass'];

			$cek = mysqli_query($koneksi, "SELECT * FROM dosen WHERE dsn_nip ='$dsn_nim'") or die(mysqli_error($koneksi));
			

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO dosen(dsn_nip, dsn_nama, dsn_alamat, dsn_thn_masuk, dsn_status) VALUES('$dsn_nim', '$dsn_nama', '$dsn_alamat', '$dsn_thn_masuk','$dsn_status')") or die(mysqli_error($koneksi));
				$sql2 = mysqli_query($koneksi, "INSERT INTO masuk(user, pass, status ) VALUES('$dsn_nim', '$pass',2)") or die(mysqli_error($koneksi));
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="admin.php?page=tampil_dsn";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, nim sudah terdaftar.</div>';
			}
		}
		?>

		<form action="admin.php?page=tambah_dsn" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIM</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="number" name="dsn_nim" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Password </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="pass" class="form-control" value =1234 readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="dsn_nama" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="dsn_alamat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Masuk</label>
				<div class="col-md-6 col-sm-6">
					<input type="number" name="dsn_thn_masuk" class="form-control" required>
				</div>
			</div>
			<div class="item form-group" hidden>
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6" >
					<input type="text" name="dsn_status" class="form-control" value="1">
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
