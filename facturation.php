<?php
    if (isset($_GET['err1']))
    {
        echo("<p id='er1'>Erreur CIN</p>");

    }
    if (isset($_GET['err2']))
    {
        echo("<p id='er2'>Reservation sous ce CIN est introuvable </p>");

    }
    include 'verificationAuthentification.php';
    include 'choixNavigation.php';


    try
    {
        $bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());

    }
?>

<?php
    if  (isset($_GET['ok']))
    include 'traitementFacturation.php';
    else 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Facturation</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
     <link href="./css/background.css" rel="stylesheet">
</head>
<body>
	<div class="container col-12">
    <div  style="margin-right:700px; margin-top: 200px;margin-bottom: 200px; padding-left:50px; padding-right: 50px " >
<form method="post" action="facturation.php?ok=1">
    <label for="cin">Cin</label> <input type="number" name="cin" class="form-control form-control-lg">
    <input type="submit" name="entrer" value="entrer"  class="btn btn-primary">
</form>
</div>
</div>




<?php
include 'piedPage.php'; ?>
</body>

</html>
