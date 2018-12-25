<?php

require_once('koneksi.php');
$query=mysqli_query($conn, "SELECT * FROM data_pegawai");
$results=mysqli_fetch_all($query, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html>
<html>
<head>
	<title>daftar_pegawai</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="daftar">
<div class="container jumbotron">
	<h3>DAFTAR PEGAWAI1</h3>
		<a href="form_daftar.php" style="color:#932114;">[+]Tambah Data</a>
	<table border="1" cellpadding="10" cellspacing="0" class="table" style="margin-top: 0px">
		<thead>
		  <tr class="row">
		  	<th>NO</th>
			<th>FOTO</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>EMAIL</th>
			<th>NO.HP</th>
			<th>AKSI</th>
		  </tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
		<?php foreach($results as $result): ?>
			<tr class="row">
				<td><?= $no++;?></td>
				<td><img src="img/<?=$result['foto'];?>" width="50" ></td>
				<td><?= $result['nama']; ?></td>
				<td><?= $result['alamat']; ?></td>
				<td><?= $result['email']; ?></td>
				<td><?= $result['no_hp']; ?></td>
				<td>
					<a href="ubah.php?id=<?= $result["id"]; ?>" onclick="return confirm('apakah anda ingin mengubah data ini?');">ubah</a> |

					<a href="delete.php?id=<?= $result["id"]; ?>" onclick="return confirm('Anda Yakin ingin Menghapus data ini?');">hapus</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>



</body>
</html>