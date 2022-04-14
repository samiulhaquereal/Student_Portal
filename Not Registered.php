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
 <h1 align="center">Not Registered Student<h1>
 <div class = "allstudent" align = "center">
     <table align = "center">
 
         <tr>
         <th>Student ID </th>
         <th>Name </th>
         
 
        </tr>
     </div>


     <?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="project";

    $connection=mysqli_connect($servername,$username,$password,$dbname);

    $query="SELECT DISTINCT studentinfo.stu_id,studentinfo.Name FROM studentinfo WHERE studentinfo.stu_id NOT IN (SELECT registration.student_id FROM registration)";
    $r=$connection->query($query);

    if($r->num_rows>0)
    {
        while($row=$r->fetch_assoc())
        {
           echo "<tr><td>" .$row["stu_id"] . "</td><td>" .$row["Name"] ."</td></tr>";
        }
    }else {
	    echo "No Result";
    }

    $connection->close();
    ?>






 
     </table>



 </body>
</html>
