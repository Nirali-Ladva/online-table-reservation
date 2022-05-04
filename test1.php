<?php
//echo "gfhfghfgh";
$link=Mysql_connect("localhost","root","");
		Mysql_select_db("dinetime",$link);

		$sql="select * from reserve_table";
		$rs=mysql_query($sql,$link);
		//echo $rs;
	//	$result=mysql_fetch_array($rs);
		$row = mysql_fetch_array($rs);
			# code...
			//echo $row['end_time']."</br>";
			//date_default_timezone_set("America/New_York");

			//$t=mysql_num_rows($row1);
			//echo $t;
		
//$del="delete from reserve_table where NOW() >=".$row['end_time'];
		//	echo $del;
			//$row1=mysql_query($del,$link);
		//
		
//echo $row;
if($result = mysql_query($sql,$link)){

    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";

                echo "<th>id</th>";

                echo "<th>first_name</th>";

                echo "<th>last_name</th>";

                echo "<th>email</th>";

            echo "</tr>";

        while($row = mysql_fetch_array($result)){

            echo "<tr>";
$et = $row['end_time'];
          $del="delete from reserve_table ";
          	mysql_query($del,$link);
          		echo "<td>" . $del . "</td>";

                echo "<td>" . $row['sname'] . "</td>";

                echo "<td>" . $row['name'] . "</td>";

                echo "<td>" . $row['end_time'] . "</td>";

            echo "</tr>";

        }

        echo "</table>";

}}


		
?>