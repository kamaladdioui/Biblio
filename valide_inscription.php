<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="valide-inscription">
        <header><button><a href="adminspace.php"><i class="fas fa-chevron-left"></i></a></button><h4>valide une inscription :</h4></header>
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off"> 
        <div class="error-text">this is an error text</div>
        <div class="field input">
          <label>client_id :</label>
          <input type="text" name="client_id" placeholder="saisir l'id du client" required>
        </div>
        <div class="field input">
          <label>le maximum des livre a emprinte :</label>
          <input type="text" name="max_emprinte" placeholder="saisir le max a emprinte" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="valide">
        </div>
      </form>
    </section>
  </div>
  <script src="valide_inscription.js"></script>
</body>
</html>
