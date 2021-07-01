
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Formulaire du Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h1 align="center">Login Form</h1>
    		<p align="center">In order to have access to employees database, please fill up the blanks below.</p>
  		</div>
	</div>
	<div class="login-box">
		<form method="POST" action="">
				<p align="center" class="legend">Login</p>
				<?php if(isset($_GET['erreur'])) 
				echo '<div class="alert alert-danger" role="alert">
  						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  						<span class="sr-only">Error:</span>Enter a valid Username or Password
						</div>'?>
				<div class="textbox">
					<i class="fa fa-user" aria-hidden=' true'></i>
					<input type="text" name="usrnm" placeholder="Username" required="required">
				</div>
				<div class="textbox">
					<i class="fa fa-lock" aria-hidden=' true'></i>
					<input type="password" name="pwd" placeholder="Password" required="required">
				</div>
				<input class="btn btn-success" type="submit" name="valider" value="Submit"> 
		
		</form>
	</div>
</body>
</html>