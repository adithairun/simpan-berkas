<?php
// koneksi database
include '../class/Database.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tbl_pelulusan where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:siswa.php");
 ?>