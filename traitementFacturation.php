<?php
    include 'verificationAuthentification.php';


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', ''); //changer le mdp en fonction du serveur local de ton pc
}
catch (PDOException $e)
{
    die('erreur : '.$e->getMessage());
}
?>



   <?php
    $reponse = $bdd->query('SELECT * FROM projet.client');
while ($aff=$reponse->fetch())
{
    if ($aff['id_clt']==$_GET['id'])
    {
        $id=$aff['id_clt'];
        $req=$bdd->prepare('SELECT * FROM  projet.produit B, projet.consommation C WHERE B.id_produit=C.id_produit AND  C.id_clt=? ');
        $req->execute(array($id));
       $req1=$bdd->prepare('SELECT * FROM  projet.reservation R WHERE R.id_clt=? ');
       $req1->execute(array($id));
       $aff1=$req1->fetch();
       $z=$aff1['id_res'];


       $chambre=$aff1['id_chamb'];


       $req2=$bdd->prepare('SELECT * FROM  projet.chambre C WHERE C.id_chamb=? ');
       $req2->execute(array($chambre));
       $aff2=$req2->fetch();

        $type=$aff2['type'] ;

        if ($type=="simple") $f=100 ;
        elseif ($type=="double") $f=120 ;
        elseif ($type=="triple") $f=150 ;
        $facture=$f;


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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="./css/background.css" rel="stylesheet">

    <title>Facture Client id n° <?php echo $_GET['id'] ?></title>

</head>

<body id="bd">

<?php include ('choixNavigation.php'); ?>


    <div id="monAncre" style="display: none;" class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Impression !</strong> Veuillez patienter quelques instants   !!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

    <div class="container col-5" style="position: initial;margin-top: 100px;">
       <div class="row">
            <div class="col-6">
                <h3>MYKASA Hotel</h3>
            </div>
            <div class="col-6">
                <h3 style="text-align: right">Facture</h3>
            </div>
      </div>
      <table id="tbb" class="table table-striped " >
        <tr>
            <td>N°Consommation</td> <td>Libellé</td> <td>Prix</td>
        </tr>


           <?php
            while ($affiche=$req->fetch())
           {
            ?>

                <tr>
                    <td>
                        <?php
                        echo ($affiche['id_cons']);
                        ?>
                    </td>
                     <td>
                        <?php
                        echo ($affiche['libelle']);
                        ?>
                    </td>
                     <td>
                        <?php
                        echo ($affiche['prix']);
                        $facture=$facture+$affiche['prix'] ; 
                        ?>
                    </td>
                </tr>


           <?php } ?>


               <tr>
                   <td colspan="2"> Chambre  <?php echo $type; ?></td>
                   <td> <?php echo $f ?> </td>
               </tr>
              <tr>
                   <td colspan="2"> Totale</td>
                   <td> <?php echo $facture ?> </td>
              </tr>
            </table>

              <form method="post" action="traitementCheckOut.php?id=<?php echo $_GET['id']?>">
                  <input type="submit" name="entrer" value="Check out" class="btn ">
                  <button type="button" class="  btn" value="retour" onclick="document.location.href='facturation.php'">Retour</button>
                  <button id="imp" type="button" class=" btn" value="imprimer" onclick="document.location.href='#bd'">Imprimer</button>
              </form>


    <?php

        }

        }

     ?>

    </div>


<div style="position: relative;bottom: -150px;right: 0px;left: 0px;" ><?php include 'piedPage.php'; ?></div>

<script>
    var nod=document.getElementById("imp");
    nod.addEventListener("click",function () {
        var nod1=document.getElementById("monAncre");
        if (nod1.style.display == "none")
        { nod1.style.display = "" ; }
        });
</script>
</body>

</html>