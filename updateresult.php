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


$query = "CALL UpdateResult ('".$_POST["sr_id"]."','".$_POST["sr_course"]."','".$_POST["sr_cgpa"]."')";




if(mysqli_query($connection,$query))
{
    header('location:Student Result Information.html');
}
else
{
    header('location:Student Result Information.html');
}
?>
