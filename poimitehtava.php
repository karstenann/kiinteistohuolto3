<?php

    require "header.php";

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

        $haekysely = "SELECT *
        FROM vikailm
        JOIN vikastatus ON vikailm.vstatus_id = vikastatus.vstatus_id 
        JOIN kayttajat ON kayttajat.kayttaja_id = vikailm.kayttaja_id
        JOIN taloyhtiot ON kayttajat.taloyhtio_id = taloyhtiot.taloyhtio_id
        WHERE vikailm.vika_id = :vika_id";

        $hae = $conn->prepare($haekysely);
        $hae->bindValue(":vika_id", $vikaid);
        $hae->execute();
    }

?>

<div class="container mt-5">
            
            <table class="table">
                <thead>
                    <tr>
                        <th>Ilmoitus</th>
                        <th>PVM</th>
                        <th>Status</th>
                        <th>Käyttaja</th>
                        <th>Osoite</th>
                        <th>Taloyhtiön nimi</th>
                        <th>Korjaus</th>
                        <th>Päivitä</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($rivi = $hae->fetch(PDO::FETCH_ASSOC)) {
                            if($rivi['v_status'] = "työn alla") { ?>
                    <tr>
                        <td><?php echo $rivi['ilmoitus']; ?></td>
                        <td><?php echo $rivi['vika_pvm']; ?></td>   
                        <td><?php echo $rivi['v_status']; ?></td>
                        <td><?php echo $rivi['kayttaja_nimi']; ?></td>
                        <td><?php echo $rivi['kayttaja_osoite']; ?></td>
                        <td><?php echo $rivi['taloyhtio_nimi']; ?></td>
                        <td>
                            <form action="paivita.php" method="get">
                                <input name="korjaus" type="text">
                            </form>
                        </td>
                        
                    </tr>
                  
                    <?php }else{

                    }
                    } ?>
                </tbody>
            </table>
        </div>
<?php require "footer.php"; ?>