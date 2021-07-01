<?php
session_start();
setcookie('heures',$_POST['nbh'],time()+365*24*3600,null,null,false,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page Search</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="requete_recherche.css">
	
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

	<section class="sections home text-center">
		<div class="overlay">
			<div class="container">
				<div class="card">
					<h2 class="home-title"> The results are :</h2>
					<div class="row center">
						<?php
						if (isset($_POST['chercher']))
						 {	
						 	$c=0;
							$bd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
							$rep=$bd->prepare("SELECT * FROM employees WHERE NB_HEURES=?");
							$rep->execute(array($_POST['nbh']));
							while($value=$rep->fetch())
							{
								echo '<table>
							<tr>
								<td class="th"> ID</td>
								<td class="th"> NAME</td>
								<td class="th"> DATE</td>
								<td> NB_HEURES</td>
					    	</tr>
							<tr>
								<td>'.$value["ID"].'</td>
								<td>'.$value['NAME'].'</td>
								<td>'. $value['TEMPS'].'</td>
								<td>'. $value['NB_HEURES'].'</td>
							 </tr>
						</table>';
						$c=1;
							}
							$rep->closeCursor();
						}
						?>
					</div>
					<p>
		<input type="button" class="btn btn-primary" value="Go back!" onclick="history.back()">
					</p>
				</div>
			</div>
		</div>
	</section>
	<?php
	if($c==0)
	{
		header('Location: rechercheH.php?error=1');
	}
	?>
</body>
</html>