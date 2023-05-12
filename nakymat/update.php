<?php
    include "../header.php";
    require "..conn.php";

    if(isset($_GET["upd_id"])){
        $vika_id = $_GET["upd_id"];
        $kysely = "SELECT * FROM vikailm WHERE vika_id = '$vika_id'";
        $data = $conn->query($kysely);
        $rivit = $data->fetch(PDO::FETCH_OBJ);
    }
    if(isset($_POST["laheta"])){
        $tehtava = $_POST["muntaski"];
        $kysely = "UPDATE vikailm SET ilmoitus = :ilmoitus WHERE vika_id = '$vika_id'";
        $muuta = $conn->prepare($kysely);
        $muuta->execute([":ilmoitus" => $tehtava]);
        header("location: index.php");
    }
    
?>

<html>
    <body>
        <div class="container">
            <form class="form-inline" method="POST" action="update.php?upd_id=<?php echo $vika_id; ?>">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only"></label>
                    <input name="muntaski" type="text" class="form-control" id="inputPassword2" placeholder="vikailmoitus" 
                    value="<?php echo $rivit->ilmoitus; ?>">
                </div>
                <button name="laheta" type="submit" class="btn btn-primary mb-2">Päivitä</button>
            </form>
        </div>
        
    </body>
</html>