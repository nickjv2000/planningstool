<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="../resources/css/style.css" rel="stylesheet"/>
	<title>Inplannen</title>
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
	<h1><center> Inplannen </center></h1>
	<div id="textput">
		<p><input type="text" value="<?php echo $getid['name'];?>"> Naam van het spel</p>
		<p><input type="text" value="<?php echo $getid['image'];?>"> De image naam van de foto</p>
		<p><input type="text" value="<?php echo $getid['description'];?>"> De discriptie van het spel</p>
		<p><input type="text" value="<?php echo $getid['expansions'];?>"> Alle beschikbare expansions</p>
		<p><input type="text" value="<?php echo $getid['skills'];?>"> De benodigde skills die van toepassing komen</p>
		<p><input type="text" value="<?php echo $getid['url'];?>"> De url naar een website voor het spel</p>
		<p><input type="text" value="<?php echo $getid['youtube'];?>"> Een url naar een video van het spel op youtube</p>
		<p><input type="text" value="<?php echo $getid['min_players'];?>"> Minimale benodigde spelers</p>
		<p><input type="text" value="<?php echo $getid['max_players'];?>"> Maximale spelers</p>
		<p><input type="text" value="<?php echo $getid['play_minutes'];?>"> Speel tijd</p>
		<p><input type="text" value="<?php echo $getid['explanation_minutes'];?>"> Uitleg tijd</p>
		<p id="submit"><input type="submit" value="Submit"></p>
	</div>
</div>
</body>
</html>