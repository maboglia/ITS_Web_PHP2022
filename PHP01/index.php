<?php include 'header.php'; ?>


<?php

    if ( $_POST['username'] == 'admin' && $_POST['password'] == '12345'  ){
        include 'pagina1.php';
    } else {
        include 'pagina2.php';
    }


?>


    
<?php include 'footer.php'; ?>