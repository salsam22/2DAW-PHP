<?php

class Card
{

    private string $suit;
    private string $symbol;
    private int $value;

    public function __construct(string $suit, string $symbol, int $value)
    {
        $this->suit = $suit;
        $this->symbol = $symbol;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getSuit(): string
    {
        return $this->suit;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }
}

