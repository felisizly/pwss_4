<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("location: index.php");
}
?>
<html>

<head>
    <title>Selamat datang</title>
</head>

<body>
    <h1>Selamat datang <?php echo $_SESSION['nama']; ?></h1>
    <h4>Selamat anda berhasil login</h4>
    <a href="logout.php">Logout</a>
</body>

</html>