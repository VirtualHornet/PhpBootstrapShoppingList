<?php
include 'header.php';

session_start();

if(isset($_SESSION["name"])){
  header("Location: index.php");
}

$bool = isset($_SESSION['invalid'])? $_SESSION['invalid']: null;

/*if(isset($_SESSION['invalid'])){
   echo"<p>Email or Username has been taken.</p>";
}else{
   echo"<p>Form submitted successfully</p>";
   echo'<a href="login.php">Login</a>';
}*/

?>
<body>
<div class="d-flex  align-items-center justify-content-center " style="width:100%; height: 90vh;">  
<section class="container rounded p-2 d-flex flex-column align-items-center">
 <h2 class="text-black text-center">SIGN UP</h2>
 <?php 
if(isset($_SESSION['invalid'])){
    echo"<p>Email or Username has been taken.</p>";  
}
unset($_SESSION["invalid"]);

if(isset($_SESSION['success'])){
  echo"<p>Form submitted successfully</p>";
  echo'<a href="login.php">Login</a>';
}
unset($_SESSION["success"]);


 /*if(isset($_SESSION['invalid']) && ){
  echo"<p>Email or Username has been taken.</p>";
   unset($_SESSION["invalid"]);
  }
  if(isset($_SESSION['invalid']) && $_SESSION['invalid']===false){
    echo"<p>Form submitted successfully</p>";
    echo'<a href="login.php">Login</a>';
    unset($_SESSION["invalid"]);
  }
 */
 ?>
  <form method="post" action="handlers/signUpHandler.php" style="width: 70%">  
        <div class="form-group text-center">
          <label for="InputEmail" class="mt-3 mb-3 ">Email address</label>
          <input type="email" class="form-control mx-center" id="InputEmail" aria-describedby="emailHelp" name="email" placeholder="Enter email" required>
        
        </div>
        <div class="form-group text-center">
          <label for="InputPassword" class="mt-3 mb-3">Password</label>
          <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password" required>
        </div>
        <div class="form-group text-center">
         <label for="InputUserName" class="mt-3 mb-3">Username</label>
         <input type="text" class="form-control" id="InputUserName" name="username" placeholder="Username" required>
        </div>
        <div class="form-group text-center">
        <button type="submit" class="btn btn-primary hover-effect mt-5 p-3 w-100">Submit</button>
        </div>
        <div class="form-group text-center mt-2">
         <a class="text-center text-decoration-none" href="login.php">Click here to login.</a>
      </div>
      </form> 
    </section>  
    </div>
</body>
</html>

