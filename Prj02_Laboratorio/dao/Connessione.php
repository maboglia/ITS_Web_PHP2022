<?php

include '../model/Libro.php';

//1 mysqli() procedurale

define("DB_HOST", "localhost");
define("PORT", "3306");
define("USER", "root");
define("PASSW", "");
define("DB_NAME", "php2022");

$db = mysqli_connect(DB_HOST, USER, PASSW, DB_NAME, PORT);

$query = "SELECT * FROM libri";

$righe = mysqli_query($db, $query);

$libri = [];

while ($riga = mysqli_fetch_array($righe)) {
    $libro = new Libro($riga['id'], $riga['titolo']);
    $libri[] = $libro;
}
/*
foreach ($libri as $libro) {
    echo $libro . "<br>";
}
*/

header("ContentType:application/json");
echo json_encode($libri);



//2 new mysqli OOP
//3 PDO OOP - anche db diversi da mysql

