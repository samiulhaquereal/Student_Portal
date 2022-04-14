<?php

$aID=$_REQUEST["ar_id"];
$stdID=$_REQUEST["sr_id"];
$stdcourse=$_REQUEST["sr_course"];
$stdcgpa=$_REQUEST["sr_cgpa"];


$servername="localhost";
$username="root";
$password="";
$dbname="project";


$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection==false)
{
    die("Connection error.....");
}

$query="INSERT INTO studentresult VALUES('$aID','$stdID','$stdcourse','$stdcgpa')";
if(mysqli_query($connection,$query))
{
    header('location:Student Result Information.html');
}
else
{
    header('location:Student Result Information.html');
}
?>
