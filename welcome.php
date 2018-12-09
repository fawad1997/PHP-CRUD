<!DOCTYPE html>
<html>
<style>
	body{
            background-image:url("bg/bg4.jpg");
           
            background-size: 100% 200%;
            padding: 0px;
            background-repeat: no-repeat;
	}
</style>
<?php $pageTitle = "Home"; ?>
<?php include("head.php"); ?>

<?php require("config/configurations.php"); ?>
<body>
	<?php if($_SESSION['email']==""):
		header("Location: logout.php");
		endif; ?>
<?php include("nav.php"); ?>
<div class="container">
	<h1>List of Students<span>
	<button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#myModal">Add Student</button>

  <!-- Modal -->
   <form action="action.php" method="POST">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Add Student</h3>
        </div>
        <div class="modal-body">
        	<div class="form-group">
	   		 <label for="studentnumber" style="font-size: 20px;">Student Number</label>
	   	 		<input type="number" class="form-control" id="stundentnumber" placeholder="student number" required name="studentno">
	  </div>
	 
	   <div class="form-group">
	   		 <label for="name" style="font-size: 20px;">Name</label>
	   	 		<input type="text" class="form-control" id="name" placeholder="name" required name="name">
	  </div>
	  <div class="form-group">
	   		 <label for="age" style="font-size: 20px;">Age</label>
	   	 		<input type="number" class="form-control" id="age" placeholder="age" required name="age">
	  </div>
	  <div class="form-group">
	   		 <label for="course" style="font-size: 20px;">Course</label>
	   	 		<input type="text" class="form-control" id="course" placeholder="course" required name="course">
	  </div>


	  	</div>
         
       
        <div class="modal-footer">
          	  <button type="submit" class="btn btn-primary pull-right" name="add">Add</button>
        </div>
         </form>
      </div>
      
    </div>
  </div>
</span>
</h1>
	<div class="col-md-9">
		<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>Student Number</th>
					<th>Name</th>
					<th>Age</th>
					<th>Course</th>
					<th>Action</th>
					
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

       $c = 0;

		$get_stu = "SELECT * FROM student ORDER BY name";
		$run_get = mysqli_query($objConnection, $get_stu);

		while ($row_stu=mysqli_fetch_array($run_get)){
			 

			$id = $row_stu['id'];
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
					<td><button class='btn btn-info' data-toggle='modal' data-target='#update$c'>Edit</button>
					<form action='action.php' method='POST'>
  <div class='modal fade' id='update$c' role='dialog'>
    <div class='modal-dialog'>
    
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h3 class='modal-title'>Add Student</h3>
        </div>
        <div class='modal-body'>
        	<div class='form-group'>
	   		 <label for='studentnumber' style='font-size: 20px;'>Student Number</label>
	   	 		<input type='number' class='form-control' id='stundentnumber' placeholder='$studentno' required name='studentno' value='$studentno'>
	  </div>
	 
	   <div class='form-group'>
	   		 <label for='name' style='font-size: 20px;'>Name</label>
	   	 		<input type='text' class='form-control' id='name' placeholder='$name' required name='name' value='$name'>
	  </div>
	  <div class='form-group'>
	   		 <label for='age' style='font-size: 20px;'>Age</label>
	   	 		<input type='number' class='form-control' id='age' placeholder='$age' required name='age' value='$age'>
	  </div>
	  <div class='form-group'>
	   		 <label for='course' style='font-size: 20px;'>Course</label>
	   	 		<input type='text' class='form-control' id='course' placeholder='$course' required name='course' value='$course'>
	  </div>
          <input type='hidden' name='id' value='$id'>

	  	</div>
         
       
        <div class='modal-footer'>
          	  <button type='submit' class='btn btn-primary pull-right' name='update'>Update</button>
          	   <button type='submit' class='btn btn-danger pull-left' name='delete'>Delete</button>
        </div>
         </form>

					
				</tr>

			</tbody>
		";
		$c++;

		}

		
?>

<!-- <button type='submit' class='btn btn-danger' name='delete'>Delete</button></td> -->
		<!-- <table class="table table-hover">
			<thead>
				<tr>
					<th>Student Number</th>
					<th>Name</th>
					<th>Age</th>
					<th>Course</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>32423434334</td>
					<td>Fawad</td>
					<td>Fawad</td>
					<td>adwadw</td>
					<td><button class="btn btn-info">Edit</button>
					<button class="btn btn-danger">Delete</button></td>
				</tr>

			</tbody>
		</table> -->
		</table>
	</div>
</div>
<?php include("scripts.php"); ?>
</body>
</html>