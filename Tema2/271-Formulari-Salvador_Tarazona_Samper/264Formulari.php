<?php

// Inicialitze les variables perquè existisquen en tots els possibles camins
// Sols emmagatzameré en elles valors vàlids.
// Acumularé els errors en un array per a mostrar-los al final.
// Use la sintaxi alternativa de les estructures de control per a la part de vistes.
// Cree funció clean per a netejar valors

function clear(string $value): string {
    $value = trim($value);
    return htmlspecialchars($value);
}

$firstname = "";
$lastname = "";
$phone = "";
$email = "";
$errors = [];

// per a la vista necessitem saber si s'ha processat el formulari
$isPost = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isPost = true;

    //Totes les validacions dels camps del formulari
    require "helper.php";
    if (validateUserName($_POST["firstname"]) == false) {
        $errors[] = "El nom es massa curt o massa llarg";
    } else {
        $firstname = $_POST["firstname"];
    }

    if (validateLastName($_POST["lastname"]) == false) {
        $errors[] = "El cognom es massa curt o massa llarg";
    } else {
        $lastname = $_POST["lastname"];
    }

    if (validatePhone($_POST["phone"]) == false) {
        $errors[] = "Tlfn no valido, deben ser exactamente 9 digitos";
    } else {
        $phone = $_POST["phone"];
    }

    if (validateEmail($_POST["email"]) == false) {
        $errors[] = "Correu electrònic no indicat o erroni";
    } else {
        $email = $_POST["email"];
    }
}

?>
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Actividad 262: Formulari</title>
    <meta name="description" content="PHP, PHPStorm">
    <meta name="author" content="Homer Simpson">
</head>

<body>
    <form action="264Formulari.php" method="post">
        <pre>
        <?php 
            if (!empty($errors))
                print_r($errors) 
                ?>
        </pre>
        <div>
            <label for="firstname">Name</label>
            <input type="text" name="firstname" value="<?=$firstname?>">
        </div>
        <div>
            <label for="lastname">Cognoms</label>
            <input type="text" name="lastname" value="<?=$lastname?>">
        </div>
        <div>
            <label for="phone">Telèfon</label>
            <input type="text" name="phone" value="<?=$phone?>">
        </div>
        <div>
            <label for="email">Correu electrònic</label>
            <input type="text" name="email" value="<?=$email?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

    <?php if (empty($errors) && $isPost): ?>
        <table>
            <tr>
                <th>Nom</th>
                <td><?= $firstname ?></td>
            </tr>
            <tr>
                <th>Cognom</th>
                <td><?= $lastname ?></td>
            </tr>
            <tr>
                <th>Telèfon</th>
                <td><?= $phone ?></td>
            </tr>
            <tr>
                <th>Correu</th>
                <td><?= $email ?></td>
            </tr>
        </table>
    <?php endif ?>
</body>

</html>