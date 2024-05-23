<?php

include('logindemo2.php');
include('testdb.php');
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="log_in_css.css" >
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
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
    <a href="demox1r.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="ScholarshipSchemes3c.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Scholarship schemes</a>
    <a href="FAQ2c.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">FAQs</a>
    <a href="adminpage.php" target="_blank" class="w3-bar-item w3-button w3-black w3-hide-small w3-padding-large w3-hover-white" style="float:right;">admin</a>   
    <a href="counselpage.php" target="_blank" class="w3-bar-item w3-button w3-black w3-hide-small w3-padding-large w3-hover-white" style="float:right;">counsel</a>   
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-blue w3-center" style="padding:120px 16px 20px 16px">
  <h1 class="w3-margin w3-jumbo">Career Prediction and Consultance</h1>
 <!-- <p class="w3-xlarge">Template by w3.css</p>-->
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-hover-amber" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign up</button>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-hover-amber" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Log in</button>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-44 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>About us</h1>
      <h5 class="w3-padding-32">Greetings to all aspirants out there.</h5>

      <p class="w3-text-grey">We welcome you to the platform where we consistently strive to offer you help and solutions for your career related queries.</p>
      <p class="w3-text-grey">This platform has been designed for every aspirant wishing to select the career of their choice, solve their queries and share their experiences with others. We provide aptitude tests for you,
         to understand yourself and how you could improve yourself. We also furnish the basic requirements and understanding for each and every stream out there, and much more.</p>
      <h6 class="w3-padding-32">Thank you for choosing and supporing us!</h6>   
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-address-card w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-14 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-phone w3-padding-14 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-quarter">
      <h1>Contact Us</h1>
      <h5 class="w3-padding-2">Address</h5>
      <pre class="w3-text-grey">New L.J Institute of Engineering and Technology, Bodakdev, Ahmedabad, Gujarat(380054)
      </pre>

      <h5 class="w3-padding-2">Contact number</h5>
      <pre class="w3-text-grey">
+91-9990011122(For queries)
+91-9555003217(For queries)
      </pre>

      <h5 class="w3-padding-2">Email Address</h5>

      <pre class="w3-text-grey">
careerpredncons@gmail.com
cpacquery@gmail.com
</pre>

      
    </div>
  </div>
</div>

<!--for sign up-->
<div id="id01" class="modal">

<form class="modal-content animate" method="post" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="background-color:aquamarine">
 
  <div class="imgcontainer">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <label><h1 class="text-center">Sign Up</h1></label><br><br>
    <img src="img_avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>

    <label for="birthday"><b>DOB</b></label>
    <input type="date" class="form-control" name="dob" required>

    <label for="email"><b>Email</b></label>
    <input type="email" class="form-control" placeholder="Enter Email ID"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" required>

    <label for="mobilenumber"><b>Mobile no.</b></label>
    <input type="text" class="form-control" placeholder="Enter Mobile Number" pattern="[0-9]{10}" name="mobno" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" class="form-control" placeholder="Enter Password" name="psw" required/>
    <input type="submit" class="btn btn-success" id="subreg" name="subreg" value="Submit" />
    <input type="reset" class="btn btn-danger" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" value="Cancel">
  </div>
</form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
}
</script>

<!--for log in-->
<div id="id02" class="modal">

  <form class="modal-content animate" autocomplete="off" method="post" action="" background-color:aquamarine">
    
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <label><h1 class="text-center">Log in</h1></label><br><br>
      <img src="img_avatar.png" alt="Avatar" class="avatar">
    </div>
  
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
        
      <input type="submit" class="btn btn-success" name="submit" id="submit" value="Login"></input>
      <!--<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>-->
    </div>
  
    <!--<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>-->
  </form>
  </div>
  
  <script>
  // Get the modal
  var modal = document.getElementById('id02');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
  </script>

  <div class="w3-container w3-black w3-center w3-opacity w3-padding-24">
    <h1 class="w3-margin w3-xlarge"><b>Quote of the day:</b> You will face many defeats in your life, but never let yourself be defeated.</h1>
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