<?php session_start(); 
if(isset($_SESSION['uid']))	
{
	$u_id=$_SESSION['uid'];
	



date_default_timezone_set("America/New_York");





	include('conn.php');
	
// $sql="delete from reserve_table where time("h:i:sa") > $row[end_time]";
// SELECT * FROM `reserve_table` WHERE now()>end_time;
	?>

<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/form-style.css">



<!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
 
<!-- Include Date Range Picker -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">




</head>


<body>
	


  <!-- <input type="text" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" />
 
<script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        }
    });
});
</script>  -->

	  <h1>Table Reservation Form</h1>
   <!-- <div class="info"><a href="https://www.grandvincent-marion.fr" target="_blank"><p> Made with <i class="fa fa-heart"></i> by Marion Grandvincent </p></a></div>
   -->
  <form action="reserve.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
	    <h1>Reserve a Table</h1>
	    <input type="hidden" name="id">
             <input type="hidden" name="uid">
    <div class="contentform">
    	
    	<div class="leftcontact">
			      <div class="form-group">
			        <p>Surname<span>*</span></p>
			        <span class="icon-case"><i class="fa fa-male"></i></span>
				    <input type="text" name="sname" id="nom" required />
                	<div class="validation"></div>
      			   </div> 

            <div class="form-group">
            <p>Name <span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
				<input type="text" name="name"  required />
                <div class="validation"></div>
			</div>
<div class="form-group">
			<p>Phone number <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-phone"></i></span>
				<input type="text" name="phone" data-rule="maxlen:10" required />
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Address <span>*</span></p>
			<span class="icon-case"><i class="fa fa-location-arrow"></i></span>
				<input type="text" name="address" id="adress" required />
                <div class="validation"></div>
			</div>
			
		</div>

		<div class="rightcontact">	

			<div class="form-group">
			<p>City <span>*</span></p>
			<span class="icon-case"><i class="fa fa-building-o"></i></span>
				<select class="se" name="city">
					<option>Mumbai</option>
					<option>Delhi</option>
					<option>Pune</option>
					<option>Ahemdabad</option>
					<option>Jaipur</option>
					<option>Jamnagar</option>

				</select>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
			<p>People <span>*</span></p>
			<span class="icon-case"><i class="fa fa-group"></i></span>
				<select class="se" name="people">
					<option value="1">1 pepole</option>
					<option >2 pepole</option>
					<option>4 people</option>
					<option>5 people</option>
					<option>6 people</option>
					<option>7 people</option>
					<option>8 people</option>
					<option>9 people</option>
					<option>10+ people</option>
				</select>
                <div class="validation"></div>
			</div>	
			<!-- <div class="form-group">
			<p>Date <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-Date"></i></span>
                <input type="date" name="date" id="date" data-rule="date" required />
                <div class="validation"></div>
			</div>	 -->
			
			<!-- <div class="form-group">
			<p>Time <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-Time"></i></span>
                <input type="text" name="time" id="time" data-rule="time"  required />
                <div class="validation"></div>
			</div>	 --><!-- 
			<div class="form-group">
			<p>People <span>*</span></p>
			<span class="icon-case"><i class=""></i></span>
				<input type="text" id="demo" name="time" />

				<script type="text/javascript">
					$('#demo').daterangepicker({
					    "singleDatePicker": true,
					    "showDropdowns": true,
					    "showWeekNumbers": true,
					    "timePicker": true,
					    "startDate": "04/14/2018",
					    "endDate": "04/20/2018"
					}, function(start, end, label) {
					  console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
					});


				</script> -->









				<!-- 

 <fieldset>
            <legend>date time</legend>
            <div class="form-group">
              
                <div class="input-group date form_datetime col-md-11" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" >
                    <input class="form-control" size="16" name="time" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				
            </div>
			
			
        </fieldset> -->




           
    
<div class="container">
    <div class="row">
        <div class='col-sm-2'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="time" class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>










                <div class="validation"></div>
			</div>	
		
		</div>
	</div>

	<button type="submit" class="bouton-contact"> Check Availiblity</button>

</form>	
<script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	
</script>

</body>
</html>
<?php
 }
	else{
		
		header("location:login.php");
	}
 ?>