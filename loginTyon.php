<?php require "conn.php"; ?>
<?php require "header.php"; ?>
<?php

  if(isset($_POST['submit'])){
    if($_POST['spostityon'] == '' OR $_POST['salasana'] == ''){
      echo "Jotain puuttuu";
    }else{
      $email = $_POST['spostityon'];
      $password = $_POST['salasana'];

      $sql = "SELECT * FROM tyontekijat WHERE tyontekija_email = '$email'";
      $login = $conn->query($sql);
      $login->execute();

      $data = $login->fetch(PDO::FETCH_ASSOC);

      if($login->rowCount() > 0){

        if($password = $data['tyontekija_salasana']){
          $_SESSION['spostityon'] = $data['tyontekija_nimi'];

          header("location: index.php");
    
        }else{
          echo "Sähköposti tai salasana on väärin";
        }
      }else{
        echo "Sähköposti tai salasana on väärin";
      }
    }
  }

?>
    <main class="form-signin w-50 m-auto">
        <form method="POST" action="loginTyon.php">
            <h1 class="h3 mt-5 fw-normal text-center">Ole hyvä ja kirjaudu</h1>
        
            <div class="form-floating">
                <label for="floatingInput">Sähköpostiosoite</label>
                <input name="spostityon" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            </div>
            
            <div class="form-floating">
                <label for="floatingPassword">Salasana</label>
                <input name="salasana" type="password"  class="form-control" id="floatingPassword" placeholder="Password">
            </div>
        
            <button name="submit" class="w-100 btn btn-lg btn-primary mb-2" type="submit">Kirjaudu</button>
        </form>
    </main>
<?php require "footer.php" ?>