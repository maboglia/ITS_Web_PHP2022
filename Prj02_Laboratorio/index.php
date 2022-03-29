<?php include 'header.php'; ?>

<?php include 'menu.php' ?>

<?php 
//routing - 
if (  isset($_GET['pagina'])     ){

    switch ($_GET['pagina']) {
        case 'variabili':
            include 'variabili.php';
            break;
        
        default:
            # code...
            break;
    }



}

?>



<?php include 'footer.php'; ?>