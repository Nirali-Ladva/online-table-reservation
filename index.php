<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/form_css.css">
	<link rel="stylesheet" type="text/css" href="css/hover.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <meta charset="utf-8">
    
</head>
<body>

	 
	<!--header-start-->

		<?php include("header.php"); ?>
	<!--end-header-->
 
	<!--banner-->
	 					
		<section class="banner">
				<div class="container">
				<div class="row">
					<div class="banner-content">
							<?php
if(isset($_GET['full']))
{	
?>					
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong=900></strong> Tables are full!
</div>
<?php
}
	if(isset($_GET['time']))
	{
		$time=$_GET['time'];

	?>
	<div class="alert alert-success" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  	<strong=900></strong> Tables is booked at <?php echo $time; ?>!
	</div>
<?php 
	}
?>
					 Make restaurant reservations the easy way
					</div>
					
						<a class="reserve-btn" href="reserve-tbl.php">Reserve Now</a>
					 
				</div>
				</div>
			</section>
			
			
	 
	
	<!--end-banner-->	

	<!--main-content--> 
	<div class="container">
	 	<div class="col-md-12 col-sm-12">
			<div class="dinename">DineTime
				<hr class="line"></hr>
				<p class="text">We provide a way by which you can easily book a table in restaurant.</br> Why spend time queuing for a table when you could book a table from anywhere?
				</br>Save time. Save money.
				</p>
			</div>
	 	</div>
		

		<div class="row city-img">

			<div class="col-md-4 h-img">
				<div class="view view-second">
				<a href="#"><img class=" img-responsive r-img" src="images/rest-1(1).jpg" alt="DineTime"></a>
				<div class="mask"></div>
	                <div class="content">
	                    <a href="city_rest.php?cid=1"><h2>green-chilli retaurent-Mumbai</h2></a>
	                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	                    <a href="#" class="info">Read More</a>
	                </div>
	            </div>
			</div>

			<div class="col-md-4 h-img">
				<div class="view view-second">
				<a href="#"><img class="img-responsive r-img" src="images/rest-2/rest-2(2).jpg" alt="DineTime"></a>
				<div class="mask"></div>
	                <div class="content">
	                    <a href="city_rest.php?cid=2"><h2>bluespin restaurent-Pune </h2></a>
	                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	                    <a href="#" class="info">Read More</a>
	                </div>
	            </div>
	        </div>

			
			<div class="col-md-4 h-img">
				<div class="view view-second">
				<a href="#"><img class="img-responsive r-img" src="images/rest-3(3).jpg" alt="DineTime"></a>
				<div class="mask"></div>
	                <div class="content">
	                    <a href="city_rest.php?cid=3"><h2>royal restaurent-Jaipur</h2></a>
	                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	                    <a href="#" class="info">Read More</a>
	                </div>
	            </div>
			</div>
		
		</div>

		<div class="row">

			<div class="col-md-4 h-img">
				<div class="view view-second">
				<a href="#"><img class="img-responsive r-img" src="images/rest-4(3).jpg" alt="DineTime"></a>
					<div class="mask"></div>
	                <div class="content">
	                    <a href="city_rest.php?cid=4"><h2>fodee restaurent-Delhi</h2></a>
	                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	                    <a href="#" class="info">Read More</a>
	                </div>
		        </div>
			</div>

			<div class="col-md-4 h-img">
				<div class="view view-second">
					<a href="#"><img class="r-img" src="images/rest-5(7).jpg" alt="DineTime"></a>
					<div class="mask"></div>
	                <div class="content">
	                    <a href="city_rest.php?cid=5"><h2>Grillville restaurent-Ahemdabad</h2></a>
	                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	                    <a href="#" class="info">Read More</a>
	                </div>
		        </div>
			</div>

			<div class="col-md-4 h-img">
			   <div class="view view-second">
			   	<img class="r-img" src="images/rest-6(4).jpg" alt="DineTime"></img>
			   		<div class="mask"></div>
	                <div class="content">
	                 <a href="city_rest.php?cid=6"><h2>soho restaurent-Jamnagar</h2></a>
	                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	                    <a href="#" class="info">Read More</a>
	                </div>
		        </div>
			</div>

		</div>
	</div>
	<!-- end main content  -->
	
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// auto close alert
window.setTimeout(function() {
    $(".alert").fadeTo(70, 0).slideUp(80, function(){
        $(this).remove(); 
    });
},2000);
</script>


	<!--footer part-->
	<?php include("footer.php"); ?>
	
	<!--end footer-->
 </body>
</html>