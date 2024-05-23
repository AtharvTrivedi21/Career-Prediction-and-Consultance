<?php
include('config.php');
if (isset($_POST['subreg'])) {

    $usernm = $_POST["uname"];
      $passwd = $_POST["psw"];
      $query = mysqli_query($conn,"SELECT * FROM `signup_table` where uname= '$usernm'");
      $row=mysqli_num_rows($query);
	    $fetch=mysqli_fetch_array($query);
      $query1 = mysqli_query($conn,"SELECT * FROM `signup_table` where psw= '$passwd'");
      $rowpas=mysqli_num_rows($query1);
	    $fetchpas=mysqli_fetch_array($query1);
      if($row > 0)
      {
        // session_start();
        // $_SESSION['username'] = $fetch('uname');
        $msg = "This Username already exists!";
        echo "<script type='text/javascript'>window.alert('$msg'); window.location.href='demox1r.php';</script>";       
        // header("location:demoproglog.php");
      }
      else if($rowpas > 0)
      {
        $msgpas = "This Password already exists!";
        echo "<script type='text/javascript'>window.alert('$msgpas'); window.location.href='demox1r.php';</script>";
      }
      else
      {
        $query = "INSERT INTO signup_table(uname, dob, email, mobno, psw)
        VALUES('$_POST[uname]','$_POST[dob]','$_POST[email]','$_POST[mobno]','$_POST[psw]')";
            mysqli_query($conn, $query);
            $show = mysqli_query($conn, "SELECT * FROM signup_table");
        
            $message = "you are now registered";
            echo "<script type='text/javascript'>window.alert('$message');</script>";
            //header('location:demox1r.php');
            mysqli_close($conn);
      }

}

?>