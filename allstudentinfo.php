<html>
 <head>
 <link rel="icon" type="image/x-icon" href="1.png">
  <style type="text/css">
  body {font-family: Arial, Helvetica, sans-serif;
		    background: linear-gradient(to right, #ada996, #c8dad9, #b4d2f2, #B2DFDB);
		
		}
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
       background-color : #009688;
       color : white;
   }
   tr:nth-child(even) {
       background-color : #B2DFDB;
   }
   tr:nth-child(odd) {
       background-color : #E0F2F1;
   }


  </style>
 </head>
 <body>
 <h1 align="center">Registered Student<h1>
 <div class = "allstudent" align = "center">
     <table align = "center">
 
         <tr>
         <th>Student ID </th>
         <th>Name </th>
         <th>Course Code </th>
         <th>Course Name </th>
         <th>Credit </th>
         <th>Professor Name </th>
 
        </tr>
     </div>


     <?php
     $stdid=$_REQUEST["s_section"];
     $semester=$_REQUEST["s_semester"];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="project";

    $connection=mysqli_connect($servername,$username,$password,$dbname);

    $query="SELECT * FROM student_data WHERE semester = '$semester' AND section = '$stdid' ";
    $r=$connection->query($query);

    if($r->num_rows>0)
    {
        while($row=$r->fetch_assoc())
        {
           echo "<tr><td>" .$row["ID"] . "</td><td>" .$row["Name"] ."</td><td>" .$row["Course_code"] ."</td><td>" .$row["course_name"] ."</td><td>" .$row["Credit"] ."</td><td>" .$row["Professor_Name"]. "</td></tr>";
        }
    }else {
	    echo "No Result";
    }

    $connection->close();
    ?>






 
     </table>



 </body>
</html>
