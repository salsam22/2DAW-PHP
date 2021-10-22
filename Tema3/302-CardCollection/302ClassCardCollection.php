<?php

class CardCollection
{

    private array $cards;

    public function add(array $array)
    {
        $this->cards[] = $array;
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

