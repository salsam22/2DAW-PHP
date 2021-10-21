<?php
require '301ClassCard.php';

$card1 = new Card("clubs","5",5);
$card2 = new Card("diamonds","K",13);
$card3 = new Card("hearts","Q",12);
$card4 = new Card("spades","J",11);
$card5 = new Card("clubs","A",1);

$cards = [$card1,$card2,$card3,$card4,$card5];

shuffle($cards);

require "301Card.view.php";