<?php 
 
include '../../class/Database.php';
$id = $_POST['id'];
$nama= addslashes(trim($_POST['nama']));
$username= addslashes(trim($_POST['username']));
$email = $_POST['email'];

$password =md5($_POST['password']);
$admin = $_POST['admin'];

 
mysqli_query($koneksi,"UPDATE admin SET nama='$nama' , username='$username' , email='$email' , password='$password' , admin='$admin' WHERE id='$id'");
 
header("location:admin.php?pesan=update");
?>
