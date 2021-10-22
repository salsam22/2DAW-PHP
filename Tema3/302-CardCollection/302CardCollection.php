<?php
require "302ClassCard.php";
require "302ClassCardCollection.php";


$card1 = new Card("clubs", "5", 5);
$card2 = new Card("diamonds", "K", 13);
$card3 = new Card("hearts", "Q", 12);
$card4 = new Card("spades", "J", 11);
$card5 = new Card("clubs", "A", 1);
$cardNew = new Card("Hearts", "3", 3);

$cardsArray = [$card1, $card2, $card3, $card4, $card5];

shuffle($cardsArray);

$cCollection = new CardCollection();
$cCollection->add($cardsArray);
$cCollection->addCard($cardNew);

require "302CardCollection.view.php";