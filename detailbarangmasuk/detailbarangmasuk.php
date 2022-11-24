<?php
//koneksi ke DB
require 'functions-detailbarangmasuk.php';

$detailbarangmasuk = query("SELECT * FROM detailbarangmasuk");

//$result = mysqli_query($konek, "SELECT * FROM ms_pelanggan");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Barang Masuk</title>
	<link rel="stylesheet" href="style-detailbarangmasuk.css">
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
			<h1>Tabel DetailBarangMasuk</h1>
			

		<table>
			<tr>
				<th>idFaktur</th>
				<th>idBarang</th>
				<th>Kuantitas</th>
				<th>Action</th>
			</tr>
			<?php foreach ( $detailbarangmasuk as $row ) : ?>
			<tr>
				
				<td><?= $row["idFaktur"]; ?></td>
				<td><?= $row["idBarang"]; ?></td>
				<td><?= $row["kuantitas"]; ?></td>
				
				
				<td>
					<a href="detailbarangmasuk-edit.php?idFaktur=<?= $row["idFaktur"];?>">Edit </a> |
					<a href="hapus-detailbarangmasuk.php?idFaktur=<?= $row["idFaktur"];?>">Delete</a>
				</td>

			</tr>
			<?php endforeach; ?>
		
		</table>
		<a href="detailbarangmasuk-tambah.php" class="addBtn">Tambah Data DetailBarangMasuk </a>
		</div>


	</body>
</html>