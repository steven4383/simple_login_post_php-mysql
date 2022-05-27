<html>
<head>
  <head>
  <!-- css And bootstrap-->
    <link rel="stylesheet" href="css\style2.css">
    <link rel=icon href="img\profile22.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <title>Home</title>
<body>
  <div class="row">

    <div class="col-3"><center> <br> <br> <br>
<img src="img\profile22.jpg" class="img-thumbnail" alt="Cinque Terre" width="200" height="100">
      <h3>Profile</h3>

      <?php
      session_start();
      ?>

      <?php


      echo "Name:".$_SESSION["v1"]."<br>";
      echo "password:".$_SESSION["v2"];

      ?><br><br>
       <a class="btn btn-outline-primary" href="index.php" role="button">Logout</a>
</center>

      </div>
    <div class="col-lg">
      <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">MOH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="home.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="profile.php">Profile</a>
      <a class="nav-item nav-link" href="postp.php">Post </a>
      <a class="nav-item nav-link " href="about.php">About</a>
    </div>
  </div>
</nav>
</div>
<div class="col-lg-1-12"><br>
<p >Post </p>


  <form class="notes" action="content.php" method="post">
    <input type="date" id="day" name="birthday" required/>
    <br><br>
<textarea name="n1" id="n1" rows="10" cols="60" required>Some text...</textarea><br><br>

<input  type="submit" value="post" name="b1" />
  </form>

</div>
</div>

</div>


</body>

<script src="back.js" ></script>

  <footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(227, 242, 252);">
      © 2020 Copyright:
      <a class="text-dark" >stephen</a>
    </div>
    <!-- Copyright -->
  </footer>




</html>
