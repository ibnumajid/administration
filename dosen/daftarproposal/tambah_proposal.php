<?php include('../_database/config.php'); ?>

		<center><font size="6">Tambah Proposal</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			
			$nip				= $_POST['nip'];
			$nama				= $_POST['nama'];
			$keterangan			= $_POST['keterangan'];
			$status				= $_POST['status'];
			//$No_Surat			= $_FILES['myfile']['name'];
			$folder				= "files/";
			
			$gambar	= upload();
			if ( !$gambar) {
				return false;
			}
			
			function upload() {
				$file_surat			= $_FILES['myfile']['name'];
				$Data				= $_FILES['myfile']['tmp_name'];
			}

			move_uploaded_file($Data, "files/".$file_surat);

			$sql = mysqli_query($koneksi, "INSERT INTO persuratan(nip, nama, keterangan, status, file_surat, Data) VALUES('$nip', '$nama', '$keterangan', '$status', '$file_surat', '$Data')") or die(mysqli_error($koneksi));
				

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="dosen/daftarproposal/tampil_proposal.php";</script>';
					}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
		}
			
				
		?>

		<form action="dosen.php?page=tambah_daf_proposal" method="post" enctype="multipart/form-data">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIP</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nip" class="form-control" size="4" value=<?=$_SESSION['NIP']?> readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nama" class="form-control" size="4" value=<?=$_SESSION['user']?> readonly required>
				</div>
			</div>
			<div class="item form-group" >
				<label class="col-form-label col-md-3 col-sm-3 label-align">Keterangan</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="keterangan" class="form-control" size="4"  required>
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
	</div>
