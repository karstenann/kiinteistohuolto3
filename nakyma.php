<?php 
    require "header.php";
    require "conn.php";
    header("Access-Control-Allow-Origin: *");
    
    

    $kysely = "SELECT ilmoitus, vika_pvm FROM vikailm WHERE :kayttaja_id = kayttaja_id";

    $hae = $conn->prepare($kysely);
    $hae->bindValue(":kayttaja_id", $_SESSION['kayttaja_id']);
    $hae->execute();

?>

        <div class="container mt-5">
            <form class="form-inline" method="POST" action="toiminto.php">
                <button name="laheta" type="submit" class="btn btn-primary mb-2" href="toiminto.php">Jätä vikailmoitus</button>
            </form>
            <table class="table mb-5">
                <thead>
                    <tr>
                        <th>Tehtävän nimi</th>
                        <th>Päivämäärä</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($rivi = $hae->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $rivi['ilmoitus']; ?></td>
                        <td><?php echo $rivi['vika_pvm']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
<?php require "footer.php"; ?>