<?php
require 'functions-detailbarangmasuk.php';

$idFaktur	 = $_GET['idFaktur'];

$detailbarangmasuk = query("SELECT * FROM detailbarangmasuk WHERE idFaktur = '$idFaktur'")[0];

if( isset($_POST["submit"]) ) {

if ( ubah ($_POST) > 0 ) {
	echo "
		<script> 
			alert('Data berhasil diubah!');
			document.location.href = 'detailbarangmasuk.php';
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
	<title>Edit DetailBarangMasuk</title>
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
		<div class="title" >Edit Data DetailBarangMasuk</div>
			<nav class="judul">
				<a   href="detailbarangmasuk.php">[<] Daftar Tabel</a> 
        	</nav>
			<form action="" method="post">
				<div class="user-details">
				
					<div class="input-box">
						<span class="details">ID Faktur</span>
						<input type="text" name="idFaktur" id="idFaktur" placeholder="Masukkan ID Faktur" required value="<?= $detailbarangmasuk["idFaktur"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">ID Barang</span>
						<input type="text" name="idBarang" id="idBarang" placeholder="Masukkan ID Barang" required value="<?= $detailbarangmasuk["idBarang"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Kuantitas</span>
						<input type="text" name="kuantitas" id="kuantitas" placeholder="Masukkan Jumlah Barang" required value="<?= $detailbarangmasuk["kuantitas"]; ?>"> 
					</div>
					
					<div class="submitBtn">
						<input type="submit" name="submit" > 
					</div>
				</div>
			</form>
	</div>

</body>
</html>