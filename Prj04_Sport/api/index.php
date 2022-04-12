<?php require '../controller/sportCtrl.php'; 

    header("Content-Type:application/json");
    echo json_encode($_SESSION['sports']);



?>



