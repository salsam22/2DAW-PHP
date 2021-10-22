<?php

class CardCollection
{

    private array $cards;

    public function add(array $array)
    {
        foreach ($array as $card){
            $this->addCard($card);
        }
    }

    public function addCard(Card $card)
    {
        $this->cards[] = $card;
    }

    /**
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    public function shuffle()
    {
        shuffle($this->cards);
    }

    public function writer() {
        $this->shuffle();
        foreach ($this->cards as $card) {
            echo "<p>" . $card->getSuit() . " - " . $card->getSymbol() . " - " . $card->getValue() . "</p>";
        }
    }

    public function cardImages() {
        $this->shuffle();
        foreach ($this->cards as $card) {
            echo "<img alt=\"imagenes de las cartas de la baraja francesa\" src=\"cards/" . $card->getSymbol() . "_of_" . $card->getSuit() . ".svg\"/>";
        }
    }

}
