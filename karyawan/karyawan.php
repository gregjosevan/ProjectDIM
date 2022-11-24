<?php
//koneksi ke DB
require 'functions-karyawan.php';

$karyawan = query("SELECT * FROM karyawan");

//$result = mysqli_query($konek, "SELECT * FROM ms_pelanggan");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Karyawan</title>
	<link rel="stylesheet" href="style-karyawan.css">
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
			<h1>Tabel Karyawan</h1>
			

		<table>
			<tr>
				<th>idKaryawan</th>
				<th>namaKaryawan</th>
				<th>posisiKaryawan</th>
				<th>alamatKaryawan</th>
				<th>Action</th>
			</tr>
			<?php foreach ( $karyawan as $row ) : ?>
			<tr>
				<td><?= $row["idKaryawan"]; ?></td>
				<td><?= $row["namaKaryawan"]; ?></td>
				<td><?= $row["posisiKaryawan"]; ?></td>
				<td><?= $row["alamatKaryawan"]; ?></td>
				<td>
					<a href="karyawan-edit.php?idKaryawan=<?= $row["idKaryawan"];?>">Edit </a> |
					<a href="hapus-karyawan.php?idKaryawan=<?= $row["idKaryawan"];?>">Delete</a>
				</td>

			</tr>
			<?php endforeach; ?>
		
		</table>
		<a href="karyawan-tambah.php" class="addBtn">Tambah Data Karyawan </a>
		</div>


	</body>
</html>