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
  <h1 class="w3-margin w3-jumbo">Aptitude Test : Commerce</h1>
</header>

<div class="w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
        <form id="test-form">
            <label for="question-1"> Q.1 Which from the following is NOT among essentials of a valid contract?</label><br>
            <input type="radio" name = "question-1" value = "1a">Consensus ad idem <br>
            <input type="radio" name = "question-1" value = "1b">More than two parties <br>
            <input type="radio" name = "question-1" value = "1c">Lawful consideration <br>
            <input type="radio" name = "question-1" value = "1d">Free consent <br><br>
            <label for="question-2"> Q.2 Raw materials that are remaining at the end of the reporting period are treated as?</label><br>
            <input type="radio" name = "question-2" value = "2a">Current Assets <br>
            <input type="radio" name = "question-2" value = "2b">Fixed Assets <br>
            <input type="radio" name = "question-2" value = "2c">Expenses <br>
            <input type="radio" name = "question-2" value = "2d">Liabilties <br><br>
            <label for="question-3"> Q.3 The selling price of some goods is $1500 and cost to sell the goods is $200. What is the Net Realizable Value (NRV)?</label><br>
            <input type="radio" name = "question-3" value = "3a">$ 1000<br>
            <input type="radio" name = "question-3" value = "3b">$ 1200<br>
            <input type="radio" name = "question-3" value = "3c">$ 1300<br>
            <input type="radio" name = "question-3" value = "3d">$ 1500<br><br>
            <label for="question-4"> Q.4 Shares of a public company are usually traded on a?</label><br>
            <input type="radio" name = "question-4" value = "4a">Central Bank <br>
            <input type="radio" name = "question-4" value = "4b">Stock Exchange <br>
            <input type="radio" name = "question-4" value = "4c">Securities And Exchange Commission<br>
            <input type="radio" name = "question-4" value = "4d">Hedge Fund <br><br>
            <label for="question-5"> Q.5 Selling Bods is a way to:</label><br>
            <input type="radio" name = "question-5" value = "5a"> Pay Debt<br>
            <input type="radio" name = "question-5" value = "5b"> Improve Exchange Rates<br>
            <input type="radio" name = "question-5" value = "5c"> Lend Loans<br>
            <input type="radio" name = "question-5" value = "5d"> Obtain Loans<br><br>
            <label for="question-6"> Q.6 The IMF was established in _________ at the Bretton Woods Conference in the United States?</label><br>
            <input type="radio" name = "question-6" value = "6a"> 1944<br>
            <input type="radio" name = "question-6" value = "6b"> 1945<br>
            <input type="radio" name = "question-6" value = "6c"> 1946<br>
            <input type="radio" name = "question-6" value = "6d"> 1947<br><br>
            <label for="question-7"> Q.7 The IMF's primary mission is to ensure the stability of the international?</label><br>
            <input type="radio" name = "question-7" value = "7a"> Money Exchange System<br>
            <input type="radio" name = "question-7" value = "7b"> Money Exchange Rate<br>
            <input type="radio" name = "question-7" value = "7c"> Monetary Policy<br>
            <input type="radio" name = "question-7" value = "7d"> Monetary System<br><br>
            <label for="question-8"> Q.8 International Monetary Fund (IMF) provides loans to member countries that are experiencing problems with?</label><br>
            <input type="radio" name = "question-8" value = "8a"> Excessive Loans<br>
            <input type="radio" name = "question-8" value = "8b"> Balance of Payments<br>
            <input type="radio" name = "question-8" value = "8c"> Poverty<br>
            <input type="radio" name = "question-8" value = "8d"> Infrastructure Development.<br><br>
            <label for="question-9"> Q.9 The return that is forgone by investing in a project instead of investing in a financial market at the same level of risk is known as?</label><br>
            <input type="radio" name = "question-9" value = "9a"> Capital Saving<br>
            <input type="radio" name = "question-9" value = "9b"> Opportunity Cost<br>
            <input type="radio" name = "question-9" value = "9c"> Opportunity Saving<br>
            <input type="radio" name = "question-9" value = "9d"> Internal Rate of Return<br><br>
            <label for="question-10"> Q.10 Which from the following derivative is not traded on exchanges?</label><br>
            <input type="radio" name = "question-10" value = "10a"> Forward<br>
            <input type="radio" name = "question-10" value = "10b"> Future<br>
            <input type="radio" name = "question-10" value = "10c"> Bond<br>
            <input type="radio" name = "question-10" value = "10d"> Option<br><br>
            <label for="question-11"> Q.11 An Investment is believed to be risky if it(s):</label><br>
            <input type="radio" name = "question-11" value = "11a"> is dangerous<br>
            <input type="radio" name = "question-11" value = "11b"> has low returns<br>
            <input type="radio" name = "question-11" value = "11c"> returns are uncertain<br>
            <input type="radio" name = "question-11" value = "11d"> raw material is unavailable<br><br>
            <label for="question-12"> Q.12 The World Bank has two goals: to promote shared prosperity in a sustainable way, and to?</label><br>
            <input type="radio" name = "question-12" value = "12a"> End Extreme Poverty<br>
            <input type="radio" name = "question-12" value = "12b"> Reduce Difference between Rich and Poor<br>
            <input type="radio" name = "question-12" value = "12c"> Invest on Health and Education<br>
            <input type="radio" name = "question-12" value = "12d"> Combat Deadliest Diseases<br><br>
            <label for="question-13"> Q.13 The World Bank provides loans and grants to pursue?</label><br>
            <input type="radio" name = "question-13" value = "13a"> Balance of Payments<br>
            <input type="radio" name = "question-13" value = "13b"> Capital Projects<br>
            <input type="radio" name = "question-13" value = "13c"> Exports<br>
            <input type="radio" name = "question-13" value = "13d"> Education and Health related Projects<br><br>
            <label for="question-14"> Q.14 GATT is an abbreviation for:</label><br>
            <input type="radio" name = "question-14" value = "14a"> General Agreement on Tranport and Trade<br>
            <input type="radio" name = "question-14" value = "14b"> General Agreement on Tariffs and Trade<br>
            <input type="radio" name = "question-14" value = "14c"> Generally Accepted Telegraphic Transfer<br>
            <input type="radio" name = "question-14" value = "14d"> Generally Accepted on Trade and Telegraph<br><br>
            <label for="question-15"> Q.15 The Headquarters of World Trade Organisation (WTO) are located in?</label><br>
            <input type="radio" name = "question-15" value = "15a"> London<br>
            <input type="radio" name = "question-15" value = "15b"> New York<br>
            <input type="radio" name = "question-15" value = "15c"> Washington<br>
            <input type="radio" name = "question-15" value = "15d"> Geneva<br><br>
           
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
        correctAnswer: "2a"
    },
    {
        question: "question-3",
        correctAnswer: "3c"
    },
    {
        question: "question-4",
        correctAnswer: "4b"
    },
    {
        question: "question-5",
        correctAnswer: "5d"
    },
    {
        question: "question-6",
        correctAnswer: "6a"
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
        correctAnswer: "9b"
    },
    {
        question: "question-10",
        correctAnswer: "10a"
    },
    {
        question: "question-11",
        correctAnswer: "11c"
    },
    {
        question: "question-12",
        correctAnswer: "12a"
    },
    {
        question: "question-13",
        correctAnswer: "13b"
    },
    {
        question: "question-14",
        correctAnswer: "14b"
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
        careers = "BCom (Honours), BCom in Accounting and Taxation, Statistics, Management Accounting & International Finance, Accounting, Applied Economics, Banking & Finance, etc.";
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