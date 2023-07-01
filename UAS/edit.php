<!DOCTYPE html>
<html>
    <head>
        <title>UAS PWSS</title>
    </head>
    <body>
        <h2>CRUD DATA PEGAWAI</h2>
        <br/>
        <a href="index.php">KEMBALI</a>
        <br/>
        <br/>
        <h3>EDIT DATA PEGAWAI</h3>
<?php
include 'koneksi.php';
$Id = $_GET['Id'];
$data = mysqli_query($koneksi,"select * from wahyunursejati where Id='$Id'");
while($d = mysqli_fetch_array($data)){
?>

<form method="post" action="update.php">
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="hidden" name="Id" value="<?php echo $d['Id']; ?>">
                <input type="text" name="Nama" value="<?php echo $d['Nama']; ?>">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="Email" value="<?php echo 
            $d['email']; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="Jenis Kelamin" value="<?php echo 
            $d['Jenis Kelamin']; ?>"></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td><input type="text" name="awUsia" value="<?php echo 
            $d['awUsia']; ?>"></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td><input type="text" name="Jabatan" value="<?php echo 
            $d['Jabatan']; ?>"></td>
        </tr>
    </body>
</html>
<tr>
    <td></td>
    <td><input type="submit" name="simpan" 
    value="SIMPAN"></td>
</tr>
</table>
</form>
<?php 
}
?>
</body>
</html>
