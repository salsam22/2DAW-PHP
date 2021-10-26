<?php
require "Employee.php";


$emp = new Employee("Salvador", "Tarazona",3145);

$emp->addPhone("652664235");
$emp->toHtml($emp);
require "index.view.php";