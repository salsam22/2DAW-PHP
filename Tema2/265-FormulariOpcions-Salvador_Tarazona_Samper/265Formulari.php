<?php

// Inicialitze les variables perquè existisquen en tots els possibles camins
// Sols emmagatzameré en elles valors vàlids.
// Acumularé els errors en un array per a mostrar-los al final.
// Use la sintaxi alternativa de les estructures de control per a la part de vistes.
// Cree funció clean per a netejar valors


require "helpers.php";

$firstname = "";
$lastname = "";
$phone = "";
$email = "";
$genre1 = ["M" => "Home", "F" => "Dona", "NB" => "No Binari"];
$genre = "";
$hobbies1 = ["L" => "Lectura", "P" => "Programacio", "C" => "Ciclisme", "R" => "Running"];
$hobbies = [];
$contact_time1 = ["1" => "Primera hora", "2" => "Abans de dinar", "3" => "Despres de dinar", "4" => "Per la nit"];
$contact_time = [];
$errors = [];

// per a la vista necessitem saber si s'ha processat el formulari
$isPost = false;

if (isPost()) {

    $isPost = true;

    if (validate_string($_POST["firstname"], 1, 25 ))
        $firstname = clear($_POST["firstname"]);
    else
        $errors[] = "Error en validar el nom";


/*    if (empty($_POST["firstname"])) {
        $errors[] = "Nombre requerido";
    } else {
        if (strlen($_POST["firstname"]) > 25) {
            $errors[] = "Nombre no valido, no puede superar los 25 carácteres";
        } else {
            $firstname = clear($_POST["firstname"]);
        }
    }*/

    if (validate_string($_POST["lastname"], 3, 50))
        $lastname = clear($_POST["lastname"]);
    else
        $errors[] = "Apellido vacio o erròneo";


    if (empty($_POST["phone"])) {
        $errors[] = "Telèfon requerit";
    } else {
        if (preg_match("/^\d{9}$/", $_POST["phone"])) {
            $phone = $_POST["phone"];
        } else {
            $errors[] = "Tlfn no valido, deben ser exactamente 9 digitos";
        }
    }
    $emailTest = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if (empty($emailTest)) {
        $errors[] = "Correu electrònic no indicat o erroni";
    } else {
        $email = $emailTest;
    }

    if (empty($_POST["genre"]))
        $errors[]="Has de triar un gènere";
    else
        $genre = $_POST["genre"];


    if (is_empty($_POST["hobbies"] ?? []))
        $errors[]="Has de triar almenys un hobbie";
    else
        $hobbies = $_POST["hobbies"];

    if (is_empty($_POST["contact_time"] ?? []))
        $errors[]="Has de triar almenys un hora";
    else
        $contact_time=$_POST["contact_time"];

}

require "265Formulari.view.php";
