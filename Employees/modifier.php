<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page Update</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="update.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="jquery-3.4.1.min.js"></script>
</head>
<body>
	
	<!--Header-->
	<header>
		<div class="container">
			<div class="row">
				<!--Bars icon-->
				<i class=" icon fa fa-bars" aria-hidden='true'></i>
				<!--Logo-->
				<div class="col-md-3 col-xs-12">
					<div class="logo">
						<h1> Application Web ENSAM CASA </h1>
						<h3><?php echo'Welcome'.$_SESSION['nom'].' '.$_SESSION['prenom']?> </h3>
					</div>
				</div>
				<!--Nav-->
				<nav class="col-md-9 col-xs-12">
					<ul class="nav-list">
						<li class="list"><a href="secrete_1.php">Home</a></li>
						<li class="list"><a href="about_1.php">About</a></li>
						<li class="list"><a href="#">Services</a>
							<ul class="dropdown-menu" aria-labelledby='dropdownMenu4'>
								<li class="sublist"><a href="recherche.php">Rechercher</a></li>
								<li class="sublist"><a href="insert.php">Ajouter</a></li>
								<li class="sublist"><a href="update.php">Modifier</a></li>
								<li class="disabled"><a href="delete.php">Supprimer</a></li>
							</ul>
						</li>
						<li class="list"><a href="contact_1.php">Contact</a></li>
						<li class="list"><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<section class="sections home text-center">
		<div class="overlay">
			<div class="container">
				<div class="card">
					<h2 class="home-title">Fill up the blinks below:</h2>
					<div class="row ">
						<form method="POST" action="update1.php">
							<table>
                        <tr>
                          <td style="color:white; font-size: large;"> Id: </td>
                          <td><input type="text" class="span3" name="name" id="nom" readonly="" value='<?php $_POST["id"];?>' readonly></td>
                        </tr>
                        <tr>
                          <td style="color:white;font-size: large;"> Name: </td>
                          <td><input type="text" class="span3" name="name" id="nom" placeholder="Enter a name" required="required"></td>
                  </tr>   
                        <tr>
                          <td style="color:white;font-size: large;"> Hours: </td>
                          <td><input type="text" class="span3" name="hours" id="heures" placeholder="Enter a number of hours" required="required" maxlength="5"
                          pattern="[0-9]{1,5}"></td>
                        </tr>
                        <tr>
                          <td style="color:white;font-size: large;"> Date: </td>
                          <td><input type="date" class="span3" name="date" id="dat" placeholder="Enter a number of hours" required="required" maxlength="5" pattern="[[:digit:]]{2}/[[:digit:]]{2}/[[:digit:]]{4}"></td>
                        </tr>
                      </table> 
						<a href="" class="btn btn-primary" type="submit">Update</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
</body>
</html>