<?php include('../_database/config.php'); ?>

		<center><font size="6">Tambah Surat</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$pemohon			= $_POST['pemohon'];
			$keperluan			= $_POST['keperluan'];
			$Status				= $_POST['Status'];
			//$No_Surat			= $_FILES['myfile']['name'];
			$File_Surat			= $_FILES['myfile']['name'];
			$Data				= $_FILES['myfile']['tmp_name'];
			
			$folder				= '\Upload';
			$upload				= move_uploaded_file($Data, $folder.$File_Surat);
			
			$sql = mysqli_query($koneksi, "INSERT INTO persuratan(pemohon, keperluan, Status, File_Surat, Data) VALUES('$pemohon', '$keperluan', '$Status', '$File_Surat', '$upload')") or die(mysqli_error($koneksi));
				

			if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="dosen/administrasi/tampil_dana.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}
		?>

		<form action="dosen.php?page=tambah_pengajuan_dana" method="post" enctype="multipart/form-data">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIP Pemohon</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="pemohon" class="form-control" size="4" value=<?=$_SESSION['NIP']?> readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Pemohon</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="pemohon" class="form-control" size="4" value=<?=$_SESSION['user']?> readonly required>
				</div>
			</div>
			<div class="item form-group" >
				<label class="col-form-label col-md-3 col-sm-3 label-align">Keperluan</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="keperluan" class="form-control" size="4"  required>
				</div>
			</div>
			<div class="item form-group" >
				<label class="col-form-label col-md-3 col-sm-3 label-align">Upload File</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="file" name="myfile" class="form-control" size="4"  required>
					<!-- <label class="form-label" for="customFile">.JPEG, .PNG, .PDF, Docs</label> -->
				</div>
			</div>

			
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
				</div>
			</div>
		</form>
		</form>
	</div>
