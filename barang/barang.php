<?php
//koneksi ke DB
require 'functions-barang.php';

$barang = query("SELECT * FROM barang");

//$result = mysqli_query($konek, "SELECT * FROM ms_pelanggan");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Barang</title>
	<link rel="stylesheet" href="style-barang.css">
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
			<h1>Tabel Barang</h1>
			

		<table>
			<tr>
				<th>idBarang</th>
				<th>idKategori</th>
				<th>namaBarang</th>
				<th>hargaBarang</th>
				<th>stockBarang</th>
				<th>Action</th>
			</tr>
			<?php foreach ( $barang as $row ) : ?>
			<tr>
				<td><?= $row["idBarang"]; ?></td>
				<td><?= $row["idKategori"]; ?></td>
				<td><?= $row["namaBarang"]; ?></td>
				<td><?= $row["hargaBarang"]; ?></td>
				<td><?= $row["stockBarang"]; ?></td>
				
				<td>
					<a href="barang-edit.php?idBarang=<?= $row["idBarang"];?>">Edit </a> |
					<a href="hapus-barang.php?idBarang=<?= $row["idBarang"];?>">Delete</a>
				</td>

			</tr>
			<?php endforeach; ?>
		
		</table>
		<a href="barang-tambah.php" class="addBtn">Tambah Data Barang </a>
		</div>


	</body>
</html>