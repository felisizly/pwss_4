<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Dengan Tetap Sign in</title>
    </head>
    <body>
        <form action="proses.php" method ="post">
            <p><label for="username">Username :</label><input type="text" name = "username" /></p>
            <p><label for="password">Password :</label><input type="password" name = "password" /></p>
            <p><label for="remember"><input type="checkbox" name = "remember" value ="true" />Remember Me</label></p>
            <p>
                <button type ="submit" name ="login">login</button>
                <button type ="reset" name ="reset">Reset</button>
            </p>
        </form>
    </body>
    <?php
include ('statis.php');
session_start();

if (isset($_COOKIE['login'])) {
    if ($_COOKIE['login'] == $user) {ko
        $_SESSION['login'] = TRUE;

        header('location : ./home.php');
        exit();
    }
}
?>
</html>