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
	<script src="js/bootstrap.min.js"></script>
	<script src="jquery-3.4.1.min.js"></script>
</head>
<body>
	
</body>
</html>

<?php
if (isset($_POST['chercher'])
{
	try
		{	
			function chercher($var,$query)
			{
				$bd=new PDO('mysql:host=localhost;dbname=db_commande;charset=utf8','root','');
				$rep=$bd->prepare('SELECT * FROM employe WHERE'.$query.'=?');
				$rep->execute(array($var));
				$i=0;
				$donnees=null;
				while($data=$rep->fetch())
				{
					$donnees[$i]=$data;
					$i++;
				}
				$rep->closeCursor();
				return $donnees;
			}
			function afficher($set)
			{
				$code=htmlspecialchars($_POST['id']);
				$nom=htmlspecialchars($_POST['name']);
				$date=htmlspecialchars($_POST['date']);
				$nb_heures=htmlspecialchars($_POST['nb_heures']);
				if($set==$code)
				{
					$donnees=chercher($set,'ID');
				}
				elseif($set==$nom)
				{
					$donnees=chercher($set,'Name');
				}
				elseif($set==$date)
				{
					$donnees=chercher($set,'Date');
				}
				elseif($set==$nb_heures)
				{
					$donnees=chercher($set,'Hours');
				}
				if($donnees!=null)
				{
					echo '<table id="ex" class="table table-striped table-dark">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Date</th>
						<th>N_HOURS</th>
						<th>Taux de renumeration</th>
						<th> Action</th>
					</tr>';
					foreach ($donnees as $value) 
					{
						echo '<tr>
						<td>'.$value['ID'].'</td>
						<td>'.$value['Name'].'</td>
						<td>'.$value['Date'].'</td>
						<td>'.$value['nb_heures'].'</td>
						<td>'.$value['taux'].'</td>
						<td>
							<a href='' class='btn btn-success'>EDIT</a>
							<a href='' class='btn btn-danger'> DELETE</a>
						</td>
							   </tr>';
					}
					echo '</table>';
				}
			}
				
			if(!empty($code=htmlspecialchars($_POST['id'])))
			{
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
	}
	echo '<p>
	<input type="button" value="Go back!" onclick="history.back()">
		</p>';
?>

