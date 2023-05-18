<?php 

require "conn.php";
include "nakyma.php";

if(isset($_POST["talleta"])){
    $ilmoitus = $_POST['ilmoitus'];
    $kayttaja_id = $_SESSION['kayttaja_id'];
    $komento = "INSERT INTO vikailm (ilmoitus, vstatus_id, kayttaja_id)
    VALUES (:ilmoitus, 1, :kayttaja_id)";
    $lisaa = $conn->prepare($komento);
    $lisaa->bindValue(':ilmoitus', $ilmoitus, PDO::PARAM_STR);
    $lisaa->bindValue(':kayttaja_id', $kayttaja_id, PDO::PARAM_INT);
    $lisaa->execute();
    
    
}

    header("location: nakyma.php");


?>