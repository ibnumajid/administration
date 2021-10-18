<?php include('../_database/config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$mhs_nrp			= $_POST['mhs_nrp'];
			$password			= $_POST['password'];
			$mhs_nama			= $_POST['mhs_nama'];
			$mhs_alamat			= $_POST['mhs_alamat'];
			$mhs_angkatan		= $_POST['mhs_angkatan'];
			$mhs_status			= $_POST['mhs_status'];

			$cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE mhs_nrp='$mhs_nrp'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO mahasiswa(mhs_nrp, mhs_nama, mhs_alamat, mhs_angkatan, mhs_status) VALUES('$mhs_nrp', '$mhs_nama', '$mhs_alamat', '$mhs_angkatan','$mhs_status')") or die(mysqli_error($koneksi));
				$sql2 = mysqli_query($koneksi, "INSERT INTO masuk(user, pass,status ) VALUES('$mhs_nrp', '$password',3)") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="admin.php?page=tampil_mhs";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, NRP sudah terdaftar.</div>';
			}
		}
		?>

		<form action="admin.php?page=tambah_mhs" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NRP</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="mhs_nrp" class="form-control" size="4"  required>
				</div>
			</div>
			<div class="item form-group" >
				<label class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="password" class="form-control" size="4" value=1234  readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="mhs_nama" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="mhs_alamat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Angkatan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="mhs_angkatan" class="form-control" required>
				</div>
			</div>
			<div class="item form-group" hidden>
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="mhs_status" class="form-control" values =1 required>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
