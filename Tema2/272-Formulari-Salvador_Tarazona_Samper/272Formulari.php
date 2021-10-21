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
    require "272Helper.php";
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

//Tot el codi html
require "272Formulari.view.php";


