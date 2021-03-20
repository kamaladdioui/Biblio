<?php
    include 'config.php';
    $bdd = $GLOBALS['bdd'];
    $email=$_POST['email'];
    $response= $bdd->prepare('SELECT email FROM admins WHERE email=?');
    $response->execute(array($email));
    $data=$response->fetch();
    $ran_id = rand(time(), 100000000);
    if($data)
    {
        echo "Email est déjà utilisé!!!";
    }else
    {
        $req = $bdd->prepare('INSERT INTO admins (unique_id_admin,nom_admin, prenom_admin, email, mot_de_passe) VALUES (:unique_id_admin, :lname, :fname, :email, :password)');
        $req->execute(array(
            'unique_id_admin' => $ran_id,
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],

        ));
        $req->closeCursor();
        echo "l'ajoute d'un admin est reusit!";
    }
    $response->closeCursor();
?>