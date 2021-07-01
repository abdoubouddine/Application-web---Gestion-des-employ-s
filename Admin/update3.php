<?php 
session_start();
include 'classe1.php';
$objUser=new User();
if(isset($_POST['modifier']))
{
	$id=htmlspecialchars($_SESSION['id']);
	$name=htmlspecialchars($_POST['name']);
	$prenom=htmlspecialchars($_POST['prename']);
	$email=$_POST['mail'];
	$mdp=htmlspecialchars($_POST['pwd']);
	try
	{
		if($objUser->update($name,$prenom,$id,$email,$mdp))
		{
			$objUser->redirect('update.php?error=0');
		}
		else
		{
			$objUser->redirect('update.php?error=1');
		}
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
	}
}
?>