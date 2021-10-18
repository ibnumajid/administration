<?php
//koneksi ke database mysql,
$koneksi = mysqli_connect("localhost", "cypr9718" , "pq6SPaHWYiKe38", "cypr9718_sidteo");
//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "gagal" . mysqli_connect_error();
}

?>
