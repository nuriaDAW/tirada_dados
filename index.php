<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada dados</title>
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
<?php
session_start();

if ((!(empty($_REQUEST['email']) && empty($_REQUEST['psw'])) && $_REQUEST['email'] == 'juan@gmail.com' && $_REQUEST['psw'] == 'juan') || (!empty($_SESSION['logged']) && $_SESSION['logged'] === true)) {
    $_SESSION['logged'] = true;
    include('menu.html');
} else {
?>
    <article id="login">
        <h2>LOG IN</h2>

        <form action="" method="post">

            <input type="text" placeholder="Email" name="email" required>

            <input type="password" placeholder="Password" name="psw" required>

            <input type="submit" name="button" value="Log in" />
        </form>
    </article>

</body>
<?php
}
?>
</html>