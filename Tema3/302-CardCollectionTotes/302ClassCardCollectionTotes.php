<?php

class CardCollection
{

    protected array $cards;

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
}

