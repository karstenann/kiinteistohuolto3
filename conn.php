<?php

try{
    $servername = "localhost";
    $database = "khuoltodb";
    $tunnus = "root";
    $salis = "";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $tunnus, $salis);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    print "<p>Epäonnistui. </p>" . $e->getMessage();
}

?>