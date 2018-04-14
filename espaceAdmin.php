<?php
include 'verificationAuthentification.php';
if (($_SESSION['admin']==0))
    header("Location:index.php");
//echo $_SESSION['admin'];
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

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">
    <link href="espaceAdmin2Css.css" rel="stylesheet">
    <title>Enregistrement</title>
</head>
<body >
<?php
include ("navigationAdmin2.php");
?>
<div class="container col-1" id="cont" >
    <button type="button" id="enployee" class="btn btn-info">Employé</button>
    <div id="id_div_1" style="display: none">
        <?php
        include('gererPersonnel.php');
        ?>
    </div>
    <button type="button" id="prod" class="btn btn-info">Produit</button>
    <div id="id_div_2" style="display: none;">
        <?php
        include ('gererProduit.php');
        ?>
    </div>
    <button type="button" id="cham" class="btn btn-info">Chambre</button>
    <div id="id_div_3" style="display: none;">
        <?php
        include ('gererChambre.php');
        ?>
    </div>
</div>
<?php
include ('piedPage2.php');
?>
<script src="espaceAdminJs.js"></script>
</body>
</html>