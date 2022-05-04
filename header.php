<?php

session_start();

$con = mysqli_connect("localhost","root","","dinetime");

$sql = "select * from reserve_table";
$query = mysqli_query($con,$sql);
while($result = mysqli_fetch_array($query)){

	// echo '  sname = '.$result['sname'];
	// echo '  name = '.$result['name'];
	// echo '  time = '.$result['time'];
	// echo '  end time = '.$result['end_time'].'<br>';
	
}
$endtime = $result['end_time'];
$sql1 = "delete from reserve_table where end_time<=NOW()";
$query1 = mysqli_query($con,$sql1);
// if($query1){
// 	echo "data deleted";
// }
// else
// echo "data not deleted";

?>

<div>

<div class="row">
	<nav class="navbar navbar-fixed-top">
	<div class="container">
<div class="navbar-brand">
			<img  src="images/tete-restaurant-vector-logo copy.PNG" alt="dinetime"></img>
		</div>		
			<ul class="nav navbar-nav">	
			
			<li><a href="index.php"> HOME </a></li>
			<li><a href="about_us.php">ABOUT US </a></li> 
-

			<li><a id="myBtn">SIGN UP</a> </li>
			<li><a  href="login.php" id="signup"> LOGIN  </a></li>
			<!-- The Modal -->
			<div id="myModal" class="modal">

			  <!-- Modal content -->
			<div class="popup-content">
			  	<div class="modal-header">
			   		<span class="close">&times;</span>
			   			SIGN UP
			   	</div>
				<div class="modal-body">  	
					<div class="sap_tab">
						<div class="agile-tb">

						<form action="sign_up.php" method="POST">				
						<input placeholder="Name" name="name" type="text" required="">
					<input placeholder="Address" name="add" type="text" required="">	
					<input placeholder="Email" name="email" type="email" required="">	
					<input placeholder="Password" name="pwd" type="password" required="">	
					<input placeholder="Confirm Password" name="cpwd" type="password" required="">
					<a href="#" class="frgt-pwd">Forgot Password ?</a>
					

					<input type="submit" value="Sign up"/>
				</form>
			    		</div>
		 			</div>	
 				</div>
			   		<!-- <div class="popup-form">
			   		 	<input class="form-control form-group login-textbox" type="text" name="email" placeholder="Email Id">
			   			 <input class="form-control form-group login-textbox" type="text" name="pwd" placeholder="Password">
			   			 <button class="btn-group-lg btn-block login-btn">Login</button>
			   			 <a style="margin-left: 34%; font-family:Opan Sans; font-size:16px; color: #888;" class="text-center" href="#">Forgot Password ?</a>
			   		</div> -->

			</div>

			</div>

			<!-- end modal -->

			<li> <img src="images/telephone.png" height="22px" width="21px" alt="telephone" /></li>
			<li> +91 2673842 </li>
		
			</ul>
       
		</div>
	</div>	
	</nav>
	
</div>
