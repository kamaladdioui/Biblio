<?php
    include 'config.php';
    $bdd = $GLOBALS['bdd'];
    $email=$_POST['email'];
    $response= $bdd->prepare('SELECT email FROM utilisateurs WHERE email=?');
    $response->execute(array($email));
    $data=$response->fetch();
    if($data)
    {
        echo "Email est déjà utilisé!!!";
    }else
    {
        $req = $bdd->prepare('INSERT INTO utilisateurs (unique_id_utls,nom_utls, prenom_utls, email, mot_de_passe,statu,max_emprint,nbr_emprint) VALUES (0, :lname, :fname, :email, :password,"desactive",0,0)');
        $req->execute(array(
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],

        ));
        $req->closeCursor();
        echo "success";
    }
    $response->closeCursor();
?>