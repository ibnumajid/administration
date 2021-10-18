<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['Id_mtr'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$Id_mtr = $_GET['Id_mtr'];

			//query ke database SELECT tabel mtr berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM mtr WHERE Id_mtr='$Id_mtr'") or die(mysqli_error($koneksi));

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
			$Id_mtr		 = $_POST['Id_mtr'];
			$Nama_Perusahaan		 = $_POST['Nama_Perusahaan'];
			$Tahun		 = $_POST['Tahun'];
			$Alamat		 = $_POST['Alamat'];
			$Status		 = $_POST['Status'];			

			$sql = mysqli_query($koneksi, "UPDATE mtr SET Nama_Perusahaan='$Nama_Perusahaan', Tahun='$Tahun',Alamat='$Alamat', Status='$Status' WHERE Id_mtr='$Id_mtr'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="admin.php?page=tampil_mtr";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="admin.php?page=edit_mtr&Id_mtr=<?php echo $data['Id_mtr']; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Id_mtr</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Id_mtr" class="form-control" size="4" value="<?php echo $data['Id_mtr']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama mtr</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_Perusahaan" class="form-control" value="<?php echo $data['Nama_Perusahaan']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tahun</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Tahun" class="form-control" value="<?php echo $data['Tahun']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat" class="form-control" value="<?php echo $data['Alamat']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6">
					<select name="Status" class="form-control" required>
						<option value="">Status</option>
						<option value="0" <?php if($data['Status'] == '0'){ echo 'selected'; } ?>>NonAktif</option>
						<option value="1" <?php if($data['Status'] == '1'){ echo 'selected'; } ?>>Aktif</option>
						<option value="2" <?php if($data['Status'] == '2'){ echo 'selected'; } ?>>Alumni</option>
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
					<a href="admin.php?page=tampil_mtr" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
