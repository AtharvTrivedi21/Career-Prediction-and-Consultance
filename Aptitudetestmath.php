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
  <h1 class="w3-margin w3-jumbo">Aptitude Test : Mathematics</h1>
</header>

<div class="w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
        <form id="test-form">
            <label for="question-1"> Q.1 The next term in the Series 2,5,10,17,26, 37 is:</label><br>
            <input type="radio" name = "question-1" value = "1a">50 <br>
            <input type="radio" name = "question-1" value = "1b">57 <br>
            <input type="radio" name = "question-1" value = "1c">62 <br>
            <input type="radio" name = "question-1" value = "1d">72 <br><br>
            <label for="question-2"> Q.2 A group of 210 students appeared in some test. The mean of 1/3 rd of students is found to be 60. The mean of the remaining students is found to be 78. The mean of the whole group will be</label><br>
            <input type="radio" name = "question-2" value = "2a">80 <br>
            <input type="radio" name = "question-2" value = "2b">76 <br>
            <input type="radio" name = "question-2" value = "2c">74 <br>
            <input type="radio" name = "question-2" value = "2d">72 <br><br>
            <label for="question-3"> Q.3 Anil after travelling 6 km towards hast from his house realized that he has travelled in, wrong direction. He turned and travelled 12 km towards West, turned right anil travelled 8 km to reach his office. The straight distance of the office from his house is:</label><br>
            <input type="radio" name = "question-3" value = "3a">20 km<br>
            <input type="radio" name = "question-3" value = "3b">11 km<br>
            <input type="radio" name = "question-3" value = "3c">12 km<br>
            <input type="radio" name = "question-3" value = "3d">10 km<br><br>
            <label for="question-4"> Q.4 The next term m the series: B2E, D5H, F12K, H27N is</label><br>
            <input type="radio" name = "question-4" value = "4a">J561 <br>
            <input type="radio" name = "question-4" value = "4b">I62Q <br>
            <input type="radio" name = "question-4" value = "4c">Q62J <br>
            <input type="radio" name = "question-4" value = "4d">J58Q <br><br>
            <label for="question-5"> Q.5 A party was held in which a grandmother, father, mother, four sons, their wives and one son and two daughters to each of the sons were present. The number of females present in the party is:</label><br>
            <input type="radio" name = "question-5" value = "5a">12 <br>
            <input type="radio" name = "question-5" value = "5b">14 <br>
            <input type="radio" name = "question-5" value = "5c">18 <br>
            <input type="radio" name = "question-5" value = "5d">24 <br><br>
            <label for="question-6"> Q.6 P and Q are brothers. R and S are sisters. The son of P is brother of S. Q is related to R as:</label><br>
            <input type="radio" name = "question-6" value = "6a"> Son<br>
            <input type="radio" name = "question-6" value = "6b"> Brother<br>
            <input type="radio" name = "question-6" value = "6c"> Uncle<br>
            <input type="radio" name = "question-6" value = "6d"> Father<br><br>
            <label for="question-7"> Q.7 January 1, 1995 was a Sunday. What day of the week lies on January 1, 1996?</label><br>
            <input type="radio" name = "question-7" value = "7a"> Sunday<br>
            <input type="radio" name = "question-7" value = "7b"> Monday<br>
            <input type="radio" name = "question-7" value = "7c"> Wednesday<br>
            <input type="radio" name = "question-7" value = "7d"> Saturday<br><br>
            <label for="question-8"> Q.8 When an error of 1% is made in the length and breadth of a rectangle, the percentage error (%) in the area of a rectangle will be?</label><br>
            <input type="radio" name = "question-8" value = "8a"> 0<br>
            <input type="radio" name = "question-8" value = "8b"> 1<br>
            <input type="radio" name = "question-8" value = "8c"> 2<br>
            <input type="radio" name = "question-8" value = "8d"> 4<br><br>
            <label for="question-9"> Q.9 There are 10 true-false questions in an examination. Then these questions can be answered in how many ways?</label><br>
            <input type="radio" name = "question-9" value = "9a"> 20<br>
            <input type="radio" name = "question-9" value = "9b"> 100<br>
            <input type="radio" name = "question-9" value = "9c"> 240<br>
            <input type="radio" name = "question-9" value = "9d"> 1024<br><br>
            <label for="question-10"> Q.10 The average of four consecutive even numbers is 27. The largest of these numbers is:</label><br>
            <input type="radio" name = "question-10" value = "10a"> 36<br>
            <input type="radio" name = "question-10" value = "10b"> 32<br>
            <input type="radio" name = "question-10" value = "10c"> 30<br>
            <input type="radio" name = "question-10" value = "10d"> 28<br><br>
            <label for="question-11"> Q.11 A group of 7 members having a majority of boys is to be formed out of 6 boys and 4 girls. The number of ways the group can be formed is</label><br>
            <input type="radio" name = "question-11" value = "11a"> 80<br>
            <input type="radio" name = "question-11" value = "11b"> 100<br>
            <input type="radio" name = "question-11" value = "11c"> 90<br>
            <input type="radio" name = "question-11" value = "11d"> 110<br><br>
            <label for="question-12"> Q.12 The number of observations in a group is 40. The average of the first 10 members is 4.5 and the average of the remaining 30 members is 3.5. The average of the whole group is</label><br>
            <input type="radio" name = "question-12" value = "12a"> 4<br>
            <input type="radio" name = "question-12" value = "12b"> 15/2<br>
            <input type="radio" name = "question-12" value = "12c"> 15/4<br>
            <input type="radio" name = "question-12" value = "12d"> 6<br><br>
            <label for="question-13"> Q.13 If MOHAN is represented by the code KMFYL, then COUNT will be represented by</label><br>
            <input type="radio" name = "question-13" value = "13a"> AMSLR<br>
            <input type="radio" name = "question-13" value = "13b"> MSLAR<br>
            <input type="radio" name = "question-13" value = "13c"> MASRL<br>
            <input type="radio" name = "question-13" value = "13d"> SAMLR<br><br>
            <label for="question-14"> Q.14 The sum of the ages of two persons A and B is 50. 5 years ago, the ratio of their ages was 5/3. The present age of A and B are</label><br>
            <input type="radio" name = "question-14" value = "14a"> 30, 20<br>
            <input type="radio" name = "question-14" value = "14b"> 35, 15<br>
            <input type="radio" name = "question-14" value = "14c"> 38, 12<br>
            <input type="radio" name = "question-14" value = "14d"> 40, 10<br><br>
            <label for="question-15"> Q.15 In an examination, 35% of the total students failed in Hindi, 45% failed in English and 20% in both. The percentage of those who passed in both subjects is</label><br>
            <input type="radio" name = "question-15" value = "15a"> 10<br>
            <input type="radio" name = "question-15" value = "15b"> 20<br>
            <input type="radio" name = "question-15" value = "15c"> 30<br>
            <input type="radio" name = "question-15" value = "15d"> 40<br><br>
           
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
        correctAnswer: "2d"
    },
    {
        question: "question-3",
        correctAnswer: "3d"
    },
    {
        question: "question-4",
        correctAnswer: "4d"
    },
    {
        question: "question-5",
        correctAnswer: "5b"
    },
    {
        question: "question-6",
        correctAnswer: "6c"
    },
    {
        question: "question-7",
        correctAnswer: "7b"
    },
    {
        question: "question-8",
        correctAnswer: "8c"
    },
    {
        question: "question-9",
        correctAnswer: "9d"
    },
    {
        question: "question-10",
        correctAnswer: "10c"
    },
    {
        question: "question-11",
        correctAnswer: "11b"
    },
    {
        question: "question-12",
        correctAnswer: "12c"
    },
    {
        question: "question-13",
        correctAnswer: "13a"
    },
    {
        question: "question-14",
        correctAnswer: "14a"
    },
    {
        question: "question-15",
        correctAnswer: "15d"
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
        careers = "Engineering Fields(BE/Btech): Eelectrical, Mechanical, CS, IT, ICT, EC, Civil, etc. <br> Science Fields(BSc): Maths, Physics, etc. <br> Other fields: BCA, BMath(Honours), BASc, etc.";
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