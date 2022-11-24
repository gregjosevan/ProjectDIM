<!-- Kelompok 3
2440107411 - Aldrick Aaron
2440007592 - Jonathan Buntoro
2440109770 - Fahmi Muhamad
2440037336 - Gregorius Josevan Harintoro
2440087334 - Willy Candra -->
<?php
require 'functions-supplier.php';

$idSupplier = $_GET["idSupplier"];

if(hapus($idSupplier) > 0) {
	echo "
	<script> 
			alert('Data berhasil dihapus!');
			document.location.href = 'supplier.php';
		</script>
	";
} else {
	echo "
	<script> 
			alert('Data gagal dihapus!');
			document.location.href = 'supplier.php';
		</script>
	";
}


?>