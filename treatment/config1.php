<?php
/*$hostname = "localhost";
   $username = "root";
  $password = "";
   $dbname = "bibliotheque";


  // PDO c'est plus mieux que mysqli ,parceque mysqli n'est plus utilise et PDO tu peux l'utiliser dans n'import quel base de donne (oracle,mysql,mongogdb....) 
  try
  {
      $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque;charset=utf8',$username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $GLOBALS['bdd']=$bdd;//cette variable te permet d'acceder a la connection a la base de donne dans n'importe quelle fichier  
  }
  catch(Exception $e)
  {
      die('Erreur :'.$e->getMessage());
  }*/
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bibliotheque";
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }

?>
