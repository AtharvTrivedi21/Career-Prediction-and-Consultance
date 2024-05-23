<?php
	include ("config.php");
		if(isset($_POST['submit'])){
		$username = $_POST['uname'];
		$password = $_POST['psw'];
		$query = mysqli_query($conn,"SELECT * FROM `signup_table` where uname= '$username' and psw= '$password' ");
		$row=mysqli_num_rows($query);
		$fetch=mysqli_fetch_array($query);
		
		//while($result = mysqli_fetch_array($query)){
			if($row > 0){
				session_start();
				
				$_SESSION['admin'] = "san";
				$_SESSION['usernm'] = $fetch['uname'];
				
				$_SESSION['user'] = $fetch['uname'];
				
				header("location:demoproglog.php");
			}
			else
			{
			$message = "Wrong Username Or Password";
			echo "<script type='text/javascript'>window.alert('$message'); window.location.href='demox1r.php';</script>";
			
			}
		
		//}
	}
		
		
?>
