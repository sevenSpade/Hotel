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
?>
<!DOCTYPE html>
<html>
<head>
    <title>Consommation</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="traitementConsommation.php">
    <label for="id_produit">ID produit</label><input type="number" name="id_produit" id="id_produit">
    <label for="id_clt">ID client</label><input type="number" name="id_clt" id="id_clt">
    <input type="submit" name="valider" value="valider">
</form>

</body>
</html>