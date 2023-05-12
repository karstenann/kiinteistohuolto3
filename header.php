<?php require "conn.php" ?>
<?php
  session_start();
?>

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
        <a class="nav-link" href="referenssit.php">Referenssit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tiedot.html">Yhteystiedot</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lomake.html">Ota yhteyttä</a>
      </li>
      <?php if(!isset($_SESSION['kayttaja_nimi']) & !isset($_SESSION['tyontekija_nimi'])): ?>
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
      <?php elseif(isset($_SESSION['tyontekija_nimi'])) : ?>
        <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          <?php echo $_SESSION['tyontekija_nimi']; ?>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="logout.php">Kirjaudu ulos</a>
          <a class="dropdown-item" href="#">Omat tiedot</a>
          <a class="dropdown-item" href="#">Katso valituksia</a>
        </div>
      </div>
      <?php else : ?>
        <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          <?php echo $_SESSION['kayttaja_nimi']; ?>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="logout.php">Kirjaudu ulos</a>
          <a class="dropdown-item" href="nakymat/nakyma.php">Tee vikailmoitus</a>
        </div>
      </div>
      <?php endif; ?>    
    </ul>
  </div>  
</nav>