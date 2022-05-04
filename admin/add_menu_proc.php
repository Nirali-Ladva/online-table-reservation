<?php

include("conn.php");

$m_id=$_POST['id'];	

$mname=$_POST['mname'];
$d_type=$_POST['d_type'];
$mprice=$_POST['price'];
$file=$_FILES["file"]["name"];
		move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
$sql="insert into menu values('','$d_type','$mname','$file','$mprice')";

$result=mysql_query($sql,$conn);
if ($result==TRUE)
	header("location:menu_table.php");

?>
