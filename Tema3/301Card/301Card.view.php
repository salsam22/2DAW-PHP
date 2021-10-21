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
    <h1>301 Cards</h1>
    <?php foreach($cards as $card):?>
        <p><?=$card->getSuit()." - ". $card -> getSymbol()." - ". $card -> getValue()?></p>
    <?php endforeach;?>
</body>
</html>