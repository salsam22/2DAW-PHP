<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Activitat Arrays</title>
</head>
<body>
    <h1>Activitat 232</h1>

<?php
$suma = 0;
$ciutats = array("Madrid" => ["MAD",3223334],
    "Sevilla" => ["AN",688711],
    "Murcia" => ["MU",447182],
    "Málaga" => ["AN",571026],
    "Zaragoza" => ["AR",666880],
    "València" => ["CV",791413],
    "Barcelona" => ["CAT",1620343]);
echo "<table border='1px'>";
echo "<tr><th>Ciutat</th><th>Habitants</th></tr>";
foreach ($ciutats as $ciutat => $habitants){
    echo "<tr><td>$ciutat</td><td>$habitants[1]</td></tr>";
    $suma += $habitants[1];
}

echo "<tr><th>Total</th><td>$suma</td></tr>";
echo "</table>";
?>
</body>
</html>
