<?php

include("conn.php");

$id=$_GET["id"];
$sql = "delete from menu where m_id=$id";
$result=mysql_query($sql,$conn);
if ($result==TRUE)
	header("location:menu_table.php");
?>