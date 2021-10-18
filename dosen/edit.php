<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data Dosen</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['Nim'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$Nim = $_GET['Nim'];

			//query ke database SELECT tabel dsn berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM dosen WHERE dsn_nip='$Nim'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$dsn_nip		 = $_POST['dsn_nip'];
			$dsn_nama		 = $_POST['dsn_nama'];
			$dsn_status		 = $_POST['dsn_status'];
			$dsn_alamat		 = $_POST['dsn_alamat'];	
			$dsn_thn_masuk	 = $_POST['dsn_thn_masuk'];			
			$jabatan		 = $_POST['Jabatan'];			

			$sql = mysqli_query($koneksi, "UPDATE dosen SET dsn_nama='$dsn_nama',dsn_thn_masuk='$dsn_thn_masuk', dsn_status='$dsn_status', dsn_alamat='$dsn_alamat',Jabatan='$jabatan' WHERE dsn_nip='$dsn_nip'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="admin.php?page=tampil_dsn";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="admin.php?page=edit_dsn&Nim=<?php echo $data['dsn_nip']; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nim</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="dsn_nip" class="form-control" size="4" value="<?php echo $data['dsn_nip']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama dsn</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="dsn_nama" class="form-control" value="<?php echo $data['dsn_nama']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Password </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="pass" class="form-control"  required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="dsn_alamat" class="form-control" value="<?php echo $data['dsn_alamat']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Masuk</label>
				<div class="col-md-6 col-sm-6">
					<input type="number" name="dsn_thn_masuk" class="form-control" value="<?php echo $data['dsn_thn_masuk']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jabatan</label>
				<div class="col-md-6 col-sm-6">
					<select name="Jabatan" class="form-control" required>
						<option value="">Jabatan</option>
						<option value=0 <?php if($data['Jabatan'] == '0'){ echo 'selected'; } ?>>Non Jabatan</option>
						<option value=1 <?php if($data['Jabatan'] == '1'){ echo 'selected'; } ?>>Kadep</option>
						<option value=2 <?php if($data['Jabatan'] == '2'){ echo 'selected'; } ?>>Administrasi Persuratan</option>
						<option value=3 <?php if($data['Jabatan'] == '3'){ echo 'selected'; } ?>>Administrasi Keuangan</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6">
					<select name="dsn_status" class="form-control" required>
						<option value="">Status</option>
						<option value="0" <?php if($data['dsn_status'] == '0'){ echo 'selected'; } ?>>NonAktif</option>
						<option value="1" <?php if($data['dsn_status'] == '1'){ echo 'selected'; } ?>>Aktif</option>
						<option value="2" <?php if($data['dsn_status'] == '2'){ echo 'selected'; } ?>>Alumni</option>
					</select>
				</div>
			</div>
			<!-- <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Laki-Laki" <?php if($data['Jenis_Kelamin'] == 'Laki-Laki'){ echo 'checked'; } ?> required>Laki-Laki
						</label>
						<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Perempuan" <?php if($data['Jenis_Kelamin'] == 'Perempuan'){ echo 'checked'; } ?> required>Perempuan
						</label>
					</div>
				</div>
			</div> -->
			
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="admin.php?page=tampil_dsn" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
