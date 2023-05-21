<?php 
    session_start();
    unset($_SESSION["name"]);
    unset($_SESSION["invalid"]);
    header("Location: login.php");
    

?>