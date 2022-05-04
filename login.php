<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   
    
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/form_css.css">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">

    <meta charset="utf-8">
    
   <!--  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    Bootstrap core CSS
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <!-- <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    Custom styles for this template
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet"> --> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <div class="popup-content1">
          <div class="modal-header">
            <span class="close">&times;</span>
              SIGN IN
          </div>
          
         
            <div class="agile-tb">

           
          <form action="sign_in.php" method="POST">       
          <input placeholder="Email Address" name="email" type="email" required=""> 
          
          <input placeholder="Password" name="password" type="password" required="">  
          
          <a href="#" class="frgt-pwd">Forgot Password ?</a>
          

          <input type="submit" name="submit" value="Sign in"/>
        </form>
              </div>
          </div>  
        </div>

      </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("images/login.jpg", {speed: 500});
    </script>


  </body>
</html>
