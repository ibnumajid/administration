<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data Tendik</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['Nim'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$Nim = $_GET['Nim'];

			//query ke database SELECT tabel tendik berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM tendik WHERE tendik_nim='$Nim'") or die(mysqli_error($koneksi));

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
			$tendik_nim		 = $_POST['tendik_nim'];
			$tendik_nama		 = $_POST['tendik_nama'];
			$tendik_status		 = $_POST['tendik_status'];
			$tendik_alamat		 = $_POST['tendik_alamat'];	
			$tendik_thn_masuk		 = $_POST['tendik_thn_masuk'];			
			$jabatan		 = $_POST['jabatan'];			

			$sql = mysqli_query($koneksi, "UPDATE tendik SET tendik_nama='$tendik_nama', tendik_status='$tendik_status', tendik_alamat='$tendik_alamat',Jabatan='$jabatan' WHERE tendik_nim='$tendik_nim'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="admin.php?page=tampil_tendik";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="admin.php?page=edit_tendik&Nim=<?php echo $data['tendik_nim']; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nim</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="tendik_nim" class="form-control" size="4" value="<?php echo $data['tendik_nim']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama tendik</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="tendik_nama" class="form-control" value="<?php echo $data['tendik_nama']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="tendik_alamat" class="form-control" value="<?php echo $data['tendik_alamat']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Masuk</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="tendik_thn_masuk" class="form-control" value="<?php echo $data['tendik_thn_masuk']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jabatan</label>
				<div class="col-md-6 col-sm-6">
					<select name="tendik_status" class="form-control" required>
						<option value="">Jabatan</option>
						<option value="0" <?php if($data['Jabatan'] == '0'){ echo 'selected'; } ?>>Non Jabatan</option>
						<option value="1" <?php if($data['Jabatan'] == '1'){ echo 'selected'; } ?>>Kadep</option>
						<option value="2" <?php if($data['Jabatan'] == '2'){ echo 'selected'; } ?>>Administrasi Persuratan</option>
						<option value="3" <?php if($data['Jabatan'] == '3'){ echo 'selected'; } ?>>Administrasi Keuangan</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6">
					<select name="tendik_status" class="form-control" required>
						<option value="">Status</option>
						<option value="0" <?php if($data['tendik_status'] == '0'){ echo 'selected'; } ?>>NonAktif</option>
						<option value="1" <?php if($data['tendik_status'] == '1'){ echo 'selected'; } ?>>Aktif</option>
						<option value="2" <?php if($data['tendik_status'] == '2'){ echo 'selected'; } ?>>Alumni</option>
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
					<a href="admin.php?page=tampil_tendik" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
