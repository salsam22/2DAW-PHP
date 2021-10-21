<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Activitats Formularis</title>
</head>
<body>
<h1>Activitat 263: Formulari</h1>
<form method="get" action="263FormulariReparat.php">
    <p>Introdueix el teu nom: <input type="text" name="firstname"></p>
    <p>Introdueix el teu primer cognom: <input type="text" name="lastname"></p>
    <p>Introdueix el teu telefon: <input type="text" name="phone"></p>
    <p>Introdueix el teu email: <input type="text" name="email"></p>
    <p>Introdueix el teu codi postal: <input type="text" name="zipcode"></p>
    <p><input type="submit" value="Enviar" name="Enviar"></p>
</form>
</body>
</html>
<?php
echo "<table border='black solid 1px'>";
echo "    <tr>";
echo "        <th>Nom:</th>";
echo "        <td>". $_GET["firstname"] ."</td>";
echo "    </tr>";
echo "    <tr>";
echo "        <th>Cognom:</th>";
echo "        <td>". $_GET["lastname"] ."</td>";
echo "    </tr>";
echo "    <tr>";
echo "        <th>Telefon:</th>";
echo "        <td>". $_GET["phone"] ."</td>";
echo "    </tr>";
echo "    <tr>";
echo "        <th>Email:</th>";
echo "        <td>". $_GET["email"] ."</td>";
echo "    </tr>";
echo "    <tr>";
echo "        <th>Codi postal:</th>";
echo "        <td>". $_GET["zipcode"] ."</td>";
echo "    </tr>";
echo "</table>";
?>
