<?php 
  session_start();
  include_once "treatment/config1.php";
  if(!isset($_SESSION['unique_id2'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="userspace">
        <header><h4>bienvenu a votre espace client</h4></header>
        <?php 
            $sql = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE unique_id_utls = {$_SESSION['unique_id2']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
        <div class="infos-perso">
            <div class="info">
                <label for="">Nom et Prenom :</label>
                <p><?php echo $row['nom_utls']." ".$row['prenom_utls']; ?></p>
            </div>
            <div class="info">
                <label for="">id :</label>
                <p><?php echo $row['unique_id_utls']; ?></p>
            </div>
            <div class="info">
                <label for="">nombre max de livres :</label>
                <p><?php echo $row['max_emprint']; ?></p>
            </div>
            <div class="info">
                <label for="">nombre de livre emprinte :</label>
                <p><?php echo $row['nbr_emprint']; ?></p>
            </div>
        </div>
        <hr>
        <div class="info-livres-emprinte">
            <h3>pour voir les iformation des livres emprintee clique <a href="livres_emprinte.php">ici</a></h3>
        </div>
    </section>
    <section class="logout">
      <a href="treatment/logout.php?logout_id=<?php echo $row['unique_id_utls']; ?>" class="logout">Logout</a>
    </section>
  </div>

</body>
</html>
