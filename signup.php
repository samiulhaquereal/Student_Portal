<?php

$stdID=$_REQUEST["r_id"];
$stdName=$_REQUEST["r_name"];
$stdPhone=$_REQUEST["r_Phone"];
$stdEmail=$_REQUEST["r_email"];
$stdAddress=$_REQUEST["r_Address"];
$stdPassword=$_REQUEST["r_password"];

$servername="localhost";
$username="root";
$password="";
$dbname="project";


$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection==false)
{
    die("Connection error.....");
}

$query="INSERT INTO admin VALUES($stdID,'$stdName','$stdEmail','$stdPassword','$stdPhone','$stdAddress')";
if(mysqli_query($connection,$query))
{
    header('location:login.html');
}
else
{
    header('location:signup.html');
}
?>
