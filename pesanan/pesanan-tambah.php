<?php
require 'functions-pesanan.php';



$kweri =mysqli_query($konek, "SELECT max(idFaktur) as maxKode FROM pesanan");
	
	$data = mysqli_fetch_array($kweri);

	$maxKode = $data['maxKode'];

	$nourut = (int) substr($maxKode, 1,4);

	$nourut++;
	$char = 'F';
	$idFaktur = $char . sprintf("%04s", $nourut);


if( isset($_POST["submit"]) ) {


if ( tambah ($_POST) > 0 ) {
	echo "
		<script> 
			alert('Data berhasil ditambahkan!');
			document.location.href = 'pesanan.php';
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
	<title>Pesanan</title>
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
				<li><a href="../barang/barang.php">Barang</a></li>
				<li><a href="../kategori/kategori.php">Kategori</a></li>
			</ul>
		</nav>
	</header>
	<div class="container">
		<div class="title" >Tambah Data Pesanan</div>
			<nav class="judul">
				<a   href="pesanan.php">[<] Daftar Tabel</a> 
        	</nav>
			<form action="" method="post">
				<div class="user-details">
					<div class="input-box">
						<span class="details">ID Faktur</span>
						<input type="text" name="idFaktur" value="<?php echo $idFaktur?>" placeholder="Masukkan ID Faktur" readonly> 
					</div>
					<div class="input-box">
						<span class="details">ID Karyawan</span>
						<input type="text" name="idKaryawan" placeholder="Masukkan ID Karyawan" required> 
					</div>
					<div class="input-box">
						<span class="details">ID Supplier</span>
						<input type="text" name="idSupplier" placeholder="Masukkan ID Supplier" required> 
					</div>	
					<div class="input-box">
						<span class="details">Tanggal</span>
						<input type="text" name="tanggal" placeholder="Masukkan Tanggal Transaksi" required> 
					</div>
					<div class="input-box">
						<span class="details">Jumlah</span>
						<input type="text" name="jumlah" placeholder="Masukkan Jumlah Barang" required> 
					</div>
					<div class="input-box">
						<span class="details">Keterangan</span>
						<input type="text" name="keterangan" placeholder="Masukkan Keterangan Transaksi" > 
					</div>				
					<div class="submitBtn">
						<input type="submit" name="submit"> 
					</div>
				</div>
			</form>
	</div>

</body>
</html>