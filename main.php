<?php
include("verificationAuthentification.php");
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

    
    <link href="css/round-about.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">

    <title>Home</title>
</head>

<body>

<?php
include("choixNavigation.php");
?>  

<!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
      <h1 class="my-4">
        <small style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); padding: 17px;">Hello <?php echo (ucfirst ( $_SESSION['login'])) ?> !</small>
      </h1>
      <h3 style="box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22); padding: 50px;">This establishment is proud to have a professional team of hardworking engineers that contribute daily in the positive development of the firm ! </h3>

      <!-- Team Members Row -->
      <div class="row" style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); padding: 30px; margin:10px">
        <div class="col-lg-12" >
          <h2 class="my-4">Our Team</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="malek.jpg" width=200px height=200px alt="">
          <h3>Ayadi Malek<br>
            <small>Co Founder</small>
          </h3>
          <p>Gl 2/2 <br> Contact :+21600000000</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto"src="yahya.jpg" width=200px height=200px alt="">
          <h3>Derbeli Yahya<br>
            <small>Co Founder</small>
          </h3>
          <p>Gl 2/2 <br> Contact:+21611111111 </p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="khlil.jpg" width=200px height=200px alt="">
          <h3>Turki Khlil<br>
            <small>Co Founder</small>
          </h3>
          <p>Gl 2/2 <br> Contact:+21622222222</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="amine.jpg" width=200px height=200px alt="">
          <h3>Karoui Amine<br>
            <small>Co Founder</small>
          </h3>
          <p>Gl 2/2 <br> Contact: +21633333333 </p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="skander.jpg" width=200px height=200px alt="">
          <h3>Meziane Skander
            <small><br>Co Founder</small>
          </h3>
          <p>Gl 2/2 <br> Contact:+21644444444</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="ahmed.jpg" width=200px height=200px alt="">
          <h3>Hajyahmed Ahmed
            <small><br>Co Founder</small>
          </h3>
          <p>Gl 2/2 <br> Contact:+21655555555</p>
        </div>
      </div>

    </div>
    <!-- /.container -->








<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php include("piedpage.php"); ?>
</body>