<?php
//koneksi ke DB
require 'functions-pesanan.php';

$pesanan = query("SELECT * FROM pesanan");

//$result = mysqli_query($konek, "SELECT * FROM ms_pelanggan");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pesanan</title>
	<link rel="stylesheet" href="style-pesanan.css">
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
			<h1>Tabel Pesanan</h1>
			

		<table>
			<tr>
				<th>idFaktur</th>
				<th>idKaryawan</th>
				<th>idSupplier</th>
				<th>Tanggal</th>
				<th>Jumlah</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
			<?php foreach ( $pesanan as $row ) : ?>
			<tr>
				
				<td><?= $row["idFaktur"]; ?></td>
				<td><?= $row["idKaryawan"]; ?></td>
				<td><?= $row["idSupplier"]; ?></td>
				<td><?= $row["tanggal"]; ?></td>
				<td><?= $row["jumlah"]; ?></td>
				<td><?= $row["keterangan"]; ?></td>
				<td>
					<a href="pesanan-edit.php?idFaktur=<?= $row["idFaktur"];?>">Edit </a> |
					<a href="hapus-pesanan.php?idFaktur=<?= $row["idFaktur"];?>">Delete</a>
				</td>

			</tr>
			<?php endforeach; ?>
		
		</table>
		<a href="pesanan-tambah.php" class="addBtn">Tambah Data Pesanan </a>
		</div>


	</body>
</html>