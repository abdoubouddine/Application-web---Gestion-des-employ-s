
<?php
session_start();
if (isset($_POST['valider'])) 
{
	switch ($_GET['type']) {
		case 'admin':
			if (htmlspecialchars($_POST['usrnm'])=='admin' && htmlspecialchars($_POST['pwd'])=='123')
			{
				header('Location: Admin/home.php ');
			}
			else
			{
		   		header('Location: login.php?type=admin&error=1');
			}
			break;
		case 'rh':
			$db=new PDO("mysql:hostname=localhost;dbname=projet;charset=utf8","root","");
			$rep=$db->query('SELECT NOM,PRENOM,MDP,EMAIL FROM rh');
			while($donnees=$rep->fetch())
			{
				if (htmlspecialchars($_POST['usrnm'])==$donnees['NOM'] && htmlspecialchars($_POST['pwd'])==$donnees['MDP'])
				{
					
					$_SESSION['nom']=htmlspecialchars($_POST['usrnm']);
					$_SESSION['pwd']=htmlspecialchars($_POST['pwd']);
					$_SESSION['prenom']=$donnees['PRENOM'];
					$_SESSION['email']=$donnees['EMAIL'];
					/*setcookie('nom',htmlspecialchars($_POST['usrnm'],time()+365*24*3600,null,null,false,true);
					setcookie('mdp',htmlspecialchars($_POST['pwd'],time()+365*24*3600,null,null,false,true);*/
					header('Location: Employees/home.php');
					$rep->closeCursor();
				}
			}
			if(!$rep)
			{
				header('Location: login.php?type=rh&error=1');
			}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Formulaire du Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
				<?php if(isset($_GET['error'])) 
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
			</fieldset>
		</form>
	</div>
</body>
</html>