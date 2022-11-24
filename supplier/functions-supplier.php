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
	
	$idSupplier = $_POST["idSupplier"];
	$namaSupplier = $data["namaSupplier"];
	$alamat = $data["alamat"];
	

	$query = "INSERT INTO supplier
				VALUES 
				('$idSupplier', '$namaSupplier','$alamat')";
	$hasil = mysqli_query($konek, $query);
	
	return mysqli_affected_rows($konek);
}

function hapus($idSupplier) {
	global $konek;

	mysqli_query($konek, "DELETE FROM supplier WHERE idSupplier = '$idSupplier'");

	return mysqli_affected_rows($konek);
}


function ubah($data) {
	
	global $konek;

	$idSupplier = $_POST["idSupplier"];
	$namaSupplier = $_POST["namaSupplier"];
	$alamat = $_POST["alamat"];
	

	$query = "UPDATE supplier
				SET 
				idSupplier = '$idSupplier',
				namaSupplier = '$namaSupplier',
				alamat = '$alamat'
				
			WHERE idSupplier = '$idSupplier'

		";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

?>