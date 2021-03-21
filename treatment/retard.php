<?php
    session_start();
    include_once "config1.php";
    $mindate =  strtotime('-7 days');
    $sql = "SELECT * FROM emprint WHERE date_emprint > '{$mindate}'";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) > 0){
        include_once "data2.php";
    }else{
        $output .= "vous avez aucun livre en retard";
    }
    echo $output;
?>