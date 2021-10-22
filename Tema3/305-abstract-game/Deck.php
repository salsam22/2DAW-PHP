<?php
    class Deck extends CardCollection {

        public function shuffle()
        {
            shuffle($this->cards);
        }

        public function deal(int $amount): array
        {
            $cards = [];
            for ($i = 0; $i < $amount; $i++) {
                $cards[] = array_shift($this->cards);
            }
            return $cards;
        }
    }