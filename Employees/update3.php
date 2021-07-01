<?php 
session_start();
include 'classe.php';
setcookie('nom',$_POST['name'],time()+365*24*3600,null,null,false,true);
setcookie('temps',$_POST['date'],time()+365*24*3600,null,null,false,true);
setcookie('heures',$_POST['hours'],time()+365*24*3600,null,null,false,true);
$objUser=new User();
if(isset($_POST['modifier']))
{
	$id=htmlspecialchars($_SESSION['id']);
	$name=htmlspecialchars($_POST['name']);
	$date=$_POST['date'];
	$hours=htmlspecialchars($_POST['hours']);
	try
	{
		if($objUser->update($name,$date,$id,$hours))
		{
			$objUser->redirect('update.php?error=0');
			unset($_SESSION['id']);
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