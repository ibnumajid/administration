<?php
//memasukkan file config.php
include('../_database/config.php');
?>

	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mitra Industri</font></center>
		<hr>
		<a href="admin.php?page=tambah_mtr"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>Nama Industri</th>
					<th>Tahun Kerja Sama </th>
					<th>Alamat</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				$sql_mahasiswa = mysqli_query($koneksi, "SELECT * FROM mtr ") or die(mysqli_error($koneksi));
				if(mysqli_num_rows($sql_mahasiswa) > 0){
				while($data = mysqli_fetch_array($sql_mahasiswa)){ ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data['Nama_Perusahaan']?></td>
							<td><?=$data['Tahun']?></td>
							<td><?=$data['Alamat']?></td>
							<td>
							
							<?php if($data['Status'] == 0){echo "Non Aktif";}
									else if($data['Status'] == 1){echo "Aktif";} 
									else if($data['Status'] == 2){echo "Alumni";}
							?>
							</td>
							<td>
								<a class="edit" href="admin.php?page=edit_mtr&Id_mtr=<?php echo $data['Id_mtr']; ?>">Edit</a> |
								<a class="hapus" href="admin.php?page=delete_mtr&Id_mtr=<?php echo $data['Id_mtr']; ?>">Hapus</a>				
							</td>
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