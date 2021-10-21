<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>302 Cards</h1>
<?php
foreach ($cCollection->getCards() as $card) {
    foreach ($card as $value) {
        echo "<p>" . $value->getSuit() . " - " . $value->getSymbol() . " - " . $value->getValue() . "</p>";
    }
    if (is_array($card) != true) {
        echo "<p>" . $card->getSuit() . " - " . $card->getSymbol() . " - " . $card->getValue() . "</p>";
    }
}
?>
</body>
</html>