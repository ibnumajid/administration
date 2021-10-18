<?php include('../_database/config.php'); ?>

		<center><font size="6">Tambah Data Tendik</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$tendik_nim			= $_POST['tendik_nim']; 
			$tendik_nama			= $_POST['tendik_nama'];
			$tendik_alamat			= $_POST['tendik_alamat'];
			$tendik_thn_masuk		= $_POST['tendik_thn_masuk'];
			$tendik_status			= $_POST['tendik_status'];
			$pass				= $_POST['password'];

			$cek = mysqli_query($koneksi, "SELECT * FROM tendik WHERE tendik_nim ='$tendik_nim'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO tendik(tendik_nim, tendik_nama, tendik_alamat, tendik_thn_masuk, tendik_status) VALUES('$tendik_nim', '$tendik_nama', '$tendik_alamat', '$tendik_thn_masuk','$tendik_status')") or die(mysqli_error($koneksi));
				$sql2 = mysqli_query($koneksi, "INSERT INTO masuk(user, pass,status ) VALUES('$tendik_nim', '$pass',4)") or die(mysqli_error($koneksi));
				
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="admin.php?page=tampil_tendik";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, nim sudah terdaftar.</div>';
			}
		}
		?>

		<form action="admin.php?page=tambah_tendik" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIP</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="number" name="tendik_nim" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group" hidden>
				<label class="col-form-label col-md-3 col-sm-3 label-align">NRP</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="password" class="form-control" size="4" value=1234 required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="tendik_nama" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="tendik_alamat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Masuk</label>
				<div class="col-md-6 col-sm-6">
					<input type="number" name="tendik_thn_masuk" class="form-control" required>
				</div>
			</div>
			<div class="item form-group" hidden>
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6" >
					<input type="text" name="tendik_status" class="form-control" value="1">
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
