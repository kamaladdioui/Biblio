<?php
include_once "config1.php";
$sqll = "SELECT nom_auteur FROM auteurs INNER JOIN appartient ON appartient.id_auteur = auteurs.id_auteur WHERE appartient.id_livre = '{$row['id_livre']}'";
 $queryy = mysqli_query($conn,$sqll);
    if(mysqli_num_rows($queryy) > 0){
    while($roww = mysqli_fetch_assoc($queryy)){
        $rslt .= $roww['nom_auteur']." ";
    }}else{
        $rslt .= "aucun auteur est enrigistre";
    }
    
?>