<?php

class Sport {
    
    public $nome;
    public $tipo;

    public function __construct($nome, $tipo)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        echo "oggetto costruito!";
    }

    public function stampaScheda()
    {
        return "Lo sport " . $this->nome . " è uno sport di tipo " . $this->tipo;
    }

}

// $sport1 = new Sport("rugby", "squadra");//reference all'oggetto ($sport1)

// echo $sport1->nome;
// echo $sport1->stampaScheda();




