<?php
//memasukkan file config.php
include('../_database/config.php');
?>

	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NRP</th>
					<th>Nama Mahasiswa</th>
					<th>Alamat</th>
					<th>Angkatan</th>
					<th>Status</th>
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
							<td>
							<?php if($data['mhs_status'] == 0){echo "Non Aktif";}
									else if($data['mhs_status'] == 1){echo "Aktif";} 
									else if($data['mhs_status'] == 2){echo "Alumni";}
							?></td>
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