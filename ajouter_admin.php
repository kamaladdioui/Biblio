<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form ajouter-admin">              
    <header><button><a href="adminspace.php"><i class="fas fa-chevron-left"></i></a></button><h4>ajouter un admin :</h4></header>
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
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
        <div class="field button">
          <input type="submit" name="submit" value="ajouter">
        </div>
      </form>
    </section>
  </div>
  <script src="pass-show-hide.js"></script>
  <script src="ajouter_admin.js"></script>
</body>
</html>
