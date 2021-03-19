<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">              
      <header><h1>BIBLIOTHEQUE</h1></header>
      <form action="treatment/inscription.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text">this is an error text</div>
        <div class="name-details">
          <div class="field input">
            <label>Prenom :</label>
            <input type="text" name="fname" placeholder="saisir votre prenom" required>
          </div>
          <div class="field input">
            <label>Nom :</label>
            <input type="text" name="lname" placeholder="saisir votre nom" required>
          </div>
        </div> 
        <div class="field input">
          <label>Adress Email :</label>
          <input type="text" name="email" placeholder="saisir votre email" required>
        </div>
        <div class="field input">
          <label>Mot De Passe :</label>
          <input type="password" name="password" placeholder="saisir votre mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="conditions">
            <p> <input type="checkbox" name="conditions" required>   j'accept les conditions</p>
            <P>
                <a href="conditions.php">Lire les conditions.</a>
            </p>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Preinscrir">
        </div>
      </form>
      <div class="link">
          <div>deja inscrit ? </div>
          <a href="login.php">login maintenant</a>
        </div>
    </section>
  </div>

</body>
</html>
