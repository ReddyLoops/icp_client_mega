<?php
	session_start();

	$pdo = null;
	$DB_HOST = 'localhost';
	$DB_USER = 'root';
	$DB_PASS = '';
	$DB_NAME = 'thesis_latest';

	try {
		$pdo = new PDO('mysql:host=' . $DB_HOST . ';dbname=' . $DB_NAME . ';charset=utf8', $DB_USER, $DB_PASS);
	} catch (PDOException $exception) {
		exit('Failed to connect to database!');
	}
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="thesis_latest";
	
	$conn=mysqli_connect($hostname, $username,$password,$dbname);
?>