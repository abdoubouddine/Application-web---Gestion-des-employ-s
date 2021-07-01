<?php 
include "classes.php";
class User
{
	public function __construct()
	{
		$bdd=new database();
		$db=$bdd->dbConnection();
		$this->conn=$db;
	}

	public function insert($name,$tp,$nbH)
	{
		try
		{
			$rep=$this->conn->prepare('INSERT INTO employees(NAME,TEMPS,NB_HEURES) VALUES( :nom, :temps,:nbH)');
			$rep->execute(array('nom'=>$name,'temps'=>$tp,'nbH'=>$nbH));
			return $rep;
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	public function update($name,$tp,$code,$nbH)
	{
		try
		{
			$rep=$this->conn->prepare('UPDATE employees SET NAME=:nom,TEMPS=:temps,NB_HEURES=:nbH WHERE ID=:id');
			$rep->execute(array('nom'=>$name,'id'=>$code,'temps'=>$tp,'nbH'=>$nbH));
			return $rep;
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	public function delete($id)
	{
		try
		{
			$rep=$this->conn->prepare('DELETE FROM employees WHERE ID=:id');
			$rep->execute(array('id'=>$id));
			return $rep;
		}
		catch(Exception $e)
		{
			die( $e->getMessage());
		}
	}
	public function redirect($url)
	{
		header('Location:'.$url);
	}
}
?>