<?php
    if (isset($_POST["hasil"])) {
        $nama = $_POST["nama"];
        $foto = $_FILES["foto"]["name"];
        $tmp_name = $_FILES["foto"]["tmp_name"];
        move_uploaded_file($tmp_name, "images/" . $foto);
        $alamat = $_POST["alamat"];
        $kelamin = $_POST["kelamin"];
        $umur = $_POST["umur"];
        $email = $_POST["email"];
        $web = $_POST["web"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $ulangi = $_POST["ulangi"];
    ?>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Foto</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Email</th>
                <th>Website</th>
                <th>Username</th>
                <th>Password</th> 
                <th>Retype Password</th>
            </tr>
            <tr>
                <td><?php echo $nama; ?></td>
                <td><img src="images/<?php echo $foto; ?>"></td>
                <td><?php echo $alamat; ?></td>
                <td><?php echo $kelamin; ?></td>
                <td><?php echo $umur; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $web; ?></td>
                <td><?php echo $username; ?></td>
                <td><?php echo $password; ?></td>
                <td><?php echo $ulangi; ?></td>

            </tr>

        <?php } ?>
        </table>