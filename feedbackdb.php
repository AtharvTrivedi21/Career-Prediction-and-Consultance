<?php
session_start();
//include('logindemo2.php');
include('config.php');

$un = $_SESSION['user'];
//echo $un;
if (isset($_POST['subfeed'])) {
    $query = "INSERT INTO feedback_table(uname, userfeedback)
VALUES('$un','$_POST[userfeedback]')";
    mysqli_query($conn, $query);
    $show_feedback = mysqli_query($conn, "SELECT * FROM feedback_table");
   


}
mysqli_close($conn);
header("Location: feedback.php");
?>