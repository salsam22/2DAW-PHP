<?php
/**
 * 
 *
 * @author Ruben Romera y Salvador Tarazona
 *
 */
$cartas = [];
$cartas = glob("cards/*.svg");
//print_r($cartas);
$nombresCartas = [];
$arrayPrimeraPos = [];
$arrayLength = count($cartas);

function ejercicio1(){

}

foreach ($cartas as $carta){
    echo "<img src=\"$carta\">";
    //$nombresCartas = explode("/",$carta);

}
for ($i = 0; $i < $arrayLength; $i++){
    $carta = $cartas[$i];

    $nombresCartas[$i] = explode("/",$carta);
}


for ($i = 0; $i < $arrayLength; $i++) {

    $arrayNumeros[$i] = ($nombresCartas[$i][1]);


    /*if ($i <= 16) {
        $arrayPrueba[$i] = ($nombresCartas[$i][1]);
    } else {
        $arrayNumeros[$i] = ($nombresCartas[$i][1]);
    }*/
}

sort($arrayNumeros);
echo "<br><br>";

foreach ($arrayNumeros as $carta){
    echo "<img src=\"cards/$carta\">";

}

    shuffle($arrayNumeros);
    echo "<br><br><br>";
    for ($i = 0; $i < $arrayLength; $i++){
        if (stripos($arrayNumeros[$i], 'clubs') !== false) {
            echo "<img src=\"cards/$arrayNumeros[$i]\">";
        }
    }
    echo "<br>";
    for ($i = 0; $i < $arrayLength; $i++){
        if (stripos($arrayNumeros[$i], 'diamonds') !== false) {
            echo "<img src=\"cards/$arrayNumeros[$i]\">";
        }
    }
    echo "<br>";
    for ($i = 0; $i < $arrayLength; $i++){
        if (stripos($arrayNumeros[$i], 'hearts') !== false) {
            echo "<img src=\"cards/$arrayNumeros[$i]\">";
        }
    }
    echo "<br>";
    for ($i = 0; $i < $arrayLength; $i++){
        if (stripos($arrayNumeros[$i], 'spades') !== false) {
            echo "<img src=\"cards/$arrayNumeros[$i]\">";
        }
    }



    sort($arrayNumeros, 1);
    echo "<br><br><br>";

    $prueba = false;
    $prueba2 = false;
    $prueba3 = false;


    pruebaFuncion("clubs","J", $arrayNumeros);
    pruebaFuncion("clubs","q", $arrayNumeros);
    pruebaFuncion("clubs","k", $arrayNumeros);
    pruebaFuncion("clubs","A", $arrayNumeros);

    pruebaFuncion("diamonds","J", $arrayNumeros);
    pruebaFuncion("diamonds","q", $arrayNumeros);
    pruebaFuncion("diamonds","k", $arrayNumeros);
    pruebaFuncion("diamonds","A", $arrayNumeros);

    pruebaFuncion("hearts","J", $arrayNumeros);
    pruebaFuncion("hearts","q", $arrayNumeros);
    pruebaFuncion("hearts","k", $arrayNumeros);
    pruebaFuncion("hearts","A", $arrayNumeros);

    pruebaFuncion("spades","J", $arrayNumeros);
    pruebaFuncion("spades","q", $arrayNumeros);
    pruebaFuncion("spades","k", $arrayNumeros);
    pruebaFuncion("spades","A", $arrayNumeros);


    function pruebaFuncion($palo, $letra, $arrayNumeros){

        for($j = 0; $j < 52; $j++){
            if (stripos($arrayNumeros[$j], $palo) !== false) {
                if(stripos($arrayNumeros[$j], $letra) !== false) {
                    echo "<img src=\"cards/$arrayNumeros[$j]\">";
                }
            }
        }
    }


    echo "<br>";
    for ($i = 0; $i < $arrayLength; $i++){
        if (stripos($arrayNumeros[$i], 'diamonds') !== false) {
            echo "<img src=\"cards/$arrayNumeros[$i]\">";
        }
    }
    echo "<br>";
    for ($i = 0; $i < $arrayLength; $i++){
        if (stripos($arrayNumeros[$i], 'hearts') !== false) {
            echo "<img src=\"cards/$arrayNumeros[$i]\">";
        }
    }
    echo "<br>";
    for ($i = 0; $i < $arrayLength; $i++){
        if (stripos($arrayNumeros[$i], 'spades') !== false) {
            echo "<img src=\"cards/$arrayNumeros[$i]\">";
        }
    }




















?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="utf-8">
  <title>
    Cartes.    
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

.flex { 
  display: flex;
  justify-content: center;
}

.flex-item {
  flex: 0 1 50px;
}

img {
    width: 50px;
    height: auto;
}

</style>
</head>

<body>
  <h1>Cartes</h1>

  <h2>1. Es puguen mostrar en la pàgina amb l'etiqueta < img >.</h2>

  <div class="flex">
    <!-- Aquest element conté cada imatge -->
    <div class="flex-item">
        <!-- Ací va la imatge -->

    </div>
  </div>
  <footer>
    <p>Escriviu aquí el nom</p>
  </footer>
</body>
</html>
