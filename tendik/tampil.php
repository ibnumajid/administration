<?php
//memasukkan file config.php
include('../_database/config.php');
?>

	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Tendik</font></center>
		<hr>
		<a href="admin.php?page=tambah_tendik"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NIP</th>
					<th>Nama </th>
					<th>Alamat</th>
					<th>Tahun Masuk</th>
					<th>Jabatan </th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				$sql_mahasiswa = mysqli_query($koneksi, "SELECT * FROM tendik ") or die(mysqli_error($koneksi));
				if(mysqli_num_rows($sql_mahasiswa) > 0){
				while($data = mysqli_fetch_array($sql_mahasiswa)){ ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data['tendik_nim']?></td>
							<td><?=$data['tendik_nama']?></td>
							<td><?=$data['tendik_alamat']?></td>
							<td><?=$data['tendik_thn_masuk']?></td>
							<td>
							<?php if($data['Jabatan'] == 0){echo "Non Pejabat";}
									else if($data['Jabatan'] == 1){echo "Kadep";} 
									else if($data['Jabatan'] == 2){echo "Administrasi Persuratan";}
									else if($data['Jabatan'] == 3){echo "Administrasi Keuangan";}
							?>
							</td>
							<td>
							<?php if($data['tendik_status'] == 0){echo "Non Aktif";}
									else if($data['tendik_status'] == 1){echo "Aktif";} 
									else if($data['tendik_status'] == 2){echo "Alumni";}
							?>
							</td>
							<td>
								<a class="edit" href="admin.php?page=edit_tendik&Nim=<?php echo $data['tendik_nim']; ?>">Edit</a> |
								<a class="hapus" href="admin.php?page=delete_tendik&Nim=<?php echo $data['tendik_nim']; ?>">Hapus</a>				
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