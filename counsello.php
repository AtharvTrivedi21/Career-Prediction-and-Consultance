<?php
if (isset($_POST['clog']))
{
    $c1 = $_POST['cname'];
    $c2 = $_POST['cpsw'];
    
    $cw = "coun";
    $cp = "coun1";

    if($c1 == $cw && $c2 == $cp)
    {
        header("location:clink.php");
    }
    else
    {
        $message = "Wrong admin name Or Password";
        echo "<script type='text/javascript'>window.alert('$message');</script>";
    }
}
?>