<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
</head>
<body>
	<h3>Tambah Data Mahasiswa</h3>
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><input type="text" name="jurusan"></td>
		</tr>
		<tr>
			<td ><button type="submit">Tambah Mahasiswa</button></td>
			<td colspan="3"><button type="button" value="Go Back" onclick="history.back(-1)">Batal</button>
		</tr>
	</table>
	</form>

</body>
</html>