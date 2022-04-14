<?php

$stdID=$_REQUEST["i_id"];
$stdPassword=$_REQUEST["i_password"];

$servername="localhost";
$username="root";
$password="";
$dbname="project";

$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection==false)
{
    die("Connection error.....");
}

$query="select * from admin where ID = '$stdID' && Password = '$stdPassword'";

$result = mysqli_query($connection,$query);
$num = mysqli_num_rows($result);

if($num == 1)
{
   header('location:dashboard.html');
}
else
{
    header('location:login.html');
}


?>
