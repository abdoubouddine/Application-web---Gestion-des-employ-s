<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="recherche.css">
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
						<h3><?php echo'Welcome '.$_SESSION['nom'].' '.$_SESSION['prenom'];?> </h3>
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
	if(isset($_POST['chercher']))
	{
		try
		{	
			function chercher($var,$query)
			{
				$bd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
				$rep=$bd->prepare("SELECT * FROM employees WHERE $query=?");
				$rep->execute(array($var));
				$i=0;
				$donnees=null;
				while($data=$rep->fetch())
				{
					$donnees= array('id' => $data['ID'] , 'nom' => $data['NAME'] , 'temps' => $data['TEMPS'] ,'nbh' => $data['NB_HEURES']);
				}
				$rep->closeCursor();
				return $donnees;
			}
			function afficher($set)
			{
				$donnees=null;
				if(isset($_POST['id']))
				{
					$code=htmlspecialchars($_POST['id']);
					if($set==$code)
					{
						$donnees=chercher($set,'ID');
					}
				}
				elseif(isset($_POST['name'])){
					$nom=htmlspecialchars($_POST['name']);
					if($set==$nom)
					{
						$donnees=chercher($set,'NAME');
					}
				}
				elseif(isset($_POST['date']))
				{
					$date=$_POST['date'];
					if($set==$date)
					{
						$donnees=chercher($set,'TEMPS');
					}
				}
				elseif(isset($_POST['nb_heures'])){
					$nb_heures=htmlspecialchars($_POST['nb_heures']);
					if($set==$nb_heures)
					{
						$donnees=chercher($set,'NB_HEURES');
					}
				}

				if($donnees!=null)
					{
						foreach ($donnees as $value) 
						{
							?>
						<table>
							<th>
								<td> ID</td>
								<td> NAME</td>
								<TD> DATE</TD>
								<td> NB_HEURES</td>
								<td> Action </td>
					    	</th>
							<tr>
								<td><?php $value['id'];?></td>
								<td><?php $value['nom'];?></td>
								<td><?php $value['temps'];?></td>
								<td><?php $value['nbh'];?></td>
								<td>
									<a href="" class="btn btn-success">EDIT</a>
									<a href="" class="btn btn-danger"> DELETE</a>
								</td>
							 </tr>
						<?php } ?>
						</table>
						<?php
					}	
				}
					
				if(htmlspecialchars($_POST['id'])!=null)
				{
					$code=htmlspecialchars($_POST['id']);
					afficher($code);
				}
				elseif(!empty($nom=htmlspecialchars($_POST['name'])))
				{
					afficher($nom);
				}
				elseif(!empty($date=htmlspecialchars($_POST['date'])))
				{
					afficher($date);
				}
				elseif(!empty($nb_heures=htmlspecialchars($_POST['nb_heures'])))
				{
					afficher($nb_heures);
				}
				
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}
	}?>
	<p>
		<input type="button" class="btn btn-primary" value="Go back!" onclick="history.back()">
	</p>
				</div>
			</div>
		</div>
	</section>


	
</body>
</html>
