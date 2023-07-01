<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP dan MySQL</title>
    </head>
    <body>
        <h2>CRUD DATA MAHASISWA</h2>
        <br/>
        <a href = "index.php">KEMBALI</a>
        <br/>
        <br/>
        <h3>TAMBAH DATA MAHASISWA</h3>
        <form method = "post" action = "proses.php">
            <table>
                <tr>
                    <td>ID</td>
                    <td><input type ="text" name = "Id"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type ="text" name ="nama"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type ="text" name = "Email"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type ="text" name = "Jenis Kelamin"></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td><input type ="text" name = "awUsia"></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td><input type ="text" name = "Jabatan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type ="submit" value = "SIMPAN"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
