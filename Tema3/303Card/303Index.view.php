<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>303 Cards</title>
</head>
<body>
<h1>303 Cards</h1>
<p>Presiona F5 per recarregar la pàgina i que aparega o el nom de les cartes o les imatges.</p>
<p>Si presiones varies voltes i no apareix l'altra opció, has de tenir pariencia i seguir intentant.</p>
<?php
    $i = rand(0, 1);
    if ($i == 0) {
        $cCollection->writer();
    } else if ($i == 1) {
        $cCollection -> cardImages();
    }
?>
</body>
</html>