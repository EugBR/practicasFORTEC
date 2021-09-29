<?php 
    session_start();
    header("Location: index.php");
    die();
    $_SESSION['logged_in'] = false;  
    session_destroy();

?>