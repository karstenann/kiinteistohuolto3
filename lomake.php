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
  <h1 class="otsikko">Kiinteistöhuolto R.Autio</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="../Kiinteistohuolto R.Autio/index.html">Etusivu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../Kiinteistohuolto R.Autio/referenssit.html">Referenssit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Kiinteistohuolto R.Autio/tiedot.html">Yhteystiedot</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Kiinteistohuolto R.Autio/lomake.html">Ota yhteyttä</a>
      </li>
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Kirjaudu sisään
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Asukkaat ja asiakkaat</a>
          <a class="dropdown-item" href="#">Isännöitsijät</a>
          <a class="dropdown-item" href="#">Työntekijät</a>
        </div>
      </div>    
    </ul>
  </div>  
</nav>
<main class="form-signin w-50 m-auto">
  <form method="POST" >
    <!-- action="register.php" -->
   
    <h1 class="h3 mt-5 fw-normal text-center">Ota yhteyttä</h1><br><br>

    <div class="form-floating">
      <label for="floatingInput">Nimi</label><br>
      <input name="name" type="email" class="form-control" id="floatingInput" placeholder="Etunimi Sukunimi">
      <br>
    </div>

    <div class="form-floating">
      <label for="floatingInput">Sähköposti</label><br>
      <input name="email" type="text" class="form-control" id="floatingInput" placeholder="example@jotain.fi">
      <br>
    </div>

    <div class="form-floating">
      <label for="floatingPassword">Puhelin</label><br>
      <input name="phone" type="password" class="form-control" id="floatingPassword" placeholder="+358XXXXXXXXX">
      <br>
    </div>

    <div class="form-floating">
      <label for="floatingInput">Viesti</label><br>
      <input name="message" type="text" class="form-control" id="floatingInput" placeholder="Viestisi">
      <br><br>
    </div>
    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Lähetä viesti</button>
    <!-- <h6 class="mt-3">Jos sinulla on jo käyttäjätunnus?  <a href="login.php">Kirjaudu</a></h6> -->
    <br>
  </form>
  <br><br><br>
</main>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Kiinteistöhuolto R.Autio            Y-tunnus: 789720-2</p>
</div>

</body>
</html>