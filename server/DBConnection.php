<?php

class DBConnection
{
	const DbServer = 'localhost';
	const DbUser = 'root';
	const DbPassword = '';
	const DbName = 'shop';
	
	private $connection = NULL;
	
	function __construct()
	{
        try
		{
			 $this->connection = new PDO("mysql:host=" . SELF::DbServer . "; dbname=" .SELF::DbName, SELF::DbUser, SELF::DbPassword);
			 $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }
	
	public function BindParameter($name, $value)
	{
		$this->connection->bindParam($name, $value);
	}
	
	public function SelectQueryParams($sql, $params)
	{
		$statment = $this->connection->prepare($sql);
		
		for($x = 0; $x < count($params); $x++)
		{
			$index = array_keys($params)[$x];
			$statment->bindParam($index, $params[$index]);
		}
		
		$statment->execute();
		$statment->setFetchMode(PDO::FETCH_ASSOC);
		
		$result = array();
		while ($row = $statment->fetch())
		{
			array_push($result, $row);
		}
		
		return $result;
	}
	
	public function SelectQuery($sql)
	{
		$statment = $this->connection->prepare($sql);
		
		$statment->execute();
		$statment->setFetchMode(PDO::FETCH_ASSOC);
		
		$result = array();
		while ($row = $statment->fetch())
		{
			array_push($result, $row);
		}
		
		return $result;
	}
	
	public function ExecQuery($sql, $params)
	{
		$statment = $this->connection->prepare($sql);
		
		for($x = 0; $x < count($params); $x++)
		{
			$index = array_keys($params)[$x];
			$statment->bindParam($index, $params[$index]);
		}		
		$statment->execute();

        return $this->connection->lastInsertId();
	}
	
}

?>