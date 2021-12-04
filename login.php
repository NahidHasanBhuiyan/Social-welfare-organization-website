<?php include_once("assets/function/func.php");
	session_start();
if(isset($_SESSION['name']) AND isset($_SESSION['email'])){
 	header("location: adminpanel.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In || Admin</title>
	<link rel="shortcut icon" type="image/icon" href="assets/images/l.png"/>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/">
</head>
<body>
	<?php

		if(isset($_POST['submit'])){
			 $email = $_POST['email'];
			 $pass = $_POST['pass'];

			$log  = $conn-> query("SELECT * FROM admin WHERE email = '$email' AND password = '$pass' ");

			$row = $log -> num_rows;
			if($row==1){
				

				while($ddd = $log->fetch_assoc()){
				
				$_SESSION['name'] = $ddd['name'];
				$_SESSION['email'] = $ddd['email'];
				$_SESSION['pass'] = $ddd['password'];
				$_SESSION['img'] = $ddd['image'];

			}
 				header("location: adminpanel.php");
			}else{
				echo "<h3 style='color: #FFF;margin:10px auto; text-align:center; width:30%; background-color: red; padding: 5px;';>Email or password incorrect</h3>";
			}
		}


	?>
	<div class="card alert alert-info" style="width: 90%; margin: 200px auto;">
		<div class="card-header">
			<h1>Admin Panel Log In</h1>
		
		</div>
		<div class="card-body">
	
		<form action="" method="POST">
		
		<div class="form-group">
			<label for="">Email</label>
			<input name="email" class="form-control" type="email" >
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input name="pass" class="form-control" type="password" >
		</div>
		<hr>
		<div class="form-group">
			
			<button name="submit" style="width: 100%;" class="form-control btn btn-success">Log In</button>
		</div>
		</form>
		</div>
		<div class="card-footer">
			<a href="timeline.php">Go to Timeline</a>
			<hr>
			<a href="index.php">Go to Main Page</a>
		</div>
		</div>
	
		<script src="assets/js/bootstrap.js"></script>
		
	
</body>
</html>