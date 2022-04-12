<?php require '../model/studente.php' ?>


<?php

    $elenco = '../files/studenti.txt';

    $studenti = file($elenco);

    echo "<pre>";
    print_r($studenti);
    echo "</pre>";

?>