<?php

    require "../header.php";

    if(isset($_GET['vika_id'])){

        $vikaid = $_GET['vika_id'];
        $kysely = "SELECT *
        FROM vikailm
        JOIN vikastatus ON vikailm.vstatus_id = vikastatus.vstatus_id 
        JOIN kayttajat ON kayttajat.kayttaja_id = vikailm.kayttaja_id
        JOIN taloyhtiot ON kayttajat.taloyhtio_id = taloyhtiot.taloyhtio_id
        WHERE vikailm.vika_id = :vika_id";

        $hae = $conn->prepare($kysely);
        $hae->bindValue(":vika_id", $vikaid);
        $hae->execute();

        $tyontekijat_kysely = "SELECT * FROM tyontekijat WHERE tstatus_id = 1";
        $tyontekijat_hae = $conn->prepare($tyontekijat_kysely);
        $tyontekijat_hae->execute();
        $tyontekijat = $tyontekijat_hae->fetchAll(PDO::FETCH_ASSOC);
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
                        <th>Työntekijät</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($rivi = $hae->fetch(PDO::FETCH_ASSOC)) {
                            if($rivi['v_status'] = "avoin") { ?>
                    <tr>
                        <td><?php echo $rivi['ilmoitus']; ?></td>
                        <td><?php echo $rivi['vika_pvm']; ?></td>   
                        <td><?php echo $rivi['v_status']; ?></td>
                        <td><?php echo $rivi['kayttaja_nimi']; ?></td>
                        <td><?php echo $rivi['kayttaja_osoite']; ?></td>
                        <td><?php echo $rivi['taloyhtio_nimi']; ?></td>
                        <td>
                            <select name="tyontekija_id">
                            <?php foreach ($tyontekijat as $tyontekija) {
                                if($tyontekija['tstatus_id'] == 1){ ?>
                                <option value="<?php echo $tyontekija['tyontekija_id']; ?>">
                                    <?php echo $tyontekija['tyontekija_nimi']; ?>
                                </option>
                                <?php }else{

                                } ?>
                            </select>
                        </td>
                        <td><?php echo '<a href="tehtavalisays.php?vika_id='.$rivi['vika_id'].'
                                        &tyontekija_id='.$tyontekija['tyontekija_id'].'
                                        &v_status='.$rivi['v_status'].'
                                        &tstatus='.$tyontekija['tstatus_id'].'" 
                                        class="btn btn-primary">Valitse</a>'; ?></td>
                    </tr>
                    <?php } ?>
                    <?php }else{

                    }
                    } ?>
                </tbody>
            </table>
        </div>
<?php require "../footer.php"; ?>