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
  <h1 class="w3-margin w3-jumbo">Aptitude Test: Biology</h1>
</header>

<div class="w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
        <form id="test-form">
            <label for="question-1"> Q.1 Severe deficiency of Vitamin-D results in</label><br>
            <input type="radio" name = "question-1" value = "1a">Scurvy <br>
            <input type="radio" name = "question-1" value = "1b">Rickets <br>
            <input type="radio" name = "question-1" value = "1c">Night Blindness <br>
            <input type="radio" name = "question-1" value = "1d">Osteomalacia <br><br>
            <label for="question-2"> Q.2 People living in high altitudes (like mountains) usually have a</label><br>
            <input type="radio" name = "question-2" value = "2a">Smaller Number of RBCs <br>
            <input type="radio" name = "question-2" value = "2b">Larger Number of RBCs <br>
            <input type="radio" name = "question-2" value = "2c">Smaller Number of WBCs <br>
            <input type="radio" name = "question-2" value = "2d">Larger Number of WBCs <br><br>
            <label for="question-3"> Q.3 The average adult has a blood volume of about ________ liters.</label><br>
            <input type="radio" name = "question-3" value = "3a">5<br>
            <input type="radio" name = "question-3" value = "3b">5.5<br>
            <input type="radio" name = "question-3" value = "3c">6<br>
            <input type="radio" name = "question-3" value = "3d">6.5<br><br>
            <label for="question-4"> Q.4 The average internal temperature of human body is</label><br>
            <input type="radio" name = "question-4" value = "4a">35 °C<br>
            <input type="radio" name = "question-4" value = "4b">36 °C<br>
            <input type="radio" name = "question-4" value = "4c">37 °C<br>
            <input type="radio" name = "question-4" value = "4d">38 °C<br><br>
            <label for="question-5"> Q.5 Vitamin ________ is needed for the formation of a light-sensitive pigment in the retina</label><br>
            <input type="radio" name = "question-5" value = "5a">A <br>
            <input type="radio" name = "question-5" value = "5b">C <br>
            <input type="radio" name = "question-5" value = "5c">D <br>
            <input type="radio" name = "question-5" value = "5d">B Complex <br><br>
            <label for="question-6"> Q.6 About ________ of the body weight of a mammal is water.</label><br>
            <input type="radio" name = "question-6" value = "6a"> 60%<br>
            <input type="radio" name = "question-6" value = "6b"> 65%<br>
            <input type="radio" name = "question-6" value = "6c"> 70%<br>
            <input type="radio" name = "question-6" value = "6d"> 75%<br><br>
            <label for="question-7"> Q.7 On wound ________ fight foreign particles, like bacteria.</label><br>
            <input type="radio" name = "question-7" value = "7a"> WBC<br>
            <input type="radio" name = "question-7" value = "7b"> RBC<br>
            <input type="radio" name = "question-7" value = "7c"> Platelets<br>
            <input type="radio" name = "question-7" value = "7d"> Plasma<br><br>
            <label for="question-8"> Q.8 Blood is carried towards the heart by</label><br>
            <input type="radio" name = "question-8" value = "8a"> Arteries<br>
            <input type="radio" name = "question-8" value = "8b"> Capillaries<br>
            <input type="radio" name = "question-8" value = "8c"> Veins<br>
            <input type="radio" name = "question-8" value = "8d"> None of These<br><br>
            <label for="question-9"> Q.9 ________ is essential for the formation of haemoglobin.</label><br>
            <input type="radio" name = "question-9" value = "9a"> Calcium<br>
            <input type="radio" name = "question-9" value = "9b"> Iron<br>
            <input type="radio" name = "question-9" value = "9c"> Water<br>
            <input type="radio" name = "question-9" value = "9d"> Carbohydrates<br><br>
            <label for="question-10"> Q.10 _________ are needed as a source of energy for the vital activities of the body.</label><br>
            <input type="radio" name = "question-10" value = "10a"> Calcium<br>
            <input type="radio" name = "question-10" value = "10b"> Iron<br>
            <input type="radio" name = "question-10" value = "10c"> Water<br>
            <input type="radio" name = "question-10" value = "10d"> Carbohydrates<br><br>
            <label for="question-11"> Q.11 Starch is converted into maltose by</label><br>
            <input type="radio" name = "question-11" value = "11a"> Diastase<br>
            <input type="radio" name = "question-11" value = "11b"> Invertase<br>
            <input type="radio" name = "question-11" value = "11c"> Maltase<br>
            <input type="radio" name = "question-11" value = "11d"> Amylase<br><br>
            <label for="question-12"> Q.12 Co-enzyme is often formed from</label><br>
            <input type="radio" name = "question-12" value = "12a"> Lipid<br>
            <input type="radio" name = "question-12" value = "12b"> Protein<br>
            <input type="radio" name = "question-12" value = "12c"> Inorganic Ion<br>
            <input type="radio" name = "question-12" value = "12d"> Vitamin<br><br>
            <label for="question-13"> Q.13 Messenger RNA is formed in</label><br>
            <input type="radio" name = "question-13" value = "13a"> Nucleus<br>
            <input type="radio" name = "question-13" value = "13b"> Chloroplast<br>
            <input type="radio" name = "question-13" value = "13c"> Mitochondria<br>
            <input type="radio" name = "question-13" value = "13d"> None of These<br><br>
            <label for="question-14"> Q.14 The Number of Chromosomes in E.coli are</label><br>
            <input type="radio" name = "question-14" value = "14a"> 4<br>
            <input type="radio" name = "question-14" value = "14b"> 6<br>
            <input type="radio" name = "question-14" value = "14c"> 3<br>
            <input type="radio" name = "question-14" value = "14d"> 1<br><br>
            <label for="question-15"> Q.15 Protein Factory is:</label><br>
            <input type="radio" name = "question-15" value = "15a"> Nucleus<br>
            <input type="radio" name = "question-15" value = "15b"> Ribosome<br>
            <input type="radio" name = "question-15" value = "15c"> Golgi COmplex<br>
            <input type="radio" name = "question-15" value = "15d"> Centriole<br><br>
           
            <br><br>
            
            <input type="reset" name = "reset" value="Reset" class="w3-button w3-blue w3-padding-large w3-large w3-margin-top" style="width:auto;">
            <button type="submit" name="submit" value = "submit" onclick = "showHtmlDiv()" class="w3-button w3-blue w3-padding-large w3-large w3-margin-top" style="width:auto;">Submit</button>
            
        </form>
        <div id="results"></div>
        <div id="careers"></div>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">To focus on the future, let go off the past.</h1>
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

