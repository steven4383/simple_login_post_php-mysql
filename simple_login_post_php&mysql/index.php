<html>
<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86">
<head>
<!-- css And bootstrap-->
  <link rel="stylesheet" href="css\stylesheet.css"><!-- css And bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="row"> <!-- row -->

<div></div>

<div class="col-sm-7" ><img  src="img\band.jpg" alt="band" width="800" height="600">  <!-- column-1 image placement-->
  </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!-- Blank space-->

<div class="col-sm-4"> <!-- column-2 login placement-->
  <div class="container-fluid">
    <br><br>

<form class="f1" action="function.php" method="post">
  <center><h1 class = "title" >Men of Honors</h1>
  <h5>login </h5></center>
  <br>
<p>
<label>UserName &nbsp;</label>
<input type="text" name="user" id="user" required/>
</p>
<p>
<label>Password &nbsp; &nbsp;</label>
   <input type="password" name="pass" id="pass" required/>
</p>
<p>
<center> <input  type="submit" name="submit" value="login" /> </center>
</p>
<center><a href="reg.php">click to Register</a></center>
</form>
 </div>
</div>

</body>
</html>
