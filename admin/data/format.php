

<?php
// koneksi database
	include '../../class/Database.php';



// menghapus data dari database
mysqli_query($koneksi,"TRUNCATE TABLE tbl_pelulusan");

// mengalihkan halaman kembali ke index.php

header("location:data.php?format=$format");

?>
