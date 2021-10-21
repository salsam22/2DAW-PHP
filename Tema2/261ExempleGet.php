<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Activitats Formularis</title>
</head>
<body>
    <h1>Activitat 261: Exemple Get</h1>
    <form method="get" action="261ExempleGet.php">
        <p>Introdueix el teu nom: <input type="text" name="Nom"></p>
        <p><input type="submit" value="Enviar" name="Enviar"></p>
    </form>
</body>
</html>

<?php

echo "<p>Benvingut ".$_GET["Nom"]."!!!</p>";

?>