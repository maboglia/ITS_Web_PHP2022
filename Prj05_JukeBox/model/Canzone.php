<?php

class Canzone {
    
    private $id;
    private $titolo;
    private $cantante;

    public function __construct($id, $titolo, $cantante) {//new Canzone(1, "Brividi", "Mahmood");
        $this->id = $id;
        $this->titolo = $titolo;
        $this->cantante = $cantante;
        //echo "oggetto canzone costruito: $titolo";
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __toString()
    {
        return "Canzone: " + $this->titolo;   
    }

}







?>