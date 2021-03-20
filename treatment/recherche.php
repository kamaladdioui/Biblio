<?php
    session_start();
    include_once "config1.php";
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $sql = "SELECT * FROM utilisateurs WHERE prenom_utls LIKE '%{$searchTerm}%' OR nom_utls LIKE '%{$searchTerm}%'";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'aucun utilisateure correspond a le terme que vous aver entrer.';
    }
    echo $output;
?>