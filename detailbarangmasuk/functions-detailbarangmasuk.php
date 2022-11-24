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
	$idBarang = $data["idBarang"];
	$kuantitas = $data["kuantitas"];
	

	$query = "INSERT INTO detailbarangmasuk
				VALUES 
				('$idFaktur', '$idBarang','$kuantitas')";
	$hasil = mysqli_query($konek, $query);
	
	return mysqli_affected_rows($konek);
}

function hapus($idFaktur) {
	global $konek;

	mysqli_query($konek, "DELETE FROM detailbarangmasuk WHERE idFaktur = '$idFaktur'");

	return mysqli_affected_rows($konek);
}


function ubah($data) {
	
	global $konek;

	$idFaktur = $_POST["idFaktur"];
	$idBarang = $_POST["idBarang"];
	$kuantitas = $_POST["kuantitas"];
	

	$query = "UPDATE detailbarangmasuk
				SET 
				idFaktur = '$idFaktur',
				idBarang = '$idBarang',
				kuantitas = '$kuantitas'
				
			WHERE idFaktur = '$idFaktur'

		";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

?>