<?php

$host = "mysql:host=localhost:3306;dbname=php2022";
$user = "root";
$pass = "";

try {
    //code...
    $DB = new PDO($host, $user, $pass);
    echo 'connesso';
} catch (PDOException $eccezione) {
    echo $eccezione->getMessage();
}

$query = $DB->query("select * from canzoni");

$query->setFetchMode(PDO::FETCH_OBJ);
    while($result = $query->fetch()){
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
