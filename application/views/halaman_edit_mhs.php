<!DOCTYPE html>
<html>
<head>
	<title>Edit Mahasiswa</title>
</head>
<body>
	<h3>Edit Data Mahasiswa</h3>
	<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" value="<?php echo $queryDetailMhs->nim ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $queryDetailMhs->nama ?>"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><input type="text" name="jurusan" value="<?php echo $queryDetailMhs->jurusan ?>"></td>
		</tr>
		<tr>
			<td><button type="submit">Edit Mahasiswa</button></td>
			<td colspan="3"><button type="button" value="Go Back" onclick="history.back(-1)">Batal</button></td>
		</tr>
	</table>
	</form>

</body>
</html>