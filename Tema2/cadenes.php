<?php declare( strict_types=1); ?>
<?php
$nom = "Salva";
$nomEspais = " Salva ";
$nomMinus = "salva";
$nomMayus = "SALVA";
$nomAmbO = "Manolo";
?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Exercici 1 cadenes</h1>

            <?php //1. Elimina els espais del principi i el final del nom si els hi haguera (trim).?>
            <p><?= "1. La cadena original es \"$nomEspais\" i la final es \"".trim($nomEspais)."\"."?></p>

            <?php //2. Elimina la lletra a del principi i el final del nom si els hi haguera (trim).?>
            <p><?= "2. La cadena original es \"$nom\" i la final es \"".trim($nom, "a")."\".";?></p>

            <?php //3. Mostra la variable nom en majúscules, minúscules i amb la primera lletra en majúscula i les altres en minúscules (strtoupper, strtolower, ucfirst).?>
            <p><?= "3. El nom tot el majuscules: \"".strtoupper($nomMinus)."\". El nom tot en minuscules: \"".strtolower($nomMayus)."\". El nom en sols la primera majuscula: \"".ucfirst($nomMinus)."\"." ?></p>

            <?php //4. Mostra el codi ascii de la primera lletra del nom (ord).?>
            <p><?= "4. El codi ascii de la primera lletra de la cadena \"$nom\" es: \"".ord("S")."\"."?></p>

            <?php //5. Mostra la longitud del nom (strlen).?>
            <p><?= "5. Mostra la longitud del nom \"$nom\" que es de: \"".strlen($nom)."\"."?></p>

            <?php //6. Mostra el nombre de vegades que apareix la lletra a (majúscula o minúscula, substr_count).?>
            <p><?= "6.1. Mostra en la cadena \"$nom\" quantes vegades apareix la lletra \"a\": \"".substr_count($nom,"a")."\"."?></p>
            <p><?= "6.2. Mostra en la cadena \"$nom\" quantes vegades apareix la lletra \"A\": \"".substr_count($nom,"A")."\"."?></p>

            <?php //7. Mostra la posició de la primera a existent en el nom, siga majúscula o minúscula (strpos). Si no hi ha cap mostrarà -1.?>
            <?php $cadena = stripos($nom, "a");
            if ($cadena === false){
                $resultat = -1;
            } else {
                $resultat = $cadena;
            }
            ?>
            <p><?= "7. Mostra en la cadena \"$nom\" la posicio de la primera \"a\": \"".$resultat."\"."?></p>

            <?php //8. El mateix, però amb l''última a.?>
            <p><?= "8. Mostra en la cadena \"$nom\" la posicio de la ultima \"a\": \"".strripos($nom,"a")."\"."?></p>

            <?php //9. Mostra el nom substituint la lletr o pel número zero, siga majúscula o minúscula (str_replace).?>
            <p><?= "9. Substitueix en la cadena \"$nomAmbO\" la lletra \"o\" per un \"0\": \"".str_replace(["o"], [0], $nomAmbO)."\"."?></p>

            <?php //10. Indica si el nom comença per al o no.?>
            <p><?= "10. Indica si la cadena \"$nom\" comença per al o no:"?>
            <?php
                if (strpos($nom, "al") === 0 ){
                    echo "\"$nom\" comença per al.";
                } else {
                    echo "\"$nom\" no comença per al.";
                }
                ?> </p>
                
        <h1>Exercici 2 Cadenes</h1>

            <?php $url="http://username:password@hostname:9090/path?arg=value#anchor"?>

            <?php //1. El protocol utilitzat (en l'exemple "http").?>
            <p><?= "1. El protocol utilitzat en la url \"$url\" es: \"".parse_url($url, PHP_URL_SCHEME)."\"."?></p>

            <?php //2. El nom d'usuari (en l'exemple "username").?>
            <p><?= "2. El nom d'usuari utilitzat en la url \"$url\" es: \"".parse_url($url, PHP_URL_USER)."\"."?></p>

            <?php //3. El path de la url (en l'exemple "/path"). ?>
            <p><?= "3. El path utilitzat en la url \"$url\" es: \"".parse_url($url, PHP_URL_PATH)."\"."?></p>

            <?php //4. El querystring de la url (en l'exemple "arg=value").?>
            <p><?= "4. El querystring utilitzat en la url \"$url\" es: \"".parse_url($url, PHP_URL_QUERY)."\"."?></p>

    </body>
</html>
