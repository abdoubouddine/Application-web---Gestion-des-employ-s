<?php 
session_start();
include 'classe1.php';
$objUser=new User();
if(isset($_POST['ajouter']))
{
	$name=htmlspecialchars($_POST['nom']);
	$email=$_POST['mail'];
	$prenom=htmlspecialchars($_POST['prenme']);
	$mdp=htmlspecialchars($_POST['pwd']);
	try
	{
		if($objUser->insert($name,$prenom,$email,$mdp))
		{
			$objUser->redirect('insert.php?error=0');
		}
		else
		{
			$objUser->redirect('insert.php?error=1');
		}
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
	}
}
?>