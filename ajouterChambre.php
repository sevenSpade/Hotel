<?php
	include 'verificationAuthentification.php';
    include 'verificationAdmin.php';

?>
<!DOCTYPE html>
	<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="logo2.png">

        <!-- Custom styles for this template -->
          <link href="./css/background.css" rel="stylesheet">
		<title>ajouter chambre</title>
	</head>
	<body>
        <?php
    include ("navigationAdmin.php");
    ?>
    <div class="container col-12">
    <div  style="margin-right:700px; margin-top: 200px;margin-bottom: 200px; padding-left:50px; padding-right: 50px " >
		<form action="traitementAjouterChambre.php" method="POST">
            
            <p>
                <label for="type">Type de la chambre: </label>
                <select size="1" name="type" id="type" required class="form-control form-control-lg"> 
                    <option value="simple">Simple</option> 
                    <option value="double">Double</option> 
                    <option value="triple">Triple</option>
                </select>
            </p>
			
            <button type="submit" class="btn btn-primary btn" value="ajouter">Ajouter</button>
            <button type="button" class="btn btn-primary btn" value="retour" onclick="document.location.href='espaceAdmin.php'">Retour</button>
		</form>
    </div>
</div>
   <?php include 'piedPage.php'; ?>

	</body>
	</html>