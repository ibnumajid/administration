<?php 
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
        header("location:cobaadmin.php");
    }
    elseif ($data['status'] == '2')
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM dosen WHERE dsn_nip='$user' ");
        $data2 = mysqli_fetch_assoc($tambah2);{
            $_SESSION['user'] =$data2['dsn_nama'];
            $_SESSION['NIP'] =$data2['dsn_nip'];}    
        header("location:dosen_2.php");
    }
    elseif ($data['status'] == '3')
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE mhs_nrp='$user' ");
        $data2 = mysqli_fetch_assoc($tambah2);{
            $_SESSION['user'] =$data2['mhs_nama'];
            $_SESSION['NIP'] =$data2['mhs_nrp'];} 
        header("location:mahasiswa.php");
    }
    elseif ($data['status'] == '4')
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM tendik WHERE tendik_nim='$user' ");
        $data2 = mysqli_fetch_assoc($tambah2);{ 
            $_SESSION['user'] =$data2['tendik_nama'];
            $_SESSION['NIP'] =$data2['tendik_nim'];
        }
        header("location:./pages/pagestendik/tendik.php");
    }
    elseif ($data['status'] == '5')
    {
        session_start();
        $tambah2 = mysqli_query($koneksi, "SELECT * FROM kadep WHERE kdp_nip='$user' ");
        $data2 = mysqli_fetch_assoc($tambah2);{
            $_SESSION['user'] =$data2['kdp_nama'];
            $_SESSION['NIP'] =$data2['kdp_nip'];}    
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
        header("location:home.php");
    }

    }
    
}
 else{
     header("location:home.php");
 }


?>