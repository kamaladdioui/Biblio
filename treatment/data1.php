<?php 
    $rslt = "";
     while($row = mysqli_fetch_assoc($query)){
       include_once "get_nom_auteur.php";
        $output .='<hr>
        <div class="info">
        <label for="">Nom du livre :</label>
        <p>'.$row['nom_livre'].'</p>
    </div>
    <div class="info">
        <label for="">editeur :</label>
        <p>'.$row['editeur_livre'].'</p>
    </div>
    <div class="info">
        <label for="">auteur(s) :</label>
        <p>'.$rslt.'</p>
    </div>
    <div class="info">
        <label for="">situation :</label>
        <p>'.$row['situation'].'</p>
    </div>';
    }
?>