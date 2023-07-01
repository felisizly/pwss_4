<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data</title>
</head>
<body>
	<h3>Tambah Data Mahasiswa</h3>
	<hr/>
	<form action="proses.php?action=add" method="post" >
		<input type="hidden" name="action" value="add" />
		<table>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>No.Hp</td>
				<td>:</td>
				<td><input type="text" name="hp"></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><select name="prodi">
					<option value="TI">Teknik Informatika</option>
					<option value="SI">Sistem Informasi</option>
					<option value="MI">Manajemen Informatika</option>
					<option value="KA">Komputerisasi Akuntansi</option>
					<option value="TK">Teknik Komputer</option>
				</select></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tombol" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
