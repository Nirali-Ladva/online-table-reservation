<?php

			include('conn.php');
		
		$name=$_POST['name'];
		
		$add=$_POST['add'];
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		$cpwd=$_POST['cpwd'];
		$sql="insert into user values(' ','$name','$add','$email','$pwd','$cpwd')";
		$result=Mysqli_query($link,$sql);
		header("location:index.php");

			
?>
