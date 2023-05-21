<?php
include 'header.php';

session_start();



?>
<body>
<div class=" d-flex align-items-center justify-content-center" style="width:100%; height: 90vh;">  
<section class="container bg-white p-2 rounded">
<h2 class="text-black text-center">LOGIN</h2>
<?php
  if(isset($_SESSION["false"])){
    echo '<p class="text-center">Invalid username or password</p>';
    unset($_SESSION["false"]);
  }
  if(isset($_SESSION["name"])){
    header("Location: index.php");
  }
?>
  <form method='post' action='handlers/loginHandler.php'>
        <div class="form-group text-center">
          <label for="user" class="mt-5 mb-3 ">Username</label>
          <input type="text" class="form-control p-3 mx-auto" style="width:80%" id="user" aria-describedby="UserHelp" name="user" placeholder="Enter your username" required >
        </div>
        <div class="form-group text-center mt-5">
          <label for="pass" class=" mb-3 ">Password</label>
          <input type="password" class="form-control p-3 mx-auto" style="width:80%" id="pass" aria-describedby="PassHelp" name="pass" placeholder="Enter password" required >
        </div>
        <div class="form-group text-center">
        <button type="submit" class="btn btn-primary hover-effect mt-5 p-3" style="width:80%;">Login</button>
        </div>
      </form> 
      <div class="form-group text-center mt-2">
         <a class="text-center text-decoration-none" href="sign.php">Click here to sign up.</a>
      </div>  
</section>
</div>  
</body>
</html>