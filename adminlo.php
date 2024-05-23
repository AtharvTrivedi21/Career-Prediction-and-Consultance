<?php
if (isset($_POST['adlog']))
{
    $a1 = $_POST['aname'];
    $a2 = $_POST['apsw'];
    
    $aw = "admin";
    $ap = "apass";

    if($a1 == $aw && $a2 == $ap)
    {
        header("location:testdbdisp.php");
    }
    else
    {
        $message = "Wrong admin name Or Password";
        echo "<script type='text/javascript'>window.alert('$message');</script>";
    }
}
?>