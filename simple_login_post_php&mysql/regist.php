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
$na=$_REQUEST['user'];
$no=$_REQUEST['pass'];
$sql="INSERT INTO login(username,password)VAlUES('$na','$no')";



if($conn->query($sql))
{


    echo"record Added Successfully";
    header("Location: index.php");
}
else
{
    echo"error";

}




?>
