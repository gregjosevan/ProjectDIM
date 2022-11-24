<?php
require 'functions-barang.php';

$idBarang	 = $_GET['idBarang'];

$barang = query("SELECT * FROM barang WHERE idBarang = '$idBarang'")[0];

if( isset($_POST["submit"]) ) {

if ( ubah ($_POST) > 0 ) {
	echo "
		<script> 
			alert('Data berhasil diubah!');
			document.location.href = 'barang.php';
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
				<a   href="barang.php">[<] Daftar Tabel</a> 
        	</nav>
			<form action="" method="post">
				<div class="user-details">
					<div class="input-box">
						<span class="details">ID Barang</span>
						<input type="text" name="idBarang" id="idBarang" placeholder="Masukkan ID Barang" required value="<?= $barang["idBarang"]; ?>" readonly> 
					<div class="input-box">
						<span class="details">ID Kategori</span>
						<input type="text" name="idKategori" id="namaBarang" placeholder="Masukkan ID Kategori" required value="<?= $barang["idKategori"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Nama Barang</span>
						<input type="text" name="namaBarang" id="namaBarang" placeholder="Masukkan Nama Barang" required value="<?= $barang["namaBarang"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Harga Barang</span>
						<input type="text" name="hargaBarang" id="hargaBarang" placeholder="Masukkan Harga Barang" required value="<?= $barang["hargaBarang"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Stock Barang</span>
						<input type="text" name="stockBarang" id="stockBarang" placeholder="Masukkan Stock Barang" required value="<?= $barang["stockBarang"]; ?>"> 
					</div>
					<div class="submitBtn">
						<input type="submit" name="submit" > 
					</div>
				</div>
			</form>
	</div>

</body>
</html>