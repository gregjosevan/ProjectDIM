<?php
//koneksi ke DB
require 'functions-kategori.php';

$kategori = query("SELECT * FROM kategori");

//$result = mysqli_query($konek, "SELECT * FROM ms_pelanggan");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kategori</title>
	<link rel="stylesheet" href="style-kategori.css">
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
		<!-- <div class="filter">
		</div> -->

		
		<div class="tabel">
			<h1>Tabel Kategori</h1>
			

		<table>
			<tr>
				<th>idKategori</th>
				<th>kategoriBarang</th>
				<th>Action</th>
			</tr>
			<?php foreach ( $kategori as $row ) : ?>
			<tr>
				
				<td><?= $row["idKategori"]; ?></td>
				<td><?= $row["kategoriBarang"]; ?></td>
				
				
				<td>
					<a href="kategori-edit.php?idKategori=<?= $row["idKategori"];?>">Edit </a> |
					<a href="hapus-kategori.php?idKategori=<?= $row["idKategori"];?>">Delete</a>
				</td>

			</tr>
			<?php endforeach; ?>
		
		</table>
		<a href="kategori-tambah.php" class="addBtn">Tambah Data Kategori </a>
		</div>


	</body>
</html>