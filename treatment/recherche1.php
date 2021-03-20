<?php
    session_start();
    include_once "config1.php";
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $sql = "SELECT * FROM livres WHERE nom_livre LIKE '%{$searchTerm}%'";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data1.php";
    }else{
        $output .= 'aucun livre correspond au nom que vous aver entrer.';
    }
    echo $output;
?>