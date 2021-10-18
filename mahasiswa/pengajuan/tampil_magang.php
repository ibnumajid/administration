<?php
//memasukkan file config.php
include('../_database/config.php');
?>

	<div class="container" style="margin-top:20px">
		<center><font size="6">Pengajuan Magang</font></center>
		<hr>
		<a href="mahasiswa.php?page=tambah_peng_magang"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NRP</th>
					<th>Nama Mahasiswa</th>
					<th>Judul Projek</th>
					<th>Perusahaan Magang</th>
					<th>Alamat Perusahaan</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				$sql_mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa ") or die(mysqli_error($koneksi));
				if(mysqli_num_rows($sql_mahasiswa) > 0){
				while($data = mysqli_fetch_array($sql_mahasiswa)){ ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data['mhs_nrp']?></td>
							<td><?=$data['mhs_nama']?></td>
							<td><?=$data['mhs_alamat']?></td>
							<td><?=$data['mhs_angkatan']?></td>
							<td><?=$data['#']?></td>
							<td><?=$data['#']?></td>
							<td>
								<a class="edit" href="admin.php?page=edit_mhs&Nim=<?php echo $data['mhs_nrp']; ?>">Edit</a> |
								<a class="hapus" href="admin.php?page=delete_mhs&Nim=<?php echo $data['mhs_nrp']; ?>">Hapus</a>				
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