function showHtmlDiv() {
  var htmlShow = document.getElementById("test-form");
  if (htmlShow.style.display === "none") {
    htmlShow.style.display = "block";
  } else {
    htmlShow.style.display = "none";
  }
}

const questions = [
    {
        question: "question-1",
        correctAnswer: "1b"
    },
    {
        question: "question-2",
        correctAnswer: "2b"
    },
    {
        question: "question-3",
        correctAnswer: "3a"
    },
    {
        question: "question-4",
        correctAnswer: "4c"
    },
    {
        question: "question-5",
        correctAnswer: "5a"
    },
    {
        question: "question-6",
        correctAnswer: "6c"
    },
    {
        question: "question-7",
        correctAnswer: "7a"
    },
    {
        question: "question-8",
        correctAnswer: "8c"
    },
    {
        question: "question-9",
        correctAnswer: "9b"
    },
    {
        question: "question-10",
        correctAnswer: "10d"
    },
    {
        question: "question-11",
        correctAnswer: "11a"
    },
    {
        question: "question-12",
        correctAnswer: "12b"
    },
    {
        question: "question-13",
        correctAnswer: "13a"
    },
    {
        question: "question-14",
        correctAnswer: "14d"
    },
    {
        question: "question-15",
        correctAnswer: "15b"
    }
];

function submitAnswers(event) {
  event.preventDefault();
  let score = 0;
  
  const answers = [];
  questions.forEach((question, index) => {
    const selectedAnswer = document.querySelector(`input[name="question-${index + 1}"]:checked`);
    if (selectedAnswer) {
      answers.push(selectedAnswer.value);
      if (selectedAnswer.value === question.correctAnswer) {
        score++;
      }
    } 
    else {
      answers.push(null);
    }
  });
  
var msg = new String();
var careers = new String();
  
    if(score >= 12)
    {
        msg = "You have Succesfully passed the test.";
        careers = "Medicine and Surgery, Pharmacy, Biomedical Engineering, Environmental Studies, Marine Biology, Medical Research, Pre-Medical Studies, Zoology, etc";
    }
    else
    {
        msg = "You have not scored enough to pass the test.(Must score atleast: 80%)";
        careers = "No Careers are suggested, as you did not pass the test. Please appear for the test again later.";
    }
    /*
    else
    {
        msg6 = "You have scored Low, Please try again later";
    }
    */
  const resultsElement = document.querySelector("#results");
  resultsElement.innerHTML = `
    <div>
    <h2 text-color="blue"><strong> Your Responses have been recorded.</strong><h2>
    <h2><strong> Test Results: </strong></h2>
    <h3>
    Total Score: ${score} / ${questions.length} <br>
    <h3>${msg}</h3>
    </h3>
    
    </div>
    
  `;

  const careersElement = document.querySelector("#careers");
  careersElement.innerHTML = `
    <div>
    <h2><strong>According to your test performance, following are the suggested careers:</strong></h2>
    <h3>${careers}</h3>
    </div>
  `;
}

const testForm = document.querySelector("#test-form");
testForm.addEventListener("submit", submitAnswers);
</script>
</body>
</html>