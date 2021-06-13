<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'class/Database.php';
 
// menangkap data yang dikirim dari form
$kodetoken = addslashes(trim($_POST['kodetoken']));

 
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from token where kodetoken='$kodetoken' ");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['kodetoken'] = $kodetoken;
	$_SESSION['status'] = "login";
	header("location:file_file");
}else{
	header("location:login?pesan=gagal");
}
?>