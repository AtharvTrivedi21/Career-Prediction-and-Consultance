<?php
	include ("config.php");
		if(isset($_POST['Submit'])){
		$username = $_POST['login'];
		$password = $_POST['password'];
		$query = mysql_query("SELECT * FROM admin");
		while($result = mysql_fetch_array($query)){
			if($username == $result['username'] && $password == $result['password']){
				session_start();
				$_SESSION['admin'] = "san";
				$_SESSION['pass'] = $result['password'];
				$_SESSION['userid'] = $result['id'];
				header("location:dashboard.php");
			}
			else
			{
			$message = "Wrong Username Or Password";
echo "<script type='text/javascript'>window.alert('$message');</script>";
			
			}
		
		}
	}
		
		
?>
