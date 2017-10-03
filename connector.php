<?php

function db_connect(){
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'klubben';

	$connect = new mysqli($host, $user, $password, $database);

	return $connect;
}

?>