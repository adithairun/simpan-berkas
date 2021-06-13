<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include '../../class/Database.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$no_induk    = $data->val($i, 1);
	$nama   =  $data->val($i, 2);
	$jurusan  = $data->val($i, 3);
	$kelas  = $data->val($i, 4);
	$status  = $data->val($i, 5);
	$tempat_lahir  = $data->val($i, 6);
	$tglLahir  = $data->val($i, 7);
	$tahunlulus  = $data->val($i, 8);

	if($no_induk != "" && $nama != "" && $jurusan != "" && $kelas != "" && $status != "" && $tempat_lahir != "" && $tglLahir != "" && $tahunlulus != ""){
		// input data ke database (table data_pegawai)
		{
			$nama = mysqli_real_escape_string($koneksi, $nama);
		}
		mysqli_query($koneksi,"INSERT into tbl_pelulusan values('','$no_induk','$nama','$jurusan','$kelas','$status','$tempat_lahir','$tglLahir','$tahunlulus')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:data.php?berhasil=$berhasil");
?>