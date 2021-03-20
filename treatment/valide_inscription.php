<?php
    include 'config.php';
    $bdd = $GLOBALS['bdd'];
    $client_id=$_POST['client_id'];
    $max_emprinte=$_POST['max_emprinte'];
    $response= $bdd->prepare('SELECT email FROM utilisateurs WHERE unique_id_utls=?');
    $response->execute(array($client_id));
    $data=$response->fetch();
    if($data)
    {
        $req = $bdd->prepare('UPDATE utilisateurs SET statu = "active" , max_emprint =? WHERE unique_id_utls = ?');
        if($req->execute(array($max_emprinte,$client_id))){
            echo "le compte est active";
        }
        $req->closeCursor();
    }else
    {
        echo "ce compte nexiste pas!";
    }
    $response->closeCursor();
?>