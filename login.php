<?php 
  session_start();
  if(isset($_SESSION['unique_id1'])){
    header("location: adminspace.php");
  }elseif(isset($_SESSION['unique_id2'])){
    header("location: userspace.php");
  }elseif(isset($_SESSION['unique_id3'])){
    header("location: preespace.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header><h1>BIBLIOTHEQUE</h1></header>
  
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off"> 
       <form action="treatment/identify.php" method="POST" enctype="multipart/form-data" autocomplete="off">
         <div class="error-text">this is an error text</div>
        <div class="field input">
          <label>Adress Email</label>
          <input type="text" name="email" placeholder="saisir votre email" required>
        </div>
        <div class="field input">
          <label>Mot De Passe</label>
          <input type="password" name="password" placeholder="saisir votre mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="option">
          <label for="type"><p>vous êtes?</p></label><br />
          <select name="type" id="type">
              <option value="admins">Admin</option>
              <option value="utilisateurs">Utilisateur</option>
          </select>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Log In">
        </div>
      </form>
      
    </section>
  </div>

  <script src="pass-show-hide.js"></script>
  <script src="login.js"></script>
  

</body>
</html>
