<<<<<<< Updated upstream
<?php


function validateUserName(string $firstname): bool{
    if (empty($firstname) || strlen($firstname) < 1 || strlen($firstname) > 25) {
        return false;
    }
    return true;
}

function validateLastName(string $lastname): bool{
    if (empty($lastname) || strlen($lastname) < 1 || strlen($lastname) > 50) {
        return false;
    }
    return true;
}

function validatePhone(string $phone): bool{
    if (empty($phone) || preg_match("/^\d{9}$/", $_POST["phone"]) == false) {
        return false;
    }
    return true;
}

function validateEmail(string $email): bool{
    $emailTest = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if (empty($emailTest)) {
        return false;
    }
    return true;
}
=======
<?php


function validateUserName(string $firstname): bool{
    if (empty($firstname) || strlen($firstname) < 1 || strlen($firstname) > 25) {
        return false;
    }
    return true;
}

function validateLastName(string $lastname): bool{
    if (empty($lastname) || strlen($lastname) < 1 || strlen($lastname) > 50) {
        return false;
    }
    return true;
}

function validatePhone(string $phone): bool{
    if (empty($phone) || preg_match("/^\d{9}$/", $_POST["phone"]) == false) {
        return false;
    }
    return true;
}

function validateEmail(string $email): bool{
    $emailTest = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if (empty($emailTest)) {
        return false;
    }
    return true;
}
>>>>>>> Stashed changes
?>