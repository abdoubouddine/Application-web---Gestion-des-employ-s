<?php 
include "classes1.php";
class User
{
	public function __construct()
	{
		$bdd=new database();
		$db=$bdd->dbConnection();
		$this->conn=$db;
	}

	public function insert($name,$prename,$mail,$mdp)
	{
		try
		{
			$rep=$this->conn->prepare('INSERT INTO rh(NOM,PRENOM,EMAIL,MDP) VALUES(:nom,:prename,:mail,:pwd)');
			$rep->execute(array('nom'=>$name,'prename'=>$prename,'mail'=>$mail,'pwd'=>$mdp));
			return $rep;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	public function update($name,$prename,$code,$mail,$mdp)
	{
		try
		{
			$rep=$this->conn->prepare('UPDATE rh SET NOM=:nom,PRENOM=:prenam,EMAIL=:mail,MDP=:pwd  WHERE ID=:id' );
			$rep->execute(array('id'=>$code,'nom'=>$name,'prenam'=>$prename,'mail'=>$mail,'pwd'=>$mdp));
			return $rep;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	public function delete($id)
	{
		try
		{
			$rep=$this->conn->prepare('DELETE FROM rh WHERE ID=:id');
			$rep->execute(array('id'=>$id));
			return $rep;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	public function redirect($url)
	{
		header('Location:'.$url);
	}
}
?>