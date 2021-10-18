<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Anda</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['Nim'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$Nim = $_GET['Nim'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE mhs_nrp='$Nim'") or die(mysqli_error($koneksi));

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
			$mhs_nrp		 = $_POST['mhs_nrp'];
			$mhs_nama		 = $_POST['mhs_nama'];
			$mhs_nohp		 = $_POST['mhs_nohp'];
			$mhs_alamat		 = $_POST['mhs_alamat'];
			$mhs_email		 = $_POST['mhs_email'];			

			$sql = mysqli_query($koneksi, "UPDATE mahasiswa SET mhs_nama='$mhs_nama', mhs_status='$mhs_status', mhs_alamat='$mhs_alamat' WHERE mhs_nrp='$mhs_nrp'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="mahasiswa/";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="admin.php?page=edit_mhs&Nim=<?php echo $data['mhs_nrp']; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NRP</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="pemohon" class="form-control" size="4" value=<?=$_SESSION['nrp']?> readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="pemohon" class="form-control" size="4" value="<?=$_SESSION['user']?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">No HP</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="mhs_alamat" class="form-control" value="<?php echo $data['mhs_alamat']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="mhs_alamat" class="form-control" value="<?php echo $data['mhs_alamat']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="mhs_alamat" class="form-control" value="<?php echo $data['mhs_alamat']; ?>" required>
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
					<a href="#" class="btn btn-warning">Batal</a>
				</div>
			</div>
		</form>
	</div>
