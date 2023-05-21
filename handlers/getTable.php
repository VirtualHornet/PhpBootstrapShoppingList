<?php 
include 'DbConnect.php';
$objDb= new DbConnect;
$con = $objDb->connect();

$stmt = $con->prepare("SELECT num, item, date , id FROM item");
$stmt->execute();

foreach($stmt as $row){
    echo'<tr>';
    echo'<td scope="row">'.$row[0].'</td>';
    echo'<td class="font-weight-bold text-uppercase " id="' . $row[3] . '">'.$row[1].'</td>';
    echo'<td class="dis text-center">'.$row[2].'</td>';
    echo'<td> <button  onclick="myFunction('.$row[3].')" class="btn btn-success toggleButton" data-target="'.$row[3].'"><img src="./public/checkmark.png" alt="check" width="10px" height="10px" ></button> </td>';
    echo'</tr>';
 }
$con = null; 
?>