<?php


$servername="localhost";
$username="root";
$password="";
$dbname="project";


$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection==false)
{
    die("Connection error.....");
}


$query = "CALL Deletecourse ('".$_POST["c_code"]."')";

if(mysqli_query($connection,$query))
{
    header('location:coursereg.html');
}
else
{
    header('location:coursereg.html');
}
?>
