<?php
require 'functions-pesanan.php';

$idFaktur	 = $_GET['idFaktur'];

$pesanan = query("SELECT * FROM pesanan WHERE idFaktur = '$idFaktur'")[0];

if( isset($_POST["submit"]) ) {

if ( ubah ($_POST) > 0 ) {
	echo "
		<script> 
			alert('Data berhasil diubah!');
			document.location.href = 'pesanan.php';
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
	<title>Edit Pesanan</title>
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
				<li><a href="../barang/barang.php">Barang</a></li>
				<li><a href="../kategori/kategori.php">Kategori</a></li>
			</ul>
		</nav>
	</header>
	<div class="container">
		<div class="title" >Edit Data Pesanan</div>
			<nav class="judul">
				<a   href="pesanan.php">[<] Daftar Tabel</a> 
        	</nav>
			<form action="" method="post">
				<div class="user-details">
				
					<div class="input-box">
						<span class="details">ID Faktur</span>
						<input type="text" name="idFaktur" id="idFaktur" placeholder="Masukkan ID Faktur" required value="<?= $pesanan["idFaktur"]; ?>" readonly> 
					</div>
					<div class="input-box">
						<span class="details">ID Karyawan</span>
						<input type="text" name="idKaryawan" id="idKaryawan" placeholder="Masukkan ID Karyawan" required value="<?= $pesanan["idKaryawan"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">ID Supplier</span>
						<input type="text" name="idSupplier" id="idSupplier" placeholder="Masukkan ID Supplier" required value="<?= $pesanan["idSupplier"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Tanggal</span>
						<input type="text" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal" required value="<?= $pesanan["tanggal"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Jumlah</span>
						<input type="text" name="jumlah" id="jumlah" placeholder="Masukkan Jumlah Barang" required value="<?= $pesanan["jumlah"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Keterangan</span>
						<input type="text" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan "  value="<?= $pesanan["keterangan"]; ?>"> 
					</div>
					<div class="submitBtn">
						<input type="submit" name="submit" > 
					</div>
				</div>
			</form>
	</div>

</body>
</html>