<?php
require "302ClassCardTotes.php";
require "302ClassCardCollectionTotes.php";
$cardsArray = [];
$suits = ["Clubs","Spades","Diamonds","Hearts"];
$symbols = ["A",2,3,4,5,6,7,8,9,10,"J","Q","K"];
$i = 1;
foreach ($suits as $suit){
    foreach ($symbols as $symbol){
        $cardNew = new Card($suit, $symbol, $i);
        array_push($cardsArray, $cardNew);
        if ($i < 13){
            $i++;
        } else {
            $i = 1;
        }
    }
}

$cCollection = new CardCollection();
$cCollection->add($cardsArray);
require "302CardCollectionTotes.view.php";