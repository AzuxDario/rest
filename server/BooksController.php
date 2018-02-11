<?php

require_once("DBConnection.php");

class BooksController
{
	public function GetBook($params)
	{
		$sqlCommand = "SELECT * FROM books WHERE id = :id ;";
		$db = new DBConnection();		
		$array = array(':id' => $params['id']);
		$result = $db->SelectQueryParams($sqlCommand, $array);		
		return $result;
	}
	
	public function GetBooks()
	{
		$sqlCommand = "SELECT * FROM books;";
		$db = new DBConnection();		
		$result = $db->SelectQuery($sqlCommand);		
		return $result;
	}
	
	public function AddBook($params, $request)
	{
		$sqlCommand = "INSERT INTO books(title, author, isbn) VALUES (:title, :author, :isbn);";
		$db = new DBConnection();
		$array = array(':title' => $request['title'], ':author' => $request['author'], ':isbn' => $request['isbn']);
		$result = $db->ExecQuery($sqlCommand, $array);		
		return $result;
	}
	
	public function UpdateBook($params, $request)
	{
		$sqlCommand = "UPDATE books SET title = :title, author = :author, isbn = :isbn WHERE id= :id;";
		$db = new DBConnection();
		$array = array(':id' => $params['id'], ':title' => $request['title'], ':author' => $request['author'], ':isbn' => $request['isbn']);
		$result = $db->ExecQuery($sqlCommand, $array);			
		return $result;
	}
	
	public function DeleteBook($params)
	{
		$sqlCommand = "DELETE FROM books WHERE id = :id;";
		$db = new DBConnection();
		$array = array(':id' => $params['id']);
		$result = $db->ExecQuery($sqlCommand, $array);
		return $result;
	}
}

?>