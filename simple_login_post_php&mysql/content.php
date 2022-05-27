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

$cn=$_REQUEST['n1'];

$name= $_SESSION["v1"]; 

$sql = "INSERT INTO notes(content)VAlUES('$cn')";
 $sql .= "INSERT INTO id(id)VAlUES('$name')";


if($conn->multi_query($sql))
{
      
      header("Location: postp.php");
     
}
else
{
    echo"error";

}

?>
