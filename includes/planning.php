<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="../resources/css/style.css" rel="stylesheet"/>
	<title>Planning</title>
</head>
<body>
<?php 
	include('connection.php');
	GetDatabaseConnection();
?>
	<div class="navi">
		<ul>
			<h3><li><a class="Planning" href="planning.php"> Planning </a></li></h3>
			<h3><li><a class="Games" href="../index.php"> Alle Games </a></li></h3>
		</ul>
	</div>
	<br>
	<h1><center> Planning van de Games </center></h1>
	<br>
<div id="container">
<?php
	$conn = GetDatabaseConnection();
	$query = $conn->prepare("SELECT * FROM games");
	$query->execute();
	$random = $query->fetchall();
	foreach($random as $count){
?>
	<a class="item" href="includes/detail.php?id=<?= $count["id"] ?>">
		<div class="left">
			<img class="avatar" width="200px" src="../resources/images/<?= $count['image'] ?>">
		</div> 
	<div class="right">
		<h2><?php echo $count["name"]; ?></h2>
		<div class="info">
			<ul class="fa-ul">
				<li id="12"><span class="fa-li"></span><?php echo $count["expansions"]; ?></li>
				<li id="12"><span class="fa-li"></span>Min Players: <?php echo $count["min_players"]; ?></li>
				<li id="12"><span class="fa-li"></span>Max Players: <?php echo $count["max_players"]; ?></li>
				<li id="12"><span class="fa-li"></span>Speeltijd: <?php echo $count["play_minutes"]; ?></li>
				<li id="12"><span class="fa-li"></span>Uitlegtijd: <?php echo $count["explain_minutes"]; ?></li>
				<li id="12"><span class="fa-li"></span>Datum/Tijd: / </li>
				<li id="12"><span class="fa-li"></span>Begeleider: / </li>
			</ul>
		</div>
	</div>
<?php } ?>
</body>
</html>