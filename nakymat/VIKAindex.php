<?php 
    require "../kiinteistohuolto3/header.php";
    
    
        $kysely = "SELECT *
        FROM vikailm
        CROSS JOIN vikastatus
        CROSS JOIN kayttajat
        CROSS JOIN taloyhtiot
        WHERE vikailm.vstatus_id = vikastatus.vstatus_id 
        AND kayttajat.kayttaja_id = vikailm.kayttaja_id
        AND kayttajat.taloyhtio_id = taloyhtiot.taloyhtio_id";

        $hae = $conn->prepare($kysely);
        
        $hae->execute();
        

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
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($rivi = $hae->fetch(PDO::FETCH_ASSOC)) {
                            if($rivi['v_status'] = "avoin") ?>
                    <tr>
                        <td><?php echo $rivi['ilmoitus']; ?></td>
                        <td><?php echo $rivi['vika_pvm']; ?></td>   
                        <td><?php echo $rivi['v_status']; ?></td>
                        <td><?php echo $rivi['kayttaja_nimi']; ?></td>
                        <td><?php echo $rivi['kayttaja_osoite']; ?></td>
                        <td><?php echo $rivi['taloyhtio_nimi']; ?></td>
                        <td><?php echo '<a href="tehtava.php?vika_id='.$rivi['vika_id'].'" class="btn btn-primary">Määrää tehtävä</a>'; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
<?php require "../kiinteistohuolto3/footer.php"; ?>