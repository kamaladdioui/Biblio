<?php
  $hostname = "localhost";
<<<<<<< HEAD
  $username = "root";
  $password = "";
=======
  $username = "Ahmedreda";
  $password = "Azertyuiop";
>>>>>>> 5f23df9904a7614814c2b381a608f40c52bd7540
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
  }
?>
