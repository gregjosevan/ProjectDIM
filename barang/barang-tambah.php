<?php
require 'functions-barang.php';

$kweri =mysqli_query($konek, "SELECT max(idBarang) as maxKode FROM barang");
	
	$data = mysqli_fetch_array($kweri);

	$maxKode = $data['maxKode'];

	$nourut = (int) substr($maxKode, 1,4);

	$nourut++;
	$char = 'B';
	$idBarang = $char . sprintf("%04s", $nourut);


if( isset($_POST["submit"]) ) {


if ( tambah ($_POST) > 0 ) {
	echo "
		<script> 
			alert('Data berhasil ditambahkan!');
			document.location.href = 'barang.php';
		</script>
	";

}else {
	
	echo "
	<script> 
			alert('Data gagal ditambahkan!);
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
	<title>Tambah Barang</title>
	<link rel="stylesheet" href="style-tambah.css">
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
				<li><a href="barang.php">Barang</a></li>
				<li><a href="../kategori/kategori.php">Kategori</a></li>
			</ul>
		</nav>
	</header>
	<div class="container">
		<div class="title" >Tambah Data Barang</div>
			<nav class="judul">
				<a   href="karyawan.php">[<] Daftar Tabel</a> 
        	</nav>
			<form action="" method="post">
				<div class="user-details">
					<div class="input-box">
						<span class="details">ID Barang</span>
						<input type="text" name="idBarang" value="<?php echo $idBarang?>" placeholder="Masukkan ID Barang" readonly> 
					</div>
					<div class="input-box">
						<span class="details">ID Kategori</span>
						<input type="text" name="idKategori" placeholder="Masukkan ID Kategori" required> 
					</div>
					<div class="input-box">
						<span class="details">Nama Barang</span>
						<input type="text" name="namaBarang" placeholder="Masukkan Nama Barang" required> 
					</div>
					<div class="input-box">
						<span class="details">Harga Barang</span>
						<input type="text" name="hargaBarang" placeholder="Masukkan Harga Barang" required> 
					</div>
					<div class="input-box">
						<span class="details">Stock Barang</span>
						<input type="text" name="stockBarang" placeholder="Masukkan Stock Barang" required> 
					</div>
					<div class="submitBtn">
						<input type="submit" name="submit"> 
					</div>
				</div>
			</form>
	</div>

</body>
</html>