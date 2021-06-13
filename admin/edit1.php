<?php
error_reporting(0); //abaikan error pada browser
//panggil file koneksi.php yang sudah anda buat
include '../class/Database.php';
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>JUDUL WEBSITE ANDA</title>
</head>
<body>
<h1 align="center"> Edit Produk</h1>
<?php
//ambil data berdasarkan parameter GET id
$b = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tbl_pelulusan where id_produk='$_GET[id]'"));

//buat variabel dari setiap field name form produk
$no_induk= mysqli_real_escape_string($koneksi, $_POST['no_induk']);    //varibel field nama
$nama= mysqli_real_escape_string($koneksi, $_POST['nama']);    //varibel field stok
$jurusan= mysqli_real_escape_string($koneksi, $_POST['jurusan']);  //varibel field deskripsi
$kelas= mysqli_real_escape_string($koneksi, $_POST['kelas']);        //varibel field harga
$status= mysqli_real_escape_string(koneksi, $_POST['status']);  //varibel field kategori
$tempat_lahir= mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);       //varibel field berat
$tglLahir= mysqli_real_escape_string($koneksi, $_POST['tglLahir']);     //varibel field diskon

if(isset($_POST['simpan'])){
 if(empty($no_induk)){    //jika nama kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan No Induk</p>";
    }
    elseif(empty($nama)){ //jika kategori kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Nama</p>";
    }
    elseif(empty($jurusan)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Jurusan</p>";
    }
    elseif(empty($kelas)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Kelas</p>";
    }
	elseif(empty($status)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Status</p>";
    }
	elseif(empty($tempat_lahir)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Tempat Lahir</p>";
    }
	elseif(empty($tglLahir)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Tanggal Lahir</p>";
    }
    
    else{  //jika semua sudah terpenuhi maka update ke tb_produk

    $save=mysqli_query($conect, "UPDATE tb_produk set no_induk='$no_induk',nama='$nama',jurusan='$jurusan',kelas='$kelas',status='$status',tempat_lahir='$tempat_lahir',tglLahir='$tglLahir' where id='$_GET[id]'");
    if($save){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Produk Berhasil disimpan ke database');document.location='siswa.php'</script>";
    }else{  //jika update gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='input.php'</script>";
    }
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr><td colspan="3"><?php echo $error;?></td></tr>
    <tr>
        <td>No Induk</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Nama Produk" size="50" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['nama_produk'];?>"/>
        </td>
    </tr>
    <tr>
        <td>Kategori Produk</td>
        <td>:</td>
        <td>
            <select name="kategori">
            <option value="">Pilih Kategori</option>
            <?php
            $ambildata = mysqli_query($conect, "SELECT * FROM tb_kategori");  //ambil data dari tabel kategori
            while($a=mysqli_fetch_array($ambildata)){   //buat perulangan
                if($a['id_kategori'] == $b['id_kategori']){  //jika id kategori sama dengan id kategori dari variabel $b, maka option selected
                ?>
                  <option value="<?php echo $a['id_kategori'];?>" selected>
                  <?php echo $a['nama_kategori'];?></option>
            <?php
            }else{   //jika tidak sama maka option tidak selected
                ?>
                <option value="<?php echo $a['id_kategori'];?>">
                <?php echo $a['nama_kategori'];?></option>
            <?php
                 }
            }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Deskripsi Produk</td>
        <td>:</td>
        <td><textarea name="deskripsi" placeholder="Deskrippsi Produk" rows="3" cols="50"/><?php echo $b['deskripsi_produk'];?></textarea></td>
    </tr>
    <tr>
        <td>Stok Produk</td>
        <td>:</td>
        <td><input type="text" name="stok" placeholder="Stok Produk" size="20" maxlength="10" value="<?php echo $b['stok_produk'];?>"/></td>
    </tr>
    <tr>
        <td>Berat Produk</td>
        <td>:</td>
        <td><input type="text" name="berat" placeholder="Berat Produk" size="30" maxlength="30" value="<?php echo $b['berat_produk'];?>"/></td>
    </tr>
    <tr>
        <td>Harga Produk</td>
        <td>:</td>
        <td><input type="text" name="harga" placeholder="Harga Produk" size="30" maxlength="30" value="<?php echo $b['harga_produk'];?>"/></td>
    </tr>
    <tr>
        <td>Diskon Produk</td>
        <td>:</td>
        <td><input type="text" name="diskon" placeholder="Diskon Produk" size="30" maxlength="10" value="<?php echo $b['diskon_produk'];?>"/></td>
    </tr>
    <tr>
        <td colspan="3"><button type="submit" name="simpan">Proses Data</button</td>
    </tr>
</tbody>

</table>
</form>

</body>
</html>