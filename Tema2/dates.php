<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Activitat Dates</title>
</head>
<body>
    <h1>Activitat 3</h1>

        <?php //1. Mostra la data i hora actuals amb el format: dd/mm/yyyy hh:mm:ss
        $dataHora = date("d/m/y, H:i:s");
        echo "<p>1. La data i hora actuals son: \"$dataHora\".</p>";

        //2. Mostra el nom de la zona horària que s'utilitza per defecte.
        $nomZona = date_default_timezone_get();
        echo "<p>2. El nom de la zona horària que s'utilitza per defecte és: \"$nomZona\".</p>";

         //3. Mostra la data de que serà d’ací 45 dies.
        $hui = date("d-m-y");
        $huiMesDies = date("d/m/y", strtotime("+ 45days"));
        echo "<p>3. Aquesta será la data sumant 45 dies a la data actual: \"$huiMesDies\".</p>";

        //4. Mostra el nombre de dies que han passat des de l'1 de gener.
        $iniciAny = mktime(0,0,0,1,1,2021);
        $diferencia = time() - $iniciAny;
        $diesPassats = ((($diferencia / 60) /60)/24);
        echo "<p>4. El nombre de dies que han passat desde el 1-1-21 son: \"$diesPassats\".</p>";

        //5. Mostra la data i hora actuals de Nova York.
        date_default_timezone_set("America/New_York");
        $dataHoraNY = date("d/m/y, H:i:s");
        echo "<p>5. La data i hora a NY: \"$dataHoraNY\".</p>";

        //6. Mostra el dia de la setmana que era l'1 de gener d'enguany
        function diaSemana($data) {
            $dies = ["","Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissabte","Diumenge"];
            $dia = $dies[date('N', strtotime($data))];
            echo "<p>6. Dia de la setmana que era el dia 01/01/21: \"$dia\".</p>";
            print_r($dies);
        }
        diaSemana("2021-01-01");

        $diaSemanaCorr = date("l", strtotime("2021-01-01"));
        echo "<p>6. El dia de la setmana per al 01/01/2021 es:\"$diaSemanaCorr\"";
        ?>
</body>
</html>