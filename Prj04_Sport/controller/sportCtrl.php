<?php
require '../model/sport.php';
session_start();
//include non è bloccante, se non trova il file lo segnalo con un warning e il codice continua ad essere eseguito
//require blocca l'esecuzione

//include_once, require_once


if ( isset($_SESSION['sports'])  ) {
    $_SESSION['sports'];
} else {
    $_SESSION['sports'] = [];
}
 


if ( isset($_POST['nome']) && trim($_POST['nome']) != ''   ){
    
    $_SESSION['sports'][] = new Sport($_POST['nome'], $_POST['tipo']);

}

//print_r($_SESSION['sports']);
// echo $sport1->nome;
// echo $sport1->stampaScheda();