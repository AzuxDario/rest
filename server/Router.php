<?php
require_once('BooksController.php');
require_once('AltoRouter.php');
$router = new AltoRouter();
$router->setBasePath('/rest/server');
$router->map('GET','/books/', 'BooksController::GetBooks');
$router->map('GET','/books/[i:id]/', 'BooksController::GetBook');
$router->map('POST','/books/', 'BooksController::AddBook');
$router->map('PUT','/books/[i:id]/', 'BooksController::UpdateBook');
$router->map('DELETE','/books/[i:id]/', 'BooksController::DeleteBook');
// match current request
$match = $router->match();
// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) )
{
	$result = call_user_func_array( $match['target'], $match['params'] );
	
	$response = array('status' => array( 'code' => 200, 'message' => 'OK'), 'data' => $result);
	
	echo json_encode($response);
}
else
{
	// no route was matched
	$response = array('status' => array( 'code' => 404, 'message' => 'Not Found'), 'data' => $result);
	
	echo json_encode($response);
}
?>