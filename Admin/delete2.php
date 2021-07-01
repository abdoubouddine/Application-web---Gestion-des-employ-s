<?php 
session_start();
include 'classe1.php';
$objUser=new User();
if(isset($_POST['supprimer']))
{
	$id=htmlspecialchars($_POST['id']);
	
	try
	{
		if($id!=null)
		{
			if($objUser->delete($id))
			{
				$objUser->redirect('delete.php?error=0');
			}
			else
			{
				$objUser->redirect('delete.php?error=1');
			}
		}
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
	}
}
?>