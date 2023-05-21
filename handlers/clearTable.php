<?php 
include "dbConnect.php";
$objDb= new DbConnect;
$con = $objDb->connect();

if(isset($_POST['clear'])){
    $stmt = $con->prepare("DELETE FROM item");
    $stmt->execute();
    echo"Cleared";
    header("Location:../index.php");
}

$con = null;
?>