<?php

$conn=mysqli_connect("localhost","root","","websitedb");

if(!$conn)
{
    die('Error in Connection'.mysqli_error());
}
//mysqli_select_db($conn, "websitedb");
?>