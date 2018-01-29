<?php

class DBConnection
{
	private const DbServer = "localhost";
	private const DbUser = "root";
	private const DbPassword = "";
	private const DbName = "shop";
	
	public function SelectQuery($sql)
	{
		$connection = GetConnection();
		$statment = $connection->prepare($sql);
		$statment->execute();
		$statment->setFetchMode(PDO::FETCH_ASSOC);
		
		$result = array();
		while ($row = $stmt->fetch())
		{
			array_push($result, $row);
		}
	}
	
	public function ExecQuery($sql)
	{
		$connection = GetConnection();
		$connection->exec($sql);

        return $connection->lastInsertId();
	}
	
	private function GetConnection()
	{
		try
		{
			$connection = new PDO("mysql:host=" . SELF::DbServer . "; dbname=" , SELF::DbName, SELF::DbUser, SELF::DbPassword);
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO_ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		return $connection;
	}
	
}

?>