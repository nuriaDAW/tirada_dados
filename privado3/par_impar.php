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
    <title>Sumar dados PAR/IMPAR</title>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
</head>

<body>
    <nav>
        <h1>Menú</h1>
        <ul>
            <li><a href="../privado1/tirada_dados.php">TIRADA</a></li>
            <li><a href="../privado2/sumar_7.php">SUMA 7</a></li>
            <li><a href="#">PAR/IMPAR</a></li>
            <li><a href="#">ACERCA DE</a></li>
        </ul>
    </nav>
    <main>
        <h1>Sumar dados PAR/IMPAR</h1>
        <p>Escribe un script PHP para adivinar si la suma de tres dados será par o impar.</p>
        <?php
        if (isset($_REQUEST['submit1'])) {
            $suma = 0;
            for ($i = 0; $i < 3; $i++) {

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

                $suma += $numero;
            }
        } else {
            echo '
    <form name="par_impar" id="par_impar" action="" method="post">
        <input type="radio" id="par" name="parImpar" value="par" checked>
        <label for="par">PAR</label><br>
        <input type="radio" id="impar" name="parImpar" value="impar">
        <label for="par">IMPAR</label><br>
        <input type="submit" name="submit1" value="Comprobar" />
    </form>
    ';
        }
        ?>
    </main>
    <script>
        var apuesta = "<?php echo $_REQUEST['parImpar'] ?>";
        var suma = "<?php echo $suma ?>";
        if (apuesta == "par" && suma % 2 == 0) {
            alert('Has acertado. La suma de los números es par.');
        } else if (apuesta == "par" && suma % 2 != 0) {
            alert('NO has acertado. La suma de los números es impar.');
        } else if (apuesta == "impar" && suma % 2 != 0) {
            alert('Has acertado. La suma de los números es impar.');
        } else {
            alert('NO has acertado. La suma de los números es par.');
        }
    </script>
</body>
</html>