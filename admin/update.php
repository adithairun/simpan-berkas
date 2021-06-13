<?php 
 
include '../class/Database.php';
$id = $_POST['id'];
$no_induk = $_POST['no_induk'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$status = $_POST['status'];
$tempat_lahir = $_POST['tempat_lahir'];
$tglLahir = $_POST['tglLahir'];

 
mysqli_query($koneksi,"UPDATE tbl_pelulusan SET no_induk='$no_induk', nama='$nama', jurusan='$jurusan', kelas='$kelas',status='$status',tempat_lahir='$tempat_lahir',tglLahir='$tglLahir' WHERE id='$id'");
 
header("location:siswa.php?pesan=update");
?>
