<?php 
    include_once "config1.php";
    $rslt = "";
    $row = mysqli_fetch_assoc($query);
    $sql1 = "SELECT * FROM livres JOIN {SELECT auteurs.nom_auteur FROM appartient JOIN auteurs ON appartient.id_auteur = auteurs.id_auteur} AS res ON livres.id_livre = res.id_livre WHERE id_livre = '{$row['id_livre']}'";
    $query1 = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query1) == 0){
        $rslt .= "aucun auterur est enrigistre";
    }elseif(mysqli_num_rows($query) > 0){
        while($row1 = mysqli_fetch_assoc($query1)){
            $rslt .= $row1['nom_auteur']." ";
        }
    }
    while($row){
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