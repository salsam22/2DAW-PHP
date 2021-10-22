<?php
require "Card.php";
require "CardCollection.php";
$cardsArray = [];
$suits = ["clubs","spades","diamonds","hearts"];
$symbols = ["2","3","4","5","6","7","8","9","10","J","Q","K","A"];
$i = 2;
$cCollection = new CardCollection();
foreach ($suits as $suit){
    foreach ($symbols as $symbol){
        $cardNew = new Card($suit, $symbol, $i);
        array_push($cardsArray, $cardNew);
        if ($i < 14){
            $i++;
        } else {
            $i = 2;
        }
    }
}

$cCollection->add($cardsArray);
require "Index.view.php";