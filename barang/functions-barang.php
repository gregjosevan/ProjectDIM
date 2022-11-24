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
	
	$idBarang = $_POST["idBarang"];
	$idKategori = $data["idKategori"];
	$namaBarang = $data["namaBarang"];
	$hargaBarang = $data["hargaBarang"];
	$stockBarang = $data["stockBarang"];

	$query = "INSERT INTO barang
				VALUES 
				('$idBarang', '$idKategori',  '$namaBarang', '$hargaBarang', '$stockBarang')
		";
	$hasil = mysqli_query($konek, $query);
	
	return mysqli_affected_rows($konek);
}

function hapus($idBarang) {
	global $konek;

	mysqli_query($konek, "DELETE FROM barang WHERE idBarang = '$idBarang'");

	return mysqli_affected_rows($konek);
}


function ubah($data) {
	
	global $konek;

	$idBarang = $_POST["idBarang"];
	$idKategori = $_POST["idKategori"];
	$namaBarang = $_POST["namaBarang"];
	$hargaBarang = $_POST["hargaBarang"];
	$stockBarang = $_POST["stockBarang"];

	$query = "UPDATE barang
				SET idBarang = '$idBarang',
				idKategori = '$idKategori',
				namaBarang = '$namaBarang',
				hargaBarang = '$hargaBarang',
				stockBarang = '$stockBarang'
			WHERE idBarang = '$idBarang'

		";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

?>