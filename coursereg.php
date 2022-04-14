<?php

$ccode=$_REQUEST["c_code"];
$cnamee=$_REQUEST["c_name"];
$credit=$_REQUEST["credit"];
$pname=$_REQUEST["p_name"];


$servername="localhost";
$username="root";
$password="";
$dbname="project";


$connection=mysqli_connect($servername,$username,$password,$dbname);

$query="INSERT INTO courses VALUES('$ccode','$cnamee','$credit','$pname')";
if(mysqli_query($connection,$query))
{
    header('location:coursereg.html');
}
else
{
    header('location:coursereg.html');
}
?>
