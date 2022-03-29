<?php


for ($i=0; $i < count($labels); $i++) { 
    $classe = ($titolo_pagina == $labels[$i]) ? 'active' : '';

    echo "<a class='{$classe}' href='?pagina=".$labels[$i]."'         >".$labels[$i]."</a> ";
}

?>