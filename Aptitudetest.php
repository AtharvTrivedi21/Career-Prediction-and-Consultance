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
<title>career prediction and consultance</title>
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
<header class="w3-container w3-blue w3-center" style="padding:64px 16px">
  <h1 class="w3-margin w3-jumbo">Aptitude test</h1>
</header>

<div class="w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
        <form action = "Apttover.html">
            <h5><strong> Q.1 What type of a relation is R = {(1, 3), (4, 2), (2, 4), (2, 3), (3, 1)} on the set A = {1, 2, 3, 4}?</strong></h5>
            <input type="radio" name = "q1" value = "1a"><label for value="1a">Reflexive</label>
            <input type="radio" name = "q1" value = "1b"><label for value="1b">Transitive </label>
            <input type="radio" name = "q1" value = "1c"><label for value="1c">Symmetric </label>
            <input type="radio" name = "q1" value = "1d"><label for value="1d">None of the above </label>
            <h5><strong> Q.2 The function f(x) = (x² + x + 1 ) is</strong></h5>
            <input type="radio" name = "q2" value = "2a"><label for value="2a">Odd function </label>
            <input type="radio" name = "q2" value = "2b"><label for value="2b">Even Function </label>
            <input type="radio" name = "q2" value = "2c"><label for value="2c">Both </label>
            <input type="radio" name = "q2" value = "2d"><label for value="2d">None of the above </label>
            <h5><strong> Q.3 The chance of getting a doublet with 2 dice is</strong></h5>
            <input type="radio" name = "q3" value = "3a"><label for value="3a">2/3 </label>
            <input type="radio" name = "q3" value = "3b"><label for value="3b">1/6 </label>
            <input type="radio" name = "q3" value = "3c"><label for value="3c">5/6 </label>
            <input type="radio" name = "q3" value = "3d"><label for value="3d">5/36 </label>
            <h5><strong> Q.4 If x = t², y = t³, then d^2y/dx^2 =</strong></h5>
            <input type="radio" name = "q4" value = "4a"><label for value="4a">3/2 </label>
            <input type="radio" name = "q4" value = "4b"><label for value="4b">3/2t </label>
            <input type="radio" name = "q4" value = "4c"><label for value="4c">t </label>
            <input type="radio" name = "q4" value = "4d"><label for value="4d">3/4t </label>
            <h5><strong> Q.5 The distance of the plane 2x – 3y + 6z + 7 = 0 from the point (2, -3, -1) is</strong></h5>
            <input type="radio" name = "q5" value = "5a"><label for value="5a">4 </label>
            <input type="radio" name = "q5" value = "5b"><label for value="5b">3 </label>
            <input type="radio" name = "q5" value = "5c"><label for value="5c">2 </label>
            <input type="radio" name = "q5" value = "5d"><label for value="5d">15 </label>
            <h5><strong> Q.6 The pre-natal technique to determine the gem. tic disorders in a foetus in called</strong></h5>
            <input type="radio" name = "q6" value = "6a"><label for value="6a"> Laprosocopy</label>
            <input type="radio" name = "q6" value = "6b"><label for value="6b"> Amniocentesis</label>
            <input type="radio" name = "q6" value = "6c"><label for value="6c"> Abstinence</label>
            <input type="radio" name = "q6" value = "6d"><label for value="6d"> Coitus interrupts</label>
            <h5><strong> Q.7 Anticodon found in:</strong></h5>
            <input type="radio" name = "q7" value = "7a"><label for value="7a"> On DNA</label>
            <input type="radio" name = "q7" value = "7b"><label for value="7b"> On t-RNA</label>
            <input type="radio" name = "q7" value = "7c"><label for value="7c"> On r-RNA</label>
            <input type="radio" name = "q7" value = "7d"><label for value="7d"> On m-RNA</label>
            <h5><strong> Q.8 A free living anaerobic nitrogen fixing bacterium is</strong></h5>
            <input type="radio" name = "q8" value = "8a"><label for value="8a"> Rhizobium</label>
            <input type="radio" name = "q8" value = "8b"><label for value="8b"> Streptococcus</label>
            <input type="radio" name = "q8" value = "8c"><label for value="8c"> Azotobactor</label>
            <input type="radio" name = "q8" value = "8d"><label for value="8d"> Clostridium</label>
            <h5><strong> Q.9 Somatic hybridization can be done by</strong></h5>
            <input type="radio" name = "q9" value = "9a"><label for value="9a"> By Protoplast fusion</label>
            <input type="radio" name = "q9" value = "9b"><label for value="9b"> By Haploid anther</label>
            <input type="radio" name = "q9" value = "9c"><label for value="9c"> By cell culture</label>
            <input type="radio" name = "q9" value = "9d"><label for value="9d"> ByPollen culture</label>
            <h5><strong> Q.10 Animals have innate ability to escape from predation. Select the incorrect example:</strong></h5>
            <input type="radio" name = "q10" value = "10a"><label for value="10a"> Colour change in Chameleon</label>
            <input type="radio" name = "q10" value = "10b"><label for value="10b"> Enlargement of body by swallowing air in puffer fish</label>
            <input type="radio" name = "q10" value = "10c"><label for value="10c"> Poison fangas of snakes</label>
            <input type="radio" name = "q10" value = "10d"><label for value="10d"> Melaninin in moths</label>
            <h5><strong> Q.11 Out of the following items, which one is shown in the Receipts and Payments Account?</strong></h5>
            <input type="radio" name = "q11" value = "11a"><label for value="11a"> Outstanding Salary</label>
            <input type="radio" name = "q11" value = "11b"><label for value="11b"> Depreciation</label>
            <input type="radio" name = "q11" value = "11c"><label for value="11c"> Life Membership Fees</label>
            <input type="radio" name = "q11" value = "11d"><label for value="11d"> Accrued Subscription</label>
            <h5><strong> Q.12 A draws ₹ 1,000 per month on the last day of every month. If the rate of interest is 5% p.a., then the total interest on drawings will be :</strong></h5>
            <input type="radio" name = "q12" value = "12a"><label for value="12a"> ₹ 325</label>
            <input type="radio" name = "q12" value = "12b"><label for value="12b"> ₹ 275</label>
            <input type="radio" name = "q12" value = "12c"><label for value="12c"> ₹ 300</label>
            <input type="radio" name = "q12" value = "12d"><label for value="12d"> ₹ 350</label>
            <h5><strong> Q.13 The term financial statements includes:</strong></h5>
            <input type="radio" name = "q13" value = "13a"><label for value="13a"> Statement of Profit & Loss</label>
            <input type="radio" name = "q13" value = "13b"><label for value="13b"> Balance Sheet</label>
            <input type="radio" name = "q13" value = "13c"><label for value="13c"> Statement of Profit & Loss and Balance Sheet</label>
            <input type="radio" name = "q13" value = "13d"><label for value="13d"> None of these</label>
            <h5><strong> Q.14 Profitability Ratios are generally expressed in :</strong></h5>
            <input type="radio" name = "q14" value = "14a"><label for value="14a"> Simple Ratio</label>
            <input type="radio" name = "q14" value = "14b"><label for value="14b"> Percentage</label>
            <input type="radio" name = "q14" value = "14c"><label for value="14c"> Times</label>
            <input type="radio" name = "q14" value = "14d"><label for value="14d"> None of these</label>
            <h5><strong> Q.15 Share Application Account is :</strong></h5>
            <input type="radio" name = "q15" value = "15a"><label for value="15a"> Personal Account</label>
            <input type="radio" name = "q15" value = "15b"><label for value="15b"> Real Account</label>
            <input type="radio" name = "q15" value = "15c"><label for value="15c"> Nominal/ Account</label>
            <input type="radio" name = "q15" value = "15d"><label for value="15d"> None of these</label>
            <h5><strong> Q.16 What animal often symbolizes peace in art?</strong></h5>
            <input type="radio" name = "q16" value = "16a"><label for value="16a"> Dog</label>
            <input type="radio" name = "q16" value = "16b"><label for value="16b"> Duck</label>
            <input type="radio" name = "q16" value = "16c"><label for value="16c"> Deer</label>
            <input type="radio" name = "q16" value = "16d"><label for value="16d"> Dove</label>
            <h5><strong> Q.17 What was the subject of the earliest known paintings?</strong></h5>
            <input type="radio" name = "q17" value = "17a"><label for value="17a"> Animals</label>
            <input type="radio" name = "q17" value = "17b"><label for value="17b"> Landscapes</label>
            <input type="radio" name = "q17" value = "17c"><label for value="17c"> Sports</label>
            <input type="radio" name = "q17" value = "17d"><label for value="17d"> Flowers</label>
            <h5><strong> Q.18 How many foot positions are there in ballet?</strong></h5>
            <input type="radio" name = "q18" value = "18a"><label for value="18a"> 5</label>
            <input type="radio" name = "q18" value = "18b"><label for value="18b"> 17</label>
            <input type="radio" name = "q18" value = "18c"><label for value="18c"> 10</label>
            <input type="radio" name = "q18" value = "18d"><label for value="18d"> 1</label>
            <h5><strong> Q.19 Which of these is not an element of art?</strong></h5>
            <input type="radio" name = "q19" value = "19a"><label for value="19a"> Balance</label>
            <input type="radio" name = "q19" value = "19b"><label for value="19b"> Texture</label>
            <input type="radio" name = "q19" value = "19c"><label for value="19c"> Line</label>
            <input type="radio" name = "q19" value = "19d"><label for value="19d"> Color</label>
            <h5><strong> Q.20 This refers to the way something feels or looks as if it might feel like something</strong></h5>
            <input type="radio" name = "q20" value = "20a"><label for value="20a"> Line</label>
            <input type="radio" name = "q20" value = "20b"><label for value="20b"> Space</label>
            <input type="radio" name = "q20" value = "20c"><label for value="20c"> Value</label>
            <input type="radio" name = "q20" value = "20d"><label for value="20d"> Texture</label>
            <br><br>
            <input type="submit" name = "sumbit" value="Submit">
            <input type="reset" name = "reset" value="Reset">
        </form>
        </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live your life fully</h1>
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
