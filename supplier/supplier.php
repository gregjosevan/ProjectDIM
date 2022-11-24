<?php
//koneksi ke DB
require 'functions-supplier.php';

$supplier = query("SELECT * FROM supplier");

//$result = mysqli_query($konek, "SELECT * FROM ms_pelanggan");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Supplier</title>
	<link rel="stylesheet" href="style-supplier.css">
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
		<!-- <div class="filter">
		</div> -->

		
		<div class="tabel">
			<h1>Tabel Supplier</h1>
			

		<table>
			<tr>
				<th>idSupplier</th>
				<th>namaSupplier</th>
				<th>alamat</th>
				<th>Action</th>
			</tr>
			<?php foreach ( $supplier as $row ) : ?>
			<tr>
				
				<td><?= $row["idSupplier"]; ?></td>
				<td><?= $row["namaSupplier"]; ?></td>
				<td><?= $row["alamat"]; ?></td>
				
				
				<td>
					<a href="supplier-edit.php?idSupplier=<?= $row["idSupplier"];?>">Edit </a> |
					<a href="hapus-supplier.php?idSupplier=<?= $row["idSupplier"];?>">Delete</a>
				</td>

			</tr>
			<?php endforeach; ?>
		
		</table>
		<a href="supplier-tambah.php" class="addBtn">Tambah Data Supplier </a>
		</div>


	</body>
</html>