<?php

    require './controller/PlayList.php';
    require './model/Canzone.php';


    $playlist1 = new PlayList();

//    $playlist1->addCanzone(new Canzone(1, "Brividi", "Mahmood"));
//    $playlist1->addCanzone(new Canzone(2, "Zitti e buoni", "Maneskin"));

    $playlist1->init();

    //$canzoni = $playlist1->getCanzoni();
    echo "<table class='table table-striped'>";
    foreach ($playlist1->getCanzoni() as $canzone) {
        
        echo '<tr>';
        echo '<td><a target="_blank" href="https://www.google.com/search?q='.$canzone->titolo .'">' . $canzone->titolo . '</a></td>';
        echo '<td><a target="_blank" href="https://www.google.com/search?q='.$canzone->cantante .'">' . $canzone->cantante . '</a></td>';
        echo '</tr>';

    }
    echo '</table>';


?>