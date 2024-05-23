<?php
session_start();
//include('logindemo2.php');

if(!isset($_SESSION['admin']))
{
    header('location: demox1r.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Career Prediction and Consultance</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="log_in_css.css" >
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-address-card {font-size:200px}
.fa-phone {font-size:200px}
</style>
</head>
<body>

<!-- Navbar -->
<?php include('navbar.php') ?>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-blue w3-center" style="padding:100px 16px">
  <h1 class="w3-margin w3-jumbo">Aptitude test</h1>
 <!-- <p class="w3-xlarge">Template by w3.css</p>-->
  <a href = "Aptitudetestz.php" target = "_self"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" style="width:auto;">General Test</button></a><br>
  <a href = "Aptitudetestmath.php" target = "_self"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" style="width:auto;">Math Test</button></a>
  <a href = "AptitudetestBio.php" target = "_self"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" style="width:auto;">Bio Test</button></a>
  <a href = "AptitudetestCommerce.php" target = "_self"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" style="width:auto;">Commerce Test</button></a>
  <a href = "AptitudetestArts.php" target = "_self"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" style="width:auto;">Arts Test</button></a>
 
</header>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-14">
    <h1 class="w3-margin w3-xlarge">Quote of the day: "The secret of getting ahead is getting started."</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>

</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
