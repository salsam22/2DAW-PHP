<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Activitat Funcions</title>
</head>
<body>
<h1>Activitat 241: Funció imatge</h1>

<?php

function imatge(string $url, string $alt = "No alternative text", int $width = 0, int $height=0): string
{
    $img = "<img src=\"$url\" alt=\"$alt\" ";
    if ($width > 0) {
        $img .= " width=\"$width\"";
    }
    if ($height > 0) {
        $img .= " height=\"$height\" ";
    }
    $img .= "/>";
    return $img;

}

echo imatge("https://www.xtrafondos.com/descargar.php?id=5846&resolucion=2560x1440", "Programador", 250, 150);
echo imatge("https://www.xtrafondos.com/descargar.php?id=5846&resolucion=2560x1440", "Programador");
?>


</body>
</html>