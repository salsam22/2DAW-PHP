<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Activitat Funcions</title>
    </head>
    <body>
        <h1>Activitat 242: Funció imatge</h1>

        <?php
        //he possat la imatge en una variable global perquè no entenia massa be el que volies que hi ferem
        $imatge = "https://www.xtrafondos.com/descargar.php?id=5846&resolucion=2560x1440";
        global $imatge;

        function imatge(string $url, string $alt = "No alternative text", int $width = 0, int $height=0): string {
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

        echo imatge($imatge, "Programador", 250, 150);
        echo imatge($imatge, "Programador");

        ?>
    </body>
</html>
