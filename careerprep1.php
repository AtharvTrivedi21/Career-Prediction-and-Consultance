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
<?php include('navbar.php');?>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-blue w3-center" style="padding:68px 16px 28px 16px">
  <h1 class="w3-margin w3-jumbo"><strong>Career preparation tips</strong></h1>
 <!-- <p class="w3-xlarge">Template by w3.css</p>-->
  </header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h3><b><u>Engineering:</b></U></h3>
      <p><b><u>1.Pursue your interests:</b></U>
      <br>
        As an engineer, it's important that you pursue your interests and do projects that interest you. Being passionate about your career can help you feel motivated and excited about your everyday tasks. In order to be passionate about your job as an engineer, try choosing a job that challenges and excites you. There are also several types of engineers, so you can select a field of engineering in which you're interested.
        <br>
       <b> <u>2.Continue practicing and learning:</b></U>
       <br>Even after you finish your education, it's good practice to continue practicing and learning. Engineering is a growing field that changes often. Researching and learning new information helps you stay updated on new engineering insights. You can also learn by practicing and completing projects. For example, try doing personal projects so you can study topics in engineering that are outside your current field.
        <br>
       <b> <u>3. Find a mentor:</b></U>
       <br>  Whether you're new to the field or you have a few years of experience as an engineer, consider finding a mentor or a coach. Mentors are professionals with several years of experience in their industry. They can answer your questions and give you advice. They may even tell you about job openings or write a letter of recommendation for you. While engineering is a rewarding career, it can also be complex, so having a mentor to guide you may be beneficial when starting in the industry.
        <br>
        <b><u>4.Collaborate with others:</b></U>
        <br>Depending on the company or your job title, you may work by yourself or with other engineers. Collaborating with others is a useful way to learn and gain more experience. Your coworkers may know information or a skill that you don't, so collaborating with them allows everybody to share their talents and knowledge. If you work independently, you can still collaborate with others by attending engineering workshops and conferences.
        <br>
       <b><u> 5.Create a career path:</b></U>
       <br>  As you start your job in engineering, try creating a career path. A career path is a sequence of professional steps you take in order to reach your final goal. Carer paths are helpful to make because they help you define and achieve your objectives. For example, if a long-term goal of yours is to become an aerospace engineer, then your career path is steps you'd take to accomplish that. To make a career path, define some of your goals and take a look at your current situation. Then, create a series of steps that help you reach your goals.
        <br>
        <b><u>6. Embrace failure:</b></U>
        <br> In engineering, you can use your errors as learning opportunities. For example, if you do a math problem incorrectly, it can lead to a malfunction in production. You can learn from this error to improve yourself as an engineer. Learning from your mistakes shows that you're a responsible professional who's trying to improve.
        <br>
      <b> <u>7. Take new responsibilities:</b></U>
      <br>If you want to advance as an engineer, take on new responsibilities. As an engineer, your employer typically assigns you tasks. When possible, try to ask for additional duties. This shows your manager that you're an ambitious engineer who's proactive and motivated. Taking more projects also helps your gain new skills and experience, which you can add to your resume.
        <br>
       <b> <u>8. Develop your soft skills:</b></U>
       <br>Being an engineer requires several hard skills, like math and science. While these skills are important to use and improve, remember to develop your soft skills too. Soft skills are characteristics you develop over a period of time, such as leadership and communication. It's helpful to improve your soft skills so you can collaborate efficiently with colleagues, managers and even clients.
        <br>
        <b><u>9. Broaden your experience:</b></U>
        <br>As an engineer, it's important to broaden your experience by expanding your skill set and completing a variety of projects. Being an engineer with diverse abilities helps you look impressive compared to other candidates, which may make you more employable. For example, a company might hire a professional who has experience in several fields of engineering compared to someone who has very little experience. Try taking a variety of assignments and accepting different roles to broaden your credentials.
        <br>
       <b> <u>10. Recognize your accomplishments:</b></U>
       <br> Try to recognize your accomplishments as an engineer. Whether it's a manager complimenting your work ethic or a client praising your invention, record your achievements. The point of doing this is to build your confidence as an engineer. You can also use your list of accomplishments when updating your resume or when asking for a promotion.
        
        </p><br>

      <h3><b><u>Medical:</b></u></h3>
      <p><b><u>1.Academic Excellence:</b></U>
      <br> 
      a) Focus on your studies and maintain a strong academic record. This includes excelling in science subjects such as biology, chemistry, and physics.
      <br> 
      b) Develop excellent study habits and time management skills to effectively balance your coursework and other commitments.
      <br> 
      c) Stay updated with advancements in medical research and healthcare by reading scientific journals, attending seminars, and participating in relevant academic activities.
    <br> <br>
        <b><u>2. Gain Practical Experience:</b></U>
        <br> 
        a)Seek opportunities to gain hands-on experience in the medical field. Consider volunteering at hospitals, clinics, or research institutions.
        <br> 
        b) Look for internships or shadowing programs that allow you to observe healthcare professionals in their daily work. This will provide valuable insights into the medical profession.
        <br> 
        c)Consider participating in research projects or joining scientific clubs and organizations to further enhance your knowledge and skills.
        <br> 
       <b><u>3. Build a Strong Foundation:</b></U>
        <br> 
        a) Develop a strong foundation in basic medical knowledge and terminology. Familiarize yourself with medical textbooks, online resources, and reputable websites.
        <br> 
        b)Consider enrolling in pre-medical courses or programs that provide a comprehensive understanding of the medical field.
        <br> 
        c) Develop critical thinking and problem-solving skills, as these are essential for diagnosing and treating patients.
        <br>  <br>
       <b> <u>4. Prepare for Medical Entrance Exams:</b></U>
            <br>
        a) Research and familiarize yourself with the requirements and criteria for medical school admission. Understand the specific entrance exams required, such as the MCAT (Medical College Admission Test) in the United States.
        <br>
        b) Start early and dedicate sufficient time to prepare for these exams. Utilize study resources, practice tests, and consider joining preparatory courses if needed.
        <br>
        c)Seek guidance from mentors, teachers, or professionals who can provide advice and support during the exam preparation process.
        <br> <br>
        
       <b> <u>5. Develop Soft Skills:</b></U>
        <br>
        a) Communication skills are crucial in the medical field. Work on improving your verbal and written communication skills, as well as your ability to empathize and connect with others.
        <br>
        b) Develop teamwork and leadership skills by participating in group projects, extracurricular activities, or community service initiatives.
        <br>
        c) Cultivate a strong sense of ethics, professionalism, and integrity. These qualities are highly valued in the medical profession.
        <br> <br>
        <b><u>6. Seek Mentorship and Guidance:</b></U>
        <br>
        a)Connect with mentors who are already established in the medical field. They can provide guidance, share their experiences, and offer valuable advice.
        <br>
        b)Network with professionals, attend medical conferences, and engage with medical organizations to expand your connections and learn more about the field.
        <br> <br>
        Remember, pursuing a career in medicine requires dedication, perseverance, and a genuine passion for helping others. Stay committed to your goals, seek opportunities for growth, and continuously strive to improve your skills and knowledge.
    </p><br>
      
      <h3><b><u>Arts:</b></u></h3>
      <p>
       Preparing for a career in the arts requires a combination of artistic skill, creativity, perseverance, and practical knowledge. Here are some tips to help you prepare for a career in the arts:
        <br> <br>
       <b><u> 1. Develop Your Artistic Skills:</b></U>
        <br>
        a)Focus on honing your artistic skills in your chosen medium, whether it's painting, drawing, sculpture, photography, writing, performing arts, or any other form of artistic expression.
        <br>
        b)Practice regularly and experiment with different techniques, styles, and materials to broaden your artistic abilities and develop a unique artistic voice.
        <br>
        c)Seek feedback and constructive criticism from mentors, teachers, or other artists to improve your work and gain different perspectives.
    <br> <br>
   <b> <u>2. Expand Your Knowledge:</b></U>
    <br>
    a) Study art history and familiarize yourself with the works of renowned artists from different periods and art movements. This will help you gain insights into different artistic styles, themes, and techniques.
    <br>
    b) Stay up to date with current trends and contemporary art practices by visiting art exhibitions, galleries, and museums. This will expose you to a variety of artistic expressions and inspire your own work.
    <br> <br>
   <b> <u>3. Pursue Formal Education:</b></U>
    <br>
    a) Consider pursuing a formal education in the arts. Look for reputable art schools, colleges, or universities that offer programs in your chosen field of interest. A degree in fine arts or a related discipline can provide you with a strong foundation and valuable learning experiences.
    <br>
    b)Take advantage of the resources and opportunities provided by your educational institution, such as access to art studios, workshops, and mentorship from experienced faculty members.
    <br> <br>
    <b><u>4. Build a Portfolio:</b></U>
    <br>
    a)Create a portfolio that showcases your best and most representative artwork. Select a variety of pieces that demonstrate your range of skills, creativity, and personal style.
    <br>
    b) Regularly update and refine your portfolio as you create new artwork. It's important to have a well-curated and professionally presented portfolio that highlights your strengths and interests.
    <br> <br>
       <b> <u>5. Gain Practical Experience:</b></U>
    <br>
    a)Seek opportunities to gain practical experience in your field of interest. This can include internships, apprenticeships, or assistantships with established artists, galleries, or arts organizations.
    <br>
    b)Participate in art competitions, exhibitions, and art fairs to showcase your work and gain exposure. These events can also provide networking opportunities and potential collaborations with other artists.
    <br> <br>
       <b> <u>6. Develop Business and Marketing Skills:</b></U>
    a)As an artist, it's important to develop business and marketing skills to promote and sell your work. Learn about art business practices, pricing, contracts, and copyright laws.
    <br>
    b) Build a professional online presence by creating a website or an online portfolio to showcase your work. Utilize social media platforms and online art communities to connect with fellow artists, art enthusiasts, and potential buyers.
    <br> <br>
   <b> <u>7. Seek Mentorship and Networking:</b></U>
    <br>
    a) Connect with experienced artists, art professionals, and mentors who can provide guidance, advice, and support throughout your artistic journey. Attend artist talks, workshops, and industry events to expand your network and learn from established artists.
    <br> <br>
   <b><u> 8. Embrace Continuous Learning:</b></U>
    <br>
    a) Art is an ever-evolving field, so it's important to stay open to learning and growth. Take workshops, attend classes, and engage in self-directed learning to explore new techniques, mediums, or artistic concepts.
    <br> <br>
    Remember, pursuing a career in the arts often requires dedication, perseverance, and the ability to handle rejections and criticism. Stay true to your artistic vision, keep creating, and actively seek opportunities to showcase and share your work with others.


      </p><br>

      <h3><b><u>Commerce:</b></u></h3>
      <p> Preparing for a career in commerce requires a combination of academic knowledge, practical skills, and a strong understanding of business principles. Here are some tips to help you prepare for a career in commerce:
        <br> <br>
        <b><u>1. Focus on Academics:</b></U>
        <br>
        a) Excel in your commerce-related subjects such as accounting, economics, business studies, finance, and mathematics. Develop a strong foundation in these areas by studying regularly and seeking clarification when needed.
            b)Stay updated with current business and economic news by reading financial newspapers, business magazines, and reputable online sources. This will help you understand the practical applications of commerce concepts.
            <br> <br>
           <b> <u>2. Gain Practical Experience:</b></U>
            <br>a)Seek opportunities to gain practical experience in the business world. Consider internships, part-time jobs, or volunteering in relevant fields such as accounting firms, financial institutions, marketing agencies, or business organizations.
            <br>b) Participate in student organizations, clubs, or competitions related to commerce and business. These activities provide hands-on experience, develop teamwork and leadership skills, and enhance your resume.
            <br> <br>
           <b> <u>3. Develop Analytical and Problem-Solving Skills:</b></U>
            <br> a) Commerce professionals need strong analytical and problem-solving abilities. Practice critical thinking by analyzing case studies, solving business-related problems, and applying mathematical and statistical concepts to real-world scenarios.
            <br>b)Develop your proficiency in using spreadsheet software such as Microsoft Excel. This will enable you to analyze data, create financial models, and make informed business decisions.
            <br> <br>
           <b> <u>4. Build Communication and Presentation Skills:</b></U>
            <br>a)Effective communication is crucial in commerce. Work on improving your written and verbal communication skills, as well as your ability to present information in a clear and concise manner.
            <br>b)Practice presenting your ideas, projects, or reports to improve your presentation skills. This will be valuable in meetings, client interactions, and public speaking opportunities.
            <br> <br>
           <b><u>5. Familiarize Yourself with Business Technology:</b></U>
            <br>a)Keep up with advancements in business technology and software applications. Develop proficiency in using tools such as enterprise resource planning (ERP) systems, customer relationship management (CRM) software, and financial analysis software.
            <br>b) Enhance your computer skills, including proficiency in spreadsheet and presentation software, data analysis tools, and basic programming concepts.
            <br> <br>
            <b><u>6. Networking and Professional Development:</b></U>
            <br>a) Build a professional network by attending industry events, career fairs, and networking sessions. Connect with professionals in your desired field, join relevant professional associations, and engage with alumni networks.
            <br>b) Seek mentorship opportunities from experienced professionals who can provide guidance, advice, and industry insights.
            <br>c)Engage in continuous professional development by attending seminars, workshops, and online courses to enhance your knowledge and stay updated with industry trends.
            <br> <br>
            <b><u>7. Consider Further Education and Certification:</b></U>
                <br>a)Depending on your career goals, consider pursuing advanced education such as a master's degree in commerce, business administration (MBA), or specialized certifications like Chartered Accountant (CA), Certified Financial Analyst (CFA), or Certified Management Accountant (CMA).
                <br>b) Research the specific requirements and qualifications in your desired field and explore the educational pathways and certifications that can enhance your career prospects.
            <br> <br>
            Remember, building a successful career in commerce requires a combination of academic knowledge, practical experience, and the ability to adapt to evolving business environments. Stay curious, be proactive in seeking learning opportunities, and develop a strong work ethic to excel in the field of commerce.
        </p><br>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-container w3-black w3-center w3-opacity w3-padding-14">
  <h1 class="w3-margin w3-xlarge"><b>Quote of the day:</b> "Education is the most powerful weapon which we can use to change the world."<br></h1>
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
