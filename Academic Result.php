<html>
<head>
<link rel="icon" type="image/x-icon" href="1.png">
  <style type="text/css">
   body {font-family: Arial, Helvetica, sans-serif;
		    background: linear-gradient(to right, #ada996, #c8dad9, #b4d2f2, #B2DFDB);}
   table {
       border-collapse:collapse;
       width : 70%;
       color : Black;
       font-family : arial;
       font-size: 20px;
       text-align : center;
   }
   h1 {
			 font-family: "Times New Roman", Times, serif;
			 margin: 40px 0px;
           }

   th {
       background-color : #0097A7;
       color : white;
   }
   tr:nth-child(even) {
       background-color : #B2EBF2;
   }
   tr:nth-child(odd) {
       background-color : #80DEEA;
   }
   

  </style>
 </head>
 <body>
 <h1 align="center">Academic Result<h1>
 
 <table align="center">
 
 
 <tr>
 <th>Course Code </th>
 <th>Course Title </th>
 <th>Credit </th>
 <th>CGPA </th>
 
 </tr>

<?php
$stdid=$_REQUEST["f_id"];
$semester=$_REQUEST["s_semester"];

$servername="localhost";
$username="root";
$password="";
$dbname="project";

$connection=mysqli_connect($servername,$username,$password,$dbname);

$query="SELECT DISTINCT courses.Course_code,courses.course_name,courses.Credit,CGPA 
FROM courses inner join studentresult 
ON studentresult.c_id=courses.Course_code 
INNER JOIN registration ON registration.student_id = studentresult.s_id
WHERE studentresult.s_id ='$stdid' AND registration.semester = '$semester'";



$r=$connection->query($query);

if($r->num_rows>0)
{
    while($row=$r->fetch_assoc())
    {
      
      echo "<tr><td>" .$row["Course_code"] . "</td><td>" .$row["course_name"] ."</td><td>" .$row["Credit"] ."</td><td>" .$row["CGPA"] ."</td></tr>";    
    
    }
}
$connection->close();
?>
</table>



 </body>
</html>
