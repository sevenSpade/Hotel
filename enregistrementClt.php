<?php
	/*
	include 'verificationAuthentification.php';
	include 'header.php';
	*/
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>enregistrementClt</title>
	</head>
	<body>
		<form action="traitementEnregistrementClt.php" method="POST">
			<p><label for="nom">Nom: </label><input type="text" name="nom" id="nom"></p>
			<p><label for="prenom">Prénom: </label><input type="text" name="prenom" id="prenom"></p>
			<p><label for="cin">CIN: </label><input type="text" name="cin" id="cin"></p>
			<p><label for="ddn">Date de naissance: </label><input type="date" name="ddn" id="ddn"></p>
			<p><label for="mail">E-mail: </label><input type="text" name="mail" id="mail"></p>
			<p><label for="adresse">Adresse: </label><input type="text" name="adresse" id="adresse"></p>
			<p><label for="tel">Tél: </label><input type="text" name="tel" id="tel"></p>
			<p><label for="enregistrer"></label><input type="submit" name="enregistrer" id="enregistrer"></p>
		</form>
	</body>
	</html>