<?php

include("conn.php");

$id=$_GET["id"];
$sql = "delete from user where id=$id";
$result=mysql_query($sql,$conn);
if ($result==TRUE)
	header("location:user_table.php");
?>