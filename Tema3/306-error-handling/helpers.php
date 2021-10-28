<?php
function clear(string $value): string {
    $value = trim($value);
    return htmlspecialchars($value);
}

function isPost(): bool {
    return $_SERVER["REQUEST_METHOD"]==="POST";
}

function validate_string(string $string, int $minLength = 1, int $maxLength = 50000): void
{
    if ($string == null) {
        throw new RequiredValidationException("Name is empty, required name");
    }
    if ($string < $minLength) {
        throw new TooShortValidationException("Name is soo short.");
    }
    if ($string > $maxLength) {
        throw new TooLongValidationException("Name is soo long.");
    }
}

function is_empty($value):bool {
    return empty($value);
}

// compare if the current value in the selected array
function is_selected(string $value, array $array): bool {
    if (in_array($value, $array))
        return true;
    return false;
}

function show_post() {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}