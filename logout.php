<?php

	session_start();
	unset($_SESSION['admin']);
	session_destroy();
	header("location:demox1r.php");

?>