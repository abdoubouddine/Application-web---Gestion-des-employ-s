
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
				header('Location: login.php?type=admin&erreur=1');
			}
			break;
		case 'rh':
			$db=new PDO("mysql:hostname=localhost;dbname=projet;charset=utf8","root","");
			$rep=$db->prepare('SELECT NOM,PRENOM,MDP FROM rh');
			while($donnees=$rep->fetch())
			{
				if (htmlspecialchars($_POST['usrnm'])==$donnees['NOM'] && htmlspecialchars($_POST['pwd'])==$donnees['MDP'])
				{
					
					$_SESSION['nom']=htmlspecialchars($_POST['usrnm']);
					$_SESSION['pwd']=htmlspecialchars($_POST['pwd']);
					$_SESSION['prenom']=$donnees['PRENOM'];
					/*setcookie('nom',htmlspecialchars($_POST['usrnm'],time()+365*24*3600,null,null,false,true);
					setcookie('mdp',htmlspecialchars($_POST['pwd'],time()+365*24*3600,null,null,false,true);*/
					header('Location: Employees/home.php');
					break;
				}
			}
			header('Location: login.php?type=rh&erreur=1');	
			break;
	}
}
?>