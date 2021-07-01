<?php 
session_start();
include 'classe.php';
$objUser=new User();
if(isset($_POST['ajouter']))
{
	$name=htmlspecialchars($_POST['name']);
	$email=htmlspecialchars($_POST['mail']);
	$date=$_POST['date'];
	$hours=htmlspecialchars($_POST['hours']);
	try
	{
		if($id!=null)
		{
			if($objUser->insert($name,$date,$email,$hours))
			{
				$objUser->redirect('insert.php?error=0');
			}
			else
			{
				$objUser->redirect('insert.php?error=1');
			}
		}
	}
}
?>