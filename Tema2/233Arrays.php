<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Activitat Arrays Multidimensionals</title>
</head>
<body>
<h1>Activitat 233. Maneig d'arrays multidimensionals</h1>

<?php

// a) Crea un array d'alumnes on cada element siga un altre array que continga nom i edat de l'alumne.
$alumnes = [
    [
            'nom'=>"Steven",
            'edat'=>20
    ],
    [
            'nom'=>"Ruben",
            'edat'=>18
    ],
    [
            'nom'=>"Joan",
            'edat'=>21
    ],
    [
            'nom'=>"Saoro",
            'edat'=>18
    ],
    [
            'nom'=>"Jordi",
            'edat'=>19
    ]
];

//exercici 2
?>
<table style="border: 1px solid;">
    <tr>
        <th style="border-bottom: 2px solid;">Nom</th>
        <th style="border-bottom: 2px solid;">Edat</th>
    </tr>


    <?php
    foreach($alumnes as $alumne){
        //Bucle per a imprimir la informació en la tabla
        echo "<tr>";
        echo "<td style=\"border-right: 2px solid;\">";
        echo $alumne['nom'];
        echo "</td>";
        echo "<td>";
        echo $alumne['edat'];
        echo "</td>";
        echo "</tr>";
    }?>

</table>

<?php
//exercici 3

$noms = array_column($alumnes, 'nom');?>

<pre>
<?php
print_r($noms);
?>
</pre>
<p>Activity D</p>
<?php
//exercici 4

$numeros=[1,2,3,4,5,6,7,8,9,10];
echo "Total suma --> ".array_sum($numeros);
?>
<p>Activity E</p>
<p>Sense usar bucles for calcula la mitjana d'edat de l'alumnat.</p>
<?php
//exercici 4
$elements = count($alumnes);
$total = array_sum(array_column($alumnes, "edat"));
?>

<p>Mitjana <?=$total/$elements ?></p>

<?php
echo "<p>Mitjana: " .($total/$elements) ."</p>";
?>


</body>
</html>