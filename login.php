<?php 
session_start();
include('_database/config.php');
 
$user = $_POST['user'];
$pass = $_POST['pass'];

$tambah = mysqli_query($koneksi, "SELECT * FROM masuk WHERE user='$user' and pass='$pass'");

$cek = mysqli_num_rows($tambah);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($tambah);{
    

   if($data['status'] == '1')
    {
        session_start();
        $row = mysqli_fetch_array($tambah);
        $_SESSION['user'] ="admin";
        $_SESSION['NIP'] ="0000";
        $_SESSION['pass'] =$data['pass'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['alert'] = true;
        header("location:./pagesadmin/billingadmin.php");
    }
    elseif ($data['status'] == '2')
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM data_dosenb WHERE id_npp='$user' ");
        $data2 = mysqli_fetch_assoc($tambah2);{
            $_SESSION['user'] =$data2['nama_anggota'];
            $_SESSION['NIP'] =$data2['id_npp'];
            $_SESSION['pass'] =$data['pass'];
            $_SESSION['status'] = $data['status'];
            $_SESSION['alert'] = true;}    
        header("location:dosen_2.php");
    }
    elseif ($data['status'] == '3')
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM data_mhs WHERE nrp_mhs='$user' ");
        $data2 = mysqli_fetch_assoc($tambah2);{
            $_SESSION['user'] =$data2['nama_mhs'];
            $_SESSION['NIP'] =$data2['nrp_mhs'];
            $_SESSION['pass'] =$data['pass'];
            $_SESSION['status'] = $data['status'];
            $_SESSION['alert'] = true;} 
        header("location:mahasiswa.php");
    }
    elseif ($data['status'] == '4')
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM data_tendik WHERE nip_tdk = '$user' ");
        $data2 = mysqli_fetch_assoc($tambah2);{ 
            $_SESSION['user'] =$data2['nama_tdk'];
            $_SESSION['NIP'] =$data2['nip_tdk'];
            $_SESSION['pass'] =$data['pass'];
            $_SESSION['status'] = $data['status'];
            $_SESSION['alert'] = true;
        }
        header("location:./pages/pagestendik/tendik.php");
    }
    elseif ($data['status'] == '5')
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM kadep WHERE kdp_nip='$user' ");
        $data2 = mysqli_fetch_assoc($tambah2);{
            $_SESSION['user'] =$data2['kdp_nama'];
            $_SESSION['NIP'] =$data2['kdp_nip'];
            $_SESSION['alert'] = true;}    
        header("location:./pages/kadep/kadep.php");
    }
    elseif ($data['status'] == '6')
    {
        session_start();
        $row = mysqli_fetch_array($tambah);
        $_SESSION['user'] = $row['user'];
        header("location:AdminKeuangan.php");
    }
    elseif ($data['status'] == '7')
    {
        session_start();
        $row = mysqli_fetch_array($tambah);
        $_SESSION['user'] = $row['user'];
        header("location:AdminInventaris.php");
    }
    else
    {
        
        header("location:index.php");
    }

    }
    
}
 else{
    $_SESSION['alert'] = true;
     header("location:index.php");
 }


?>