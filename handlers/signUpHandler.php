<?php 

session_start();

include 'DbConnect.php';
$objDb= new DbConnect;
$con = $objDb->connect();



// Retrieve form data
$password = $_POST['password'];
$email = $_POST['email'];
$user = $_POST['username'];


//Select used usernames and emails.
$stmt1 = $con->prepare("SELECT email, user FROM sign");
$stmt1->execute();
$bool = false;


foreach($stmt1 as $row){
   if($row[0]===$email || $row[1] ===$user){
      $bool = true;
      $_SESSION['invalid'] = 2 ;
      header('Location: ../sign.php');
      break;
   }
}

if(!$bool){
   // Prepare and execute the SQL statement
$stmt = $con->prepare("INSERT INTO sign(user,password, email) VALUES (?, ?, ?)");
$stmt->execute([$user,$password, $email]);
$_SESSION['success']=1;
header('Location: ../sign.php');


}

// Close the database connection
$con = null;

// Return a response

?>

?>