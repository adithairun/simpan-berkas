<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../class/Database.php';
 
// menangkap data yang dikirim dari form
$username = addslashes(trim($_POST['username']));
$password = md5($_POST['password']);
 
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:home.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>