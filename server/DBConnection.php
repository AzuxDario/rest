<?php

class DBConnection
{
	const DbServer = 'localhost';
	const DbUser = 'root';
	const DbPassword = '';
	const DbName = 'shop';
	
	public function SelectQuery($sql)
	{
		$connection = self::GetConnection();
		$statment = $connection->prepare($sql);
		$statment->execute();
		$statment->setFetchMode(PDO::FETCH_ASSOC);
		
		$result = array();
		while ($row = $statment->fetch())
		{
			array_push($result, $row);
		}
		
		return $result;
	}
	
	public function ExecQuery($sql)
	{
		$connection = self::GetConnection();
		$connection->exec($sql);

        return $connection->lastInsertId();
	}
	
	private function GetConnection()
	{
		try
		{
			$connection = new PDO("mysql:host=" . SELF::DbServer . "; dbname=" .SELF::DbName, SELF::DbUser, SELF::DbPassword);
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		return $connection;
	}
	
}

?>