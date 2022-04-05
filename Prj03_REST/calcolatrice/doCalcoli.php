<?php
session_start();

if ( isset($_POST['operando1']) && isset($_POST['operando2'])   ){

    $addizione = $_POST['operando1'] + $_POST['operando2'];
    $sottrazione = $_POST['operando1'] - $_POST['operando2'];
    $moltiplicazione = $_POST['operando1'] * $_POST['operando2'];
    $divisione = $_POST['operando1'] / $_POST['operando2'];

    $_SESSION['risultati'] = [$addizione, $sottrazione, $moltiplicazione, $divisione];

}

header("Location:viewCalcoli.php");

?>