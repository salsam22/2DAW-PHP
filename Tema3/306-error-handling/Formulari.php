<?php

// Inicialitze les variables perquè existisquen en tots els possibles camins
// Sols emmagatzameré en elles valors vàlids.
// Acumularé els errors en un array per a mostrar-los al final.
// Use la sintaxi alternativa de les estructures de control per a la part de vistes.
// Cree funció clean per a netejar valors


require "helpers.php";
require "ValidationException.php";
require "RequiredValidationException.php";
require "TooLongValidationException.php";
require "TooShortValidationException.php";
require "InvalidPhoneValidationException.php";
require "InvalidEmailValidationException.php";
require "InvalidKeyValidationException.php";


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
$image = "";
$errors = [];

// per a la vista necessitem saber si s'ha processat el formulari
$isPost = false;

if (isPost()) {

    $isPost = true;


    try {
        if (validate_string($_POST["firstname"], 1, 25) == true)
            $firstname = clear($_POST["firstname"]);
    } catch (RequiredValidationException $e) {
        $errors[] = "The firstname is empry";
    } catch (TooLongValidationException $e) {
        $errors[] = "The firstname is soo long.";
    } catch (TooShortValidationException $e) {
        $errors[] = "The firstname is soo short";
    }


    try {
        if (validate_string($_POST["lastname"], 3, 50) == true)
            $lastname = clear($_POST["lastname"]);
    } catch (RequiredValidationException $e) {
        $errors[] = "The lastname is empty";
    } catch (TooLongValidationException $e) {
        $errors[] = "The lastname is soo long.";
    } catch (TooShortValidationException $e) {
        $errors[] = "The lastname is soo short.";
    }

    try {
        if (validate_phone($_POST["phone"]) == true)
            $phone = clear($_POST["phone"]);
    } catch (InvalidPhoneValidationException $e) {
        $errors[] = $e->getMessage();
    } catch (RequiredValidationException $e) {
        $errors[] = $e->getMessage();
    }


    try {
        if (validate_email($_POST["email"]) == true) {
            $email = clear($_POST["email"]);
        }
    } catch (RequiredValidationException $e) {
        $errors[] = $e->getMessage();
    } catch (InvalidEmailValidationException $e) {
        $errors[] = $e->getMessage();
    }


    if (empty($_POST["genre"]))
        $errors[]="Has de triar un gènere";
    else
        $genre = $_POST["genre"];


    try {
        if (is_empty($_POST["hobbies"] ?? [])){

        } else
            $hobbies = $_POST["hobbies"];
    } catch (RequiredValidationException $e) {
        $errors[] = "The hobbies cannot be empty";
    }

    try {
        if (is_empty($_POST["contact_time"] ?? []))
            $errors[] = "Has de triar almenys un hora";
        else
            $contact_time = $_POST["contact_time"];
    } catch (RequiredValidationException $e) {
        $errors[] = "The contact_time cannot be empty";
    }

    $rand = rand();
    $image = $_FILES["imagen"]["name"];
    $guardar = $_FILES["imagen"]["tmp_name"];
    $type = $_FILES["imagen"]["type"];
    $size = $_FILES["imagen"]["size"];

    if (file_exists("uploads")) {

        if (strpos($type,"jpeg")||strpos($type,"jpg")){
            echo "es una imatge jpg";
            if ($size<1048576){
                echo "El tamany esta correcte";
                if (move_uploaded_file($guardar, "uploads/" . $rand)) {
                    echo "Guardat correctament";
                }

            } else{
                $errors[]="El tamany no es correcte ja que ha de ser inferior a 1MB";
            }
        }else{
            $errors[]="no es una imatge jpg";
        }


    }
}

require "Formulari.view.php";
