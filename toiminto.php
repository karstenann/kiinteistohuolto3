<?php 
    require "header.php";
    
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Vikailmoitus</title>
    </head>
    <body>
     <div class="container">
        <h1>Vikailmoitus</h1>
        <!-- <a href="index.php">Takaisin listaan</a> -->
        <h3>Lisää uusi vikailmoitus</h3>
        <table class="table-bordered">
            <form action="lisaaVika.php" method="POST">
                <tr>
                    <td>Vika</td>
                    <td><input type="text" size="150" name="ilmoitus" required></td>
                </tr>
                <tr>
                    <td><button name="talleta" type="submit" class="btn btn-primary">Talleta</button></td>
                </tr>
            </form>
        </table>
     </div>
    </body>
</html>

<?php require "footer.php"; ?>