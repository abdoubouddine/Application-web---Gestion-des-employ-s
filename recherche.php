<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="recherche.css">
	
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
					<h2 class="home-title"> Choose your criteria of your research</h2>
					<div class="row center">
							<button class="nom">
								<a href="rechercheN.php" class="link"> Name </a>
							</button>
							<button class="nom">
								<a href="rechercheI.php" class="link"> ID </a>
							</button>
							<button class="nom">
								<a href="rechercheD.php" class="link"> DATE </a>
							</button>
							<button class="nom">
								<a href="rechercheH.php" class="link"> HOURS </a>
							</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="champs">
		<hr class="my-4">
		<div class="container">
			<div class="N">
			<h1 class="title">Search By Name :	</h1>
			<form action="requete_recherche.php" method="POST">
				<label for="name">Name:</label>
				<input type="text" name="name" placeholder="Enter a name" maxlength="10" pattern="[a-zA-z]*" >
				<div class="row center">
					<input type="submit" name="chercher" class="btn btn-primary" value="Search">
					<input type="raz" name="renitialiser"  class="btn btn-primary" value="Reset">
				</div>
			</form>
			</div>
		</div>
		<hr class="my-4">
		<div class="container-fluid">
			<div class="I">
			<h1 class="title">Search By ID :	</h1>
			<form action="requete_recherche.php" method="POST">
				<label for="id">Id:</label>
				<input type="text" name="id" placeholder="Enter an id" maxlength="10" pattern='[[ :digit ]]*' >
				<div class="row center">
					<input type="submit" name="chercher" class="btn btn-primary" value="Search">
					<input type="raz" name="renitialiser"  class="btn btn-primary" value="Reset">
				</div>
			</form>
			</div>
		</div>
		<hr class="my-4">
		<div class="container-fluid">
			<div class="D">
			<h1 class="title">Search By Date :	</h1>
			<form action="requete_recherche.php" method="POST">
				<label for="date">Date:</label>
				<input type="date" name="date" placeholder="Enter a valid date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
				<div class="row center">
					<input type="submit" name="chercher" class="btn btn-primary" value="Search">
					<input type="raz" name="renitialiser"  class="btn btn-primary" value="Reset">
				</div>
			</form>
		 	</div>
		</div>
		<hr class="my-4">
		<div class="container-fluid">
			<div class="H">
			<h1 class="title">Search By Hours :	</h1>
			<form action="requete_recherche.php" method="POST">
				<label for="n_hours">N_Hours:</label>
				<input type="text" name="n_hours" placeholder="Enter a number of hours" maxlength="5" pattern="[[ :digit: ]]{5}" >
				<div class="row center">
					<input type="submit" name="chercher" class="btn btn-primary" value="Search">
					<input type="raz" name="renitialiser"  class="btn btn-primary" value="Reset">
				</div>
			</form>
			</div>
		</div>
	</div>

</body>
</html>