<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location: ./index.php');
}
?>
<DOCTYPE html>
    <html>
        <head>
            <meta charset = "utf-8">
            <title>Home remember me</title>
        </head>
        <body>
            <h5>Anda Berhasil Login Sebagai admin</h5>
            <p><a href=" ./logout.php">Logout</a></p>
        </body>
    </html>