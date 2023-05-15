<?php
header('Content-Type:text/html; charset=utf-8');

try{
    $palvelin = "localhost";
    $tietokanta = "khuoltodb";
    $tunnus = "root";
    $salasana = "";

    $yhteys = new PDO("mysql:host=$palvelin; dbname=$tietokanta", $tunnus, $salasana);
    $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Onnistui ";
}
catch(PDOException $virhe){
    echo "Virhe on " . $virhe->getMessage();
}

?>