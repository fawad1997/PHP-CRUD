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
if(isset($_POST['create'])){
		
		$email = $_POST['email'];
		$pass = $_POST['password'];
	
		$insert_c = "INSERT into admin (admin_email,admin_password) values ('$email','$pass')";
	
		$run_c = mysqli_query($objConnection, $insert_c); 
		if ($run_c) {
			echo "<script type='text/javascript'>window.alert('Success'); window.location.href='signup.php';</script>";
			
		}
	}


if(isset($_POST['add'])){
		
		
		$name = $_POST['name'];
		$age = $_POST['age'];
		$studentno = $_POST['studentno'];
		$course = $_POST['course'];
	
		$insert_c = "INSERT into student (name,age,course,studentno) values ('$name','$age','$course','$studentno')";
	
		$run_c = mysqli_query($objConnection, $insert_c); 
		if ($run_c) {
			echo "<script type='text/javascript'>window.alert('Success'); window.location.href='welcome.php';</script>";
			
		}
	}



	if(isset($_POST['update'])){
		

		$id = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$studentno = $_POST['studentno'];
		$course = $_POST['course'];
	
		$insert_c = "UPDATE student SET name = '$name', age = '$age', studentno = '$studentno', course = '$course' where id = '$id' ";
	
		$run_c = mysqli_query($objConnection, $insert_c); 
		if ($run_c) {
			echo "<script type='text/javascript'>window.alert('Success'); window.location.href='welcome.php';</script>";
			
		}
	}

	if(isset($_POST['delete'])){
		

		$id = $_POST['id'];

	
		$insert_c = "DELETE from student where id = '$id' ";
	
		$run_c = mysqli_query($objConnection, $insert_c); 
		if ($run_c) {
			echo "<script type='text/javascript'>window.alert('Success'); window.location.href='welcome.php';</script>";
			
		}
	}

?>