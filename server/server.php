<?php

const DbServer = "localhost";
const DbUser = "root";
const DbPassword = "";
const DbName = "myBase";

//get HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO','/']));
$input = json_decode(file_get_contents('php://input'),true);

//connect do database
$connection = mysqli_connect(DbServer, DbUser, DbPassword, DbName);

?>