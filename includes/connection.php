<?php

$connec = GetDatabaseConnection();

function GetDatabaseConnection(){
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "databanks_php";


	try {
 		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		return $conn;
	}
	catch(PDOException $e){
 		echo "Connection Failed: " . $e->getMessage();
	}
}

function GetGameId($id){
	$conn = GetDatabaseConnection();
    $query = $conn->prepare("SELECT * FROM games WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    return $query->fetch();
}
?>