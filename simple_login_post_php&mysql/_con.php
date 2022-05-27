<?php
session_start();
 ?>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="data";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
    die("CONNECTIONFAILS">$conn->connect_error);

}

$cn=$_REQUEST['n1'];
$sql="INSERT INTO notes(content)VAlUES('$cn')";
if($conn->query($sql))
{


    echo"record Added Successfully";
    header("Location: post.php");
}
else
{
    echo"error";

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>hi</p>
  </body>
</html>
