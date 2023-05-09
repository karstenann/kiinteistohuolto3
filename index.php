<?php require "conn.php" ?>
<?php require "testi.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kiinteistöhuolto R.Autio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="jumbotron text-center tausta" style="margin-bottom:0">
  <h1 class="headtitle otsikko">Kiinteistöhuolto R.Autio</h1>
  <!-- <p>Laadukasta ja nopeaa palvelua jo vuodesta 1996</p>  -->
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.html"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="referenssit.html">Referenssit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tiedot.html">Yhteystiedot</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lomake.html">Ota yhteyttä</a>
      </li>
      <?php if(!isset($_SESSION['sposti'])): ?>
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Kirjaudu sisään
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="loginAJA.php">Asukkaat ja asiakkaat</a>
          <a class="dropdown-item" href="loginIsan.php">Isännöitsijät</a>
          <a class="dropdown-item" href="loginTyon.php">Työntekijät</a>
        </div>
      </div>
      <?php else : ?>
        <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          <?php echo $_SESSION['sposti']; ?>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="logout.php">Kirjaudu ulos</a>
          <a class="dropdown-item" href="loginIsan.php">Isännöitsijät</a>
          <a class="dropdown-item" href="loginTyon.php">Työntekijät</a>
        </div>
      </div>
      <?php endif; ?>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px; margin-left: 10px;">
  <div class="row">
   
    <div class="col-sm-8">
      <h2>Tietoa meistä</h2>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <div class="fakeimg">joku kuva</div>
      <br>
      <h2>Palvelumme</h2>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <div class="fakeimg">joku kuva</div>  
    </div>
    <div class="col-sm-4">
      <h2>Yhteystiedot</h2>
      <h5>Päivystyspuhelin: 044-1234567</h5>
      <p>Toimiston puhelinnumero: 044-1223456<br>Sähköposti: huolto@kiinteistohuolto.fi<br>Osoite: Kauppakatu 58, 95400 Tornio</p>
      <p></p>
      <p></p>
      <div class="fakeimg"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1632.242984955909!2d24.136703077428532!3d65.8515584784009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x45d547775acfd3e5%3A0xcc881a0192e7f192!2sLapin%20ammattikorkeakoulu%2C%20Tornion%20Minerva%20kampus!5e0!3m2!1sfi!2sfi!4v1683366197992!5m2!1sfi!2sfi" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      
      <hr class="d-sm-none">
    </div>
  </div>
</div><br><br>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Kiinteistöhuolto R.Autio            Y-tunnus: 789720-2</p>
</div>

</body>
</html>