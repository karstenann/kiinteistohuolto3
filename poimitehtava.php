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
                            <textarea name="korjaus[<?php echo $rivi['vika_id']; ?>]"></textarea><br>
                            <input type="hidden" name="vika_id[]" value="<?php echo $rivi['vika_id']; ?>">
                        </td>
                        
                        <?php 
                        if (isset($_POST['korjaus'])) {
                            $korjaus = $_POST['korjaus'];
                            $vika_ids = $_POST['vika_id'];
                            foreach ($korjaus as $key => $text) {
                                // Update task in the first two tables
                                // $vstatus_id = $key;
                                // $kysely = "SELECT v_status FROM vikastatus WHERE vstatus_id = $vstatus_id";
                                $vika_id = $vika_ids[$key];
                                // $kysely = "SELECT v_status FROM vikastatus WHERE vstatus_id = $vstatus_id";
                                $kysely = "UPDATE vikailm SET korjaus = $text, vstatus_id = 'valmis' WHERE vika_id = $vika_id";
                                $data = $conn->query($kysely);
                                $rivi = $data->fetch(PDO::FETCH_ASSOC);
                                $status = $rivi['v_status'];
                                echo $vstatus_id;
                                // Update status in the third table
                                if ($status == 'työn alla') {
                                    $kysely = "UPDATE vikailm SET korjaus = $text, vstatus_id = 'valmis' WHERE vika_id = $vika_id";
                                    $data = $conn->query($kysely);
                                    $kysely = "UPDATE vikailm SET vstatus_id = 'valmis' WHERE vstatus_id = $vstatus_id";
                                    $data = $conn->query($kysely);

                                }
                                // $kysely = "UPDATE vikastatus SET v_status = 'valmis' WHERE vstatus_id = $vstatus_id";
                                // $data = $conn->query($kysely);
                            }
                        }
                        
                        ?>
                        <td><input type="submit" value="Päivitä"></td>
                        
                    </tr>
                  
                    <?php }else{

                    }
                    } ?>
                </tbody>
            </table>
        </div>
<?php require "footer.php"; ?>