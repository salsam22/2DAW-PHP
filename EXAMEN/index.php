<?php declare(strict_types=1); ?>
<?php
$title = ""; $description = ""; $dueDate = ""; $category = "";
$priority = 0; $errors = [];
$categories = [
    "pers" => "Personal",
    "work" => "Treball",
    "house" => "Casa",
    "hobbies" => "Aficions"
];
$priorities = [
    1 => "Baixa",
    2 => "Mitjana",
    3 => "Alta"
];
require "helpers.php";
if (isPost()) {
    if (validate_string($_POST["title"], 1,100 ))
        $title = clean($_POST["title"]);
    else
        $errors[] = "Error en validar el títol";
    if (validate_string($_POST["description"], 1,300 ))
        $description = clean($_POST["description"]);
    else
        $errors[] = "Error en validar la descripció";
    if(!empty($_POST["due-date"]&&validate_date($_POST["due-date"])))
        $dueDate = $_POST["due-date"];
    else
        $errors[] = "Cal indicar una data correcta";

    if(!empty ($_POST["category"]) && in_array($_POST["category"],array_keys($categories)))
        $category = $_POST["category"];
    else
        $errors[]="Has de triar una categoria vàlida";
    if (!empty($_POST["priority"]) && in_array($_POST["priority"],array_keys($priorities)))
        $priority = $_POST["priority"];
    else
        $errors[] = "Tria una prioridad correcta";
}
require 'index.view.php';