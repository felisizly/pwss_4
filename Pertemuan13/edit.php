<?php
include 'tersekon.php';
$db = new database();
$nim = $_GET['x'];
if(! is_null($nim)){
	$data = $db->get_by_id($nim);
}else{
	header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data</title>
</head>
<body>
	<h3>Tambah Data Mahasiswa</h3>
	<hr/>
	<form method="post" action="proses.php?action=update">
		<input type="hidden" name="nim" value="<?php echo $data['nim'];?>"/>
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" value="<?php echo $data['email'];?>"></td>
			</tr>
			<tr>
				<td>No.Hp</td>
				<td>:</td>
				<td><input type="text" name="hp" value="<?php echo $data['hp'];?>"></td>
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