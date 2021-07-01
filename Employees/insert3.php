<?php 
session_start();
setcookie('nom',$_POST['name'],time()+365*24*3600,null,null,false,true);
setcookie('temps',$_POST['date'],time()+365*24*3600,null,null,false,true);
setcookie('heures',$_POST['hours'],time()+365*24*3600,null,null,false,true);
include 'classe.php';
$objUser=new User();
if(isset($_POST['ajouter']))
{
	$name=htmlspecialchars($_POST['name']);
	$date=$_POST['date'];
	$hours=htmlspecialchars($_POST['hours']);
	try
	{
		if($objUser->insert($name,$date,$hours))
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