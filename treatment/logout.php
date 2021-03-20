<?php
    session_start();
    if(isset($_SESSION['unique_id1'])){
        include_once "config1.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
                session_unset();
                session_destroy();
                header("location: ../login.php");
        }else{
            header("location: adminspace.php");
        }
    }elseif(isset($_SESSION['unique_id2'])){
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
                session_unset();
                session_destroy();
                header("location: ../login.php");
        }else{
            header("location: userspace.php");
        }
    }elseif(isset($_SESSION['unique_id3'])){
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
                session_unset();
                session_destroy();
                header("location: ../login.php");
        }else{
            header("location: preespace.php");
        }
    }else{  
        header("location: login.php");
    }
?>