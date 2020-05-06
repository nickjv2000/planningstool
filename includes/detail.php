<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> De Game </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="../resources/css/style.css" rel="stylesheet"/>
</head>
<body>
	<div class="navi">
		<ul>
			<h3><li><a class="Planning" href="planning.php"> Planning </a></li></h3>
			<h3><li><a class="Games" href="../index.php"> Alle Games </a></li></h3>
		</ul>
	</div>
<div id="container">
<?php
	include('connection.php');
	GetDatabaseConnection();
    $id = $_GET["id"];
    $getid = GetGameId($id);
?>
	<h1 id="naam5"> <?php echo $getid["name"]; ?> </h1>
	<img class="avatars" width="300" src="../resources/images/<?php echo $getid['image']; ?>">
	<?php echo $getid["youtube"]; ?>	
	<div class="rights">
		<p><h4> <a href="<?php echo $getid['url']; ?>">Link naar de game</h4></a> </p>
		<br>
		<p> <?php echo $getid["description"]; ?> </p>
		<br>
		<p> De skills die hier van pas gaan komen zijn: <?php echo $getid["skills"]; ?> </p>
		<br>
		<p> De game heeft <?php echo $getid["min_players"]; ?> spelers nodig en kan max met <?php echo $getid["max_players"]; ?> spelers gespeeld worden </p>
		<br>
		<p> De game word uitgelegd en dat duurt <?php echo $getid["explain_minutes"]; ?> minuten. Daarna kan je het spel spelen voor <?php echo $getid["play_minutes"]; ?></p>
		
	</div>
</body>
</html>