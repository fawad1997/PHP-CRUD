<!DOCTYPE html>
<html>
<style>
	body{
            background-image:url("bg/bg5.jpg");
           
            background-size: 100% 200%;
            padding: 0px;
            background-repeat: no-repeat;
	}
</style>
<?php $pageTitle = "Home Page"; ?>
<?php include("head.php"); ?>
<body>
<?php include("nav.php"); ?>
	<div class="container">
	<h1>List of Students</h1>
	<div class="col-md-8">

		<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>Student Number</th>
					<th>Name</th>
					<th>Age</th>
					<th>Course</th>
					
					
				</tr>
				</thead>
		<?php

// init connection
	$objConnection = mysqli_connect("localhost","root","","tablename"); //mysqli_connect-Opens a new connection to the MySQL server

	// check connection
	if (mysqli_connect_errno()) { //Returns the error code from the last connection error

		// print error and exit
		die( "Failed to connect to MySQL: " . mysqli_connect_error()); //Returns the error description from the last connection error
	} else{
	// 	echo "Connectred!";
	 }



		$get_stu = "SELECT * FROM student";
		$run_get = mysqli_query($objConnection, $get_stu);

		while ($row_stu=mysqli_fetch_array($run_get)){
	
			$name= $row_stu['name'];
			$age = $row_stu['age'];
			$course= $row_stu['course'];
			$studentno = $row_stu['studentno'];


 
			echo "
			<tbody>
				<tr>
					<td>$studentno</td>
					<td>$name</td>
					<td>$age</td>
					<td>$course</td>
					
				</tr>

			</tbody>
		";
		}
?>
</table>
	</div>
</div>
</div>
<?php include("scripts.php"); ?>
</body>
</html>