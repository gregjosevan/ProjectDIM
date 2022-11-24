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
	
	$idKategori = $_POST["idKategori"];
	$kategoriBarang = $data["kategoriBarang"];
	

	$query = "INSERT INTO kategori
				VALUES 
				('$idKategori', '$kategoriBarang')";
	$hasil = mysqli_query($konek, $query);
	
	return mysqli_affected_rows($konek);
}

function hapus($idKategori) {
	global $konek;

	mysqli_query($konek, "DELETE FROM kategori WHERE idKategori = '$idKategori'");

	return mysqli_affected_rows($konek);
}


function ubah($data) {
	
	global $konek;

	$idKategori = $_POST["idKategori"];
	$kategoriBarang = $_POST["kategoriBarang"];
	

	$query = "UPDATE kategori
				SET 
				idKategori = '$idKategori',
				kategoriBarang = '$kategoriBarang'
				
			WHERE idKategori = '$idKategori'

		";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

?>