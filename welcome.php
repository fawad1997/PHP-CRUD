<!DOCTYPE html>
<html>
<?php include("head.php"); ?>
<?php require("config/configurations.php"); ?>
<body>
	<?php if($_SESSION['email']==""):
		header("Location: logout.php");
		endif; ?>
<?php include("nav.php"); ?>
<div class="container">
	<h1>Welcome</h1>
	<div class="col-md-9">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Hello</th>
					<th>World</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Fawad</td>
					<td><?=$_SESSION['email'] ?></td>
					<td><button class="btn btn-info">Edit</button></td>
					<td><button class="btn btn-danger">Delete</button></td>
				</tr>
				<tr>
					<td>Fawad</td>
					<td>Ziad</td>
					<td><button class="btn btn-info">Edit</button></td>
					<td><button class="btn btn-danger">Delete</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?php include("scripts.php"); ?>
</body>
</html>