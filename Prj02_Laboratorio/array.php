<?php

$nani = array(
    "pisolo", "eolo", "mammolo"
);

$nani2 = [
    "cucciolo",
    'dotto',
    'brontolo',
    'gongolo'
];

$nani[] = "pippolo";

$trimestri = [
    ["primo", 1250],
    ["secondo", 1550],
    ["terzo", 2250],
    ["quarto", 3250],
];

?>

<table>

    <?php for ($i=0; $i < count($trimestri) ; $i++) { 
        echo "<tr>";

            for ($j=0; $j <2 ; $j++) { 
                echo "<td>{$trimestri[$i][$j]}</td>";
            }

        echo "</tr>";
    }  ?>



</table>
