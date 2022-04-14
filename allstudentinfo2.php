<html>
	<?php
		$server="localhost";
		$userid ="root";
		$Password = "";
		$myDB = "project";$con = mysqli_connect($server,$userid,$Password,$myDB);if (mysqli_connect_errno()) {
		# code...
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

?>
	<head>
		<title>Student Managment System</title>
		<link rel="icon" type="image/x-icon" href="1.png">


	<style>
		
		body {font-family: Arial, Helvetica, sans-serif;
		    background: linear-gradient(to right, #ada996, #c8dad9, #b4d2f2, #B2DFDB);
		
		}
		form {
		 
		 width: 50%;
		 padding-left : 460px;
		 padding-top : 15px;
		 
}      
        .imgcontainer {
			  text-align: center;
			  margin: 24px 0 12px 0;
			
}
        img.avatar {
			  width: 40%;
			}
		h1 {
			 font-family: "Times New Roman", Times, serif;
			 margin: 40px 0px;
           }

		  .academicresult {
			background-color : rgb(250,250,250);
			padding: 20px 20px;
			margin: 5px 0;
			box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%), 0 1px 18px 0 rgb(0 0 0 / 12%);
}

		input[type=text], input[type=Password] {
		  background-color : rgb(250,250,250);
		  width: 50%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 2px solid #ccc;
		  box-sizing: border-box;
		}
		select {
			background-color : rgb(250,250,250);
			width: 50%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 2px solid #ccc;
			font-size: 12px;
			box-sizing: border-box;
}
		input[type=submit] {
			  background-color: rgb(0, 137, 123);
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  width: 10%;
			}

		input[type=button] {
			  background-color: rgb(0, 137, 123);
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  width: 10%;
			}
		
		
		
		</style> 
	</head>
	<body>


	 <form action="allstudentinfo.php" method=post>
		<div class = "academicresult" align = "center">
		<div class="imgcontainer">
				<img src="diulogoside.png" alt="Avatar" class="avatar">
			 </div>

			<h1>Registered Studnet<h1>
				
				<form action="allstudentinfo.php" method="post">


				<?php

					echo '<select name="s_semester">
					<option>Semester</option>';

					$sqli = "SELECT DISTINCT semester FROM registration";
					$result = mysqli_query($con, $sqli);
					while ($row = mysqli_fetch_array($result)) {
					echo '<option>'.$row['semester'].'</option>';
					}

					echo '</select>';

                ?>



				<?php

					echo '<select name="s_section">
					<option>Section</option>';

					$sqli = "SELECT DISTINCT section FROM registration";
					$result = mysqli_query($con, $sqli);
					while ($row = mysqli_fetch_array($result)) {
					echo '<option>'.$row['section'].'</option>';
					}

					echo '</select>';

                ?>






				<p> 
					<input type="submit" value="Submit"/>


				</p>			



				
	 </form>
		</div>




	</body>




</html>