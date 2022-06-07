<?php

    require_once "../controller/alimentiREST.php";

    $ctrl = new alimentoREST();

    $page = $_GET['id']??'home';

    if($page=='home'){
        $ctrl -> getAlimenti();
    }
    elseif($page > 0){
        $ctrl -> getAlimento($page);
    }
    
?>