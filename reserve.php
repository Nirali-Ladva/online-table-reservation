<?php

session_start();
		
	include('conn.php');



		$id=$_POST['id'];
		$uid=$_SESSION['uid'];
		$sname=$_POST['sname'];
		$name=$_POST['name'];
		
		
		$time=$_POST['time'];
		

	//	$end_time="SELECT addtime($time,'01:30:00') as temp FROM `reserve_table` WHERE  id=1";

      //   $end_time=addtime($time,'01:30:00');

		$city=$_POST['city'];
		$people=$_POST['people'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$query="select * from reserve_table";
		$row3=mysqli_query($query,$link);
		$max_limit = 10;
		 $limit = mysqli_num_rows($row3);

		 if($limit > $max_limit)
		 {
		 	header("location:index.php?full=err");
		 }
		 else
		 {
		$sql="insert into reserve_table values(' ',$uid,'$sname','$name','$time',addtime('$time','01:30:00'),'$city','$people','$phone','$address')";
		$result=mysqli_query($link,$sql);
		if ($result==TRUE)
	
	// $end_time="SELECT addtime($time,'01:30:00') as temp FROM `reserve_table` WHERE  id=1";
			header("location:index.php?time=$time");
			}
	// $max_limit = 10;
	// $limit = mysqli_num_rows($query);
	// if($limit > $max_limit)
	// {
	// 	echo "tables are full!!";
	// }
	// else

	//	echo $sql;




?>