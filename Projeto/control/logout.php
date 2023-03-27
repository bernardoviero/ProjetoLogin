<?php
    session_start();
    function fazerLogout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
    
        session_destroy();
        header('Location: ../view/index.php');
        exit;
    }
?>