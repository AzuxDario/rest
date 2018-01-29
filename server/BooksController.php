<?php

class BooksController
{
	public function GetBook($params)
	{
		$sqlCommand = "SELECT * FROM books WHERE id = " . $params['id']  . ";";
	}
	
	public function GetBooks()
	{
		$sqlCommand = "SELECT * FROM books;";
	}
	
	public function AddBook($params, $request)
	{
		$sqlCommand = "INSERT INTO books(title, author, isbn) VALUES ('" .  $request['title'] ."', '" . $request['author'] . "', '" . $request['isbn'] ."');";
	}
	
	public function UpdateBook($params, $request)
	{
		$sqlCommand = "UPDATE books SET title = '" .  $request['title'] ."', author = '" . $request['author'] . "', isbn = '" . $request['isbn'] ." WHERE " . $params['id'] . ";";
	}
	
	public function DeleteBook($params)
	{
		$sqlCommand = "DELETE FROM books WHERE id = " . $params['id']  . ";";
	}
}

?>