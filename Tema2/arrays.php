<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Activitat Arrays</title>
    </head>
    <body>
        <h1>Activitat 4</h1>
        <?php
        //1. Crea un array amb els noms de diversos alumnes de la classe incloent el teu.
        $arrayAlumnes = ["Salva", "Ruben", "Steven", "Joan", "Saoro", "Jordi"];
        echo "1.  ";
        print_r($arrayAlumnes);
        $arrayCopia = $arrayAlumnes;

        //2. Mostra el nombre delements que té l'array (count).
        $arrayGrandaria = count($arrayAlumnes);
        echo "<p>2. La grandaria del array de alumnes es de: \"".$arrayGrandaria."\".</p>";

        //3. Crea una cadena de text que continga els noms dels alumnes existents en larray separats per un espai i mostra-la (implode).
        $cadenaNoms = implode(" ",$arrayAlumnes);
        echo "<p>3. Noms dels alumnes separats per un espai: \"".$cadenaNoms."\".</p>";

        //4. Mostra larray en un ordre aleatori diferent al que ho vas crear (shuffle).
        shuffle($arrayCopia);
        echo "4.  ";
        print_r($arrayCopia);
        echo "<p></p>";

        //5. Mostra larray ordenat alfabèticament (sort).
        sort($arrayCopia);
        echo "5.  ";
        print_r($arrayCopia);
        echo "<p></p>";

        //6. Mostra els alumnes el nom dels quals continga almenys una a (array_filter).
        //print_r(array_filter($arrayAlumnes, "a"));

        //7. Mostra larray en l'ordre invers al que es va crear (rsort).
        rsort($arrayCopia);
        echo "7.  ";
        print_r($arrayCopia);
        echo "<p></p>";

        //8. Mostra la posició que té el teu nom en l'array (array_search).
        $posicio = array_search("Salva", $arrayAlumnes);
        echo "<p>8. La posició en la que esta \"Salva\" en larray original es la: ".$posicio."</p>";
        ?>
    </body>
</html>
