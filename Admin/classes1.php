<?php
class database
{
	private $host = 'localhost';
	private $dbname = 'projet';
	private $username = 'root';
	private $password = '';
	public $conn;
	public function dbConnection()
	{
		$this->conn=null;
		try
		{
			$this->conn=new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8',$this->username,$this->password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
			die(' Error is :'.$e->getMessage());
		}
		return $this->conn;
	}
}
?>