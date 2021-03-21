<?php 
    $rslt = "";
    $rslt1 = "";
    $rslt2 = "";
     while($row = mysqli_fetch_assoc($query)){
       include_once "get_retard.php";
        $output .='<hr>
        <div class="info">
        <label for="">Nom du livre :</label>
        <p>'.$rslt2.'</p>
    </div>
    <div class="info">
        <label for="">Nom dadherent :</label>
        <p>'.$rslt1.'</p>
    </div>
    <div class="info">
        <label for="">date demprint :</label>
        <p>'.$row['date_emprint'].'</p>
    </div>';
    }
?>