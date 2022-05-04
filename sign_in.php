<?php
	 session_start();
	include('conn.php');

		if(isset($_POST['submit']))
		{
		
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$sql="select * from user where email='$email' AND password='$password'";
		$result=mysqli_query($link,$sql);
		
		$rows=mysqli_num_rows($result);
		$row2 = mysqli_fetch_array($result);
		if($row2 > 0)
		{
			// $_SESSION['uid']=$row2[0];
				$_SESSION['uid']=$row2[0];
			header("location:index.php");
			
		}
		
		else
		{
			header("location:login.php");
			
		}
		
		}
		

?>