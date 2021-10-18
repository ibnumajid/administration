<?php include('../_database/config.php'); ?>

		<center><font size="6">Tambah Pengajuan Tugas Akhir</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			

			$pemohon			= $_POST['pemohon'];
			$keperluan			= $_POST['keperluan'];
			$status				= $_POST['status'];
			
			$sql = mysqli_query($koneksi, "INSERT INTO persuratan(pemohon, keperluan, status, file_surat, data) VALUES('$pemohon', '$keperluan', '$status', '$file_surat',  '$upload')") or die(mysqli_error($koneksi));
				

			if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="mahasiswa/permohonan/tampil_bim_tugasakhir.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}

			$upload				= move_uploaded_file($data, 'files/'.$file_surat);
		?>

		<form action="mahasiswa.php?page=tambah_bim_magang" method="post" enctype="multipart/form-data">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NRP</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="pemohon" class="form-control" size="4" value=<?=$_SESSION['NIP']?> readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="pemohon" class="form-control" size="4" value=<?=$_SESSION['user']?> readonly required>
				</div>
			</div>
			<div class="item form-group" >
				<label class="col-form-label col-md-3 col-sm-3 label-align">Judul Projek</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="keperluan" class="form-control" size="4"  required>
				</div>
			</div>
			<div class="item form-group" >
				<label class="col-form-label col-md-3 col-sm-3 label-align">Dosen Pembimbing</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="keperluan" class="form-control" size="4"  required>
				</div>
			</div>
		
			<div class="item form-group" >
				<label class="col-form-label col-md-3 col-sm-3 label-align">Upload File Proposal</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="file" name="myfile" class="form-control" size="4"  required>
					<label class="form-label" for="customFile">Format PDF</label>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
				</div>
			</div>
		</form>
	</div>
