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
<body style="overflow-y: scroll;">
<div class="w3-top">
<div class="w3-bar w3-green w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="testdbdisp.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">user info table</a>
    <a href="feedbackdbdisp.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">feedback table</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-black w3-hide-small w3-padding-large w3-hover-white" style="float:right;" onclick()="exit()">Log Out</a>

</div>

<header class="w3-container w3-blue w3-center" style="padding:5px 16px 20px 16px">
  <!--<h1 class="w3-margin w3-jumbo">Career Prediction and Consultance</h1> -->
  <h3 class="w3-margin w3-jumbo">user info table</h1> 
</header>
<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","");

if(!$conn)
{
    die('Error in Connection'.mysqli_error());
}
mysqli_select_db($conn, "WebsiteDB");

$show_feedback=mysqli_query($conn, "SELECT * FROM feedback_table");
echo"<table border = '1'>";
echo "<td>"."<b>Username</b>" . "</td><td>" . "<b>Feedback</b>";
while($row = mysqli_fetch_array($show_feedback))
{
    echo "<tr>";
    echo "<td>".$row['uname'] . "</td><td>" . $row['userfeedback'];
    echo "</td></tr>";
}
echo "</table>";
mysqli_close($conn);
?>
<div class="w3-container w3-black w3-center w3-opacity w3-padding-24">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live your life fully</h1>
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
</body>
</html>