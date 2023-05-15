<?php require "header.php"; ?>

<?php require "conn.php"; ?>


<main class="form-signin w-50 m-auto">
  <form action="lisaaviesti.php" method="POST" >
   
    <h1 class="h3 mt-5 fw-normal text-center">Ota yhteyttä</h1><br><br>

    <div class="form-floating">
      <label for="floatingInput">Nimi</label><br>
      <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Etunimi Sukunimi">
      <br>
    </div>

    <div class="form-floating">
      <label for="floatingInput">Sähköposti</label><br>
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="example@jotain.fi">
      <br>
    </div>

    <div class="form-floating">
      <label for="floatingPassword">Puhelin</label><br>
      <input name="phone" type="text" class="form-control" id="floatingPassword" placeholder="+358XXXXXXXXX">
      <br>
    </div>

    <div class="form-floating">
      <label for="floatingInput">Viesti</label><br>
      <input name="message" type="text" class="form-control" id="floatingInput" placeholder="Viestisi">
      <br><br>
    </div>
    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Lähetä viesti</button>
    <br>
  </form>
  <br><br><br>
</main>

<?php require "footer.php"; ?>