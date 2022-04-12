<?php require '../model/studente.php' ?>


<?php

    $elenco = '../files/studenti.txt';

    $studenti = file($elenco);

    $arrayStudenti = array();

    foreach ($studenti as $studente) {
        $studenteEsploso = explode(",", $studente);
        $nome = $studenteEsploso[0];
        $cognome = $studenteEsploso[1];

        $arrayStudenti[] = new Studente($nome, $cognome);
    }

?>