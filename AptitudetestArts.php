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
<header class="w3-container w3-blue w3-center" style="padding:64px 16px">
  <h1 class="w3-margin w3-jumbo">Aptitude Test : Arts</h1>
</header>

<div class="w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
        <form id="test-form">
            <label for="question-1"> Q.1 Which of these is a paint made from pigments and plastic?</label><br>
            <input type="radio" name = "question-1" value = "1a">Acrylic <br>
            <input type="radio" name = "question-1" value = "1b">Gesso <br>
            <input type="radio" name = "question-1" value = "1c">Acetone <br>
            <input type="radio" name = "question-1" value = "1d">Tempera <br><br>
            <label for="question-2"> Q.2 Early photographers made their images on which of these materials?</label><br>
            <input type="radio" name = "question-2" value = "2a">Glass <br>
            <input type="radio" name = "question-2" value = "2b">Stone <br>
            <input type="radio" name = "question-2" value = "2c">Paper <br>
            <input type="radio" name = "question-2" value = "2d">Plastic <br><br>
            <label for="question-3"> Q.3 To which artistic movement does Paul Gauguin's The Yellow Christ belong?</label><br>
            <input type="radio" name = "question-3" value = "3a">Impressionism<br>
            <input type="radio" name = "question-3" value = "3b">Bauhaus<br>
            <input type="radio" name = "question-3" value = "3c">Cloisonnism<br>
            <input type="radio" name = "question-3" value = "3d">Fauvism<br><br>
            <label for="question-4"> Q.4 What does the Venus of Brassempouy represent?</label><br>
            <input type="radio" name = "question-4" value = "4a">A Woman's Head <br>
            <input type="radio" name = "question-4" value = "4b">An Angel <br>
            <input type="radio" name = "question-4" value = "4c">A Human Figure <br>
            <input type="radio" name = "question-4" value = "4d">An Old Man <br><br>
            <label for="question-5"> Q.5 Which architect founded the Bauhaus school of design?</label><br>
            <input type="radio" name = "question-5" value = "5a">Walter Gropius <br>
            <input type="radio" name = "question-5" value = "5b">Frank Gehry <br>
            <input type="radio" name = "question-5" value = "5c">IM Pei <br>
            <input type="radio" name = "question-5" value = "5d">Frand Lloyd Wright <br><br>
            <label for="question-6"> Q.6 Who designed the Vietnam Veterans Memorial?</label><br>
            <input type="radio" name = "question-6" value = "6a"> Henri Matisse<br>
            <input type="radio" name = "question-6" value = "6b"> Maya Lin<br>
            <input type="radio" name = "question-6" value = "6c"> Frank Gehry<br>
            <input type="radio" name = "question-6" value = "6d"> Frank Lloyd Wright<br><br>
            <label for="question-7"> Q.7 What did I.M. Pei design outside the Louvre, in Paris?</label><br>
            <input type="radio" name = "question-7" value = "7a"> Sarcophagus<br>
            <input type="radio" name = "question-7" value = "7b"> Obelisk<br>
            <input type="radio" name = "question-7" value = "7c"> Ziggurat<br>
            <input type="radio" name = "question-7" value = "7d"> Pyramid<br><br>
            <label for="question-8"> Q.8 Which one of these is not a well-known Indian sculptor?</label><br>
            <input type="radio" name = "question-8" value = "8a"> Ramkinkar Baij<br>
            <input type="radio" name = "question-8" value = "8b"> Henry Moore<br>
            <input type="radio" name = "question-8" value = "8c"> Kumaradeva<br>
            <input type="radio" name = "question-8" value = "8d"> Krishna Reddy<br><br>
            <label for="question-9"> Q.9 Which animal often symbolizes peace?</label><br>
            <input type="radio" name = "question-9" value = "9a"> Dog<br>
            <input type="radio" name = "question-9" value = "9b"> Duck<br>
            <input type="radio" name = "question-9" value = "9c"> Deer<br>
            <input type="radio" name = "question-9" value = "9d"> Dove<br><br>
            <label for="question-10"> Q.10 What was the subject of Earliest known Paintings</label><br>
            <input type="radio" name = "question-10" value = "10a"> Animals<br>
            <input type="radio" name = "question-10" value = "10b"> Landscapes<br>
            <input type="radio" name = "question-10" value = "10c"> Sports<br>
            <input type="radio" name = "question-10" value = "10d"> Flowers<br><br>
            <label for="question-11"> Q.11 What Dutch artist is famous for his strange geometrical puzzles?</label><br>
            <input type="radio" name = "question-11" value = "11a"> MC Escher<br>
            <input type="radio" name = "question-11" value = "11b"> Pieter Breughel<br>
            <input type="radio" name = "question-11" value = "11c"> Vincent Van Gogh<br>
            <input type="radio" name = "question-11" value = "11d"> Jan Van Eyk<br><br>
            <label for="question-12"> Q.12 Which of these artists is famous for using human paintbrushes?</label><br>
            <input type="radio" name = "question-12" value = "12a"> Paul Cezanne<br>
            <input type="radio" name = "question-12" value = "12b"> Yves Klein<br>
            <input type="radio" name = "question-12" value = "12c"> Giorgio Vasari<br>
            <input type="radio" name = "question-12" value = "12d"> Jackson Pollock<br><br>
            <label for="question-13"> Q.13 Which of these artists used musical terms such as “nocturne” and “harmony” to describe his pictures?</label><br>
            <input type="radio" name = "question-13" value = "13a"> Vincent Van Gogh<br>
            <input type="radio" name = "question-13" value = "13b"> Leonardo Da Vinci<br>
            <input type="radio" name = "question-13" value = "13c"> Edgar Degas<br>
            <input type="radio" name = "question-13" value = "13d"> James Whistler<br><br>
            <label for="question-14"> Q.14 Who was the first famous artist of the Italian Renaissance?</label><br>
            <input type="radio" name = "question-14" value = "14a"> Michelangelo<br>
            <input type="radio" name = "question-14" value = "14b"> Mantegna<br>
            <input type="radio" name = "question-14" value = "14c"> Masaccio<br>
            <input type="radio" name = "question-14" value = "14d"> Leonardo Da Vinci<br><br>
            <label for="question-15"> Q.15 With what painter did Jean-Michel Basquiat collaborate?</label><br>
            <input type="radio" name = "question-15" value = "15a"> Roy Lichtenstein<br>
            <input type="radio" name = "question-15" value = "15b"> Andy Warhol<br>
            <input type="radio" name = "question-15" value = "15c"> Claude Monet<br>
            <input type="radio" name = "question-15" value = "15d"> Willem de Kooning<br><br>
           
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
        correctAnswer: "1a"
    },
    {
        question: "question-2",
        correctAnswer: "2a"
    },
    {
        question: "question-3",
        correctAnswer: "3c"
    },
    {
        question: "question-4",
        correctAnswer: "4a"
    },
    {
        question: "question-5",
        correctAnswer: "5a"
    },
    {
        question: "question-6",
        correctAnswer: "6b"
    },
    {
        question: "question-7",
        correctAnswer: "7d"
    },
    {
        question: "question-8",
        correctAnswer: "8b"
    },
    {
        question: "question-9",
        correctAnswer: "9d"
    },
    {
        question: "question-10",
        correctAnswer: "10a"
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
        correctAnswer: "13d"
    },
    {
        question: "question-14",
        correctAnswer: "14c"
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
        careers = "BA: Humanities and Social Sciences, Fine Arts, Visual Arts, Performing Arts; BDes: Animation, Design, Hospitality and Travel; Diploma in Education, BBA LLB, BA LLB, Other fields: Journalism, Mass Communication, Mass Media, etc.";
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