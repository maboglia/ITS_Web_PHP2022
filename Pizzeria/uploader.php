<?php
// Cartella dove voglio salvare i file caricati

$target_path = "img/";
$target_path = $target_path.basename( $_FILES['uploadedfile']['name']);

// Costruisco il path finale

if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
echo "Il file ".basename( $_FILES['uploadedfile']['name'])."e stato caricato";
}
else { 
    echo "errore nel caricamento del file, riprova!";
}
?>