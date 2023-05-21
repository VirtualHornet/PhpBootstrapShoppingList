<?php 
include 'DbConnect.php';
$objDb= new DbConnect;
$con = $objDb->connect();

$item = $_POST['item'];
$number = $_POST['num'];


$stmt = $con->prepare("INSERT INTO item(item,num) VALUES ( ?, ?)");
$stmt->execute([$item,$number]);

header('Location: ../index.php');



$con=null;
?>