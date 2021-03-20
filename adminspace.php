<?php 
  session_start();
  include_once "treatment/config.php";
  if(!isset($_SESSION['unique_id1'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="adminspace">
        <header><h4>bienvenu a votre espace admin</h4></header>
        <div class="operations">
            <h3>selectionner une operation : </h3>
            <a href="liste_adherents.php">afficher la liste des adherents <br></a>
            <a href="liste_livres.php">afficher la liste des livres <br></a>
            <a href="retard.php">afficher la liste des emprinte en retard <br></a>
            <a href="valide_inscription.php">validee une inscription <br></a>
            <a href="ajouter_admin.php">ajouter un admin</a>
        </div>
        <section class="logout">
      <a href="treatment/logout.php?logout_id=<?php echo $_SESSION['unique_id1']; ?>" class="logout">Logout</a>
    </section>
    </section>
  </div>

</body>
</html>
