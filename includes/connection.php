<?php

function GetDatabaseConnection(){
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "databank_php";


	try {
 		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		return $conn;
	}
	catch(PDOException $e){
 		echo "Connection Failed: " . $e->getMessage();
	}
}

function GetChars(){
	$conn = GetDatabaseConnection();
	$query = $conn->prepare("SELECT name, avatar, health, bio, color, attack, defense, weapon, armor FROM characters");

 	$query->execute();

 	return $query->fetchall();
}

?>