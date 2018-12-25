<?php

require_once('koneksi.php');



$id = $_GET["id"];

if ($id > 0) {
	echo "
		<script>
			alert('Berhasil dihapus');
			document.location.href = 'index.php';
		</script>";
}else{

	echo "
	<script>
		alert('data gagal dihapus');
		document.location.href = 'index.php';
	</script>";


}

mysqli_query($conn, "DELETE FROM data_pegawai WHERE id = $id " );



?>