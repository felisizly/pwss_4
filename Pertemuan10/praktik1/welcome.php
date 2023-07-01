<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");
}
?>
<html>

<head>
    <tittle>Selamat Datang</tittle>
</head>

<body>
    <h1>Selamat Datang<?php echo $_SESSION['nama']; ?></h1>
    <h4>Selamat Anda BerhasilLogin </h4>

    <a href="logout.php">Logout</a>
</body>

</html>