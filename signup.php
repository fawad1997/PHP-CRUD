<!DOCTYPE html>
<html>

<style>
	body{
            background-image:url("bg/bg.jpg");
           
            background-size: 100% 200%;
            padding: 0px;
            background-repeat: no-repeat;
	}
</style>
<?php $pageTitle = "Sign Up"; ?>
<?php include("head.php"); ?>
<body>
<?php include("nav.php"); ?>

<div class="container">


<div class="col-sm-6">
	<div class="panel panel-primary">
	<div class="panel-heading">Sign-up</div>
	<form action="action.php" method="POST">
		<div class="panel-body">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required name="email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required name="password">
	  </div>
	
	  <button type="submit" class="btn btn-primary pull-right" name="create">Create Account</button>
	  	</div>
	</form>

</div>
</div>
</div>

</body>
</html>