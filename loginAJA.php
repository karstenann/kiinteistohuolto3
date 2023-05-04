<?php require "conn.php"; ?>
<?php

  if(isset($_POST['submit'])){
    if($_POST['sposti'] == '' OR $_POST['salasana'] == ''){
      echo "Jotain puuttuu";
    }else{
      $email = $_POST['sposti'];
      $password = $_POST['salasana'];

      $sql = "SELECT * FROM customers WHERE customer_email = '$email'";
      $login = $conn->query($sql);
      $login->execute();

      $data = $login->fetch(PDO::FETCH_ASSOC);

      if($data){
        if($login->rowCount() > 0){

            if($password = $data['customer_password']){
              echo $data['customer_name'];
    
            }else{
              echo "Sähköposti tai salasana on väärin";
            }
        }else{
            echo "Sähköposti tai salasana on väärin";
        }
      }else{
        $email = $_POST['sposti'];
        $password = $_POST['salasana'];

        $sql = "SELECT * FROM residents WHERE resident_email = '$email'";
        $login = $conn->query($sql);
        $login->execute();

        $data = $login->fetch(PDO::FETCH_ASSOC);
        if($login->rowCount() > 0){

            if($password = $data['resident_password']){
              echo $data['resident_name'];
    
            }else{
              echo "Sähköposti tai salasana on väärin";
            }
        }else{
            echo "Sähköposti tai salasana on väärin";
        }
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kiinteistöhuolto R.Autio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Kiinteistöhuolto R.Autio</h1>
  <p>- Laadukasta ja nopeaa palvelua jo vuodesta 1996 -</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">LOGO?</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="yhteydenottolomake.html">Yhteydenottolomake</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Referenssit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Yhteystiedot</a>
      </li>    
    </ul>
  </div>  
</nav>
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
        
            <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Kirjaudu</button>
            <h6 class="mt-3">Jos sinulla ei ole käyttäjätunnusta  <a href="#">Luo tunnus</a></h6>
        </form>
    </main>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Kiinteistöhuolto R.Autio            Y-tunnus: 789720-2</p>
      </div>
      
</body>
</html>