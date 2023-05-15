<?php
session_start();

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
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="jumbotron text-center tausta" style="margin-bottom:0">
  <h1 class="otsikko">Kiinteistöhuolto R.Autio</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="../Kiinteistohuolto R.Autio/index.php">Etusivu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../Kiinteistohuolto R.Autio/referenssit.php">Referenssit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Kiinteistohuolto R.Autio/tiedot.php">Yhteystiedot</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Kiinteistohuolto R.Autio/lomake.php">Ota yhteyttä</a>
      </li>
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Kirjaudu sisään
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../kiinteistohuolto3/loginAJA.php">Asukkaat ja asiakkaat</a>
          <a class="dropdown-item" href="../kiinteistohuolto3/loginISAN.php">Isännöitsijät</a>
          <a class="dropdown-item" href="../kiinteistohuolto3/loginTyon.php">Työntekijät</a>
        </div>
      </div>    
    </ul>
  </div>  
</nav>
