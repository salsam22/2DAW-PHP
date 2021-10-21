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

    public function deal(int $amount):array
    {
        $cartesAJugar = [];
        for ($i = 0; $i < $amount; $i++) {
            $rand = array_rand($this->cards,1);

            array_push($cartesAJugar, $this->cards[$rand]);
            unset($this->cards[$rand]);
        }
        return $cartesAJugar;
    }

    public function play() {
        $jugador1 = [];
        $jugador2 = [];
        $jugador1 = $this->deal(5);
        $jugador2 = $this->deal(5);
        $cartesJugador1 = [];
        $cartesJugador2 = [];
        $vicJug1 = 0;
        $vicJug2 = 0;
        echo "<table border='solid 1px black'><tr>";
        for ($i = 0; $i < 5;$i++) {
            echo "<td><img alt=\"imagens\" src=\"cards/" . $jugador1[$i]->getSymbol() . "_of_" . $jugador1[$i]->getSuit() . ".svg\"/></td>";
            array_push($cartesJugador1, $jugador1[$i]->getValue());
        }
        echo "</tr><tr>";
        for ($i = 0; $i < 5;$i++) {
            echo "<td><img alt=\"imagens\" src=\"cards/" . $jugador2[$i]->getSymbol() . "_of_" . $jugador2[$i]->getSuit() . ".svg\"/></td>";
            array_push($cartesJugador2, $jugador2[$i]->getValue());
        }
        echo "</tr><tr>";

        for ($i = 0; $i < 5;$i++) {
            if ($cartesJugador1[$i] < $cartesJugador2[$i]) {
                echo "<td>Jugador 2 guanya</td>";
                $vicJug2++;
            } else if ($cartesJugador1[$i] > $cartesJugador2[$i]) {
                echo "<td>Jugador 1 guanya</td>";
                $vicJug1++;
            } else if ($cartesJugador1[$i] == $cartesJugador2[$i]) {
                echo "<td>Empate</td>";
            }
        }
        echo "</tr></table>";
        if ($vicJug1 > $vicJug2){
            echo "<p>Ha guanyat la partida el jugador 1</p>";
        } else if ($vicJug1 < $vicJug2){
            echo "<p>Ha guanyat la partida el jugador 2</p>";
        } else if ($vicJug1 == $vicJug2){
            echo "<p>La partida ha quedat empate</p>";
        }
    }

}
