<?php

    require "conn.php";
    require "poimitehtava.php";

    if(isset($_GET['korjaus'])){
        $korjaus = $_GET['korjaus'];
        $vikaid = $_GET['vika_id'];
        $tyontekija = $_GET['tyontekija_id'];
        $kysely = "UPDATE vikailm SET korjaus = :korjaus, vstatus_id = :vstatus_id WHERE vika_id = :vika_id";
        $tallenna = $conn->prepare($kysely);
        $tallenna->bindValue(':korjaus', $korjaus, PDO::PARAM_STR);
        $tallenna->bindValue(':vika_id', $vikaid, PDO::PARAM_INT);
        $tallenna->bindValue(':vstatus_id', 3, PDO::PARAM_INT);
        $tallenna->execute();

        $tyontekijat_kysely = "UPDATE tyontekijat SET tstatus_id = :tstatus_id WHERE tyontekija_id = :tyontekija_id";
        $tyontekijat_paivita = $conn->prepare($tyontekijat_kysely);
        $tyontekijat_paivita->bindValue(':tstatus_id', 1, PDO::PARAM_INT);
        $tyontekijat_paivita->bindValue(':tyontekija_id', $tyontekija, PDO::PARAM_INT);
        $tyontekijat_paivita->execute();

        header("location: index.php");
    }

?>