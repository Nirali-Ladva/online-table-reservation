<?php
	
	
	include("conn.php");
	
	$id=$_POST['id'];
	
	$mname=$_POST['mname'];
	$mprice=$_POST['mprice'];
	echo $mname;
	echo $mprice;
	
		$file=$_FILES["file"]["name"];
		move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
		if($_FILES["file"]["name"]=="")
		{
			$sql="update menu set mname='$mname',price='$mprice'  where m_id=$id";
			echo $sql;
		}
		else
		{
			$sql="update menu set mname='$mname',price='$mprice' ,mimage='$file' where m_id=$id";
			
		}
	$result=mysql_query($sql,$conn);
	echo $result;
	if($result)
	{
			header("location:menu_table.php");
	}

	?>