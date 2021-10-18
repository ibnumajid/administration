<?php
//memasukkan file config.php
include('../_database/config.php');
?>

	<div class="container" style="margin-top:20px">
		<center><font size="6">Permohonan Surat</font></center>
		<hr>
		<a href="mahasiswa.php?page=tambah_permohonan_surat"><button class="btn btn-dark right">Ajukan Surat</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>ID Surat</th>
					<th>Keterangan Surat</th>
					<th>Status Surat</th>
					<th>Catatan</th>
					<th>File Surat</th>					
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				$nip = $_SESSION['NIP'];
				$sql_mahasiswa = mysqli_query($koneksi, "SELECT * FROM persuratan where pemohon ='$nip'  ") or die(mysqli_error($koneksi));
				if(mysqli_num_rows($sql_mahasiswa) > 0){
				while($data = mysqli_fetch_array($sql_mahasiswa)){ ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data['Keperluan']?></td>
							
							<td>
							<?php if($data['Status'] == 0){echo "Belum Diproses";}
									else if($data['Status'] == 1){echo "Diproses";} 
									else if($data['Status'] == 2){echo "Selesai";}
							?></td>
							<td><?=$data['#']?> </td>
							<td><?=$data['File_Surat']?> </td>
							</tr>
					<?php
					}
			}else{
				echo "
				<tr>
					<td colspan=\"6\"><center>Tidak ada data<center></td>
				</tr>
				";
			}
			?>
		</tbody>
	</table>
	</div>
</div>