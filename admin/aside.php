 <?php 
session_start();
include("conn.php");

if(!isset($_SESSION["login"]))
{
  header("location:login.php");
} 
else
{ 

  $val=$_SESSION["login"];
  if($val == "yes")
  {
?>

 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	 <!--  <p class="centered"><a href="profile.php"><img src="images/tete-restaurant-vector-logo copy.png" style="height: 100px; width: 150px;" class="img-circle" width="60"></a></p>
              	  <h1 class="centered">Marcel Newman</h1> -->
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                
                  
                 
                  
                  <li class="sub-menu">
                      <a class="" href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>user Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="user_table.php">User Table</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a class="" href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Restaurent Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="rest_table.php">Restaurent Table</a></li>
                          <!-- <li class="active"><a  href="add_menu.php">Add restaurent</a></li> -->
                      </ul>
                  </li>

                   <li class="sub-menu">
                      <a href="reserved.php">
                          <i class="fa fa-th"></i>
                          <span>Reserved Tables</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="" href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>menu Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="menu_table.php">Menu Table</a></li>
                          <li class="active"><a  href="add_menu.php">Add menu</a></li>
                      </ul>
                  </li>
                
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <?php
  }
  else
  {
    header("location:login.php");
    
  }
} 
  ?>