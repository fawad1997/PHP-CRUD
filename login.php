<!DOCTYPE html>
<html>
<style>
	body{
            background-image:url("bg/bg3.jpg");
           
            background-size: 100% 200%;
            padding: 0px;
            background-repeat: no-repeat;
	}
</style>
<?php $pageTitle = "Login Page"; ?>
<?php require("config/configurations.php"); ?>
<?php include("head.php"); ?>
<body>
<?php include("nav.php"); ?>
<div class="container">
	
	<?php $con = openCon(); ?>
	<?php if(isset($_REQUEST['subBtn'])):
		$email = $_REQUEST['em'];
		$pas = $_REQUEST['ps'];
		$r = selectAllFrom("admin where admin_email = '$email' and admin_password = '$pas'");
		$res = mysqli_fetch_assoc($r);
		$count = mysqli_num_rows($r);
		if($count > 0){
			$_SESSION["email"] = $email;
			header("Location: welcome.php");
		}
		else{
			echo "Not Matched";
		}

	endif;
	?>
	<div class="col-sm-6">
		<div class="panel panel-primary">
		<div class="panel-heading">Login</div>
		<div class="panel-body">
		<form method="post" action="">
		  <div class="form-group">
		    <label>Email address</label>
		    <input type="email" name="em" class="form-control" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" name="ps" class="form-control" placeholder="Password">
		  </div>
		  <button type="submit" name="subBtn" class="btn btn-primary pull-right">Login</button>
		</form>
	</div>
</div>
</div>
</div>
<?php include("scripts.php"); ?>
</body>
</html>