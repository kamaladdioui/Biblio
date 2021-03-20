<?php 
    while($row = mysqli_fetch_assoc($query)){
        $output .='<hr>
        <div class="info">
            <label for="">Nom et Prenom :</label>
            <p>'.$row['nom_utls']." ".$row['prenom_utls'].'</p>
        </div>
        <div class="info">
            <label for="">id :</label>
            <p>'.$row['unique_id_utls'].'</p>
        </div>
        <div class="info">
            <label for="">nombre max de livres :</label>
            <p>'.$row['max_emprint'].'</p>
        </div>
        <div class="info">
            <label for="">nombre de livre emprinte :</label>
            <p>'.$row['nbr_emprint'].'</p>
        </div>
        <div class="info">
            <label for="">situation de compte :</label>
            <p>'.$row['statu'].'</p>
        </div>';
    }
?>