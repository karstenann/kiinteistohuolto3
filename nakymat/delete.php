<?php 
    require "connect.php";

    if(isset($_GET["del_id"])){
        $vika_id = $_GET["del_id"];
        $kysely = "DELETE FROM vikailm WHERE vika_id=:vika_id";
        $delete = $conn->prepare($kysely);
        $delete->execute([":vika_id" => $vika_id]);
    }
    header("location: nakyma.php");
?>