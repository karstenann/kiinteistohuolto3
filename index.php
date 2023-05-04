<?php include "conn.php" ?>

<?php session_start(); ?>

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
  <a class="navbar-brand" href="#">LOGO?</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Yhteydenottolomake</a>
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

<div class="container" style="margin-top:30px">
  <div class="row">
    
    <div class="col-sm-8">
      <h2>Infoa/historiaa yrityksestä</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>Palvelumme</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="col-sm-4">
      <h4>Kirjaudu tästä omille sivuillesi</h4>
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
      <hr class="d-sm-none">
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Kiinteistöhuolto R.Autio            Y-tunnus: 789720-2</p>
</div>

</body>
</html>