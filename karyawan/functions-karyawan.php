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
	
	$idKaryawan = $_POST["idKaryawan"];
	$namaKaryawan = $data["namaKaryawan"];
	$posisiKaryawan = $data["posisiKaryawan"];
	$alamatKaryawan = $data["alamatKaryawan"];

	$query = "INSERT INTO karyawan
				VALUES 
				('$idKaryawan', '$namaKaryawan',  '$posisiKaryawan', '$alamatKaryawan')
		";
	$hasil = mysqli_query($konek, $query);
	
	return mysqli_affected_rows($konek);
}

function hapus($idKaryawan) {
	global $konek;

	mysqli_query($konek, "DELETE FROM karyawan WHERE idKaryawan = '$idKaryawan'");

	return mysqli_affected_rows($konek);
}


function ubah($data) {
	
	global $konek;

	$idKaryawan = $_POST["idKaryawan"];
	$namaKaryawan = $_POST["namaKaryawan"];
	$posisiKaryawan = $_POST["posisiKaryawan"];
	$alamatKaryawan = $_POST["alamatKaryawan"];

	$query = "UPDATE karyawan
				SET idKaryawan = '$idKaryawan',
				namaKaryawan = '$namaKaryawan',
				posisiKaryawan = '$posisiKaryawan',
				alamatKaryawan = '$alamatKaryawan'
			WHERE idKaryawan = '$idKaryawan'

		";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

?>