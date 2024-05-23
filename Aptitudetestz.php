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
        <form id="test-form">
            <label for="question-1"> Q.1 A person crosses a 600 m long street in 5 minutes. What is his speed in km per hour?</label><br>
            <input type="radio" name = "question-1" value = "1a">3.6<br>
            <input type="radio" name = "question-1" value = "1b">7.2 <br>
            <input type="radio" name = "question-1" value = "1c">8.4 <br>
            <input type="radio" name = "question-1" value = "1d">10 <br><br>
            <label for="question-2"> Q.2 If a person walks at 14 km/hr instead of 10 km/hr, he would have walked 20 km more. The actual distance travelled by him is:</label><br>
            <input type="radio" name = "question-2" value = "2a">50 km <br>
            <input type="radio" name = "question-2" value = "2b">56 km <br>
            <input type="radio" name = "question-2" value = "2c">70 km <br>
            <input type="radio" name = "question-2" value = "2d">80 km <br><br>
            <label for="question-3"> Q.3 Find the correct trigonometric identity. </label><br>
            <input type="radio" name = "question-3" value = "3a">cos2 θ = 1 – sin2 θ <br>
            <input type="radio" name = "question-3" value = "3b">cos2 θ = 1 + sin2 θ <br>
            <input type="radio" name = "question-3" value = "3c">tan2 θ + sec2 θ = 1 <br>
            <input type="radio" name = "question-3" value = "3d">tan2 θ = sec2 θ + 1  <br><br>
            <label for="question-4"> Q.4 In an Arithmetic Progression, if a = 28, d = -4, n = 7, then an is:</label><br>
            <input type="radio" name = "question-4" value = "4a">4 <br>
            <input type="radio" name = "question-4" value = "4b">5 <br>
            <input type="radio" name = "question-4" value = "4c">3 <br>
            <input type="radio" name = "question-4" value = "4d">7 <br><br>
            <label for="question-5"> Q.5 A right triangle with sides 3 cm, 4 cm and 5 cm is rotated the side of 3 cm to form a cone. The volume of the cone so formed is:</label><br>
            <input type="radio" name = "question-5" value = "5a">12 cm3 <br>
            <input type="radio" name = "question-5" value = "5b">15 cm3 <br>
            <input type="radio" name = "question-5" value = "5c">16 cm3 <br>
            <input type="radio" name = "question-5" value = "5d">20 cm3 <br><br>
            <label for="question-6"> Q.6 The nucleus of an atom consists of</label><br>
            <input type="radio" name = "question-6" value = "6a"> Electrons and Neutrons<br>
            <input type="radio" name = "question-6" value = "6b"> Electrons and Protons<br>
            <input type="radio" name = "question-6" value = "6c"> Protons and Neutrons<br>
            <input type="radio" name = "question-6" value = "6d"> All of the above<br><br>
            <label for="question-7"> Q.7 The number of moles of solute present in 1 kg of a solvent is called its</label><br>
            <input type="radio" name = "question-7" value = "7a"> molality<br>
            <input type="radio" name = "question-7" value = "7b"> molarity<br>
            <input type="radio" name = "question-7" value = "7c"> normality<br>
            <input type="radio" name = "question-7" value = "7d"> formality<br><br>
            <label for="question-8"> Q.8 The number of d-electrons in Fe2+ (Z = 26) is not equestion-ual to that of</label><br>
            <input type="radio" name = "question-8" value = "8a"> p-electrons in Ne(Z = 10)<br>
            <input type="radio" name = "question-8" value = "8b"> s-electrons in Mg(Z = 12)<br>
            <input type="radio" name = "question-8" value = "8c"> d-electrons in Fe(Z = 26)<br>
            <input type="radio" name = "question-8" value = "8d"> p-electrons in CI(Z = 17)<br><br>
            <label for="question-9"> Q.9 The metal used to recover copper from a solution of copper sulphate is</label><br>
            <input type="radio" name = "question-9" value = "9a"> Na<br>
            <input type="radio" name = "question-9" value = "9b"> Ag<br>
            <input type="radio" name = "question-9" value = "9c"> Hg<br>
            <input type="radio" name = "question-9" value = "9d"> Fe<br><br>
            <label for="question-10"> Q.10 The most electronegative element among the following is</label><br>
            <input type="radio" name = "question-10" value = "10a"> Na<br>
            <input type="radio" name = "question-10" value = "10b"> Br<br>
            <input type="radio" name = "question-10" value = "10c"> F<br>
            <input type="radio" name = "question-10" value = "10d"> O<br><br>
            <label for="question-11"> Q.11 Out of the following items, which one is shown in the Receipts and Payments Account?</label><br>
            <input type="radio" name = "question-11" value = "11a"> Outstanding Salary<br>
            <input type="radio" name = "question-11" value = "11b"> Depreciation<br>
            <input type="radio" name = "question-11" value = "11c"> Life Membership Fees<br>
            <input type="radio" name = "question-11" value = "11d"> Accrued Subscription<br><br>
            <label for="question-12"> Q.12 A draws ₹ 1,000 per month on the last day of every month. If the rate of interest is 5% p.a., then the total interest on drawings will be :</label><br>
            <input type="radio" name = "question-12" value = "12a"> ₹ 325<br>
            <input type="radio" name = "question-12" value = "12b"> ₹ 275<br>
            <input type="radio" name = "question-12" value = "12c"> ₹ 300<br>
            <input type="radio" name = "question-12" value = "12d"> ₹ 350<br><br>
            <label for="question-13"> Q.13 The term financial statements includes:</label><br>
            <input type="radio" name = "question-13" value = "13a"> Statement of Profit & Loss<br>
            <input type="radio" name = "question-13" value = "13b"> Balance Sheet<br>
            <input type="radio" name = "question-13" value = "13c"> Statement of Profit & Loss and Balance Sheet<br>
            <input type="radio" name = "question-13" value = "13d"> None of these<br><br>
            <label for="question-14"> Q.14 Profitability Ratios are generally expressed in :</label><br>
            <input type="radio" name = "question-14" value = "14a"> Simple Ratio<br>
            <input type="radio" name = "question-14" value = "14b"> Percentage<br>
            <input type="radio" name = "question-14" value = "14c"> Times<br>
            <input type="radio" name = "question-14" value = "14d"> None of these<br><br>
            <label for="question-15"> Q.15 Share Application Account is :</label><br>
            <input type="radio" name = "question-15" value = "15a"> Personal Account<br>
            <input type="radio" name = "question-15" value = "15b"> Real Account<br>
            <input type="radio" name = "question-15" value = "15c"> Nominal/ Account<br>
            <input type="radio" name = "question-15" value = "15d"> None of these<br><br>
            <label for="question-16"> Q.16 The Paithan (Jayakwadi) Hydro-electric project, completed with the help of Japan, is on the river</label><br>
            <input type="radio" name = "question-16" value = "16a"> Ganga<br>
            <input type="radio" name = "question-16" value = "16b"> Cauvery<br>
            <input type="radio" name = "question-16" value = "16c"> Narmada<br>
            <input type="radio" name = "question-16" value = "16d"> Godaveri<br><br>
            <label for="question-17"> Q.17 The percentage of irrigated land in India is about</label><br>
            <input type="radio" name = "question-17" value = "17a"> 45<br>
            <input type="radio" name = "question-17" value = "17b"> 65<br>
            <input type="radio" name = "question-17" value = "17c"> 35<br>
            <input type="radio" name = "question-17" value = "17d"> 25<br><br>
            <label for="question-18"> Q.18 Under Akbar, the Mir Bakshi was requestion-uired to look after</label><br>
            <input type="radio" name = "question-18" value = "18a"> Military Affairs<br>
            <input type="radio" name = "question-18" value = "18b"> The state Treasury<br>
            <input type="radio" name = "question-18" value = "18c"> The Royal household<br>
            <input type="radio" name = "question-18" value = "18d"> The Land Revenue System<br><br>
            <label for="question-19"> Q.19 The system of competitive examination for civil service was accepted in principle in the year</label><br>
            <input type="radio" name = "question-19" value = "19a"> 1833<br>
            <input type="radio" name = "question-19" value = "19b"> 1853<br>
            <input type="radio" name = "question-19" value = "19c"> 1858<br>
            <input type="radio" name = "question-19" value = "19d"> 1882<br><br>
            <label for="question-20"> Q.20 The percentage of earth surface covered by India is</label><br>
            <input type="radio" name = "question-20" value = "20a"> 2.4<br>
            <input type="radio" name = "question-20" value = "20b"> 3.4<br>
            <input type="radio" name = "question-20" value = "20c"> 4.4<br>
            <input type="radio" name = "question-20" value = "20d"> 5.4<br><br>
            <label for="question-21"> Q.21 Movement of cell against concentration gradient is called</label><br>
            <input type="radio" name = "question-21" value = "21a"> Osmoasis<br>
            <input type="radio" name = "question-21" value = "21b"> Active Transport<br>
            <input type="radio" name = "question-21" value = "21c"> Diffusion<br>
            <input type="radio" name = "question-21" value = "21d"> Passive Transport<br><br>
            <label for="question-22"> Q.22 Photosynthesis generally takes place in which parts of the plant?</label><br>
            <input type="radio" name = "question-22" value = "22a"> Leaf and other chloroplast bearing parts<br>
            <input type="radio" name = "question-22" value = "22b"> Stem and Leaf<br>
            <input type="radio" name = "question-22" value = "22c"> Roots and chloroplast bearing parts<br>
            <input type="radio" name = "question-22" value = "22d"> Bark and Leaf<br><br>
            <label for="question-23"> Q.23 Most fish do not sink in water because of the presence of (w)swim bladder (x)air bladder (y)air sacs (z)air in spongy bones</label><br>
            <input type="radio" name = "question-23" value = "23a"> w and x<br>
            <input type="radio" name = "question-23" value = "23b"> x and y<br>
            <input type="radio" name = "question-23" value = "23c"> y and z<br>
            <input type="radio" name = "question-23" value = "23d"> w, y and z<br><br>
            <label for="question-24"> Q.24 Plants absorb dissolved nitrates from soil and convert them into</label><br>
            <input type="radio" name = "question-24" value = "24a"> Free Nitrogen <br>
            <input type="radio" name = "question-24" value = "24b"> Urea<br>
            <input type="radio" name = "question-24" value = "24c"> Ammonia<br>
            <input type="radio" name = "question-24" value = "24d"> Proteins<br><br>
            <label for="question-25"> Q.25 Plant development is influenced by</label><br>
            <input type="radio" name = "question-25" value = "25a"> Quality of Light only<br>
            <input type="radio" name = "question-25" value = "25b"> Quality and Quantity of Light<br>
            <input type="radio" name = "question-25" value = "25c"> Quality and duration of Light<br>
            <input type="radio" name = "question-25" value = "25d"> Quality, Quantity and Duration of Light<br>
            <br><br>
            
            <input type="reset" name = "reset" value="Reset" class="w3-button w3-blue w3-padding-large w3-large w3-margin-top" style="width:auto;">
            <button type="submit" name="submit" value = "submit" onclick = "showHtmlDiv()" class="w3-button w3-blue w3-padding-large w3-large w3-margin-top" style="width:auto;">Submit</button>
            
        </form>
        <div id="results"></div>
        </div>
        <div id="careers"></div>
        </div>
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
        correctAnswer: "3a"
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
        correctAnswer: "6c"
    },
    {
        question: "question-7",
        correctAnswer: "7a"
    },
    {
        question: "question-8",
        correctAnswer: "8d"
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
        correctAnswer: "12b"
    },
    {
        question: "question-13",
        correctAnswer: "13c"
    },
    {
        question: "question-14",
        correctAnswer: "14b"
    },
    {
        question: "question-15",
        correctAnswer: "15a"
    },
    {
        question: "question-16",
        correctAnswer: "16d"
    },
    {
        question: "question-17",
        correctAnswer: "17c"
    },
    {
        question: "question-18",
        correctAnswer: "18a"
    },
    {
        question: "question-19",
        correctAnswer: "19b"
    },
    {
        question: "question-20",
        correctAnswer: "20a"
    },
    {
        question: "question-21",
        correctAnswer: "21b"
    },
    {
        question: "question-22",
        correctAnswer: "22a"
    },
    {
        question: "question-23",
        correctAnswer: "23a"
    },
    {
        question: "question-24",
        correctAnswer: "24a"
    },
    {
        question: "question-25",
        correctAnswer: "25d"
    }
];

