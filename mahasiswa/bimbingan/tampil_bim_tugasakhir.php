<?php
//memasukkan file config.php
include('../_database/config.php');
?>

	<div class="container" style="margin-top:20px">
		<center><font size="6">Bimbingan Tugas Akhir</font></center>
		<hr>
		<a href="mahasiswa.php?page=tambah_bim_tugasakhir"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NRP</th>
					<th>Nama</th>
					<th>Judul</th>
					<th>Dosen Pembimbing</th>
					<th>Keterangan</th>
					<th>Tanggal</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				$sql_mahasiswa = mysqli_query($koneksi, "SELECT * FROM bim_tugasakhir ") or die(mysqli_error($koneksi));
				if(mysqli_num_rows($sql_mahasiswa) > 0){
				while($data = mysqli_fetch_array($sql_mahasiswa)){ ?>
						<tr>
							<td><?=$no++?></td>  
							<td><?=$data['mhs_nrp']?></td>   <!--tidak ditampilkan diambil dari akun pengedit -->
							<td><?=$data['mhs_nama']?></td> <!--diambil dari  tabel mahasiswa -->
							<td><?=$data['judul']?></td>
							<td><?=$data['dsn_nrp']?></td> <!--tidak ditampilkan, hanya merujuk -->
							<td><?=$data['mhs_nama']?></td> <!--diambil dari  tabel dosen -->
							<td><?=$data['keterangan']?></td>
							<td><?=$data['tanggal']?></td>	
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