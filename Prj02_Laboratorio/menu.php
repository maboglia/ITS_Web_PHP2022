<?php

$labels = [
    "variabili",
    "stringhe",
    "funzioni",
];

for ($i=0; $i < count($labels); $i++) { 
    echo "<a href='?pagina=".$labels[$i]."'>".$labels[$i]."</a> ";
}

?>