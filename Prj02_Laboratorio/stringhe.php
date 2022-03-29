
<?php

$pianeta = "Terra";
$satellite = "Luna";


$var1 = "  Ciao $pianeta Gentile Me ne Vado sulla {$satellite}Piena  ";
echo $var1;

echo "<h2>". "Funzioni per gestire le stringhe" . "</h2>";

echo "Minuscolo: ".strtolower($var1) . "<br>\n";
echo "Maiuscolo: ".strtoupper($var1) . "<br>\n";
echo "Iniziale maiuscola: ".ucfirst($var1) . "<br>\n";
echo "Iniziale parole maiuscola: ".ucwords($var1) . "<br>\n";

echo "Lungezza stringa: ".strlen($var1). "<br>\n";
echo "Elimina gli spazi prima e dopo: ".trim($var1). "<br>\n";
echo "Sostituisci: " . str_replace("Terra", "Marte", $var1);
echo "Trova: " . strstr($var1, "Luna");
echo "Ripeti: " . str_repeat($var1, 5);
echo "Substring: ". substr($var1, -5);
?>
