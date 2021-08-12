<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HOME</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Data Mahasiswa Universitas Historia</h1>
	<table border="1">
		<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Mahasiswa</a>
		<br>
		<br>
		<tr>
			<td>No</td>
			<td>NIM</td>
			<td>Nama</td>
			<td>Jurusan</td>
			<td>Aksi</td>
		</tr>
		<?php
			$no = 0;
			foreach ($queryAllMhs as $baris) {
				$no = $no + 1;
		?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $baris->nim ?></td>
			<td><?php echo $baris->nama ?></td>
			<td><?php echo $baris->jurusan ?></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $baris->nim ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $baris->nim ?>">Hapus</a></td>
		</tr>
		<?php 
		  }
		?>
	</table>
</body>
</html>