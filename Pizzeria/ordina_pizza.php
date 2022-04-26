<?php

include 'menu_pizze.php';

session_start();
//unset($_SESSION['ordini']);

    if (    isset($_GET['codPizza'])  ){

        /*preparo il file per la scrittura */

       
        $fh = fopen("ordini.txt", 'a');


        foreach ($pizze as $pizza) {
            
            if ($pizza->codPizza == $_GET['codPizza']){
                fwrite($fh, $pizza);
                fwrite($fh, "\n");
                fclose($fh); 

                $_SESSION['ordini'][] = serialize($pizza);
                header("Location:index.php");
                
            }



        }



    }


?>
