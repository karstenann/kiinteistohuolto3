<?php require "conn.php"; ?>
<?php require "header.php" ?>
<?php

  if(isset($_POST['submit'])){
    if($_POST['sposti'] == '' OR $_POST['salasana'] == ''){
      echo "Jotain puuttuu";
    }else{
      $email = $_POST['sposti'];
      $password = $_POST['salasana'];

      $sql = "SELECT * FROM kayttajat WHERE kayttaja_email = '$email' AND kayttaja_salasana = '$password'";
      $login = $conn->query($sql);
      $login->execute();

      $data = $login->fetch(PDO::FETCH_ASSOC);
      if($data){
        if($data['rooli_id'] == 1){
          if($login->rowCount() > 0){

              if($password = $data['kayttaja_salasana']){
                $_SESSION['kayttaja_nimi'] = $data['kayttaja_nimi'];
                $_SESSION['kayttaja_id'] = $data['kayttaja_id'];

                header("location: index.php");
      
              }else{
                echo "Sähköposti tai salasana on väärin";
              }
          }else{
              echo "Sähköposti tai salasana on väärin";
          }
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
        <form method="POST" action="loginAJA.php">
            <h1 class="h3 mt-5 fw-normal text-center">Ole hyvä ja kirjaudu</h1>
        
            <div class="form-floating">
                <label for="floatingInput">Sähköpostiosoite</label>
                <input name="sposti" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            </div>
            
            <div class="form-floating">
                <label for="floatingPassword">Salasana</label>
                <input name="salasana" type="password"  class="form-control" id="floatingPassword" placeholder="Password">
            </div>
        
            <button name="submit" class="w-100 btn btn-lg btn-primary mt-2 mb-2" type="submit">Kirjaudu</button>
        </form>
    </main>

<?php require "footer.php" ?>