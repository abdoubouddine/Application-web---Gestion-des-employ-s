<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="about.css">
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
						<img src="bg4.png">
					</div>
				</div>
				<!--Nav-->
				<nav class="col-md-9 col-xs-12">
					<ul class="nav-list">
						<li class="list"><a href="home.php">Home</a></li>
						<li class="list"><a href="about.php">About</a></li>
						<li class="list"><a href="#">Services</a>
							<ul class="dropdown-menu">
								<li class="sublist"><a href="recherche.php">Rechercher</a></li>
								<li class="sublist"><a href="insert.php">Ajouter</a></li>
								<li class="sublist"><a href="update.php">Modifier</a></li>
								<li class="disabled"><a href="delete.php">Supprimer</a></li>
							</ul>
						</li>
						<li class="list"><a href="contact.php">Contact</a></li>
						<li class="list"><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!--/Header-->
	<script type="text/javascript" src="forme_1.js"></script>
	<section class="sections home text-center">
		<div class="overlay">
			<div class="jumbotron">
				<div class="home-content">
					<h1 class="home-title">
					About <small>the app</small> 
					</h1>
					<hr class="my-4">
					<div class='row'> 
						<div class="col-md-3 text-center">
							<h3 style="color: goldenrod; font-weight: bolder">SEARCH</h3>
							<p style=" font-weight: bold;"> Search the employees by many criteria : ID / NAME / DATE / NUMBER OF HOURS. </p>
						</div>
						<div class="col-md-3 text-center">
							<h3 style="color: goldenrod; font-weight: bolder">ADD</h3>
							<p style=" font-weight: bold;">Insert new employees in the database</p>
						</div>
						<div class="col-md-3 text-center">
							<h3 style="color: goldenrod; font-weight: bolder">UPDATE</h3>
							<p style=" font-weight: bold;">Update the information of any employee</p>
						</div>
						<div class="col-md-3 text-center">
							<h3 style="color: goldenrod; font-weight: bolder">DELETE</h3>
							<p style=" font-weight: bold;">Delete an employee from the database</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
      <p>Abdelmoughit BOUDDINE's Design, Copyright ENSAM-C &copy; 2020</p>
    </footer>

</body>
</html>