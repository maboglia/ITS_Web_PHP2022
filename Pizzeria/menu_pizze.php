<?php

class Pizza {

    public $nome;
    public $prezzo;
    public $ingredienti;
    public $codPizza;

    public function __construct($codPizza, $nome, $prezzo, $ingredienti) {
        $this->codPizza = $codPizza;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->ingredienti = $ingredienti;
    }

    public function __toString()
    {
        return $this->nome . "..........". $this->prezzo.
        
        " (". implode(', ',$this->ingredienti).')';
        
        ;
    }    

}




//$pizze = array("margherita");
$pizze = [
    new Pizza(1,"margherita", 5, ["pomodoro", "mozzarella"]),
    new Pizza(2,"4 stagioni", 6, ["pomodoro", "mozzarella", "fontina"]),
    new Pizza(3,"prosciutto", 6.5, ["pomodoro", "mozzarella", "prosciutto"]),
    new Pizza(4,"melanzane", 5.5, ["pomodoro", "mozzarella", "melanzane"]),
    new Pizza(5, "bianca", 4.5, ["mozzarella"]),
];



?>