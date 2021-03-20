<?php
    session_start();
    include 'config.php';
    $bdd = $GLOBALS['bdd'];
    $email=$_POST['email'];
    $response= $bdd->prepare('SELECT email FROM utilisateurs WHERE email=?');
    $response->execute(array($email));
    $data=$response->fetch();
    $ran_id = rand(time(), 100000000);
    if($data)
    {
        echo "Email est déjà utilisé!!!";
    }else
    {
        $req = $bdd->prepare('INSERT INTO utilisateurs (unique_id_utls,nom_utls, prenom_utls, email, mot_de_passe,statu,max_emprint,nbr_emprint) VALUES (:unique_id_utls, :lname, :fname, :email, :password,"desactive",0,0)');
        $req->execute(array(
            'unique_id_utls' => $ran_id,
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],

        ));
        $req->closeCursor();
        $_SESSION['unique_id3'] = $ran_id;
        echo "success";
    }
    $response->closeCursor();
?>