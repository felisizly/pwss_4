<html>
<h1>Form Registrasi</h1>
<hr>
<form action="proses_registrasi.php" method="POST" enctype="multipart/form-data">
    Nama : <input type="text" name="nama"> <br>
    Foto : <input type="file" name="foto"> <br>
    Alamat : <input type="text" name="alamat"> <br>
    Jenis Kelamin : <input type="radio" name="kelamin" value="Pria">Pria
    <input type="radio" name="kelamin" value="Wanita">Wanita <br>
    Umur : <input type="text" name="umur"> <br>
    email : <input type="text" name="email"> <br>
    website :<input type="text" name="web"> <br>
    Username: <input type="text" name="username"> <br>
    Password: <input type="password" name="password"> <br>
    Retype Password: <input type="password" name="ulangi"> <br>
    <input type="submit" name ="hasil" value="Registrasi">
</form>

</html>