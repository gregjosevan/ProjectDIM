<?php
require 'functions-kategori.php';

$idKategori	 = $_GET['idKategori'];

$kategori = query("SELECT * FROM kategori WHERE idKategori = '$idKategori'")[0];

if( isset($_POST["submit"]) ) {

if ( ubah ($_POST) > 0 ) {
	echo "
		<script> 
			alert('Data berhasil diubah!');
			document.location.href = 'kategori.php';
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
	<title>Edit Kategori</title>
	<link rel="stylesheet" href="style-edit.css">
</head>
<body>
	<header>
		<div class="titlee">TB Sampurna </div>
		<nav>
			<ul class="nav__links">
				<li><a href="../karyawan.php">Karyawan</a></li>
				<li><a href="../pesanan/pesanan.php">Pesanan</a></li>
				<li><a href="../supplier/supplier.php">Supplier</a></li>
				<li><a href="../detailbarangmasuk/detailbarangmasuk.php">Detail Barang Masuk</a></li>
				<li><a href="../barang/barang.php">Barang</a></li>
				<li><a href="../kategori/kategori.php">Kategori</a></li>
			</ul>
		</nav>
	</header>
	<div class="container">
		<div class="title" >Edit Data Kategori</div>
			<nav class="judul">
				<a   href="kategori.php">[<] Daftar Tabel</a> 
        	</nav>
			<form action="" method="post">
				<div class="user-details">
				
					<div class="input-box">
						<span class="details">ID Kategori</span>
						<input type="text" name="idKategori" id="idKategori" placeholder="Masukkan ID Kategori" required value="<?= $kategori["idKategori"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Kategori Barang</span>
						<input type="text" name="kategoriBarang" id="kategoriBarang" placeholder="Masukkan Nama Kategori" required value="<?= $kategori["kategoriBarang"]; ?>"> 
					</div>
					
					<div class="submitBtn">
						<input type="submit" name="submit" > 
					</div>
				</div>
			</form>
	</div>

</body>
</html>