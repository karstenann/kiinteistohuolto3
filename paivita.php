<?php

require "header.php";

if(isset($_GET['korjaus']) && isset($_GET['vika_id'])){

    $korjaus = $_GET['korjaus'];
    $vikaid = $_GET['vika_id'];

    $kysely = "UPDATE vikailm SET vstatus_id = :vstatus_id, korjaus = :korjaus WHERE vika_id = :vika_id";
    $paivita = $conn->prepare($kysely);
    $paivita->bindValue(':vstatus_id', 3, PDO::PARAM_INT);
    $paivita->bindValue(':vika_id', $vikaid, PDO::PARAM_INT);
    $paivita->bindValue(':korjaus', $korjaus, PDO::PARAM_STR);
    $paivita->execute();

    header("Location: VIKAtyon.php");
    
} else {
    echo "Error: missing required parameters.";
}

require "footer.php";

?>
