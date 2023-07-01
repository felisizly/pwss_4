<?php
session_start();
echo "<script>window.location.asign('logout.php')</script>";
session_destroy();
?>
