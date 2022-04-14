<?php

$stdID=$_REQUEST["s_id"];
$stdName=$_REQUEST["s_name"];
$stdEmail=$_REQUEST["s_email"];
$stdPhone=$_REQUEST["s_phone"];


$servername="localhost";
$username="root";
$password="";
$dbname="project";


$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection==false)
{
    die("Connection error.....");
}

$query="INSERT INTO studentinfo (stu_id,Name,Email,Phone) VALUES ('$stdID','$stdName','$stdEmail','$stdPhone')";
if(mysqli_query($connection,$query))
{
    header('location:sinfo.html');
}
else
{
    header('location:sinfo.html');
}
?>
