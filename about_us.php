<!DOCTYPE html>
<html>
<head>	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/form_css.css">
	
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <meta charset="utf-8">
    
</head>

<!-- body section start -->
   
    <?php include("header.php"); ?>	 
<!--end-header-->
 
<!--banner-->

	<section class="banner2">
	 
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 banner-content banner2-content">
					 We love what can happen around the </br> restaurant table.
				</div>
			</div>
		</div>
	</div>

	</section>


<!-- end banner -->
<!-- main content -->
	<div class="container">
		<section>

			<div class="col-md-12 col-xs-12 col-sm-12">
				<div id="story">
					<h2 class="section-title">Our Story</h2>

					<p class="story-content">
						We love what can happen around the restaurant table. Since 2000, we’ve been committed to empowering that experience. Enabling diners to discover and book the perfect table every time they dine, our story is one of connection—among diners, restaurants, and their communities.
					</p>
					
					<p class="story-content">
						But the table is just the start. Now, we’re growing globally like never before, and continuing to lead the conversation in the tech and restaurant spaces with products that anticipate the changing needs of restaurants and diners.
					</p>
					
					<p class="story-content">
						As we span countries and cultures, we’re very aware of an essential ingredient in making the power of our products possible: you. You are the reason why we work hard to be one step ahead of the moment and what inspires us to embody the true spirit of hospitality. So, pull up a chair and join us.
					</p>
					<br></br>
					
				</div>
		</div>

		
		</section>
	</div>	
	<div class="container-fluid">
		
		<div>
			
		</div>	

	</div>
		<!-- <div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
				<img src="images/dwnd.jpg" class="img-responsive" alt="dine">
				</div>
				<div class="col-md-6">
				<img src="images/Gulalai-ismai.jpg" class="img-responsive" alt="dine"></div>
		 	</div>
		</div>
     -->
     	<div class="container">
		 	<div class="row">
		 		<div class="col-md-12">
		  			<div class="content-center">
		    			 <!-- <div class="col-md-4">  -->
			        <div class="a-img">
			       		 <img src="images/exec-quarles.jpg" class="img-responsive " alt="DineTime1">
				         <div class="details">
		                    <h4>Christa Quarles</h4>
		                    <p>CEO</p>
	                  	 </div>
                 	</div>
			    	<!-- </div>
			    	<div class="col-md-4"> -->
			    	<div class="a-img">
			        	<img src="images/exec-chen.jpg" class="img-responsive " alt="DineTime1">
			        	<div class="details">
		                     <h4>Connie Chen</h4>
                    		 <p>General Counsel</p>
                  		</div>
                  	</div>
			    	<!-- </div>
			    	<div class="col-md-4"> -->
			    	<div class="a-img">
			        	<img src="images/exec-day.jpg" class="img-responsive " alt="DineTime1">
			        	<div class="details">
		                    <h4>Scott Day</h4>
                    		<p>SVP, People &amp; Culture</p>
                  		</div>
                  	</div>
			    	<!-- </div> -->
			    	<!-- <div class="col-md-4"> -->
			        <div class="a-img">
			        	<img src="images/exec-essas.jpg" class="img-responsive " alt="DineTime1">
			        	<div class="details">
		                    <h4>Joseph Essas</h4>
                    		<p>CTO</p>
                  		</div>
                  	</div>

                    </div>
               	</div>
        	</div>
			    	<!-- </div> 
			    	<div class="col-md-4">-->
			<div class="row ">
				<div class="col-md-12">
					<div class="content-center">
			        <div class="a-img">
			        	<img src="images/exec-gune.jpg" class="img-responsive " alt="DineTime1">
			        	<div class="details">
		                    <h4>Prasad Gune</h4>
                    		<p>SVP, Product</p>
                  		</div>
                  	</div>
			    	<!-- </div> -->
			    	<div class="a-img">
			        	<img src="images/exec-jampol.jpg" class="img-responsive " alt="DineTime1">
			        	<div class="details">
		                    <h4>Scott Jampol</h4>
                    		<p>SVP, Marketing</p>
                  		</div>
                  	</div>

                  	<div class="a-img">
			        	<img src="images/exec-johnston.jpg" class="img-responsive " alt="DineTime1">
			        	<div class="details ">
		                  <h4>Andrea Johnston</h4>
                    	  <p>SVP, Global Sales &amp; Restaurant Services</p>
                    	</div>
                  	</div>
				</div>

				</div>
		    </div>
		</div>
	

<!-- end main content -->

<!-- JAVA SCRIPT CODE -->

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
	


</script>

<!--footer part-->
	<?php include("footer.php"); ?>
	<!--end footer-->
	 <!-- body section end -->
 </body>
	
	
</html>