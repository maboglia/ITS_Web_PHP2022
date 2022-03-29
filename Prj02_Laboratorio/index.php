<?php include 'config.php'; ?>
<?php $titolo_pagina =  ( isset($_GET['pagina']) ) ?  $_GET['pagina'] : TITOLO_HOME ;  ?>
<?php include 'header.php'; ?>


<div class="container-fluid">
    <?php include 'menu.php' ?>
</div>
    
<div class="container">
<h1><?= ucfirst($titolo_pagina) ?></h1>
    
    <?php 
//routing - 
if (  isset($_GET['pagina'])     ){
    
    switch ($_GET['pagina']) {
        case 'variabili':
            include 'variabili.php';
            break;
            
        case 'stringhe':
            include 'stringhe.php';
            break;
        
        case 'funzioni':
            include 'funzioni.php';
            break;
        
        case 'array':
            include 'array.php';
            break;
        
        default:
            include 'home.php';
            break;
    }



} else {
    include 'home.php';
}

?>

</div>


<?php include 'footer.php'; ?>