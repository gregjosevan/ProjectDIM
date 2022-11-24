<!-- Kelompok 3
2440107411 - Aldrick Aaron
2440007592 - Jonathan Buntoro
2440109770 - Fahmi Muhamad
2440037336 - Gregorius Josevan Harintoro
2440087334 - Willy Candra -->
<?php

$konek = mysqli_connect("localhost", "root", "", "projectdim");

function query($query) {
	global $konek;
	$result = mysqli_query($konek, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
 	}
 	return $rows;
}




function tambah($data) {
	
	global $konek;
	
	$idFaktur = $_POST["idFaktur"];
	$idKaryawan = $data["idKaryawan"];
	$idSupplier = $data["idSupplier"];
	$tanggal = $data["tanggal"];
	$jumlah = $data["jumlah"];
	$keterangan = $data["keterangan"];
	

	$query = "INSERT INTO pesanan
				VALUES 
				('$idFaktur', '$idKaryawan','$idSupplier', '$tanggal', '$jumlah', '$keterangan')";
	$hasil = mysqli_query($konek, $query);
	
	return mysqli_affected_rows($konek);
}

function hapus($idFaktur) {
	global $konek;

	mysqli_query($konek, "DELETE FROM pesanan WHERE idFaktur = '$idFaktur'");

	return mysqli_affected_rows($konek);
}


function ubah($data) {
	
	global $konek;

	$idFaktur = $_POST["idFaktur"];
	$idKaryawan = $_POST["idKaryawan"];
	$idSupplier = $_POST["idSupplier"];
	$tanggal = $_POST["tanggal"];
	$jumlah = $_POST["jumlah"];
	$keterangan = $_POST["keterangan"];
	

	$query = "UPDATE pesanan
				SET 
				idFaktur = '$idFaktur',
				idKaryawan = '$idKaryawan',
				idSupplier = '$idSupplier',
				tanggal = '$tanggal',
				jumlah = '$jumlah',
				keterangan = '$keterangan'
				
			WHERE idFaktur = '$idFaktur'

		";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

?>