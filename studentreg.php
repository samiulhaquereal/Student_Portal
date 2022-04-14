<?php

$stdID=$_REQUEST["s_id"];
$cname=$_REQUEST["c_name"];
$s_section=$_REQUEST["s_section"];
$s_semester=$_REQUEST["s_semester"];


$servername="localhost";
$username="root";
$password="";
$dbname="project";


$connection=mysqli_connect($servername,$username,$password,$dbname);


$sql = "INSERT INTO registration (student_id, course_id, section, semester) VALUES ( '$stdID', '$cname', '$s_section', '$s_semester')";

if(mysqli_query($connection,$sql))
{
    header('location:studentreg.html');
}
else
{
    header('location:studentreg.html');
}
?>
