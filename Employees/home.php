<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home RH</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="home.css">
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
						<h3><?php echo'Welcome '.$_SESSION['nom'].' '.$_SESSION['prenom']?> </h3>
					</div>
				</div>
				<!--Nav-->
				<nav class="col-md-9 col-xs-12">
					<ul class="nav-list">
						<li class="list"><a href="home.php">Home</a></li>
						<li class="list"><a href="about.php">About</a></li>
						<li class="list"><a href="#">Services</a>
							<ul class="dropdown-menu" aria-labelledby='dropdownMenu4'>
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
			<div class="container">
				<div class="home-content">
					<div>
						<img src="bg4.png">
					</div>
					<h3 class="home-title">	
					Start Your Business Today
					</h3>
					<p class='lead home-desc'> <?php echo'Hello '.$_SESSION['nom'].' '.$_SESSION['prenom'].' ,hope you are doing fine.'?></p>
					<a class="btn button" title="Services" href="insert.php">Start Now</a>
					<a class="btn button" title="About" href="about.php">Discover more</a>
				</div>
			</div>
		</div>
	</section>
</body>
</html>