<?php

class Linguaggio
{
    
    public $nome;
    public $tipo;

    public function __construct($nome, $tipo){
        $this->nome = $nome;
        $this->tipo = $tipo;
    }



}

$l1 = new Linguaggio("php", "server-side");
$l2 = new Linguaggio("java", "OOP");
$l3 = new Linguaggio("c#", "OOP");
$l4 = new Linguaggio("js", "client-side");

    $linguaggi = [ $l1, $l2, $l3, $l4 ];
/*
    foreach ($linguaggi as $chiave => $valore) {
        echo $chiave . ": " . $valore;
    }
*/

/**/
    header("Content-Type:application/json");
    echo json_encode($linguaggi);



?>