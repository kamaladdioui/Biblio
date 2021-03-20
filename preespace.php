<?php 
  session_start();
  include_once "treatment/config.php";
  if(!isset($_SESSION['unique_id3'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper ">
    <section class="preespace">
      <header><h1>votre preinscription est succe !<br>voullier valider votre compte a notre etablisement<br>
      merci!</h1></header>
      <section class="logout">
      <a href="treatment/logout.php?logout_id=<?php echo $_SESSION['unique_id3']; ?>" class="logout">Logout</a>
    </section>
    </section>
  </div>

</body>