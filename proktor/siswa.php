<?php
//panggil file koneksi.php yang sudah anda buat
include '../class/Database.php';
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>JUDUL WEBSITE ANDA</title>
</head>
<body>
<?php
	if(isset($_GET['pesa'])){
		echo "Data berhasil di edit.</p>";
	}
	?>
<h1 align="center"> Daftar Produk</h1>
    <table border="1" width="900" align="center">
       <thead>
       
       <tr>
           <th>No</th>
			<th>No Induk</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Kelas</th>
			<th>Status</th>
			<th>Tempat Lahir</th>
			<th>Tanggal lahir</th>
			<th>Action</th>
       </tr>
       </thead>

       <tbody>
<?php
//ambil data dari tb_produk dan tb_kategori  di database
$no=1;
$ambildata=mysqli_query($koneksi,"select * from tbl_pelulusan ORDER BY kelas ASC, nama ASC");
while($d=mysqli_fetch_array($ambildata)){
    ?>
       <tr>
           <th><?php echo $no++; ?></th>
				<th><?php echo $d['no_induk']; ?></th>
				<th><?php echo $d['nama']; ?></th>
				<th><?php echo $d['jurusan']; ?></th>
				<th><?php echo $d['kelas']; ?></th>
				<th><?php echo $d['status']; ?></th>
				<th><?php echo $d['tempat_lahir']; ?></th>
				<th><?php echo $d['tglLahir']; ?></th>
           <td><a href="edit.php?id=<?php echo $d['id'];?>" title="edit data"><button>Edit</button></a> 
          <a href="hapus.php?id=<?php echo $d['id'];?>" title="edit data"><button>Hapus</button></a></td>
       </tr>
<?php
}
   
?>

</tbody>

</table>
<p align="center">Menampilkan data produk dan data kategori dari database, tabel produk ber relasi dengan tabel kategori dengan id_kategori yang terdapat pada tabel produk, <br>Maka dat dapat di tampilakn bersamaan</p>
</body>
</html>