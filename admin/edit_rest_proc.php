<?php
	
	
	include("conn.php");
	
	$id=$_POST['id'];
	$cid=$_POST['cid'];
	
	$price=$_POST['price'];
	$people=$_POST['people'];
	
	
		$file=$_FILES["file"]["name"];
		move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
		if($_FILES["file"]["name"]=="")
		{
			$sql="update sub_cat set cid=$cid,price='$price',people='$people' where id=$id";
			echo $sql;
		}
		else
		{
			$sql="update sub_cat set cid=$cid,t_img='$file',price='$price',people='$people' where id=$id";
			
		}
	$result=mysql_query($sql,$conn);
	echo $result;
	if($result)
	{
			header("location:rest_table.php");
	}

	?>