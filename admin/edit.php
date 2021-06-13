<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	
	<br/>
	
	<a href="siswa.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include '../class/Database.php';
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_pelulusan WHERE id='$id'")or die(mysql_error());
	
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>No Induk</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="no_induk" value="<?php echo $data['no_induk'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
			</tr>	
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>"></td>					
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" value="<?php echo $data['kelas'] ?>"></td>					
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?php echo $data['status'] ?>"></td>					
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>"></td>					
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tglLahir" value="<?php echo $data['tglLahir'] ?>"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>