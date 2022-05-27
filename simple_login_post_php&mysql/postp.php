<!DOCTYPE html>
<html >
  <head>
    <link rel="stylesheet" href="css\style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
    <title></title>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
<a class="navbar-brand" href="#">MOH</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
    <a class="nav-item nav-link " href="home.php">Home</a>
    <a class="nav-item nav-link" href="profile.php">Profile</a>
    <a class="nav-item nav-link" href="#">Post</a>
    <a class="nav-item nav-link " href="about.php">About</a>
  </div>
</div>
</nav>



<?php
session_start();
?>

  <?php
  $servername="localhost";
  $user="root";
  $password="";
  $dbname="data";
  $conn=new mysqli($servername,$user,$password,$dbname);
  if ($conn->connect_error)
  {
      die("CONNECTIONFAILS">$conn->connect_error);

  }
  

  $sql="SELECT content from notes";
  $result = $conn->query($sql);

  ?>
  <?php
  if($result->num_rows>0)
  {


      while($row=$result->fetch_assoc())
      {
  ?>
<div class="container p-4 my-1 border">
  <div class="container p-4 my-1 border">

      <?php echo $row["content"]; ?></div>
      </div>
  <?php
  }
  }
  else
  {
      echo"";

  }
  $conn->close();
  ?>
  </body>



</html>
