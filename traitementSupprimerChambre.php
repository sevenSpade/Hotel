<?php

	include 'verificationAuthentification.php';


	try
	{
		$bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());

	}
	$bdd->query("USE projet");
	$req=$bdd->prepare('DELETE FROM `produit` WHERE `produit`.`id_chamb` = ?');
	$req->execute(array
		(
			$_GET['id'],
		));
	header("Location: espaceAdmin.php");
	
	?>