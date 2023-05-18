<?php

    require "conn.php";
    include "poimitehtava.php";

    if(isset($_GET['vika_id']) && isset($_GET['tyontekija_id'])){

        $vikaid = $_GET['vika_id'];
        $tyontekija = $_GET['tyontekija_id'];

        $kysely = "INSERT INTO tehtavat (vika_id, tyontekija_id)
        VALUES (:vika_id, :tyontekija_id)";
        $lisaa = $conn->prepare($kysely);
        $lisaa->bindValue(':vika_id', $vikaid, PDO::PARAM_STR);
        $lisaa->bindValue(':tyontekija_id', $tyontekija, PDO::PARAM_INT);
        $lisaa->execute();

        $tyontekijat_kysely = "UPDATE tyontekijat SET tstatus_id = :tstatus_id WHERE tyontekija_id = :tyontekija_id";
        $tyontekijat_paivita = $conn->prepare($tyontekijat_kysely);
        $tyontekijat_paivita->bindValue(':tstatus_id', 2, PDO::PARAM_INT);
        $tyontekijat_paivita->bindValue(':tyontekija_id', $tyontekija, PDO::PARAM_INT);
        $tyontekijat_paivita->execute();

        $vikailm_kysely = "UPDATE vikailm SET vstatus_id = :vstatus_id WHERE vika_id = :vika_id";
        $vikailm_paivita = $conn->prepare($vikailm_kysely);
        $vikailm_paivita->bindValue(':vstatus_id', 2, PDO::PARAM_INT);
        $vikailm_paivita->bindValue(':vika_id', $vikaid, PDO::PARAM_INT);
        $vikailm_paivita->execute();

        
    }

    header("location: VIKAtyon.php");

?>

<?php require "footer.php"; ?>