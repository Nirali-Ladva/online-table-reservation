<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DineTime</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>DineTime</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <!--sidebar end-->
      <?php include("aside.php");  ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <!-- <h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3> -->
        <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Restaurents</h4>
                            <hr>
                              <thead>
                              <tr>
                                   <th> id </th>
                                    <th>User id</th>
                                     <th>Surname</th>
                                     <th>Name</th>
                                     <th>Start Time</th>
                                     <th>End Time</th>
                                     <th>City</th>
                                     <th>People</th>
                                     <th>Mobile No.</th>
                                     <th>Address</th>

                              </tr>
                              </thead>
                              <tbody>
        <?php
        
        include("conn.php");
        $sql = "Select * from reserve_table";
        $result =mysql_query($sql,$conn);
        $id=0;
        
        while($row = mysql_fetch_array($result)) 
        {
          $id++;
    
      ?>
      
     
      <tr>
        
        <td><?php echo $id; ?></td>
        <td><?php echo $row['uid']; ?></td>
        <td><?php echo $row['sname']; ?> </td>
        <td><?php echo $row['name']; ?> </td>
        <td><?php echo $row['time']; ?> </td>
        <td><?php echo $row['end_time']; ?></td>
        <td><?php echo $row['city']; ?> </td>

        <td><?php echo $row["people"]; ?></td>
        <td><?php echo $row['phone']; ?> </td>
        <td><?php echo $row['address']; ?> </td>


        <td>
           
           <!-- <a href="edit_rest.php?id=<?php  echo $row[0];?>"> <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button> -->
            <!-- <a href="delete_rest.php?id=<?php  echo $row[0];?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a> -->
       </td>
        
     
      </tr>
      
        <?php } ?>
                             
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
     
      <!--footer end-->
  </section>
 
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
<!-- <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="basic_tablephp#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer> -->
  </body>
</html>
