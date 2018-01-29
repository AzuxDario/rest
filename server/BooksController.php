<?php

require_once("DBConnection");

class BooksController
{
	public function GetBook($params)
	{
		$sqlCommand = "SELECT * FROM books WHERE id = " . $params['id']  . ";";
		$db = new DBConnection();		
		$result = $db->SelectQuery($sql);		
		return $result;
	}
	
	public function GetBooks()
	{
		$sqlCommand = "SELECT * FROM books;";
		$db = new DBConnection();		
		$result = $db->SelectQuery($sql);		
		return $result;
	}
	
	public function AddBook($params, $request)
	{
		$sqlCommand = "INSERT INTO books(title, author, isbn) VALUES ('" .  $request['title'] ."', '" . $request['author'] . "', '" . $request['isbn'] ."');";
		$db = new DBConnection();		
		$result = $db->ExecQuery($sql);		
		return $result;
	}
	
	public function UpdateBook($params, $request)
	{
		$sqlCommand = "UPDATE books SET title = '" .  $request['title'] ."', author = '" . $request['author'] . "', isbn = '" . $request['isbn'] ." WHERE " . $params['id'] . ";";
		$db = new DBConnection();		
		$result = $db->ExecQuery($sql);		
		return $result;
	}
	
	public function DeleteBook($params)
	{
		$sqlCommand = "DELETE FROM books WHERE id = " . $params['id']  . ";";
		$db = new DBConnection();		
		$result = $db->ExecQuery($sql);		
		return $result;
	}
}

?>