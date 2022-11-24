<?php
require 'functions-karyawan.php';

$idKaryawan	 = $_GET['idKaryawan'];

$kary = query("SELECT * FROM karyawan WHERE idKaryawan = '$idKaryawan'")[0];

if( isset($_POST["submit"]) ) {

if ( ubah ($_POST) > 0 ) {
	echo "
		<script> 
			alert('Data berhasil diubah!');
			document.location.href = 'karyawan.php';
		</script>
	";

}else {
	echo "
	<script> 
			alert('Data gagal diubah!');

		</script>
	";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Karyawan</title>
	<link rel="stylesheet" href="style-edit.css">
</head>
<body>
	<header>
		<div class="titlee">TB Sampurna </div>
		<nav>
			<ul class="nav__links">
				<li><a href="../karyawan/karyawan.php">Karyawan</a></li>
				<li><a href="../pesanan/pesanan.php">Pesanan</a></li>
				<li><a href="../supplier/supplier.php">Supplier</a></li>
				<li><a href="../detailbarangmasuk/detailbarangmasuk.php">Detail Barang Masuk</a></li>
				<li><a href="../barang.php">Barang</a></li>
				<li><a href="../kategori/kategori.php">Kategori</a></li>
			</ul>
		</nav>
	</header>
	<div class="container">
		<div class="title" >Edit Data Karyawan</div>
			<nav class="judul">
				<a   href="karyawan.php">[<] Daftar Tabel</a> 
        	</nav>
			<form action="" method="post">
				<div class="user-details">
					<div class="input-box">
						<span class="details">ID Karyawan</span>
						<input type="text" name="idKaryawan" id="idKaryawan" placeholder="Masukkan ID Karyawan" required value="<?= $kary["idKaryawan"]; ?>"> 
					<div class="input-box">
						<span class="details">Nama Karyawan</span>
						<input type="text" name="namaKaryawan" id="namaKaryawan" placeholder="Masukkan Nama Karyawan" required value="<?= $kary["namaKaryawan"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Posisi Karyawan</span>
						<input type="text" name="posisiKaryawan" id="posisiKaryawan" placeholder="Masukkan Jabatan Karyawan" required value="<?= $kary["posisiKaryawan"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Alamat Karyawan</span>
						<input type="text" name="alamatKaryawan" id="alamatKaryawan" placeholder="Masukkan Alamat Karyawan" required value="<?= $kary["alamatKaryawan"]; ?>"> 
					</div>
					<div class="submitBtn">
						<input type="submit" name="submit" > 
					</div>
				</div>
			</form>
	</div>

</body>
</html>