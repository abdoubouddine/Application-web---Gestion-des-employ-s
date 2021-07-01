<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page Search</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
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

	<section class="sections home text-center">
		<div class="overlay">

			<div class="container">
					
			
						<div class="card">
							<?php
	if (isset($_GET['error'])) {
		if ($_GET['error']=='1') {
		
		echo '<div class="alert alert-danger" role="alert">
	  					DATE NOT FOUND!
					</div>';
						}
	}
	?>
					<h2 class="home-title"> Search by Date :</h2>
					<div class="row center">
						<form action="requete_recherche_T.php" method="POST">
						<div class="row">
							<label class="az" style="color: orange; font-size: 30px;">Date : </label>
							<input type="date" required="required"  name='temps' class="az" placeholder="Enter a valid date">
						</div>
						<div class="row">
							<input class="btn btn-primary" name="chercher" type="submit" value="Submit">
							<input type="button" value="Go back!" class="btn btn-primary" onclick="history.back()">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>