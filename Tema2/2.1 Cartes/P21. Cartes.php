<?php declare(strict_types=1);

const DIR = "cards/";

$cardFiles = array_diff(scandir(DIR), array('..', '.', 'back.svg'));

$cards = [];

// creem un array que associa cada símbol a un valor.
$values = ["2"=>2, "3"=>3, "4"=>4,"5"=>5, "6"=>6, "7"=>7, "8"=>8, "9"=>9, "10"=>10, "J"=>11, "Q"=>12, "K"=>13, "A"=>14];

// aquesta és la part principal de la solució, ja que definim una nova estructura que ens permet
// la manipulació completa de les cartes.

foreach ($cardFiles as $cardFile) {
    $cardAux = explode("_of_", $cardFile);
    // card[0] és el símbol

    $card["simbol"] = $cardAux[0];
    // removing .svg
    // spades.svg -> spades
    $card["tipus"] = substr($cardAux[1], 0, strlen($cardAux[1]) - 4);

    // card[2]  la ruta
    $card["ruta"] = $cardFile;

    // card[3] el valor 
    // guardem el valor
    $card["valor"] = $values[$cardAux[0]];

    //$cards[] = $card;
    array_push($cards, $card);
}

// shuffle for assuring the array isn't ordered yet.
shuffle($cards);
$cards1 = $cards;

// ordenem
sort($cards);
// assignme a la variable 
$cards2 = $cards;

// assignme a la variable 
array_multisort(array_column($cards, "tipus"), SORT_ASC, $cards);
$cards3 = $cards;


$order_by_value = function ($a, $b) use ($values) {
    return ($values[$a["simbol"]] > $values[$b["simbol"]]);
};

usort($cards, $order_by_value);
// assignme a la variable 
$cards4 = $cards;

array_multisort(array_column($cards, "tipus"), SORT_ASC, array_column($cards, "valor"), $cards);

// assignme a la variable 
$cards5 = $cards;

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
            flex-wrap: wrap;
        }

        .flex-item {
            flex: 0 1 50px;
        }

        img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <h1>Cartes</h1>
    <h2>Activitat 1 </h2>
    <p>Es puguen mostrar en la pàgina amb l'eqtiqueta img</p>
    <div class="flex">
        <!-- Aquest element conté cada imatge -->
        <?php foreach ($cards1 as $card) : ?>
            <div class="flex-item">
                <img alt="cartes" src="<?= DIR . $card["ruta"] ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Activitat 2 </h2>
    <p>Es puguen ordenar per el valor</p>
    <div class="flex">
        <!-- Aquest element conté cada imatge -->
        <?php foreach ($cards2 as $card) : ?>
            <div class="flex-item">
                <img alt="cartes" src="<?= DIR . $card["ruta"] ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Activitat 3</h2>
    <p>Es puguen ordenar del pal</p>
    <div class="flex">
        <!-- Aquest element conté cada imatge -->
        <?php foreach ($cards3 as $card) : ?>
            <div class="flex-item">
                <img alt="cartes" src="<?= DIR . $card["ruta"] ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Activitat 4</h2>

    <p>Es puguen ordenar pel valor, de menor a major, tenint en compte que després del 10 van la J, la Q i la K</p>
    <div class="flex">
        <!-- Aquest element conté cada imatge -->
        <?php foreach ($cards4 as $card) : ?>
            <div class="flex-item">
                <img alt="cartes" src="<?= DIR . $card["ruta"] ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Activitat 5</h2>    
    <p>Es puguen ordenar pel pal i valor, tenint en compte l'ordenació anterior.</p>
    <div class="flex">
        <!-- Aquest element conté cada imatge -->
        <?php foreach ($cards5 as $card) : ?>
            <div class="flex-item">
                <img alt="cartes" src="<?= DIR . $card["ruta"] ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <p>Ruben Romera y Salvador Tarazona</p>
    </footer>
</body>

</html>