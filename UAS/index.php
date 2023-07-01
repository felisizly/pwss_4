<!DOCTYPE html>
<html>
    <head>
        <title>UAS PWSS</title>
    </head>
    <body>
        <h2>CRUD DATA PEGAWAI</h2>
        <br/>
        <a href="tambah.php">+ TAMBAH DATA</a>
        <br/>
        <br/>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>JENIS KELAMIN</th>
                <th>USIA</th>
            </tr>
            
        <?php 
            include 'koneksi.php';
            $data = mysqli_query($koneksi,"select * from pegawai");
            while($d = mysqli_fetch_assoc($data)){
        ?>
        <tr>
            <td><?php echo $d['Id']; ?></td>
            <td><?php echo $d['Nama']; ?></td>
            <td><?php echo $d['Email']; ?></td>
            <td><?php echo $d['Jenis Kelamin']; ?></td>
            <td><?php echo $d['awUsia']; ?></td>
            <td>
                <a href="edit.php?Id=<?php echo $d['Id']; ?>">EDIT</a>
                <a href="delete.php?Id=<?php echo $d['Id']; ?>">HAPUS</a>
            </td>
        </tr>
        
        <?php 
            }
        ?>
        </table>
    </body>
</html>