function submitAnswers(event) {
  event.preventDefault();
  let score = 0;
  let math_score = 0;
  let chem_score = 0;
  let acc_score = 0;
  let arts_score = 0;
  let bio_score = 0;
  
  const answers = [];
  questions.forEach((question, index) => {
    const selectedAnswer = document.querySelector(`input[name="question-${index + 1}"]:checked`);
    if (selectedAnswer) {
      answers.push(selectedAnswer.value);
      if (selectedAnswer.value === question.correctAnswer) {
        score++;
        if(index >= 0 && index < 5)
        {
            math_score++;
        }
        if(index >= 5 && index < 10)
        {
            chem_score++;
        }
        if(index >= 10 && index < 15)
        {
            acc_score++;
        }
        if(index >= 15 && index < 20)
        {
            arts_score++;
        }
        if(index >= 20 && index < 25)
        {
            bio_score++;
        }
        else 
        {
            answers.push(null);
        }
      }
    } else {
      answers.push(null);
    }
  });
  
var msg1 = new String();
var msg2 = new String();
var msg3 = new String();
var msg4 = new String();
var msg5 = new String();
var msg6 = new String();
  
    if(math_score > 2)
    {
        msg1 = "Education/Technlogy: Mechanical, Electrical, CS, IT, ICT; Science: Mathematics";
    }
    if(chem_score > 2)
    {
        msg2 = "Chemical Engineering, Sciences in Chemistry";
    }
    if(acc_score > 2)
    {
        msg3 = "Accounting and Commerce, Business Administration";
    }
    if(arts_score > 2)
    {
        msg4 = "Arts, Honours, Journalism, Media";
    }
    if(bio_score > 2)
    {
        msg5 = "Biology and Medical Sciences";
    }
    else if(math_score < 3 && chem_score < 3 && acc_score < 3 && arts_score < 3 && bio_score < 3)
    {
        msg6 = "You have scored Low, Please try again later";
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
    Total Score: ${score} / ${questions.length} <br> <br>
    Math Score: ${math_score} / 5 <br> <br> 
    Chem Score: ${chem_score} / 5 <br> <br> 
    Acc Score: ${acc_score} / 5 <br> <br>
    Arts Score: ${arts_score} / 5 <br> <br>
    Bio Score: ${bio_score} / 5 <br> <br>
    </h3>
    </div>
    
  `;

  const careersElement = document.querySelector("#careers");
  careersElement.innerHTML = `
    <div>
    <h2><strong>According to your test performance, following are the suggested careers:</strong></h2>
    <h3>${msg1}</h3>
    <h3>${msg2}</h3>
    <h3>${msg3}</h3>
    <h3>${msg4}</h3>
    <h3>${msg5}</h3>
    <h3>${msg6}</h3>
    </div>
    
  `;
  

}

const testForm = document.querySelector("#test-form");
testForm.addEventListener("submit", submitAnswers);


</script>

</body>
</html>