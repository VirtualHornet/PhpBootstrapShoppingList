<?php 

session_start();
//connection to database
include 'DbConnect.php';
$objDb= new DbConnect;
$con = $objDb->connect();

//posted variables

$p_user = $_POST["user"];
$p_pass = $_POST["pass"];  


    $stmt = $con->prepare("SELECT user, password FROM sign");
    $stmt->execute();
    
    //loop on the response of the database
    $result = $stmt->setFetchMode(PDO::FETCH_NUM);
    foreach ($stmt as $row) {
        /* Check if the posted variables are in the database*/
        if($p_user===$row[0] && $p_pass === $row[1]){
            echo "You logged in";
            $_SESSION['name'] = $p_user;
            header("Location: ../index.php");
            break;
        }
        else{ 
            header("Location: ../login.php");
            $_SESSION['false'] = false;
        }
    }
 




$con=null;

?>






?>