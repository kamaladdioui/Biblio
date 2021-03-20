<?php
    session_start();
    include_once "config1.php";
    $sql = "SELECT * FROM livres ORDER BY id_livre DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "vous avez aucun livre";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data1.php";
    }
    echo $output;
?>