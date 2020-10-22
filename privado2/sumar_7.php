<?php
session_start();
if (empty($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header('Location: ../index.php', true);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar 7</title>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
</head>

<body>
    <nav>
        <h1>Menú</h1>
        <ul>
            <li><a href="../privado1/tirada_dados.php">TIRADA</a></li>
            <li><a href="#">SUMA 7</a></li>
            <li><a href="../privado3/par_impar.php">PAR/IMPAR</a></li>
            <li><a href="#">ACERCA DE</a></li>
        </ul>
    </nav>
    <main>
        <?php
        if (@isset($_REQUEST['submit_count'])) {
            $count = $_REQUEST['submit_count'] + 1;
        } else {
            $count = 0;
        }
        if (array_key_exists('submit_count', $_POST)) {
            echo '<h1>Nº intentos para sumar 7</h1>';
            $suma = 0;
            for ($i = 0; $i < 2; $i++) {

                $numero = rand(1, 6);

                $suma += $numero;

                switch ($numero) {
                    case 1:
                        echo '<img src="../img/uno.jpg" alt="uno" width="128" height="128">';
                        break;
                    case 2:
                        echo '<img src="../img/dos.jpg" alt="dos" width="128" height="128">';
                        break;
                    case 3:
                        echo '<img src="../img/tres.jpg" alt="tres" width="128" height="128">';
                        break;
                    case 4:
                        echo '<img src="../img/cuatro.jpg" alt="cuatro" width="128" height="128">';
                        break;
                    case 5:
                        echo '<img src="../img/cinco.jpg" alt="cinco" width="128" height="128">';
                        break;
                    case 6:
                        echo '<img src="../img/seis.jpg" alt="seis" width="128" height="128">';
                        break;
                }
            }
            echo '<p>El número de veces que se ha intentado sumar 7 con los dados ha sido: ' . $count . '</p>';
            if ($suma == 7) {
                $count = 0;
            }
        }
        ?>
        <form action="" method="post">
            <input name="submit_count" type="hidden" value="<?php echo $count; ?>" />
            <input type="submit" name="submit1" value="Tirar dados" />
        </form>
    </main>
</body>
</html>