<?php

include('adminlo.php');
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
<div class="w3-top">
  <div class="w3-bar w3-green w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="demox1r.php" target="_blank" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
  </div>

  

<!-- Header -->
<header class="w3-container w3-blue w3-center" style="padding:12px 16px 20px 16px">
  <h1 class="w3-margin w3-jumbo">Career Prediction and Consultance</h1>
  <h2 class="w3-margin w3-jumbo">Admin Page Login</h2>
 <!-- <p class="w3-xlarge">Template by w3.css</p>-->
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-hover-amber" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Admin</button>

</header>




  

  <!--for admin-->
<div id="id03" class="modal">

<form class="modal-content animate" autocomplete="off"  method="post" action="" background-color:aquamarine">
  
  <div class="imgcontainer">
    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    <label><center><h1>admin</h1></center></label>
    <img src="img_avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="aname"><b>Admin Name</b></label>
    <input type="text" placeholder="Enter admin name" name="aname" required>

    <label for="apsw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="apsw" required>
      
    <input type="submit" name="adlog" id="adlog" value="submit"></input>
    
  </div>
</form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }

 
}
</script>

  <div class="w3-container w3-black w3-center w3-opacity w3-padding-24">
    <h1 class="w3-margin w3-xlarge">Quote of the day: "It is only impossible until you do it."</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-44 w3-center w3-opacity">  
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