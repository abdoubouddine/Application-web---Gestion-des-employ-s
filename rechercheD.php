<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="recherche2.css">
	
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
					<h2 class="home-title"> Search by Date :</h2>
					<div class="row center">
						<form action="requete_recherche.php" method="POST">
						<div class="row">
							<label class="az" style="color: orange; font-size: 30px;">Date : </label>
							<input type="date" required="required"  name='date' class="az" placeholder="Enter a valid date">
						</div>
						<div class="row">
							<a href="requete_recherche.php" class="btn btn-primary" type="submit">Submit </a>
							<input type="button" value="Go back!" onclick="history.back()">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>