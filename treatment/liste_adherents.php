<?php
    session_start();
    include_once "config1.php";
    $sql = "SELECT * FROM utilisateurs ORDER BY id_utls DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "vous avez aucun adherents";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>