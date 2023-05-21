<?php 
session_start();
?>

<?php
include 'header.php';
if(!isset($_SESSION['name'])){
  header("Location: login.php");
  exit;
}
?>
<body>
<div class="d-flex align-items-center justify-content-center " style="width:100%; min-height: 90vh;">
<section class="login bg-white p-2 rounded mt-2 mb-2" style="width:100%; min-height: 100vh;">
<?php

$bool = isset($_SESSION['name'])? $_SESSION['name']: false;

  if(isset($_SESSION['name'])){  
    echo '<p><a class="text-decoration-none " href="logout.php"><button class="btn btn-info text-white">Log out</button></a></p>';
    echo "<h1 class='text-center mt-2'>Welcome " . $_SESSION['name']. "</h1>";
  }
?>
<div class="m-auto" style="width:80%">
<form method='post' action='handlers/addHandler.php'>
        <div class="form-group d-flex">
          <input type="text" class="form-control"  id="item" style="width:200%"  aria-describedby="ItemHelp" name="item" placeholder="Add item to your list" required>
          <input type="text" class="form-control"id="num"style="width:30%" aria-describedby="NumHelp" name="num" placeholder="num" required>
          <button type="submit" class="btn btn-primary p-2" style="width:20%; height:50px;">+</button>
        </div>
        
</form>
</div>
<div class=" m-auto shadow-lg p-3 mb-5 mt-4" style="width:80%">
<table class="table table-hover mt-3 text-center align-middle rounded">
<thead class="bg-dark text-white text-center align-middle">
    <tr>
      <th scope="col" width="50px">Number</th>
      <th scope="col" width="70%">Item</th>
      <th scope="col" class="dis text-center">Date</th>
      <th scope="col" ><form method="POST" action="handlers/clearTable.php"><button name="clear" class="btn btn-danger">&times</button></form></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include 'handlers/getTable.php';
    ?>
  </tbody>
</table>

</div>



</section>
</div>
<script>
function myFunction(id) {
  document.getElementById(id).style.textDecoration = "line-through";
  document.getElementById(id).style.textDecorationStyle = "double";

}
</script>
     
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>