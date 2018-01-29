<?php

class DBConnection
{
	private const DbServer = "localhost";
	private const DbUser = "root";
	private const DbPassword = "";
	private const DbName = "shop";
	
	public function selectQuery($sql)
	{
		$connection = getConnetion();
		$statment = $connection->prepare($sql);
		$statment->execute();
		$statment->setFetchMode(PDO::FETCH_ASSOC);
		
		$result = array();
		while ($row = $stmt->fetch())
		{
			array_push($result, $row);
		}
	}
	
	public function execQuery($sql)
	{
		$connection = getConnetion();
		$connection->exec($sql);

        return $connection->lastInsertId();
	}
	
	private function getConnection()
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