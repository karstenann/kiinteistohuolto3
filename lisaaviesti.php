<?php

require "conn.php";

if(isset($_POST['submit'])){
    $nimi = $_POST['name'];
    $email = $_POST['email'];
    $puhelin = $_POST['phone'];
    $viesti = $_POST['message'];
    // $pvm = $_POST['yht_pvm'];
    //mitä kuuluu tehdä, kun tämä on timestamp, eikä sitä 

    $komento = "INSERT INTO yhtotot(yht_nimi, yht_email, yht_puhelin, yht_viesti) VALUES (:yht_nimi, :yht_email, :yht_puhelin, :yht_viesti)";
    $lisaa = $conn->prepare($komento);
    $lisaa->bindValue(':yht_nimi', $nimi, PDO::PARAM_STR);
    $lisaa->bindValue(':yht_email', $email, PDO::PARAM_STR);
    $lisaa->bindValue(':yht_puhelin', $puhelin, PDO::PARAM_STR);
    $lisaa->bindValue(':yht_viesti', $viesti, PDO::PARAM_STR);
    $lisaa->execute();
}

header("location:lomake.php");

?>