<?php
require 'functions-supplier.php';

$idSupplier	 = $_GET['idSupplier'];

$supplier = query("SELECT * FROM supplier WHERE idSupplier = '$idSupplier'")[0];

if( isset($_POST["submit"]) ) {

if ( ubah ($_POST) > 0 ) {
	echo "
		<script> 
			alert('Data berhasil diubah!');
			document.location.href = 'supplier.php';
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
				<a   href="supplier.php">[<] Daftar Tabel</a> 
        	</nav>
			<form action="" method="post">
				<div class="user-details">
				
					<div class="input-box">
						<span class="details">ID Supplier</span>
						<input type="text" name="idSupplier" id="idSupplier" placeholder="Masukkan ID Supplier" required value="<?= $supplier["idSupplier"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Nama Supplier</span>
						<input type="text" name="namaSupplier" id="namaSupplier" placeholder="Masukkan ID Barang" required value="<?= $supplier["namaSupplier"]; ?>"> 
					</div>
					<div class="input-box">
						<span class="details">Alamat</span>
						<input type="text" name="alamat" id="alamat" placeholder="Masukkan Jumlah Barang" required value="<?= $supplier["alamat"]; ?>"> 
					</div>
					
					<div class="submitBtn">
						<input type="submit" name="submit" > 
					</div>
				</div>
			</form>
	</div>

</body>
</html>