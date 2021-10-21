<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Activitat Funcions</title>
</head>
<body>
    <h1>Activitat 242: Funció colors</h1>

    <?php
    $error = 0;
    $roig = 0;
    $verd = 0;
    $blau = 0;
    global $roig, $verd, $blau;
        if ($_POST["roig"] > 255 || $_POST["roig"] < 0){
            $error = 1;
            echo "<p>El numero introduit en el color roig no serveix perquè es major de 255 o menor que 0</p>";
        } else {
            $roig = $_POST["roig"];
        }
    if ($_POST["verd"] > 255 || $_POST["verd"] < 0){
        $error = 2;
        echo "<p>El numero introduit en el color verd no serveix perquè es major de 255 o menor que 0</p>";
    } else {
        $verd = $_POST["verd"];
    }
    if ($_POST["blau"] > 255 || $_POST["blau"] < 0){
        $error = 3;
        echo "<p>El numero introduit en el color blau no serveix perquè es major de 255 o menor que 0</p>";
    } else {
        $blau = $_POST["blau"];
    }
    if ($error == 1 || $error == 2 || $error == 3){
        echo "<p>No es pot crear el color perquè algun dels valors introduits ha fallat.</p>";
    } else {
        $valorRoig = dechex($roig);
        $valorVerd = dechex($verd);
        $valorBlau = dechex($blau);
        $valorTotal = "#". $valorRoig . "" . $valorVerd . "" . $valorBlau;
        echo "<p>El color obtes a partir dels numeros <strong>" . $roig . ", " . $verd . ", " . $blau . "</strong> que convertits a hexadecimal son <strong>"
            . $valorRoig . ", " . $valorVerd . ", " . $valorBlau . "</strong> i aquests valors hexadecimals fan el color <strong>" . $valorTotal . "</strong>.</p>";
        echo "<div style='padding: 100px; border: black solid 1px; background-color: $valorTotal;'></div>";
    }

    ?>
</body>
