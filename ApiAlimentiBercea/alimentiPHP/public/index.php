<?php

    require_once "../controller/alimentiMVC.php";

    $ctrl = new alimentoMVC();

    $page = $_GET['id']??'home';

    if($page=='home'){
        $ctrl -> getAlimenti();
    }
    
    if($page >= 0){
        $ctrl -> getAlimento($page);
    }
    

?>