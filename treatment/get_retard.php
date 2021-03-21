<?php
include_once "config1.php";
$sqll = "SELECT nom_utls,prenom_utls FROM emprint INNER JOIN utilisateurs ON emprint.id_utls = utilisateurs.id_utls WHERE utilisateurs.id_utls = '{$row['id_utls']}'";
$sqlll = "SELECT nom_livre FROM emprint INNER JOIN livres ON emprint.id_livre = livres.id_livre WHERE livres.id_livre = '{$row['id_livre']}'";
 $queryy = mysqli_query($conn,$sqll);
 $queryyy = mysqli_query($conn,$sqlll);
    if(mysqli_num_rows($queryy) > 0 && mysqli_num_rows($queryyy) >0){
    while($roww = mysqli_fetch_assoc($queryy)){
        $rslt1 .= $roww['nom_utls']." ".$roww['prenom_utls'];
     }
     while($rowww = mysqli_fetch_assoc($queryyy)){
        $rslt2 .= $rowww['nom_livre'];
    }}else{
        $rslt1 .= "error";
        $rslt2 .= "error";
    }
?>