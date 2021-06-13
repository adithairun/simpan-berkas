<?php 
 
include '../../class/Database.php';
$id = $_POST['id'];
$kodetoken = $_POST['kodetoken'];


 
mysqli_query($koneksi,"UPDATE token SET kodetoken='$kodetoken' WHERE id='$id'");
 
header("location:token.php?pesan=update");
?>
