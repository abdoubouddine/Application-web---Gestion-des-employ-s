<?php 
session_start();
include 'classe1.php';
$objUser=new User();
if(isset($_POST['ajouter']))
{
	$id=htmlspecialchars($_POST['id']);
	
	try
	{
		if($id!=null)
		{
			if($objUser->delete($id))
			{
				$objUser->redirect('delete_2.php?error=0');
			}
			else
			{
				$objUser->redirect('delete_2.php?error=1');
			}
		}
	}
}
?>