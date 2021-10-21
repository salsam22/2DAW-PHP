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

    public function deal():array
    {
        //echo "<img alt=\"imagens\" src=\"cards/" . $this->cards[$rand]->getSymbol() . "_of_" . $this->cards[$rand]->getSuit() . ".svg\"/>";
        $cartesAJugar = [];
        for ($i = 0; $i < 10; $i++) {
            $rand = array_rand($this->cards,1);

            array_push($cartesAJugar, $this->cards[$rand]);
            unset($this->cards[$rand]);
        }
        return $cartesAJugar;
    }

    public function play() {
        $array = $this->deal();
        var_dump(array_chunk($array,5));
        for ($i = 0; $i < 5;$i++) {
            echo "<img alt=\"imagens\" src=\"cards/" . $array[0][$i]->getSymbol() . "_of_" . $array[0][$i]->getSuit() . ".svg\"/>";
        }
    }

}
