<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Activitats Formularis</title>
</head>
<body>
<h1>Activitat 264: Formulari</h1>
<form method="post" action="264FormulariValidat.php" novalidate>
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
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<table border='black solid 1px'>";
    echo "    <tr>";
    echo "        <th>Nom:</th>";
    if (strlen($_POST["firstname"]) > 25) {
        echo "    <td>El nom introduit te mes de 25 caracters així que no es valid</td>";
    } else {
        echo "    <td>" . $_POST["firstname"] . "</td>";
    }
    echo "    </tr>";
    echo "    <tr>";
    echo "        <th>Cognom:</th>";
    if (strlen($_POST["lastname"]) > 50) {
        echo "    <td>El cognom introduit te mes de 50 caracters així que no es valid</td>";
    } else {
        echo "    <td>" . $_POST["lastname"] . "</td>";
    }
    echo "    </tr>";
    echo "    <tr>";
    echo "        <th>Telefon:</th>";
if (preg_match("/^\d{9}$/", $_POST["phone"]) == false){
    echo "    <td>El numero introduit no es valid</td>";
} else {
    echo "    <td>" . $_POST["phone"] . "</td>";
}
    echo "    </tr>";
    echo "    <tr>";
    echo "        <th>Email:</th>";
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
        echo "    <td>El email introduit no es valid</td>";
    } else {
        echo "    <td>" . $_POST["email"] . "</td>";
    }
    echo "    </tr>";
    echo "    <tr>";
    echo "        <th>Codi postal:</th>";
    echo "        <td>" . $_POST["zipcode"] . "</td>";
    echo "    </tr>";
    echo "</table>";
}
?>
