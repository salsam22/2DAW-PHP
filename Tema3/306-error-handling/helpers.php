<?php
function clear(string $value): string {
    $value = trim($value);
    return htmlspecialchars($value);
}

function isPost(): bool {
    return $_SERVER["REQUEST_METHOD"]==="POST";
}

function validate_string(string $string, int $minLength = 1, int $maxLength = 50000): bool
{
    if ($string == null) {
        throw new RequiredValidationException("Is empty, required");
    }
    if (strlen($string) < $minLength) {
        throw new TooShortValidationException("Is soo short.");
    }
    if (strlen($string) > $maxLength) {
        throw new TooLongValidationException("Is soo long.");
    }
    return true;
}

function is_empty($value):bool {
    if (empty($value)){
        throw new RequiredValidationException("Is empty, required");
    }
    return true;
}

// compare if the current value in the selected array
function is_selected(string $value, array $array): bool {
    if (in_array($value, $array))
        return true;
    return false;
}

function validate_email(string $email):bool {
    if (empty($email)) {
        throw new RequiredValidationException("The email cannot be empty.");
    }
    if (!filter_var( $email, FILTER_VALIDATE_EMAIL)){
        throw new InvalidEmailValidationException("The email is not valid");
    }
    return true;
}

function validate_phone(string $phone): bool {
    if (empty($phone))
        throw new RequiredValidationException("Phone is required");
    if (!preg_match("/^\d{9}$/", $phone))
        throw new InvalidPhoneValidationException("Invalid phone");

    return true;
}


function show_post() {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}