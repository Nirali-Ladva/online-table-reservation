<?php
$con = mysqli_connect("localhost","root","","dinetime");

$sql = "select * from reserve_table";
$query = mysqli_query($con,$sql);
while($result = mysqli_fetch_array($query)){

	echo '  sname = '.$result['sname'];
	echo '  name = '.$result['name'];
	echo '  time = '.$result['time'];
	echo '  end time = '.$result['end_time'].'<br>';
}
$endtime = $result['end_time'];
$sql1 = "delete from reserve_table where end_time<=NOW()";
$query1 = mysqli_query($con,$sql1);
if($query1){
	echo "data deleted";
}
else 
echo "data not deleted";

?>