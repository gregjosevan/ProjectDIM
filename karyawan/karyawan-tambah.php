<?php
require 'functions-karyawan.php';

$kweri =mysqli_query($konek, "SELECT max(idKaryawan) as maxKode FROM karyawan");
	
	$data = mysqli_fetch_array($kweri);

	$maxKode = $data['maxKode'];

	$nourut = (int) substr($maxKode, 1,4);

	$nourut++;
	$char = 'K';
	$idKaryawan = $char . sprintf("%04s", $nourut);


if( isset($_POST["submit"]) ) {


if ( tambah ($_POST) > 0 ) {
	echo "
		<script> 
			alert('Data berhasil ditambahkan!');
			document.location.href = 'karyawan.php';
		</script>
	";

}else {
	
	echo "
	<script> 
			alert('Data gagal ditambahkan!, Duplicate Kode Pelanggan');
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
	<title>Tambah Karyawan</title>
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
				<li><a href="../barang.php">Barang</a></li>
				<li><a href="../kategori/kategori.php">Kategori</a></li>
			</ul>
		</nav>
	</header>
	<div class="container">
		<div class="title" >Tambah Data Karyawan</div>
			<nav class="judul">
				<a   href="karyawan.php">[<] Daftar Tabel</a> 
        	</nav>
			<form action="" method="post">
				<div class="user-details">
					<div class="input-box">
						<span class="details">ID Karyawan</span>
						<input type="text" name="idKaryawan" value="<?php echo $idKaryawan?>" placeholder="Masukkan ID Karyawan" readonly> 
					</div>
					<div class="input-box">
						<span class="details">Nama Karyawan</span>
						<input type="text" name="namaKaryawan" placeholder="Masukkan Nama Karyawan" required> 
					</div>
					<div class="input-box">
						<span class="details">Posisi Karyawan</span>
						<input type="text" name="posisiKaryawan" placeholder="Masukkan Jabatan Karyawan" required> 
					</div>
					<div class="input-box">
						<span class="details">Alamat Karyawan</span>
						<input type="text" name="alamatKaryawan" placeholder="Masukkan Alamat Karyawan" required> 
					</div>
					<div class="submitBtn">
						<input type="submit" name="submit"> 
					</div>
				</div>
			</form>
	</div>

</body>
</html>