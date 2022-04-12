<?php

class Studente {
    
    public $nome;
    public $cognome;
    public $pos;

    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }


}

