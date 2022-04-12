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



if (        isset($_POST)     ){

    echo count($_POST);

    for ($i=0; $i < 30 ; $i++) { 

        $studente = new Studente($_POST['nome'][$i], $_POST['cognome'][$i]);
        $studente->pos = $_POST['posizione'][$i];
        // echo $_POST['nome'][$i]; 
        // echo $_POST['cognome'][$i]; 
        // echo $_POST['posizione'][$i]; 
        // echo "<br>";
        $arrayStudenti[] = $studente;
    
    }


}



?>
