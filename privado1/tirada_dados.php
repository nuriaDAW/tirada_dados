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
    <title>Tirada dados</title>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
</head>

<body>
    <nav>
        <h1>Menú</h1>
        <ul>
            <li><a href="#">TIRADA</a></li>
            <li><a href="../privado2/sumar_7.php">SUMA 7</a></li>
            <li><a href="../privado3/par_impar.php">PAR/IMPAR</a></li>
            <li><a href="#">ACERCA DE</a></li>
        </ul>
    </nav>
    <main>
        <?php
        echo '<h1>Tirada de dados</h1>';
        echo '<p>Escribe un script PHP que realice la simulación de lanzar 5 dados y
 muestre una imagen con los valores obtenidos en cada uno de los dados.</p>';

        for ($i = 0; $i < 5; $i++) {

            $numero = rand(1, 6);

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
        ?>
    </main>
</body>
</html>