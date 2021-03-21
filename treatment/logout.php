<?php
    session_start();
    include_once "config1.php";
    $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
    if(isset($_SESSION['unique_id1'])){
        if(isset($logout_id)){
                session_unset();
                session_destroy();
                header("location: ../login.php");
        }else{
            header("location: adminspace.php");
        }
    }else if(isset($_SESSION['unique_id2'])){
        if(isset($logout_id)){
                session_unset();
                session_destroy();
                header("location: ../login.php");
        }else{
            header("location: userspace.php");
        }
    }else if(isset($_SESSION['unique_id3'])){
        if(isset($logout_id)){
                session_unset();
                session_destroy();
                header("location: ../login.php");
        }else{
            header("location: preespace.php");
        }
    }else{  
        header("location: ../login.php");
    }
?>