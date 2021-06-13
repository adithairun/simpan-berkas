<?php 
// koneksi database
include '../../class/Database.php';

// menangkap data yang di kirim dari form
$nama= addslashes(trim($_POST['nama']));
$username= addslashes(trim($_POST['username']));
$email = $_POST['email'];
$admin = $_POST['admin'];
$password =md5($_POST['password']);

// menginput data ke database
mysqli_query($koneksi,"insert into admin values('','$nama','$email','$username','$password','$admin')");

// mengalihkan halaman kembali ke index.php
header("location:admin.php");

?>